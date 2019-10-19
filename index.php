
<?php
$conn = mysqli_connect('localhost','talenta','talenta123','tugas');
$sql = mysqli_query($conn,"SELECT * FROM log_users ORDER BY id DESC LIMIT 1");
$print_data = mysqli_fetch_row($sql);


if($print_data[1] == ""){
  header("location:register.php");
}else{
  header("location:home.php");
}
?>