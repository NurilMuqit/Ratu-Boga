<?php

// app/Http/Controllers/UserController.php

namespace App\Http\Controllers;

use Illuminate\Database\QueryException;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $columnToSort = $request->query('sort_by', 'id'); // Kolom default untuk mengurutkan
        $sortOrder = $request->query('sort_order', 'asc'); // Urutan default
        $searchKeyword = $request->query('search', ''); // Kata kunci pencarian
        $startDate = $request->query('start_date', ''); // Tanggal awal
        $endDate = $request->query('end_date', ''); // Tanggal akhir

        $users = User::where(function ($query) use ($searchKeyword) {
            $query->where('name', 'like', '%' . $searchKeyword . '%')
                ->orWhere('email', 'like', '%' . $searchKeyword . '%')
                ->orWhere('created_at', 'like', '%' . $searchKeyword . '%');
        })
            ->when($startDate, function ($query) use ($startDate) {
                $query->whereDate('created_at', '>=', $startDate);
            })
            ->when($endDate, function ($query) use ($endDate) {
                $query->whereDate('created_at', '<=', $endDate);
            })
            ->orderBy($columnToSort, $sortOrder)
            ->paginate(7);
        return view('admin.Customers', compact('users'));
    }
    public function destroyuser($id)
    {
        $users = User::find($id);

        if (!$users) {
            return redirect()->back()->with('failure', 'user not found or already deleted');
        }

        try {
            $users->delete();
            // return redirect()->back()->with('success', 'user deleted successfully');
            // return redirect()->to('/admin/Customers')->with('success', 'User deleted successfully');
            return redirect()->route('admin.Customers')->with('success', 'User deleted successfully')->with('reload', true);
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[1];

            if ($errorCode == 1451) {
                // Constraint violation (foreign key constraint fails)
                return redirect()->back()->with('failure', 'This user is associated with other records.');
            } else {
                return redirect()->back()->with('failure', 'Failed to delete user. Error: ' . $e->getMessage());
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('failure', 'Failed to delete user. Error: ' . $e->getMessage());
        }
    }
}
