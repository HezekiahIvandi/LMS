@extends('layouts.alttemplate')

@section('content')
@vite('resources/css/article.css')

<section id="article-edit">
    <div class="min-h-[60vh] w-4/5 md:w-4/5 lg:w-3/5 bg-white rounded-lg p-8 mx-auto">
        <h2 class="text-center font-extrabold text-[24px]">Sunting Artikel</h2>
        <form action="{{ route('article.update', $article->id) }}" method="POST" enctype="multipart/form-data" class="w-[100%] inline-grid">
            @method('PUT')
            @csrf
            <label for="art-title" class="text-left pb-[10px]">Judur Artikel</label>
            <input type="text" name="article_title" id="art-title" value="{{ $article->article_title }}" class="mb-[25px] p-[10px] border-[1px] border-[#ccc] rounded text-[16px]" required>
            <label for="art-image" class="text-left pb-[10px]">Gambar Artikel</label>
            <input type="file" id="art-image" name="article_image" class="mb-[25px] p-[10px] border-[1px] border-[#ccc] rounded text-[16px]" accept="image/*" required>
            <label for="art-content" class="text-left pb-[10px]">Isi Artikel:</label>
            <textarea class="mb-[25px] p-[10px] border-[1px] border-[#ccc] rounded text-[16px] h-[160px]" name="article_content" id="art-content" required>{{ $article->article_content }}</textarea>
            <button class="mb-[25px] p-[10px] rounded text-[16px] text-white bg-[#006699] hover:bg-[#004466] ease transition cursor-pointer" type="submit">Simpan</button>
        </form>
    </div>
    
</section>

@endsection