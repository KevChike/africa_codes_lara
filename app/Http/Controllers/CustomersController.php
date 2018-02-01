<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function registerCustomer()
    {
    	return view('pages.profile');
    }

    public function createCustomer(Request $request)
    {
    	$customer = new Customer;

    	$customer->fullname = $request->input('fullname');
    	$customer->state_origin = $request->input('state_origin');
    	$customer->phone = $request->input('phone');
    	$customer->email = $request->input('email');
    	$customer->trans_date = $request->input('trans_date');
    	$customer->secret_pin = $request->input('secret_pin');
    	$customer->save();

    	return response()->json(['customer' => $customer, 201]);
    }

    public function getCustomer()
    {
    	$customers = Customer::all();
    	$response = [
    		'customers' => $customers
    	];

    	return response()->json($response, 200);
    }

    public function updateCustomer(Request $request, $id)
    {
    	$customer = Customer::find($id);
    	if(!$customer) {
    		return response()->json(['message' => 'Customer not found'], 404);
    	}

    	$customer->fullname = $request->input('fullname');
    	$customer->state_origin = $request->input('state_origin');
    	$customer->phone = $request->input('phone');
    	$customer->email = $request->input('email');
    	$customer->trans_date = $request->input('trans_date');
    	$customer->secret_pin = $request->input('secret_pin');
    	$customer->save();

    	return response()->json(['customer' => $customer], 200);
    }

    public function deleteCustomer($id)
    {
    	$customer = Customer::find($id);
    	$customer->delete();

    	return response()->json(['customer' => 'Customer deleted']);
    }
}
