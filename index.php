<!DOCTYPE html>
<html>

    <?php
//    classes
    include './2_lib/User.php';
    
//    controllers
    include './3_controller/LoginController.php';
    
//    models 
    include './4_model/ConfigurationModel.php';
    include './4_model/LoginModel.php';

//    views
    
//    html
    include './1_includes/header.php';
    include './5_view/login.php';
    include './1_includes/footer.php';
    ?>
</html>