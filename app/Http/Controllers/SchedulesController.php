<?php

namespace App\Http\Controllers;

use App\Comment;
use Carbon\Carbon;
use App\Place;
use App\Schedule;
use App\ScheduleDate;
use App\Date;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

class SchedulesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {   
        // $tgl = Schedule::all()->groupBy(function($date) {
        //         return \Carbon\Carbon::parse($date->date)->format('d-M-y');
        //         })->sortByDesc('date')->first();

        $schedules = Date::all()->sortBy('date')->all();
        return view('Schedules.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $place = Place::all();
        return view('Schedules/add', compact('place'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $tmpt = $request->nama;
        $plc = Place::where('nama', 'like', "%".$request->nama."%")
                        ->first();
        // $schdl=Schedule::create([
        //     'place_id'=>$plc->id,
        //     'user_id'=>auth()->id(),
        //     'day' => $request->day,
        //     'hourStart' => $request->hourStart,
        //     'hourEnd' => $request->hourEnd,
        // ]);


        // $tgl = Date::where('date', 'like', "%".$request->date."%")->first();
        // if($tgl==true){
        //     ScheduleDate::create([
        //         'date_id'=>$tgl->id,
        //         'schedule_id'=>$schdl->id,
        //     ]);
        // }else{
        //     Date::create([
        //         'date' => $request->date,
        //     ]);
        //     $tgl2 = Date::where('date', 'like', "%".$request->date."%")->first();
        //     ScheduleDate::create([
        //         'date_id'=>$tgl2->id,
        //         'schedule_id'=>$schdl->id,
        //     ]);
        // }

        

        $tgl = Date::where('date', 'like', "%".$request->date."%")->first();
        if($tgl==true){
            $schdl=Schedule::create([
                'date_id'=>$tgl->id,
                'place_id'=>$plc->id,
                'user_id'=>auth()->id(),
                'day' => $request->day,
                'hourStart' => $request->hourStart,
                'hourEnd' => $request->hourEnd,
        ]);
        }else{
            Date::create([
                'date' => $request->date,
            ]);
            $tgl2 = Date::where('date', 'like', "%".$request->date."%")->first();
            $schdl=Schedule::create([
                'date_id'=>$tgl2->id,
                'place_id'=>$plc->id,
                'user_id'=>auth()->id(),
                'day' => $request->day,
                'hourStart' => $request->hourStart,
                'hourEnd' => $request->hourEnd,
        ]);
        }

        
        return redirect()->route('schedules.index');

        }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $place = Place::all();
        $scdl = Schedule::find($id);
        return view('Schedules/editSchedule', compact('scdl', 'place'));   
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {   
        $plc = Place::where('nama', 'like', "%".$request->nama."%")
            ->first();
        $tgl = Date::where('date', 'like', "%".$request->date."%")->first();

        if($tgl==true){
        $place = Schedule::find($id);
        $place->day  = $request->day;
        $place->hourStart  = $request->hourStart;
        $place->hourEnd  = $request->hourEnd;
        $place->date_id = $tgl->id;
        $place->place_id = $plc->id;
        $place->user_id   = auth()->id();
        }else{
            Date::create([
                'date' => $request->date,
            ]);
            $tgl2 = Date::where('date', 'like', "%".$request->date."%")->first();
            $place = Schedule::find($id);
            $place->day  = $request->day;
            $place->hourStart  = $request->hourStart;
            $place->hourEnd  = $request->hourEnd;
            $place->date_id = $tgl2->id;
            $place->place_id = $plc->id;
            $place->user_id   = auth()->id();
        }
        $place->save();
        return redirect()->route('schedules.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $place = Schedule::find($id);
        $place->delete();

        return redirect()->route('schedules.index');    
    }

}
