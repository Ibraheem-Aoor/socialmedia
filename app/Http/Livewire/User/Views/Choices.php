<?php

namespace App\Http\Livewire\User\Views;

use App\Models\Admin\Content;
use App\Models\Admin\Platform;
use App\Models\Offer;
use Livewire\Component;

class Choices extends Component
{
    public $platform;
    public function mount($id)
    {
        $this->platform = Platform::findOrFail($id);
        session()->put('platform_id' , $this->platform->id);
        session()->put('visited' , 0); //hasn't visited the make order page yet.
    }

    //redirect to offers page.
    public function goToPage($choice)
    {
        session()->put('choice' , $choice);
        $offer = Offer::first();
        $dist = $offer->page;
        $dist = (string)$dist;
        session()->put('visited' , 1);
        return redirect($dist);
    }
        public function render()
    {
        $content = Content::first();
        return view('livewire.user.views.choices' , ['content' => $content])->extends('layouts.user.master.master');
    }

}
