<?php
  include('config.php');
  include('db.php');
  
  session_start();
  
  if(!isset($_SESSION['user'])){
      header("Location: loginUser.php");
  }
  
	include('header.php');
?>

	<ol class="breadcrumb">
      <li><a href="index.php">Home</a></li>
      <li class="active">User</li>
      <li class="active">Dashboard</li>
    </ol>
    
    <?php 
    $email = $_SESSION['user'];

    $sql = "Select * from user where Email='".$email."'";
    $result = mysql_query($sql) or die(mysql_error());
    
    while($row=mysql_fetch_array($result)){
    
    $img_url = "images/no-profile-pic.jpg";
        
    $image_id = $row['picture'];
    if($image_id != ""){
        $img_url = "upload/users/".$image_id;
    }
    
   ?>
   <div class="row">
        <div class="col-md-3">
            <div class="box">
                    <div class="box-header">
                        <h2><i class="glyphicon glyphicon-edit"></i><span class="break"></span>Welcome</h2>
                        
                        
                    
                    </div>
                    <div class="box-content">
           <h3> <center>Hi !, <?php echo $row['Full_Name'];?> </center></h3>
           <center> <img src="<?php echo $img_url; ?>" alt="" class="thumbnail" width="150px"/></center>
           
           <ul class="user-details">
               <li><b>User Id :</b> <br><?php echo $row['User_ID'];?> </li>
               <li><b>Name with Inti. :</b> <br><?php echo $row['Name_With_Initial'];?> </li>
               <li><b>Full Name :</b><br> <?php echo $row['Full_Name'];?> </li>
               <li><b>NIC Number :</b> <br><?php echo $row['NIC_Number'];?> </li>
               <li><b>Date of Birth:</b> <br><?php echo $row['Date_Of_Birth'];?> </li>
               <li><b>District :</b> <br><?php echo $row['District'];?> </li>
               <li><b>Religion :</b> <br><?php echo $row['Religion'];?> </li>
               <li><b>Nationality :</b> <br><?php echo $row['Nationality'];?> </li>
               
           </ul>
           </div> <!-- Content END -->

            
       </div><!-- BOX END -->
        </div>
        <div class="col-md-6">
            
        <div class="box">
                    <div class="box-header">
                        <h2><i class="glyphicon glyphicon-edit"></i><span class="break"></span>DASHBOARD</h2>
                        
                        <div class="box-icon">
                            <a href="#" class="btn-setting"><i class="glyphicon glyphicon-chevron-down"></i></a>
                        </div>
                    
                    </div>
                    <div class="box-content">
                        <a href="userPersonalDetails.php" class="quick-button span2">
                            <i class="glyphicon glyphicon-user"></i>
                            <p>Personal<br> Informations</p>
                        </a>
                        <a href="#" class="quick-button span2">
                            <i class="glyphicon glyphicon-book"></i>
                            <p>Education<br> Qualifications</p>
                        </a>
                        <a href="#" class="quick-button span2">
                            <i class="glyphicon glyphicon-flag"></i>
                            <p>Sports<br> Qualifications</p>
                        </a>
                        <a href="#" class="quick-button span2">
                            <i class="glyphicon glyphicon-lock"></i>
                            <p>Working<br> Experience</p>
                        </a>
                   </div> <!-- Content END -->

            
       </div><!-- BOX END -->
       </div>
       <div class="col-md-3">
           
           <div class="box">
                    <div class="box-header">
                        <h2><i class="glyphicon glyphicon-edit"></i><span class="break"></span>Recent Jobs</h2>
                      </div>
                    <div class="box-content">
                        
                        
           </div> <!-- Content END -->

            
       </div><!-- BOX END -->
       </div>
       
       
       </div>
   
   <?php
   }
    include('footer.php');
?>