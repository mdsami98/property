@include('frontEnd.includes.file')
<body class="home singular page">

<!-- Start Header -->

@include('frontEnd.includes.header')
<!-- End Header -->

{{--Start Content--}}
@yield('content')
{{--End Content--}}

<!-- Start Footer -->

@include('frontEnd.includes.footer')
<!-- End Footer -->

<!-- Login Modal -->
@include('frontEnd.includes.modal')
<!-- Login Modal -->

{{--secripts--}}
@include('frontEnd.includes.scripts')
{{--secripts--}}
</body>

<!-- Mirrored from html.inspirydemos.com/realhomes-html/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 03 Jun 2019 19:49:10 GMT -->
</html>
