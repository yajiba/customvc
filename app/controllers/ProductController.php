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

    public function addProductForm(){
        $this->view('add_product');
    }

    public function addProduct(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $product = ProductModel::addProduct($_POST);
            if($product) {
                $_SESSION['success'] = "Successfully added";
             }else{
                $_SESSION['error'] = "Error";
             }
        }
        $this->view('add_product');
       
    }


    
}
