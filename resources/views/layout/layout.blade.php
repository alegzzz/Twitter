<!DOCTYPE html>
<html lang="EN">

<head>

    {{-- includes the head --}}
    @include('inc._head')

</head>
<body>

{{-- includes navbar from templates --}}
@include('inc._nav')

<div class="container py-4">
    {{-- yielding(adding) the html from dashboard --}}
    @yield('content')
</div>

{{-- includes the footer --}}
@include('inc._footer')

</body>

</html>
