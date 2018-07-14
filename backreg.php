
<?php
//include 'datalogin.php';
$conn = mysqli_connect("localhost", 'root', '', 'manideep_db');
if(isset($_POST['rsubmit'] ))
{
  $id=$_POST['rid'];
  $name=$_POST['rname'];
  $gender=$_POST['rgen'];
  $dob=$_POST['rdob'];
  $mobile=$_POST['rmob'];
  $password=$_POST['rpwd'];

 // $insertion="insert into user values('$id','$name','$gender','$dob','$mobile','$password')";
 // $run=mysqli_query($insertion);
  
  $run=mysqli_query($conn, "INSERT INTO `table_1` (`id`, `name`, `gender`, `dob`,`mobile`,`password`)
                    VALUES ('$id', '$name', '$gender', '$dob','$mobile','$password')");
  if($run)
  {
  header('Location: index2.php');
  die();
  }
  //echo "error";
    printf("Errormessage: %s\n", mysqli_error($conn));
}
?>