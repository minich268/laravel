<x-app-layout>
@push('styles')
    <link href="{{ asset('css/calendar.css')}}" rel="stylesheet">
@endpush
@push('scripts')
    <script src="{{ asset('js/calendar.js')}}"></script>
@endpush
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Расписание ваших занятий
        </h2>
    </x-slot>

    <div class="flex items-center justify-center">
                        <div class="calendar_obj w-1/2 float-rigft">
                            {!! $calendar !!}
                        
                        </div>
                        <div class="w-1/2 float-left text-rigft">
                        <div id="time_obj">
                            <div id="date_show">{{date('Y-m-d')}}</div>
                                @foreach($hours_range as $hour)
                                    <div><input class="radio" type="radio" name="hour" value="{{$hour}}:00"/><label>{{$hour}}:00</label></div>
                                    
                                @endforeach
                            </div>
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



</x-app-layout>

