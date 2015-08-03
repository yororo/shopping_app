<body>
    <?php
    include './1_includes/navigation.php';
    ?>
    
    <?php
    $username = filter_input(INPUT_POST, 'username');
    $password = filter_input(INPUT_POST, 'password');
    
    if($username != '' && $password != ''){
        $model = new LoginModel();
        $controller = new LoginController($model);
        $user = $controller->login($username, $password);
        if(is_null($user) == false) {
            // redirect to main page based on user type
        }
    }
    
    ?>

    <div class="container">
        <div class="row">
            <div class="col s6" >
                <img id="shop-img" src="./0_assets/images/shop-image.png"/>
            </div>
            <form name="loginForm" method="POST" class="col s6">
                <h1>Login</h1>
                <div class="input-field">
                    <input id="username" type="text" name="username" class="validate" />
                    <label for="username">Username</label>
                </div>
                <div class="input-field">
                    <input id="password" type="password" name="password" class="validate" />
                    <label for="password">Password</label>
                </div>
                <button class="btn waves-effect waves-light" type="submit">
                    Submit
                </button>
                or <a href="#">Create a new account</a>
            </form>
        </div>
    </div>

    <?php
    include './1_includes/scripts.php';
    ?>
</body>