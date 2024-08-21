<div class="row">
    <div class="col-md-12">


    <h1>User <?php echo $data['count'];?></h1>
   <?php
    
    foreach($data['users'] as $user) {
        echo "<p>".$user['first_name'].' '.$user['last_name'] ."</p>";
    }
    ?>
    </div>
</div>
