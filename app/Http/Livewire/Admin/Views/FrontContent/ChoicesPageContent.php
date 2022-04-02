<?php

namespace App\Http\Livewire\Admin\Views\FrontContent;

use App\Models\Admin\Content;
use Livewire\Component;

class ChoicesPageContent extends Component
{
    // Attributes
    public $content,
            $choices_1_headline , $choices_1_paragraph,
            $choices_2_headline , $choices_2_paragraph,
            $choices_3_headline , $choices_3_paragraph;
    public function mount($id = null)
    {
        $this->content = Content::first();
        $this->setAttributes();
    }

    public function setAttributes()
    {
        //headlines
        $this->choices_1_headline = $this->content->choices_section_card_1_headline;
        $this->choices_2_headline = $this->content->choices_section_card_2_headline;
        $this->choices_3_headline = $this->content->choices_section_card_3_headline;
        //content
        $this->choices_1_paragraph = $this->content->choices_section_card_1_paragraph;
        $this->choices_2_paragraph = $this->content->choices_section_card_2_paragraph;
        $this->choices_3_paragraph = $this->content->choices_section_card_3_paragraph;
    }

    public function save()
    {
        $this->validate($this->rules());
        $this->content->choices_section_card_1_headline = $this->choices_1_headline;
        $this->content->choices_section_card_2_headline = $this->choices_2_headline;
        $this->content->choices_section_card_3_headline = $this->choices_3_headline;
        $this->content->choices_section_card_1_paragraph = $this->choices_1_paragraph;
        $this->content->choices_section_card_2_paragraph = $this->choices_2_paragraph;
        $this->content->choices_section_card_3_paragraph = $this->choices_3_paragraph;
        $this->content->save();
        session()->flash('success' , 'تم الحفظ بنجاح');
    }
    public function rules()
    {
        return [
            'choices_1_headline' => 'required|string',
            'choices_2_headline' => 'required|string',
            'choices_3_headline' => 'required|string',
            'choices_1_paragraph' => 'required|string',
            'choices_2_paragraph' => 'required|string',
            'choices_3_paragraph' => 'required|string',
        ];
    }
    public function render()
    {
        return view('livewire.admin.views.front-content.choices-page-content')->extends('layouts.admin.master.master')->section('content');
    }
}
