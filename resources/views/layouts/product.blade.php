<!DOCTYPE HTML>
<html lang="en-us">
@php
    $company = \App\admin\Company::first();
    $logo = $company->logo ?? '';
    $name = $company->name ?? '';
@endphp
@include('partials.product.head')
<body>
    @include('partials.product.header')
    <section id="main">
        @yield('content')
    </section>
    @include('partials.product.footer')
</body>
<!-- Mirrored from quickbooks.intuit.com/global/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 16 Mar 2020 06:48:16 GMT -->
</html>
