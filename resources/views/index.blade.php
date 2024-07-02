<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Главная страница
        </h2>

    </x-slot>
	<div class="py-12 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mb-8 flex justify-center">
            <p
                class="relative rounded-full px-4 py-1.5 text-sm leading-6 text-gray-600 ring-1 ring-inset ring-gray-900/10 hover:ring-gray-900/20">
                <span class="hidden md:inline">Фотографии самых счастливых детей</span>
                <a href="/gallery" target="_blank" class="font-semibold text-lime-600">
                    <span class="absolute inset-0" ></span> 
                 <span>→</span>
                </a>
            </p>
        </div>
        <div class="mx-auto max-w-2xl text-center">
            <h1 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl">
                Мечты сбываются
            </h1>
            <p class="mt-6 text-lg leading-8 text-gray-600">
              В каждом движении мы воплащаем мечту каждого ребенка быть счастливым и иметь крепкое здоровье.
            </p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
                <a href="#"
                    class="rounded-md bg-lime-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-lime-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-lime-600">
                    Если Вам нравится с нами
                </a>
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">
                    Идем дальше
                    <span>→</span>
                </a>
            </div>
        </div>
        <section class="bg-white">
	<div class="py-4 px-2 mx-auto max-w-screen-xl sm:py-4 lg:px-6">
		<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-5 gap-4 h-full">
			<div class="col-span-2 sm:col-span-1 md:col-span-2 bg-gray-50 h-auto md:h-full flex flex-col">
				<a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
					<img src="images/1.jpg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
					<div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
					<h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Дети</h3>
				</a>
			</div>
			<div class="col-span-2 sm:col-span-1 md:col-span-2 bg-stone-50">
				<a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 mb-4">
					<img src="images/3.jpg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
					<div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
					<h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Мечты</h3>
				</a>
				<div class="grid gap-4 grid-cols-2 sm:grid-cols-2 lg:grid-cols-2">
					<a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
						<img src="images/5.jpg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
						<div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
						<h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Здоровье</h3>
					</a>
					<a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40">
						<img src="images/6.jpg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
						<div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
						<h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Счастье</h3>
					</a>
				</div>
			</div>
			<div class="col-span-2 sm:col-span-1 md:col-span-1 bg-sky-50 h-auto md:h-full flex flex-col">
				<a href="" class="group relative flex flex-col overflow-hidden rounded-lg px-4 pb-4 pt-40 flex-grow">
					<img src="images/11.jpg" alt="" class="absolute inset-0 h-full w-full object-cover group-hover:scale-105 transition-transform duration-500 ease-in-out">
					<div class="absolute inset-0 bg-gradient-to-b from-gray-900/25 to-gray-900/5"></div>
					<h3 class="z-10 text-2xl font-medium text-white absolute top-0 left-0 p-4 xs:text-xl md:text-3xl">Надежда</h3>
				</a>
			</div>
		</div>
	</div>
</section>
</div>
<div class="bg-gray-50 px-4 mt-16">
    <div class="container mx-auto py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Конкурсы</h2>
                    <p class="text-gray-600">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla sed lorem ac
                        odio dignissim cursus sed at velit.</p>
                </div>
                <div class="bg-gray-100 px-6 py-4">
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800">Новости</a>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Наши гимнасты</h2>
                    <p class="text-gray-600">Donec vehicula urna ac ex commodo, ac consequat ipsum aliquam. Duis vel
                        quam nec nunc suscipit lobortis.</p>
                </div>
                <div class="bg-gray-100 px-6 py-4">
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800">Галерея</a>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">О нас</h2>
                    <p class="text-gray-600">Suspendisse tincidunt metus vitae libero auctor, at aliquam purus
                        malesuada. Morbi sit amet lectus non sapien aliquet rutrum.</p>
                </div>
                <div class="bg-gray-100 px-6 py-4">
                    <a href="#" class="text-blue-600 font-medium hover:text-blue-800">Контакты</a>
                </div>
            </div>
        </div>
    </div>
</div>

    <div x-data="swipeCards()" x-init="
			let isDown = false;
			let startX;
			let scrollLeft;
			$el.addEventListener('mousedown', (e) => {
			isDown = true;
			startX = e.pageX - $el.offsetLeft;
			scrollLeft = $el.scrollLeft;
			});
			$el.addEventListener('mouseleave', () => {
			isDown = false;
			});
			$el.addEventListener('mouseup', () => {
			isDown = false;
			});
			$el.addEventListener('mousemove', (e) => {
			if (!isDown) return;
			e.preventDefault();
			const x = e.pageX - $el.offsetLeft;
			const walk = (x - startX) * 1;
			$el.scrollLeft = scrollLeft - walk;
			});
			" class="overflow-x-scroll scrollbar-hide mb-4 relative px-0.5" style="overflow-y: hidden;">
	<div class="flex snap-x snap-mandatory gap-4" style="width: max-content;">
		<template x-for="card in cards" :key="card.id">
			<div class="flex-none w-64 snap-center">
				<div class="bg-white border-1 border border-gray-200 rounded-lg overflow-hidden mb-4">
					<img :src="card.image" alt="" class="w-full h-40 object-cover">
					<div class="p-4">
						<h3 class="text-lg leading-6 font-bold text-gray-900" x-text="card.title"></h3>
						<p class="text-gray-600 mt-2 text-sm" x-text="card.description"></p>
										</div>
				</div>
			</div>
		</template>
	</div>
</div>
<script>
	function swipeCards() {
			  return {
			    cards: [
            @foreach($services as $service)
                {
                    id: {{$service->id}},
                    image: '{{$service->picture ? asset('storage/'.$service->picture) : asset('images/1.jpg')}}',
                    title: '{{$service->name}}',
                    description: '{{$service->description_small}}',
                    price: 8.99,
                    link: 'https://lqrs.com/'
                },
                @endforeach
			    ],
			    addToCart(product) {
			      // Implement your add to cart logic here
			      console.log('Adding to cart:', product);
			    }
			  };
			}
</script>


   
</x-app-layout>

