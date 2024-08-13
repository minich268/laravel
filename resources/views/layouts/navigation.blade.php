<nav class="bg-white py-4 px-2 flex justify-between">
<a class="logo" href="/">
    <img src="images/XM.png" width="70" height="30" alt="Логотип">
  </a>

  <h1 class="font-style: italic text-2xl font-medium">
    Школа пластической гимнастики 
    Венеры Невмержицкой
  </h1>
  <div class="ml-[18px]">
            <a href="tel:+375296727338" class="font-Inter text-[16px] font-medium text-red-800">+375 (29)672-73-38</a>
            <p class="font-Inter text-[14px] font-medium text-red-800">Номер для связи</p>
          </div>
  <a href="/plan"
    class="relative z-10 inline-flex items-center justify-center w-full px-8 py-3 text-lg font-bold text-white transition-all duration-200 bg-red-300 border-2 border-transparent sm:w-auto rounded-xl font-pj hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
        role="button">
        Записаться сейчас
</a>
</nav>


<div class="navbar bg-red-50">
 

  <div class="flex-1">
    <a class="btn btn-ghost text-x3"></a>
  </div>
  <div class="flex justify-center flex-wrap gap-6 text-gray-500 font-medium">
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

    </li>
  </div>
</div>
