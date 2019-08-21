
<script type='text/javascript'>
    var uiAutocompleteL10n = {"noResults":"No search results.","oneResult":"1 result found. Use up and down arrow keys to navigate.","manyResults":"%d results found. Use up and down arrow keys to navigate."};
    var localized = {"nav_title":"Go to..."};
    var localizedSearchParams = {"rent_slug":"for-rent"};
    var locationData = {"any_text":"Any","any_value":"any","all_locations":[{"term_id":27,"name":"Miami","slug":"miami","parent":0},{"term_id":41,"name":"Little Havana","slug":"little-havana","parent":27},{"term_id":30,"name":"Perrine","slug":"perrine","parent":27},{"term_id":40,"name":"Doral","slug":"doral","parent":27},{"term_id":48,"name":"Hialeah","slug":"hialeah","parent":27}],"select_names":["location","child-location","grandchild-location","great-grandchild-location"],"select_count":"1","locations_in_params":[]};
</script>
<script type='text/javascript' src='{{asset('frontEnd/')}}/js/jquerycad0.js?ver=1.12.3'></script>
<script type='text/javascript' src='{{asset('frontEnd/')}}/js/jquery-migrate2fca.js?ver=1.4.0'></script>
<script type='text/javascript' src='{{asset('frontEnd/')}}/js/inspiry-login-register4468.js?ver=2.5.5'></script>
<script type='text/javascript' src='{{asset('frontEnd/')}}/js/inspiry-search-form4468.js?ver=2.5.5'></script>
<script type='text/javascript' src='{{asset('frontEnd/')}}/js/flexslider/jquery.flexslider-mind315.js?ver=2.6.0'></script>
<script type='text/javascript' src='{{asset('frontEnd/')}}/js/elastislide/jquery.easing.1.34e44.js?ver=1.3'></script>
<script type='text/javascript' src='{{asset('frontEnd/')}}/js/elastislide/jquery.elastislide11b8.js?ver=4.5'></script>
<script type='text/javascript' src='{{asset('frontEnd/')}}/js/prettyphoto/jquery.prettyPhoto005e.js?ver=3.1.6'></script>
<script type='text/javascript' src='{{asset('frontEnd/')}}/js/swipebox/js/jquery.swipebox.min330a.js?ver=1.4.1'></script>
<script type='text/javascript' src='{{asset('frontEnd/')}}/js/isotope.pkgd.mine1fc.js?ver=2.1.1'></script>
<script type='text/javascript' src='{{asset('frontEnd/')}}/js/jquery.jcarousel.minac50.js?ver=0.2.9'></script>
<script type='text/javascript' src='{{asset('frontEnd/')}}/js/jquery.validate.min90f9.js?ver=1.11.1'></script>
<script type='text/javascript' src='{{asset('frontEnd/')}}/js/jquery.formb140.js?ver=3.40'></script>
<script type='text/javascript' src='{{asset('frontEnd/')}}/js/select2/select2.full.min05da.js?ver=4.0.2'></script>
<script type='text/javascript' src='{{asset('frontEnd/')}}/js/jquery.transit.mine2dc.js?ver=0.9.9'></script>
<script type='text/javascript' src='{{asset('frontEnd/')}}/js/jquery-twitterFetcher8794.js?ver=15.1'></script>
<script type='text/javascript' src='{{asset('frontEnd/')}}/js/bootstrap.min11b8.js?ver=4.5'></script>
<script type='text/javascript' src='{{asset('frontEnd/')}}/js/custom4468.js?ver=2.5.5'></script>
<script src="{{asset('admin/')}}/js/toster.js"></script>
<script>
    @if(Session::has('message'))
    toastr.success("{{Session::get('message')}}")
    @endif

</script>

@yield('custom_script')
