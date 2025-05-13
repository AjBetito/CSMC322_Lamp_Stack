<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $thought = trim($_POST["howtoliveforever"]);

    // Save it to a text file (append mode)
    $file = fopen("forever_thoughts.txt", "a");
    fwrite($file, date("Y-m-d H:i:s") . " - " . $thought . PHP_EOL);
    fclose($file);

    // Optional: redirect to thank you page or same page with message
    echo "<h2 style='color:#c7b518; font-family: Garamond;'>Thank you. Your thoughts have been recorded.</h2>";
} else {
    echo "Invalid request.";
}
?>
