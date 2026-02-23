<main>
    <section class="hero">
        <h1>Login</h1>
        
    </section>
    <section class="products">
        <div>
        <?php if(isset($_SESSION['error'])){ 
            echo $_SESSION['error'];
        }elseif(isset($_SESSION['success'])){ 
            echo $_SESSION['success'];
        }
        
        ?>
        </div>
        <form action="http://localhost/customvc/login" method="POST">
            <input type="text" class="form-control mt-3" id="username" name="username" />
            <input type="password" class="form-control mt-3" id="password" name="password" />
            <input type="submit" class="btn btn-primary mt-3" value="Login" />
        </form>
    </section>
</main>