<?php
    $conn = mysqli_connect('testProj', 'dima', 'test', 'testdatabase');
    if (!$conn) {
        echo 'connection error: ' . mysqli_connect_error();
    }
    else {
        $posts_url = "https://jsonplaceholder.typicode.com/posts";
        $posts_json = file_get_contents($posts_url);
        $posts = json_decode($posts_json, TRUE);
        forEach($posts as $post) {
            $userId = $post['userId'];
            $id = $post['id'];
            $title = $post['title'];
            $body = $post['body'];

            $query ="INSERT INTO posts (userId, id, title, body) 
            VALUES ( '". $userId."','".$id."','".$title."','".$body."' )";
            mysqli_query($conn, $query);
        }

        $comments_url = "https://jsonplaceholder.typicode.com/comments";
        $comments_json = file_get_contents($comments_url);
        $comments = json_decode($comments_json, TRUE);
        forEach($comments as $comment) {
            $postId = $comment['postId'];
            $id = $comment['id'];
            $name = $comment['name'];
            $email = $comment['email'];
            $body = $comment['body'];

            $query ="INSERT INTO comments (postId, id, name, email, body) 
            VALUES ( '". $postId."','".$id."','".$name."','".$email."','".$body."' )";
            mysqli_query($conn, $query);
        }

        $postsAmount = count($posts);
        $commentsAmount = count($comments);
        echo "<script>console.log('Загружено $postsAmount записей и $commentsAmount комментариев')</script>";
    }
?>