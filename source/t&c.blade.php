@extends('_layouts.main')
@section('body')
@include('_layouts.partials.header')

<section class="py-16 px-4 md:px-8">
    <div class="max-w-4xl mx-auto">
        <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-8 text-center">Terms & Conditions</h1>
        
        <div class="prose prose-lg max-w-none">
            <div class="bg-white rounded-lg shadow-md p-8 space-y-6">
                <div class="mb-6">
                    <p class="text-gray-600">Effective Date: 13|09|2023</p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">1. Introduction</h2>
                    <p class="text-gray-600">Welcome to VAAAR Foundation, a charitable organization dedicated to helping impoverished individuals and communities. These Terms and Conditions ("Terms") govern your use of the VAAAR Foundation website, services, and any other related activities. By accessing or using our services, you agree to comply with these Terms.</p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">2. Eligibility</h2>
                    <p class="text-gray-600">You must be at least 18 years old or the legal age of majority in your jurisdiction to use our services. By using our services, you represent and warrant that you meet these eligibility criteria.</p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">3. Donations</h2>
                    <div class="space-y-4">
                        <p class="text-gray-600"><strong>3.1. Donation Acceptance:</strong> VAAAR Foundation gratefully accepts donations from individuals, organizations, and corporations. Donations can be made through various means, including online, checks, bank transfers, and other approved methods.</p>
                        <p class="text-gray-600"><strong>3.2. Donor Privacy:</strong> We are committed to protecting your privacy. Your personal information will be handled in accordance with our Privacy Policy, which can be found on our website.</p>
                        <p class="text-gray-600"><strong>3.3. Tax Deductibility:</strong> Donors may be eligible for tax deductions based on their contributions. It is your responsibility to consult with a tax advisor regarding the tax treatment of your donations.</p>
                    </div>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">4. Use of Funds</h2>
                    <div class="space-y-4">
                        <p class="text-gray-600"><strong>4.1. Mission Alignment:</strong> VAAAR Foundation is dedicated to using donated funds for the betterment of impoverished communities. We commit to using donations for purposes consistent with our mission and goals.</p>
                        <p class="text-gray-600"><strong>4.2. Administrative Costs:</strong> A portion of donations may be used for administrative and operational expenses. However, we strive to keep these costs as low as possible to maximize the impact of your contributions.</p>
                    </div>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">5. Intellectual Property</h2>
                    <p class="text-gray-600"><strong>5.1. Copyright:</strong> All content on the VAAAR Foundation website, including text, graphics, logos, images, and other materials, is protected by copyright and other intellectual property laws. You may not reproduce, distribute, or modify any content without our prior written consent.</p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">6. Termination</h2>
                    <div class="space-y-4">
                        <p class="text-gray-600"><strong>6.1. Termination by VAAAR Foundation:</strong> We reserve the right to terminate your access to our services at any time, with or without cause.</p>
                        <p class="text-gray-600"><strong>6.2. Termination by You:</strong> You may stop using our services at any time.</p>
                    </div>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">7. Limitation of Liability</h2>
                    <p class="text-gray-600">To the extent permitted by law, VAAAR Foundation is not liable for any direct, indirect, incidental, special, or consequential damages arising out of your use of our services.</p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">8. Governing Law</h2>
                    <p class="text-gray-600">These Terms are governed by and construed in accordance with the laws of India, without regard to its conflict of law principles.</p>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">9. Contact Us</h2>
                    <p class="text-gray-600">If you have any questions or concerns about these Terms or our services, please contact us at:</p>
                    <div class="mt-2 text-gray-600">
                        <p>VAAAR Foundation</p>
                        <p>Dhaniv Talav, Nallasopara East, MH IND</p>
                        <p>Email: officialvaaar@gmail.com</p>
                    </div>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold text-gray-800 mb-4">10. Changes to Terms</h2>
                    <p class="text-gray-600">We reserve the right to update or modify these Terms at any time. Any changes will be posted on our website, and the date of the last revision will be updated.</p>
                </div>

                <div class="mt-8">
                    <p class="text-gray-600">By using our services, you agree to these Terms and any future modifications.</p>
                    <p class="text-gray-600 mt-4">Thank you for supporting VAAAR Foundation in our mission to help those in need.</p>
                    <p class="text-gray-600 mt-4">Last Updated: 13|09|2023</p>
                </div>
            </div>
        </div>
    </div>
</section>

@include('_layouts.partials.footer')
@endsection
