<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Str;
use Livewire\WithFileUpLoads;
use Carbon\Carbon;

class AdminAddProductComponent extends Component
{
    use WithFileUploads;
    public $name;
    public $slug;
    public $short_description;
    public $description;
    public $regular_price;
    public $sale_price;
    public $SKU;
    public $stock_status;
    public $featured;
    public $quantity;
    public $image;
    public $category_id;

    public function mount(){
        $this->stock_status="instock";
        $this->featured = 0;
    }
    public function generateSlug(){
        $this->slug = Str::slug($this->name,'-');
    }
    public function addPorduct(){

    $products = new Product();
    $products->name =$this->name;
    $products->slug =$this->slug;
    $products->short_description =$this->short_description;
    $products->description =$this->description;
    $products->regular_price =$this->regular_price;
    $products->sale_price =$this->sale_price;
    $products->SKU = $this->SKU;
    $products->stock_status =$this->stock_status;
    $products->featured =$this->featured;
    $products->quantity =$this->quantity;
    $imageName =Carbon::now()->timestamp.'.'.$this->image->extension();
    $this->image->storeAs('products', $imageName);
    $products->image =$imageName;
    $products->category_id =$this->category_id;
    $products->save();
    session()->flash('message','Product has been created successfully!');

}
    public function render()
    {
        $categories = Category::all();
        return view('livewire.admin.admin-add-product-component',['categories'=>$categories])->layout('layouts.base');
    }
}