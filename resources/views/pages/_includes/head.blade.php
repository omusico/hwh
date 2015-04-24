    <title><?php echo Config::get('ltdc_constants.site_title'); ?></title>
    <!--META-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="Health Without Hype is your one stop for the best in actionable Health and Wellness information">
    <meta name="keywords" content="Health, Group Coaching, Hype, No Hype, Science, Medical">
    <meta name="author" content="LYNX Technology Development">

    <!--FAVICON-->
    <link rel="icon" href="/images/ico/favicon.ico" type="image/x-icon">
    <link href="/images/ico/AHD-Favicon.png" rel="shortcut icon" />

    <!--CSS-->
    <link rel="stylesheet" href="/css/bootstrap.css" type="text/css" media="screen" title="" charset="utf8">
    <link rel="stylesheet" href="/css/style.css" type="text/css" media="screen" title="" charset="utf8">
    <link rel="stylesheet" href="/css/contact-form.css" type="text/css" media="screen" title="" charset="utf8">

    <link rel="stylesheet" href="/css/ltdc.css">

    <!--JS-->
    <script src="/js/jquery.js"></script>
    <script src="/js/jquery-migrate-1.2.1.min.js"></script>
    <script src="/js/TMForm.js"></script>
    <script src="/js/jquery.equalheights.min.js"></script>
    <script>
        jQuery(document).ready(function () {
            jQuery(".toggle_nav_button").on("click", function () {
                jQuery(this).addClass("active");
                jQuery("+nav.navbar.navbar-default.navbar-static-top.tm_navbar", this).addClass("active");
                return false;
            });
            jQuery("body").on("click", function (e) {
                var t = false;
                var parents = $(e.target).parents().andSelf();
                for (var key1 in parents) {
                    for (var key2 in parents[key1].classList) {
                        if (parents[key1].classList[key2] == "navbar") {
                            t = true;
                        }
                    }
                }
                if (t == true) {} else {
                    jQuery(".toggle_nav_button").removeClass("active");
                    jQuery("nav.navbar.navbar-default.navbar-static-top.tm_navbar").removeClass("active");
                }
            });
        });
    </script>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->



