<main>
    <section class="hero">
        <h1>Add new Product</h1>
        
    </section>
    <section class="products">
        <?php if(isset($_SESSION['error'])){ 
            echo $_SESSION['error'];
        }elseif(isset($_SESSION['success'])){ 
            echo $_SESSION['success'];
        }
        
        ?>
        <form action="<?php echo BASE_URL;?>add_product" method="POST">
            <input type="text" class="form-control" id="product_name" name="product_name" />
            <input type="text" class="form-control" id="description" name="description" />
            <input type="submit" class="btn btn-primary" value="Add Product" />
        </form>
    </section>
</main>