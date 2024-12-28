 <header class="flex items-center justify-between py-3 px-6 border-b border-gray-100">
     <div id="header-left" class="flex items-center">
         <a href="{{ route('home') }}">
             <x-application-logo />
         </a>
         <div class="top-menu ml-10">
             <ul class="flex space-x-4">
                 <li>
                     <a class="flex space-x-2 items-center hover:text-green-900 text-sm text-green-500"
                         href="http://127.0.0.1:8000">
                         Home
                     </a>
                 </li>

                 <li>
                     <a class="flex space-x-2 items-center hover:text-green-500 text-sm text-gray-500"
                         href="http://127.0.0.1:8000/blog">
                         Blog
                     </a>
                 </li>

                 <li>
                     <a class="flex space-x-2 items-center hover:text-green-500 text-sm text-gray-500"
                         href="http://127.0.0.1:8000/blog">
                         About Us
                     </a>
                 </li>

                 <li>
                     <a class="flex space-x-2 items-center hover:text-green-500 text-sm text-gray-500"
                         href="http://127.0.0.1:8000/blog">
                         Contact Us
                     </a>
                 </li>

                 <li>
                     <a class="flex space-x-2 items-center hover:text-green-500 text-sm text-gray-500"
                         href="http://127.0.0.1:8000/blog">
                         Terms
                     </a>
                 </li>

             </ul>
         </div>
     </div>
     <div id="header-right" class="flex items-center md:space-x-6">

         @guest
             @include('layouts.partials.header-right-guest')
         @endguest

         @auth()
             <!-- Settings Dropdown -->
             @include('layouts.partials.header-right-auth')
         @endauth
     </div>

     </div>
 </header>
