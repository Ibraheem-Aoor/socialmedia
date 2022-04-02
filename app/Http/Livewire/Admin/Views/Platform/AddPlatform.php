<?php

namespace App\Http\Livewire\Admin\Views\Platform;

use App\Models\Admin\Platform;
use Livewire\Component;

    class AddPlatform extends Component
{
    // This class is used to add a new platform that is not created berfoe.

    //Attributes
    public $name , $description;

    public function save()
    {
        $this->validate($this->rules());
        Platform::create([
            'name' => $this->name,
            'description' => $this->description,
        ]);
        session()->flash('success' , 'تمت اضافة المنصة بنجاح 😇');
    }
    public function rules()
    {
        return[
            'name' => 'required|unique:platforms',
            'description' => 'required',
        ];
    }
    public function render()
    {
        return view('livewire.admin.views.platform.add-platform')->extends('layouts.admin.master.master')->section('content');;
    }
}
