<?php
    $events = $conn->prepare("SELECT
    date,
    description
    
    from Event
    ");
    $events->execute();
    $events->store_result();
    $events->bind_result($date, $description);
?>