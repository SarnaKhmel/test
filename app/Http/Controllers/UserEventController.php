<?php

namespace App\Http\Controllers;

use App\Interes;
use Illuminate\Http\Request;
use App\Events;
use App\User;
use App\UserEvent;
use Illuminate\Support\Facades\Auth;
use App\Http;
use DB;

class UserEventController extends Controller
{
    protected $User;
    protected $Events;
    protected $Interes;


    /**
     * Create a new controller instance.
     *
     * @return voidu
     */
    public function __construct()
    {
        $this->middleware('auth');

    }

    public function showOldEvents()
    {
            $user_id = Auth::user();
            dd(Auth::user());
            $data =Events::where('user_id', $user_id)
                ->get()->toArray();
            return view('myEvents',['data'=>$data]);

    }

    public function checkInterest(Request $request)
    {
        $id = $request->id;
           $interes = new Interes();
         $check  = $interes->where('user_id', Auth::id())->where('event_id',$id)->count();
        if($check == 0) {
            $interes->user_id = Auth::id();
            $interes->event_id = $id;
            $interes->option = "1";
            $interes->save();
            return back();

        }
        else{
            return back();

        }
    }

    public function checkWill(Request $request)
    {
        $id = $request->id;

            $interes = new Interes();
            $interes -> user_id = Auth::id();
            $interes -> event_id = $id;
            $interes -> option = "2";
            $interes -> save();

            return back();
    }


    public  function showAllUserEvent()
    {
        $user_id = Auth::check();
        $intrest = '1';
     //   $dataIntrest =

        return view('AllUserEvents')
                    ->with([
                        'dataIntrest' => $dataIntrest
//                        'dataWill' => $dataWill
        ]);
    }


}