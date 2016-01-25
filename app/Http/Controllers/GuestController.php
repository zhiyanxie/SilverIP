<?php

namespace App\Http\Controllers;
use App\apartment;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\apartmentRepository;

class GuestController extends Controller
{
    protected $apartments;

    public function __construct(ApartmentRepository $apartments)
    {
        //$this->middleware('auth');
        $this->apartments = $apartments;
    }

    public function index(Request $request)
    {
        return view('welcome',[
            'apartments'=>apartment::simplePaginate(5)
        ]);

//        return view('welcome', [
//            'apartments' => $this->apartments->forAll(),
//        ]);
    }
}
