<!DOCTYPE html>
<html class="no-js">
    <!-- Mirrored from www.free-css.com/khach/assets/files/free-css-templates/preview/page250/24-news/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jun 2021 10:10:59 GMT -->
    <!-- Added by HTTrack -->
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <!-- /Added by HTTrack -->
    <head>
        <base href="{{ asset('') }}">
        <title>Website Review / Đánh giá sản phẩm</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" type="text/css" href="khach/assets/css/plugins.css" />
        <link rel="stylesheet" type="text/css" href="khach/assets/css/style.css" />
        <script src="khach/assets/js/modernizr-3.5.0.min.js"></script>
        <style type="text/css">
            #freecssfooter {
                display: block;
                width: 100%;
                padding: 120px 0 20px;
                overflow: hidden;
                background-color: transparent;
                z-index: 5000;
                text-align: center;
            }
            #freecssfooter div#fcssholder div {
                display: none;
            }
            #freecssfooter div#fcssholder div:first-child {
                display: block;
            }
            #freecssfooter div#fcssholder div:first-child a {
                float: none;
                margin: 0 auto;
            }
        </style>
    </head>
    <body>
        <script type="text/javascript">
            (function () {
                var bsa = document.createElement("script");
                bsa.type = "text/javascript";
                bsa.async = true;
                bsa.src = "../../../../../../../s3.buysellads.com/ac/bsa.js";
                (document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]).appendChild(bsa);
            })();
        </script>
        
        <div class="container-fluid">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-3 fh5co_padding_menu"><img src="khach/assets/images/logo.png" alt="website template image" class="fh5co_logo_width" /></div>
                    <div class="col-12 col-md-9 align-self-center fh5co_mediya_right">
                        <div class="text-center d-inline-block">
                            <a class="fh5co_display_table">
                                <div class="fh5co_verticle_middle"><i class="fa fa-search"></i></div>
                            </a>
                        </div>
                        <div class="text-center d-inline-block">
                            <a class="fh5co_display_table">
                                <div class="fh5co_verticle_middle"><i class="fa fa-linkedin"></i></div>
                            </a>
                        </div>
                        <div class="text-center d-inline-block">
                            <a class="fh5co_display_table">
                                <div class="fh5co_verticle_middle"><i class="fa fa-google-plus"></i></div>
                            </a>
                        </div>
                        <div class="text-center d-inline-block">
                            <a href="https://www.free-css.com/free-css-templates" class="fh5co_display_table">
                                <div class="fh5co_verticle_middle"><i class="fa fa-twitter"></i></div>
                            </a>
                        </div>
                        <div class="text-center d-inline-block">
                            <a href="https://www.free-css.com/free-css-templates" class="fh5co_display_table">
                                <div class="fh5co_verticle_middle"><i class="fa fa-facebook"></i></div>
                            </a>
                        </div>
                        <div class="d-inline-block text-center dd_position_relative">
                            <select class="form-control fh5co_text_select_option">
                                <option>English</option>
                                <option>French</option>
                                <option>German</option>
                                <option>Spanish</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-faded fh5co_padd_mediya padding_786">
            <div class="container padding_786">
                <nav class="navbar navbar-toggleable-md navbar-light">
                    <button
                        class="navbar-toggler navbar-toggler-right mt-3"
                        type="button"
                        data-toggle="collapse"
                        data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                    >
                        <span class="fa fa-bars"></span>
                    </button>
                    <a class="navbar-brand" href="https://www.free-css.com/free-css-templates"><img src="khach/assets/images/logo.png" alt="website template image" class="mobile_logo_width" /></a>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="{{ route('khach.index') }}">Trang chủ <span class="sr-only">(current)</span></a>
                            </li>
                            @foreach ($data as $data)
                                <li class="nav-item">
                                    {{-- <a class="nav-link" href="{{ $data->ten_khongdau }}/{{ $data->id }}">{{ $data->ten_chuyenmuc }} <span class="sr-only">(current)</span></a> --}}
                                    <a class="nav-link" href="{{ route('khach.getchuyenmuc', ['ten_chuyen_muc'=>$data->ten_khongdau,'id'=>$data->id]) }}">{{ $data->ten_chuyenmuc }} <span class="sr-only">(current)</span></a>

                                </li>
                            @endforeach
                         
                            
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
       

        @yield('main')

        @include('khach.footer')

        
        <div class="gototop js-top">
            <a href="javascript:void(0)" class="js-gotop"><i class="fa fa-arrow-up"></i></a>
        </div>
        <script src="khach/assets/js/jquery.min.js"></script>
        <script src="khach/assets/js/owl.carousel.min.js"></script>
        <script src="khach/assets/js/tether.min.js"></script>
        <script src="khach/assets/js/bootstrap.min.js"></script>
        <script src="khach/assets/js/jquery.waypoints.min.js"></script>
        <script src="khach/assets/js/main.js"></script>
        <div id="freecssfooter">
            <div id="fcssholder">
                <div id="bsap_2365" class="bsarocks bsap_b893e54e42ad5b76e7b252f59be18e67"></div>
            </div>
        </div>
        <script type="text/javascript">
            var gaProperty = "UA-120201777-1";
            var disableStr = "ga-disable-" + gaProperty;
            if (document.cookie.indexOf(disableStr + "=true") > -1) {
                window[disableStr] = true;
            }
            function gaOptout() {
                document.cookie = disableStr + "=true; expires=Thu, 31 Dec 2045 23:59:59 UTC; path=/";
                window[disableStr] = true;
                alert("Google Tracking has been deactivated");
            }
            (function (i, s, o, g, r, a, m) {
                i["GoogleAnalyticsObject"] = r;
                (i[r] =
                    i[r] ||
                    function () {
                        (i[r].q = i[r].q || []).push(arguments);
                    }),
                    (i[r].l = 1 * new Date());
                (a = s.createElement(o)), (m = s.getElementsByTagName(o)[0]);
                a.async = 1;
                a.src = g;
                m.parentNode.insertBefore(a, m);
            })(window, document, "script", "../../../../../../../www.google-analytics.com/analytics.js", "ga");
            ga("create", "UA-120201777-1", "auto");
            ga("set", "anonymizeIp", true);
            ga("send", "pageview");
        </script>
    </body>

    <!-- Mirrored from www.free-css.com/khach/assets/files/free-css-templates/preview/page250/24-news/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 08 Jun 2021 10:11:14 GMT -->
</html>
