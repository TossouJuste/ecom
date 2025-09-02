<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamsrent.dreamstechnologies.com/html/template/listing-grid.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Aug 2025 12:54:44 GMT -->

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Dreams Rent | Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/img/favicon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome/css/all.min.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- Aos CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/aos/aos.css') }}">

    <!-- Datepicker CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-datetimepicker.min.css') }}">

    <!-- Rangeslider CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/ion-rangeslider/css/ion.rangeSlider.min.css') }}">

    <!-- Select2 CSS -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/select2/css/select2.min.css') }}">

    <!-- Owl carousel CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">

    <!-- Fearther CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/feather.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">

    @stack('styles')

</head>

<body>

    <div class="main-wrapper listing-page">

        @include('vitrine.nav')

        @yield('content-client')
        
        @include('vitrine.footer')
    </div>

    <!-- scrollToTop start -->
    <div class="progress-wrap active-progress">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"
                style="transition: stroke-dashoffset 10ms linear 0s; stroke-dasharray: 307.919px, 307.919px; stroke-dashoffset: 228.265px;">
            </path>
        </svg>
    </div>
 

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- jQuery -->
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{ asset('assets/js/jquery-3.7.1.min.js') }}" type="2ac22662d873afbb6f8466dc-text/javascript"></script>

    <!-- Bootstrap Core JS -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}" type="2ac22662d873afbb6f8466dc-text/javascript"></script>

    <!-- Aos -->
    <script src="{{ asset('assets/plugins/aos/aos.js') }}" type="2ac22662d873afbb6f8466dc-text/javascript"></script>

    <!-- Select2 JS -->
    <script src="{{ asset('assets/plugins/select2/js/select2.min.js') }}" type="2ac22662d873afbb6f8466dc-text/javascript"></script>

    <!-- Top JS -->
    <script src="{{ asset('assets/js/backToTop.js') }}" type="2ac22662d873afbb6f8466dc-text/javascript"></script>

    <!-- Rangeslider JS -->
    <script src="{{ asset('assets/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}" type="2ac22662d873afbb6f8466dc-text/javascript"></script>
    <script src="{{ asset('assets/plugins/ion-rangeslider/js/custom-rangeslider.js') }}" type="2ac22662d873afbb6f8466dc-text/javascript"></script>

    <!-- Sticky Sidebar JS -->
    <script src="{{ asset('assets/plugins/theia-sticky-sidebar/ResizeSensor.js') }}" type="2ac22662d873afbb6f8466dc-text/javascript"></script>
    <script src="{{ asset('assets/plugins/theia-sticky-sidebar/theia-sticky-sidebar.js') }}" type="2ac22662d873afbb6f8466dc-text/javascript"></script>

    <!-- Datepicker Core JS -->
    <script src="{{ asset('assets/plugins/moment/moment.min.js') }}" type="2ac22662d873afbb6f8466dc-text/javascript"></script>
    <script src="{{ asset('assets/js/bootstrap-datetimepicker.min.js') }}" type="2ac22662d873afbb6f8466dc-text/javascript"></script>

    <!-- Owl Carousel JS -->
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}" type="2ac22662d873afbb6f8466dc-text/javascript"></script>

    <!-- Custom JS -->
    <script src="{{ asset('assets/js/script.js') }}" type="2ac22662d873afbb6f8466dc-text/javascript"></script>

    <script src="{{ asset('assets/js/rocket-loader.min.js') }}" data-cf-settings="2ac22662d873afbb6f8466dc-|49" defer></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/vcd15cbe7772f49c399c6a5babf22c1241717689176015"
        integrity="sha512-ZpsOmlRQV6y907TI0dKBHq9Md29nnaEIPlkf84rnaERnq6zvWvPUqr2ft8M1aS28oN72PdrCzSjY4U6VaAw1EQ=="
        data-cf-beacon='{"rayId":"96e851842dd0df91","version":"2025.7.0","serverTiming":{"name":{"cfExtPri":true,"cfEdge":true,"cfOrigin":true,"cfL4":true,"cfSpeedBrain":true,"cfCacheStatus":true}},"token":"3ca157e612a14eccbb30cf6db6691c29","b":1}'
        crossorigin="anonymous"></script>

        @stack('scripts')
</body>

</html>
