<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials2.head')
</head>
<body>
    <header>
        @include('partials2.header')
    </header>
    {{-- <aside class="main-sidebar">
        @include('partials2.sidemenu')
    </aside> --}}
    <section class="content">
        @yield('content')
    </section>
        {{-- </div> --}}
    {{-- </div> --}}
    {{-- <footer class="bg-191 color-ccc">
        @include('partials2.footer')
    </footer> --}}
    @include('partials2.script')
</body>
</html>
