
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="assets/img/favicon.ico">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Smart Bus - Đồ Án Nhóm 4</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/animate.min.css" rel="stylesheet"/>
    <link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">
        <div class="sidebar-wrapper">
            <div class="logo">
                <a class="simple-text">
                     Smart Bus                    <i class="pe-7s-car"></i>
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="Main.php">
                        <i class="pe-7s-box2"></i>
                        <p>Trang Chủ</p>
                    </a>
                </li>
                  <li>
                    <a href="Login.php">
                        <i class="pe-7s-back-2"></i>
                        <p>Trở về đăng nhập</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" id="iduser" href="#">Xin chào <?php echo $_GET['name']?>!</a>
                    <div id='userID' style="display: none"><?php echo $_GET['ID'];?></div>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                    </ul>
                </div>
            </div>
        </nav>


        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card ">
                            <div class="header">
                                <h4 class="title">ĐẶT XE</h4>
                                <p class="category">Số dư hiện tại: <?php include 'Control/function.php'; echo getMoney($_GET['ID']); ?> VNĐ <a style="color: red; text-decoration: underline;" href='user.php?ID=<?php echo $_GET['ID']; ?>&name=<?php echo $_GET['name']; ?>'>Trang Chủ</a></p>
                                <ul style="color: blue;font-weight: bolder;" id="form-messages0">Vui lòng nhập mã thẻ và chọn Nạp thẻ</ul>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <input id="digitnumber" class="form-control" placeholder="Nhập mã thẻ tại đây!"/>
                                        </div>
                                    </div>
                                </div>
                                <button id="Napthe_btn" class="btn btn-success">Nạp tiền</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <footer class="footer">
            <div class="container-fluid">
                <p class="copyright pull-right">
                    &copy; Đồ án nhóm 4
                </p>
            </div>
        </footer>

    </div>
</div>


</body>
    <script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="assets/js/chartist.min.js"></script>
    <script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>
    <script src="Control/Napthe.js"></script>
</html>
