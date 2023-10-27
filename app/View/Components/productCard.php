<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class productCard extends Component
{

    public $productName;
    public $productPrice;
    public $productDiscountPrice;
    public $productQuantity;
    public $productImage;
    public $productId;

    public function __construct($productName,$productPrice,$productDiscountPrice,$productQuantity,$productImage,$productId)
    {
        $this->productName = $productName;
        $this->productPrice = $productPrice;
        $this->productDiscountPrice = $productDiscountPrice;
        $this->productQuantity = $productQuantity;
        $this->productImage = $productImage;
        $this->productId = $productId;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.product-card');
    }
}
