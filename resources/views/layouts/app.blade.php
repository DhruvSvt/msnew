<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE7">
    <meta http-equiv="X-UA-Compatible" content="chrome=1">
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="canonical" href="#" />
    <meta name="description"
        content="M.S Security is the best security guard service agency in India. Hire a trained security services guard for your business, event or personal protection. We supply security solutions in Agra, Delhi, Mathura, Lucknow, Ghaziabad, Kanpur, Varanasi, Gorakhpur." />
    <meta name="keywords" content="Home | M.S Security" />
    <link rel="ico/png" href="https://cdn3d.iconscout.com/3d/premium/thumb/security-shield-6237039-5113412.png?f=webp"
        type="image/icon">
    <link rel="shortcut icon"
        href="https://cdn3d.iconscout.com/3d/premium/thumb/security-shield-6237039-5113412.png?f=webp" />

    <title>{{ $title ?? 'Security Guard Service Agency in India | Manpower Services' }} | {{ config('app.name') }}
    </title>

    @include('inc.headerLinks')

    @yield('head')
</head>

<body>

    @include('inc.header')

    @yield('content')

    @include('inc.footer')

    @include('inc.footerLinks')

    @yield('scripts')
</body>

</html>
