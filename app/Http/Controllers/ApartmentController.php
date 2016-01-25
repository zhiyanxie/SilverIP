<?php
namespace App\Http\Controllers;
use App\apartment;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\apartmentRepository;
class ApartmentController extends Controller
{

    protected $apartments;

    public function __construct(ApartmentRepository $apartments)
    {
        $this->middleware('auth');
        $this->apartments = $apartments;
    }

    public function index(Request $request)
    {
        return view('apartments.index', [
            'apartments' => $this->apartments->forUser($request->user()),
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|max:255',
            'description'=>'required|max:255',
            'price'=>'required|min:0'
        ]);
        $request->user()->apartments()->create([
            'name' => $request->name,
            'description' => $request->description,
            'current' => $request->current,
            'max' => $request->max,
            'price' => $request->price
        ]);

        return redirect('/apartments');
    }

    public function destroy(Request $request, apartment $apartment)
    {
        $this->authorize('destroy', $apartment);
        $apartment->delete();
        return redirect('/apartments');
    }

    public function create(Request $request,apartment $apartment){
        return view('apartments.create');
    }

    public function edit(Request $request,apartment $apartment){
        $this->authorize('edit',$apartment);
        return view('apartments.edit')->with('apartment',$apartment);
    }

    public function update(Request $request,apartment $apartment){
        $this->authorize('update',$apartment);
        $this->validate($request, [
            'name' => 'required|max:255',
            'description'=>'required|max:255',
            'price'=>'required|min:0'
        ]);
        $apartment->update([
            'name' => $request->name,
            'description' => $request->description,
            'current' => $request->current,
            'price' => $request->price
        ]);

        return redirect('/apartments');
    }
}