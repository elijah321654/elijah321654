<?php

namespace App\Http\Controllers;
use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
         //return 'Customers';

         $data = Room::all();
         return view('room.index',['rooms'=>$data]);
    }
}
