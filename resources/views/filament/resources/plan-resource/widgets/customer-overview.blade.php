<x-filament::widget>
    <x-filament::card>
    <style>
            .input-timeFrom{
                border-color: lightgrey;
                width: 200px;
                margin-top: 10px;
            }

            .input-timeTo{
                border-color: lightgrey;
                width: 200px;
                margin-top: 10px;
            }

            .day-of-the-week {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 5px
            }
        </style>
        <form action="{{asset('plan/schedule')}}" method="post"
              enctype="multipart/form-data">
            @csrf
            <div class="flex gap-3 ">
                <div >
                    <label for="date_time_from">Time from</label><br/>
                    <input value="{{ old('date_time_from') }}" class="bg-gray-100 input-timeFrom" id="date_time_from" type="time" name="date_time_from"/>
                </div>
                <div class="">
                    <label for="date_time_to">Time to</label><br/>
                    <input value="{{ old('date_time_to') }}" class="bg-gray-100 input-timeTo" id="date_time_to" type="time" name="date_time_to" />
                </div>
            </div>
<div class="flex gap-3 ">
                <div class="day-of-the-week">
                    <label for="monday">Monday</label><br/>
                    <input type="checkbox" id="monday" name="monday" style="" />
                </div>
                <div class="day-of-the-week">
                    <label for="tuesday">Tuesday</label><br/>
                    <input type="checkbox" id="tuesday" name="tuesday" style="" />
                </div>
                <div class="day-of-the-week">
                    <label for="wednesday">Wednesday</label><br/>
                    <input type="checkbox" id="wednesday" name="wednesday" style="" />
                </div>
                <div class="day-of-the-week">
                    <label for="thursday">Thursday</label><br/>
                    <input type="checkbox" id="thursday" name="thursday" style="" />
                </div>
                <div class="day-of-the-week">
                    <label for="friday">Friday</label><br/>
                    <input type="checkbox" id="friday" name="friday" style="" />
                </div>
                <div class="day-of-the-week">
                    <label for="saturday">Saturday</label><br/>
                    <input type="checkbox" id="saturday" name="saturday" style="" />
                </div>
                <div class="day-of-the-week">
                    <label for="sunday">Sunday</label><br/>
                    <input type="checkbox" id="sunday" name="sunday" style="" />
                </div>
            </div>
            <button type="submit">
                Save
            </button>
        </form>
     
    </x-filament::card>
</x-filament::widget>

