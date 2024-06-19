<div class="navbar bg-base-100">
  <div class="flex-1">
    <a class="btn btn-ghost text-xl">{{__('menu.plastic gymnastics')}}</a>
  </div>
  <div class="flex-none">
    <ul class="menu menu-horizontal px-1">
    <li>
    @if($world == '/')
                        <span class=" bg-gray-100 p-3 dark:text-white hover:shadow-2xl">{{__('menu.home')}}</span>
                    @else
                        <a href="/"
                           class=" p-3 dark:text-white hover:shadow-2xl">{{__('menu.home')}}</a>
                    @endif
      </li>
    <li>
    @if($world == 'gallery')
                        <span class=" bg-gray-100 p-3 dark:text-white hover:shadow-2xl">{{__('menu.gallery')}}</span>
                    @else
                        <a href="/gallery"
                           class=" p-3 dark:text-white hover:shadow-2xl">{{__('menu.gallery')}}</a>
                    @endif
     </li>
     <li>
     @if($world == 'blogs')
                        <span class=" bg-gray-100 p-3 dark:text-white hover:shadow-2xl">{{__('menu.news')}}</span>
                    @else
                        <a href="/blogs"
                           class=" p-3 dark:text-white hover:shadow-2xl">{{__('menu.news')}}</a>
                    @endif
    </li>
       <li>
        <details>
          <summary>
          {{__('menu.about us')}} 
          </summary>
          <ul class="p-2 bg-base-100 rounded-t-none">
            <li><a href="/contacts">{{__('menu.contact')}}</a></li>
            <li><a href="/review">{{__('menu.feedback form')}}</a></li>
          </ul>
                </details>

            </li>
                </ul>
    <ul class="menu menu-horizontal px-4">
            <li>
                <details>
                    <summary>
                        {{App::getLocale()}}
                    </summary>
                    <ul class="p-2 bg-base-100 rounded-t-none">
                        <li><a href="/?lang=en">EN</a></li>
                        <li><a href="/?lang=ru">RU</a></li>
                    </ul>
                </details>
            </li>

    </ul>
  </div>
</div>
