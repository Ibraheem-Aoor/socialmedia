<?php

namespace App\Http\Livewire\Admin\Views\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Profile extends Component
{
    public $name , $email;

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->email = Auth::user()->email;
    }
    public function UpdateProfile()
    {
        $this->validate($this->rules());
        $user = User::findOrFail(Auth::id());
        $user->name = $this->name;
        $user->email = $this->email;
        $user->save();
        session()->flash('success' , 'تم تحديث بياناتك بنجاح');
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,'.Auth::id(),
        ];
    }
    public function render()
    {
        return view('livewire.admin.views.profile.profile')->extends('layouts.admin.master.master')->section('content');
    }
}
