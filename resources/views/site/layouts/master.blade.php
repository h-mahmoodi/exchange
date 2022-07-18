<!DOCTYPE html>
<html lang="en"  data-theme="halloween" dir="rtl">
<head>
    @include('site.layouts.headertags')
    @livewireStyles

</head>
<body class="bg-slate-900">

    <div class="bg-slate-800">
        <div class=" ">
            @include('site.layouts.header')
        </div>
    </div>

    <div>
        @yield('body')
    </div>

    <div>
        @include('site.layouts.footer')
    </div>

    <div>
        @include('site.layouts.scripts')
        @livewireScripts
    </div>
</body>
</html>
