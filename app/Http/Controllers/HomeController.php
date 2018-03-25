<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Events;
use App\User;
use App\UserEvent;

class HomeController extends Controller
{
    protected $User;
    protected $Events;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');

        $this->User = new User();
        $this->Events = new Events();

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function showHome()
    {

        $data =Events::get()->toArray();
        return view('home',['data'=>$data]);

    }
}
