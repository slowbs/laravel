<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Event;
use Illuminate\Support\Facades\Redirect;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;
use Validator;
class EventController extends Controller

{
       public function index()
            {
                $events = [];
                $data = Event::all();
                if($data->count()) {
                    foreach ($data as $key => $value) {
                        $events[] = Calendar::event(
                            $value->title,
                            true,
                            new \DateTime($value->start_date),
                            new \DateTime($value->end_date.' +1 day'),
                            null,
                            // Add color and link on event
                         [
                             'color' => '#ff0000',
                             'url' => 'pass here url and any route',
                         ]
                        );
                    }
                }
                $calendar = Calendar::addEvents($events);
                return view('fullcalender', compact('calendar'));
            }

        public function addEvent(Request $request)
            {
                $validator = Validator::make($request->all(), [
                    'title' => 'required',
                    'start_date' => 'required',
                    'end_date' => 'required'
                ]);
         
                if ($validator->fails()) {
                    \Session::flash('warnning','Please enter the valid details');
                    return Redirect::to('/events')->withInput()->withErrors($validator);
                }
         
                $event = new Event;
                $event->title = $request['title'];
                $event->start_date = $request['start_date'];
                $event->end_date = $request['end_date'];
                $event->save();
         
                \Session::flash('success','Event added successfully.');
                return Redirect::to('/events');
            }
}
