<head>
   @include('frontend.layouts.header')
</head>


<body>
   @include('frontend.layouts.navbar') 

    <main>
        @yield('content') 
    </main>

    @include('frontend.layouts.footer') <!-- Footer -->

    <!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('asset/lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('asset/lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('asset/lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('asset/lib/isotope/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('asset/lib/lightbox/js/lightbox.min.js') }}"></script>

<!-- Contact Javascript File -->
<script src="{{ asset('asset/mail/jqBootstrapValidation.min.js') }}"></script>
<script src="{{ asset('asset/mail/contact.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('asset/js/main.js') }}"></script>
</body>
</html>
