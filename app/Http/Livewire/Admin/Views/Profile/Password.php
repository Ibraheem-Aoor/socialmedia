<?php

namespace App\Http\Livewire\Admin\Views\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class Password extends Component
{
    public $password , $password_confirmation;

    public function UpdatePassword()
    {
        $this->validate($this->rules() , $this->messages());
        $user = User::findOrFail(Auth::id());
        $user->password = Hash::make($this->password);
        $user->save();
        notify()->success('تم تحديث كلمة المرور بنجاح');
        return redirect(route('admin.dashboard'));
    }

    public function rules()
    {
        return [
            'password' => 'required|string|min:8|confirmed',
        ];
    }

    public function messages()
    {
        return
        [
            'password.min' => 'كلمة المرور قصيرة جدا',
            'password.confirmed' => 'كلمة المرور  غير متطابقة',
        ];
    }
    public function render()
    {
        return view('livewire.admin.views.profile.password')->extends('layouts.admin.master.master')->section('content');
    }
}
