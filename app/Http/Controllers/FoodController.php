<?php

namespace App\Http\Controllers;

use App\Models\Food;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        // $categories=DB::table('categories')->get();
        $categories = Category::all();
        return view('add-foods',['user' => $user,'categories' =>$categories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'description' => 'required',
            'image_name' => 'required',
            'featured' => 'required',
            'active' => 'required',
            'category_id' => 'required',
        ]);

        Category::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'description' => $request->description,
            'image_name' => $request->image_name,
            'featured' => $request->featured,
            'active' => $request->active,
            'category_id' => $request->category,
            
        ]);


        // $table->unsignedBigInteger('category_id');
        // $table->foreign('category_id')->references('id')->on('categories');



        // return redirect('home');
        return redirect('add-categories')->with('status', 'Data Sukses Ditambah');
        // return $request->all();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function show(Food $food)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function edit(Food $food)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Food $food)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Food  $food
     * @return \Illuminate\Http\Response
     */
    public function destroy(Food $food)
    {
        //
    }
}
