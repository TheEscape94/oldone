<?php require 'Views/includes/header_loged.php'; ?>
<div class="w3-container w3-content" style="max-width:1400px;margin-top:50px">    
    <!-- The Grid -->
    <div class="w3-row">
        <!--top-->
            <?php require 'top.php';?>
        <!-- leftside -->
            <?php require 'leftside.php';?>
        <!-- middle -->
            <?php require 'middle.php';?>
        <!--rightside-->
            <?php require 'rightside.php';?>
    </div>
</div>
<?php
require 'Views/includes/footer.php';
