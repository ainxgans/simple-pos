<?php

namespace App\Livewire;

use App\Models\Cart;
use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class Home extends Component
{
    public $selectedCategory;
    public $categories;

    public function mount()
    {
        $this->categories = Category::all();
        if ($this->categories->isNotEmpty()) {
            $this->selectedCategory = $this->categories->first()->id;
        } else {
            $this->selectedCategory = null;
        }
    }

    public function render()
    {
        if ($this->selectedCategory !== null ) {
            $products = Product::with('category')
                ->when($this->selectedCategory, function ($query) {
                    return $query->where('category_id', $this->selectedCategory);
                })->get();
            $carts = Cart::with('product')->get();
            $total = $carts->sum(function ($cart) {
                return $cart->qty * $cart->product->price;
            });
            $data = [
                'categories' => Category::all(),
                'products' => $products,
                'total' => $total
            ];
        } else {
            $data = [
                'categories' => null,
                'products' => null,
                'total' => null
            ];
        }
        return view('livewire.home',$data);
    }
    public function setCategory($categoryId)
    {
        $this->selectedCategory = $categoryId;
    }

    public function addToCart($id)
    {
        $check = Cart::where('product_id',$id)->first();
        if ($check){
            $check->qty += 1;
            $check->save();
        } else {
            Cart::create([
                'product_id' => $id,
                'qty' => 1
            ]);
        }
    }


    public function deleteProduct($id)
    {
        $product = Product::find($id);
        if (\File::exists($product->image)){
            unlink($product->image);
        }
        $product->delete();

    }

}
