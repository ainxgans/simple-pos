<?php

namespace App\Livewire;

use Livewire\Component;

class CreateCategory extends Component
{
    public $name;
    public function save(){
        $validated = $this->validate([
        'name'=> 'required|unique:categories,name|max:255'
    ]);
   $store = \App\Models\Category::create($validated);
   if (!$store) {
       session()->flash('failed', 'Add Category failed. Pleas try again.');
   }    else {
       $this->reset(['name']);
       session()->flash('success', 'Add Category successfully');

   }
   }
    public function render()
    {
        return view('livewire.category');
    }
}
