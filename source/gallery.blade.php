@extends('_layouts.main')

@section('body')
@include('_layouts.partials.header')
@include('_layouts.partials.after-header',['data'=>$page['pages']['gallery']])

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Filter Controls -->
        <div class="flex justify-center mb-8">
            <ul class="flex flex-wrap gap-4">
                <li>
                    <button class="filter-btn active px-6 py-2 rounded-full bg-blue-600 text-white hover:bg-blue-700 transition duration-300" data-filter="all">
                        All
                    </button>
                </li>
                <li>
                    <button class="filter-btn px-6 py-2 rounded-full bg-gray-200 text-gray-700 hover:bg-blue-600 hover:text-white transition duration-300" data-filter="talav">
                        Dhaniv Talav
                    </button>
                </li>
            </ul>
        </div>

        <!-- Gallery Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8" id="gallery-container">
            <!-- Logo Image -->
            <div class="gallery-item all transform hover:scale-105 transition duration-300">
                <a href="https://i.ibb.co/4ZxrN5B/vaar-foundation-logowith-back.png" class="block rounded-lg overflow-hidden shadow-lg">
                    <img src="https://i.ibb.co/4ZxrN5B/vaar-foundation-logowith-back.png" alt="Vaaar Foundation Logo" class="w-full h-64 object-cover">
                </a>
            </div>

            <!-- Talav Images -->
            <div class="gallery-item talav transform hover:scale-105 transition duration-300">
                <a href="https://i.ibb.co/VWSx57b/IMG-20230910-WA0014.jpg" class="block rounded-lg overflow-hidden shadow-lg">
                    <img src="https://i.ibb.co/VWSx57b/IMG-20230910-WA0014.jpg" alt="Dhaniv Talav" class="w-full h-64 object-cover">
                </a>
            </div>

            <div class="gallery-item talav transform hover:scale-105 transition duration-300">
                <a href="https://i.ibb.co/k0HZbhp/t1.jpg" class="block rounded-lg overflow-hidden shadow-lg">
                    <img src="https://i.ibb.co/k0HZbhp/t1.jpg" alt="Dhaniv Talav" class="w-full h-64 object-cover">
                </a>
            </div>

            <div class="gallery-item talav transform hover:scale-105 transition duration-300">
                <a href="https://i.ibb.co/fx27cY9/t4.jpg" class="block rounded-lg overflow-hidden shadow-lg">
                    <img src="https://i.ibb.co/fx27cY9/t4.jpg" alt="Dhaniv Talav" class="w-full h-64 object-cover">
                </a>
            </div>

            <div class="gallery-item talav transform hover:scale-105 transition duration-300">
                <a href="https://i.ibb.co/f91WXNT/t8.jpg" class="block rounded-lg overflow-hidden shadow-lg">
                    <img src="https://i.ibb.co/f91WXNT/t8.jpg" alt="Dhaniv Talav" class="w-full h-64 object-cover">
                </a>
            </div>

            <div class="gallery-item talav transform hover:scale-105 transition duration-300">
                <a href="https://i.ibb.co/MsrDQf3/t7.jpg" class="block rounded-lg overflow-hidden shadow-lg">
                    <img src="https://i.ibb.co/MsrDQf3/t7.jpg" alt="Dhaniv Talav" class="w-full h-64 object-cover">
                </a>
            </div>

            <div class="gallery-item talav transform hover:scale-105 transition duration-300">
                <a href="https://i.ibb.co/W0rqJNJ/Whats-App-Image-2023-09-19-at-19-34-26.jpg" class="block rounded-lg overflow-hidden shadow-lg">
                    <img src="https://i.ibb.co/W0rqJNJ/Whats-App-Image-2023-09-19-at-19-34-26.jpg" alt="Dhaniv Talav" class="w-full h-64 object-cover">
                </a>
            </div>

            <div class="gallery-item talav transform hover:scale-105 transition duration-300">
                <a href="https://i.ibb.co/hW83sRv/t6.jpg" class="block rounded-lg overflow-hidden shadow-lg">
                    <img src="https://i.ibb.co/hW83sRv/t6.jpg" alt="Dhaniv Talav" class="w-full h-64 object-cover">
                </a>
            </div>

            <div class="gallery-item talav transform hover:scale-105 transition duration-300">
                <a href="https://i.ibb.co/k57crct/t3.jpg" class="block rounded-lg overflow-hidden shadow-lg">
                    <img src="https://i.ibb.co/k57crct/t3.jpg" alt="Dhaniv Talav" class="w-full h-64 object-cover">
                </a>
            </div>
        </div>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterBtns = document.querySelectorAll('.filter-btn');
    const galleryItems = document.querySelectorAll('.gallery-item');

    filterBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            // Remove active class from all buttons
            filterBtns.forEach(b => b.classList.remove('active', 'bg-blue-600', 'text-white'));
            filterBtns.forEach(b => b.classList.add('bg-gray-200', 'text-gray-700'));
            
            // Add active class to clicked button
            btn.classList.add('active', 'bg-blue-600', 'text-white');
            btn.classList.remove('bg-gray-200', 'text-gray-700');

            const filterValue = btn.getAttribute('data-filter');

            galleryItems.forEach(item => {
                if (filterValue === 'all' || item.classList.contains(filterValue)) {
                    item.style.display = 'block';
                } else {
                    item.style.display = 'none';
                }
            });
        });
    });
});
</script>


@include('_layouts.partials.footer')
@endsection