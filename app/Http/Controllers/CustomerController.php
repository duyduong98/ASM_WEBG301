<?php

namespace App\Http\Controllers;

use App\Repository\CustomerRepos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function index(){
        $customer = CustomerRepos::getAllCustomer();
        return view('adminauto.customer.index',[
           'customer' => $customer
        ]);
    }
    public function detail($id){
        $customer = CustomerRepos::getCustomerById($id);
        return view('adminauto.customer.detail',[
           'customer' => $customer[0]
        ]);
    }
    public function edit($id){
        $customer = CustomerRepos::getCustomerById($id);
        return view('adminauto.customer.edit',[
            'customer' => $customer[0]
        ]);
    }
    public function update($id, Request $request){
        if ($request->input('id') != $id){
            return redirect()->action('CustomerController@index');
        }
        $this->formValidation($request)->validate();
        $customer = (object)[
          'id' => $request->input('id'),
          'name' => $request->input('name'),
            'dob' => $request->input('dob'),
            'gender' => $request->input('gender'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
        ];
        CustomerRepos::update($customer);
        return redirect()->action('CustomerController@index');
    }
    public function confirm($id){
        $customer = CustomerRepos::getCustomerById($id);
        return view('adminauto.customer.confirm',[
            'customer' => $customer[0]
        ]);
    }
    public function destroy($id, Request $request){
        if ($request->input('id') != $id){
            return redirect()->action('CustomerController@index');
        }
        CustomerRepos::delete($id);
        return redirect()->action('CustomerController@index');
    }


    private function formValidation($request){
        return Validator::make(
            $request->all(),
            [
                'name' => ['required','max:50'],
                'dob' => ['required'],
                'gender' => ['required', 'starts_with:F,M,O'],
                'address' => ['required','max:100'],
                'email'=> ['required', 'email:rfc','max:50'],
                'phone' => ['required','digits:10', 'starts_with:0']
            ]
        );
    }
}
