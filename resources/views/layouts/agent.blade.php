@include('agent.includes.files')

<body>

<!-- ########## START: LEFT PANEL ########## -->
<!-- br-sideleft -->
@include('agent.includes.sidebar')
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
@include('agent.includes.header')
<!-- br-header -->
<!-- ########## END: HEAD PANEL ########## -->

<!-- ########## START: RIGHT PANEL ########## -->

<!-- ########## END: RIGHT PANEL ########## --->

<!-- ########## START: MAIN PANEL ########## -->
@yield('content')
<!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->
@include('agent.includes.scripts')

</body>

<!-- Mirrored from themetrace.com/templates/bracket/app/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 27 Jun 2019 17:51:58 GMT -->
</html>
