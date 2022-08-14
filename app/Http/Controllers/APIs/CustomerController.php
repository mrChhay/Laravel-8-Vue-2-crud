<?php

namespace App\Http\Controllers\APIs;

use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::all();
        return response()->json($customer, 200);
    }

    public function add(Request $request)
    {
        $customer = new Customer([
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'gender' => $request->input('gender'),
            'dob' => $request->input('dob'),
            'phone_number' => $request->input('phone_number'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
        ]);
        $customer->save();
 
        return response()->json('The Customer successfully added');
    }

    public function edit($id)
    {
        $customer = Customer::find($id);

        return response()->json($customer);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function update($id, Request $request)
    {
        $customer = Customer::find($id);
        $customer->update($request->all());
 
        return response()->json('The post successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $customer = Customer::find($id);
        $customer->delete();
 
        return response()->json('The customer successfully deleted');
    }
}
