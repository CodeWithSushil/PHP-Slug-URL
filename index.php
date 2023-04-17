<?php
require("./php/db.php");

if(isset($_SERVER['PATH_INFO']))
{
    $slug_url = $_SERVER['PATH_INFO'];
    $qy="SELECT * FROM posts WHERE slug_url='$slug_url'";
    $run=mysqli_query($con,$qy);
    $data=mysqli_fetch_assoc($run);
    echo "<h1>".$data['title']."</h1>";
    echo "<p>".$data['content']."</p>";
}
else
{   
   ?>
   <a href="add.php">Add post</a>
   <h1>All Posts</h1>
   <?php
   $sq="SELECT * FROM posts";
   $run=mysqli_query($con,$sq);
   while($data=mysqli_fetch_assoc($run)){
       echo "<a href='".$data['slug_url']."'>".$data['title']."</a><br>";
   }

}
?>