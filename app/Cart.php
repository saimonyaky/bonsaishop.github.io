<?php
namespace App;

class Cart
{
    public $products = null;
    public $totalPrice = 0;
    public $totalStock = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->products = $oldCart->products;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalStock = $oldCart->totalStock;
        }
    }

    public function AddCart($product, $id, $quanty)
    {
        $newProduct = ['stock' => $quanty, 'price' => $product->price, 'productInfo' => $product];
        if ($this->products) {
            if (array_key_exists($id, $this->products)) {
                
                $this->totalPrice -= $this->products[$id]['price'];
                $this->totalStock -= $this->products[$id]['stock'];
                unset($this->products[$id]);
            }
        }
        $newProduct['price'] = $newProduct['stock'] * $product->price;
        $this->products[$id] = $newProduct;
        $this->totalPrice += $newProduct['price'];
        $this->totalStock += $newProduct['stock'];
    }
    public function DelCart($id)
    {
        $this->totalPrice -= $this->products[$id]['price'];
        $this->totalStock -= $this->products[$id]['stock'];
        unset($this->products[$id]);
    }
}
?>