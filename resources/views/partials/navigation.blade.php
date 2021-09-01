  <!-- Header -->
  <header id="header" class="header">
      <div class="header-top bg-theme-color-2 sm-text-center p-0">
          <div class="container">
              <div class="row">
                  <div class="col-md-4">
                      <div class="widget no-border m-0">
                          <ul class="list-inline font-13 sm-text-center mt-5">
                              <li>
                                  <a class="text-white" href="#">FAQ</a>
                              </li>
                              <li class="text-white">|</li>
                              <li>
                                  <a class="text-white" href="#">Help Desk</a>
                              </li>
                              <li class="text-white">|</li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-md-8">
                      <div class="widget m-0 pull-right flip sm-pull-none sm-text-center">
                          <ul class="list-inline mt-sm-10">
                              <li class="mb-0 pb-0">

                              </li>
                          </ul>
                      </div>
                      <div class="widget no-border m-0 mr-15 mr-sm-0 pull-right flip sm-pull-none sm-text-center">
                          <ul class="styled-icons icon-circled icon-sm">
                              <li><a href="#"><i class="fa fa-facebook text-white"></i></a></li>
                              <li><a href="#"><i class="fa fa-twitter text-white"></i></a></li>
                              <li><a href="#"><i class="fa fa-google-plus text-white"></i></a></li>
                              <li><a href="#"><i class="fa fa-instagram text-white"></i></a></li>
                              <li><a href="#"><i class="fa fa-linkedin text-white"></i></a></li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="header-middle p-0 bg-lightest xs-text-center">
          <div class="container pt-0 pb-0">
              <div class="row">
                  <div class="col-xs-12 col-sm-3 col-md-6">
                      <div class="widget no-border m-0">
                          <a href="/" class="menuzord-brand pull-left flip xs-pull-center mt-10 mb-10">
                              {{-- <img alt="" src="images/logo-wide.png"> --}}
                              <h3 class="text-uppercase text-bold">{{ trans('panel.site_title') }}</h3>
                          </a>
                      </div>
                  </div>
                  <div class="col-xs-12 col-sm-4 col-md-3">
                      <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
                          <ul class="list-inline">
                              <li><i class="fa fa-phone-square text-theme-colored font-36 mt-5 sm-display-block"></i>
                              </li>
                              <li>
                                  <a href="tel:{{ trans('panel.phone') }}" class="font-12 text-gray text-uppercase">Call us today!</a>
                                  <h5 class="font-14 m-0"> {{ trans('panel.phone') }}</h5>
                              </li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-xs-12 col-sm-4 col-md-3">
                      <div class="widget no-border pull-right sm-pull-none sm-text-center mt-10 mb-10 m-0">
                          <ul class="list-inline">
                              <li><i class="fa fa-clock-o text-theme-colored font-36 mt-5 sm-display-block"></i></li>
                              <li>
                                  <a href="#" class="font-12 text-gray text-uppercase">We are open!</a>
                                  <h5 class="font-13 text-black m-0"> {{ trans('panel.open_hours') }}</h5>
                              </li>
                          </ul>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="header-nav">
          <div class="header-nav-wrapper navbar-scrolltofixed bg-theme-colored border-bottom-theme-color-2-1px">
              <div class="container">
                  <nav id="menuzord" class="menuzord bg-theme-colored pull-left flip menuzord-responsive">
                      <ul class="menuzord-menu">
                          <li class="active"><a href="/">Home</a>
                          </li>
                          <li><a href="#">Services</a>
                          </li>
                          <li><a href="#">About Us</a>
                          </li>
                          <li><a href="#">Gallery</a>
                          </li>
                          <li><a href="#home">Experts</a>
                          </li>
                          <li><a href="#">Blog</a>
                          </li>
                      </ul>
                      <ul class="pull-right flip hidden-sm hidden-xs">
                          <li>
                              <!-- Modal: Book Now Starts -->
                              <a class="btn btn-colored btn-flat bg-theme-color-2 text-white font-14 bs-modal-ajax-load mt-0 p-25 pr-15 pl-15"
                                  data-toggle="modal" data-target="#BSParentModal"
                                  href="ajax-load/reservation-form.html">Book Now</a>
                              <!-- Modal: Book Now End -->
                          </li>
                      </ul>
                  </nav>
              </div>
          </div>
      </div>
  </header>
