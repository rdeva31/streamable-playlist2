<?php
    header("Status: 301 Moved Permanently");
    header("Location: /index.html?". $_SERVER['QUERY_STRING']);
    exit;
?>
