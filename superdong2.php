<!DOCTYPE html>
<html lang="en-US">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- BASIC INFO (title, keywords, description) -->
  <title>Default</title>

  <!-- LIBRARIES CSS -->
  <link href=".\css\bootstrap.css" rel="stylesheet">
  <link href=".\css\bootstrap-theme.css" rel="stylesheet">
  <link href=".\css\style2.css" rel="stylesheet">
  
  <!-- FONTS -->

  <link href=".\css\coinslider.css" rel="stylesheet">
  <link href=".\css\metaslider.css" rel="stylesheet"> 

</head>
<body>
<div class="container">
  <div class="row"> <!-- HEADER -->
    <div class="col-sm-1"> <!-- LOGO -->
      <a class="navbar-logo" href="#"></a>
    </div>

    <div class="col-sm-11"> <!-- NAVBAR -->
      <div class="row">
        <nav class="navbar-default nav-upper navbar-static-top">
          <div class="container-fluid">
            <ul class="nav navbar-nav navbar-upper">
              <li class="nav-item"><a class="active" href="#">Trang chủ</a>
              </li>
              <li class="nav-item"><a href="#">Công ty</a>
              </li>
              <li class="nav-item"><a href="#">Cẩm nang du lịch</a>
              </li>
              <li class="nav-item"><a href="#">Tuyển dụng</a>
              </li>
              <li class="nav-item"><a href="#">Hình ảnh</a>
              </li>
              <li class="nav-item"><a href="#">Liên hệ</a>
              </li>
              <li class="nav-item"><a href="#"><img src="http://superdong.com.vn/wp-content/themes/pl_superdong/img/eng_lg.png" alt="" /></a>
              </li>
              <li class="nav-item"><a href="#"><img src="http://superdong.com.vn/wp-content/themes/pl_superdong/img/vi_lg.png" alt="" style="padding-left: 5px;" /></a>
              </li>
            </ul>
          </div>
        </nav>
      </div> <!--end menu 1 -->

      <div class="row">
        <nav class="navbar navbar-default navbar-static-top nav-lower">
          <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbar">
              <ul class="nav navbar-nav navbar-lower">
                <li class="nav-item"><a href="#">Dịch vụ</a>
                </li>
                <li class="nav-item"><a href="#">Hệ thống bán vé</a>
                </li>
                <li class="nav-item"><a href="#">Quan hệ cổ đông</a>
                </li>
                <li class="nav-item"><a href="#">Tin tức</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div> <!--end menu 2 -->
    </div>  <!-- end NAVBAR -->
  </div> <!-- end HEADER -->

  <!-- meta slider -->
    <div class="row"> <!-- SLIDER -->
    <div style="max-width: 1366; margin: 0 auto;" class="metaslider metaslider-coin metaslider-625 ml-slider">
        
        <div id="metaslider_container_625">
            <div id='metaslider_625' class='coin-slider'>
              <a href="javascript:void(0)"><img style='height: 100%; width: 100%; object-fit: contain' src="http://superdong.com.vn/wp-content/uploads/2017/07/banner00-1366x630.jpg" alt="" class="slider-625 slide-1341" style="display: none;" /></a>
              <a href="javascript:void(0)"><img style='height: 100%; width: 100%; object-fit: contain' src="http://superdong.com.vn/wp-content/uploads/2017/06/superdong-banner01-2-1366x630.jpg" alt="" class="slider-625 slide-1236" style="display: none;" /></a>
              <a href="javascript:void(0)"><img style='height: 100%; width: 100%; object-fit: contain' src="http://superdong.com.vn/wp-content/uploads/2017/06/superdong-banner02-2-1366x630.jpg" alt="" class="slider-625 slide-1237" style="display: none;" /></a>
            </div>
            
        </div>
        <script type="text/javascript">
            var metaslider_625 = function($) {
                $('#metaslider_625').coinslider({ 
                    width:1366,
                    height:630,
                    spw:7,
                    sph:5,
                    delay:3000,
                    sDelay:30,
                    opacity:"0",
                    titleSpeed:500,
                    animation:"random",
                    showNavigationButtons:false,
                    showNavigationPrevNext:false,
                    hoverPause:true,
                    prevText:"&lt;",
                    nextText:"&gt;"
                });
            };
            var timer_metaslider_625 = function() {
                var slider = !window.jQuery ? window.setTimeout(timer_metaslider_625, 100) : !jQuery.isReady ? window.setTimeout(timer_metaslider_625, 1) : metaslider_625(window.jQuery);
            };
            timer_metaslider_625();
        </script>
    </div> <!-- end SLIDER -->
    <!--meta slider-->            <!-- /SLIDE -->

    <div class="row"> <!-- footer -->
      <nav class="navbar navbar-default navbar-static-top nav-footer">
        <div class="container-fluid">
          <div class="collapse navbar-collapse navbar-footer" id="navbar">
            <ul class="nav navbar-nav">
              <li class="nav-item"><a href="#">Sóc Trăng</a>
              </li>
              <li class="nav-item"><a href="#">Côn Đảo</a>
              </li>
              <li class="nav-item"><a href="#">Rạch Giá</a>
              </li>
              <li class="nav-item"><a href="#">Phú Quốc</a>
              </li>
              <li class="nav-item"><a href="#">Nam Du</a>
              </li>
              <li class="nav-item"><a href="#">Hà Tiên</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div> <!-- end footer -->
</div> <!-- end container -->

  <!-- JQUERY-->
  <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.0.min.js"></script>

  <!--COMPILED AND MINIFIED JAVASCRIPT-->
  <script src=".\js\bootstrap.min.js"></script>

  <script type='text/javascript'>
  /* <![CDATA[ */
  var _wpcf7 = {"loaderUrl":"http:\/\/superdong.com.vn\/wp-content\/plugins\/contact-form-7\/images\/ajax-loader.gif","sending":"Sending ..."};
  /* ]]> */
  </script>
  <script type='text/javascript' src='http://superdong.com.vn/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=3.8.1'></script>
  <script type='text/javascript' src='http://superdong.com.vn/wp-includes/js/wp-embed.min.js?ver=4.8'></script>
  <script type='text/javascript' src='http://superdong.com.vn/wp-content/plugins/ml-slider/assets/sliders/coinslider/coin-slider.min.js?ver=3.5.1'></script>

</body>
</html>