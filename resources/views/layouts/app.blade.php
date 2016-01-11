<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.head')
</head>

<body>

<div class="header-fixed">
    <div class="wrapper">

        <!--=== Header ===-->
        @include('layouts.header')

        <!--=== Breadcrumbs ===-->
        {{-- @include('layouts.breadcrumbs') --}}

        <!--=== Content ===-->
        @yield('content')

        <!--=== Footer Version 1 ===-->
        @include('layouts.footer')

    </div>
</div>

<!-- JavaScripts -->
@include('layouts.scripts')

<!-- FlashMessaging -->
@include('alerts.flash')

</body>
</html>
