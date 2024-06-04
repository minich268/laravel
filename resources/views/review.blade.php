<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Форма обратной связи
        </h2>
    </x-slot>
    <div class="pt-28">
        <div class="text-4xl font-semibold pb-5 text-center">Reviews</div>
    </div>
    @if (session('status'))
        <div class="toast toast-top toast-end" x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">
            <div class="alert alert-success">
                Thank you! <br />
                {{ session('status') }}
            </div>
        </div>
    @endif
<div class="grid grid-cols-4 m-2 bg-base">
    <div class="col-span-4 md:col-span-3 order-2 md:order-1 bg-white rounded-lg border shadow p-6">
        <div class="text-3xl text-center">Отзывы с сайта</div>
        <div>
            @foreach($reviews as $lead)
                <div class="border-b border-gray-300 p-3">
                    <div>{{$lead->message}}</div>
                    <div><b>{{$lead->name}}</b> {{$lead->created_at->diffForHumans()}}</div>
                </div>
            @endforeach
        </div>
    </div>
    <div class="col-span-4 md:col-span-1 order-1 md:order-2 p-3">
        <div class="grid grid-cols-1">
            <div>
                <div class="p-1">
                    <form action="{{asset('review/')}}" method="post" class="flex flex-col">
                        @csrf
                        <label for="name" class="block">
                            <span class="text-gray-700">Имя</span>
                            <input class="block w-full mt-1 form-input" required name="name" id="name" type="text" autocomplete="off">
                        </label>
                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                        <label for="email" class="block mt-4">
                            <span class="text-gray-700">Email</span>
                            <input class="block w-full mt-1 form-input" required name="email" id="email" autocomplete="off" type="email">
                        </label>
                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->

                        <label for="phone" class="block mt-4">
                            <span class="text-gray-700">Телефон</span>
                            <input class="block w-full mt-1 form-input" required name="phone" id="phone" autocomplete="off" type="tel">
                        </label>
                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->


                        <label class="block mt-4">
                            <span class="text-gray-700">Сообщение</span>
                            <textarea class="block w-full mt-1 form-textarea" required name="message" rows="3" placeholder=""></textarea>
                        </label>
                        <!--[if BLOCK]><![endif]--><!--[if ENDBLOCK]><![endif]-->
                        <input type="hidden" name="preferred" value="отзыв">
                        <button type="submit" class="px-4 py-2 mt-8 font-semibold text-gray-800 bg-white border border-gray-300 rounded shadow hover:bg-gray-100">
                            Оставить отзыв
                        </button>
                    </form>
                </div>
            </div>
            <p class="p-2 text-center">

            </p>
        </div>
    </div>
</div>
<footer class="footer p-10 bg-base-300 text-base-content">
  <nav>
    <h6 class="footer-title">Главная</h6> 
    <a class="link link-hover">Новости</a>
    <a class="link link-hover">Галерея</a>
    <a class="link link-hover">О нас</a>
     </nav> 
  <nav>
    <h6 class="footer-title">Социальные сети</h6> 
    <div class="grid grid-flow-col gap-4">
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path></svg></a>
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path></svg></a>
      <a><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current"><path d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z"></path></svg></a>
    </div>
  </nav>
</footer>
</x-app-layout>
