<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blurit Computers/Place Order</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/clean-blog.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-default navbar-custom navbar-fixed-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="Placeorder.php">Place Order</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="Laptops.php">Laptops</a>
                    </li>
                    <li>
                        <a href="Desktops.php">Desktops</a>
                    </li>
                    <li>
                        <a href="MackBooks.php">Mack Books</a>
                    </li>
                    <li>
                        <a href="Accessories.php">Accessories</a>
                    </li>
                    <li>
                        <a href="Aboutus.php">About Us</a>
                    </li>
                       <li>
                        <a href="Contacts.php">Contacts</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/order1.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="page-heading">
                        <h1></h1>
                        <hr class="small">
                        <span class="subheading"</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
              <div class="col-lg-5 col-lg-offset-0">

                <p>As soon as you place an order we will ship  your product to the agreed location. We offer free delivery!</p>
                <p>Fill in your details for the purpose of keeping records</p>
               <form action="processor.php" method="post" id="regform">
                   FIRST NAME:<input type="text" name="fname" placeholder="first name" value="" class="form-control" required>
                   SECOND NAME:<input type="text" name="sname" placeholder="second name" value=""class="form-control" required>
                   <br>
                   PHONE NUMBER<input type="text" name="phonenumber" value=""class="form-control" required>
                   E-mail:<input type="text" name="email" placeholder="e-mail" value="" class="form-control" required><br>
                   LAPTOP/DESKTOP:<input type="text" name="laptop" placeholder="laptop" value="" class="form-control" required><br>
                   MODEL:<select name="model" id="model" class="form-control" required>  
                        <option value="Hp" selected>Hp</option>
                        <option value="dell" selected>Dell</option>
                        <option value="lenovo" selected>Lenovo</option>
                        <option value="asus" selected>Asus</option>
                        <option value="acer" selected>Acer</option>
                        
                    </select>
                    <br>
                    <input type="submit" name="submit" value="Place Order">

               </form>
                </div>
      

                  <div class="col-lg-6 col-lg-offset-0">
                    <img src="envys.png"  width="100%">
                    <img src="free.jpg" width="100%">
            
                 </div>
               </div>
    

    <hr>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <ul class="list-inline text-center">
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <span class="fa-stack fa-lg">
                                    <i class="fa fa-circle fa-stack-2x"></i>
                                    <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                                </span>
                            </a>
                        </li>
                    </ul>
                    <p  class="copyright text-muted"><font color="purple">Copyright &copy; Blurit Co 2016</font></p>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

</html>
