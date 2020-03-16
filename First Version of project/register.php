
<html>

    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="styles" href="styles/index.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <h2>
                    User registration
                </h2>
            </div>
            <form name="registration" method="POST" 
                action="phpfiles/registration.php"
                style = "background-image: url('../assets/DesignPics/painter.jpg');">
                <div class="form-group">
                    <label>
                        Username
                    </label>
                    <input type="text" name="Username" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" name="Email" class="form-control" id="exampleInputEmail1">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="User_password" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

        <?php
        if(isset($_GET['error'])){
            if ($_GET['error'] === 'useresxist'){
                echo "<div class='mydiv'>
                <p>error</p>
                </div>";
            }
        }
        ?>
    </body>
</html>
