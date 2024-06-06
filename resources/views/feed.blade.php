@extends('layouts.base')

@section('content')
   
    <section class="text-gray-600 body-font">
        <div class="container px-5 py-24 mx-auto">
                        @foreach($feeds as $feed)
                  <div>

                    @switch($feed->model_name)
                    @case('Blog')
                    @include('feeds.blog')
                    <hr/>
                    @break
                    @case('BlogText')
                    @include('feeds.blog_text')
                    <hr/>
                    @break
                    @case('BlogTextPicture')
                    @include('feeds.blog_text_picture')
                    <hr/>
                    @break
                    @case('Service')
                    @include('feeds.service')
                    <hr/>
                    @break
                    @case('Gallery')
                    @include('feeds.gallery')
                    <hr/>
                    @break
                    @case('Article')
                    @include('feeds.article')
                    <hr/>
                    @break
                    @case('Review')
                    @include('feeds.review')
                    @endswitch
                  </div>  
                @endforeach

        </div>
    </section>
@endsection