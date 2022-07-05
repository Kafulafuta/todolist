<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>To Do List</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <style>
	.content-table{
		border-collapse: collapse;
		margin: 25px 0;
		font-size: 0.9em;
		min-width: 400px;
		border-radius: 5px 5px 0 0;
		overflow: hidden;
		box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
	}
	.content-table thead tr{
		background-color: #0000ff;
		color: #ffffff;
		text-align: left;
		font-weight: bold;
	}
	.content-table th,
	.content-table td {
		padding: 12px 15px;
	}
	.content-table tbody tr{
		border-bottom: 1px solid #dddddd;
	}
	
	.content-table tbody tr:nth-of-type(even){
		background-color: #f3f3f3;
	}
	.content-table tbody tr:last-of-type{
		border-bottom:2px solid #009879;
	}
	
	
	</style>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="" /></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="container-fluid">
            <div class="row">
               <div class="col-lg-3 logo_section">
                  <div class="full">
                     <div class="center-desk">
                     </div>
                  </div>
               </div>
               <div class="col-lg-9">
                  <div class="menu-area">
                     <div class="limit-box">
                        <nav class="main-menu">
                           <ul class="menu-area-main">
						      <li>
                                 <a href="home.php">Home</a>
                              </li>
                              <li>
                                 <a href="#"><img src="images/search_icon.png" alt="#" /></a>
                              </li>
                           </ul>
                        </nav>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- end header inner -->
      </header>
      <!-- end header -->
      <div class="contact-bg">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="contactheading">
               <h3>To Do List</h3>
            </div>
         </div>
      </div>
   </div>
</div>
<!-- section -->
      <section class="layout_padding">
         <div class="container">
           <div class="row">
               <div class="col-md-12">
                  <div class="full comment_form">
				  <?php
				  error_reporting(0);
				  $conn=mysqli_connect("localhost","root","","todolist");
				  if(isset($_POST['submit']))
				  {
					  $id=$_POST['id'];
					  $message=$_POST['message'];
					  $sql="UPDATE list SET message='$message' WHERE id=$id";
					  $query=mysqli_query($conn,$sql);
					  if($query)
					  {
						  echo "data updated";
					  }
					  else
					  {
						  echo "data not updated";
					  }
				  }
					  
				  ?>
				 <?php
				 $id=$_GET['id'];
				 $sql="SELECT * FROM list WHERE id='$id'";
				 $query=mysqli_query($conn,$sql);
				 while($res=mysqli_fetch_array($query))
				 {
					  $id=$res['id'];
					  $message=$res['message'];
				 }
				 
				 
				 ?>
                     <form action="home.php" method="POST">
                        <fieldset>
                           <div class="col-md-12">
                              <div class="row">
                                 <div class="col-md-6">
                                    <input type="text" name="message" placeholder="Enter To Do List" value="<?php echo $message;?>"/>
                                 </div>
                                </div>
                              <div class="row margin_top_30">
                                 <div class="col-md-12">
                                    <div class="">
                                       <button type="submit" name="submit">Update</button>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </fieldset>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>
	<!-- end section -->
      <section>
         <div class="container-fluid">
            <div class="row">
                <div class="col-md-12" style="padding: 0;">
                   <div class="map_section">
                     <div id="map">
                     </div>
                   </div>
                </div>
            </div>
         </div>
      </section>
     <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- Scrollbar Js Files -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>


</body>
</html>