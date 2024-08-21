<?php
require_once 'app/models/ProductModel.php';
class ProductController extends Controller
{
    public function getProducts(){
        $products = ProductModel::list();
        $this->view('products', ['data' => $products]); 
    }
    public function getProductByID($id){
        $product = ProductModel::productById($id);
        $this->view('product_details', ['product' => $product]); 
    }

    public function getProductbyCat($cat){
        $product = ProductModel::productbyCategory($cat);
        $this->view('product_by_cat', ['products' => $product]);
    }

    
}
