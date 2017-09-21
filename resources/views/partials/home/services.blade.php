  <h2 class="text-center color-primary mb-2 wow fadeInDown animation-delay-4">Tevékenységek</h2>
  <br>
  <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-4">
    <div class="text-center card-block">
      <span class="ms-icon ms-icon-circle ms-icon-xxlg color-info">
        <i class="fa fa-user" aria-hidden="true"></i>
      </span>
      <h3 class="color-info"><strong>Egyéni coaching /  segítőbeszélgetés</strong></h3><br>
      <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>
      <button class="btn btn-info btn-raised" data-toggle="modal" data-target="#myModal">{{ trans('button.next') }}</button>
    </div>
  </div>
  <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-8">
    <div class="text-center card-block">
      <span class="ms-icon ms-icon-circle ms-icon-xxlg color-warning">
        <i class="fa fa-line-chart" aria-hidden="true"></i>
      </span>
      <h3 class="color-warning"><strong>Értékesítés-stratégia tanácsadás</strong></h3>
      <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>
      <button class="btn btn-warning btn-raised" data-toggle="modal" data-target="#myModal2">{{ trans('button.next') }}</button>
    </div>
  </div>
  <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-10">
    <div class="text-center card-block">
      <span class="ms-icon ms-icon-circle ms-icon-xxlg color-success">
        <i class="fa fa-cogs" aria-hidden="true"></i>
      </span>
      <h3 class="color-success"><strong>Munkahelyi mentálhigiénés projektek</strong></h3>
      <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>
      <button class="btn btn-success btn-raised" data-toggle="modal" data-target="#myModal3">{{ trans('button.next') }}</button>
    </div>
  </div>
  <div class="ms-feature col-lg-3 col-md-6 col-sm-6 card wow flipInX animation-delay-6">
    <div class="text-center card-block">
      <span class="ms-icon ms-icon-circle ms-icon-xxlg  color-danger">
        <i class="fa fa-users" aria-hidden="true"></i>
      </span>
      <h3 class="color-danger"><strong>Élménycsoport vezetés</strong></h3><br>
      <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Delectus dicta error.</p>
      <button class="btn btn-danger btn-raised" data-toggle="modal" data-target="#myModal4">{{ trans('button.next') }}</button>
    </div>
  </div>
  {{-- Modal windows --}}
<div class="modal modal-info" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog animated zoomIn animated-3x" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                <h3 class="modal-title" id="myModalLabel6"><strong>Egyéni coaching /  segítőbeszélgetés</strong></h3>
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
<div class="modal modal-warning" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog animated zoomIn animated-3x" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                <h3 class="modal-title" id="myModalLabel6">Értékesítés-stratégia tanácsadás</h3>
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
<div class="modal modal-success" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog animated zoomIn animated-3x" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                <h3 class="modal-title" id="myModalLabel6">Munkahelyi mentálhigiénés projektek</h3>
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
<div class="modal modal-danger" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog animated zoomIn animated-3x" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true"><i class="zmdi zmdi-close"></i></span></button>
                <h3 class="modal-title" id="myModalLabel6">Élménycsoport vezetés</h3>
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
