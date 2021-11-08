<?php

namespace App\Http\Controllers;
use App\Models\Booking;
use App\Models\Table;
use Illuminate\Http\Request;
use Carbon\Carbon;

class TableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $current_time = date('H:i:s');
        Booking::where('end_time','<',$current_time)->update(array('status'=>0));
        $data['list'] = Table::with('bookings')->get();
        return view('table.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('table.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $tables = Table::create([
            'name'=>$request->get('name')
        ]);

        if(empty($tables)){

            return redirect()->back()->withInput();
        }
        return redirect()->route('tables.index');

    }

}
