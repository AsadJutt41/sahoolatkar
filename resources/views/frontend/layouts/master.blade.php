<!DOCTYPE html>
<html>
<head>
	<title>Sahoolathkaar</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

	@include('frontend.layouts.head')
	@stack('style')
</head>
<body>

	<!-- Header -->
	@include('frontend.layouts.header')
	<!--/ End Header -->
	@yield('main-content')

	@include('frontend.layouts.footer')
	@stack('scripts')

</body>
</html>
