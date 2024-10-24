<?php
if(isset($_POST) && $_SERVER["REQUEST_METHOD"] === "GET") {//POST
    
    $sunject = htmlspecialchars($_GET["sunject"]);

    if(strlen($subject) > 50 || strlen($subject) < 7) {
        $details = "Sujet trop long";
        $error = true;
    }
    else {
        $error = false;
    }

    $response = [
        "error" => false,
        //"request" => $_SERVER
    ];
}
else {
    $response = [
            "error" => true,
            "details" => "no Request",
    ];
}

echo json_encode($response);