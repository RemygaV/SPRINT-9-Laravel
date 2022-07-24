<?php

namespace App\Http\Controllers;

use App\Models\Dish;
use Illuminate\Http\Request;

class DishController extends Controller
{

    public function index()
    {
        return Dish::all();
    }

    public function show($id)
    {
        return Dish::find($id);
    }

    public function destroy($id)
    {
        return (Dish::destroy($id) == 1)
            ?  response()->json(['success' => 'success'], 204)
            :  response()->json(['error' => 'delete not successful'], 500);
    }

    public function store(Request $request)
    {
      
        $request->validate([
            'name' => 'required',
            'restaurant_id' => 'required',
            'price' => 'required'
        ]);

        $d1 = new Dish();
        $d1->name = $request['name'];
        $d1->restaurant_id = $request['restaurant_id'];  
        $d1->price = $request['price'];


        return ($d1->save() !== 1)
            ? response()->json(['success' => 'success'], 201)
            : response()->json(['error' => 'saving to database was not successful'], 500);
    }


    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required',
            'restaurant_id' => 'required',
            'price' => 'required'          
        ]);

        $rn1 = Dish::find($id);
        $rn1->name = $request['name'];
        $rn1->restaurant_id = $request['restaurant_id'];
        $rn1->price = $request['price'];
        

        return ($rn1->save() !== 1)
            ? response()->json(['success' => 'success'], 201)
            : response()->json(['error' => 'saving to database was not successful'], 500);
    }


}
