<main>
    <section class="hero">
        <h1>Details of Product  <?php echo $product['name']; ?></h1>
    </section>
    <section class="products">
            <article class="product">
                <img src="<?php echo BASE_URL;?>assets/img/products/accessories.jpg" alt="Product 1">
                <p><?php echo $product['description']; ?></p>
                <p>Php <?php echo $product['price']; ?></p>
                <a href="#" class="cta">Add to cart</a>
            </article>
    </section>
</main>