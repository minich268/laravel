<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Расписание ваших занятий
        </h2>
    </x-slot>
<div class="w-full mt-20 max-w-xl mx-auto">
  <!-- Tab Buttons -->
  <div class="bg-blue-500 p-2 rounded-t-lg">
    <div class="flex justify-center space-x-4">
      <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('tab1')">Tab 1</button>
      <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('tab2')">Tab 2</button>
      <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('tab3')">Tab 3</button>
      <button class="px-4 py-2 text-white font-semibold border-b-4 border-blue-700 hover:bg-blue-700 focus:outline-none tab-button" onclick="showTab('tab4')">Tab 4</button>
    </div>
  </div>

  <form method="post" action="{{asset('mail/')}}">
                                    @csrf
                                <div class="w-full px-3">
                                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-password">
                                        Your Message
                                    </label>
                                    <textarea name="message" rows="10"
                                              class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"></textarea>
                                </div>
                                <div class="flex justify-between w-full px-3">
                                    <div class="md:flex md:items-center">
                                        <label class="block text-gray-500 font-bold">
                                            <input class="mr-2 leading-tight" type="checkbox" name="show_my_email">
                                            <span class="text-sm">
                    show my email
                </span>
                                        </label>
                                    </div>
                                    <button class="shadow bg-indigo-600 hover:bg-indigo-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-6 rounded" type="submit">
                                        Send Message
                                    </button>
                                </div>
                                </form>

  <!-- Tab Content -->
  <div id="tab1" class="p-4 tab-content bg-white shadow-md rounded-lg">
    <h2 class="text-2xl font-semibold mb-2 text-blue-700">Tab 1 Content</h2>
    <p>
      Vestibulum condimentum imperdiet velit nec ornare. Nullam lobortis urna posuere quam porta consequat. Donec
      commodo diam lectus, sit amet tempor dolor scelerisque eget. Vestibulum at lectus dui. Maecenas consectetur tempor
      ipsum non porttitor. Cras accumsan mattis aliquam. Fusce eleifend maximus elit facilisis condimentum. Mauris non
      risus sed ligula convallis fermentum.
      <br>
      Quisque eu purus nunc. Ut eget ligula ac lorem laoreet scelerisque in ut
      nulla. Quisque volutpat elit eget tellus pharetra, vel sollicitudin velit scelerisque. Vivamus ac libero eu nunc
      congue malesuada eu vitae est.
    </p>
  </div>
  <div id="tab2" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
    <h2 class="text-2xl font-semibold mb-2 text-blue-700">Tab 2 Content</h2>
    <p>Phasellus eget euismod libero, nec ullamcorper justo. Phasellus eget euismod libero, nec ullamcorper justo.
      Phasellus eget euismod libero, nec ullamcorper justo. Etiam eget augue in ante gravida facilisis.</p>
  </div>
  <div id="tab2" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
    <h2 class="text-2xl font-semibold mb-2 text-blue-700">Tab 4 Content</h2>
    <p>Phasellu</p>
  </div>
  <div id="tab3" class="p-4 tab-content bg-white shadow-md rounded-lg hidden">
    <h2 class="text-2xl font-semibold mb-2 text-blue-700">Tab 3 Content</h2>
    <p></p>
  </div>


</div>

<style>
  .tab-button.active {
    background-color: #fff;
    border-color: #d9eaf9;
    color: #4299e1;
  }
</style>

<script>
  function showTab(tabId) {
    // Hide all tab content
    const tabContents = document.querySelectorAll('.tab-content');
    tabContents.forEach((content) => {
      content.classList.add('hidden');
    });

    // Show the selected tab content
    const selectedTab = document.getElementById(tabId);
    if (selectedTab) {
      selectedTab.classList.remove('hidden');
    }

    // Remove the 'active' class from all tab buttons
    const tabButtons = document.querySelectorAll('.tab-button');
    tabButtons.forEach((button) => {
      button.classList.remove('active');
    });

    // Add the 'active' class to the clicked tab button
    const clickedButton = document.querySelector(`[onclick="showTab('${tabId}')"]`);
    if (clickedButton) {
      clickedButton.classList.add('active');
    }
  }

  // Initialize the first tab
  showTab('tab1');
</script>

</x-app-layout>

