<div class="navbar bg-base-100 sticky top-0">

  <a class="logo" href="/">
    <img src="images/XM.png" width="70" height="30" alt="Логотип">
  </a>

  <div class="flex-1">
    <a class="btn btn-ghost text-xl"></a>
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
     @if($world == 'plan')
                        <span class=" bg-gray-100 p-3 dark:text-white hover:shadow-2xl">{{__('menu.plan')}}</span>
                    @else
                        <a href="/plan"
                           class=" p-3 dark:text-white hover:shadow-2xl">{{__('menu.plan')}}</a>
                    @endif
    </li>
       <li>
        <details>
          <summary>
          {{__('menu.about us')}} 
          </summary>
          <ul class="p-2 bg-base-100 rounded-t-none">
            <li><a href="/contact">{{__('menu.contact')}}</a></li>
            <li><a href="/review">{{__('menu.feedback form')}}</a></li>
            <li><a href="/question">{{__('menu.question')}}</a></li>
          </ul>
                </details>

            </li>
                </ul>
    <li>
   
    <a href="/plan"
    class="relative z-10 inline-flex items-center justify-center w-full px-8 py-3 text-lg font-bold text-white transition-all duration-200 bg-red-300 border-2 border-transparent sm:w-auto rounded-xl font-pj hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
        role="button">
        Записаться сейчас
</a>
    </li>
  </div>
</div>
