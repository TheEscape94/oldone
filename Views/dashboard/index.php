<?php require 'Views/includes/header_loged.php'; ?>

<!-- Page Container -->
<div class="w3-container w3-content" style="max-width:1400px;">    

    <!-- The Grid -->

    <div class="w3-row">
        <!-- leftside of dashboard -->
        <?php require 'leftside.php'; ?>

        <!-- middle of dashboard -->
        <?php require 'middle.php'; ?>

        <!-- rightside of dashboard -->
        <?php require 'rightside.php'; ?>

        <!-- End Grid -->
    </div>

    <!-- End Page Container -->
</div>


<?php require 'Views/includes/footer.php'; ?>
