@include('cyborg.header')
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <div class="page-content">

          <!-- ***** Featured Games Start ***** -->
          <div class="row">
            <div class="col-lg-8">
             @yield ('content')
            </div>
            <div class="col-lg-4">

              @yield('extra')
            </div>
          </div>
   
        </div>
      </div>
    </div>
  </div>
  @include('cyborg.footer')