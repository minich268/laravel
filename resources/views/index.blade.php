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
                    class="rounded-md bg-lime-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-lime-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-lime-600">Check
                    out the demo
                </a>
                <a href="#" class="text-sm font-semibold leading-6 text-gray-900">
                    Learn more
                    <span>→</span>
                </a>
            </div>
        </div>
        <div class="mt-10 flow-root sm:mt-20">
            <div
                class="-m-2 rounded-xl bg-gray-900/5 p-2 ring-1 ring-inset ring-gray-900/10 lg:-m-4 lg:rounded-2xl lg:p-4">
                <!-- Photo by '@tvick' on Unsplash -->
                <img src="/images/1.jpg" width="1200" height="1442" class="rounded-md shadow-2xl ring-1 ring-gray-900/10">
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

