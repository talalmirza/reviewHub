<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=1,initial-scale=1,user-scalable=1" />
    <title>ReviewHub - Dashboard Login</title>

    <!-- Loading Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Edit CSS -->
    <link href="css/default.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,900,700,600,300,200" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:100,300,400,700" rel="stylesheet">
    <link rel="shortcut icon" href="images/favicon.ico">



    <!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body class="admin-login">




<section class="container login-form">

    <div class="text-center">
        <img src="images/Logos/fullogo.png" style="height:auto;width:100%;">

    </div>
    <section style="padding-top:0px;">
        <form method="post" action="" role="login">


            <div class="form-group">
                <input type="email" name="email" required class="form-control" placeholder="Enter email or nickname" />
                <span class="glyphicon glyphicon-user"></span>
            </div>

            <div class="form-group">
                <input type="password" name="password" required class="form-control" placeholder="Enter password" />
                <span class="glyphicon glyphicon-lock"></span>
            </div>

            <button type="submit" name="go" class="btn btn-primary btn-block">Login Now</button>

            <a href="#">Reset password</a>
        </form>
    </section>
</section>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="assets/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>