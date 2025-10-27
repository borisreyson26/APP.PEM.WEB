<!DOCTYPE html>
<html lang="id">
@include('layout.head')

<body style="background: lightgray">
    @include('layout.nav')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{ url('/') }}">Home</a></li>
            @yield('breadcrumb')
        </ol>
    </nav>
    <div class="container mt-5">
        @yield('content')
    </div>
    @include('layout.js')
</body>

</html>
