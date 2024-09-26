<!DOCTYPE html>
<html lang="EN">

{{-- tu sa includuje header z layout --}}
@include('layout.header')

<body>
{{-- tu includuje navbar z _template --}}
@include('_template.nav')

<div class="container py-4">
    {{-- tu sa da cely html content z dashboardu --}}
    @yield('content')
</div>

{{-- tu sa includuje footer z layoutu --}}
@include('layout.footer')
</body>

</html>
