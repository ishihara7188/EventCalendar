<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class EventController extends Controller
{
    public function index()
    {
        $events = Event::all();
        $event = [];
        
        foreach($events as $row){
            $enddate = $row->end_date."24:00:00";
            $event[] = \Calendar::event(
                $row->title,
                false,
                new \DateTime($row->start_date),
                new \DateTime($row->end_date),
                $row->id,
                ['color' => $row->color,]
            );
        }
        $calendar = \Calendar::addEvents($event);
        return view ('eventpage', compact('events', 'calendar'));
    }

    

    public function create()
    {
        //
    }


    public function display()
    {
        return view('addevent');
    }
    
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'color' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $events = new Event;
        $events->title = $request->title;
        $events->color = $request->color;
        $events->start_date = $request->start_date;
        $events->end_date = $request->end_date;
        $events->save();

        return redirect('events')->with('success', 'Events Added');
    }

    
    public function show()
    {
        $events = Event::all();
        return view ('display')->with('events', $events);
    }

    
    public function edit($id)
    {
        $events = Event::find($id);
        return view ('editform', compact('events', 'id'));
    }

    
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'color' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);

        $events = Event::find($id);
        $events->title = $request->title;
        $events->color = $request->color;
        $events->start_date = $request->start_date;
        $events->end_date = $request->end_date;
        $events->save();

        echo '<script> alert ("Date updated") </script>';
        return redirect('events')->with('success', 'Data Updated');
    }

    
    public function destroy($id)
    {
        $events = Event::find($id);
        $events->delete();
        return redirect ('events')->with('success', 'Data Deleted');

    }
}
