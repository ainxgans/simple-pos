<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Attributes\Validate;
use Livewire\Component;
use Livewire\WithFileUploads;

class CreateProduct extends Component
{
    use WithFileUploads;

//    #[Validate('required|unique:products,name')]
    public $name = '';

//    #[Validate('required|integer')]
    public $price = '';

//    #[Validate('required|exists:categories,id')]
    public $category_id = 0;

//    #[Validate('required|image')]
    public $image;

//    public function save()
//    {
//        try {
//        $this->image->storePubliclyAs('images', $this->image->hashName());
//        Product::create([
//            'category_id' => $this->category_id,
//            'name' => $this->name,
//            'price' => $this->price,
//            'image' => $this->image->hashName(),
//        ]);
//        $this->reset(['name', 'price', 'image', 'category_id']);
//        session()->flash('message', 'Add product successfully');
//        } catch (\Exception $e){
//            session()->flash('message', $e->getMessage());
//        }
//    }
    public function save()
    {
        $validated = $this->validate([
            'name' => 'required|unique:products,name',
            'price' => 'required|integer',
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|image'
        ]);

        try {
//            $this->image->storeAs('public/images', $this->image->hashName());
            $path = $this->image->storeAs('images', $this->image->hashName(), 'public');
            Product::create([
                'category_id' => $validated['category_id'],
                'name' => $validated['name'],
                'price' => $validated['price'],
                'image' => $path,
            ]);

            $this->reset(['name', 'price', 'image', 'category_id']);
            session()->flash('success', 'Add product successfully');
        } catch (\Exception $e) {
            session()->flash('failed', $e->getMessage());
        }
    }
    public function render()
    {
        $category = \App\Models\Category::all();
        return view('livewire.product', [
            'category' => $category
        ]);
    }
}
