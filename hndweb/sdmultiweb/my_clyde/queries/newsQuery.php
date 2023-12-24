<?php
    $news = $conn->prepare("SELECT
    news_id,
    title,
    description
    
    from News
    ");
    $news->execute();
    $news->store_result();
    $news->bind_result($newsId, $title, $description);
?>