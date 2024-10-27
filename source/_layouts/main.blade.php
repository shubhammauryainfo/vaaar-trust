<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" href="{{$page->baseUrl.$page->seo_image}}" type="image/x-icon">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta name="description" content="{{ $page->description }}">
        @if($page->getUrl() == $page->baseUrl . '/')
        <title>Vaaar Trust - Lets help together</title>
    @elseif($page->getUrl() == $page->baseUrl . "/about")
        <title>Vaaar Trust - About</title>
    @elseif($page->getUrl() == $page->baseUrl . "/events")
        <title>Vaaar Trust - Events</title>
        @elseif($page->getUrl() == $page->baseUrl . "/bankdetails")
        <title>Vaaar Trust - Bank Details</title>
        @elseif($page->getUrl() == $page->baseUrl . "/contact")
        <title>Vaaar Trust - Contact Us</title>
        @elseif($page->getUrl() == $page->baseUrl . "/gallery")
        <title>Vaaar Trust - Gallery</title>
        @else
        <title>Vaaar Trust - Notice</title>
    @endif


        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
        <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
    </head>
    <body class="text-gray-900 font-sans antialiased">
        @yield('body')
    </body>
</html>
