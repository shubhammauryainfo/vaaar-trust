@extends('_layouts.main')

@section('body')
@include('_layouts.partials.header')
@include('_layouts.partials.after-header',['data'=>$page['pages']['bankdetails']])

<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- FamPay Card -->
                <div class="bg-white p-8 rounded-lg shadow-md text-center transform transition duration-300 hover:scale-105">
                    <h5 class="text-2xl font-bold text-gray-800 mb-4 uppercase">FamPay</h5>
                    <div class="mb-6">
                        <p class="text-gray-600">
                            <span class="font-semibold">UPI ID:</span> 
                            <span class="text-blue-600">vaaarfoundationriyaz@fam</span>
                        </p>
                    </div>
                    <div class="flex justify-center">
                        <img src="{{$page->baseUrl}}/assets/images/bank/fampay.jpg" 
                             alt="FamPay QR Code" 
                             class="w-64 h-64 object-contain rounded-lg shadow-sm">
                    </div>
                </div>

                <!-- Google Pay Card -->
                <div class="bg-white p-8 rounded-lg shadow-md text-center transform transition duration-300 hover:scale-105">
                    <h5 class="text-2xl font-bold text-gray-800 mb-4 uppercase">Google Pay</h5>
                    <div class="mb-6">
                        <p class="text-gray-600">
                            <span class="font-semibold">UPI ID:</span>
                            <span class="text-blue-600">Coming Soon</span>
                        </p>
                    </div>
                    <div class="flex justify-center items-center h-64">
                        <p class="text-gray-500 italic">QR Code will be available soon</p>
                    </div>
                </div>

                <!-- Kotak Card -->
                <div class="bg-white p-8 rounded-lg shadow-md text-center transform transition duration-300 hover:scale-105">
                    <h5 class="text-2xl font-bold text-gray-800 mb-4 uppercase">Kotak Bank</h5>
                    <div class="mb-6">
                        <p class="text-gray-600">
                            <span class="font-semibold">Account Details:</span>
                            <span class="text-blue-600">Coming Soon</span>
                        </p>
                    </div>
                    <div class="flex justify-center items-center h-64">
                        <p class="text-gray-500 italic">Bank details will be available soon</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


@include('_layouts.partials.footer')
@endsection