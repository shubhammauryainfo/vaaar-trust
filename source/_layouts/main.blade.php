<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
      @include('_layouts.partials.favicon')
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

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       @if($page->production)
           <link rel="stylesheet" href="{{$page->baseUrl}}/assets/build/css/main.css">
           <script defer src="{{$page->baseUrl}}/assets/build/js/main.js"></script>
       @else
           <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
           <script defer src="{{ mix('js/main.js', 'assets/build') }}"></script>
       @endif
       
    </head>
    <body class="text-gray-900 poppins antialiased ">
        @yield('body')
    </body>
</html>
