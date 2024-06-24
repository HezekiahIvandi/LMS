@extends('layouts.alttemplate')

@section('content')

<div id="popup" class="hidden fixed left-0 right-0 bg-black bg-opacity-80 w-[100%] h-[100%] z-50">
    <div class="absolute top-[50%] left-[50%] bg-white bg-opacity-100 translate-x-[-50%] translate-y-[-50%] px-[30px] pt-[50px] pb-[10px] shadow-md shadow-black w-[500px]">
        <span id="close-btn" class="absolute top-[10px] right-[10px] cursor-pointer text-[24px] font-extrabold">&times;</span>
        <h2 class="pb-[20px] text-[20px] font-bold text-center">Menambahkan Pelajaran</h2>
        <form class="flex flex-col" id="lsn-form" action="{{ route('course.contentstore', $course->id ) }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="lsn-title" class="text-left pb-[10px]">Judul Pelajaran:</label>
            <input class="mb-[25px] p-[10px] border-[1px] border-[#ccc] rounded text-[16px]" type="text" id="lsn-title" name="lesson_title" placeholder="Judul Artikel" required>
            <button class="mb-[25px] p-[10px] rounded text-[16px] text-white bg-[#006699] hover:bg-[#004466] ease transition cursor-pointer" type="submit">Simpan</button>
        </form>
    </div>
</div>

<div id="edit-popup" class="hidden fixed left-0 right-0 bg-black bg-opacity-80 w-[100%] h-[100%] z-50">
    <div class="absolute top-[50%] left-[50%] bg-white bg-opacity-100 translate-x-[-50%] translate-y-[-50%] px-[30px] pt-[50px] pb-[10px] shadow-md shadow-black w-[500px]">
        <span id="edit-close-btn" class="absolute top-[10px] right-[10px] cursor-pointer text-[24px] font-extrabold">&times;</span>
        <h2 class="pb-[20px] text-[20px] font-bold text-center">Edit Pelajaran</h2>
        <form class="flex flex-col" id="edit-lsn-form" action="{{ route('course.contentupdate', ['id' => $course->id]) }}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <input type="hidden" id="edit-lsn-id" name="lesson_id">
            <label for="edit-lsn-title" class="text-left pb-[10px]">Judul Pelajaran:</label>
            <input class="mb-[25px] p-[10px] border-[1px] border-[#ccc] rounded text-[16px]" type="text" id="edit-lsn-title" name="lesson_title" placeholder="Judul Pelajaran" required>
            <button class="mb-[25px] p-[10px] rounded text-[16px] text-white bg-[#006699] hover:bg-[#004466] ease transition cursor-pointer" type="submit">Simpan</button>
        </form>
    </div>
</div>

<div id="course-content" class="h-[100vh] pt-[100px] flex">
    <div class="bg-gradient-to-r from-[#046494] to-[#339966] w-[300px] h-[100%] text-white">
        <h1 class="text-center py-4 font-bold text-[18px] border-b-2 border-white">{{ $course->name }}</h1>
        <h1 class="text-left pl-4 py-2 font-semibold text-[16px] border-b-2 border-white">Daftar Pelajaran</h1>
        @foreach($lessons as $lsn)
            <div class="pl-4 py-2 w-full border-b-2 border-white text-left flex">
                <a href="{{ route('course.contentselect', ['id' => $course->id, 'current' => $lsn->id]) }}" class="w-full"><button>{{ $lsn->lesson_title }}</button></a>
                <div class="flex">
                    <button class="mr-2 text-[18px]" onclick="editLesson('{{ $lsn->id }}', '{{ $lsn->lesson_title }}')"><i class="fa fa-pen-to-square"></i></button>
                    <form action="{{ route('course.contentdestroy', ['id' => $course->id, 'lesson' => $lsn->id]) }}" method="post" onsubmit="return confirm('Anda yakin ingin menghapus pelajaran ini?');">
                        @method('delete')
                        @csrf
                        <button type="submit" class="mr-2 text-[18px]"><i class="fa fa-trash-can"></i></button>
                    </form>
                </div>
            </div>
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

        // Edit Popup
        const editCloseBtn = document.getElementById('edit-close-btn');
        const editLsnForm = document.getElementById('edit-lsn-form');

        editCloseBtn.addEventListener('click', function() {
            document.getElementById('edit-popup').classList.add('hidden');
        });

        editLsnForm.addEventListener('submit', function(event) {
            document.getElementById('edit-popup').classList.add('hidden');
        });
    });

    function editLesson(lessonId, lessonTitle) {
        // Populate edit form fields with lesson data
        document.getElementById('edit-lsn-id').value = lessonId;
        document.getElementById('edit-lsn-title').value = lessonTitle;

        // Show edit popup
        document.getElementById('edit-popup').classList.remove('hidden');
    }
</script>

@endsection
