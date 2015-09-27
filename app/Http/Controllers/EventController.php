<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Event;

class EventController extends Controller {
    public function show(){
		$event = Event::all();
		return view('event', compact('event'));
	}
	//     public function single($event_id){
	// 	$event = Event::find($event_id);
	// 	return view('single-event', compact('event'));
	// return $event_id;
	//	}
}
