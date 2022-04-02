<?php

namespace App\Http\Livewire\Admin\Views\FrontContent;

use App\Models\Admin\Content;
use Livewire\Component;

class HomePageContentShow extends Component
{

    // Attributes.
    public $content , $intro_text  , $intro_text_paragraph;
    public function mount($id = null)
    {
        $this->content = Content::first();
        $this->intro_text = $this->content->intro_text;
        $this->intro_text_paragraph = $this->content->intro_text_paragraph;
    }

    public function save()
    {
        $this->validate($this->rules());
        $this->content->intro_text = $this->intro_text;
        $this->content->intro_text_paragraph = $this->intro_text_paragraph;
        $this->content->save();
        session()->flash('success' , 'تم الحفظ بنجاح');
    }

    public function rules()
    {
        return[
            'intro_text' => 'required|string',
            'intro_text_paragraph' => 'required|string',
        ];
    }

    public function render()
    {
        return view('livewire.admin.views.front-content.home-page-content-show')->extends('layouts.admin.master.master')->section('content');
    }
}
