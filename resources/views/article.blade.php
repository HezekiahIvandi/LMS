@extends('layouts.alttemplate')

@section('content')
@vite('resources/css/article.css')
@vite('resources/js/article.js')

<div id="popup" class="hidden fixed left-0 right-0 bg-black bg-opacity-80 w-[100%] h-[100%] z-50">
    <div class="absolute top-[50%] left-[50%] bg-white bg-opacity-100 translate-x-[-50%] translate-y-[-50%] px-[30px] pt-[50px] pb-[10px] shadow-md shadow-black w-[500px]">
        <span id="close-btn" class="absolute top-[10px] right-[10px] cursor-pointer text-[24px] font-extrabold">&times;</span>
        <h2 class="pb-[20px] text-[20px] font-bold text-center">Menambahkan Artikel Baru</h2>
        <form class="flex flex-col" id="art-form" action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="art-title" class="text-left pb-[10px]">Judul Artikel:</label>
            <input class="mb-[25px] p-[10px] border-[1px] border-[#ccc] rounded text-[16px]" type="text" id="art-title" name="article_title" placeholder="Judul Artikel" required>
            <label for="article_image" class="text-left pb-[10px]">Gambar Thumbnail Artikel</label>
            <input type="file" name="article_image" class="mb-[25px] p-[10px] border-[1px] border-[#ccc] rounded text-[16px]" accept="image/*" required>
            <label for="art-summary" class="text-left pb-[10px]">Isi Artikel:</label>
            <textarea class="mb-[25px] p-[10px] border-[1px] border-[#ccc] rounded text-[16px]" name="article_summary" id="art-summary" placeholder="Masukkan is artikel di sini..." required></textarea>

            <button class="mb-[25px] p-[10px] rounded text-[16px] text-white bg-[#006699] hover:bg-[#004466] ease transition cursor-pointer" type="submit">Simpan</button>
        </form>
    </div>
</div>

<div id="dropdown-sort" class="z-10 bg-white divide-y divide-gray-100 rounded-lg shadow absolute top-[260px] right-[10%] md:right-[10%] lg:right-[20%] hidden">
    <div class="py-2">
        <form action="{{ route('article.sortdescdate') }}" method="GET" class="w-full block px-4 py-2 text-sm text-black hover:bg-gray-100">
        <button type="submit" class="p-0 w-full flex">Urut dari yang terbaru</button>
        </form>
        <form action="{{ route('article.sortascdate') }}" method="GET" class="w-full block px-4 py-2 text-sm text-black hover:bg-gray-100">
        <button type="submit" class="p-0 w-full flex">Urut dari yang terlama</button>
        </form>
        <form action="{{ route('article.sortasctitle') }}" method="GET" class="w-full block px-4 py-2 text-sm text-black hover:bg-gray-100">
        <button type="submit" class="p-0 w-full flex">Urut dari A-Z</button>
        </form>
        <form action="{{ route('article.sortdesctitle') }}" method="GET" class="w-full block px-4 py-2 text-sm text-black hover:bg-gray-100">
        <button type="submit" class="p-0 w-full flex">Urut dari Z-A</button>
        </form>
    </div>
</div>

<!-- Article -->
<div id="article" class="pt-36 pb-8 min-h-[60vh]">
    <h1 class="text-center text-[24px] font-extrabold mb-4 text-white">Artikel<span><button id="add-btn" class="text-white text-[16px] bg-[#006699] ml-[10px] rounded cursor-pointer border-nono px-[6px]">+</button></span></h1>
    <div class="w-4/5 md:w-4/5 lg:w-3/5 mx-auto flex">
        <form class="w-[90%]" action="{{ route('article.search') }}" method="GET">
            <div class="relative">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-black" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                    </svg>
                </div>
                <input type="text" name="search" id="default-search" class="block w-full p-4 ps-10 text-sm text-black border border-gray-300 rounded-md bg-gray-50" placeholder="Mencari Artikel." required />
                <button type="submit" class="text-white absolute end-2.5 bottom-2.5 bg-[#006699] hover:bg-[#004466] font-semibold rounded-md text-sm px-4 py-2 ease duration-200">Cari</button>
            </div>
        </form>
        <div class="w-[10%] text-right align-middle">
            <button id="sort-button" class="text-[#339966] hover:text-white bg-white hover:bg-[#115734] font-semibold rounded-md text-sm py-2 ease duration-200 w-[80%] h-[100%]">Urutkan</button>
        </div>
    </div>
    
    <div id="article-collection" class="mb-8">
        @foreach ($article as $art)
        <div id="article-card" class="bg-white w-4/5 md:w-4/5 lg:w-3/5 mx-auto rounded-lg p-6 my-8 shadow-md">
            <div class="flex">
                <img src="{{ URL::asset($art->article_image) }}" class="w-60 h-40 rounded-lg">
                <div class="grid grid-cols-1 ml-8 h-40 place-content-between w-full">
                    <div>
                        <p class="text-[18px] font-bold">{{ $art->article_title }}</p>
                        <p class="text-[16px] font-normal">{{ $art->article_summary }}</p>
                    </div>
                    <p class="text-right text-[16px] font-normal">{{ $art->created_at}}</p>
                </div>
            </div>
            <div class="w-full mt-4 flex">
                <div class="ml-auto flex">
                    <button class="text-white bg-[#006699] hover:bg-[#0c374d] ease transition text=[14px] font-semibold py-[8px] px-[10px] rounded mr-[10px]">Sunting Artikel</button>
                    <form action="{{ route('article.destroy', $art->id) }}" method="POST" onsubmit="return confirm('Anda yakin ingin menghapus artikel ini?');">
                        @method('delete')
                        @csrf
                        <button type="submit" class="text-white bg-[#339966] hover:bg-[#115734] ease transition text=[14px] font-semibold py-[8px] px-[10px] rounded ">Hapus Artikel</button>
                    </form>
                </div>
            </div>

        </div>
        @endforeach
    </div>
</div>
@endsection