<main>
    <section class="hero">
        <h1>List of Products</h1>
    </section>
    <section class="products">
        <?php foreach($data as $product):
            $image =  $product['image'];
            if( $product['image'] == "") {
                $image = "polo.jpg";
            }
            ?>
          
            <article class="product">
                <a href="product/<?php echo $product['product_id']; ?>">
                <img src="<?php echo BASE_URL; ?>assets/img/products/<?php echo $image; ?>" alt="Product 1">
                <h2><?php echo $product['p_name']; ?></h2>
                <p><?php echo $product['c_name']; ?></p>
                <p><?php echo $product['description']; ?></p>
                <p>Php <?php echo $product['price']; ?></p>
                <a href="#" class="cta">Add to cart</a>
                </a>
            </article>
          
        <?php endforeach ;?>
    </section>
</main>