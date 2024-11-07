@extends('_layouts.main')

@section('body')
@include('_layouts.partials.header')
@include('_layouts.partials.after-header',['data'=>$page['pages']['events']])

<section class="py-16 bg-gray-50">
    <div id="events-container" class="flex flex-wrap justify-center"></div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            fetch('https://vaaar-backend.onrender.com/api/events')
                .then(response => response.json())
                .then(events => {
                    const container = document.getElementById('events-container');
                    events.forEach(event => {
                        const eventDiv = document.createElement('div');
                        eventDiv.className = 'max-w-sm rounded-md overflow-hidden shadow-lg bg-white m-4 p-4';
                        eventDiv.innerHTML = `
                            <img class='w-full h-48 object-cover' src='${event.image_url}' alt='${event.title}' />
                            <div class='px-6 py-4'>
                                <div class='font-bold text-xl mb-2'>${event.title}</div>
                                <p class='text-gray-700 text-base'>
                                    ${event.description}
                                </p>
                            </div>
                        `;
                        container.appendChild(eventDiv);
                    });
                })
                .catch(error => console.error('Error fetching events:', error));
        });
    </script>
</section>

@include('_layouts.partials.footer')
@endsection