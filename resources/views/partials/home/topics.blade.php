<h2 class="text-center color-primary mb-2 wow fadeInDown animation-delay-4">{{ trans('navbar.topic') }}</h2>
<br>


<div class="panel panel-light panel-flat">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-tabs-transparent indicator-primary nav-tabs-full nav-tabs-5" role="tablist">
        <li class="wow fadeInDown animation-delay-6" role="presentation">
            <a href="#communication-techniques" aria-controls="windows" role="tab" data-toggle="tab" class="withoutripple">
                <i class="fa fa-circle" style="color: #334a86;"></i>
                <span class="hidden-xs">Tudásalapú érdekképviselet</span>
            </a>
        </li>
        <li class="wow fadeInDown animation-delay-4 active" role="presentation">
            <a href="#developing-competencies" aria-controls="macos" role="tab" data-toggle="tab" class="withoutripple">
                <i class="fa fa-circle" style="color: #d68b23;"></i>
                <span class="hidden-xs">{{ trans('navbar.developing-competencies') }}</span>
            </a>
        </li>
        <li class="wow fadeInDown animation-delay-2" role="presentation">
            <a href="#stress-sticking" aria-controls="linux" role="tab" data-toggle="tab" class="withoutripple">
                <i class="fa fa-circle" style="color: #191219;"></i>
                <span class="hidden-xs">{{ trans('navbar.stress-sticking') }}</span>
            </a>
        </li>
        <li class="wow fadeInDown animation-delay-4" role="presentation">
            <a href="#life-crises" aria-controls="android" role="tab" data-toggle="tab" class="withoutripple">
                <i class="fa fa-circle" style="color: #e8d83c;"></i>
                <span class="hidden-xs">Cel-feladat orientáció</span>
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
                    <p class="lead lead-md animated fadeInUp animation-delay-6">A tudásalapú érdekképviselet építő elemeit tekintve egy szükséges összetartozás, ami egyben egy feltételrendszer is, ahol az egyik a másik nélkül nehezen tud megvalósulni. Ha nem világos/egyértelmű, hogy milyen keretek között, mi és/vagy ki mellett köteleződünk el, akkor az sem lehet világos, hogy valóban azt a termést „zsákmányoljuk” be, ami valóban a javunkat szolgálja. ..
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
                    <h3 class="text-normal animated fadeInUp animation-delay-4">Cel-feladat orientáció</h3>
                    <p class="lead lead-md  animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
                    <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
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
                <p>A tudásalapú érdekképviselet építő elemeit tekintve egy szükséges összetartozás, ami egyben egy feltételrendszer is, ahol az egyik a másik nélkül nehezen tud megvalósulni. Ha nem világos/egyértelmű, hogy milyen keretek között, mi és/vagy ki mellett köteleződünk el, akkor az sem lehet világos, hogy valóban azt a termést „zsákmányoljuk” be, ami valóban a javunkat szolgálja.</p>
                <p>Ahhoz, hogy számunkra előremutató kapcsolódásokat, üzleteket, megállapodásokat, emberi viszonyokat hozzunk létre, szükséges a meglévő ismereteinket és a valós vágyainkat is segítségül hívni. Ismerős lehet az érzés, amikor „befagy” a rendszer és a belső műszerfalon megjelenik: „hibásan álltam ki magamért”, „a megállapodás számomra hátrányos”, „már ismét nem sikerült a saját érdekemet figyelembe venni”, „bizonytalansági állapotban maradtam”, „nem így akartam”. Ennek következtében komoly belső feszültségek is kialakulhatnak, amelyeket szépen át is transzformálunk a saját pozitív énképünk védelme érdekében. De az is egy lehetőség, ha ezt nagyon szépen megköszönjük a belső „paneljeinknek”, hiszen a valódi személyiségünk így üzen annak az énképegyezménynek, amit mások elvárásai miatt vagy éppen a magunk csodálatára alakítottunk ki.</p>
                <p>
A belső felszólalásaink indítványozzák a meglévő tudásunk aktualizálást a fejlődés és a teljesebb élet reményében. A tanulás nélkülözhetetlen alapja a valós önismeret szükséges vetületének feltárása. Itt nem a pszichoanalitikus, egészen mély önismereti analízisekre gondolok, ahol jellemzően a múltban van az időhorizont. A coaching, szupervízió vagy segítő beszélgetés kompetenciái egyértelműen a jelenből a jövőbeli szándékok és célok felé irányulnak. A tapasztalatokból kinyert információk feldolgozására fókuszálunk, és új pozitív,
a magunk javára használható mintázatokat építünk. De pusztán örömből, preventív szándékkal is lehet a pozitív eseményeket elemezni, a meglévő jókat karbantartani.
                </p>
                <p>Saját magunk megdolgozásával lehet tartós eredményt elérni, és kitörni a gátló sémákból, amelyek az attitűdök mögött rejtőznek el. A viselkedés egy részét korrigálni, vagy csak a kommunikációinkat fejlesztgetni önmagában sokszor kevés az érdekeink hatékony képviseletéhez. Ha a sportból indulunk ki, léteznek gyorstalpaló, divatos edzésformák, mint például a speefitness, ami 20-25 perces állással ígér valamilyen csodát.  Persze dönthetünk a heti több alkalmas, valamilyen kemény és rendszeres mozgásforma mellett is, amelyek valós életviteli változásokat képesek indukálni, és mellékhatásként segíti az öntanulás képességét is.</p>
                <p>A tudásalapú érdekképviselet szóösszetételében a tudást az önismeretre támaszkodva, a meglévő tudásba történő az új ismeretek integrálását értem. Az egyéni érdek pedig egy valós, belső igény egy másik személy, csoport vagy szándék irányába történő képviseletére, akár konfliktusvállalással. A szabadság egy lehetséges értelmezése szerint nincs korlátozva, hogy kivel kerülhetünk kapcsolatba, viszonyban és milyen kötéseket alakítunk ki az életünkben. Az ezeket a formális vagy informális szövetségeket összetartó kötőanyag kialakítása az érdekképviseleti folyamat. Vállalni önmagunkat, így fejleszteni a szelf-menedzsmentünket, ahol az asszertív magatartás és kommunikáció ennek a vállalásnak egy reflexiója és nem kizárólagos megoldása.</p>
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
                <h3 class="modal-title" id="myModalLabel6"><strong>Cel-feladat orientáció</strong></h3>
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

