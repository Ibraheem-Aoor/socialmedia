<?php

namespace App\Http\Livewire\Admin\Views\Admins;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class AllAdmins extends Component
{


    public function deleteAdmin($id)
    {
        User::findOrFail($id)->delete();
        notify()->success('success' , 'تم حذف المشرف بنجاح 😇');
        return redirect(route('admin.admins.show'));
    }


    public function blockAdmin($id)
    {
        $user = User::findOrFail($id);
        $user->status = false;
        $user->save();
        notify()->success('success' , 'تم حظر المشرف بنجاح 😇');
        return redirect(route('admin.admins.show'));
    }

    public function render()
    {
        $admins = DB::table('users')->where('is_admin' , 1)->orderBy('id' , 'desc')->get();
        return view('livewire.admin.views.admins.all-admins'
        ,
        [
            'admins' => $admins,
        ])->extends('layouts.admin.master.master')->section('content');;
    }
}
