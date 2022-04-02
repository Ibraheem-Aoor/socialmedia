<?php

namespace App\Http\Livewire\Admin\Views\FrontContent;

use App\Models\Admin\Content;
use Livewire\Component;

class HomePageProccessContent extends Component
{
    // Attributes
    public $content,
            $proccess_1_headline , $proccess_1_paragraph,
            $proccess_2_headline , $proccess_2_paragraph,
            $proccess_3_headline , $proccess_3_paragraph;
    public function mount($id = null)
    {
        $this->content = Content::first();
        $this->setAttributes();
    }

    public function setAttributes()
    {
        //headlines
        $this->proccess_1_headline = $this->content->proccess_section_card_1_headline;
        $this->proccess_2_headline = $this->content->proccess_section_card_2_headline;
        $this->proccess_3_headline = $this->content->proccess_section_card_3_headline;
        //content
        $this->proccess_1_paragraph = $this->content->proccess_section_card_1_paragraph;
        $this->proccess_2_paragraph = $this->content->proccess_section_card_2_paragraph;
        $this->proccess_3_paragraph = $this->content->proccess_section_card_3_paragraph;
    }

    public function save()
    {
        $this->validate($this->rules());
        $this->content->proccess_section_card_1_headline = $this->proccess_1_headline;
        $this->content->proccess_section_card_2_headline = $this->proccess_2_headline;
        $this->content->proccess_section_card_3_headline = $this->proccess_3_headline;
        $this->content->proccess_section_card_1_paragraph = $this->proccess_1_paragraph;
        $this->content->proccess_section_card_2_paragraph = $this->proccess_2_paragraph;
        $this->content->proccess_section_card_3_paragraph = $this->proccess_3_paragraph;
        $this->content->save();
        session()->flash('success' , 'تم الحفظ بنجاح');
    }
    public function rules()
    {
        return [
            'proccess_1_headline' => 'required|string',
            'proccess_2_headline' => 'required|string',
            'proccess_3_headline' => 'required|string',
            'proccess_1_paragraph' => 'required|string',
            'proccess_2_paragraph' => 'required|string',
            'proccess_3_paragraph' => 'required|string',
        ];
    }
    public function render()
    {
        return view('livewire.admin.views.front-content.home-page-proccess-content')->extends('layouts.admin.master.master')->section('content');
    }
}
