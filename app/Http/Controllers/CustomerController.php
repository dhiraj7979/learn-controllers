<?php

namespace App\Http\Controllers;

use App\Models\Customer;

class CustomerController extends Controller
{
    private $route_name = '/customers';


    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $customers = Customer::all();

        return view('customer.index', compact('customers'));
    }


    public function create()
    {
        $customer = new Customer();
        return view('customer.create', compact('customer'));
    }


    public function store()
    {

        $customer = Customer::create($this->validatedData());

        return redirect($this->route_name. '/'. $customer->id);
    }


    public function show(Customer $customer)
    {
        return view('customer.show', compact('customer'));
    }


    public function edit(Customer $customer)
    {
        return view('customer.edit', compact('customer'));
    }


    public function update(Customer $customer)
    {
        $customer->update($this->validatedData());

        return redirect($this->route_name);
    }



    public function destroy(Customer $customer)
    {
        $customer->delete($customer);
        return redirect($this->route_name);
    }


    protected function validatedData()
    {
        return request()->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);
    }
}
