<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Models\Category;
use App\Models\Menu;  

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function menus()
    {
        $data=category::all();
        return view("admin.addproduct",compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function add_menu(Request $request)
    {
        $menu=new Menu();
        $menu->menu_name=$request->menu_name;
        $menu->menu_description=$request->menu_description;
        $menu->menu_quantity=$request->menu_quantity;
        $menu->menu_price=$request->menu_price;
        $menu->category_id=$request->category_id;

        $image=$request->image;
        $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('menu',$imagename);
        $menu->image= $imagename;

        $menu->save();

        return redirect()->back()->with('success','Menu Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
