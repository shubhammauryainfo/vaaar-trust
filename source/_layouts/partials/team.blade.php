
<!-- Team Section -->
<section class="py-16 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Header -->
        <header class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-4xl font-bold mb-4">Our Leadership Team</h2>
            <p class="text-gray-600">Meet the passionate individuals driving the Vaaar Foundation's mission of empowering underprivileged children and creating a brighter future. Led by visionary founders, our team works tirelessly to make a lasting impact.</p>
        </header>

        <!-- Team Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Team Member 1 -->
            @foreach($page->teamMembers as $member)
            <div class="group">
                <div class="relative overflow-hidden rounded-lg shadow-lg">
                    <img class="w-full h-[28rem] object-cover object-center transform group-hover:scale-105 transition duration-300" src="{{$page->baseUrl.$member['image']}}" alt="{{$member['name']}}">
                    <div class="absolute bottom-0 left-0 right-0 bg-white p-4 text-center transform translate-y-0 transition duration-300">
                        <h5 class="text-lg font-bold text-gray-900 uppercase">{{$member['name']}}</h5>
                    </div>
                </div>
            </div>
            @endforeach
      

       

          
       
        </div>
    </div>
</section>