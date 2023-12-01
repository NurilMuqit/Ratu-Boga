<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use Illuminate\Database\QueryException;
use App\Models\Menu;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function category($id = null)
    {
        $categories = category::all();
        $menus = Menu::all();
        $data = null;
        if ($id) {
            $data = Category::find($id);
            $data = Category::with('menus')->find($id);
        }
        return view('admin.category', compact('data', 'categories', 'menus'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = new category;

        $data->category = $request->category;

        $data->save();

        return redirect()->back()->with('success', 'Category Added Successfully');
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
    public function edit_category($id)
    {
        $categories = Category::all();
        $data = Category::find($id);
        return view('admin.category', compact('data', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit_category_confirm(Request $request, $id)
    {
        $data = Category::find($id);
        $data->category = $request->category;

        $data->save();

        return redirect()->route('admin.category')->with('success', 'Category Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */

    public function destroy($id)
    {
        $data = category::find($id);

        if (!$data) {
            return redirect()->back()->with('failure', 'category not found or already deleted');
        }

        try {
            $data->delete();
            return redirect()->back()->with('success', 'category deleted successfully');
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];

            if ($errorCode == 1451) {
                // Constraint violation (foreign key constraint fails)
                return redirect()->back()->with('failure', 'This category is associated with other records.');
            } else {
                return redirect()->back()->with('failure', 'Failed to delete category. Error: ' . $e->getMessage());
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('failure', 'Failed to delete category. Error: ' . $e->getMessage());
        }
    }
}
