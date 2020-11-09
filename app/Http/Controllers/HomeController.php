<?php

namespace App\Http\Controllers;
Use App\Event;
Use App\Reservation;
use Illuminate\Http\Request;
use Validator;
class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function store(Request $request)
    {
        $reservation = new Reservation();
        $reservation->nom= $request->input('nom');
        $reservation->prenom= $request->input('prenom');
        $reservation->Email= $request->input('email');
        $reservation->TEL= $request->input('tel');
        $reservation->date_congre= $request->input('date_congre') ;

        $reservation->adresse= $request->input('adresse') ;
        $reservation->adresse2= $request->input('adresse2') ;
        $reservation->city = $request->input('city') ;
        $reservation->state = $request->input('state') ;
        $reservation->fonction= $request->input('fonction') ;

        $reservation->save();
        $notification = array(
                            'message' =>'your reservation  added successefully' ,
                            'alert-type' =>'success'
                         );
        return back()->with('success', 'your reservation  added successefully');
    }


    }

