<?php

namespace App\Http\Livewire\Front\Template\Productdetails;

use App\ProductReview as AppProductReview;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithPagination;

class ProductReview extends Component
{
    use WithPagination;
    public $review=[
        'product_id'=>'',
        'user_id'=>'',
        'message'=>'',
        'rating'=>0,
        
    ];
    public $product;
    protected $productReviews;
    public $active=false;
    
    public function mount($product){
        $this->product=$product;
    }
    public function hydrate(){
        $this->active=true;
        $this->productReviews=AppProductReview::latest()->where('product_id',$this->product->id)->paginate(4);
    }
    public function productReview(){
        $this->review['product_id']=$this->product->id;
        $this->review['user_id']=Auth::user()->id??1;
        $this->validate([
            'review.message'=>'required|max:200',
            ]);
        AppProductReview::create($this->review);
        $this->review['message']='';
        $this->review['rating']=0;
    }
    
    public function rating($rating){
        $this->review['rating']=$rating;
    }
    
    public function render()
    {
        $this->productReviews=AppProductReview::latest()->where('product_id',$this->product->id)->paginate(4);
        return view('livewire.front.template.productdetails.product-review',[
            'productReviews'=>$this->productReviews
            ]);
    }
}
