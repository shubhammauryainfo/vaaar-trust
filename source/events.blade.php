@extends('_layouts.main')

@section('body')
@include('_layouts.partials.header')
@include('_layouts.partials.after-header',['data'=>$page['pages']['events']])

<section class="py-16 bg-gray-50">
    <div class="flex flex-wrap justify-center">

    @php
        $events = json_decode(file_get_contents('https://vaaar-backend.onrender.com/api/events'), true);
    @endphp
    @foreach($events as $event)
        <div class="max-w-sm rounded-md overflow-hidden shadow-lg bg-white m-4 p-4">
            <img class="w-full h-48 object-cover" src="{{ $event['image_url']}}" alt="{{ $event['title'] }}">
            <div class="px-6 py-4">
                <div class="font-bold text-xl mb-2">{{ $event['title'] }}</div>
                <p class="text-gray-700 text-base">
                    {{ $event['description'] }}
                </p>
            </div>
        </div>
    @endforeach
</div>
</section>

@include('_layouts.partials.footer')
@endsection