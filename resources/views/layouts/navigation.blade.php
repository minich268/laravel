<nav class="bg-white py-3 px-8 flex justify-between">
<a class="logo" href="/">
    <img src="images/ХМ1.png" width="80" height="100" alt="Логотип">
  </a>

  <h1 class="font-style: italic text-2xl font-medium">
    Школа пластической гимнастики 
    Венеры Невмержицкой
  </h1>
    <div class="ml-[18px]">
            <a href="tel:+375296727338" class="font-Inter text-[16px] font-medium text-red-800">+375 (29)672-73-38</a>
            <p class="font-Inter text-[14px] font-medium text-red-800"></p>
          </div>
          <a href="/format"
    class="relative z-10 inline-flex items-center justify-center w-full px-8 py-3 text-lg 
    font-bold text-white transition-all duration-200 bg-rose-200 border-2 border-transparent 
    sm:w-auto rounded-xl font-pj hover:bg-blue-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-100"
        role="button">
        Записаться сейчас
</a> 
</nav>

<!--<div class="navbar bg-red-50 flex flex-col space-y-1 justify-center m-1">
<nav class="bg-white py-3 px-8 flex justify-between">
<a class="logo" href="/">
    <img src="images/ХМ1.png" width="80" height="100" alt="Логотип">
  </a>

  <h1 class="font-style: italic text-2xl font-medium">
    Школа пластической гимнастики 
    Венеры Невмержицкой
  </h1>
    <div class="ml-[18px]">
            <a href="tel:+375296727338" class="font-Inter text-[16px] font-medium text-red-800">+375 (29)672-73-38</a>
            <p class="font-Inter text-[14px] font-medium text-red-800"></p>
          </div>
          <a href="/plan"
    class="relative z-10 inline-flex items-center justify-center w-full px-8 py-3 text-lg 
    font-bold text-white transition-all duration-200 bg-red-300 border-2 border-transparent 
    sm:w-auto rounded-xl font-pj hover:bg-gray-600 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-900"
        role="button">
        Записаться сейчас
</a> 
</nav>
   <div class="flex">
    <a class="btn btn-ghost text-x6"></a>
  </div>
    <div class="flex justify-center flex-wrap gap-6 text-red-800 font-medium">
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
                        <a href="/programm"
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
  </div>-->
  
  <header class="bg-rose-200 sticky top-0 z-50 px-4">
    <div class="container mx-auto flex justify-between items-center py-4">
   
           <div class="flex md:hidden">
        <button id="hamburger" class="text-white focus:outline-none">
          <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
          </svg>
        </button>
      </div>

      <nav class="hidden md:flex md:flex-grow justify-center">
        <ul class="flex justify-center space-x-4 text-white">
          <li><a href="/" class="hover:text-secondary font-bold">ГЛАВНАЯ</a></li>
          <li><a href="/blogs" class="hover:text-secondary font-bold">СТАТЬИ</a></li>
          <li><a href="/programm" class="hover:text-secondary font-bold">УСЛУГИ</a></li>
          <li><a href="/gallery" class="hover:text-secondary font-bold">ГАЛЕРЕЯ</a></li>
          <li><a href="/contact" class="hover:text-secondary font-bold">КОНТАКТЫ</a></li>
          <li><a href="/review" class="hover:text-secondary font-bold">ФОРМА СВЯЗИ</a></li>
          <li><a href="/question" class="hover:text-secondary font-bold">ВОПРОС-ОТВЕТ</a></li>
        </ul>
      </nav>

    </header>


<nav id="mobile-menu-placeholder" class="mobile-menu hidden flex-col items-center space-y-8 md:hidden px-8">
  <ul class="w-full text-center">
    <li class="border-b border-gray-300 pb-4 pt-4"><a href="#home" class="hover:text-secondary font-bold">Home</a></li>
    <li class="border-b border-gray-300 pb-4 pt-4"><a href="#aboutus" class="hover:text-secondary font-bold">About us</a></li>
    <li class="border-b border-gray-300 pb-4 pt-4"><a href="#results" class="hover:text-secondary font-bold">Results</a></li>
    <li class="border-b border-gray-300 pb-4 pt-4"><a href="#reviews" class="hover:text-secondary font-bold">Reviews</a></li>
    <li class="border-b border-gray-300 pb-4 pt-4"><a href="#portfolio" class="hover:text-secondary font-bold">Portfolio</a></li>
    <li class="border-b border-gray-300 pb-4 pt-4"><a href="#team" class="hover:text-secondary font-bold">Team</a></li>
    <li class="pb-4 pt-4"><a href="#contact" class="hover:text-secondary font-bold">Contact</a></li>
  </ul>
  </nav>

  