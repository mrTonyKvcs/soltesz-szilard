<h1 class="font-light">{{ trans('navbar.topic') }}</h1>
<p class="lead color-primary">— Intelligent apps that help you do your best work. </p>
<div class="panel panel-light panel-flat">
  <!-- Nav tabs -->
  <ul class="nav nav-tabs nav-tabs-transparent indicator-primary nav-tabs-full nav-tabs-5" role="tablist">
    <li class="wow fadeInDown animation-delay-6" role="presentation">
      <a href="#communication-techniques" aria-controls="windows" role="tab" data-toggle="tab" class="withoutripple">
        <i class="fa fa-circle" style="color: red;"></i>
        <span class="hidden-xs">{{ trans('navbar.communication-techniques') }}</span>
      </a>
    </li>
    <li class="wow fadeInDown animation-delay-4 active" role="presentation">
      <a href="#developing-competencies" aria-controls="macos" role="tab" data-toggle="tab" class="withoutripple">
        <i class="fa fa-circle" style="color: blue;"></i>
        <span class="hidden-xs">{{ trans('navbar.developing-competencies') }}</span>
      </a>
    </li>
    <li class="wow fadeInDown animation-delay-2" role="presentation">
      <a href="#stress-sticking" aria-controls="linux" role="tab" data-toggle="tab" class="withoutripple">
        <i class="fa fa-circle" style="color: green;"></i>
        <span class="hidden-xs">{{ trans('navbar.stress-sticking') }}</span>
      </a>
    </li>
    <li class="wow fadeInDown animation-delay-4" role="presentation">
      <a href="#life-crises" aria-controls="android" role="tab" data-toggle="tab" class="withoutripple">
        <i class="fa fa-circle" style="color: yellow;"></i>
        <span class="hidden-xs">{{ trans('navbar.life-crises') }}</span>
      </a>
    </li>
    <li class="wow fadeInDown animation-delay-4" role="presentation">
      <a href="#resilience" aria-controls="android" role="tab" data-toggle="tab" class="withoutripple">
        <i class="fa fa-circle" style="color: black;"></i>
        <span class="hidden-xs">{{ trans('navbar.resilience') }}</span>
      </a>
    </li>
  </ul>
  <div class="panel-body">
    <!-- Tab panes -->
    <div class="tab-content mt-4">
      <div role="tabpanel" class="tab-pane fade" id="communication-techniques">
        <div class="row">
          <div class="col-md-6 col-md-push-6">
            <img src="/img/topics/asszertiv.jpg" alt="" class="img-responsive animated zoomIn animation-delay-8 pull-right"> </div>
          <div class="col-md-6 col-md-pull-6">
            <h3 class="text-normal animated fadeInUp animation-delay-4">{{ trans('navbar.communication-techniques') }}</h3>
            <p class="lead lead-md animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
            <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
            <div class="">
              <a href="{{ route('topics.communication-techniques')}}" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                <i class="zmdi zmdi-info"></i> {{ trans('button.next') }}
              </a>
            </div>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane active in fade" id="developing-competencies">
        <div class="row">
          <div class="col-md-6">
            <img src="/img/topics/vezetoi-kompetenciak.jpg" alt="" class="img-responsive wow animated zoomIn animation-delay-8"> </div>
          <div class="col-md-6">
            <h3 class="text-normal wow animated fadeInUp animation-delay-4">{{ trans('navbar.developing-competencies') }}</h3>
            <p class="lead lead-md  wow animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
            <p class="lead lead-md wow animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
            <div class="">
              <a href="{{ route('topics.developing-competencies')}}" class="btn btn-info btn-raised wow animated zoomIn animation-delay-10">
                <i class="zmdi zmdi-info"></i> {{ trans('button.next') }}
              </a>
            </div>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="stress-sticking">
        <div class="row">
          <div class="col-md-6 col-md-push-6">
            <img src="/img/topics/stresszben-ragadas.jpg" alt="" class="img-responsive animated zoomIn animation-delay-8"> </div>
          <div class="col-md-6 col-md-pull-6">
            <h3 class="text-normal animated fadeInUp animation-delay-4">{{ trans('navbar.stress-sticking') }}</h3>
            <p class="lead lead-md animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
            <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
            <div class="">
              <a href="{{ route('topics.stress-sticking')}}" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                <i class="zmdi zmdi-info"></i> {{ trans('button.next') }}
              </a>
            </div>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="life-crises">
        <div class="row">
          <div class="col-md-6">
            <img src="/img/topics/eletkozepi-valsag.jpg" alt="" class="img-responsive animated zoomIn animation-delay-8"> </div>
          <div class="col-md-6">
            <h3 class="text-normal animated fadeInUp animation-delay-4">{{ trans('navbar.life-crises') }}</h3>
            <p class="lead lead-md  animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
            <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
            <div class="">
              <a href="{{ route('topics.life-crises')}}" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                <i class="zmdi zmdi-info"></i> {{ trans('button.next') }}
              </a>
            </div>
          </div>
        </div>
      </div>
      <div role="tabpanel" class="tab-pane fade" id="resilience">
        <div class="row">
          <div class="col-md-6 col-md-push-6">
            <img src="/img/topics/reziliencia.jpg" alt="" class="img-responsive animated zoomIn animation-delay-8"> </div>
          <div class="col-md-6 col-md-pull-6">
            <h3 class="text-normal animated fadeInUp animation-delay-4">{{ trans('navbar.resilience') }}</h3>
            <p class="lead lead-md animated fadeInUp animation-delay-6">Create documents, spreadsheets and presentations from anywhere. Share them with teammates and work together on the same file, at the same time.</p>
            <p class="lead lead-md animated fadeInUp animation-delay-7">sing your work is easy with one login for everything you do. Administrative controls offer two-step verification to enhance security for the whole company.</p>
            <div class="">
              <a href="{{ route('topics.resilience')}}" class="btn btn-info btn-raised animated zoomIn animation-delay-10">
                <i class="zmdi zmdi-info"></i> {{ trans('button.next') }}
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
