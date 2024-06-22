@extends('layouts.alttemplate')

@section('content')

<div id="popup" class="hidden fixed left-0 right-0 bg-black bg-opacity-80 w-[100%] h-[100%] z-50">
    <div class="absolute top-[50%] left-[50%] bg-white bg-opacity-100 translate-x-[-50%] translate-y-[-50%] px-[30px] pt-[50px] pb-[10px] shadow-md shadow-black w-[500px]">
        <span id="close-btn" class="absolute top-[10px] right-[10px] cursor-pointer text-[24px] font-extrabold">&times;</span>
        <h2 class="pb-[20px] text-[20px] font-bold text-center">Menambahkan Pelajaran</h2>
        <form class="flex flex-col" id="lsn-form" action="{{ route('kursus.contentstore', $kursus->id ) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="lsn-title" class="text-left pb-[10px]">Judul Pelajaran:</label>
            <input class="mb-[25px] p-[10px] border-[1px] border-[#ccc] rounded text-[16px]" type="text" id="lsn-title" name="lesson_title" placeholder="Judul Artikel" required>
            <button class="mb-[25px] p-[10px] rounded text-[16px] text-white bg-[#006699] hover:bg-[#004466] ease transition cursor-pointer" type="submit">Simpan</button>
        </form>
    </div>
</div>

<div id="kursus-content" class="h-[100vh] pt-[100px] flex">
    <div class="bg-gradient-to-r from-[#046494] to-[#339966] w-[300px] h-[100%] text-white">
        <h1 class="text-center py-4 font-bold text-[18px] border-b-2 border-white">{{ $kursus->name }}</h1>
        <h1 class="text-left pl-4 py-2 font-semibold text-[16px] border-b-2 border-white">Daftar Pelajaran</h1>
        @foreach($lessons as $lsn)
            <button class="pl-4 py-2 w-full border-b-2 border-white text-left">{{ $lsn->lesson_title }}</button>
        @endforeach
        <button class="pl-4 py-2 w-full border-b-2 border-white font-bold" id="add-btn">+</button>
    </div>
    <div class="w-full h-full pt-6 px-8">
        <h1 class="text-center font-extrabold text-[20px]">
            @if ($current_lessons != null)
                {{ $current_lessons -> lesson_title }}
            @else
                Judul Pelajaran
            @endif
        </h1>
        <p class="text-justify mt-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    const addBtn = document.getElementById('add-btn');
    const popup = document.getElementById('popup');
    const closeBtn = document.getElementById('close-btn');
    const lsnForm = document.getElementById('lsn-form');

    addBtn.addEventListener('click', function() {
        popup.style.display = 'block';
    });

    closeBtn.addEventListener('click', function() {
        popup.style.display = 'none';
    });

    lsnForm.addEventListener('submit', function(event) {
        popup.style.display = 'none';
    });    
})
</script>

@endsection