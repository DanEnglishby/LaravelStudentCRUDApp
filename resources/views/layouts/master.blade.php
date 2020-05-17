<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.partials.meta')
</head>

<body>

@include('layouts.partials.header')

<div class="container">
    @yield('content')
</div>

@include('layouts.partials.footer')

@yield('scripts')
</body>
</html>