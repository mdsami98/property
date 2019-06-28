@include('admin.includes.files')

<body>

<!-- ########## START: LEFT PANEL ########## -->
<!-- br-sideleft -->
@include('admin.includes.sidebar')
<!-- ########## END: LEFT PANEL ########## -->

<!-- ########## START: HEAD PANEL ########## -->
@include('admin.includes.header')
<!-- br-header -->
<!-- ########## END: HEAD PANEL ########## -->

<!-- ########## START: RIGHT PANEL ########## -->

<!-- ########## END: RIGHT PANEL ########## --->

<!-- ########## START: MAIN PANEL ########## -->
@yield('content')
<!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->
@include('admin.includes.scripts')
