<!DOCTYPE html>
<html lang="EN">

<head>
    {{-- tu sa includuje header z layout --}}
    @include('inc.head')
</head>


<body>
{{-- tu includuje navbar z inc --}}
@include('inc.nav')

<div class="container py-4">
    {{-- tu sa da cely html content z dashboardu --}}
    @yield('content')
</div>

{{-- tu sa includuje footer z layoutu --}}
@include('inc.footer')
</body>

</html>
