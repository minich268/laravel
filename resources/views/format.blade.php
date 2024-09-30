<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
           
        </h2>
    </x-slot>
    <div class="max-w-md mx-auto mt-10 bg-white shadow-lg rounded-lg overflow-hidden">
    <div class="text-2xl py-4 px-6 bg-gray-900 text-white text-center font-bold uppercase">
        Форма записи на занятие
    </div>
    @if (session('status'))
        <div class="toast toast-top toast-end" x-data="{show: true}" x-init="setTimeout(() => show = false, 5000)" x-show="show">
            <div class="alert alert-success">
                Ваше сообщение отправленно <br />
                {{ session('status') }}
            </div>
        </div>
    @endif
    <form action="{{asset('format/')}}" method="post" class="flex flex-col">
                        @csrf
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="name">
                Имя
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="name" name="name" type="text" placeholder="Напишите Ваше имя">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="email">
                Email
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="email" name="email" type="email" placeholder="Напишите Ваш email">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="phone">
                Номер телефона
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="phone" name="phone" type="tel" placeholder="Напишите Ваш номер телефона">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="date">
                Дата
            </label>
            <input
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="date" name="order_date" type="date" placeholder="Выберете дату">
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="time">
                Время
            </label>
            <select
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="service"  name="order_time">
                <option value="">Выбрать время</option>
                <option value="haircut">с 15.00 до 15.45</option>
                <option value="coloring">с 16.00 до 17.30</option>
                <option value="styling">с 18.00 до 19.00</option>
                <option value="facial">с 19.30 до 21.00</option>
            </select>  
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="service">
                Выбор услуги
            </label>
            <select
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="service" name="service">
                <option value="">Выбрать возраст ребенка</option>
                <option value="haircut">от 3 до 5 лет</option>
                <option value="coloring">от 6 до 8 лет</option>
                <option value="styling">от 9 до 15 лет</option>
                <option value="facial">от 10 до 15 лет</option>
            </select>
        </div>
        <div class="mb-4">
            <label class="block text-gray-700 font-bold mb-2" for="message">
                Сообщения
            </label>
            <textarea
                class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                id="message" name="message" rows="4" placeholder="Напишите интересующий Вас вопрос"></textarea>
        </div>
        <div class="flex items-center justify-center mb-4">
            <button
                class="bg-gray-900 text-white py-2 px-4 rounded hover:bg-gray-800 focus:outline-none focus:shadow-outline"
                type="submit">
               Записаться на занятия
            </button>
        </div>

    </form>
</div>

</x-app-layout>
