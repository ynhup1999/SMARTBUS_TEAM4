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
    <div class="sidebar" data-color="purple" data-image="assets/img/sidebar-5.jpg">>
        <div class="sidebar-wrapper">
            <div class="logo">
                <a class="simple-text">
                     Smart Bus                    <i class="pe-7s-car"></i>
                </a>
            </div>

            <ul class="nav">
                <li>
                       <a href="Main.php">
                        <i class="pe-7s-box2"></i>
                        <p>Trang Chủ</p>
                    </a>
                </li>
                <li>
                    <a href="Login.php">
                        <i class="pe-7s-back-2"></i>
                        <p>Đăng xuất</p>
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
                    <a class="navbar-brand" id="iduser" href="#">Xin chào <?php echo $_GET['name']?>, vui lòng đặt xe!</a>
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
                <h1> Xe số <?php echo $_GET['idbus'];?> đang đến...</h1>
                <button id="onbus" class="btn btn-success btn-lg">Xác nhận lên xe</button>
                <button id="cancelbus" class="btn btn-danger btn-lg">Hủy chuyến</button>
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
    <script>
        $(document).ready(function(){
            $('#cancelbus').click(function(){
                location.href = "Control/CancelBus.php" + location.search;  
            });
            $('#onbus').click(function(){
                location.href = "Control/OnBus.php" + location.search;  
            });
        });
    </script>
</html>
