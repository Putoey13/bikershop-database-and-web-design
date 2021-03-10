<?php 
session_start();
        if(isset($_POST['Email'])){
                  include("connection.php");
                  $Email = $_POST['Email'];
                  $Pass = $_POST['Pass'];

                  $sql="SELECT * FROM member 
                  WHERE  Email='".$Email."' 
                  AND  Password='".$Pass."' ";
				  
                  $result = mysqli_query($conn,$sql);
				  
                  if(mysqli_num_rows($result)==1){
                      $row = mysqli_fetch_array($result);

                      $_SESSION["Status"] = $row["Status"];
					  $_SESSION["Email"] = $_POST['Email'];
                      $_SESSION["Name"] = $row["Name"];
					  $_SESSION["Lastname"] = $row["Lastname"];
					  
                      if($_SESSION["Status"]=="admin"){ 

                        Header("Location:Admin");
                      }
                  if ($_SESSION["Status"]== "member"){ 

                        Header("Location:homepage.php");
                      }
                  }else{
                    echo "<script>";
                        echo "alert(\" Email หรือ  Password ไม่ถูกต้อง\");"; 
                        echo "window.history.back()";
                    echo "</script>";
 
                  }
        }else{

             Header("Location: ../Login/Login.php"); //user & password incorrect back to login again
 
        }
?>