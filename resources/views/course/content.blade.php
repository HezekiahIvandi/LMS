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
            <label for="edit-lsn-title" class="text-left pb-[10px]">File:</label>
            <input class="mb-[25px] p-[10px] border-[1px] border-[#ccc] rounded text-[16px]" type="File" id="edit-lsn-file" name="file_content_url" placeholder="Pilih file">
            <label for="edit-lsn-title" class="text-left pb-[10px]">Video:</label>
            <input class="mb-[25px] p-[10px] border-[1px] border-[#ccc] rounded text-[16px]" type="File" id="edit-lsn-video" name="video_content_url" placeholder="Pilih file">
            <label for="edit-lsn-title" class="text-left pb-[10px]">Konten teks:</label>
            <textarea class="mb-[25px] p-[10px] border-[1px] border-[#ccc] rounded text-[16px] max-h-[10rem]" id="edit-lsn-text" name="text_content" placeholder="@isset($current_lessons){{ $current_lessons->text_content }}@endisset" required>@isset($current_lessons){{ $current_lessons->text_content }}@endisset</textarea>

            <button class="mb-[25px] p-[10px] rounded text-[16px] text-white bg-[#006699] hover:bg-[#004466] ease transition cursor-pointer" type="submit">Simpan</button>
        </form>
    </div>
</div>


<div id="course-content" class="min-h-[80vh] pt-[100px] flex">
    <div class="bg-gradient-to-r from-[#046494] to-[#339966] w-[300px] text-white">
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


    @if($current_lessons != null)
    <div class="w-full h-full pt-6 px-8 mb-[60px]">
        <h1 class="text-center font-extrabold text-[20px]">
            {{ $current_lessons -> lesson_title }}
        </h1>
        <p class="text-justify mt-4">
            @if ($current_lessons != null)
                {{$current_lessons -> text_content}}
            @else
                Teks konten
            @endif
        </p>

       
        @if ($current_lessons->file_content_url != null)
        <iframe class="mt-[1rem]" src="{{ url($current_lessons->file_content_url) }}" style="width:100%; height:800px;" frameborder="0"></iframe>
        @else
                <h1>File belum di upload</h1>
        @endif

        @if ($current_lessons->video_content_url != null)
        <div class="mt-[1rem] flex w-full">
            <video  controls>
                <source src="{{ url($current_lessons->video_content_url) }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
        @else
                <h1>Video belum di upload</h1>
        @endif
    </div>
    
@else
    <h1 class="font-extrabold text-[20px] pt-6 px-8 text-center w-full">
        Pelajaran Kosong
    </h1>
@endif
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
