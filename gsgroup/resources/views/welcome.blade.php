<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gs Group</title>
        <link rel="stylesheet" href="{{ asset('/css/style.css') }}" />
    </head>
    <body>
        <div style="width: 100%;height: 100vh;">
            @include('includes.nav')
            <header id="home" class="header text-white h-fullscreen text-center text-lg-left" style="background-color: #24292e;height: 100vh !important;">
                <canvas class="constellation" data-color="rgba(255,255,255,0.3)"></canvas>
                <div class="container">
                    <div class="row align-items-center h-100">

                    <div class="col-lg-6">
                        <h1>How GsGroup Works !</h1>
                        <p class="lead mt-5 mb-8">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Velit ad excepturi porro perspiciatis eaque blanditiis fuga. Esse id possimus nulla sequi, culpa ex corporis soluta consectetur quidem necessitatibus, molestias ipsa!.</p>
                        <p class="gap-xy">
                        <a class="btn btn-round btn-outline-light mw-150" href="#">Learn more</a>
                        @guest
                            <a class="btn btn-round btn-light mw-150" href="/register">Register Now</a>
                        @else
                        <a class="btn btn-round btn-light mw-150" href="/user-dashboard">Dashboard</a>
                        @endguest
                        </p>
                    </div>

                    <div class="col-lg-5 ml-auto">
                        <img class="mt-5" src="{{ asset('img/laptop-1.png') }}" alt="img">
                    </div>

                    </div>
                </div>
            </header>
            <section class="section">
        <div class="container">
          <header class="section-header">
            <small>Products</small>
            <h2>Working together with Gs Group</h2>
            <hr>
            <p class="lead">Our products allow businesses to be more reliable, flexible, and scalable. They help improve communication and make sense of massive amounts of data.</p>
          </header>


          <div class="row gap-y">

            <div class="col-6 col-md-4 col-xl-2">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                <p style="color: #78a300"><i class="icon-lightbulb lead-7"></i></p>
                <h6 class="mb-0"><strong>Support</strong></h6>
              </a>
            </div>


            <div class="col-6 col-md-4 col-xl-2">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                <p style="color: #eb4a62"><i class="icon-book-open lead-7"></i></p>
                <h6 class="mb-0"><strong>Guide</strong></h6>
              </a>
            </div>


            <div class="col-6 col-md-4 col-xl-2">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                <p style="color: #f69a3e"><i class="icon-chat lead-7"></i></p>
                <h6 class="mb-0"><strong>Chat</strong></h6>
              </a>
            </div>


            <div class="col-6 col-md-4 col-xl-2">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                <p style="color: #f0c93e"><i class="icon-mic lead-7"></i></p>
                <h6 class="mb-0"><strong>Talk</strong></h6>
              </a>
            </div>


            <div class="col-6 col-md-4 col-xl-2">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                <p style="color: #37b8af"><i class="icon-envelope lead-7"></i></p>
                <h6 class="mb-0"><strong>Message</strong></h6>
              </a>
            </div>


            <div class="col-6 col-md-4 col-xl-2">
              <a class="card card-body border hover-shadow-6 text-center py-6" href="#">
                <p style="color: #2faabc"><i class="icon-piechart lead-7"></i></p>
                <h6 class="mb-0"><strong>Explore</strong></h6>
              </a>
            </div>

          </div>
        </div>
      </section>
      <section class="section">
        <div class="container">

          <div class="row gap-y align-items-center">
            <div class="col-md-5 ml-auto">
              <h4>Make your customer service stand out</h4>
              <p>Reduce friction with software that’s designed to increase speed and efficiency—and turn your team of agents into experts.</p>
              <p>Achieves post from the here the on of the that deeply, had we size you've were any to an among that the clean usual. Finds thought, up you its didn't to much helped text box would his support it the a understood. Cooperator were her overgrown with to of his necessary long and made</p>
            </div>

            <div class="col-md-5 text-center order-md-first">
              <img src="{{ asset('img/14.png') }}" alt="...">
            </div>
          </div>


          <hr class="my-8">


          <div class="row gap-y align-items-center">
            <div class="col-md-5 mr-auto">
              <h4>Act with intelligence</h4>
              <p>Customize your reports and get insights into the metrics that matter: the health of your customer base and how it affects your business.</p>
              <p>Sentences client few stands use goals a although purpose to perfectly we at wonder, the mice seven and own help was process was on to of was back has time over out to harder takes writers, a o'clock the to as for on more as it a and it I and of build or how a generality would divided important. The evils boss curse the itch if on from precipitate.</p>
            </div>

            <div class="col-md-5">
              <img src="{{ asset('img/15.png') }}" alt="...">
            </div>
          </div>


        </div>
      </section>
      <section class="section text-white bg-dark bg-img" style="background-image: url({{ asset('img/14.jpg') }})" data-overlay="6">
        <div class="container">
          <div class="row gap-y align-items-center">

            <div class="col-md-5">
              <p class="text-uppercase small opacity-70 fw-600 ls-1">Head Office</p>
              <h5>Seattle, WA</h5>
              <br>
              <p>2651 Main Street, Suit 124<br>Seattle, WA, 98101</p>
              <p>Phone: +1 987 123 6548<br>Email: hello@thetheme.io</p>
              <br>
              <h6>Follow Us</h6>
              <div class="social social-sm social-inverse">
                <a class="social-twitter" href="#"><i class="fa fa-twitter"></i></a>
                <a class="social-facebook" href="#"><i class="fa fa-facebook"></i></a>
                <a class="social-instagram" href="#"><i class="fa fa-instagram"></i></a>
                <a class="social-dribbble" href="#"><i class="fa fa-dribbble"></i></a>
              </div>
            </div>


            <div class="col-md-7">
              <div class="h-400 rounded" data-provide="map" data-lat="44.540" data-lng="-78.556" data-zoom="10" data-marker-lat="44.540" data-marker-lng="-78.556" data-info="&lt;strong&gt;Our office&lt;/strong&gt;&lt;br&gt;3652 Seventh Avenue, Los Angeles, CA" data-style="light"></div>
            </div>

          </div>
        </div>
      </section>
      

        </div>
        <script src="{{ asset('/js/script.js') }}"></script>
    </body>
</html>
