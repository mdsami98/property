
<script src="{{asset('admin/')}}/lib/jquery/jquery.js"></script>
<script src="{{asset('admin/')}}/lib/popper.js/popper.js"></script>
<script src="{{asset('admin/')}}/lib/bootstrap/bootstrap.js"></script>
<script src="{{asset('admin/')}}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
<script src="{{asset('admin/')}}/lib/moment/moment.js"></script>
<script src="{{asset('admin/')}}/lib/jquery-ui/jquery-ui.js"></script>
<script src="{{asset('admin/')}}/lib/jquery-switchbutton/jquery.switchButton.js"></script>
<script src="{{asset('admin/')}}/lib/peity/jquery.peity.js"></script>
<script src="{{asset('admin/')}}/lib/chartist/chartist.js"></script>
<script src="{{asset('admin/')}}/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>
<script src="{{asset('admin/')}}/lib/d3/d3.js"></script>
<script src="{{asset('admin/')}}/lib/rickshaw/rickshaw.min.js"></script>

<script src="{{asset('admin/')}}/lib/highlightjs/highlight.pack.js"></script>
<script src="{{asset('admin/')}}/lib/datatables/jquery.dataTables.js"></script>

<script src="{{asset('admin/')}}/js/bracket.js"></script>
<script src="{{asset('admin/')}}/js/ResizeSensor.js"></script>
<script src="{{asset('admin/')}}/js/dashboard.js"></script>






<script src="{{asset('admin/')}}/lib/datatables-responsive/dataTables.responsive.js"></script>
<script src="{{asset('admin/')}}/lib/select2/js/select2.min.js"></script>
<script>
    $(function(){
        'use strict'

        // FOR DEMO ONLY
        // menu collapsed by default during first page load or refresh with screen
        // having a size between 992px and 1299px. This is intended on this page only
        // for better viewing of widgets demo.
        $(window).resize(function(){
            minimizeMenu();
        });

        minimizeMenu();

        function minimizeMenu() {
            if(window.matchMedia('(min-width: 992px)').matches && window.matchMedia('(max-width: 1299px)').matches) {
                // show only the icons and hide left menu label by default
                $('.menu-item-label,.menu-item-arrow').addClass('op-lg-0-force d-lg-none');
                $('body').addClass('collapsed-menu');
                $('.show-sub + .br-menu-sub').slideUp();
            } else if(window.matchMedia('(min-width: 1300px)').matches && !$('body').hasClass('collapsed-menu')) {
                $('.menu-item-label,.menu-item-arrow').removeClass('op-lg-0-force d-lg-none');
                $('body').removeClass('collapsed-menu');
                $('.show-sub + .br-menu-sub').slideDown();
            }
        }
    });
</script>

@yield('custom_script')

</body>

<!-- Mirrored from themetrace.com/templates/bracket/app/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 17:51:58 GMT -->
</html>

