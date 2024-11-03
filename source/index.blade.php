@extends('_layouts.main')

@section('body')
@include('_layouts.partials.header')
{{-- slider --}}
    <style>
        #slider {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        #slider > div {
            flex: 0 0 100%;
        }
    </style>

    <div class="relative">
        <!-- Slider container -->
        <div class="overflow-hidden relative">
            <div class="flex transition-transform duration-500 ease-in-out" id="slider">
                <div class="min-w-full">
                    <img src="{{ $page->baseUrl }}/assets/images/intro/1.jpg" alt="Slide 1" class="w-full h-[600px] object-cover">
                </div>
                <div class="min-w-full">
                    <img src="{{ $page->baseUrl }}/assets/images/intro/2.jpg" alt="Slide 2" class="w-full h-[600px] object-cover">
                </div>
                <div class="min-w-full">
                    <img src="{{ $page->baseUrl }}/assets/images/intro/3.jpg" alt="Slide 3" class="w-full h-[600px] object-cover">
                </div>
                <div class="min-w-full">
                  <img src="{{ $page->baseUrl }}/assets/images/intro/4.jpg" alt="Slide 4" class="w-full h-[600px] object-cover">
              </div>
              <div class="min-w-full">
                <img src="{{ $page->baseUrl }}/assets/images/intro/5.jpg" alt="Slide 5" class="w-full h-[600px] object-cover">
            </div>
            </div>

            <!-- Navigation buttons -->
            <button class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/30 hover:bg-white/50 text-white p-2 rounded-full" onclick="moveSlide(-1)">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                </svg>
            </button>
            <button class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/30 hover:bg-white/50 text-white p-2 rounded-full" onclick="moveSlide(1)">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                </svg>
            </button>
        </div>
    </div>

    <script>
        let currentSlide = 0;
        const slides = document.querySelectorAll('#slider > div');
        const slider = document.querySelector('#slider');

        function moveSlide(direction) {
            currentSlide = (currentSlide + direction + slides.length) % slides.length;
            updateSlider();
        }

        function updateSlider() {
            slider.style.transform = `translateX(-${currentSlide * 100}%)`;
        }

        // Auto-advance slides every 5 seconds
        setInterval(() => moveSlide(1), 5000);
    </script>
{{-- feature section --}}
    <section class="py-16 bg-gray-50">
        <div class="container mx-auto px-4">
            
            <div class="text-center max-w-3xl mx-auto mb-12">
                <h2 class="text-3xl font-bold text-gray-800 uppercase mb-4">Our Mission</h2>
            </div>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="transform transition duration-500 hover:scale-105">
                    <div class="bg-white p-8 rounded-xl shadow-md text-center hover:shadow-xl transition-shadow duration-300">
                        <div class="mb-6">
                            <img src="{{ $page->baseUrl }}/assets/images/services/1.svg" class="w-20 h-20 mx-auto" alt="Basic Needs"/>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Basic Needs Provision</h3>
                        <p class="text-gray-600">Ensuring access to essentials like food, clean water, education, and healthcare for impoverished communities.</p>
                    </div>
                </div>

                <div class="transform transition duration-500 hover:scale-105">
                    <div class="bg-white p-8 rounded-xl shadow-md text-center hover:shadow-xl transition-shadow duration-300">
                        <div class="mb-6">
                            <img src="{{ $page->baseUrl }}/assets/images/services/2.svg" class="w-20 h-20 mx-auto" alt="Education"/>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Education for All</h3>
                        <p class="text-gray-600">Facilitating quality education and skills development to empower individuals to improve their prospects.</p>
                    </div>
                </div>

                <div class="transform transition duration-500 hover:scale-105">
                    <div class="bg-white p-8 rounded-xl shadow-md text-center hover:shadow-xl transition-shadow duration-300">
                        <div class="mb-6">
                            <img src="{{ $page->baseUrl }}/assets/images/services/3.svg" class="w-20 h-20 mx-auto" alt="Healthcare"/>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Healthcare Access</h3>
                        <p class="text-gray-600">Providing affordable and accessible healthcare services, including vaccinations and preventive care.</p>
                    </div>
                </div>

                <div class="transform transition duration-500 hover:scale-105">
                    <div class="bg-white p-8 rounded-xl shadow-md text-center hover:shadow-xl transition-shadow duration-300">
                        <div class="mb-6">
                            <img src="{{ $page->baseUrl }}/assets/images/services/4.svg" class="w-20 h-20 mx-auto" alt="Income"/>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Income Generation</h3>
                        <p class="text-gray-600">Providing training and resources to develop income-generating skills for self-reliance.</p>
                    </div>
                </div>

                <div class="transform transition duration-500 hover:scale-105">
                    <div class="bg-white p-8 rounded-xl shadow-md text-center hover:shadow-xl transition-shadow duration-300">
                        <div class="mb-6">
                            <img src="{{ $page->baseUrl }}/assets/images/services/5.svg" class="w-20 h-20 mx-auto" alt="Community"/>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Community Development</h3>
                        <p class="text-gray-600">Supporting projects that enhance infrastructure, sanitation, and access to transportation.</p>
                    </div>
                </div>

                <div class="transform transition duration-500 hover:scale-105">
                    <div class="bg-white p-8 rounded-xl shadow-md text-center hover:shadow-xl transition-shadow duration-300">
                        <div class="mb-6">
                            <img src="{{ $page->baseUrl }}/assets/images/services/6.svg" class="w-20 h-20 mx-auto" alt="Advocacy"/>
                        </div>
                        <h3 class="text-xl font-semibold text-gray-800 mb-3">Advocacy and Awareness</h3>
                        <p class="text-gray-600">Raising awareness about poverty-related issues and promoting social change to reduce poverty.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @include('_layouts.partials.footer')
@endsection
