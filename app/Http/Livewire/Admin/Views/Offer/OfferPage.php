<?php

namespace App\Http\Livewire\Admin\Views\Offer;

use App\Models\Offer;
use Livewire\Component;

class OfferPage extends Component
{
    //This class is used to update offer's page url.
    public $page;

    public function mount($id = null)
    {
        $offer = Offer::first();
        $this->page = $offer->page;
    }
    public function save()
    {
        $this->validate($this->rules());
        $offer = Offer::first();
        $offer->page = $this->page;
        $offer->save();
        session()->flash('success' , 'تم حفظ الرابط بنجاح');
    }

    public function rules()
    {
        return [
            'page' =>'required|url',
        ];
    }

    public function messages()
    {
        return [
            'page.url' => 'الرابط غير صالح'
        ];
    }
    public function render()
    {
        return view('livewire.admin.views.offer.offer-page')->extends('layouts.admin.master.master')->section('content');
    }
}
