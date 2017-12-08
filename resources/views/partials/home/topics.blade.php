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
                    <p class="lead lead-md animated fadeInUp animation-delay-6">Az emberi lét különböző szakaszaiban különböző célok a jellemzőek. A személyiség fejlődésével párhuzamosan kialakul az igény, hogy az egyén a saját energiáit különböző feladatokba fektesse, az újonnan kialakuló értékek pedig mutatják az utat számára, hogyan gazdálkodjon ezekkel az erőforrásokkal, milyen fontossági sorrendet választ. Az elért célok újabb vágyakat jeleníthetnek meg, s akár ellentétes irányú, újabb célok is megszülethetnek. Az elemi szükséglet értékké alakul át, ahol nem körkörös pálya figyelhető meg, hanem spirálisan halad felfelé, kibontva az új lehetőségeket az egyén és a számára valamilyen szempontból fontos közösség között...
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
                <p>Az emberi lét különböző szakaszaiban különböző célok a jellemzőek. A személyiség fejlődésével párhuzamosan kialakul az igény, hogy az egyén a saját energiáit különböző feladatokba fektesse, az újonnan kialakuló értékek pedig mutatják az utat számára, hogyan gazdálkodjon ezekkel az erőforrásokkal, milyen fontossági sorrendet választ. Az elért célok újabb vágyakat jeleníthetnek meg, s akár ellentétes irányú, újabb célok is megszülethetnek. Az elemi szükséglet értékké alakul át, ahol nem körkörös pálya figyelhető meg, hanem spirálisan halad felfelé, kibontva az új lehetőségeket az egyén és a számára valamilyen szempontból fontos közösség között.
                </p>
                <p>A tudásalapú érdekképviselet tanulható, így létezik gyakorlati eszköztára is, amelyek kiválóan alkalmasak a szakmai személyiségünk fejlesztésére is. Ennek nélkülözhetetlen feltétele, hogy ne féltsük magunkat önmagunktól.</p>
                <p>A mentálhigiénia jellemzően megelőzésről szól, hogy olyan elemi és érzelmi környezetet alakítsunk ki, amiben a lelki egészségünket erősítjük, védjük, így óvjuk magunkat a fizikai károsodásoktól is. Másodlagos feladata a meglévő egészséges állapot karbantartása, ami legalább annyira fontos, mint a megelőzés. A munkahely egy feszültségmező, és egyben szocializáló tér is, ahol számos szubjektum, alaphiedelem találkozik össze, feszül egymásnak. Láthatatlan, fedhetetlen konfliktusok sokasága húzódik meg egy intézmény szerveződésén belül, amelyek egyértelmű hatást gyakorolnak a szervezet működésére, ez pedig kivetül az embereknek a munkahellyel való érzelmi azonosulására. Egy dolgozó leginkább akkor tudja a képességeit a legjobban kifejteni, ha a munkahellyel való viszonya optimális.
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

