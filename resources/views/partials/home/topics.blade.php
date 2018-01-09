<h2 class="text-center color-primary mb-2 wow fadeInDown animation-delay-4">{{ trans('navbar.topic') }}</h2>
<br>


<div class="panel panel-light panel-flat" id="topics">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-tabs-transparent indicator-primary nav-tabs-full nav-tabs-5" role="tablist">
        <li class="wow fadeInDown animation-delay-6" role="presentation">
            <a href="#communication-techniques" aria-controls="windows" role="tab" data-toggle="tab" class="withoutripple">
                <i class="fa fa-circle" style="color: #99BCCC;"></i>
                <span class="hidden-xs">Tudásalapú érdekképviselet</span>
            </a>
        </li>
        <li class="wow fadeInDown animation-delay-4 active" role="presentation">
            <a href="#developing-competencies" aria-controls="macos" role="tab" data-toggle="tab" class="withoutripple">
                <i class="fa fa-circle" style="color: #537690"></i>
                <span class="hidden-xs">Teremtő vezetés</span>
            </a>
        </li>
        <li class="wow fadeInDown animation-delay-2" role="presentation">
            <a href="#stress-sticking" aria-controls="linux" role="tab" data-toggle="tab" class="withoutripple">
                <i class="fa fa-circle" style="color: #265F8D"></i>
                <span class="hidden-xs">Stresszkultúra</span>
            </a>
        </li>
        <li class="wow fadeInDown animation-delay-4" role="presentation">
            <a href="#life-crises" aria-controls="android" role="tab" data-toggle="tab" class="withoutripple">
                <i class="fa fa-circle" style="color: #5C717A"></i>
                <span class="hidden-xs">Cél-feladat folyamat</span>
            </a>
        </li>
    </ul>
    <div class="panel-body">
        <!-- Tab panes -->
        <div class="tab-content mt-4">
            <div role="tabpanel" class="tab-pane fade" id="communication-techniques">
                <div class="row">
                    <div class="col-md-6 col-md-push-6">
                        <img src="/img/topics/stresszben-ragadas.jpg" style="width: 44%;" alt="" class="img-responsive animated zoomIn animation-delay-8 pull-right"> </div>
                    {{--<img src="/img/topics/asszertiv.jpg" alt="" class="img-responsive animated zoomIn animation-delay-8 pull-right"> </div>--}}
                <div class="col-md-6 col-md-pull-6">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Tudásalapú érdekképviselet</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">A tudásalapú érdekképviselet szóösszetételét tekintve a valós önismereten alapuló gyakorlatias gondolkodás. Máskülönben egy szükséges feltételrendszer is, ahol az egyik a másik nélkül nehezen tud mentális egyensúlyt teremteni. Ha nem világos/egyértelmű, hogy milyen keretek között, mi és/vagy ki mellett köteleződünk el, akkor az sem lehet világos/egyértelmű, hogy valóban azt a termést „zsákmányoljuk” be, ami valóban a javunkat szolgálja.                    </p>
                    <div class="">
                        <button class="btn btn-primary btn-raised" data-toggle="modal" data-target="#myModal01" style="background: #99BCCC;"><i class="zmdi zmdi-info"></i>  {{ trans('button.next') }}</button>
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane active in fade" id="developing-competencies">
            <div class="row">
                <div class="col-md-6">
                    <img src="/img/topics/vezetoi-kompetenciak.jpg" alt="" class="img-responsive wow animated zoomIn animation-delay-8" style="max-height: 360px;"> </div>
                <div class="col-md-6">
                    <h3 class="text-normal wow animated fadeInUp animation-delay-4">Teremtő vezetés</h3>
                    <p class="lead lead-md  wow animated fadeInUp animation-delay-6">Vállalatoknál, cégeknél az értékteremtő stratégia része lehet a vezetői felhatalmazással szerveződő munkacsoportok komplex, problémamegoldó aktivitása, ahol a rendszer rugalmas erőforrásként használja a dolgozó motivációit és mentális egészségét.</p>
                    <p class="lead lead-md wow animated fadeInUp animation-delay-7">A komplex szervezeti működésnél a vezetés sémái és módszertana már túlmutat azokon a rutinokon, ahol jellemzően fentről - külső kontroll - irányítják lefelé...</p>
                    <div class="">
                        <button class="btn btn-primary btn-raised" data-toggle="modal" data-target="#myModal02" style="background: #537690;"><i class="zmdi zmdi-info"></i>  {{ trans('button.next') }}</button>
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="stress-sticking">
            <div class="row">
                <div class="col-md-6 col-md-push-6">
                    <img src="/img/topics/eletkozepi-valsaga.jpg" alt="" class="img-responsive animated zoomIn animation-delay-8 pull-right" style="max-height: 360px;"> </div>
                <div class="col-md-6 col-md-pull-6">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Stresszkultúra</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">A stressz az életünk része, elkerülhetetlen társ a mindennapokban. Amikor akcióba kezd, akkor a személyiségünk szűrőjén keresztül a testünk és lelkünk azonnali reakcióba lép, aktiválja az alkalmazkodó képességünket.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">Általánosságban akkor beszélünk stresszről, amikor a környezetünkből beáramló kényszer, megterhelés vagy lehetőség meghaladja az erőforrásainkat, azaz, úgy értelmezzük...</p>
                    <div class="">
                        <button class="btn btn-primary btn-raised" data-toggle="modal" data-target="#myModal03" style="background: #265F8D"><i class="zmdi zmdi-info"></i>  {{ trans('button.next') }}</button>
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="life-crises">
            <div class="row">
                <div class="col-md-6">
                    <img src="/img/topics/eletkozepi-valsag.jpg" alt="" class="img-responsive animated zoomIn animation-delay-8" style="max-height: 360px;"> </div>
                <div class="col-md-6">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Cél-feladat folyamat</h3>
                    <p class="lead lead-md  animated fadeInUp animation-delay-6">Életünk során számos olyan esemény, szituáció, határhelyzet felbukkan, amelyek a változás lehetőségét kínálják, még a legsúlyosabb krízisekben is benne van a pozitív kimeneteli állapot.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">Ha olyan begyakorolt technikával kívánjuk megoldani a kialakult élethelyzetet, amelyek már előtte sem hozták a várt eredményt vagy nem adtak tartós megoldást, nagy eséllyel ekkor sem lesz másképpen.</p>
                    <div class="">
                        <button class="btn btn-primary btn-raised" data-toggle="modal" data-target="#myModal04" style="background: #5C717A;"><i class="zmdi zmdi-info"></i>  {{ trans('button.next') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<div class="modal modal-primary" id="myModal01" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog animated zoomIn animated-3x" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                <h3 class="modal-title" id="myModalLabel6"><strong>Tudásalapú érdekképviselet</strong></h3>
            </div>
            <div class="modal-body">
                <p>A tudásalapú érdekképviselet szóösszetételét tekintve a valós önismereten alapuló gyakorlatias gondolkodás. Máskülönben egy szükséges feltételrendszer is, ahol az egyik a másik nélkül nehezen tud mentális egyensúlyt teremteni. Ha nem világos/egyértelmű, hogy milyen keretek között, mi és/vagy ki mellett köteleződünk el, akkor az sem lehet világos/egyértelmű, hogy valóban azt a termést „zsákmányoljuk” be, ami valóban a javunkat szolgálja.</p>
                <p>Ahhoz, hogy számunkra előremutató kapcsolódásokat, üzleteket, megállapodásokat, emberi viszonyokat hozzunk létre, szükséges a meglévő tudásunkat és a valós vágyainkat is segítségül hívni. Ismerős lehet az érzés, amikor „befagy” a rendszer és a belső műszerfalon megjelenik: „hibásan álltam ki magamért”, „a megállapodás számomra hátrányos”, tehetetlen vagyok a rendszerrel szemben”, „bizonytalansági állapotban maradtam”, „nem így akartam”. Ennek következtében komoly belső feszültségek is kialakulhatnak, amelyeket szépen át is transzformálunk a saját pozitív énképünk védelme érdekében. Az is egy lehetőség, ha a kialakult feszültséget nagyon szépen megköszönjük a belső „paneljeinknek”, hiszen a valódi személyiségünk így üzen annak az énképegyezménynek, amit mások elvárásai miatt vagy éppen a magunk csodálatára alakítottunk ki.
</p>
                <p>A belső felszólalásaink indítványozzák a meglévő tudásunk aktualizálást a fejlődés és a teljesebb élet reményében. A tanulás nélkülözhetetlen alapja a valós önismeret, ahol értjük a saját történetünket, és azt is, hogy hogyan jutottunk el a kialakult élethelyzetig. Itt nem a pszichoanalitikus, egészen mély önismereti analízisekre gondolok, ahol jellemzően a múltban van az időhorizont. A coaching, szupervízió vagy segítő beszélgetés kompetenciái egyértelműen a jelenből a jövőbeli szándékok és célok felé irányulnak. A tapasztalatokból kinyert információk feldolgozására fókuszálunk, és új pozitív, a magunk javára használható mintázatokat építünk. De pusztán örömből, preventív szándékkal is lehet a pozitív eseményeket elemezni, a meglévő jókat karbantartani, vagy az önmagunk vállalását, az asszertív magatartást a kommunikációnkon keresztül fejleszteni.
</p>
                <p>Saját magunk megdolgozásával lehet tartós eredményt elérni, és kitörni a gátló sémákból, amelyek az attitűdök mögött rejtőznek el. A viselkedés egy részét korrigálni, vagy csak a kommunikációinkat fejlesztgetni önmagában sokszor kevés az érdekeink hatékony képviseletéhez. A sport műfajában is léteznek gyorstalpaló, divatos edzésformák, van ahol 20-25 perces (elektro)stimulációval ígérnek valamilyen csodát.  Persze dönthetünk a heti több alkalmas, valamilyen kemény és rendszeres mozgásforma mellett is, amelyek valós életviteli változásokat képesek indukálni, és mellékhatásként segíti az öntanulást, önszabályozást fejleszteni.
</p>
                <p>Ha elfogadjuk, hogy jogunk van eldönteni, hogy mire és mennyi ideig vagyunk „használhatóak”, ha elviseljük az egyéni szabadságunknak azt a terhét, hogy nincs korlátozva, hogy kivel és milyen kapcsolati kötéseket alakítunk ki az életünkben, és egyben tudomásul vesszük, hogy ezekkel a jogokkal a másik fél is rendelkezik, akkor az életünk során kialakuló formális vagy informális szövetségeket, kapcsolatokat összetartó kötőanyag kialakítása az érdekképviseleti folyamat. 
</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('button.close') }}</button>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-primary" id="myModal02" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog animated zoomIn animated-3x" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                <h3 class="modal-title" id="myModalLabel6"><strong>Teremtő vezetés</strong></h3>
            </div>
            <div class="modal-body">
                <p>Vállalatoknál, cégeknél az értékteremtő stratégia része lehet a vezetői felhatalmazással szerveződő munkacsoportok komplex, problémamegoldó aktivitása, ahol a rendszer rugalmas erőforrásként használja a dolgozó motivációit és mentális egészségét. A komplex szervezeti működésnél a vezetés sémái és módszertana már túlmutat azokon a rutinokon, ahol jellemzően fentről - külső kontroll - irányítják lefelé, a látens dolgozói ellenállás irányába a teljesítmény és a mennyiségi növekedést. Teremtő, azaz komplex tudású vezetésnek gondolom, ha a vezető folyamatosan képes szélesíteni a kompetenciatartományát úgy, hogy tudatosan felismeri a fejlesztésre szoruló területeit, és mindeközben mentálisan is bírja bővíteni az érzelmi tudását. Ha a vezető elfordul önmaga fékező korlátainak a felismerésétől, és folyamatosan az önigazolást keresi, akkor a komplex tudás szándéka azonnal megfeneklik, és hamis vezetői idolként fog tetszelegni, de leginkább már csak saját maga előtt. Ha elfogadjuk, hogy a vezetés nívópálcáján egy szükséges faktor az önfejlesztő tevékenység, akkor a vezetői szerepek úgy alkalmazkodnak a vezetés folyamatához, hogy közben a személyiség is fejlődik. A fejlődésének gátja lehet, ha a vezető, ha sokszor öntudatlanul is, de „kimenekül” munkafeladatainak pszichológiai és mentális kihívásai elől.
</p>
                <p>A tiszta és transzparens munkahelyi kapcsolatok aktiválják, illetve felerősítik az egyéni konstruktív erőforrásokat, azaz a dolgozói motivációt. Egy szervezetnél az ismétlődő feladatok bonyolult rendszere számos vezetői játszmát képes eltakarni. Ezek a játszmák sok esetben nem tudatosak, egyszerűen hordozza a személyiség, de ettől még működési zavart és feszültséget okoznak a vezetés környezetében. Előfordulhat, hogy a vezető egy elvégzendő feladatra hivatkozva leginkább csak saját felelősségét delegálja, ráadásul még a kontroll korlátaiba is két kézzel kapaszkodik. Belső bizonytalanságainkat és félelmeinket leplezzük ezekkel a játszmákkal. Több sikert érhet el a vezetés, ha nem uralni, hanem elsődlegesen értelmezni szeretné interperszonális környezetét, így hitelesebbé válik a felkínált dolgozói működési önállóság. Megértés nélkül tovább menni olyan, mint víz nélkül elindulni a sivatagba, mindenképpen ki fogunk száradni, csak azt nem tudjuk, hogy mikor és hol, de biztosan be fog következni. A minőségi fejlődéshez a változást úgy lehet megteremteni, ha elfogadjuk, a saját felelősségünket, még akkor is, ha annak ránk vonatkozó érzelmi részét nem szeretjük. A legnagyobb kincsesbánya a saját élmény megdolgozásában van, így ezek az érzelmi beazonosítások beépített ügynökként segítik a megértést és az élmények kezelését.
</p>
                <p>A minőségi üzleti előrehaladást segíti, ha a vezetés transzparensen különbséget tud tenni a hatékonyság és a túlfeszítés között. Ha folyamatosan túlfeszíti saját magát és/vagy a szakmai környezetét a hatékonyság vágyától vezérelve, egy idő után éppen az ellenkező hatás fog bekövetkezni, kiégnek a dolgozói energiaforrások, elapad az egyéni motiváció. Az állandó feszítő állapot keményen szorongató és frusztráló, mivel a figyelem a kényszer okán elfordul olyan másik fontos életfeladatról, ami éppen a megnyugvást hozná. Fontos vezetői kompetencia, hogy ismerje, és menedzselni is tudja azt a megterhelődést, amit a saját és szakmai környezetének az aktuális teherbíró képességére nehezedő feladatsorozatok nyomása okoz. A szemléletváltás, a megszokottól való eltávolodás, a régi rutinok megugrása segíthetik a vezetőt, hogy túlhaladja önmagát, és a komplex tudással nemcsak a gazdasági, termelési és egyéb racionális elvek mentén, hanem már a pszichológiai, mentális és érzelmi szempontok, összefüggéseit is figyelembe tudja venni a munkaszervezetet érintő döntéseinél.
</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('button.close') }}</button>
            </div>
        </div>
    </div>
</div>

<div class="modal modal-primary" id="myModal03" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog animated zoomIn animated-3x" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                <h3 class="modal-title" id="myModalLabel6"><strong>Stresszkultúra</strong></h3>
            </div>
            <div class="modal-body">
                <p>A stressz az életünk része, elkerülhetetlen társ a mindennapokban. Amikor akcióba kezd, akkor a személyiségünk szűrőjén keresztül a testünk és lelkünk azonnali reakcióba lép, aktiválja az alkalmazkodó képességünket. Általánosságban akkor beszélünk stresszről, amikor a környezetünkből beáramló kényszer, megterhelés vagy lehetőség meghaladja az erőforrásainkat, azaz, úgy értelmezzük, hogy a mentális vagy fizikai jólétünket valamilyen külső körülmény veszélyezteti. A személyiség egy szabályozó rendszer, ami a szervezetünk és a környezetünk viszonyát határozza meg. Önmagunk is lehetünk a stressz forrása, amikor belső túlterhelés következik be vágyaink és motívumaink konfliktusában. Testünknek láthatatlan védelmi panelje a beérkező információakt érzésekké transzformálja, így képes „hiba” üzenetet küldeni működésünkről, ezért fontos jól beazonosítani az észlelt stresszreakciókat.
</p>
                <p>Stresszállapotban megtapasztalunk számos testi változást (pl. intenzívebb légzés, izzadás, gyorsabb szívverés), illetve megélünk lelki reakciókat is, melyek jellemzően szorongások formájában jelennek meg. Léteznek kikerülhetetlen, vagy olyan bejósolhatatlan életesemények, amelyek kemény próbatétel elé állítják személyiségünket, hogy miként vagyunk képesek a kialakult viszontagságokkal megküzdeni. Az is megállapítható, hogy stressz nélkül nincs létezés, és téves szándék a túlzó „stresszmentes” élet irányába való elmozdulás. Részben azért, mert az európai világunkban nagyon nehezen megoldható ez a „furcsa” állapot, részben azért, mert a stressz csodálatos védelmet tud biztosítani, így a személyiségünk elszegényedne nélküle. Ez utóbbi minimális feltétele, hogy ne ellenségként tekintsünk rá, a stressz önmagában nem ártalmas az egészségre.
</p>
                <p>Egy nézőpont, hogy a stressz energizál, különböző cselekvésekre készít fel. Ha egy stresszreakcióra pozitívan tekintünk, például, amikor intenzívebben lélegezünk, akkor több oxigén jut az agyba, ez pedig előnyös a bekövetkező teljesítmény szempontjából. Ha tudatosabban tekintünk a stresszre, és elfogadjuk jótékony hatását, akkor a stresszhormonok megjelenése valóban képesek a javunkat szolgálni. A stressz hatására a „szeretethormon” is kikéri a részét, csak rajtunk múlik, hogyan is élünk vele. Serkenti a szocializációs aktivitásunkat, arra ösztönöz, hogy olyan támogató közeggel vegyünk körbe magunkat, ahol törődnek velünk. A társas kapcsolódások pedig felerősítik a test regenerációs képességét, és óv a stresszben-ragadás negatív következményeitől, például, a szív- és érrendszer véredényei befeszülés helyett lazább állapotban maradnak.
</p>
                <p>Eredendően társas lények vagyunk, így nélkülözhetetlen számunkra az emberi kapcsolatok jelenléte, azok visszajelzése határozza meg, hogy kik is vagyunk valójában, mit mutatunk a világ felé. Ha olyan feladatokban teljesítünk, amelyek valóban értelmet adnak az életünknek, akkor azok bizonyosan az életminőségünk javát szolgálják. Egy másik perspektíva szerint a stressz voltaképpen segít közelebb kerülni saját magunkhoz, illetve segít közelebb kerülni másokhoz. Ha úgy választjuk meg tevékenységeinket, hogy minél kevesebb stresszt tapasztaljunk meg, akkor ezzel még a személyiségünk fejlődését is fékezzük. Természetesen akadnak olyan életciklusok, amikor éppen erre a lassító, megfigyelő stratégiára van szükség, ezért ez is egy fontos, nélkülözhetetlen alternatíva.  
</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('button.close') }}</button>
            </div>
        </div>
    </div>
</div>


<div class="modal modal-primary" id="myModal04" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog animated zoomIn animated-3x" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                <h3 class="modal-title" id="myModalLabel6"><strong>Cél-feladat folyamat</strong></h3>
            </div>
            <div class="modal-body">
                <p>Életünk során számos olyan esemény, szituáció, határhelyzet felbukkan, amelyek a változás lehetőségét kínálják, még a legsúlyosabb krízisekben is benne van a pozitív kimeneteli állapot. Ha olyan begyakorolt technikával kívánjuk megoldani a kialakult élethelyzetet, amelyek már előtte sem hozták a várt eredményt vagy nem adtak tartós megoldást, nagy eséllyel ekkor sem lesz másképpen. Ugyanazt a vezérlést használjuk, csak picit erősebben, kicsit hangosabban „toljuk” a régi kliséket. Érzékeljük, hogy ismét nem úgy sikerült, ahogy azt kigondoltuk és pár „kitörési” kísérlet után befejezzük, és kiállítjuk az igazoló nyugtát: „Én mindent megtettem!”.
</p>
                <p>Egy rövid időre megengedjük magunknak, hogy ezt átfogalmazzuk? „Amire most képes voltam, azt megtettem!” Egy gondolat erejéig meghallgatunk egy másik nézőpontot? „Lehet, hogy még nem készültem fel teljesen a változásra, de arra már igen, hogy megtörténjen.” Ahogy értelmezünk egy eseményt, egy jelenséget, akár vitát, azt érzelmileg is úgy fogjuk megélni. Ha csak a saját igazságunkat vesszük figyelembe, akkor egyszerűen beleragadhatunk ebbe az érzelmi állapotba, ami pedig belső feszültséget, frusztrációt generál, és persze nagy eséllyel megbénítja a cselekvést.
</p>
                <p>Az emberi lét különböző szakaszaiban, a személyiség fejlődésével párhuzamosan sokszor kibontakozik az igény, hogy energiáink egy részét más feladatokba fektessük, és így az újonnan kialakuló értékek már befolyásolják, hogy miként gazdálkodjunk az erőforrásokkal, milyen fontossági sorrendet válasszunk. Az elért célok újabb vágyakat jeleníthetnek meg, s akár ellentétes irányú, újabb célok is megszülethetnek. Sokszor nem a feladatok tömege, mértéke okozza a legnagyobb megküzdési problémát, hanem a változással járó belső feszültségek és bizonytalanságok elviselésének a terhe. Ezekbe bele lehet roppanni. Valós önvizsgálattal, önmagunk elfogadásával megtalálhatóak a fejlesztésre szoruló területek. Ha valamilyen szükséges feladatra, problémára nincs megfelelő megoldási mintázatunk, akkor az beszerezhető, megtanulható, de a tanulás időszakára „bérbe” is vehető, megvásárolható akár egy coachtól vagy tanácsadótól.
</p>
                <p>Céltudatos az az ember, aki tudatosítja magában, hogy milyen célt határozott meg. A tudatossággal pedig követi a kijelölt feladatokat, önreflexiókkal kíséri az utat a cél felé, és ha szükséges, akkor segít pontosítani vagy akár módosítani a kitűzött célt és/vagy struktúrát, szempontrendszert.
</p>
                <p>Tekinthetünk a változásokra kihívásként, fenyegetésként vagy lehetőségként, a kialakult nézőpont pedig hat a reakcióinkra. Ha a feladat-folyamatban csak az erősségeinkre koncentrálunk, akkor azok egy idő után pont az ellenkező hatást fogják kiváltani. A reziliencia képessége az alkalmazkodási rugalmasság, amely segíti menedzselni a nehézségeket, így a cél megvalósulásához szükséges összetevőket egyensúlyba tudjuk hozni. Nemcsak a konfliktuskezelés fejlesztése fontos, hanem a konfliktusok megelőzésének a képessége is. Ehhez fontos felismerni, elfogadni, hogy viselkedésprogramunk egy része elérte a működésének a határát, ennek következtében új megoldásokat szükséges integrálni a meglévő tudásba. A nemtudás is a cél-folyamat része. Egyedül nem megy, és a működéshez szükséges kialakítani magunk körül azokat a támogató rendszereket, amelyeket segítségül lehet hívni azokban a kérdésekben, ahol kisebb a jártasságunk. A rezileinca jelentősége, hogy úgy tudunk megoldani egy nehézséget, hogy közben képesek vagyunk fejlődni.
</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('button.close') }}</button>
            </div>
        </div>
    </div>
</div>

