@extends('_layouts.main')

@section('body')
@include('_layouts.partials.header')
@include('_layouts.partials.after-header',['data'=>$page['pages']['contact']])

{{-- contact-section --}}
<!-- Contact Info Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Address -->
            <div class="text-center">
                <div class="flex justify-center mb-4">
                    <div class="bg-blue-100 p-4 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-2">Address</h3>
                <p class="text-gray-600">Dhaniv Bhaug, Nallasopara (East)-401209</p>
            </div>

            <!-- Phone -->
            <div class="text-center">
                <div class="flex justify-center mb-4">
                    <div class="bg-blue-100 p-4 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-2">Phone Number</h3>
                <p class="text-gray-600">+91-9373458337</p>
            </div>

            <!-- Email -->
            <div class="text-center">
                <div class="flex justify-center mb-4">
                    <div class="bg-blue-100 p-4 rounded-full">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
                <h3 class="text-xl font-semibold mb-2">Email</h3>
                <p class="text-gray-600">officialvaaar@gmail.com</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl font-bold mb-4">Get in touch</h2>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Map -->
            <div class="w-full h-[400px]">
                <iframe class="w-full h-full rounded-lg shadow-lg" 
                    src="https://maps.google.com/maps?width=100%&height=400&hl=en&q=nallasopara%20east&t=&z=14&ie=UTF8&iwloc=B&output=embed"
                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                </iframe>
            </div>

            <!-- Contact Form -->
            <div class="bg-white rounded-lg shadow-lg p-8">
                <form id="contactForm" method="POST" action="form_response.php" class="space-y-6">
                    <div>
                        <input type="text" name="name" id="Name" required
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200"
                            placeholder="Name">
                    </div>
                    
                    <div>
                        <input type="tel" name="phone" id="Phone" required
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200"
                            placeholder="Phone">
                    </div>

                    <div>
                        <input type="email" name="email" id="Email" required
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200"
                            placeholder="Email">
                    </div>

                    <div>
                        <input type="text" name="subject" id="subject" required
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200"
                            placeholder="Subject">
                    </div>

                    <div>
                        <textarea name="message" id="message" required rows="4"
                            class="w-full px-4 py-3 rounded-lg border border-gray-300 focus:border-blue-500 focus:ring-2 focus:ring-blue-200 transition duration-200"
                            placeholder="Message"></textarea>
                    </div>

                    <div>
                        <button type="submit"
                            class="w-full bg-blue-600 text-white py-3 px-6 rounded-lg hover:bg-blue-700 transition duration-200">
                            Send Your Message
                        </button>
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</section>


{{-- end-contact-section --}}
@include('_layouts.partials.footer')
@endsection