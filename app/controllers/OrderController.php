<?php
require_once 'app/models/OrderModel.php';
class OrderController extends Controller
{
    public function list(){
        $orders = OrderModel::list();
        $this->view('orders', ['data' => $orders]); 
    }
    
}
