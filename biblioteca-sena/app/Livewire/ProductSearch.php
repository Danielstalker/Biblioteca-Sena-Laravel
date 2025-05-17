<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;

class ProductSearch extends Component
{   public $query = "";
    public function updatedQuery()
{}

    public $category = "";

    public $categories;

    public function mount(){
        $this->categories = Category::all();
    }
    public function render()
{
    $products = Product::query()
        ->when($this->query, function ($query) {
            $query->where('name', 'like', '%' . $this->query . '%');
        })
        ->when($this->category, function ($query) {
            $query->where('category_id', $this->category);
        })
        ->paginate(3);
    return view('livewire.product-search', compact('products'));
}

}
