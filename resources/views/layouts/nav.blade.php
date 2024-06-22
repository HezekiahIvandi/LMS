@vite('resources/js/navbar.js')
<nav>
    <img src="{{URL::asset('assets/Ikon WikiLatih.png')}}" alt="Ikon WikiLatih">
    <div class="navigation">
        <ul>
            <li><a href="/" class="{{ Request::is('/') ? 'text-[#006699]' : '' }}">Beranda</a></li>
            @auth
            <li><a href="{{ route('kursus.index') }}" class="{{ Request::routeIs('kursus.index') ? 'text-[#006699]' : '' }}">Kursus</a></li>
            <li><a href="/article" class="{{ Request::is('article') ? 'text-[#006699]' : '' }}">Artikel</a></li>
            <li><a href="{{ route('announcement.index') }}" class="{{ Request::routeIs('announcement.index') ? 'text-[#006699]' : '' }}">Pengumuman</a></li>
            @endauth
            <li><a href="{{ route('about') }}" class="{{ Request::routeIs('about') ? 'text-[#006699]' : '' }}">Tentang Kami</a></li>
        </ul>
    </div>

    @auth
    <div id="ddown-container" class="">
        <a id="avatar" class="">
            <div class="border-[2px] border-[#339966] rounded-[50%] hover:border-[#006699] ease-in-out">
                
            <img src="{{ url(Auth::user()->profile_picture_url) }}" alt="" class="w-[3rem] rounded-[50%]">
            </div>
        </a>
        
        <!-- Dropdown menu -->
        <div id="dropdown" class="z-10 bg-white divide-y divide-gray-100 rounded-lg shadow absolute top-[6rem] right-0 hidden">
            <ul class="py-2 text-sm text-gray-700">
                
              <li>
                <p class="block px-4 py-2 cursor-context-menu">Selamat datang, {{auth()->user()->name}}</p>
              </li>
            </ul>
            <div class="py-2">
              <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 hover:text-[#006699]">Profile</a>
              <form action="/logout" method="POST" class="w-full block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                @csrf
                <button type="submit" class="p-0 w-full flex hover:text-[#006699]">
                    
                    <p>Log out</p>
                </button>
               
              </form>
              
            </div>
          
        </div>
    </div>

    
    @else
    <a href="/login">
        <button class="bg-[#339966] text-white font-semibold px-[1rem] py-[0.5rem] rounded-md w-[7rem] hover:bg-[#61cf98] ease-in-out">
            Masuk
        </button>
    </a>
    @endauth
   
</nav>