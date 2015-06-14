    <!-- jQuery -->
    <script src="asset/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="asset/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="asset/js/plugins/morris/raphael.min.js"></script>
    <script src="asset/js/plugins/morris/morris.min.js"></script>
    <script src="asset/js/plugins/morris/morris-data.js"></script>

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="asset/img/icon/favicon.ico"/>
    <title>Quản lí - AD tourist</title>

    <!-- Bootstrap Core CSS -->
    <link href="asset/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="asset/css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="asset/css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="asset/font-awesome-4.1.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><i class="fa fa-heart">&nbsp</i>Quản lý AD tourist</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">     
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">Xin chào &nbsp<i class="fa fa-user">&nbsp</i><?php echo $_SESSION['username'] ;?> <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="index.php?controller=sign&amp;action=logout"><i class="fa fa-fw fa-power-off"></i> Thoát</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li <?php if($active=='Dashboard') echo 'class="active"';?>>
                        <a href="index.php"><i class="fa fa-fw fa-dashboard"></i> Bảng điều khiển</a>
                    </li>
                    <li  <?php if ($active=='Itiem1') {echo 'class="active"';}?> >
                        <a href="#"><i class="fa fa-fw fa-reddit"></i> Itiem1</a>
                    </li>
                    <li <?php if ($active=='Itiem2') {echo 'class="active"';}?>>
                        <a href="#"><i class="fa fa-fw fa-list-ol"></i> Itiem2</a>
                    </li>
                    <li <?php if ($active=='Itiem3') {echo 'class="active"';}?>>
                        <a href="#"><i class="fa fa-fw fa-shopping-cart"></i> Itiem3</a>
                    </li>
                    <li <?php if ($active=='Itiem4') {echo 'class="active"';}?>>
                        <a href="#"><i class="glyphicon glyphicon-refresh"></i> Itiem4</a>
                    </li>
                    <li <?php if ($active=='Itiem5') {echo 'class="active"';}?>>
                        <a href="#"><i class="glyphicon glyphicon-star"></i> Itiem5</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>
    </div>

   