<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Reserve;
use Illuminate\Support\Carbon;


class ReserveController extends Controller
{
    public function reserves() {
        $reserves = Reserve::all();
        return view('reserves/reserves',['reserves' => $reserves]);
    }

    public function create() {
        return view('reserves/create', []);
    }

    public function store(Request $request) {
        $reserve = new Reserve;


        $reserve->specialty =  $request->specialty;
        $reserve->name_doctor =  $request->name_doctor;
        $reserve->retorn =  $request->retorn;
        $reserve->date_reserve =  Carbon::now();
        $reserve->save();

        return redirect('/');
    }
}
