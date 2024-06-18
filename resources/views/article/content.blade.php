@extends('layouts.alttemplate')

@section('content')
@vite('resources/css/article.css')

<section id="article-content">
    <div class="min-h-[60vh] w-4/5 md:w-[65%] lg:w-1/2 mx-auto shadow-xl p-8 bg-white rounded-lg">
        <h1 class=" text-center font-extrabold text-4xl">{{ $article->article_title}}</h1>
        <p class="text-right mt-4">Dibuat pada {{ $article->created_at->format('d M Y H:i') }}</p>
        <img src="{{ URL::asset($article->article_image) }}" class="w-full h-[400px] mx-auto object-cover my-8">
        <p class="text-justify mt-4">{{ $article->article_content }}</p>
    </div>
</section>


@endsection