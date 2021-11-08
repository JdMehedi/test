<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Table list') }}

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
                            <th class="px-6 py-2"> Action</th>



                        </tr>
                        </thead>
                        <tbody>
                        <?php
                            $index =1;
                        ?>
                        </tbody>
                        @foreach($list as $table)
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-2">{{ $index++}}</td>

                                <td class="px-6 py-4 ">{{$table->name}}</td>
                                <td class="px-6 py-4 ">

{{--                                    @foreach($table->bookings as $booking)--}}

                                    <a class="px-6 py-2 text-white bg-green-700"  href="{{route('bookings.create',$table->id)}}">
{{--                                    {{$booking->status->count()}}--}}
                                        Book Now
{{--                                        @if($booking->status)--}}
{{--                                            Booked--}}
{{--                                        @else--}}
{{--                                            Availabe--}}
{{--                                        @endif--}}
                                    </a>

{{--                                    @endforeach--}}

                                </td>

                            </tr>
                        @endforeach
                    </table>

                </div>
            </div>
        </div>


    </div>
{{--    @php--}}
{{--        $book = DB::table('bookings')->where('table_id', $table->id)->first();--}}
{{--    @endphp--}}
{{--    @if($book)--}}
{{--        <button class="px-4 py-2 bg-green-600">--}}
{{--            Booked--}}
{{--        </button>--}}
{{--    @else--}}
{{--        <button class="px-4 py-2 bg-green-600">--}}
{{--            <a href="{{ route('booking.create', [ 'id' => $table->id ]) }}">--}}
{{--                Booking Now--}}
{{--            </a>--}}
{{--        </button>--}}
{{--    @endif--}}

</x-app-layout>
