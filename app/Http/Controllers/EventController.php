<?php

namespace App\Http\Controllers;

use App\Models\Event;
use DateInterval;
use DateTime;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index($search = null){
        if(!empty($search)){
            $events = Event::where('date', 'LIKE', '%'.$search.'%')
                ->orderBy('date', 'asc')
                ->paginate(15);
        }else{
            $events = Event::orderBy('date', 'desc')->paginate(15);
        }
        return view('admin.record', compact('events'));
    }

    public function create(Request $request){
        if($request['date'] == ''){
            return back()->with('status-error', 'La fecha debe ser entrada');
        }

        elseif($request['status'] == "Trabajo"){
            if($request['time_ini'] == '' || $request['time_end'] == ''){
                return back()->with('status-error', 'El horario de trabajo debe ser entrado');
            }
            else{
                $ini = $request->input('time_ini');
                $timeIni = new DateTime($ini);
                $end = $request->input('time_end');
                $timeEnd = new DateTime($end);
                $interval = $timeEnd->diff($timeIni);
                $cantHrs = $interval->format('%H:%I');
                Event::create([
                    'date' => $request['date'],
                    'time_ini' => $request['time_ini'],
                    'time_end' => $request['time_end'],
                    'status' => $request['status'],
                    'cant_hrs' => $cantHrs
                ]);
                return back()->with('status', 'Día de trabajo creado con éxito');
            }
        }
        else{
            Event::create([
                'date' => $request['date'],
                'time_ini' => '--:--',
                'time_end' => '--:--',
                'status' => $request['status'],
                'cant_hrs' => '00:00'
            ]);
            return back()->with('status', 'Día de descanso creado con éxito');
        }
    }

    public function edit(Event $event){
        return view('admin.record-edit', compact('event'));
    }

    public function update(Event $event, Request $request){
        if($request['status'] == 'Trabajo'){
            $ini = $request->input('time_ini');
            $timeIni = new DateTime($ini);
            $end = $request->input('time_end');
            $timeEnd = new DateTime($end);
            $interval = $timeEnd->diff($timeIni);
            $cantHrs = $interval->format('%H:%I');
            $event->update([
                'date' => $request['date'],
                'time_ini' => $request['time_ini'],
                'time_end' => $request['time_end'],
                'status' => $request['status'],
                'cant_hrs' => $cantHrs
            ]);
            return back()->with('status', 'Actualización realizada con éxito');
        }
        else{
            $event->update([
                'date' => $request['date'],
                'time_ini' => '--:--',
                'time_end' => '--:--',
                'status' => $request['status'],
                'cant_hrs' => '00:00'
            ]);
            return back()->with('status', 'Actualización realizada con éxito');
        }
    }

    public function destroy(Event $event){
        $event->delete();
        return back();
    }

    public static function showEvents(){
        $global['events'] = Event::all();
        return $global;
    }

    public function sumHrs(Request $request){
        $ini = $request['date_ini'];
        $end = $request['date_end'];
        $events = Event::all();
        $total = 0;
        foreach($events as $event) {
            if($event->date >= $ini && $event->date <= $end){
                $parts = explode(':', $event->cant_hrs);
                $total += ($parts[1]*60 + $parts[0]*3600)/3600;
            }
        }
        return view('admin.sum', compact('total'));
    }

}
