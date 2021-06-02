<div class="bg-green-500">
    <div class="mx-auto p-2.5 sm:px-6">
      <div class="relative bg-green-500 h-7.5">
        <!-- Right Wrapper-->
        <div class="absolute inset-y-0 left-0 flex items-center">
            <button type="button" class="mobile-menu-button btn btn-light flex flex-col focus:outline-none focus:border-none z-40">
                <span class="bg-white rounded-sm h-0.5 w-4 mb-1"></span>
                <span class="bg-white rounded-sm h-0.5  w-4 mb-1"></span>
                <span class="bg-white rounded-sm h-0.5  w-4 mb-1"></span>
            </button>
        </div>
             <!-- Left Wrapper-->
        <div class="absolute inset-y-0 right-0 flex items-center  pr-2 sm:ml-6 sm:pr-0">

            <div class="relative lg:px-5 px-3 text-gray-600">
                <input class="border-transparent bg-green-200 h-7.5 rounded-sm placeholder-gray-600 p-2.5 text-sm leading-12 focus:outline-none"
                  type="search" name="search" placeholder="Search">
                <button type="submit" class="absolute right-0 top-0 mt-2 mr-8">
                  <svg class="text-gray-600 h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg"
                    xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px"
                    viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve"
                    width="512px" height="512px">
                    <path
                      d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                  </svg>
                </button>
              </div>

            <!-- Notification-->
            <button class="relative lg:px-5 px-3 rounded-full text-white hover:text-gray-700 focus:outline-none">
                <span class="sr-only">View notifications</span>
                <!-- Heroicon name: outline/bell -->
                <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                </svg>
          </button>

          <!-- Profile dropdown -->
          <div class="relative lg:px-5 px-3">
            <div>
              <button type="button" class="flex text-sm rounded-full focus:outline-none text-white hover:text-gray-700" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                <i class="fa fa-user text-xl " aria-hidden="true"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

       <!-- mobile menu bar -->
       {{-- <div class="bg-gray-800 text-gray-100 flex justify-between ">
        <!-- logo -->
        <a href="#" class="block p-4 text-white font-bold">Better Dev</a>

        <!-- mobile menu button -->
        <button class="mobile-menu-button p-4 focus:outline-none focus:bg-gray-700">
          <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
          </svg>
        </button>
      </div> --}}