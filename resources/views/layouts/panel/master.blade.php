<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>Todo List App</title>

    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('assets/panel') }}/images/favicon.png">
    <link rel="stylesheet" href="{{ asset('assets/panel') }}/vendor/chartist/css/chartist.min.css">
    <link href="{{ asset('assets/panel') }}/vendor/bootstrap-select/dist/css/bootstrap-select.min.css" rel="stylesheet">
    <link href="{{ asset('assets/panel') }}/vendor/owl-carousel/owl.carousel.css" rel="stylesheet">
    <link href="{{ asset('assets/panel') }}/css/style.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    @livewireStyles

</head>
<body>

<div id="preloader">
    <div class="sk-three-bounce">
        <div class="sk-child sk-bounce1"></div>
        <div class="sk-child sk-bounce2"></div>
        <div class="sk-child sk-bounce3"></div>
    </div>
</div>

<div id="main-wrapper">

    @include('layouts.panel.header')

    @include('layouts.panel.menu')

    <div class="content-body">
        <div class="container-fluid">
            @yield('content')
        </div>
    </div>

    @include('layouts.panel.footer')

</div>

<!-- Required vendors -->
<script src="{{ asset('assets/panel') }}/vendor/global/global.min.js"></script>
<script src="{{ asset('assets/panel') }}/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="{{ asset('assets/panel') }}/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="{{ asset('assets/panel') }}/js/custom.min.js"></script>
<script src="{{ asset('assets/panel') }}/js/deznav-init.js"></script>
<script src="{{ asset('assets/panel') }}/vendor/owl-carousel/owl.carousel.js"></script>

<!-- Chart piety plugin files -->
<script src="{{ asset('assets/panel') }}/vendor/peity/jquery.peity.min.js"></script>

<!-- Apex Chart -->
<script src="{{ asset('assets/panel') }}/vendor/apexchart/apexchart.js"></script>

<!-- Dashboard 1 -->
<script src="{{ asset('assets/panel') }}/js/dashboard/dashboard-1.js"></script>

<script>
    function carouselReview(){
        /*  event-bx one function by = owl.carousel.js */
        jQuery('.event-bx').owlCarousel({
            loop:true,
            margin:30,
            nav:true,
            center:true,
            autoplaySpeed: 3000,
            navSpeed: 3000,
            paginationSpeed: 3000,
            slideSpeed: 3000,
            smartSpeed: 3000,
            autoplay: false,
            navText: ['<i class="fa fa-caret-left" aria-hidden="true"></i>', '<i class="fa fa-caret-right" aria-hidden="true"></i>'],
            dots:true,
            responsive:{
                0:{
                    items:1
                },
                720:{
                    items:2
                },

                1150:{
                    items:3
                },

                1200:{
                    items:2
                },
                1749:{
                    items:3
                }
            }
        })
    }
    jQuery(window).on('load',function(){
        setTimeout(function(){
            carouselReview();
        }, 1000);
    });
</script>

@livewireScripts

</body>
</html>
