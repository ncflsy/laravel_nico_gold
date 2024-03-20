<header class="bg-light h-[80px] shadow-md border flex items-center">
    <nav class="flex w-full items-center justify-between px-[150px]">
        <h1 class="font-semibold text-[22px]">NICO FLASSY</h1>
        <ul class="flex gap-7 items-center text-black1 font-regular text-[17px]">
            <li class=" hover:text-blue1 cursor-pointer">Beranda</li>
            <li class=" hover:text-blue1 cursor-pointer">Tambah Data</li>
            <li class=" hover:text-blue1 cursor-pointer">Github</li>
            @if (Auth::check())
                <div class="z-[999]">
                    <div class="relative">
                        <button id="dropdown-toggle" class="inline-flex justify-center items-center px-4 py-2 border border-gray-300 rounded-md bg-light  font-medium text-gray-700 hover:bg-gray-50 " aria-expanded="false" aria-haspopup="true">
                            Halo, {{ Auth::user()->name }}
                            <svg class="-mr-1 ml-2 h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>
                    
                        <ul id="dropdown-menu" class="hidden origin-top-right absolute right-0 mt-2 w-44 rounded-md shadow-lg bg-white ring-1 ring-black ring-opacity-5" role="menu" aria-orientation="vertical" aria-labelledby="dropdown-toggle">
                            <li role="none">
                                <a href="/logout" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-gray-900" role="menuitem">Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            @else
                <li class="px-6 py-2 bg-blue1 text-white"><a href="/login">Login</a></li>
            @endif
        </ul>
    </nav>
</header>