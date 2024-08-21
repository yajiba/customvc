<main>
    <section class="hero">
        <h1>List of Products by category <?php echo $products[0]['c_name']; ?> </h1>
        <a href="#" class="cta">Shop Now</a>
    </section>
    <section class="products">
        <?php foreach($products as $product): ?>
            <article class="product">
                <img src="<?php echo BASE_URL;?>assets/img/products/accessories.jpg" alt="Product 1">
                <h2><?php echo $product['p_name']; ?></h2>
                <p><?php echo $product['c_name']; ?></p>
                <p><?php echo $product['description']; ?></p>
                <p>Php <?php echo $product['price']; ?></p>
                <a href="#" class="cta">Add to cart</a>
            </article>
        <?php endforeach ;?>
    </section>
</main>