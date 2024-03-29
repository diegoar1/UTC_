<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Title -->
  <title>Universidad Tecnológica de Cancún</title>
  <link rel="shortcut icon" href="..\assets\img\ut_favicon.png"/>
  <!-- Required Meta Tags Always Come First -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Favicon -->

  <!-- Google Fonts -->
  <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- CSS Implementing Plugins -->
  <link rel="stylesheet" href="../../assets/vendor/font-awesome/css/fontawesome-all.min.css">
  <link rel="stylesheet" href="../../assets/vendor/animate.css/animate.min.css">
  <link rel="stylesheet" href="../../assets/vendor/hs-megamenu/src/hs.megamenu.css">
  <link rel="stylesheet" href="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
  <link rel="stylesheet" href="../../assets/vendor/fancybox/jquery.fancybox.css">
  <link rel="stylesheet" href="../../assets/vendor/slick-carousel/slick/slick.css">

  <!-- CSS Front Template -->
  <link rel="stylesheet" href="../../assets/css/theme.css">
</head>
<body>
  <!-- ========== HEADER ========== -->
  <header id="header" class="u-header u-header--abs-top-md u-header--bg-transparent u-header--show-hide-md" data-header-fix-moment="500" data-header-fix-effect="slide">
    <div class="u-header__section">
      <div id="logoAndNav" class="container">
        <nav class="js-mega-menu navbar navbar-expand-md u-header__navbar u-header__navbar--no-space">
          <a class="navbar-brand u-header__navbar-brand u-header__navbar-brand-center" href="/" aria-label="Front">
            <img src="..\assets\img\logoUT.png">
          </a>
          <button type="button" class="navbar-toggler btn u-hamburger"
                  aria-label="Toggle navigation"
                  aria-expanded="false"
                  aria-controls="navBar"
                  data-toggle="collapse"
                  data-target="#navBar">
            <span id="hamburgerTrigger" class="u-hamburger__box">
              <span class="u-hamburger__inner"></span>
            </span>
          </button>
          <div id="navBar" class="collapse navbar-collapse u-header__navbar-collapse">
            <ul class="navbar-nav u-header__navbar-nav">
              <li class="nav-item hs-has-mega-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="slideInUp"
                  data-animation-out="fadeOut"
                  data-position="left"
                  >
                <a id="homeMegaMenu" class="nav-link u-header__nav-link" href="/" aria-haspopup="true" aria-expanded="false">Inicio</a>
              </li>
              <li class="nav-item hs-has-mega-menu u-header__nav-item"
                  data-event="hover"
                  data-animation-in="slideInUp"
                  data-animation-out="fadeOut"
                  data-position="left"
                  >
                <a id="homeMegaMenu" class="nav-link u-header__nav-link" href="/login" aria-haspopup="true" aria-expanded="false">UTC Online</a>
              </li>
            </ul>
          </div>
          <!-- End Navigation -->
        </nav>
        <!-- End Nav -->
      </div>
    </div>
  </header>
  <!-- ========== END HEADER ========== -->

  <main id="content" role="main">
    @yield('contenido')
  </main>

  <footer style="background-color: #38393c;">
    <div class="border-bottom">
      <div class="container space-2">
        <div class="row justify-content-md-between">
          <div class="col-sm-12 col-lg-12 mb-4 mb-lg-0" style="text-align: center;">
                <p>Universidad Tecnológica de Cancún
            Organismo Público Descentralizado del Gobierno del Estado de Quintana Roo
            Carretera Cancún-Aeropuerto, Km. 11.5, S.M. 299, Mz. 5, Lt 1
            Cancún, Quintana Roo, C.P. 77565
            Tel. 01 (998) 881 19 00
            Política de Privacidad</p>
          </div>
        </div>
        <div class="row justify-content-md-between">
            <div class="col-sm-4 col-lg-2 mb-4 mb-lg-0">
                <h4 class="h6 font-weight-semi-bold" style="color: white;">Acerca de</h4>

                <!-- List Group -->
                <ul class="list-group list-group-flush list-group-borderless mb-0">
                <li><a style="color: white;" href="../pages/about-agency.html">Inicio</a></li>
                <li><a style="color: white;" href="../pages/services-agency.html">UT online</a></li>
                <li><a  style="color: white;" href="../pages/careers.html">Plan de estudios</a></li>
                </ul>
                <!-- End List Group -->
            </div>

            <div class="col-sm-4 col-lg-2 mb-4 mb-lg-0">
                <!-- <h4 class="h6 font-weight-semi-bold" style="color: white;" >Account</h4>

                <!-- List Group -->
                <!-- <ul class="list-group list-group-flush list-group-borderless mb-0">
                <li><a style="color: white;" href="../account/dashboard.html">Account</a></li>
                <li><a  style="color: white;" href="../account/my-tasks.html">My tasks</a></li>
                <li><a  style="color: white;" href="../account/projects.html">Projects</a></li>
                </ul>  -->
                <!-- End List Group -->
            </div>

            <div class="col-sm-4 col-lg-2 mb-4 mb-lg-0">
                <h4 class="h6 font-weight-semi-bold" style="color: white;">Redes sociales</h4>

                <!-- List Group -->
                <ul class="list-group list-group-flush list-group-borderless mb-0">
                <li><a  style="color: white;" href="../pages/faq.html">Facebook</a></li>
                <li><a  style="color: white;" href="../pages/terms.html">Twitter</a></li>
                <li><a  style="color: white;" href="../pages/privacy.html">Google</a></li>
                </ul>
                <!-- End List Group -->
            </div>
        </div>
      </div>
    </div>

    <div class="container text-center space-1">
      <a class="d-inline-flex align-items-center mb-2" href="/" aria-label="Front">
        <img src="..\assets\img\logoUT.png">
      </a>
      <p class="small text-muted">Copyright &copy; 2020. Universidad Tecnológica de Cancún.</p>
      <ul class="">
          <li class="list-inline-item">
            <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent rounded-circle" href="https://www.facebook.com/Universidad-Tecnol%C3%B3gica-de-Canc%C3%BAn-UT-Canc%C3%BAn-231379310234529/">
              <span class="fab fa-facebook-f btn-icon__inner"></span>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent rounded-circle"href="https://plus.google.com/117766673021897954443">
              <span class="fab fa-google btn-icon__inner"></span>
            </a>
          </li>
          <li class="list-inline-item">
            <a class="btn btn-sm btn-icon btn-soft-secondary btn-bg-transparent rounded-circle" href="https://twitter.com/UTCancun">
              <span class="fab fa-twitter btn-icon__inner"></span>
            </a>
          </li>
        </ul>
    </div>
    <!-- End Copyright -->
  </footer>

  <!-- Account Sidebar Navigation -->
  <aside id="sidebarContent" class="u-sidebar" aria-labelledby="sidebarNavToggler">
    <div class="u-sidebar__scroller">
      <div class="u-sidebar__container">
        <div class="u-header-sidebar__footer-offset">
          <!-- Toggle Button -->
          <div class="d-flex align-items-center pt-4 px-7">
            <button type="button" class="close ml-auto"
                    aria-controls="sidebarContent"
                    aria-haspopup="true"
                    aria-expanded="false"
                    data-unfold-event="click"
                    data-unfold-hide-on-scroll="false"
                    data-unfold-target="#sidebarContent"
                    data-unfold-type="css-animation"
                    data-unfold-animation-in="fadeInRight"
                    data-unfold-animation-out="fadeOutRight"
                    data-unfold-duration="500">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <!-- End Toggle Button -->

          <!-- Content -->
          <div class="js-scrollbar u-sidebar__body">
            <div class="u-sidebar__content u-header-sidebar__content">
              <form class="js-validate">
                <!-- Login -->
                <div id="login" data-target-group="idForm">
                  <!-- Title -->
                  <header class="text-center mb-7">
                    <h2 class="h4 mb-0">Welcome Back!</h2>
                    <p>Login to manage your account.</p>
                  </header>
                  <!-- End Title -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message js-focus-state">
                      <label class="sr-only" for="signinEmail">Email</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="signinEmailLabel">
                            <span class="fas fa-user"></span>
                          </span>
                        </div>
                        <input type="email" class="form-control" name="email" id="signinEmail" placeholder="Email" aria-label="Email" aria-describedby="signinEmailLabel" required
                               data-msg="Please enter a valid email address."
                               data-error-class="u-has-error"
                               data-success-class="u-has-success">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message js-focus-state">
                      <label class="sr-only" for="signinPassword">Password</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="signinPasswordLabel">
                            <span class="fas fa-lock"></span>
                          </span>
                        </div>
                        <input type="password" class="form-control" name="password" id="signinPassword" placeholder="Password" aria-label="Password" aria-describedby="signinPasswordLabel" required
                               data-msg="Your password is invalid. Please try again."
                               data-error-class="u-has-error"
                               data-success-class="u-has-success">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <div class="d-flex justify-content-end mb-4">
                    <a class="js-animation-link small link-muted" href="javascript:;"
                       data-target="#forgotPassword"
                       data-link-group="idForm"
                       data-animation-in="slideInUp">Forgot Password?</a>
                  </div>

                  <div class="mb-2">
                    <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Login</button>
                  </div>

                  <div class="text-center mb-4">
                    <span class="small text-muted">Do not have an account?</span>
                    <a class="js-animation-link small" href="javascript:;"
                       data-target="#signup"
                       data-link-group="idForm"
                       data-animation-in="slideInUp">Signup
                    </a>
                  </div>

                  <div class="text-center">
                    <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                  </div>

                  <!-- Login Buttons -->
                  <div class="d-flex">
                    <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                      <span class="fab fa-facebook-square mr-1"></span>
                      Facebook
                    </a>
                    <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                      <span class="fab fa-google mr-1"></span>
                      Google
                    </a>
                  </div>
                  <!-- End Login Buttons -->
                </div>

                <!-- Signup -->
                <div id="signup" style="display: none; opacity: 0;" data-target-group="idForm">
                  <!-- Title -->
                  <header class="text-center mb-7">
                    <h2 class="h4 mb-0">Welcome to Front.</h2>
                    <p>Fill out the form to get started.</p>
                  </header>
                  <!-- End Title -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message js-focus-state">
                      <label class="sr-only" for="signupEmail">Email</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="signupEmailLabel">
                            <span class="fas fa-user"></span>
                          </span>
                        </div>
                        <input type="email" class="form-control" name="email" id="signupEmail" placeholder="Email" aria-label="Email" aria-describedby="signupEmailLabel" required
                               data-msg="Please enter a valid email address."
                               data-error-class="u-has-error"
                               data-success-class="u-has-success">
                      </div>
                    </div>
                  </div>
                  <!-- End Input -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message js-focus-state">
                      <label class="sr-only" for="signupPassword">Password</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="signupPasswordLabel">
                            <span class="fas fa-lock"></span>
                          </span>
                        </div>
                        <input type="password" class="form-control" name="password" id="signupPassword" placeholder="Password" aria-label="Password" aria-describedby="signupPasswordLabel" required
                               data-msg="Your password is invalid. Please try again."
                               data-error-class="u-has-error"
                               data-success-class="u-has-success">
                      </div>
                    </div>
                  </div>
                  <!-- End Input -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message js-focus-state">
                      <label class="sr-only" for="signupConfirmPassword">Confirm Password</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="signupConfirmPasswordLabel">
                            <span class="fas fa-key"></span>
                          </span>
                        </div>
                        <input type="password" class="form-control" name="confirmPassword" id="signupConfirmPassword" placeholder="Confirm Password" aria-label="Confirm Password" aria-describedby="signupConfirmPasswordLabel" required
                               data-msg="Password does not match the confirm password."
                               data-error-class="u-has-error"
                               data-success-class="u-has-success">
                      </div>
                    </div>
                  </div>
                  <!-- End Input -->

                  <div class="mb-2">
                    <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Get Started</button>
                  </div>

                  <div class="text-center mb-4">
                    <span class="small text-muted">Already have an account?</span>
                    <a class="js-animation-link small" href="javascript:;"
                       data-target="#login"
                       data-link-group="idForm"
                       data-animation-in="slideInUp">Login
                    </a>
                  </div>

                  <div class="text-center">
                    <span class="u-divider u-divider--xs u-divider--text mb-4">OR</span>
                  </div>

                  <!-- Login Buttons -->
                  <div class="d-flex">
                    <a class="btn btn-block btn-sm btn-soft-facebook transition-3d-hover mr-1" href="#">
                      <span class="fab fa-facebook-square mr-1"></span>
                      Facebook
                    </a>
                    <a class="btn btn-block btn-sm btn-soft-google transition-3d-hover ml-1 mt-0" href="#">
                      <span class="fab fa-google mr-1"></span>
                      Google
                    </a>
                  </div>
                  <!-- End Login Buttons -->
                </div>
                <!-- End Signup -->

                <!-- Forgot Password -->
                <div id="forgotPassword" style="display: none; opacity: 0;" data-target-group="idForm">
                  <!-- Title -->
                  <header class="text-center mb-7">
                    <h2 class="h4 mb-0">Recover Password.</h2>
                    <p>Enter your email address and an email with instructions will be sent to you.</p>
                  </header>
                  <!-- End Title -->

                  <!-- Form Group -->
                  <div class="form-group">
                    <div class="js-form-message js-focus-state">
                      <label class="sr-only" for="recoverEmail">Your email</label>
                      <div class="input-group">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="recoverEmailLabel">
                            <span class="fas fa-user"></span>
                          </span>
                        </div>
                        <input type="email" class="form-control" name="email" id="recoverEmail" placeholder="Your email" aria-label="Your email" aria-describedby="recoverEmailLabel" required
                               data-msg="Please enter a valid email address."
                               data-error-class="u-has-error"
                               data-success-class="u-has-success">
                      </div>
                    </div>
                  </div>
                  <!-- End Form Group -->

                  <div class="mb-2">
                    <button type="submit" class="btn btn-block btn-sm btn-primary transition-3d-hover">Recover Password</button>
                  </div>

                  <div class="text-center mb-4">
                    <span class="small text-muted">Remember your password?</span>
                    <a class="js-animation-link small" href="javascript:;"
                       data-target="#login"
                       data-link-group="idForm"
                       data-animation-in="slideInUp">Login
                    </a>
                  </div>
                </div>
                <!-- End Forgot Password -->
              </form>
            </div>
          </div>
          <!-- End Content -->
        </div>

        <!-- Footer -->
        <footer id="SVGwaveWithDots" class="svg-preloader u-sidebar__footer u-sidebar__footer--account">
          <ul class="list-inline mb-0">
            <li class="list-inline-item pr-3">
              <a class="u-sidebar__footer--account__text" href="../pages/privacy.html">Privacy</a>
            </li>
            <li class="list-inline-item pr-3">
              <a class="u-sidebar__footer--account__text" href="../pages/terms.html">Terms</a>
            </li>
            <li class="list-inline-item">
              <a class="u-sidebar__footer--account__text" href="../pages/help.html">
                <i class="fas fa-info-circle"></i>
              </a>
            </li>
          </ul>

          <!-- SVG Background Shape -->
          <div class="position-absolute right-0 bottom-0 left-0">
            <img class="js-svg-injector" src="../../assets/svg/components/wave-bottom-with-dots.svg" alt="Image Description"
                   data-parent="#SVGwaveWithDots">
          </div>
          <!-- End SVG Background Shape -->
        </footer>
        <!-- End Footer -->
      </div>
    </div>
  </aside>
  <!-- End Account Sidebar Navigation -->

  <!-- Go to Top -->
  <a class="js-go-to u-go-to" href="#"
    data-position='{"bottom": 15, "right": 15 }'
    data-type="fixed"
    data-offset-top="400"
    data-compensation="#header"
    data-show-effect="slideInUp"
    data-hide-effect="slideOutDown">
    <span class="fas fa-arrow-up u-go-to__inner"></span>
  </a>
  <!-- End Go to Top -->

  <!-- JS Global Compulsory -->
  <script src="../../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../../assets/vendor/jquery-migrate/dist/jquery-migrate.min.js"></script>
  <script src="../../assets/vendor/popper.js/dist/umd/popper.min.js"></script>
  <script src="../../assets/vendor/bootstrap/bootstrap.min.js"></script>

  <!-- JS Implementing Plugins -->
  <script src="../../assets/vendor/hs-megamenu/src/hs.megamenu.js"></script>
  <script src="../../assets/vendor/svg-injector/dist/svg-injector.min.js"></script>
  <script src="../../assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
  <script src="../../assets/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
  <script src="../../assets/vendor/fancybox/jquery.fancybox.min.js"></script>
  <script src="../../assets/vendor/typed.js/lib/typed.min.js"></script>
  <script src="../../assets/vendor/slick-carousel/slick/slick.js"></script>
  <script src="../../assets/vendor/dzsparallaxer/dzsparallaxer.js"></script>

  <!-- JS Front -->
  <script src="../../assets/js/hs.core.js"></script>
  <script src="../../assets/js/components/hs.header.js"></script>
  <script src="../../assets/js/components/hs.unfold.js"></script>
  <script src="../../assets/js/components/hs.focus-state.js"></script>
  <script src="../../assets/js/components/hs.malihu-scrollbar.js"></script>
  <script src="../../assets/js/components/hs.validation.js"></script>
  <script src="../../assets/js/components/hs.fancybox.js"></script>
  <script src="../../assets/js/components/hs.slick-carousel.js"></script>
  <script src="../../assets/js/components/hs.show-animation.js"></script>
  <script src="../../assets/js/components/hs.svg-injector.js"></script>
  <script src="../../assets/js/components/hs.go-to.js"></script>

  <!-- JS Plugins Init. -->
  <script>
    $(window).on('load', function () {
      // initialization of HSMegaMenu component
      $('.js-mega-menu').HSMegaMenu({
        event: 'hover',
        pageContainer: $('.container'),
        breakpoint: 767.98,
        hideTimeOut: 0
      });

      // initialization of svg injector module
      $.HSCore.components.HSSVGIngector.init('.js-svg-injector');
    });

    $(document).on('ready', function () {
      // initialization of header
      $.HSCore.components.HSHeader.init($('#header'));

      // initialization of unfold component
      $.HSCore.components.HSUnfold.init($('[data-unfold-target]'), {
        afterOpen: function () {
          $(this).find('input[type="search"]').focus();
        }
      });

      // initialization of malihu scrollbar
      $.HSCore.components.HSMalihuScrollBar.init($('.js-scrollbar'));

      // initialization of forms
      $.HSCore.components.HSFocusState.init();

      // initialization of form validation
      $.HSCore.components.HSValidation.init('.js-validate', {
        rules: {
          confirmPassword: {
            equalTo: '#signupPassword'
          }
        }
      });

      // initialization of show animations
      $.HSCore.components.HSShowAnimation.init('.js-animation-link');

      // initialization of fancybox
      $.HSCore.components.HSFancyBox.init('.js-fancybox');

      // initialization of text animation (typing)
    //   var typed = new Typed(".u-text-animation.u-text-animation--typing", {
    //     strings: ["more professional.", "perfect in every way.", "astonishing."],
    //     typeSpeed: 60,
    //     loop: true,
    //     backSpeed: 25,
    //     backDelay: 1500
    //   });

      // initialization of slick carousel
      $.HSCore.components.HSSlickCarousel.init('.js-slick-carousel');

      // initialization of go to
      $.HSCore.components.HSGoTo.init('.js-go-to');
    });
  </script>
</body>
</html>
