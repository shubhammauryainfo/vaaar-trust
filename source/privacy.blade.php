@extends('_layouts.main')
@section('body')

@include('_layouts.partials.header')

<section class="py-16 px-4 md:px-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8 text-center">Privacy Policy</h1>
        
        <div class="prose prose-lg max-w-none">
            <div class="bg-white rounded-lg shadow-md p-8 space-y-6">
                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Information We Collect</h2>
                    <p class="text-gray-600">We collect information that you voluntarily provide to us when you:</p>
                    <ul class="list-disc ml-6 mt-2 text-gray-600">
                        <li>Make a donation</li>
                        <li>Sign up for our newsletter</li>
                        <li>Contact us through our website</li>
                        <li>Participate in our events or programs</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">How We Use Your Information</h2>
                    <p class="text-gray-600">We use the collected information to:</p>
                    <ul class="list-disc ml-6 mt-2 text-gray-600">
                        <li>Process your donations</li>
                        <li>Communicate with you about our activities and impact</li>
                        <li>Respond to your inquiries</li>
                        <li>Improve our services and website experience</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Information Security</h2>
                    <p class="text-gray-600">We implement appropriate security measures to protect your personal information from unauthorized access, alteration, disclosure, or destruction. However, no method of transmission over the internet is 100% secure.</p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Third-Party Services</h2>
                    <p class="text-gray-600">We may use third-party services for:</p>
                    <ul class="list-disc ml-6 mt-2 text-gray-600">
                        <li>Payment processing</li>
                        <li>Email communications</li>
                        <li>Analytics</li>
                    </ul>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">Contact Us</h2>
                    <p class="text-gray-600">If you have any questions about our Privacy Policy, please contact us at:</p>
                    <p class="text-gray-600 mt-2">Email: officialvaaar@gmail.com</p>
                    <p class="text-gray-600">Phone: +91-9373458337</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('_layouts.partials.footer')
@endsection
