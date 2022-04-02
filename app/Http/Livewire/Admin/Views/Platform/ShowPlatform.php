<?php

namespace App\Http\Livewire\Admin\Views\Platform;

use App\Models\Admin\Platform;
use Livewire\Component;

class ShowPlatform extends Component
{
  //This class Shows the slected platform info and can edit it's data.

    public $platform, $name , $description;

    public function mount($id = null)
    {
        $this->platform = Platform::findOrFail($id);
        $this->name = $this->platform->name;
        $this->description = $this->platform->description;
    }
    public function save()
    {
        $this->validate($this->rules());
        $this->platform->name = $this->name;
        $this->platform->description = $this->description;
        $this->platform->save();
        session()->flash('success' , 'تم تعديل المنصة بنجاح 😇');
    }
    public function rules()
    {
        return[
            'name' => 'required|unique:platforms,name,'.$this->platform->id,
            'description' => 'required',
        ];
    }

    public function deletePlatform()
    {
        $this->platform->delete();
        session()->flash('success' , 'تم حذف المنصة بنجاح 😇');
        return redirect(route('admin.homepage.platforms.content.show'));
    }
    public function render()
    {
        return view('livewire.admin.views.platform.show-platform')->extends('layouts.admin.master.master')->section('content');
    }
}
