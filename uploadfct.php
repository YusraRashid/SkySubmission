<?php

header("Content-type: application/json");

function upload() {
    // Specifies directory where file is going to be stored
    $target_dir = "uploads";

    // Specifies the path of the file to be uploaded
    $target_file = $target_dir . "/" . basename($_FILES["moviesFile"]["name"]);

    // Error messages array
    $errorMessages = [];

    // Stores file extensions in lower case
    $fileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

    // Allow certain file formats
    if ($fileType != "json") {
        array_push($errorMessages, "Only .json files are allowed.");
    }

    // Check for number of error messages
    if (count($errorMessages) > 0) {
        echo json_encode(array(
            'error' => true,
            'message' => $errorMessages,
        ));
        return;
    }
    
    if (move_uploaded_file($_FILES["moviesFile"]["tmp_name"], $target_file)) {
        $message = "The file ". basename($_FILES["moviesFile"]["name"]). " has been uploaded.";
        echo json_encode(array(
            'error' => false,
            'message' => [$message],
        ));
    }
    else {
        echo json_encode(array(
            'error' => true,
            'message' => ["Sorry, there was an error uploading your file."],
        ));
    }
}

upload();

?>
