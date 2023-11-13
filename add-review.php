<?php
    include("config.php");
    session_start();

    if (isset($_POST["review-submit"])) {
        $id = $_SESSION['user_id'];

        if (!empty($id)) {
            $isExist_review = $conn->query("SELECT review_id FROM review WHERE user_id='$id'");

            if ($isExist_review->num_rows > 0) {
                header("Location: index.php?review-stat=0");
            } else {
                $rating = $_POST["rating"];
                $rating = htmlspecialchars($rating);
                $comment = $_POST["comment"];
                $comment = htmlspecialchars($comment);
    
                $add_review = $conn->query("INSERT INTO review (user_id, rating, description) VALUES ('$id', '$rating', '$comment')");
    
                if ($add_review === TRUE) {
                    header("Location: index.php?stat=1");
                } else {
                    header("Location: index.php?stat=0");
                }
            }

        } else {
            header("Location: index.php?log-stat=0");
        }
    }

    $conn->close();
?>
