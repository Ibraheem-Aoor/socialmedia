<?php

namespace App\Http\Livewire\Admin\Views\Admins;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class AddAdmin extends Component
{
    //Attributes
    public
        $name , $email,
        $password , $password_confirmation;

        public function add()
        {
            $this->validate($this->rules() , $this->messages());
            User::create([
                    'name' => $this->name,
                    'email' => $this->email,
                    'password' => Hash::make($this->password),
                    'is_admin' => true,
                    'is_owner' => false,
                    'status' => true,

            ]);
            notify()->success('success' , 'تمت اضافة المشرف بنجاح 😇');
            return redirect(route('admin.admins.show'));
        }

        public function rules()
        {
            return [
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|string|confirmed',
            ];
        }


        public function messages()
        {
            return
                [
                    'password.confirmed'=>'كلمة المرور غير متطابقة',
                    'email.unique' => 'البريد موجود بالفعل',
                ];

        }
    public function render()
    {
        return view('livewire.admin.views.admins.add-admin')->extends('layouts.admin.master.master')->section('content');;
    }
}
