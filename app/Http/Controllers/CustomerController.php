<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use GuzzleHttp\RedirectMiddleware;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function customerHome()
    {
        $data =  Customer::all();

        return view('backend.customer.home',compact('data'));
    }

    public function customerCreate()
    {
        return view('backend.customer.create');
    }

    public function customerInsert(Request $request)
    {

        Customer::create($request->all());

        return redirect()->route('customer.home');
    }

    public function customerEdit($id)
    {
        $result = Customer::where('id',$id)->first();

        return view('backend.customer.edit',compact('result'));
    }

    public function customerUpdate(Request $request, $id)
    {
        $data = Customer::where('id',$id)->first();

        $data->update($request->all());

        return redirect()->route('customer.home');
    }

    public function customerView($id)
    {
        $data = Customer::where('id',$id)->first();

        return view('backend.customer.view',compact('data'));
    }

    public function customerDelete($id)
    {
        $data = Customer::where('id',$id)->first();

        $data->delete();

        return redirect()->route('customer.home');
    }

}