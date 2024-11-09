@extends('_layouts.main')

@section('body')
@include('_layouts.partials.header')
@include('_layouts.partials.after-header',['data'=>$page['pages']['notice']])

<section class="py-16 bg-gray-50">
    <div class="flex flex-wrap justify-center">
        @php
            $notices = json_decode(file_get_contents('https://vaaar-backend.onrender.com/api/notices'), true);
        @endphp
        @if(count($notices) > 0)
            @foreach($notices as $notice)
                <div class="max-w-sm rounded-md overflow-hidden shadow-lg bg-white m-4 p-4">
                    <div class="px-6 py-4">
                        <div class="font-bold text-xl mb-2">{{ $notice['title'] }}</div>
                        <div class="text-gray-700 text-base">
                            {{ $notice['date'] }}
                        </div>
                        <div class="mt-4">
                            <a href="{{ $notice['pdf_url'] }}" class="text-indigo-600 hover:text-indigo-900">
                                View
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <div class="text-center text-gray-700">
                There is no record.
            </div>
        @endif
    </div>
</section>

@include('_layouts.partials.footer')
@endsection