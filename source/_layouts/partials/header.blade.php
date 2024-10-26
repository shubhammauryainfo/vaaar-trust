<div class="hidden md:block bg-primary py-1">
    <div class="container mx-auto">
      <div class="flex flex-col md:flex-row justify-between">
        <div class="flex justify-center md:justify-start">
          <ul class="flex space-x-4 text-center md:text-left">
            <li class="flex items-center space-x-2">
              <i class="fa fa-phone"></i> <span>+91-7775053618 / 9373458337</span>
            </li>
            <li class="flex items-center space-x-2">
              <i class="fa fa-envelope" aria-hidden="true"></i> <span>officialvaaar@gmail.com</span>
            </li>
          </ul>
        </div>
        <div class="flex justify-center md:justify-end mt-2 md:mt-0">
          <ul class="flex space-x-4 text-center md:text-right">
            <li class="flex items-center" title="Facebook">
              <a target="_blank" href="#" class="hover:text-gray-400">
                <i class="fab fa-facebook"></i>
              </a>
            </li>
            <li class="flex items-center" title="Instagram">
              <a target="_blank" href="https://www.instagram.com/vaaar_official_2023" class="hover:text-gray-400">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="flex items-center" title="YouTube">
              <a target="_blank" href="https://www.youtube.com/@VAAAROFFICIAL" class="hover:text-gray-400">
                <i class="fab fa-youtube"></i>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <header class="main-header bg-white py-4 shadow-md">
    <div class="container mx-auto flex items-center justify-between">
      <!-- Logo -->
      <div class="logo">
        <a href="index.html">
          <img src="logo.png" alt="VAAARFOUNDATION" class="h-10">
        </a>
      </div>
  
      <!-- Navbar -->
      <nav class="mainNav">
        <!-- Menu Toggle Button for Mobile -->
        <div class="menu-toggle block md:hidden">
          <h3 class="text-sm uppercase">Menu</h3>
          <button type="button" id="menu-btn" class="flex flex-col space-y-1">
            <span class="block w-6 h-0.5 bg-gray-800"></span>
            <span class="block w-6 h-0.5 bg-gray-800"></span>
            <span class="block w-6 h-0.5 bg-gray-800"></span>
          </button>
        </div>
  
        <!-- Responsive Menu Structure -->
        <ul id="respMenu" class="hidden md:flex space-x-6 text-gray-700" data-menu-style="">
            @if(!empty($page['menus']))
            @foreach ($page['menus'] as $menu)
                <li>
                    <a href="{{ $page->baseUrl . $menu['url'] }}"  class="block py-2 px-3 rounded md:hover:bg-transparent md:border-0 hover:text-yellow-400 md:p-0
                        @if($page->getUrl() == $page->baseUrl . $menu['url']) text-yellow-400 font-bold @else md:text-blue-400  @endif">
                        {{$menu['label']}}
                    </a>
                </li>
            @endforeach
        @else
            <p>No data available</p>
        @endif

        
       
        </ul>
      </nav>
    </div>
  </header>
  