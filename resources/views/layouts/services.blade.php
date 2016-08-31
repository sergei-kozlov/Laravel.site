<!DOCTYPE HTML>
<html>
<head>
    <title>  {{ $title }} — Nova</title>
    @include('layouts.partials.head')
</head>
<body>

@include('layouts.partials.header')

<div class="about">
    <div class="container">
        <section class="title-section">
            <h1 class="title-header">{{ $longtitle }}</h1>
        </section>
    </div>
</div>

@yield('content')

@yield('dashboard')

@include('layouts.partials.footer')
@include('layouts.partials.scripts')
</body>
</html>
