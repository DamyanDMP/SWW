
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <title>Variant HTML Builder by Medium Rare</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="../css/css/flexslider.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/css/line-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/css/elegant-icons.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/css/lightbox.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/css/theme.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="../css/css/custom.css" rel="stylesheet" type="text/css" media="all"/>
    <!--[if gte IE 9]>
    <link rel="stylesheet" type="text/css" href="css/ie9.css" />
    <![endif]-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,400,300,600,700%7CRaleway:700' rel='stylesheet' type='text/css'>
    <script src="../css/js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
{% include("./common/header.tpl")%}
<div class="loader">
    <div class="spinner">
        <div class="double-bounce1"></div>
        <div class="double-bounce2"></div>
    </div>
</div>

<div class="nav-container">
</div>

<div class="main-container">
    <section class="no-pad login-page fullscreen-element">

        <div class="background-image-holder">
            <img class="background-image" alt="Poster Image For Mobiles" src="../css/img/hero6.jpg">
        </div>

        <div class="container align-vertical">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 text-center">
                    <h1 class="text-white">Login to continue</h1>
                    <div class="photo-form-wrapper clearfix">
                        <form id="myForm" method="post" action="/login2">
                            <input class="form-email" type="text" name="loginEmail" placeholder="Email Address">
                            <input class="form-password" name="loginPassword" type="password" placeholder="Password">
                            <input class="login-btn btn-filled" id="btn" type="submit" value="Login">
                        </form>
                    </div>
                    <a href="#" class="text-white">Create an account ➞</a><br>
                    <a href="#" class="text-white">I've forgotten my password</a>
                </div>
            </div>
        </div>
    </section>
</div>
<div class="footer-container">
</div>
{% include("./common/footer.tpl")%}
{% for js in javascript%}
<script src="{{js}}"></script>
{% endfor%}
<script src="https://www.youtube.com/iframe_api"></script>
<script src="../css/js/jquery.min.js"></script>
<script src="../css/js/jquery.plugin.min.js"></script>
<script src="../css/js/bootstrap.min.js"></script>
<script src="../css/js/jquery.flexslider-min.js"></script>
<script src="../css/js/smooth-scroll.min.js"></script>
<script src="../css/js/skrollr.min.js"></script>
<script src="../css/js/spectragram.min.js"></script>
<script src="../css/js/scrollReveal.min.js"></script>
<script src="../css/js/isotope.min.js"></script>
<script src="../css/js/twitterFetcher_v10_min.js"></script>
<script src="../css/js/lightbox.min.js"></script>
<script src="../css/js/jquery.countdown.min.js"></script>
<script src="../css/js/scripts.js"></script>
</body>
</html>
				