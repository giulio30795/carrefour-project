<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Food;

class FoodController extends Controller
{
	/**
	 * Display a listing of the resource.
	 *
	 * @return \Illuminate\Http\Response
	 */
	public function index()
	{
		$foods = Food::all();
		return view('admin.food.index', compact('foods'));
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.food.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $newFood = new Food();
        // $newFood->title=$data['title'];
        // $newFood->save();
        return redirect()->route('admin.food.show', $newFood->id);
    }

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return \Illuminate\Http\Response
	 */
	public function show(Food $food)
	{
		return view('admin.food.show', $food->id);
	}

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food = Food::find($id);

        if (! $food) {
            abort(404);
        }

        return view('admin.food.edit', compact('food'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

                // VALIDAZIONE
                $request ->validate($this->validation_rules(), $this->validation_message());

                $data = $request->all();

                // UPDATE RECORD
                $food = Food::find($id);

                $food->update($data);

                return redirect()->route('admin.food.show', $food->id);
    }

    public function destroy($id)
    {
        $food = Food::find($id);
        $food->delete();

        return redirect()->route('admin.food.index')->with('deleted' , $food->product_name);
    }


        /**
     * Validation rules
    */ 
    private function validation_rules() {
        return [
            'product_name' => 'required|max:150',
            'brand' => 'required|max:100',
            'price' => 'required',
            'cover' => 'required|max:255',
            'conservation' => 'required|max:20',
            'stock' => 'required',
            'quantity' => 'required',
            'discount' => 'required',
            'description' => 'required',
        ];
    }

    /**
     * Validation message
    */ 
    private function validation_message() {
        return [
            'required' => 'The :attribute is a required field!',
            'max' => 'Max :max characters allowed for the :attribute.',
        ];
    }
}
