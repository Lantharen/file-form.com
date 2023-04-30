<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function create()
    {
        return view('form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $customer = new Customer();
        $customer->name = $request->input('name');
        $customer->photo = $request->input('photo');

        if ($request->hasFile('photo')) {
            $photo = $request->file('photo');
            $filename = $photo->getClientOriginalExtension();
            $photo->storeAs('public/photos', $filename);
            $customer->photo = $filename;
        }

        $customer->save();

        return redirect()->route('customers.create');

    }
}
