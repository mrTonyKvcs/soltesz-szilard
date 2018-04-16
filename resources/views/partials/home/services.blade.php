  <h2 class="text-center color-primary mb-2 wow fadeInDown animation-delay-4">Tevékenységek</h2>
  <br>
  <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-4">
    <div class="text-center card-block">
      <span class="ms-icon ms-icon-circle ms-icon-xxlg" style="background: #99BCCC">
        <i class="fa fa-user" aria-hidden="true"></i>
      </span>
      <h3 style="color: #99BCCC"><strong>Coaching/segítő beszélgetés</strong></h3><br>
      <p class="">Meglátásom szerint a coaching folyamat egy intenzív, tanulásra alkalmas emberi találkozások lehetősége.</p>
      <button class="btn btn-info btn-raised" data-toggle="modal" data-target="#myModal" style="background: #99BCCC;">{{ trans('button.next') }}</button>
    </div>
  </div>
  <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-8">
    <div class="text-center card-block">
      <span class="ms-icon ms-icon-circle ms-icon-xxlg color-warning" style="background: #537690">
        <i class="fa fa-line-chart" aria-hidden="true"></i>
      </span>
      <h3 class="" style="color: #537690;"><strong>Értékesítés-stratégia/szervezeti tanácsadás</strong></h3>
      <p class="">Komplex szakértői jelenlét, ahol a menedzsment által megfogalmazott célok, irányelvek...</p>
      <button class="btn btn-warning btn-raised" data-toggle="modal" data-target="#myModal2" style="background: #537690">{{ trans('button.next') }}</button>
    </div>
  </div>
  <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-10">
    <div class="text-center card-block">
      <span class="ms-icon ms-icon-circle ms-icon-xxlg" style="background: #265F8D;">
        <i class="fa fa-cogs" aria-hidden="true"></i>
      </span>
      <h3 class="" style="color: #265F8D;"><strong>Munkahelyi mentálhigiénés projektek</strong></h3>
      <p class="">A csend sose néma! A mentálhigiéné emberi cselekvések sorozata, ahol célzott törekvés az egészséges lelki...</p>
      <button class="btn btn-success btn-raised" data-toggle="modal" data-target="#myModal3" style="background: #265F8D;">{{ trans('button.next') }}</button>
    </div>
  </div>
  <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-6">
    <div class="text-center card-block">
      <span class="ms-icon ms-icon-circle ms-icon-xxlg" style="background: #5C717A;">
        <i class="fa fa-users" aria-hidden="true"></i>
      </span>
      <h3 class="" style="color: #5C717A"><strong>Csoportos/<br>szervezeti coaching</strong></h3>
      <p class="">A csoportos coaching folyamatban a tagok egymás közötti kapcsolataiban nincsen előzetes ...</p>
      <button class="btn btn-danger btn-raised" data-toggle="modal" data-target="#myModal4" style="background: #5C717A">{{ trans('button.next') }}</button>
    </div>
  </div>
  {{-- Modal windows --}}
<div class="modal modal-info" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog animated zoomIn animated-3x" role="document">
        <div class="modal-content" style="border-bottom: 3px solid #99BCCC;">
            <div class="modal-header" style="background: #99BCCC;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                <h3 class="modal-title" id="myModalLabel6"><strong>Coaching/segítő beszlélgetés</strong></h3>
            </div>
            <div class="modal-body">
                <p>Meglátásom szerint a coaching folyamat egy intenzív, tanulásra alkalmas emberi találkozások lehetősége. A más nézőpontok aktív felfedezése az egyéni problémák megoldására fókuszál, a jelen állapotából indul ki a jövőbeli szándék(ok), cél(ok) elérésének, megvalósulásának érdekében. A coaching ülések alkalmasak a szakmai kompetenciák fejlesztésére, segíti a gátló mechanizmusok felfedezését, átdolgozását, és serkenti a megoldási struktúrák kialakítását. Elsődleges cél a változás indukálása, másodlagosan pedig támogathatja a személyiség fejlődését. A probléma, az elakadás
szembenézésével kezdődő cselekvési folyamat, ahol szükséges a rendelkezésre álló
energiakészlet hatékony aktiválása: mikor, kire és hogyan fókuszál a kliens vagy coachee. A
probléma egy megközelítése: a jelenlegi helyzet és a vágyott állapot közötti különbség.</p>
                <ul>
                    <li>Feladatok, eredmények optimalizálása
</li>
                    <li>Teljesítmény megakadása</li>
                    <li>Belső motiváció karbantartása, a tapasztalati tanulás erősítése</li>
                    <li>Erővesztés, döntési nehézségek</li>
                    <li>Kiégés(előtt), munkahelyi krízis</li>
                    <li>Vezetői kompetenciák fejlesztése</li>
                    <li>Szakmai személyiség növekedésében észlelhető zárlatok</li>
                    <li>Megakadás a belső feszültséget okozó dilemmákban</li>
                    <li>Interperszonális kapcsolatok zavarai</li>
                </ul>
                <p>A változások lehetősége általában a félelmeink irányában helyezkednek el, ezért egy semleges biztonságot adó coaching folyamat, segítő beszélgetés kiváló tesztüzem, ahol az ülések során az ügyfél, kliens saját nézőpontjából megértheti viselkedését, így a már meglévő tudásába új eszközöket, megoldásokat lesz képes integrálni, ami pedig fejleszti a tudatosságát, és az egészségesebb jelenlétét az életpályáján.
</p>
                <p>Speciális területeim: közép- és felsővezetők, sportolók, egyéb döntéshozó szakemberek, segítő szakemberek, művészek és alkotók.
</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('button.close') }}</button>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-warning" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog animated zoomIn animated-3x" role="document">
        <div class="modal-content" style="border-bottom: 3px solid #537690">
            <div class="modal-header" style="background: #537690">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                <h3 class="modal-title" id="myModalLabel6">Értékesítés-stratégia/szervezeti tanácsadás</h3>
            </div>
            <div class="modal-body">
                <p>Komplex szakértői jelenléttel kutatjuk a vállalat által megfogalmazott célok, irányelvek és a működési mechanizmusok konstellációjában a rendszer egészében fellelhető valós „kitüremkedési pontokat”, ahol a szervezeti hatékonyság megakadhat. Az értékesítési terület üzemelési elszivárgása nem kizárólagosan a jelenlegi állapotot érinti, hiszen a működési egyensúlytalanság, a rendelkezésre álló lehetőségek beragadása markánsan hat a jelenlegi fogyasztók, így a jövőbeli vásárlók döntéseire is.
</p>
                <p>Minél hosszabb vagy szélesebb egy értékesítési csatorna (pl. franchise, MLM), annál kényesebb megteremteni, illetve fenntartani azt a hatásos értékesítési kultúrát, amely az üzleti hasznosság mellett képes kialakítani a tanulási és teljesítési zónák viszonyának ideális egyensúlyát, ami egy ellensúly lehet az állandó túlfeszítés állapot fennmaradásával szemben. Érzékeny erőforrásunk maga az ember, azaz a jelenlegi, illetve jövőbeli munkatársak is. Rendszer szinten, specifikus, egyedi megoldási módszerek kidolgozásával segítjük az erősebb értékesítés felépítéshez szükséges, a szervezet részeit érintő tapasztalatok rendszerbe integrálását.
</p>
<p>A profit alapját adja, hogy a vállalat jobban és hatékonyabban szolgálja ki ügyfeleit versenytársainál. Különböző módszertani átvilágítási, elemzési szempontok alapján egy megvalósítási modell segítségével konkrét javaslatok képződnek, hogy milyen változtatásokkal, módszerekkel és fejlesztési koncepcióval érhetőek el a tulajdonosok és/vagy a menedzsment által elfogadott célok, valamint a szervezeti társadalomra irányuló felelősségvállalási szempontok. 
</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('button.close') }}</button>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-success" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog animated zoomIn animated-3x" role="document">
        <div class="modal-content" style="border-bottom: 3px solid #265F8D;">
            <div class="modal-header" style="background: #265F8D;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                <h3 class="modal-title" id="myModalLabel6">Munkahelyi mentálhigiénés projektek</h3>
            </div>
            <div class="modal-body">
                <p>A csend sose néma!</p>
                <p>A mentálhigiéné emberi cselekvések sorozata, ahol célzott törekvés az egészséges lelki élet kialakítása, megélése és megtartása. Fontos vetülete a megelőzés, hogy olyan elemi és érzelmi környezetet alakítsunk ki, amiben a lelki épségünket védjük, így óvjuk magunkat a fizikai károsodásoktól és megbetegedésektől is. Másodlagosan feladata a meglévő egészséges mentális állapot karbantartása, erősítése.
</p>
                <p>A munkahely egy feszültségmező, és egyben szocializáló tér is, ahol számos szubjektum, alaphiedelem találkozik össze, feszül egymásnak. Láthatatlan, fedhetetlen konfliktusok sokasága húzódik meg egy intézmény szerveződésén belül, amelyek egyértelmű hatást gyakorolnak a szervezet működésére, ez pedig kivetül az emberek munkahellyel való érzelmi azonosulására. Egy dolgozó leginkább akkor tudja a képességeit a legjobban kifejteni, ha a munkahellyel valóviszonya optimális.
</p>
                <p>Ez a viszonyrendszer pedig ápolható, fejleszthető, illetve a szervezeti normákba beépíthető. Helytelenül járnánk el, ha kizárólag csak az intézmények részéről várnánk el a felelős gondolkodást, ez egy egyensúlytalan erőpróba lenne. Az egyén, a dolgozó a személyisége jellemzőit, addigi tapasztalatait állítja munkába, amikor leszerződik egy munkahellyel. Az intézmény és az abban dolgozók formális és informális viszonya biztos hatással van az emberi életfolyamat okán a személyiségében kialakuló, vagy már a belépéskor meglévő személyiség egyensúlyzavar gyengítésére vagy erősítésére.
</p>
                <p>A munkahelyi mentálhigiéné szemüvege képes olyan problémákat feltárni, amelyek a tapasztalható és látens konfliktusokat okozó zavarokat is érzékelik. Jelentősebb szervezeti beavatkozás nélkül a jelenség felismerhető állapotba hozható, így a probléma következtében észlelhető vagy kialakulható káros hatások csökkenése érdekében konkrét megoldások illeszthetőek be a vállalati működés folyamatiba. A munkahelyi mentálhigiéné valós jelenléte segítheti a vállalat növekedési fázisaiban megjelenő stresszorokat kiemelni, és konstruktív transzparenciával azokat a szakmai közösség javára fordítani. A folyamatosan tanuló szervezet tapasztalata képes a fejlődés során bekövetkező normatív jelenségekből fakadó krízisekre és vészhelyzetekre védelmet biztosítani. 
</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('button.close') }}</button>
            </div>
        </div>
    </div>
</div>
<div class="modal modal-danger" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog animated zoomIn animated-3x" role="document">
        <div class="modal-content" style="border-bottom: 3px solid #5C717A">
            <div class="modal-header" style="background: #5C717A">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                <h3 class="modal-title" id="myModalLabel6">Csoportos/szervezeti coaching</h3>
            </div>
            <div class="modal-body">
                <p>A csoportos coaching folyamatban a tagok egymás közötti kapcsolataiban nincsen előzetes formális szerveződés, azaz sem egészében, sem részben nem alkotnak teamet egy vállalton belül. Előnye, hogy olyan szociális tér alakul ki, amelyben a csoporttagok különböző szervezetekből, és akár más szakterületről szerveződnek össze.
</p>
                <p>A szervezeti coaching egyértelműen folyamatorientált munkaforma, amelyben hivatásbeli problémákra fókuszálnak a dolgozók, az intézmény és/vagy a piac kontextusában. A team tagjainak közös célja van, ez biztosan összeköti őket a szervezettel. Cselekvésorientált, a team vagy a szervezet valamely egységének teljesítményének a fejlesztése, a hatékonyabb együttműködés megsegítésére koncentrál ez a munkaforma. A coach egyik feladata megteremteni azt a tanulási környezetet, ahol a team képes megtalálni a saját megoldásaikat. Megjelenő szervezeti és/vagy személyek közötti működési problémákra fókuszál, mint például:
</p>
                <ul>
                    <li>láthatatlan konfliktusok, munkahelyi viták, feszítő témák,
</li>
                    <li> projektben működési zavarok,
</li>
                    <li>szervezeti egységek teljesítményének a visszaesése,</li>
                    <li>a problémák és a megoldások nincsenek szinkronban,</li>
                    <li>szervezeti nehézségek erős konkurencia hatására</li>
                    <li>vállalati egységek, a dolgozók és az ügyfelek közötti viszony optimalizálása a hatékonyabb piacolás érdekében.</li>
                </ul>
                <p>A csoportdinamika segítségével elérhető a hatékonyabb összetartás, így a munkahelyi atmoszféra optimalizálására is alkalmas. A csoporthatással olyan sűrítmény, erő koncentrálódik az együttműködési periódus alatt, de akár egy alkalom során is, amelyek akár hosszú hónapok egyéni megismerésin, tanulásain keresztül tapasztalhatóak meg.
</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('button.close') }}</button>
            </div>
        </div>
    </div>
</div>
