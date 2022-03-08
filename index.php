<?php
    if (isset($_POST['submit'])){
        $searchValue = $_REQUEST['searchValue']; 
        $conn = mysqli_connect('testProj', 'dima', 'test', 'testdatabase');
        $str = 'laudanti';
        $query = "SELECT posts.title, comments.body FROM posts 
        INNER JOIN comments ON posts.id = comments.postId WHERE
        comments.body LIKE '%$searchValue%'";
        $postCommentsQueried = mysqli_query($conn, $query);
        $postComments = mysqli_fetch_all($postCommentsQueried, MYSQLI_ASSOC);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="">
        <input type="text" name="searchValue" id="searchValue" minlength=3>
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php if (isset($_POST['submit'])) foreach($postComments as $postComment): ?>
        <div>
            <h2><?=$postComment['title']?></h2>
            <p><?=$postComment['body']?></p>
            <hr/>
        </div>
    <?php endforeach; ?>
</body>
</html>