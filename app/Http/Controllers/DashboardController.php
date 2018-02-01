<?php

namespace App\Http\Controllers;

use App\User;
use App\Customer;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
    	$customers = Customer::all();
    	$users = User::all();

    	$customers = count($customers);
    	$users = count($users);

    	return view('pages.dashboard', compact('customers', 'users'));
    }
}
