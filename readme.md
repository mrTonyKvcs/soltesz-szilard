# Soltész Szilárd weboldala

Laravel 13, PHP 8.5, MySQL 8.0. A magyar és angol URL-ek, a meglévő tartalmak és a Blade-alapú megjelenés megmaradnak.

## Helyi indítás

A `compose.yaml` saját adatbázist és Mailpit levélfogadót indít. A meglévő Docker-projektek adatbázisait nem módosítja. Az alábbi importot új, üres helyi adatbázison futtasd: az SQL dump `DROP TABLE` utasításokat is tartalmaz.

```sh
# Új checkout esetén:
cp .env.example .env
# macOS-on az alap UID/GID 501:20; más gépen állítsd be a saját azonosítóidat:
export LOCAL_UID=$(id -u)
export LOCAL_GID=$(id -g)
docker compose up -d --build
docker compose exec app composer install
docker compose exec app php artisan key:generate
npm ci
npm run build
# Várd meg, amíg a database szolgáltatás healthy állapotú:
docker compose ps
docker compose exec -T database mysql -usoltesz -plocal-soltesz soltesz < /Users/tony/Code/backups/soltesz.sql
docker compose exec app php artisan migrate --force
docker compose exec app php artisan storage:link --force --relative
```

Meglévő `.env` esetén tartsd meg az `APP_KEY` értékét. Az `artisan migrate` a mentésben hiányzó session- és cache-táblákat hozza létre; a tartalomtáblákat és a felhasználókat nem írja felül.

- Weboldal: http://localhost:8186
- A meglévő helyi domain: http://solteszszilard.test (a helyi Nginx PHP 8.5-re átállítva)
- Admin: http://localhost:8186/admin
- Helyben elkapott levelek: http://localhost:8029

A helyi Compose-környezet minden levelet a Mailpitbe küld. Külső SMTP-kézbesítéshez a telepítési környezetben állítsd be a `MAIL_MAILER`, `MAIL_HOST`, `MAIL_PORT`, `MAIL_USERNAME`, `MAIL_PASSWORD`, `MAIL_SCHEME` és `MAIL_FROM_ADDRESS` értékeket. A látogató e-mail-címe a `Reply-To` mezőbe kerül. A régi `MAIL_DRIVER` változó is támogatott.

## Ellenőrzés

```sh
docker compose exec app php artisan test
npx playwright install chromium
npm run test:e2e
npm run test:e2e:report
```

A PHP-tesztek SQLite memóriabeli adatbázist és levélfogadót használnak. A böngészős tesztek az importált helyi MySQL-adatokat olvassák, ideiglenes adminfiókot és saját tesztadatokat hoznak létre, majd eltávolítják azokat. Az eredeti admin jelszavát nem módosítják. A futtatás kizárólag a Compose `local` környezetében engedélyezett. A jelentés a `playwright-report`, a képek és hibakeresési nyomok a `test-results` könyvtárban találhatók; ezek személyes adatokat is tartalmazhatnak, ezért Gitből kizártak.

A tesztek ellenőrzik a publikus oldalakat, az importált aktív olvasmányokat és eseményeket, a sitemap hivatkozásait, az adminbelépést és kijelentkezést, a jogosultságvédelmet, a szövegszerkesztőt, a képfeltöltést, az eseménydátumokat, a jelentkezést és a jelszó-visszaállítást.

A 2026-10-23-i ellenőrzés eredménye: Laravel **13.38.0**, PHP **8.5.12** a saját Compose-környezetben és PHP **8.5.8** a meglévő helyi domainen; **29 PHP-teszt / 130 ellenőrzés** és **6 Chromium-teszt** sikeres. A böngészős tesztcsomag a 8186-os címen és a `solteszszilard.test` domainen is végigment. A meglévő domainen a lokalizált útvonalcache, a 3 MiB-os képfeltöltés, a session törlése utáni emlékezz-rám belépés és a CSRF-elutasítás is ellenőrizve. A Composer- és npm-audit nem jelzett ismert sérülékenységet.

Az importált 28 olvasmány, 36 esemény, 48 jelentkező és az 1 eredeti felhasználó megmaradt. Az eredeti admin jelszóhash-e megegyezik a dumpban szereplővel; a böngészős tesztek ideiglenes adminfiókkal futottak, amelyet a tesztadatokkal együtt eltávolítottunk. A levelezési ellenőrzés helyi Mailpittel történt.

A frissítés előtti Git-verziót külön Laravel 5.3 / PHP 7.3 környezetben is elindítottuk, és 132 asztali/mobil oldal- és állapotnézetet közvetlenül összehasonlítottunk a frissített változattal. 116 esetben nem volt jelzett képi eltérés; 16 esetben dokumentált hibajavítás látszik (hiányzó kép ikonja, olvasható validációs üzenet, korábban üres admincím vagy eseménynév, dátum hozzáadása). A javítások után a kártyanézet, a képek helye, az admin kisbetűmérete, a törlésgomb és a szerkesztő formázóeszközei/mobilmenüje is az eredeti elrendezést követi. A részletes helyi képpárok a `storage/framework/testing/visual-parity-report/index.html` jelentésben találhatók; ez a könyvtár Gitből kizárt. Az ideiglenes összehasonlító szervert, adatbázist és tesztfiókot eltávolítottuk.

## Futtatás és telepítés

PHP 8.5 és a Composer által ellenőrzött PHP-bővítmények szükségesek, továbbá `pdo_mysql`, `gd`, `intl` és `zip`. A dokumentumgyökér a `public` könyvtár. A `storage` és `bootstrap/cache` legyen írható a PHP-folyamat számára.

```sh
composer install --no-dev --optimize-autoloader
npm ci
npm run build
php artisan migrate --force
php artisan storage:link --force --relative
php artisan config:cache
php artisan view:cache
```

A fordítás a helyben kiszolgált adminfüggőségeket másolja a `public/vendor` alá; ezt a könyvtárat a telepítéskor is elő kell állítani. A korábbi publikus CSS/JS csomagok megmaradnak. A TinyMCE helyi, GPL-licencű kiadását használjuk, külső API-kulcs és prémium bővítmények nélkül.

A lokalizált útvonalak a kérés nyelvéhez igazodnak, ezért hagyományos `route:cache` helyett a csomag `route:trans:cache` parancsát használd. Publikus regisztráció nincs; minden felhasználói fiók adminhozzáférést ad.

A Forge megszakítás nélküli telepítésének szkriptje: `ops/forge/deploy.sh`. A site PHP-verziója 8.5 legyen. Élesben `APP_ENV=production`, `APP_DEBUG=false`, `APP_URL=https://solteszszilard.hu` és `SESSION_SECURE_COOKIE=true` szükséges. A megadott Mailgun API-alapú levelezéshez `MAIL_MAILER=mailgun`, `MAILGUN_DOMAIN`, `MAILGUN_SECRET` és szükség esetén `MAILGUN_ENDPOINT` állítandó be. A címzett a `MAIL_SUPPORT_ADDRESS`, ennek hiányában a régi `MAILGUN_TO` értéke. A kulcsok, adatbázismentések és éles környezeti fájlok nem kerülnek Gitbe.

A korábbi feltöltött képekhez a `storage/app/public/images` tartalmát is másold át: az SQL-mentés a képfájlokat nem tartalmazza. A hiányzó képeket az oldal nem jeleníti meg törött képként; a meglévő adatbázis-hivatkozások megmaradnak. Jelenleg két korábbi fájl hiányzik:

- `public/img/topics/reziliencia.jpg`
- `storage/app/public/images/trainings/rendszerallitascsaladallitas-megoldasorientalt-egyeni-tanacsadas.png`

A gép korábbi, közös helyi Nginx-környezete a `php85` konténert használja; ez a `soltesz-laravel13_default` hálózathoz is csatlakozik az elkülönített adatbázis és Mailpit eléréséhez. A saját Compose-környezet ezzel párhuzamosan a 8186-os porton érhető el. A korábbi helyi Nginx- és `.env` beállítások biztonsági másolata a `/tmp/solteszszilard-nginx-before-laravel13.conf` és `/tmp/soltesz-env-before-laravel13.env` fájlban található.
