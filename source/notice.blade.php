@extends('_layouts.main')

@section('body')
@include('_layouts.partials.header')
@include('_layouts.partials.after-header',['data'=>$page['pages']['notice']])

<section class="py-16 bg-gray-50">
    <div class=" justify-center container px-4">
        @php
            $notices = json_decode(file_get_contents('https://vaaar-backend.onrender.com/api/notices'), true);
        @endphp
        @if(count($notices) > 0)
       
            <div class="overflow-x-auto">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium tracking-wider text-gray-500 uppercase">
                                Title
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium tracking-wider text-gray-500 uppercase">
                                Date
                            </th>
                            <th scope="col" class="px-6 py-3 text-left text-xs font-medium tracking-wider text-gray-500 uppercase">
                                Download / View
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
            @foreach($notices as $notice)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm font-medium text-gray-900">{{ $notice['title'] }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-sm text-gray-500">{{ \Carbon\Carbon::parse($notice['date'])->format('F j, Y') }}</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                    <a href="{{ $notice['pdf_url'] }}" class="text-indigo-600 hover:text-indigo-900">
                        View
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
        @else
            <div class="text-center text-gray-700">
                There is no record.
            </div>
        @endif
    </div>
</section>

@include('_layouts.partials.footer')
@endsection