@extends('_layouts.main')

@section('body')
@include('_layouts.partials.header')
@include('_layouts.partials.after-header',['data'=>$page['pages']['about']])
<!-- About Section -->
<div class="py-12 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row justify-between items-center gap-12">
            <div class="lg:w-5/12">
                <h5 class="text-blue-600 font-bold uppercase mb-2">About vaaar foundation</h5>
                <h2 class="text-3xl font-bold mb-4 text-gray-900">"Unlocking Potential, Igniting Minds: Free Education for a Better Tomorrow."</h2>
                <p class="text-gray-600">
                    Ensuring access to quality education for poor children is a critical societal responsibility. Poverty should never be a barrier to a child's right to learn and thrive. Investing in their education not only breaks the cycle of poverty but also empowers them to become productive members of society, contributing to a brighter future for all.
                </p>
            </div>
            <div class="lg:w-6/12">
                <img src="{{$page->baseUrl}}/assets/images/intro/lap.jpg" class="w-full rounded-2xl shadow-lg" alt="children">
            </div>
        </div>
    </div>
</div>

<!-- Mission Vision Section -->
<div class="py-16 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col lg:flex-row justify-between items-center gap-12">
            <div class="lg:w-4/12">
                <img src="{{$page->baseUrl}}/assets/images/intro/vision.svg" class="w-full" alt="Vision">
            </div>
            
            <div class="lg:w-7/12 space-y-8">
                <!-- Mission -->
                <div class="flex items-start gap-6 p-6 bg-white rounded-xl shadow-sm">
                    <div class="text-4xl text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <div>
                        <h5 class="text-xl font-bold mb-2">Mission</h5>
                        <p class="text-gray-600">Our mission is to uplift impoverished communities by providing essential needs, such as food, Education, and healthcare, fostering a path towards self-sufficiency and dignity.</p>
                    </div>
                </div>

                <!-- Vision -->
                <div class="flex items-start gap-6 p-6 bg-white rounded-xl shadow-sm">
                    <div class="text-4xl text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                    </div>
                    <div>
                        <h5 class="text-xl font-bold mb-2">Vision</h5>
                        <p class="text-gray-600">Our vision is a world where every individual, regardless of their circumstances, has access to basic necessities, enabling them to lead fulfilling lives with dignity and hope.</p>
                    </div>
                </div>

                <!-- Values -->
                <div class="flex items-start gap-6 p-6 bg-white rounded-xl shadow-sm">
                    <div class="text-4xl text-blue-600">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                        </svg>
                    </div>
                    <div>
                        <h5 class="text-xl font-bold mb-2">Values</h5>
                        <div class="text-gray-600 space-y-2">
                            <p><span class="font-semibold">Compassion:</span> We operate with empathy and a deep understanding of the struggles faced by those in need, driving our commitment to helping them.</p>
                            <p><span class="font-semibold">Accountability:</span> We are dedicated to transparently and responsibly utilizing resources to ensure the highest impact on the lives of the impoverished communities we serve.</p>
                            <p><span class="font-semibold">Empowerment:</span> We believe in empowering individuals to break the cycle of poverty by not just providing basic needs but also offering opportunities for self-improvement and sustainability.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Team Section -->
@include('_layouts.partials.team')


@include('_layouts.partials.footer')
@endsection