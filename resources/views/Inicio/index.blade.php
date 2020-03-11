@extends('layout.main')
@section('contenido')
<div class="u-hero-v1">
      <div id="heroNav" class="js-slick-carousel u-slick"
           data-autoplay="true"
           data-speed="10000"
           data-adaptive-height="true"
           data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle"
           data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4"
           data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4"
           data-numbered-pagination="#slickPaging"
           data-nav-for="#heroNavThumb">
        <div class="js-slide">
          <div class="d-lg-flex align-items-lg-center u-hero-v1__main" style="background-image: url(../../assets/img/1920x800/bannerUno.png);">
            <div class="container space-3 space-top-md-5 space-top-lg-3">
              <div class="row">
                <div class="col-md-8 col-lg-6 position-relative">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="js-slide">
          <div class="d-lg-flex align-items-lg-center u-hero-v1__main" style="background-image: url(../../assets/img/1920x800/bannerDos.png);">
            <div class="container space-3 space-top-md-5 space-top-lg-3">
              <div class="row">
                <div class="col-md-8 col-lg-6">
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="js-slide">
          <div class="d-lg-flex align-items-lg-center u-hero-v1__main" style="background-image: url(../../assets/img/1920x800/bannerTres.jpg);">
            <div class="container space-3 space-top-md-5 space-top-lg-3">
              <div class="row">
                <div class="col-md-8 col-lg-6">
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
      <div class="container position-relative">
        <div id="slickPaging" class="u-slick__paging"></div>
      </div>
      <div id="heroNavThumb" class="js-slick-carousel u-slick"
           data-autoplay="true"
           data-speed="10000"
           data-is-thumbs="true"
           data-nav-for="#heroNav">
        <div class="js-slide">
        </div>
        <div class="js-slide">
        </div>
        <div class="js-slide">
        </div>
      </div>
</div>

<div class="container space-2">
    <div id="FAQCollapse" class="accordion">
            <div class="card">
                <div class="card-header card-collapse" id="FAQHeadingOne">
                <h5 class="mb-0">
                    <button type="button" class="btn btn-link btn-block d-flex justify-content-between card-btn p-3 collapsed" role="button" data-toggle="collapse" data-target="#FAQOne" aria-expanded="false" aria-controls="FAQOne">
                    Aspirantes

                    <span class="card-btn-arrow">
                        <span class="fas fa-arrow-down small"></span>
                    </span>
                    </button>
                </h5>
                </div>
                <div id="FAQOne" class="collapse" aria-labelledby="FAQHeadingOne" data-parent="#FAQCollapse" style="">
                <div class="card-body">
                    Yes, you can cancel anytime no questions are asked while you cancel but we would highly appreciate if you will give us some feedback.
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-collapse" id="FAQHeadingTwo">
                <h5 class="mb-0">
                    <button type="button" class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed p-3" role="button" data-toggle="collapse" data-target="#FAQTwo" aria-expanded="false" aria-controls="FAQTwo">
                    Estudiantes

                    <span class="card-btn-arrow">
                        <span class="fas fa-arrow-down small"></span>
                    </span>
                    </button>
                </h5>
                </div>
                <div id="FAQTwo" class="collapse" aria-labelledby="FAQHeadingTwo" data-parent="#FAQCollapse">
                <div class="card-body">
                    Once your team signs up for a subscription plan. enim eiusmod high life accusamus eoset dignissimos.
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-collapse" id="FAQHeadingThree">
                <h5 class="mb-0">
                    <button type="button" class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed p-3" role="button" data-toggle="collapse" data-target="#FAQThree" aria-expanded="false" aria-controls="FAQThree">
                    Estadia Profesional

                    <span class="card-btn-arrow">
                        <span class="fas fa-arrow-down small"></span>
                    </span>
                    </button>
                </h5>
                </div>
                <div id="FAQThree" class="collapse" aria-labelledby="FAQHeadingThree" data-parent="#FAQCollapse">
                <div class="card-body">
                    Our subscriptions are tiered. based on the number of people enim eiusmod high life accusamus terry richardson ad squid.
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-collapse" id="FAQHeadingFour">
                <h5 class="mb-0">
                    <button type="button" class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed p-3" role="button" data-toggle="collapse" data-target="#FAQFour" aria-expanded="false" aria-controls="FAQFour">
                    Bolsa de trabajo

                    <span class="card-btn-arrow">
                        <span class="fas fa-arrow-down small"></span>
                    </span>
                    </button>
                </h5>
                </div>
                <div id="FAQFour" class="collapse" aria-labelledby="FAQHeadingFour" data-parent="#FAQCollapse">
                <div class="card-body">
                    Protecting the data you trust to Front is our first priority. at vero eoset dignissimos ducimus qui blanditiis.
                </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header card-collapse" id="FAQHeadingFive">
                <h5 class="mb-0">
                    <button type="button" class="btn btn-link btn-block d-flex justify-content-between card-btn collapsed p-3" role="button" data-toggle="collapse" data-target="#FAQFive" aria-expanded="false" aria-controls="FAQFive">
                    Sistema Escolar

                    <span class="card-btn-arrow">
                        <span class="fas fa-arrow-down small"></span>
                    </span>
                    </button>
                </h5>
                </div>
                <div id="FAQFive" class="collapse" aria-labelledby="FAQHeadingFive" data-parent="#FAQCollapse">
                <div class="card-body">
                    We do not offer refunds apart leggings occaecat craft beer farm-to-table. raw leggings occaecat craft.
                </div>
                </div>
            </div>
    </div>
</div>

<div id="SVGwave1BottomSMShape" class="position-relative" style="">
      <div class="bg-img-hero text-center space-4" style="background-image: url(../../assets/img/1920x800/BannerVideo.png);">
        <a class="js-fancybox d-inline-block u-media-player mb-4" href="javascript:;" data-src="https://www.youtube.com/watch?v=JB0QLs7txA4" data-speed="700" data-animate-in="zoomIn" data-animate-out="zoomOut" data-caption="Front - Responsive Website Template">
          <span class="u-media-player__icon u-media-player__icon--lg">
            <span class="fas fa-play u-media-player__icon-inner"></span>
          </span>
        </a>
        <br>
      </div>
      <figure class="position-absolute right-0 bottom-0 left-0">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="none" x="0px" y="0px" width="100%" height="140px" viewBox="0 0
         300 100" style="margin-bottom: -8px; enable-background:new 0 0 300 100;" xml:space="preserve" class="injected-svg js-svg-injector" data-parent="#SVGwave1BottomSMShape">
            <style type="text/css">
            .wave-bottom-1-sm-0{fill:#FFFFFF;}
            </style>
            <g>
                <defs>
                    <rect id="waveBottom1SMID1" width="300" height="100"></rect>
                </defs>
                <clipPath id="waveBottom1SMID2">
                    <use xlink:href="#waveBottom1SMID1" style="overflow:visible;"></use>
                </clipPath>
                <path class="wave-bottom-1-sm-0 fill-white" opacity=".4" clip-path="url(#waveBottom1SMID2)" d="M10.9,63.9c0,0,42.9-34.5,87.5-14.2c77.3,35.1,113.3-2,146.6-4.7C293.7,41,315,61.2,315,61.2v54.4H10.9V63.9z"></path>
                <path class="wave-bottom-1-sm-0 fill-white" opacity=".4" clip-path="url(#waveBottom1SMID2)" d="M-55.7,64.6c0,0,42.9-34.5,87.5-14.2c77.3,35.1,113.3-2,146.6-4.7c48.7-4.1,69.9,16.2,69.9,16.2v54.4H-55.7     V64.6z"></path>
                <path class="wave-bottom-1-sm-0 fill-white" opacity=".4" fill-opacity="0" clip-path="url(#waveBottom1SMID2)" d="M23.4,118.3c0,0,48.3-68.9,109.1-68.9c65.9,0,98,67.9,98,67.9v3.7H22.4L23.4,118.3z"></path>
                <path class="wave-bottom-1-sm-0 fill-white" clip-path="url(#waveBottom1SMID2)" d="M-54.7,83c0,0,56-45.7,120.3-27.8c81.8,22.7,111.4,6.2,146.6-4.7c53.1-16.4,104,36.9,104,36.9l1.3,36.7l-372-3     L-54.7,83z"></path>
            </g>
        </svg>
      </figure>
</div>

<div class="container space-bottom-2 space-bottom-lg-3">
      <div class="row">
      <h2 class="h4 text-lh-md" style="text-align: center;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.</h2>
        <div class="col-lg-12 pt-12">
          <!-- Logos -->
          <div class="row text-center">
            <div class="col-4 py-4">
              <img class="u-clients" src="../../assets/svg/clients-logo/alphabet.svg" alt="Image Description">
            </div>
            <div class="col-4 py-4">
              <img class="u-clients" src="../../assets/svg/clients-logo/shopify.svg" alt="Image Description">
            </div>
            <div class="col-4 py-4">
              <img class="u-clients" src="../../assets/svg/clients-logo/slack.svg" alt="Image Description">
            </div>
            <div class="col-4 py-4">
              <img class="u-clients" src="../../assets/svg/clients-logo/google.svg" alt="Image Description">
            </div>
            <div class="col-4 py-4">
              <img class="u-clients" src="../../assets/svg/clients-logo/fitbit.svg" alt="Image Description">
            </div>
            <div class="col-4 py-4">
              <img class="u-clients" src="../../assets/svg/clients-logo/spotify.svg" alt="Image Description">
            </div>
            <div class="col-4 py-4">
              <img class="u-clients" src="../../assets/svg/clients-logo/mapbox.svg" alt="Image Description">
            </div>
            <div class="col-4 py-4">
              <img class="u-clients" src="../../assets/svg/clients-logo/uber.svg" alt="Image Description">
            </div>
            <div class="col-4 py-4">
              <img class="u-clients" src="../../assets/svg/clients-logo/airbnb.svg" alt="Image Description">
            </div>
          </div>
          <!-- End Logos -->
        </div>
      </div>
    </div>

@endsection
