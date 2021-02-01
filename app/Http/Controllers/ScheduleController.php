<?php

namespace App\Http\Controllers;

use App\Models\Schedule;

use Illuminate\Http\Request;

class ScheduleController extends Controller
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
        $schedules = Schedule::all();
        $schedules = $schedules->wherenull('deleted_at');
        return view('schedules.index', compact('schedules'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('schedules.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'date'=>'required',
            'hour'=>'required',
            'duration'=>'nullable',
            'capacity'=>'nullable'
        ]);
        $schedule = new Schedule([
            'date' => $request->get('date'),
            'hour' => $request->get('hour'),
            'duration' => $request->get('duration'),
            'capacity' => $request->get('capacity')
        ]);
        $schedule->save();
        return redirect('/schedules')->with('success', 'Horario creado!');
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
        $schedule = Schedule::find($id);
        return view('schedules.edit', compact('schedule'));        
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
        $request->validate([
            'date'=>'required',
            'hour'=>'required',
            'duration'=>'nullable',
            'capacity'=>'nullable'
        ]);
        $schedule = Schedule::find($id);
        $schedule->date =  $request->get('date');
        $schedule->hour =  $request->get('hour');
        $schedule->duration =  $request->get('duration');
        $schedule->capacity =  $request->get('capacity');
        $schedule->save();
        return redirect('/schedules')->with('success', 'Horario actualizado!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $schedule = Schedule::find($id);
        $schedule->deleted_at = date("Y-m-d H:i:s");
        $schedule->save();
        return redirect('/schedules')->with('success', 'Horario eliminado!');
    }
}
