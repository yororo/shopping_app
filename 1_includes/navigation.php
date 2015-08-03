<?php
$configurationModel = new ConfigurationModel();
?>
<nav>
    <div class="nav-wrapper">
        <a href="./" class="brand-logo">
            <?php
            echo $configurationModel->getSiteName();
            ?>
        </a>
        <ul id="nav-mobile" class="right hide-on-med-and-down">
            <!--<li><a href="./">Login</a></li>-->
        </ul>
    </div>
</nav>
