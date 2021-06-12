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
        <link rel="stylesheet" type="text/css" href="khach/assets/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="khach/assets/slick/slick-theme.css"/>

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
            .slick-prev, .slick-next  {
                /* background: red!important; */
                top:-65px!important;
                /* width: 50px!important;
                height: 50px!important; */
                color:#333 !important;
                margin:20px 0px;
            }
            .slick-next {
                right: 0px!important;
            }
            .slick-prev {
                left: 93%!important;
            }
            .slick-prev:before, .slick-next:before {
                color: #333!important;
                font-size: 30px
            }
            .category{
                margin-top: 10px;
            }
            .no-mt + .no-mt{
                margin-top: 30px!important;
            }
            .slick-slide{
              height: auto !important;
            }
        </style>
      

      
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        	<!-- CSS Files -->
	    <link rel="stylesheet" href="{{asset('admin_assets/css/bootstrap.min.css')}}">
        <script src="{{asset('admin_assets/js/core/jquery.3.2.1.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/core/popper.min.js')}}"></script>
        <script src="{{asset('admin_assets/js/core/bootstrap.min.js')}}"></script>

        @yield('kethuacss')

    </head>
    <body class="@yield('body')">
        <script type="text/javascript">
            (function () {
                var bsa = document.createElement("script");
                bsa.type = "text/javascript";
                bsa.async = true;
                bsa.src = "../../../../../../../s3.buysellads.com/ac/bsa.js";
                (document.getElementsByTagName("head")[0] || document.getElementsByTagName("body")[0]).appendChild(bsa);
            })();
        </script>
        
        @include('khach.header')
       

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
        
        <script type="text/javascript" src="khach/assets/slick/slick.js"></script>

        <script type="text/javascript" src="khach/assets/js/main2.js"></script>


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
