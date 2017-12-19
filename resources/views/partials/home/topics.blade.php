<h2 class="text-center color-primary mb-2 wow fadeInDown animation-delay-4">{{ trans('navbar.topic') }}</h2>
<br>


<div class="panel panel-light panel-flat">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-tabs-transparent indicator-primary nav-tabs-full nav-tabs-5" role="tablist">
        <li class="wow fadeInDown animation-delay-6" role="presentation">
            <a href="#communication-techniques" aria-controls="windows" role="tab" data-toggle="tab" class="withoutripple">
                <i class="fa fa-circle" style="color: #2196f3;"></i>
                <span class="hidden-xs">Tudásalapú érdekképviselet</span>
            </a>
        </li>
        <li class="wow fadeInDown animation-delay-4 active" role="presentation">
            <a href="#developing-competencies" aria-controls="macos" role="tab" data-toggle="tab" class="withoutripple">
                <i class="fa fa-circle" style="color: #3BB0FF;"></i>
                <span class="hidden-xs">{{ trans('navbar.developing-competencies') }}</span>
            </a>
        </li>
        <li class="wow fadeInDown animation-delay-2" role="presentation">
            <a href="#stress-sticking" aria-controls="linux" role="tab" data-toggle="tab" class="withoutripple">
                <i class="fa fa-circle" style="color: #54C9FF;"></i>
                <span class="hidden-xs">{{ trans('navbar.stress-sticking') }}</span>
            </a>
        </li>
        <li class="wow fadeInDown animation-delay-4" role="presentation">
            <a href="#life-crises" aria-controls="android" role="tab" data-toggle="tab" class="withoutripple">
                <i class="fa fa-circle" style="color: #6EE3FF;"></i>
                <span class="hidden-xs">Cél-feladatorientáció</span>
            </a>
        </li>
    </ul>
    <div class="panel-body">
        <!-- Tab panes -->
        <div class="tab-content mt-4">
            <div role="tabpanel" class="tab-pane fade" id="communication-techniques">
                <div class="row">
                    <div class="col-md-6 col-md-push-6">
                        <img src="/img/topics/tudas.jpg" alt="" class="img-responsive animated zoomIn animation-delay-8 pull-right"> </div>
                    {{--<img src="/img/topics/asszertiv.jpg" alt="" class="img-responsive animated zoomIn animation-delay-8 pull-right"> </div>--}}
                <div class="col-md-6 col-md-pull-6">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Tudásalapú érdekképviselet</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">A tudásalapú érdekképviselet szóösszetételét tekintve a valós önismereten alapuló gyakorlatias gondolkodás. Máskülönben egy szükséges feltételrendszer is, ahol az egyik a másik nélkül nehezen tud mentális egyensúlyt teremteni. Ha nem világos/egyértelmű, hogy milyen keretek között, mi és/vagy ki mellett köteleződünk el, akkor az sem lehet világos/egyértelmű, hogy valóban azt a termést „zsákmányoljuk” be, ami valóban a javunkat szolgálja.
                    </p>
                    <div class="">
                        <button class="btn btn-primary btn-raised" data-toggle="modal" data-target="#myModal01"><i class="zmdi zmdi-info"></i>  {{ trans('button.next') }}</button>
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane active in fade" id="developing-competencies">
            <div class="row">
                <div class="col-md-6">
                    <img src="/img/topics/vezetoi-kompetenciak.jpg" alt="" class="img-responsive wow animated zoomIn animation-delay-8" style="max-height: 360px;"> </div>
                <div class="col-md-6">
                    <h3 class="text-normal wow animated fadeInUp animation-delay-4">{{ trans('navbar.developing-competencies') }}</h3>
                    <p class="lead lead-md  wow animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md wow animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                        <button class="btn btn-primary btn-raised" data-toggle="modal" data-target="#myModal02"><i class="zmdi zmdi-info"></i>  {{ trans('button.next') }}</button>
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="stress-sticking">
            <div class="row">
                <div class="col-md-6 col-md-push-6">
                    <img src="/img/topics/stresszben-ragadas.jpg" alt="" class="img-responsive animated zoomIn animation-delay-8 pull-right" style="max-height: 360px;"> </div>
                <div class="col-md-6 col-md-pull-6">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">{{ trans('navbar.stress-sticking') }}</h3>
                    <p class="lead lead-md animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
                    <div class="">
                        <button class="btn btn-primary btn-raised" data-toggle="modal" data-target="#myModal03"><i class="zmdi zmdi-info"></i>  {{ trans('button.next') }}</button>
                    </div>
                </div>
            </div>
        </div>
        <div role="tabpanel" class="tab-pane fade" id="life-crises">
            <div class="row">
                <div class="col-md-6">
                    <img src="/img/topics/eletkozepi-valsag.jpg" alt="" class="img-responsive animated zoomIn animation-delay-8" style="max-height: 360px;"> </div>
                <div class="col-md-6">
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Cél-feladatorientáció</h3>
                    <p class="lead lead-md  animated fadeInUp animation-delay-6">Életünk során számos olyan esemény, szituáció, határhelyzet felbukkan, amelyek a változás lehetőségét kínálják, még a legsúlyosabb krízisekben is benne van a pozitív kimeneteli állapot.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">Ha olyan begyakorolt technikával kívánjuk megoldani a kialakult élethelyzetet, amelyek már előtte sem hozták a várt eredményt vagy nem kínáltak tartós megoldást, nagy eséllyel ekkor sem lesz másképpen.</p>
                    <div class="">
                        <button class="btn btn-primary btn-raised" data-toggle="modal" data-target="#myModal04"><i class="zmdi zmdi-info"></i>  {{ trans('button.next') }}</button>
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
                <p>Ahhoz, hogy számunkra előremutató kapcsolódásokat, üzleteket, megállapodásokat, emberi viszonyokat hozzunk létre, szükséges a meglévő tudásunkat és a valós vágyainkat is segítségül hívni. Ismerős lehet az érzés, amikor „befagy” a rendszer és a belső műszerfalon megjelenik: „hibásan álltam ki magamért”, „a megállapodás számomra hátrányos”, tehetetlen vagyok a rendszerrel szemben”, „bizonytalansági állapotban maradtam”, „nem így akartam”. Ennek következtében komoly belső feszültségek is kialakulhatnak, amelyeket szépen át is transzformálunk a saját pozitív énképünk védelme érdekében. Az is egy lehetőség, ha ezt nagyon szépen megköszönjük a belső „paneljeinknek”, hiszen a valódi személyiségünk így üzen annak az énképegyezménynek, amit mások elvárásai miatt vagy éppen a magunk csodálatára alakítottunk ki.</p>
                <p>

A belső felszólalásaink indítványozzák a meglévő tudásunk aktualizálást a fejlődés és a teljesebb élet reményében. A tanulás nélkülözhetetlen alapja a valós önismeret, ahol értjük a saját történetünket, és azt is, hogy hogyan jutottunk el a kialakult élethelyzetig. Itt nem a pszichoanalitikus, egészen mély önismereti analízisekre gondolok, ahol jellemzően a múltban van az időhorizont. A coaching, szupervízió vagy segítő beszélgetés kompetenciái egyértelműen a jelenből a jövőbeli szándékok és célok felé irányulnak. A tapasztalatokból kinyert információk feldolgozására fókuszálunk, és új pozitív, a magunk javára használható mintázatokat építünk. De pusztán örömből, preventív szándékkal is lehet a pozitív eseményeket elemezni, a meglévő jókat karbantartani, vagy az önmagunk vállalását, az asszertív magatartást a kommunikációnkon keresztül fejleszteni.
Saját magunk megdolgozásával lehet tartós eredményt elérni, és kitörni a gátló sémákból, amelyek az attitűdök mögött rejtőznek el. A viselkedés egy részét korrigálni, vagy csak a kommunikációinkat fejlesztgetni önmagában sokszor kevés az érdekeink hatékony képviseletéhez. A sport műfajában is léteznek gyorstalpaló, divatos edzésformák, mint például a speedfitness, ami 20-25 perces állással ígér valamilyen csodát.  Persze dönthetünk a heti több alkalmas, valamilyen kemény és rendszeres mozgásforma mellett is, amelyek valós életviteli változásokat képesek indukálni, és mellékhatásként segíti az öntanulást, önszabályozást fejleszteni.
                </p>
                <p>Ha elfogadjuk, hogy jogunk van eldönteni, hogy mire és mennyi ideig vagyunk „használhatóak”, ha elviseljük az egyéni szabadságunknak azt a terhét, hogy nincs korlátozva, hogy kivel és milyen kapcsolati kötéseket alakítunk ki az életünkben, és egyben tudomásul vesszük, hogy ezekkel a jogokkal a másik fél is rendelkezik, akkor az életünk során kialakuló formális vagy informális szövetségeket összetartó kötőanyag kialakítása az érdekképviseleti folyamat.</p>
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
                <h3 class="modal-title" id="myModalLabel6"><strong>{{ trans('navbar.developing-competencies') }}</strong></h3>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, dicta. Voluptate cumque odit quam velit maiores sint rerum, dolore impedit commodi. Tempora eveniet odit vero rem blanditiis, tenetur laudantium cumque.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, dicta. Voluptate cumque odit quam velit maiores sint rerum, dolore impedit commodi. Tempora eveniet odit vero rem blanditiis, tenetur laudantium cumque.</p>
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
                <h3 class="modal-title" id="myModalLabel6"><strong>{{ trans('navbar.stress-sticking') }}</strong></h3>
            </div>
            <div class="modal-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, dicta. Voluptate cumque odit quam velit maiores sint rerum, dolore impedit commodi. Tempora eveniet odit vero rem blanditiis, tenetur laudantium cumque.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias, dicta. Voluptate cumque odit quam velit maiores sint rerum, dolore impedit commodi. Tempora eveniet odit vero rem blanditiis, tenetur laudantium cumque.</p>
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
                <h3 class="modal-title" id="myModalLabel6"><strong>Cél-feladatorientáció</strong></h3>
            </div>
            <div class="modal-body">
                <p>Életünk során számos olyan esemény, szituáció, határhelyzet felbukkan, amelyek a változás lehetőségét kínálják, még a legsúlyosabb krízisekben is benne van a pozitív kimeneteli állapot. Ha olyan begyakorolt technikával kívánjuk megoldani a kialakult élethelyzetet, amelyek már előtte sem hozták a várt eredményt vagy nem kínáltak tartós megoldást, nagy eséllyel ekkor sem lesz másképpen. Ugyanazt a vezérlést használjuk, csak picit erősebben, kicsit hangosabban „toljuk” a régi kliséket. Érzékeljük, hogy ismét nem úgy sikerült, ahogy azt kigondoltuk és pár „kitörési” kísérlet után befejezzük, és kiállítjuk az igazoló nyugtát: „Én mindent megtettem!”.</p>
                <p>Egy rövid időre megengedjük magunknak, hogy ezt átfogalmazzuk? „Amire most képes voltam, azt megtettem!” Egy gondolat erejéig meghallgatunk egy másik nézőpontot? „Lehet, hogy még nem készültem fel teljesen a változásra, de arra már igen, hogy megtörténjen.” Ahogy értelmezünk egy eseményt, egy jelenséget, akár vitát, azt érzelmileg is úgy fogjuk megélni. Ha csak a saját igazságunkat vesszük figyelembe, akkor egyszerűen beleragadhatunk ebbe az érzelmi állapotba, ami pedig belső feszültséget, frusztrációt generál, és persze nagy eséllyel megbénítja a cselekvést.</p>
                <p>Az emberi lét különböző szakaszaiban, a személyiség fejlődésével párhuzamosan sokszor kibontakozik az igény, hogy energiáink egy részét más feladatokba fektessük, és így az újonnan kialakuló értékek már befolyásolják, hogy miként gazdálkodjunk az erőforrásokkal, milyen fontossági sorrendet válasszunk. Az elért célok újabb vágyakat jeleníthetnek meg, s akár ellentétes irányú, újabb célok is megszülethetnek. Sokszor nem a feladatok tömege, mértéke okozza a legnagyobb megküzdési problémát, hanem a változással járó belső feszültségek és bizonytalanságok elviselésének a terhe. Ezekbe bele lehet roppanni. Valós önvizsgálattal, önmagunk elfogadásával megtalálhatóak a fejlesztésre szoruló területek. Ha valamilyen szükséges feladatra, problémára nincs megfelelő megoldási mintázatunk, akkor az beszerezhető, megtanulható, de a tanulás időszakára „bérbe” is vehető, megvásárolható akár egy coachtól vagy tanácsadótól.</p>
                <p>Céltudatos az az ember, aki tudatosítja magában, hogy milyen célt határozott meg. A tudatossággal pedig követi a kijelölt feladatokat, reflexiókkal kíséri az utat a cél felé, és ha szükséges, akkor segít pontosítani vagy akár módosítani a kitűzött célt és/vagy struktúrát, szempontrendszert.</p>
                <p>Tekinthetünk a változásokra kihívásként, fenyegetésként vagy lehetőségként, a kialakult nézőpont pedig hat a reakcióinkra. Ha a feladat-folyamatban csak az erősségeinkre koncentrálunk, akkor a túlfeszítés miatt egy idő után pont az ellenkező hatást fogják kiváltani. A reziliencia képessége az alkalmazkodási rugalmasság, amely segíti menedzselni a nehézségeket, így a cél megvalósulásához szükséges összetevőket egyensúlyba tudjuk hozni. Nemcsak a konfliktuskezelés fejlesztése fontos, hanem a konfliktusok megelőzésének a képessége is. Ehhez fontos felismerni, elfogadni, hogy viselkedésprogramunk egy része elérte a működésének a határát, ennek következtében új megoldásokat szükséges integrálni a meglévő tudásba. A nemtudás is a cél-folyamat része. Egyedül nem megy, és a működéshez szükséges kialakítani magunk körül azokat a támogató rendszereket, amelyeket segítségül lehet hívni azokban a kérdésekben, ahol kisebb a jártasságunk. A rezileinca jelentősége, hogy úgy tudunk megoldani egy nehézséget, hogy közben képesek vagyunk fejlődni.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('button.close') }}</button>
            </div>
        </div>
    </div>
</div>

