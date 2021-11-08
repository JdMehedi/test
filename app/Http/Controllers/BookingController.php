<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['list'] = Booking::get();
        return view('booking.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dipto($id)
    {
        $data['table_id'] = $id;

        return view('booking.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data= Booking::where('table_id',$request->get('table_id'))->where('status',1)->first();
        if(empty($data)){
            $tables = Booking::create([
                'table_id'=>$request->table_id,
                'user_id'=>Auth::user()->id,
                'start_time'=>$request->get('start_time'),
                'end_time'=>$request->get('end_time'),
                'start_date'=>$request->get('start_date'),
                'end_date'=>$request->get('end_date'),
                'status'=>1,
            ]);
            if(empty($tables)){
                return redirect()->back()->withInput();
            }
            return redirect()->route('bookings.index')->with('success', __('Successfull'));
        }
        else{
            if($request->get('start_time') > $data->end_time && $data->start_time){
                $tables = Booking::create([
                    'table_id'=>$request->table_id,
                    'user_id'=>Auth::user()->id,
                    'start_time'=>$request->get('start_time'),
                    'end_time'=>$request->get('end_time'),
                    'start_date'=>$request->get('start_date'),
                    'end_date'=>$request->get('end_date'),
                    'status'=>1,
                ]);
                if(empty($tables)){
                    return redirect()->back()->withInput();
                }
                return redirect()->route('bookings.index')->with('success', __('Successfull'));
            }
            else{
                return redirect()->route('tables.index')->with('SUCCESS', __('Table already booked'));
            }


        }

    }
}
