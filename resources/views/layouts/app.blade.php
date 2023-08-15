<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
    @include('layouts.head')
</head>

<body>
    <div class="container-scroller">

        {{-- Header Section --}}
        @include('layouts.header')

        {{-- Main Content --}}
        @yield('content')

        {{-- Footer Section --}}
        @include('layouts.footer')

    </div>

    {{-- Scripts --}}
    @include('layouts.foot')

</body>

</html>
