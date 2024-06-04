<div class="navbar bg-base-100">
  <div class="flex-1">
    <a class="btn btn-ghost text-xl">{{__('menu.plastic gymnastics')}}</a>
  </div>
  <div class="flex-none">
    <ul class="menu menu-horizontal px-1">
    <li><a href="/">{{__('menu.home')}}</a></li>
    <li><a href="/gallery">{{__('menu.gallery')}}</a></li>
    <li><a href="/blogs">{{__('menu.news')}}</a></li>
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
