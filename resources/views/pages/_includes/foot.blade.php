<!--JS-->
<script src="/js/bootstrap.min.js"></script>
<script src="/js/tm-scripts.js"></script>

<!-- Extra, page dependant scripts -->
@if($activePage=='home')
    <script src="/js/TMForm.js"></script>
    <script src="/js/jquery.equalheights.min.js"></script>
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
@endif

@if($activePage=='slate')
    <script src="/js/jquery.fancybox.js"></script>
    <script src="/js/jquery.fancybox-buttons.js"></script>
    <script src="/js/jquery.fancybox-media.js"></script>
    <script>
        jQuery(document).ready(function () {
            $(".fancy_wrap").fancybox();
        });
        jQuery(".toggle_gallary_block").on("click", function () {
            jQuery(this).parent(".wrapper").next("li").slideToggle("slow");
            return false;
        });
    </script>
@endif

<!-- end page dependant scripts -->

<script type="text/javascript" src="/js/global.js"></script>


