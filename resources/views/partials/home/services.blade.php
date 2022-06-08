  <h2 class="text-center color-primary mb-2 wow fadeInDown animation-delay-4">Tevékenységek</h2>
  <br>
  <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-4" style="height: 450px;">
    <div class="text-center card-block">
      <span class="ms-icon ms-icon-circle ms-icon-xxlg" style="background: #99BCCC">
        <i class="fa fa-user" aria-hidden="true"></i>
      </span>
      <h3 style="color: #99BCCC"><strong>Coaching/segítő beszélgetés</strong></h3><br>
      <p class="">Félünk attól, ami már egyszer megtörtént velünk. Egy probléma megoldása feszültséget okoz.</p>
      <button class="btn btn-info btn-raised" data-toggle="modal" data-target="#myModal" style="background: #99BCCC;">{{ trans('button.next') }}</button>
    </div>
  </div>
  <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-4" style="height: 450px;">
    <div class="text-center card-block">
      <span class="ms-icon ms-icon-circle ms-icon-xxlg" style="background: #537690">
        <i class="fa fa-line-chart" aria-hidden="true"></i>
      </span>
      <h3 style="color: #537690;"><strong>Szervezeti fejlesztések</strong></h3><br>
      <p class="">Csapatkörnyezetben éppen úgy rugalmassági zavart okozhat a problémák feltárásának hiánya, mint az ...</p>
      <button class="btn btn-info btn-raised" data-toggle="modal" data-target="#myModal2" style="background: #537690;">{{ trans('button.next') }}</button>
    </div>
  </div>
  <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-10" style="height: 450px;">
    <div class="text-center card-block">
      <span class="ms-icon ms-icon-circle ms-icon-xxlg" style="background: #265F8D;">
        <i class="fa fa-cogs" aria-hidden="true"></i>
      </span>
      <h3 class="" style="color: #265F8D;"><strong>Szupervízió coachoknak</strong></h3>
      <p class="">Hamarosan ...</p>
      <button class="btn btn-success btn-raised" data-toggle="modal" data-target="#myModal3" style="background: #265F8D;">{{ trans('button.next') }}</button>
    </div>
  </div>
  <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-6" style="height: 450px;">
    <div class="text-center card-block">
      <span class="ms-icon ms-icon-circle ms-icon-xxlg" style="background: #5C717A;">
        <i class="fa fa-users" aria-hidden="true"></i>
      </span>
      <h3 class="" style="color: #5C717A"><strong>Csoportos folyamatok</strong></h3>
      <p class="">
        <ul>
          <li>önismereti tanulócsoport</li>
          <li>szupervíziós csoport</li>
          <li>encounter csoport</li>
          <li>önsegítő csoport</li>
        </ul>  
      </p>
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
                <p>
                  Félünk attól, ami már egyszer megtörtént velünk. Egy probléma megoldása feszültséget okoz. Úgy kerüljük el a túlfeszültséget, hogy kimenekülünk a nehéz helyzetből, kilépünk a szembenézés lehetőségéből. A félelem, a szorongás birtokolja a figyelmet, beszűkítik a tudatot. 
                </p>
                <p>
                  Az emberi lét egyik lényege a fejlődés. Nem mindegy, hogy a tudat milyen problémákat, akadályokat ragad meg, vagy a fejlődés a személyiség egy részét vagy az egészét erősíti. Lélektanilag a megszokott gondolkodás és kívülre irányuló kontroll (védekezés, elkerülés és rutin válaszok) feladása a meghaladás feltétele.  
                </p>
                <p>
                  A félelem ellenszere a bizalom, A bizalom olyan összetevőit szükséges elsőként felerősíteni, mint a meglévő képességünkbe és tudásunkba vetett bizalom. Vagy az abba vetett bizalom, ha valami nem megy egyedül, az sikerülhet másokkal együtt, segítséggel. Néhány nagy téma, ahol a sérüléseink következményei, a félelem és szorongás akadályozottsága is megjelenik. 
                </p>
                <ul>
                    <li>Kiégés, belső motivációvesztés, túlhajszoltság</li>
                    <li>Erővesztés, döntési nehézségek, stresszkezelési nehézségek</li>
                    <li>Munkahelyi konfliktusok, megrekedt élethelyzetek</li>
                    <li>Férfi harcok, a férfiasság megélése</li>
                    <li>Női harcok, a nőiesség megélése</li>
                    <li>Kapcsolati konfliktusok, agresszió és bántalmazás</li>
                    <li>Újrakezdési nehézségek, veszteségek feldolgozása</li>
                    <li>Függőségek, hangulatzavarok</li>
                </ul>
                <p>
                  Ahhoz, hogy jól használjuk az erőnket, és hozzáférjünk a transzcendens csatornákhoz fontos megérteni az énünket átszövő ellenállások és védőmechanizmusok természetét. Legalább annyira fontos belátni, hogy a félelmeinkkel való szembenézésen és a kétségeink közötti kitartáson át lehet a változás felé eljutni. A tudatosság bővítése olyan bizonyosság felé vezethet, hogy amit teszünk, annak értelme és olyan többlete van, ami másokat is szolgál és távlatokat hoz közelebb. 
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
                <h3 class="modal-title" id="myModalLabel6">Szervezeti fejlesztések</h3>
            </div>
            <div class="modal-body">
                <p>
                  Csapatkörnyezetben éppen úgy rugalmassági zavart okozhat a problémák feltárásának hiánya, mint az állandó megoldásra fókuszáló figyelem miatt kialakuló túlfeszítési állapot. A vállalaton belüli együttműködő terek hordozzák a szervezeti irányelveket és paradigmákat. Minden rendszernek van kialakult kultúrája, értelmezési és észlelési sajátosságai. Optimális lehet a dolgozó viszonya a munkahelyi szerepéhez, ha figyelembe veszik érzéseit és elfogadják a személyiségét, támogatják belső motivációit és információval látják el. 
                </p>
                <p>
                  Azonban az együttműködés eredményességét, egy team kibontakozási lehetőségeit leginkább az határozza meg, ahogyan egy probléma vagy konfliktus megjelenésére a résztvevők reagálnak. A megoldási lehetőségeket befolyásolja, hogy a vezető mennyire képes összhangba hozni a szervezet igényeit az elakadások érzékelésével és megértésével. A szervezeti védőmechanizmusok és játszmák jelenségei miatt fontos a kívülről érkező támogató látásmód és információ bevonása. A fejlesztés egyik célja az önreflexiós tanulási készség erősítése.
                </p>
                <p>
                  Egy probléma vagy feszítő téma jobban megragadható, ha a rendszerszinten uralkodó elveknek a személyközi viszonyokra gyakorolt hatásai felszínre kerülnek. A fejlesztés tapasztalati tanuláson alapul és folyamatelvű. Fontos az elakadásokra való reagálás, a reflektív rátekintés a szakmai helyzetekre és interakciókra. A tanulás lényege a működési problémák, mint befolyásoló erők közös feltárása és feldolgozása, döntések előkészítésénél tapasztalatokra reflektálnak. A visszajelzések és reflexiók az új közös olvasatok és a fejlődés hordozói. A szervezet vagy egy team élő rendszerként működnek. A működési problémák, a látens konfliktusok élő kapcsolatban vannak a megoldásokat és a megújulást befolyásoló tényezőkkel.   
                </p>
                <p>
                  Vezetők gyakori hibája, hogy a hierarchiában egy-két szinttel lejjebb jelentkező megoldásokra fókuszálnak, funkciódeficitbe és hitelességvesztésbe kerülhetnek. A bátor, a személyes hatásaival és a gyengeségeivel is szembenéző vezető képes önmagán keresztül fejlődést elérni, a hitelességét növelni. A hozzáadott értékteremtés motorja, ha a vezetése szellemiségében az anyagi érdekeken túlmutató látásmódja van: egészséges szakmai és együttléti teret akar építeni.    
                </p>
                <p>
                  <ul>
                    <li>coaching (egyéni, team)</li>
                    <li>szupervízió (egyéni, team)</li>
                    <li>tréning</li>
                    <li>workshop</li>
                  </ul>      
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
                <h3 class="modal-title" id="myModalLabel6">Szupervízió coachoknak</h3>
            </div>
            <div class="modal-body">
                <p>Hamarosan...</p>
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
                <h3 class="modal-title" id="myModalLabel6">Csoportos folyamatok</h3>
            </div>
            <div class="modal-body">
                <p>Csoportos folyamatok:</p>
                <ul>
                    <li>önismereti tanulócsoport </li>
                    <li>szupervíziós csoport</li>
                    <li>encounter csoport</li>
                    <li>önsegítő csoport</li>
                </ul>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">{{ trans('button.close') }}</button>
            </div>
        </div>
    </div>
</div>
