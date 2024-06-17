@vite('resources/js/navbar.js')
<nav>
    <img src="{{URL::asset('assets/Ikon WikiLatih.png')}}" alt="Ikon WikiLatih">
    <div class="navigation">
        <ul>
            <li><a href="/">Beranda</a></li>
            <li><a href="{{ route('kursus.index') }}">Kursus</a></li>
            <li><a href="/article">Artikel</a></li>
            <li><a href="{{ route('announcement.index') }}">Pengumuman</a></li>
            <li><a href="{{ route('about') }}">Tentang Kami</a></li>
        </ul>
    </div>

    @auth
    <div id="ddown-container" class="">
        <a id="avatar">
            <div class="border-[2px] border-[#339966] rounded-[50%]">
                
            <img src="{{url('assets/profile.png')}}" alt="" class="w-[3rem] rounded-[50%]">
            </div>
        </a>
        
        <!-- Dropdown menu -->
        <div id="dropdown" class="z-10 bg-white divide-y divide-gray-100 rounded-lg shadow absolute top-[6rem] right-0 hidden">
            <ul class="py-2 text-sm text-gray-700">
             
              <li>
                <p class="block px-4 py-2">Welcome back, {{auth()->user()->name}}</p>
              </li>
            </ul>
            <div class="py-2">
              <a href="/profile" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profile</a>
              <form action="/logout" method="POST" class="w-full block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">
                @csrf
                <button type="submit" class="p-0 w-full flex">
                    
                    <p>Log out</p>
                </button>
              </form>
            </div>
        </div>
    </div>

    
    @else
    <a href="/login">
        <button class="bg-[#339966] text-white font-semibold px-[1rem] py-[0.5rem] rounded-md w-[7rem] hover:bg-[#61cf98] ease-in-out">
            Sign In
        </button>
    </a>
    @endauth
   
</nav>