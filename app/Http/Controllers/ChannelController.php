<?php

namespace App\Http\Controllers;

use App\Models\Discussion;
use Illuminate\Http\Request;

class ChannelController extends Controller
{
    public function filter($id) {

      $discussions = Discussion::where('channel_id',$id)->paginate(5);

      return view('discussions.bychannel',compact('discussions'));


    }
}
