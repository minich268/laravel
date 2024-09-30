<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
               </h2>


    </x-slot>

	
<!-- 
	 /*<div class="py-12 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mb-8 flex justify-center">
            <p
                class="relative rounded-full px-4 py-1.5 text-sm leading-6 text-gray-600 bg-red-200 ring-1 ring-inset ring-gray-900/10 hover:ring-gray-900/20">
                <span class="hidden md:inline">Фотографии самых счастливых детей</span>
                <a href="/gallery" target="_blank" class="font-semibold text-lime-600">
                    <span class="absolute inset-0" ></span> 
                 <span>→</span>
                </a>
            </p>
        </div>
        <div class="mx-auto max-w-2xl text-center">
            <h1 class="	text-4xl font-bold tracking-tight text-gray-900 sm:text-6xl bg-clip-text text-transparent bg-gradient-to-r from-pink-500 to-violet-500">
                Мечты сбываются именно здесь
            </h1>
            <p class="mt-6 text-lg leading-8 text-gray-600">
              В каждом движении мы воплащаем мечту каждого ребенка быть счастливым и иметь крепкое здоровье.
            </p>
          
        </div>*/ -->
	
		<div class="relative h-screen w-full ">
    <img src="images/5.jpg" alt="Background Image" class="absolute inset-0 w-full h-full object-cover filter blur-sm">
    <div class="absolute inset-0 bg-black bg-opacity-50"></div>
    <div class="absolute inset-0 flex flex-col items-center justify-center">
        <h1 class="text-4xl text-white font-bold">Школа пластической гимнастики</h1>
        <p class="text-xl text-white mt-4">г.Минск, ул.Руссиянова,7</p>
    </div>
</div>

<div class="bg-red-200 px-4 mt-16 ">
    <div class="container mx-auto py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transform motion-safe:hover:scale-110">
            <img class="" src="images/105.jpg">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Забота</h2>
                    <p class="text-gray-600">Наша цель – это забота о здоровье детей.
						Мы делаем все возможное, чтобы сделать их жизнь более гармоничной, здоровой и позитивной.
                        </p>
                </div>
                
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transform motion-safe:hover:scale-110">
            <img class="" src="images/107.jpg">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Дружба</h2>
                    <p class="text-gray-600">Наши маленькие воспитанники – наши друзья. Мы всегда рады помочь им, 
						со всей теплотой подходя к каждому ребенку, и со всем вниманием – к каждому папе и маме.
                        </p>
                </div>
               
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden transform motion-safe:hover:scale-110">
            <img class="" src="images/104.jpg">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Хорошее настроение</h2>
                    <p class="text-gray-600">Лучший способ привить ребенку здоровый образ жизни и любовь к спорту  – превратить занятия в игру и праздник. Мы хотим, чтобы каждый, кто приходит и занимается в нашей Школе,
						 был не только здоров и физически развит, но весел и доволен.
                        </p>
                </div>
                
            </div>
        </div>
    </div>
</div>

		
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
<div class="bg-red-200 px-4 mt-16">
    <div class="container mx-auto py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-12">
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Индивидуальный подход</h2>
                    <p class="text-gray-600">Каждый ребенок уникален! Мы стараемся учитывать индивидуальные 
                        потребности и способности каждого участника, чтобы занятия приносили радость и удовольствие.
                        </p>
                </div>
                <div class="bg-gray-100 px-6 py-4">
                    <a href="/blogs" class="text-blue-600 font-medium hover:text-blue-800">Советы для родителей</a>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Безопасность прежде всего</h2>
                    <p class="text-gray-600">Мы уделяем большое внимание безопасности на занятиях. Все наши тренер квалифицированы и имеют опыт работы с детьми. 
                        Каждое занятие проходит в безопасной атмосфере.
                        </p>
                </div>
                <div class="bg-gray-100 px-6 py-4">
                    <a href="/blogs" class="text-blue-600 font-medium hover:text-blue-800">Безопастность на занятиях</a>
                </div>
            </div>
            <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4">Присоединяйтесь к нам!</h2>
                    <p class="text-gray-600">Приглашаем вас и ваших детей стать частью нашей дружной семьи гимнастов.
                         Мы уверены, что вы проведете время с пользой и удовольствием!Мы подберем для Вас удобное время.
                        </p>
                </div>
                <div class="bg-gray-100 px-6 py-4">
                    <a href="/contact" class="text-blue-600 font-medium hover:text-blue-800">Наши контакты</a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="w-full mx-auto py-10 bg-gray-50 dark:bg-gray-900 dark:text-white">
    <div class="w-fit pb-1 px-2 mx-4 rounded-md text-2xl font-semibold border-b-2 border-blue-600 dark:border-b-2 dark:border-yellow-600">Наш основной подход</div>

    <div class="xl:w-[80%] sm:w-[85%] xs:w-[90%] mx-auto flex md:flex-row xs:flex-col lg:gap-4 xs:gap-2 justify-center lg:items-stretch md:items-center mt-4">
      <div class="lg:w-[50%] xs:w-full">
        <img class="lg:rounded-t-lg sm:rounded-sm xs:rounded-sm" src="images/9.jpg" alt="гимнасты" />
      </div>
      <div class="lg:w-[50%] sm:w-full xs:w-full bg-red-200 dark:bg-gray-900 dark:text-gray-400 md:p-4 xs:p-0 rounded-md">
        <h2 class="text-3xl font-semibold text-red-900 dark:text-white">Наша миссия</h2>
        <p class="text-md mt-4">Наша специализация - фитнес для детей, оздоровительная гимнастика и ее разновидности для дошкольного и младшего школьного возраста.

           Клуб является великолепной стартовой площадкой для каждого ребенка, ведь здесь закладывается база для 
           любой спортивной дисциплины. Мы выявляем способности и таланты с малых лет, 
           чтобы по желанию родителей в последующем направить детей в наиболее подходящий им вид спорта.
          </p>
      </div>
    </div>
    <!-- col-2 -->
    <div class="xl:w-[80%] sm:w-[85%] xs:w-[90%] mx-auto flex md:flex-row xs:flex-col lg:gap-4 xs:gap-2 justify-center lg:items-stretch md:items-center mt-6">
      <!--  -->
      <div class="md:hidden sm:block xs:block xs:w-full">
      <img class="lg:rounded-t-lg sm:rounded-sm xs:rounded-sm" src="images/11.jpg" alt="гимнасты" />
      </div>
      <!--  -->
      <div class="lg:w-[50%] xs:w-full bg-red-200 dark:bg-gray-900 dark:text-gray-400 md:p-4 xs:p-0 rounded-md">
        <h2 class="text-3xl font-semibold text-red-900 dark:text-white">Уникальный подход</h2>

        <p class="text-md mt-4">Согласно опросу, родители наших воспитанников, считают тренера, работающего в Школе, настоящими профессионалам, умеющим найти подход к каждому ребенку.
                         Почти половина новых посетителей школы приходят заниматься по рекомендации друзей,
                         детей которые уже занимаются в Школе пластической гимнастики. Наблюдая оздоровительный эффект и развитие физических навыков у детей, 
                         родители высоко оценивая качество проведения занятий и уверенно рекомендуют Школу своим знакомым.
          </p>
      </div>
      <!--  -->
      <div class="md:block sm:hidden xs:hidden lg:w-[50%] xs:w-full">
        <img class="lg:rounded-t-lg xs:rounded-sm" src="images/11.jpg" alt="billboard image" />
      </div>
    </div>
  </section>

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

