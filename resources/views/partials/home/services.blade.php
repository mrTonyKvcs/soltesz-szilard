  <h2 class="text-center color-primary mb-2 wow fadeInDown animation-delay-4">Tevékenységek</h2>
  <br>
  <div class="ms-feature col-lg-6 col-md-6 col-sm-6 card wow flipInX animation-delay-4" style="height: 450px;">
      <div class="text-center card-block"
          style="height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center;">
          <span class="ms-icon ms-icon-circle ms-icon-xxlg" style="background: #99BCCC">
              <i class="fa fa-user" aria-hidden="true"></i>
          </span>
          <h3 style="color: #99BCCC"><strong>coaching/segítő beszélgetés</strong></h3><br>
          <p class="">
              {{ str_limit('Amikor felismerjük, hogy a rossz vagy fenyegető helyzetek ismétlődése összefügg, új perspektívák nyílhatnak meg előttünk.', 150) }}
          </p>
          <button class="btn btn-info btn-raised" data-toggle="modal" data-target="#myModal"
              style="background: #99BCCC;">{{ trans('button.next') }}</button>
      </div>
  </div>
  <div class="ms-feature col-lg-6 col-md-6 col-sm-6 card wow flipInX animation-delay-4" style="height: 450px;">
      <div class="text-center card-block"
          style="height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center;">
          <span class="ms-icon ms-icon-circle ms-icon-xxlg" style="background: #537690">
              <i class="fa fa-line-chart" aria-hidden="true"></i>
          </span>
          <h3 style="color: #537690;"><strong>vezetői támogatás/szervezeti tanácsadás</strong></h3><br>
          <p class="">
              {{ str_limit('Az optimális munkahelyi szerephez fontos, hogy a dolgozó érzéseit figyelembe vegyék, személyiségét elfogadják, belső motivációit támogassák, és megfelelő információval lássák el. ', 150) }}
          </p>
          <button class="btn btn-info btn-raised" data-toggle="modal" data-target="#myModal2"
              style="background: #537690;">{{ trans('button.next') }}</button>
      </div>
  </div>
  <div class="ms-feature col-lg-6 col-md-6 col-sm-6 card wow flipInX animation-delay-10" style="height: 450px;">
      <div class="text-center card-block"
          style="height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center;">
          <span class="ms-icon ms-icon-circle ms-icon-xxlg" style="background: #265F8D;">
              <i class="fa fa-cogs" aria-hidden="true"></i>
          </span>
          <h3 class="" style="color: #265F8D;"><strong>szupervízió segítőknek</strong></h3>
          <p class="">
              {{ str_limit('A segítői munka különleges kihívásokkal jár, ahol a hivatás gyakorlásakor a segítő – kliens kapcsolatot nemcsak a korai életévek kapcsolati mintázatai, hanem a segítő identitásának aktuális állapota és fejlettsége is erőteljesen meghatározza. ', 150) }}
          </p>
          <button class="btn btn-success btn-raised" data-toggle="modal" data-target="#myModal3"
              style="background: #265F8D;">{{ trans('button.next') }}</button>
      </div>
  </div>
  <div class="ms-feature col-lg-6 col-md-6 col-sm-6 card wow flipInX animation-delay-6" style="height: 450px;">
      <div class="text-center card-block"
          style="height: 100%; display: flex; flex-direction: column; justify-content: center; align-items: center;">
          <span class="ms-icon ms-icon-circle ms-icon-xxlg" style="background: #5C717A;">
              <i class="fa fa-users" aria-hidden="true"></i>
          </span>
          <h3 class="" style="color: #5C717A"><strong>családállítás/rendszerállítás</strong></h3>
          <p class="">
              {{ str_limit('A családállítás és rendszerállítás erőteljes és hatékony módszerek, amelyek segítenek feltárni az emberi kapcsolatok és többszemélyes rendszerek rejtett dinamikáit és összefüggéseit.', 150) }}
          </p>
          <button class="btn btn-danger btn-raised" data-toggle="modal" data-target="#myModal4"
              style="background: #5C717A">{{ trans('button.next') }}</button>
      </div>
  </div>
  {{-- Modal windows --}}
  <div class="modal modal-info" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog animated zoomIn animated-3x" role="document">
          <div class="modal-content" style="border-bottom: 3px solid #99BCCC;">
              <div class="modal-header" style="background: #99BCCC;">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                          aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                  <h3 class="modal-title" id="myModalLabel6"><strong>coaching/segítő beszélgetés</strong></h3>
              </div>
              <div class="modal-body">
                  <p>Amikor felismerjük, hogy a rossz vagy fenyegető helyzetek ismétlődése összefügg, új perspektívák
                      nyílhatnak meg előttünk. Nem a lélek betegít meg minket, hanem a személyiségünk reagál. Így a
                      változás, a gyógyulás vagy a transzcendencia is a személyiségünkön keresztül valósulhat meg.</p>
                  <p>Az ismeretlentől és a múltbeli tapasztalatoktól való félelem feszültséget okozhat. Ezt gyakran úgy
                      kerüljük el, hogy kilépünk a nehéz helyzetekből, elkerülve a szembenézést. A figyelem energiát
                      hordoz, a célzott fókusz pedig utat nyit a valós problémák és megoldásaik felé. Az, hogy hova
                      helyezzük tudatosan vagy tudattalanul a figyelmet, már önmagában döntési helyzet.</p>
                  <p>Az egzisztencialista megközelítés a létezés alapvető törvényeivel és kérdéseivel való találkozást
                      jelenti. Kapcsolódunk a mélyebb és elsődleges problémákhoz az itt és most terében megjelenő elemek
                      segítségével. Míg a legtöbb terápiás módszer vagy iskola egy adott emberképet előfeltételez és ez
                      alapján elemez, mi nem elemzünk, hanem közösen értelmezünk. Egy probléma a rendszer
                      összefüggésében értelmezhető, és ez az összefüggés mutatja meg, hogyan lehet továbblépni és mi
                      szükséges a személyes fejlődéshez.</p>
                  <p>Szembenézés és Önismeret</p>
                  <ul>
                      <li>Fókusz és Figyelem</li>
                      <li>Tudattalan Források</li>
                      <li>Közös Értelmezés</li>
                      <li>Fejlődés és Transzcendencia</li>
                  </ul>
                  <p>(Bővebben az egzisztencialista coachingról: lásd Témaközpont)</p>

              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default"
                      data-dismiss="modal">{{ trans('button.close') }}</button>
              </div>
          </div>
      </div>
  </div>
  <div class="modal modal-warning" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog animated zoomIn animated-3x" role="document">
          <div class="modal-content" style="border-bottom: 3px solid #537690">
              <div class="modal-header" style="background: #537690">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                          aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                  <h3 class="modal-title" id="myModalLabel6">vezetői támogatás/szervezeti tanácsadás</h3>
              </div>
              <div class="modal-body">
                  <p>Az optimális munkahelyi szerephez fontos, hogy a dolgozó érzéseit figyelembe vegyék, személyiségét
                      elfogadják, belső motivációit támogassák, és megfelelő információval lássák el. Az együttműködés
                      eredményességét és a team kibontakozási lehetőségeit leginkább az határozza meg, hogyan reagálnak
                      a résztvevők egy probléma vagy konfliktus megjelenésére.</p>
                  <p>Egy probléma vagy feszítő téma jobban megragadható, ha a rendszerszinten uralkodó elvek személyközi
                      viszonyokra gyakorolt hatásai felszínre kerülnek. A szervezet vagy egy team élő rendszerként
                      működik, ahol a működési problémák és látens konfliktusok élő kapcsolatban vannak a megoldásokat
                      és megújulást befolyásoló tényezőkkel. A megoldásokat befolyásolja, hogy a vezető mennyire képes
                      összhangba hozni a szervezet igényeit az elakadások érzékelésével és megértésével.</p>
                  <p>Egy vezető, aki szembenéz személyes hatásaival, erősségeivel és gyengeségeivel, hitelesíthet
                      együttműködési értékeket és érhet el magasabb szintű változásokat. A növekedés motorja az, ha a
                      vezető szellemiségében az anyagi érdekeken túlmutató látásmód van, és egészséges együttműködési
                      teret akar építeni.</p>
                  <p>Munkaformák:</p>
                  <ul>
                      <li>coaching</li>
                      <li>tréning</li>
                      <li>workshop</li>
                      <li>szervezetállítás</li>
                  </ul>
                  <p>(Egyéni igényeid áttekintéséhez és részletek megbeszéléséhez vedd fel velünk a kapcsolatot
                      bizalommal. Együttműködő partnereimmel örömmel segítünk megtalálni a legmegfelelőbb megoldásokat
                      szervezeted számára.)</p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default"
                      data-dismiss="modal">{{ trans('button.close') }}</button>
              </div>
          </div>
      </div>
  </div>
  <div class="modal modal-success" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog animated zoomIn animated-3x" role="document">
          <div class="modal-content" style="border-bottom: 3px solid #265F8D;">
              <div class="modal-header" style="background: #265F8D;">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                          aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                  <h3 class="modal-title" id="myModalLabel6">szupervízió segítőknek</h3>
              </div>
              <div class="modal-body">
                  <p>A segítői munka különleges kihívásokkal jár, ahol a hivatás gyakorlásakor a segítő – kliens
                      kapcsolatot nemcsak a korai életévek kapcsolati mintázatai, hanem a segítő identitásának aktuális
                      állapota és fejlettsége is erőteljesen meghatározza.</p>
                  <p>A szakmai fejlődés során számos jellegzetes szakaszon megyünk keresztül, amelyek szorongásokkal és
                      kérdésekkel teli időszakok lehetnek. A kezdetekben gyakran mindentudónak érezzük magunkat, de
                      ahogy haladunk előre, rájövünk, mennyi mindent kell még tanulnunk. Ez az időszak feszültséggel
                      teli, mivel egy új szerep beépítése, azaz megtapadása az életünkben jelentősen megváltoztatja a
                      kapcsolatainkat. Később ránk nehezednek krízisek és csalódások, a feladás visszatérő gondolata és
                      a sorvasztó magány ólomsúlyai, miközben próbáljuk biztosítani, hogy a szükséges rendjében haladjon
                      a segítői folyamat. Utána sincs megnyugvás, a pálya későbbi szakaszaiban megjelennek az élet és
                      halál kérdéseinek mélységei, amelyek újabb szorongásokat és félelmeket hozhatnak felszínre.</p>
                  <p>A segítői kapcsolat dinamikáját befolyásolhatják a segítő saját elakadásai vagy vakfoltjai, amelyek
                      növelhetik a torzítást és csökkenthetik a tisztánlátását. Amikor a segítő, bár lehet, hogy nem
                      tudatosan, saját nárcisztikus szükségletei által vezérelt marad, vagy megriad az élet és halál
                      kérdéseinek mélységeitől, a segítő folyamatok megakadhatnak vagy kevésbé hatékonnyá válhatnak.
                      Ilyen esetekben a segítés elveszítheti eredeti célját és irányát.</p>
                  <ul>
                      <li>szakmai támogatás</li>
                      <li>érzelmi terhek kezelése</li>
                      <li>önismeret és önfelfedezés</li>
                      <li>etikai dilemmák megoldása</li>
                      <li>támogatott döntéshozatal</li>
                      <li>szakmai izoláció csökkentése</li>
                  </ul>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default"
                      data-dismiss="modal">{{ trans('button.close') }}</button>
              </div>
          </div>
      </div>
  </div>
  <div class="modal modal-danger" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
      <div class="modal-dialog animated zoomIn animated-3x" role="document">
          <div class="modal-content" style="border-bottom: 3px solid #5C717A">
              <div class="modal-header" style="background: #5C717A">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                          aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                  <h3 class="modal-title" id="myModalLabel6">családállítás/rendszerállítás</h3>
              </div>
              <div class="modal-body">
                  <p>A családállítás és rendszerállítás erőteljes és hatékony módszerek, amelyek segítenek feltárni az
                      emberi kapcsolatok és többszemélyes rendszerek rejtett dinamikáit és összefüggéseit. Csoportos
                      családállításon a szimuláció személyek, míg egyéni családállításon tárgyak segítségével történik.
                      A szimuláció megjeleníti a rendszereket és azok szükséges elemeit, így láthatóvá és érzelmileg
                      átélhetővé válnak a belső modellek és a tudattalan hitrendszerek.</p>
                  <p>Nem elég megmutatni a miértet és azt mondani a kliensnek, hogy hagyja hatni és bízza a Mezőre. A
                      változás csak akkor következik be, ha a kliens tudatosan dolgozik azzal, amit a családállítás
                      során megtapasztalt és megértett. A családállítás segít felszínre hozni és tudatosan átrendezni
                      azokat a „rejtett lojalitásokat” és kapcsolati kötések által létrejött egyensúlytalanságokat,
                      amelyek a tudattalan szintjén rekedve függőségi elakadásokban, betegségekben, valamint visszatérő
                      életviteli és kapcsolati problémákban manifesztálódnak</p>
                  <p>A rendszerállítás nemcsak családi, hanem szervezeti, munkahelyi és más szociális rendszerek rejtett
                      összefüggéseit is feltárja. A szervezetállítás különösen hasznos a vállalati és csoportos
                      problémák megoldásában, mivel láthatóvá teszi a szervezeti struktúrák és kapcsolatok mögöttes
                      formáló erőit.</p>
                  <p>(Bővebben a rendszerállításról: lásd Témaközpont. Egyéni és csoportos családállításra jelentkezni:
                      lásd <a href="{{ route('trainings.index') }}" target="_blank">Események</a>.)</p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-default"
                      data-dismiss="modal">{{ trans('button.close') }}</button>
              </div>
          </div>
      </div>
  </div>
