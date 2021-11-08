<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Booking ') }}

            </h2>



        </div>
    </x-slot>


    <div class="container flex justify-center mx-auto my-2">
        <div class="flex flex-col">
            <div class="w-full">
                <div class="border-b border-gray-200 shadow">
                    <table class="table-fixed">
                        <thead class="bg-gray-50">
                        <tr >

                            <th class="px-6 py-2"> Sl.</th>
                            <th class="px-6 py-2"> Name</th>
                            <th class="px-6 py-2"> Status</th>
                            <th class="px-6 py-2"> Start Date</th>
                            <th class="px-6 py-2"> End Date</th>
                            <th class="px-6 py-2"> Start Time</th>
                            <th class="px-6 py-2"> End Time</th>
{{--                            <th class="px-6 py-2"> Time Remaining</th>--}}





                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $index =1;
                        ?>


                        </tbody>
                        @foreach($list as $lists)
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-2">{{ $index++}}</td>

                                <td class="px-6 py-4 ">{{$lists->table->name}}</td>
                                <td class="px-6 py-4 ">

                                    <a class="px-6 py-2 text-white bg-green-700"  data-confirm="Are you sure to complete this?" href="{{route('bookings.create',$lists->id)}}">
                                        @if($lists->status == 0)
                                            End
                                        @else
                                            Booked
                                        @endif
                                    </a>

                                </td>
                                <td>{{$lists->start_date}}</td>
                                <td>{{$lists->end_date}}</td>
                                <td>{{$lists->start_time}}</td>
                                <td>{{$lists->end_time}}</td>
                                <td>
{{--                                    @if(date('H:i:s') > $lists->end_time)--}}

{{--                                        @php--}}
{{--                                            $currentTime=date('H:i:s');--}}

{{--                                                $d1 = strtotime($currentTime);--}}
{{--                                                $d2 = strtotime($lists->end_time);--}}
{{--                                                $totalSecondsDiff = abs($d1-$d2);--}}
{{--                                                $totalMinutesDiff = $totalSecondsDiff/60;--}}

{{--                                        @endphp--}}

{{--                                        <button type="button" class="btn btn-danger btn-rounded waves-effect waves-light"> {{round($totalMinutesDiff)}} Min Remaning</button>--}}
{{--                                    @else--}}
{{--                                       <h1>Time End</h1>--}}
{{--                                    @endif--}}
                                </td>

                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>


    </div>

</x-app-layout>
