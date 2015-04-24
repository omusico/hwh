<!--JS-->
<script src="/js/bootstrap.min.js"></script>
<script src="/js/tm-scripts.js"></script>
<script>
    if (jQuery("body").width() > 991) {
        jQuery('.box-1').equalHeights();
    }
    jQuery(window).resize(function () {
        jQuery('.box-1').height('auto');
        if (jQuery("body").width() > 991) {
            jQuery('.box-1').equalHeights();
        }
    });
</script>

<script type="text/javascript" src="/js/global.js"></script>


