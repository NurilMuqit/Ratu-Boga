<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Menu;
use Illuminate\Database\QueryException;

class MenusController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function shows(Request $request, $id = null)
    {
        $data = category::all();
        $menus = Menu::paginate(12);
        $menu = null;
        $searchKeyword = $request->query('search', '');
        if ($searchKeyword) {
            $menus = Menu::where(function ($query) use ($searchKeyword) {
                $query->where('menu_name', 'like', '%' . $searchKeyword . '%');
                // ->orWhere('created_at', 'like', '%' . $searchKeyword . '%')
                // ->orWhere('created_at', 'like', '%' . $searchKeyword . '%');
            })->paginate(6);
        } elseif ($id) {
            $menu = Menu::find($id);
        }
        return view("admin.products", compact("menu", "data", "menus"));
    }

    public function add_menu(Request $request)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        $menu = new Menu();
        $menu->menu_name = $request->menu_name;
        $menu->menu_description = $request->menu_description;
        $menu->menu_quantity = $request->menu_quantity;
        $menu->menu_price = $request->menu_price;
        $menu->category_id = $request->category_id;

        $image = $request->image;

        if($image){
        $imagename = time() . '.' . $image->getClientOriginalExtension();
        $request->image->move('menu', $imagename);
        $menu->image = $imagename;
        }
        

        try {
            $menu->save();
            return redirect()->back()->with('success', 'Menu Added Successfully');
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];

            if ($errorCode == 1451) {
                // Constraint violation (foreign key constraint fails)
                return redirect()->back()->with('failure', 'Your category is empty. Please add a category before adding a product.');
            } else {
                return redirect()->back()->with('failure', 'Failed to delete category. Error: ' . $e->getMessage());
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('failure', 'Failed to delete category. Error: ' . $e->getMessage());
        }
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
    public function edit_menu($id)
    {
        $menu = Menu::find($id);
        $data = Category::all();
        $menus = Menu::all();
        return view('admin.products', compact('menu', 'data', 'menus'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit_menu_confirm(Request $request, $id)
    {
        $request->validate([
            'image' => 'nullable|image|mimes:jpg,png,jpeg,gif|max:2048',
        ]);

        $menu =  Menu::find($id);

        $menu->menu_name = $request->menu_name;
        $menu->menu_description = $request->menu_description;
        $menu->menu_price = $request->menu_price;
        $menu->category_id = $request->category_id;
        $menu->menu_quantity = $request->menu_quantity;

        $image = $request->image;

        if($image){
            $imagename=time().'.'.$image->getClientOriginalExtension();
        $request->image->move('menu',$imagename);
        $menu->image = $imagename;
        }

        $menu->save();

        return redirect()->route('admin.products')->with('success', 'Menu Updated Successfully');
    }

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
