<?php
session_start();
include "dbconn.php";
if(mysql_select_db("977993")){

}
else{
	echo "error connecting to the database";
}


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blurit Computers/Home</title>

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
                <a class="navbar-brand" href="Placeorder.php">place order</a>
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
    <header class="intro-header" style="background-image: url('img/dk5.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Blurit Co</h1>
                        <hr class="small">
                        <span class="subheading">Best Quality products at affordable prices</span>
                        <?php
                  if(isset($_POST['fname']))
                     $reason ="";
                    $fname=$_POST['fname'];
                    $fname = trim($fname);
                    if($fname == ""){
                        $dbauth="no";
                        $reason = $reason."|Your name should contain characters";
                    }
                    $sname =$_POST['sname'];
                    $sname = trim($sname);
                    if($sname == ""){
                        $dbauth="no";
                        $reason = $reason."|Your name should contain characters";
                    }
                   
                    $phonenumber =$_POST['phonenumber'];
                    $phonenumber = trim($phonenumber);
                    if($phonenumber == ""){
                        $dbauth="no";
                        $reason = $reason."|Your phonenumber should contain characters";
                    }
                    $email =$_POST['email'];
                    $email = trim($email);
                    if($email == ""){
                        $dbauth="no";
                        $reason = $reason."|Your email should contain characters";
                    } 
                    $laptop=$_POST['laptop'];
                    $model=$_POST['model'];
                    $submit=$_POST['submit'];
                    $present="no";
                    $lastindex = 0;
                    $sql1="SELECT * from placeorder";
                    $result1=mysql_query($sql1);
                    while ($row1=mysql_fetch_array($result1)) {
                        # code...
                        $present= "yes";
                        $lastindex = $row1['index'];
                    }
                    if($present=="yes"){
                        $uniqueid=$fname.$sname.$lastindex;
                    }else{
                        
                        $uniqueid=$fname.$sname.$lastindex;
                    }


                    $sql2="INSERT INTO placeorder(confirmed, uniqueid, fname, sname, phonenumber, email, laptop, model)
                    VALUES ('no','".$uniqueid."', '".$fname."', '".$sname."','".$phonenumber."', '".$email."', '".$laptop."', '".$model."')";




                    $sql3="SELECT * from placeorder";
                    $result3=mysql_query($sql3);
                    $dbauth = "yes";
                  
                    if($dbauth == "yes"){
                        if(mysql_query($sql2)){
                            echo "<h2>order successful! We will call you within 24hrs for the delivery </h2>";
                        }else{
                            echo "<h2>there was an error in processing your order</h2>";
                            echo mysql_error();
                        }
                    }else{
                        if($dbauth=="no"){
                            echo"<h2>".$reason."</h2>";    
                        }
                        echo mysql_error();
                        echo"<h2>There was an error in placing an order </h2>";
                    }

            
                     


                    ?>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
         <div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                <p> <font color="red">Welcome to Blurit Computers </font> </p>

                     <table class="text-center" width="100%"cellpadding="20">
                         <tr>

                          <img src="best.jpg"  width="200">
                         <img src="great.jpg" width="200">
                           <img src="mpesa.jpg" width="250">
                         <img src="genuine.jpg" width="200">
                       
                         
                  </tr>
                  <tr>
                    <td> <font family="Algerian">Great Prices</font></td>
                    <td> <font family="Algerian"></font> Great stuff </td>
                    <td> <font family="Algerian"></font> Easy Pay</td>
                    <td> <font family="Algerian">Genuine Products</font></td>

              
                       </tr>


                  </table>

                <table class="text-center" width="100%"cellpadding="20">
                    <tr >
                        <td><a href="Laptops.php"><img src="g50.jpg" width="100"></a></td>
                        
                        <td ><a href="Desktops.php"><img src="hpdk2.jpg" width="100"></a></td>

                        <td><a href="Mackbooks.php"><img src="mac3.jpg" width="100"></a></td>
                        <td><a href="Accessories.php"><img src="mouse2.jpg" width="100"></a></td>
                    </tr>
                    <tr>
               
                        <td><a href="Laptops.php"> Laptops</a></td>
                        <td><a href="Desktops.php"> Desktops</a></td>
                        <td><a href="MackBooks.php"> Mack Books</a></td>
                        <td><a href="Accessories.php">  Accessories</a></td>
                       
                         
                    </tr>

                </table>
                <table class="text-center" width="100%"cellpadding="20">
                    <tr >
                        <td><a href="Placeorder.php"><img src="3.jpg" width="100"></a></td>
                        
                        <td ><a href="Aboutus.php"><img src="2.jpg" width="100"></a></td>

                        <td><a href="Contacts.php"><img src="1.jpg" width="100"></a></td>
                        <td><a href="index.php"><img src="blurit1.jpg" width="100"></a></td>
                    </tr>
                    <tr>
               
                        <td><a href="Placeorder.php">Place Order</a></td>
                        <td><a href="Aboutus.php">About Us</a></td>
                        <td><a href="Contacts.php">Contact Us</a></td>
                        <td><a href="index.php">Home</a></td>
                       
                         
                    </tr>

                </table> 
                    <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                    <img src="air5.jpg"  width="200">
                    <img src="conn.jpg" width="200">
                    <img src="free.jpg" width="200">
                    <img src="envys.png" width="100%">
                   </div>

                </div>

                </div>
                  
               </div>
               <ul class="pager">
                    <li class="next">
                        <font color="purple">Website designed and maintained by Burii 
                           <h4> buriihenry@gmail.com tel +254700223146</h4></font>
                        <a href="#">Back to top &rarr;</a>
                    </li>
                </ul>
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