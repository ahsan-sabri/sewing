<!DOCTYPE HTML>
<html lang="en-us">
@php
$company = \App\Admin\Company::first();
$logo = $company->logo ?? '';
$name = $company->name ?? '';
// dd($company);
@endphp
@include('partials.frontend.head')

<body>
    @include('partials.frontend.header')
    @include('partials.frontend.banner')
    <section id="main">
        @yield('content')
    </section>
    @include('partials.frontend.footer')
</body>

</html>
