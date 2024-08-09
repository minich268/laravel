@extends('layouts.base')

@section('content')
<section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap sm:-m-4 -mx-4 -mb-10 -mt-4">
           @foreach ($blogs as $blog)
                    <div class="p-4 md:w-1/3 sm:mb-0 mb-6">
                        <div class="rounded-lg h-64 overflow-hidden">
                            <img alt="содержание" class="object-cover object-center h-full w-full rounded-tl-4xl и rounded-tr-4xl" src="{{asset('storage/' .$blog->picture)}}">
                        </div>
                        <h3 class="text-xl font-medium title-font text-gray-900 mt-5">
                            <div style="vertical-align: inherit;">
                                <a href="{{asset('blog/'.$blog->id)}}">{{$blog->name}}</a>
                            </div>
                        </h3>
                        <p class="text-base leading-relaxed mt-2">
               {{$blog->description_small}}
                        </p>

                        <div class="flex items-center flex-wrap ">
                            <a class="text-indigo-500 inline-flex items-center md:mb-2 lg:mb-0">
                                <a href="{{asset('blog/'.$blog->id)}}">Узнать больше</a>

                                <svg class="w-4 h-4 ml-2" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                    <path d="M5 12h14"></path>
                                    <path d="M12 5l7 7-7 7"></path>
                                </svg>
                                <span class="text-gray-400 mr-3 inline-flex items-center lg:ml-auto md:ml-0 ml-auto leading-none text-sm pr-3 py-1 border-r-2 border-gray-200">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                  <circle cx="12" cy="12" r="3"></circle>
                </svg>
                <div style="vertical-align: inherit;">
                  <div style="vertical-align: inherit;">{{\App\Models\Views::where('page', '/blog/'.$blog->id)->count()}}</div>
                </div>
              </span>
                                <span class="text-gray-400 inline-flex items-center leading-none text-sm">
                <svg class="w-4 h-4 mr-1" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" viewBox="0 0 24 24">
                  <path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"></path>
                </svg>
                <div style="vertical-align: inherit;">
                  <div style="vertical-align: inherit;">{{$blog->comments->count()}}</div>
                </div>
              </span>
                            </a>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
@endsection