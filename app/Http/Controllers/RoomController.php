<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class RoomController extends Controller
{
    //
    public function index()
    {
        $rooms = Room::all();
        return view("room.index")->with('rooms',  $rooms);
    }
    public function add()
    {
        return view("room.add");
    }
    public function single()
    {
        return view("room.single");

    }
    public function store(Request $request)
    {

        $request->validate([
            'roomtitle' => 'required|max:20',
            'roomno' => 'required|integer',
            'floorno' => 'required',
            'price' => 'required',
            'availablerooms' => 'required',
            'maxoccupancy' => 'required',
            'category' => 'required',
            'roomtype' => 'required',
            'roomsize' => 'required|integer',
            'roomview' => 'required',
            'guestservice' => 'required',
            'facilities' => 'required',


        ]);


        $room = new Room();
        $room->roomtitle = $request->roomtitle;
        $room->roomno = $request->roomno;
        $room->floorno = $request->floorno;
        $room->price = $request->price;
        $room->availablerooms = $request->availablerooms;
        $room->maxoccupancy = $request->maxoccupancy;
        $room->category = $request->category ;
        $room->roomtype = $request->roomtype;
        $room->roomsize = $request->roomsize;
        $room->roomview = $request->roomview;
        $room->guestservice = $request->guestservice;
        $room->facilities = $request->facilities;
        $room->description = $request->description;
        $room->save();


        foreach($request->file('image') as $img){
            Storage::disk("public")->put("$room->id", $img);
        }
        $room->image= Storage::disk("public")->files($room->id);
        $room->update();



        return redirect("room")->with("success", "Room created.");
    }
    public function update(Request $request,$id)
    {   
        $request->validate([
            'roomtitle' => 'required|max:20',
            'roomno' => 'required|integer',
            'floorno' => 'required',
            'price' => 'required',
            'availablerooms' => 'required',
            'maxoccupancy' => 'required',
            'category' => 'required',
            'roomtype' => 'required',
            'roomsize' => 'required|integer',
            'roomview' => 'required',
            'guestservice' => 'required',
            'facilities' => 'required',
        ]);


        $room = Room::find($id);
        $room->roomtitle = $request->roomtitle;
        $room->roomno = $request->roomno;
        $room->floorno = $request->floorno;
        $room->price = $request->price;
        $room->availablerooms = $request->availablerooms;
        $room->maxoccupancy = $request->maxoccupancy;
        $room->category = $request->category ;
        $room->roomtype = $request->roomtype;
        $room->roomsize = $request->roomsize;
        $room->roomview = $request->roomview;
        $room->guestservice = $request->guestservice;
        $room->facilities = $request->facilities;
        $room->description = $request->description;
        $room->update();

       

       if($request->file('image')){
        foreach($request->file('image') as $img){
            Storage::disk("public")->put("$room->id", $img);
        }
    }
        $room->image= Storage::disk("public")->files($room->id);
        $room->update();

        return redirect("room")->with("success", "Room updated.");

    }

    public function show($id)
    { 
       $room=Room::where("id",$id)->firstOrfail();
       return view("room.single")->with('room',  $room);

    }

    public function edit($id)
    { 

       $room=Room::where("id",$id)->firstOrfail();
       return view("room.edit")->with('room',  $room);

    }
}
