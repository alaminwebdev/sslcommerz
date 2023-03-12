<!DOCTYPE html>
<html lang="en">
    {{-- header --}}
    @include('partials.head')
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            {{-- Navigation --}}
            @include('partials.nav')
            {{-- Main content --}}
            @yield('content')
        </main>
        {{-- Footer --}}
        @include('partials.footer')
        {{-- JS files --}}
        @include('partials.scripts')
    </body>
</html>
