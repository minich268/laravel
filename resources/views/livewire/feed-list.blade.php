<div x-data="{
canLoadMore : @entangle('canLoadMore')
}"  @scroll.window.trottle="
isScrolled = Math.round( window.scrollY + window.innerHeight) >= document.documentElement.scrollHeight;
if(isScrolled && canLoadMore){
@this.loadMore()
}
">
    
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

    <a class="w-full p-2 m-2 text-center cursor-pointer" wire:click="loadMore">Load more</a>
   
</div>
