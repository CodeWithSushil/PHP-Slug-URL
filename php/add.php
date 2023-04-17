<?php
include('db.php');

if (isset($_POST['add']))
{
    $title = $_POST['title'];
    $content = $_POST['content'];
    $slug_url=strtolower($title);
    $slug='/'.str_replace(' ','-',$slug_url);
    
    $sql="INSERT INTO `posts` (`title`, `content`, `slug_url`) VALUES ('$title','$content','$slug');";
    $run = mysqli_query($con,$sql);
    
    if ($run) {
        echo "send";
        header('Location:index.php');
    } else {
        echo "unsend";
    }
}
?>
<!DOCRYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Slug URL</title>
    </head>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            <input type="text" name="title" required><br>
            <textarea name="content" required>
                
            </textarea><br>
            <input type="submit" name="add" value="Add">
        </form>
    </body>
</html>