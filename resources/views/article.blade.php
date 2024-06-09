<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/article.css')
</head>
<body>
    <!-- Navigation -->
    <nav>
        <img src="assets/Ikon WikiLatih.png" alt="Ikon WikiLatih">
        <div class="navigation">
            <ul>
                <li><a href="/">Beranda</a></li>
                <li><a href="#">Kursus</a></li>
                <li><a href="/article">Artikel</a></li>
                <li><a href="#">Tentang Kami</a></li>
            </ul>
        </div>
    </nav>

    <!-- Article -->
    <div id="article" class="pt-32 grid grid-cols-1">
        <h1 class="text-center text-[24px] font-extrabold mb-4 text-white">Artikel</h1>
        <form class="w-4/5 md:w-3/5 lg:w-2/5 mx-auto">   
            <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                    </svg>
                </div>
                <input type="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-black border border-gray-300 rounded-lg bg-gray-50" placeholder="Mencari Artikel." required />
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-[#006699] hover:bg-[#004466] font-semibold rounded-lg text-sm px-4 py-2">Search</button>
            </div>
        </form>

        <div id="article-collection">
            <div id="article-card" class="bg-white flex w-4/5 md:w-3/5 lg:w-2/5 m-auto rounded-2xl p-6 my-8 shadow-md">
                <img src="assets\Wikimedia.svg" class="w-40 h-40 rounded-2xl">
                <div class="grid grid-cols-1 ml-8 h-40 place-content-between">
                    <div>
                        <p class="text-[18px] font-bold">Judul Artikel 1</p>
                        <p class="text-[16px] font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <p class="text-right text-[16px] font-normal">6 Juni 2024</p>
                </div>
            </div>
            <div id="article-card" class="bg-white flex w-4/5 md:w-3/5 lg:w-2/5 m-auto rounded-2xl p-6 my-8 shadow-md">
                <img src="assets\Wikimedia.svg" class="w-40 h-40 rounded-2xl">
                <div class="grid grid-cols-1 ml-8 h-40 place-content-between">
                    <div>
                        <p class="text-[18px] font-bold">Judul Artikel 2</p>
                        <p class="text-[16px] font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <p class="text-right text-[16px] font-normal">5 Juni 2024</p>
                </div>
            </div>
            <div id="article-card" class="bg-white flex w-4/5 md:w-3/5 lg:w-2/5 m-auto rounded-2xl p-6 my-8 shadow-md">
                <img src="assets\Wikimedia.svg" class="w-40 h-40 rounded-2xl">
                <div class="grid grid-cols-1 ml-8 h-40 place-content-between">
                    <div>
                        <p class="text-[18px] font-bold">Judul Artikel 3</p>
                        <p class="text-[16px] font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <p class="text-right text-[16px] font-normal">4 Juni 2024</p>
                </div>
            </div>
            <div id="article-card" class="bg-white flex w-4/5 md:w-3/5 lg:w-2/5 m-auto rounded-2xl p-6 my-8 shadow-md">
                <img src="assets\Wikimedia.svg" class="w-40 h-40 rounded-2xl">
                <div class="grid grid-cols-1 ml-8 h-40 place-content-between">
                    <div>
                        <p class="text-[18px] font-bold">Judul Artikel 4</p>
                        <p class="text-[16px] font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <p class="text-right text-[16px] font-normal">3 Juni 2024</p>
                </div>
            </div>
            <div id="article-card" class="bg-white flex w-4/5 md:w-3/5 lg:w-2/5 m-auto rounded-2xl p-6 my-8 shadow-md">
                <img src="assets\Wikimedia.svg" class="w-40 h-40 rounded-2xl">
                <div class="grid grid-cols-1 ml-8 h-40 place-content-between">
                    <div>
                        <p class="text-[18px] font-bold">Judul Artikel 5</p>
                        <p class="text-[16px] font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <p class="text-right text-[16px] font-normal">2 Juni 2024</p>
                </div>
            </div>
            <div id="article-card" class="bg-white flex w-4/5 md:w-3/5 lg:w-2/5 m-auto rounded-2xl p-6 my-8 shadow-md">
                <img src="assets\Wikimedia.svg" class="w-40 h-40 rounded-2xl">
                <div class="grid grid-cols-1 ml-8 h-40 place-content-between">
                    <div>
                        <p class="text-[18px] font-bold">Judul Artikel 6</p>
                        <p class="text-[16px] font-normal">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                    <p class="text-right text-[16px] font-normal">1 Juni 2024</p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>