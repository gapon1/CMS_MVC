<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $pageData['title']?></title>
    <link rel="stylesheet" href="../css/brands.min.css">
    <link rel="stylesheet" href="../css/fontawesome.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/script.js"></script>




    <script src="../js/angular.min.js"></script>


</head>
<body>
<br>
<h2 class="center">Self CMS system111</h2>

<p></p>
    <form class="modal-content animate my_login"  id="login_form" method="post">

        <div class="imgcontainer">
            <img src="images/img_avatar2.png" alt="Avatar" class="avatar">
        </div>
        <?php if (!empty($pageData['error'])) :?>
            <p style="color: red"><b><?php echo $pageData['error']?></b></p>

        <?php endif;?>
        <div class="container">
            <label for="uname"><b>Username</b></label>
            <input id="login" type="text" placeholder="Enter Login" name="login" required>

            <label for="psw"><b>Password</b></label>
            <input id="password" type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button id="reset_form" type="button" onclick="document.getElementsByTagName('form')[0].reset();" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>

<p class="center">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus asperiores aspernatur assumenda atque beatae dignissimos ducimus earum eveniet excepturi illo laudantium nesciunt odit omnis quae quis quod quos ratione similique sunt unde ut veniam voluptas, voluptatem. Aliquid architecto atque autem culpa cumque cupiditate, deleniti dignissimos dolor doloribus ex facilis hic inventore ipsa ipsum, laboriosam perspiciatis quas quis reiciendis repellendus sequi tempore tenetur, veniam voluptates? Delectus error eum facilis inventore voluptate! Consequatur cupiditate, ducimus excepturi ipsum nulla quae quas reiciendis sapiente similique! Error eveniet molestias obcaecati porro quidem tenetur vel. Ad dignissimos dolorem esse fugit id nam nesciunt optio tenetur ut. </p>









</body>
</html>