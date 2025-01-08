<?php

session_start();

if (isset($_POST["submitA"])) {
    header("Location: ../viewPolls.php");
    $_SESSION["state"] = "A";
} elseif (isset($_POST["submitB"])) {
    header("Location: ../viewPolls.php");
    $_SESSION["state"] = "B";
} else {
    echo "Failed to select file";
}
