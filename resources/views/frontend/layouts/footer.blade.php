  <!-- footer start -->
  <footer class="footer widget-footer bg-base-black overflow-hidden clearfix d-none">
      <div class="prt-row-wrapper-bg-layer prt-bg-layer position-relative"></div>
      <div class="first-footer bg-base-black">
          <div class="container">
              {{-- <div class="row prt-vertical_sep style4">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="widget widget_text widget_text-wrap d-flex justify-content-between ">
                        <div class="first-footer-desc d-flex overflow-hidden">
                            <h2>Have an amazing layout?Let’s talk</h2>
                            <img width="39" height="34" class="img-fluid" src="{{asset('frontend/images/foooter-mail-img.png')}}" alt="image">
                        </div>
                        <div class="footer-btn">
                            <a class="prt-btn prt-btn-size-md prt-btn-shape-rounded prt-btn-style-border prt-btn-color-white" href="contact-us.html">Contact us</a>
                        </div>
                    </div>
                </div> --}}
          </div>
      </div>
      </div>
      <div class="second-footer bg-base-black">
          <div class="container">
              <div class="row px-xl-2">
                  <div class=" col-lg-4 col-md-6 ">
                      <div class="widget widget_text footer-widget-box">
                          <h1 class="mb-0"><a class="home-link d-inline-block pb-0 mb-0" href="{{ url('/') }}" >
                                  <img id="logo-img-2" height="20" width="150"
                                      class=" d-block img-fluid auto_size  mx-0 mb-0" src="{{ asset('frontend/logo.jpeg') }}"
                                      alt="logo-img">
                              </a></h1>

                          <p class="text-white">Infrastructure India Is The Leading Suppliers Of Imported Techncologies Plants & Machinerys For  RECYCLING | RENEWABLE ENERGY | POWER | STEEL | FORGING | HIGH PERFORMANCE GEOTECHNCIAL.</p>

                      </div>
                  </div>

                  <div class="col-lg-4 col-md-6 padding-left-60">
                      <div class="widget widget_text footer-widget-box">
                          <h3 class="widget-title-h3 mb-0">Quick links</h3>
                          <ul class="menu-footer-link">
                              <li><a href="#">Home</a></li>
                              <li><a href="{{ url('company-profile') }}">Company Profile</a></li>
                              <li><a href="{{ url('latest-offers') }}">Latest Offers</a></li>
                              <li><a href="{{ url('business-process') }}">Business Process</a></li>
                              <li><a href="{{ url('exhibitions') }}">Exhibitions</a></li>
                              <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                              <li><a href="{{ url('sitemap') }}">Sitemap</a></li>
                          </ul>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6">
                      <div class="widget widget_text footer-widget-box">
                          <h3 class="widget-title-h3 mb-0">Contact Info</h3>
                          <ul class="menu-footer-link">

                              <li> <i class="fa fa-map-marker mx-1"></i> Mumbai, India</li>
                              <li>
                                  <i class="fa fa-envelope mx-1">
                                  </i> <a href="mailto:infraindiamach.com">infraindiamach.com</a>
                              </li>

                          </ul>

                          {{-- <div class="team-detail-social-icon-list pt-15">
                              <ul class="social-media contact-sociali-icon">
                                  <li class="mb-0"><a href="#"><i class="fa fa-facebook"
                                              aria-hidden="true"></i></a></li>
                                  <li class="mb-0 twitter"><a href="#"><i class="flaticon-twitter"
                                              aria-hidden="true"></i></a></li>
                                  <li class="mb-0"><a href="#"><i class="fa fa-linkedin"
                                              aria-hidden="true"></i></a></li>
                                  <li class="mb-0"><a href="#"><i class="fa fa-instagram"
                                              aria-hidden="true"></i></a></li>
                              </ul>
                          </div> --}}
                      </div>
                  </div>



              </div>
          </div>
      </div>
      <div class="bottom-footer bottom-footer-border  bg-base-black">
          <div class="container">
              <div class="row">
                  <div class="col-lg-12 text-center">
                      <hr>
                      <div class="copyright justify-content-center pt-0">
                          <div class="cpy-text text-center">
                              <p class="mb-0">© Copyright {{ date('Y') }} All Rights Reserved Infrastructure India Mach |
                                  Designed & Developed By <a target="black" href="https://acetrot.com/"
                                      class="acetrot">Acetrot</a> </p>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </footer>
  <!-- footer end -->

  <!-- back-to-top start -->
  <a id="totop" href="#top">
      <i class="icon-angle-up"></i>
  </a>
  <!-- back-to-top end -->
  </div>
  <!-- page end -->
  <!-- Javascript -->
  <script src="{{ asset('frontend/js/jquery-3.7.1.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery-migrate-3.4.1.min.js') }}"></script>
  <script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/js/nouislider.min.js') }}"></script>
  <script src="{{ asset('frontend/js/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/js/Scrolltrigger.js') }}"></script>
  <script src="{{ asset('frontend/js/Splittext.js') }}"></script>
  <script src="{{ asset('frontend/js/cursor.js') }}"></script>
  <script src="{{ asset('frontend/js/gsap.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery-validate.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery.prettyPhoto.js') }}"></script>
  <script src="{{ asset('frontend/js/slick.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery-waypoints.js') }}"></script>
  <script src="{{ asset('frontend/js/numinate.min.js') }}"></script>
  <script src="{{ asset('frontend/js/smoothscroll.js') }}"></script>
  <script src="{{ asset('frontend/js/imagesloaded.min.js') }}"></script>
  <script src="{{ asset('frontend/js/jquery-isotope.js') }}"></script>
  <script src="{{ asset('frontend/js/circle-progress.min.js') }}"></script>
  <script src="{{ asset('frontend/js/main.js') }}"></script>
  <script src="{{ asset('frontend/js/aos.js') }}"></script>
  <script>
      AOS.init({
          offset: 0,
          duration: 400,
          delay: 0,
          once: true,
      });
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/lightgallery.min.js"
      integrity="sha512-jEJ0OA9fwz5wUn6rVfGhAXiiCSGrjYCwtQRUwI/wRGEuWRZxrnxoeDoNc+Pnhx8qwKVHs2BRQrVR9RE6T4UHBg=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/thumbnail/lg-thumbnail.umd.min.js"
      integrity="sha512-dc8xJSGs0ib9uo0fLT/v4wp2LG7+4OSzc+UpFiIKiv6QP/e4hZH/S8manUCTtO3tNVGzcje8uJjSdL+NH29blQ=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/2.7.2/plugins/zoom/lg-zoom.umd.min.js"
      integrity="sha512-OUF2jbRheQR5yXPCvXN71udWa5cvwPf+shcXM+5GrW1vtNurTn7az8LCP3hS50gm17ULXdh3cdkhiPa0Qqyczw=="
      crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <!-- Javascript-end -->
  <script type="text/javascript">
      lightGallery(document.getElementById('lightgallery'), {
          plugins: [lgZoom, lgThumbnail],
          licenseKey: 'your_license_key',
          speed: 500,
          selector: '#lightgallery > div > a  '
      });
  </script>

  <script src="{{ asset('backend/plugins/notification/snackbar/snackbar.min.js') }}"></script>
  <script>
      @if (Session::get('alert-type') == 'success')
          @if (Session::has('message'))
              Snackbar.show({
                  text: "{{ Session::get('message') }}",
                  pos: 'top-right',
                  actionTextColor: '#fff',
                  backgroundColor: '#1abc9c'
              });
          @endif
      @elseif (Session::get('alert-type') == 'info')
          @if (Session::has('message'))
              Snackbar.show({
                  text: "{{ Session::get('message') }}",
                  pos: 'top-right',
                  actionTextColor: '#fff',
                  backgroundColor: '#2196f3'
              });
          @endif
      @elseif (Session::get('alert-type') == 'error')
          @if (Session::has('message'))
              Snackbar.show({
                  text: "{{ Session::get('message') }}",
                  pos: 'top-right',
                  actionTextColor: '#fff',
                  backgroundColor: '#e7515a'
              });
          @endif
      @else
          @if (Session::has('message'))
              Snackbar.show({
                  text: "{{ Session::get('message') }}",
                  pos: 'top-right',
                  actionTextColor: '#fff',
                  backgroundColor: '#3b3f5c'
              });
          @endif
      @endif
  </script>
