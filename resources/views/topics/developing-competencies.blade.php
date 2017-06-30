@extends('layouts.app')
@section('content')
<div class="material-background"></div>
<div class="container">
    <div class="row">
	    <div class="col-md-12">
	        <div class="card animated materialUp animation-delay-5" ">
	            <div class="card-block card-block-big ">
	                <h1 class="no-mt ">{{ trans('navbar.developing-competencies') }}</h1>
	                <hr>
	                <h3 class="color-primary ">Néhány felhasználási terület</h3>
	                <ul>
		                <li>Vezetői döntési folyamatokban az elakadások kezelésére</li>
		                <li>Hatékonyság növelése, cél-feladat orientáció fejlesztése</li>
		                <li>Emberi erőforrás terén a 3M (Megtalálni, Megszerezni és Megtartani) modell segítségével versenyelőnyt generálni</li>
		                <li>Vállalti kultúra erősítése</li>
		                <li>A cég növekedés üteme összhangba kerüljön a szervezeti fejlesztéssel, s annak teherbírásával</li>
		                <li>Vezetővé akarok válni </li>
		                <li>A belső, személyes erőforrások erősítése, a rezilienca képességének fejlesztése a siker elérése érdekében</li>
	                </ul>
	                <h3 class="color-primary ">Az érzések színpada</h3>
	                <p>Tisztában vagyok az erősségeimmel, évek óta szakmailag a legjobbak közé tartozom, építő gondolataim vannak. Mindezek ellenére, amikor kinevezésre pályázom, akkor azt tapasztalom, hogy az általam rosszabbnak vélt szakmaisággal, alacsonyabb ismeretekkel rendelkező munkatársam kapja meg azt a pozíciót, amire én is úgy vágytam. Környezetemben, versenytársaim között több olyan személyt ismerek, akikhez mérten egyszerűen jobb képességűnek tartom magamat, és azt tapasztalom, hogy a kevesebb tudás ellenére sokkal eredményesebbek, mint én. Hogy történhetett meg? Pedig reggeltől estig dolgozom, még képzem is magamat mellé. Hol lehet a hiba?</p>
	                <p>Saját cégemen belül szervezeti problémákkal küzdök. Érzem, hogy munkatársam belső feszültséget generál, nincs összhangban a viselkedése a kimondott szavaival. Elküldeni nem merem, hiszen, akkor ki lesz helyette, hogy oldom meg feladatait. Inkább adok még esélyt a kollégának, hiszek az őszinte szavak erejében.  Tudom, mit csinálok, az én cégem, nálam senki se ismeri jobban, de fejlődni a cég alig vagy egyáltalán nem tud, jó szakembert is nehezen találok.</p>
	                <p>Biztonságban akarom érezni magamat, megtalálni a helyemet, tisztán látni, mire vagyok képes igazán. Érzem, hogy bekorlátozom magamat, nehezen hozok meg döntéseket. Ugyanazt a rossz, sablonos szöveget és módszert tolják rám már megint, de gyakorlati segítséget alig kapok mellé. Egy tucatnyi elvárás és nyomás ér naponta, melyeknek terhét nehezen bírom mérsékelni. Féltem a munkámat, az egzisztenciámat. Munkahelyem, cégem által biztosított erőforrások  még a legnagyobb jó szándék ellenére is, csak rövid távon hatnak rám pozitívan.</p>
	                <img src="/img/topics/vezetoi-kompetenciak.jpg " alt=" " class="img-responsive imgborder ml-2 mb-2 pull-right " style="width: 35%;">
	                <p>Kiváló vezetőnek érzem magamat. A cég, az ügyfelek érdekeit nézem elsőként, korrekt vagyok a munkatársaimmal. Mégis érnek visszajelzések, nem feltétlen csak verbális értelemben, leginkább a tapasztalások színterén jelezve, hogy valahol el lehetek akadva. Erősödik a fluktuáció, többször érzem, hogy nehezebben tudom megértetni magamat, bizonyos szituációkban erőtlen vagyok, veszítettem a motivációmból.</p>
	                <p>Az időbeosztásommal van probléma, munkatársaim, a váratlan események elrabolják az értékes figyelmet magamról. Későn érek haza, már nincs kedvem lemenni a terembe edzeni, és beszélgetni is alig esik jól otthon, hiszen még mindig az aznapi projekt téma jár a fejemben. A másik gondolatom, hogy ez így rossz, változtatnom kell, nagyon stresszes vagyok.</p>
	                <h3 class="color-primary ">Fejlődési lehetőségek</h3>
	                <p>Vezetői kompetenciák fejlesztésénél biztosan szükséges lesz egy kis önismereti munkára is. Kerüljük a jövő fejtegetését, a gondolatolvasás szürreális vásznára se festünk alakzatokat. A fejlődés intenzívebb lehetősége a már megtapasztalt, átélt élményekben rejlik, így, ezeket vesszük górcső alá. Megvizsgáljuk, hogy ezek miként hatottak, milyen érzéseket váltott ki, s mindez hogyan hat a jelenemre. Ezen információk ismeretében már egy konkrét folyamatot tudunk megvizsgálni, és ezek tapasztalataiból, az „én” felismerésén keresztül lehet dolgozni. Hiszen a tanulás alapja a megfelelő önismeret.</p>
	                <p>A problémák kezelésénél többet teszünk, mint csak megoldási paneleket gyártunk, hogy azokat bizonyos helyzetekben alkalmazni lehessen. A jelenség megértése, értelmezése egy lényegesebb, fontosabb szempont, úgy már hatékonyabban beilleszthetőek a megfelelő panelek, vagy annak egy rugalmas, az adott jelenségre alakított verziója.</p>
	                <p>Vezetőként is nagyon fontos, hogy megfelelő kérdéseket tudjunk feltenni, hiszen maga a kérdés fogja meghatározni a választ, ami egy reakció. Ezeket az impulzusokat verbális-és a metakommunikáció kontextusa váltja ki. Az evidenciák szintjétől elmozdulva képessé válhatunk az akciók és reakciók valódi üzenetének a kiolvasására, kialakítva a saját kódfejtő szoftverünket, melynek birtoklása hatalmas kincs.</p>
	                <p>Gyakorlati technikák segítségével növelni a hatékonyságot</p>
	                <ul>
	                	<li>a kiválasztási folyamatokban,</li>
	                	<li>munkatársak teljesítményirányításában,</li>
	                	<li>motivációs, és támogató rendszerekben,</li>
	                	<li>vállalat belső kommunikációjában,</li>
	                	<li>vezetői kommunikációban.</li>
	                </ul>
	            </div>
	        </div>
	    </div>
	</div>
</div>
@stop