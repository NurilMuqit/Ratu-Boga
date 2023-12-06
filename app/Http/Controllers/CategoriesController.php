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
    public function category(Request $request, $id = null)
    {
        $searchKeyword = $request->query('search', '');
        $segments = session('url_segments', []);
        $currentUrl = $request->fullUrl();
        $segments = explode('/', $currentUrl);
        $request->session()->put('url_segments', $segments);

        $categoriesQuery = Category::query();
        if ($searchKeyword) {
            $categoriesQuery->where('category', 'like', '%' . $searchKeyword . '%');
        }
        $categories = $categoriesQuery->paginate(9);
        $data = ($id) ? Category::with('menus')->find($id) : null;
        $menus = Menu::all();
        $currentPage = $request->input('page', 1);
        $searchKeyword = $request->input('search', '');
        return view('admin.category', compact('data', 'categories', 'menus', 'searchKeyword', 'currentPage'));
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
    public function edit_category(Request $request, $id = null)
    {
        $searchKeyword = $request->input('search', '');

        $data = Category::find($id);
        $categoriesQuery = Category::query();
        if ($searchKeyword) {
            $categoriesQuery->where('category', 'like', '%' . $searchKeyword . '%');
        }
        $categories = $categoriesQuery->paginate(9);
        $segments = $request->session()->get('url_segments', []);
        $request->session()->put('url_segments', $segments);

        $currentPage = $request->input('page', 1);
        return view('admin.category', compact('data', 'categories', 'searchKeyword', 'currentPage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function edit_category_confirm(Request $request, $id)
    {
        $data = Category::find($id);
        $data->category = $request->category;

        $data->save();

        $segments = session('url_segments', []);
        $url = url()->to(implode('/', $segments));
        return redirect()->to($url)->with('success', 'Category Updated Successfully');
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
