<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Cart;
use App\Models\Menu;
use App\Models\Category;

class HomeController extends Controller
{
    public function redirect()
    {

        $usertype = Auth::user()->usertype;

        if ($usertype == '1') {
            return redirect()->route('admin.dashboard');
        } else {
            return redirect('/');
        }
    }

    public function cart()
    {
    }
}
