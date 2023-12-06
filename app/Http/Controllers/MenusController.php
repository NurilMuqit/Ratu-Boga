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
        $searchKeyword = $request->query('search', '');
        $segments = session('url_segments', []);
        $currentUrl = $request->fullUrl();
        $segments = explode('/', $currentUrl);
        $request->session()->put('url_segments', $segments);
        $menusQuery = Menu::query();
        if ($searchKeyword) {
            $menusQuery->where('menu_name', 'like', '%' . $searchKeyword . '%');
        }
        $menus = $menusQuery->paginate(12);
        $menu = Menu::find($id);
        $data = category::all();
        $currentPage = $request->input('page', 1);
        $searchKeyword = $request->input('search', '');
        return view("admin.products", compact("menu", "data", "menus", 'searchKeyword', 'currentPage'));
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

        if ($image) {
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
    public function edit_menu(Request $request, $id = null)
    {
        $searchKeyword = $request->input('search', '');

        $menu = Menu::find($id);
        $menusQuery = Menu::query();
        if ($searchKeyword) {
            $menusQuery->where('menu_name', 'like', '%' . $searchKeyword . '%');
        }
        $menus = $menusQuery->paginate(12);
        $segments = $request->session()->get('url_segments', []);
        $request->session()->put('url_segments', $segments);
        $currentPage = $request->input('page', 1);
        $data = Category::all();
        return view('admin.products', compact('menu', 'data', 'menus', 'searchKeyword', 'currentPage'));
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

        if ($image) {
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('menu', $imagename);
            $menu->image = $imagename;
        }

        $menu->save();
        $segments = session('url_segments', []);
        $url = url()->to(implode('/', $segments));

        return redirect()->to($url)->with('success', 'Menu Updated Successfully');
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
