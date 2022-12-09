<?php

require_once '../prepared/prepared.php';

if (isset($_GET['pending'])) {
    $id = $_GET['pending'];

    $sql = "UPDATE requests SET status = 1 WHERE request_id = $id";

    $result = VALIDATE_QUERY($sql);
    if ($result === true) {
        echo "true";
    } else {
        echo false;
    }
}

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];

    $sql = "DELETE FROM requests WHERE request_id = $id";

    $result = VALIDATE_QUERY($sql);
    if ($result === true) {
        echo "true";
    } else {
        echo false;
    }
}

if (isset($_GET['deleteall'])) {
    $status = $_GET['deleteall'];

    $sql = "DELETE FROM requests WHERE status = 1";

    $result = VALIDATE_QUERY($sql);
    if ($result === true) {
        echo "true";
    } else {
        echo false;
    }
}

// fOR Messages =================================================================

if (isset($_GET['deleteMessage'])) {
    $id = $_GET['deleteMessage'];

    $sql = "DELETE FROM messages WHERE message_id = $id";

    $result = VALIDATE_QUERY($sql);
    if ($result === true) {
        echo "true";
    } else {
        echo false;
    }
}

if (isset($_GET['deleteallmessage'])) {
    $status = $_GET['deleteallmessage'];

    $sql = "DELETE FROM messages";

    $result = VALIDATE_QUERY($sql);
    if ($result === true) {
        echo "true";
    } else {
        echo false;
    }
}