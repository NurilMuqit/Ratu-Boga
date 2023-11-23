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
        $data = category::all();
        return view("admin.addproduct", compact("data"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function shows()
    {
        // $menus=Menu::all();
        // return view("admin.products",compact("menus"));
        $menus = Menu::all();
        $data = Category::all();
        return view("admin.products", compact("menus", "data"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function add_menu(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        $menu = new Menu();
        $menu->menu_name = $request->menu_name;
        $menu->menu_description = $request->menu_description;
        $menu->menu_quantity = $request->menu_quantity;
        $menu->menu_price = $request->menu_price;
        $menu->category_id = $request->category_id;

        $image = $request->image;
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('menu', $imagename);
        $menu->image = $imagename;

        $menu->save();

        return redirect()->back()->with('success', 'Menu Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
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
    // public function delete($id)
    // {
    //     $menu = Menu::find($id);
    //     $menu->delete();
    //     return redirect()->back()->with('success', 'Menu Deleted Successfully');
    // }
    public function delete($id)
    {
        $menu = Menu::find($id);

        if (!$menu) {
            return redirect()->back()->with('failure', 'Menu not found or already deleted');
        }

        try {
            $menu->delete();
            return redirect()->back()->with('success', 'Menu deleted successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('failure', 'Failed to delete menu. Error: ' . $e->getMessage());
        }
    }
}
