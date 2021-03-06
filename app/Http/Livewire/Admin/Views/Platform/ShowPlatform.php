<?php

namespace App\Http\Livewire\Admin\Views\Platform;

use App\Models\Admin\Platform;
use App\Models\Order;
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
        notify()->success('success' , 'تم تعديل المنصة بنجاح 😇');
        return redirect(route('admin.homepage.platforms.content.show'));
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
        $this->platform->orders()->delete();
        $this->platform->delete();
        notify()->success('success' , 'تم حذف المنصة بنجاح 😇');
        return redirect(route('admin.homepage.platforms.content.show'));
    }
    public function render()
    {
        return view('livewire.admin.views.platform.show-platform')->extends('layouts.admin.master.master')->section('content');
    }
}
