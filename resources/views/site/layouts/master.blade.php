<!DOCTYPE html>
<html lang="en"  data-theme="halloween" dir="rtl">
<head>
    @include('site.layouts.headertags')
    @livewireStyles

</head>
<body>

    <div class="container mx-auto">
        @include('site.layouts.header')
    </div>

    <div>
        @yield('body')
    </div>

    <div>
        @include('site.layouts.scripts')
        @livewireScripts
    </div>
</body>
</html>
