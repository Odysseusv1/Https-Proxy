<?php
// Check if a URL is provided
if (isset($_GET['url'])) {
    $url = $_GET['url'];

    // Validate the URL (basic validation)
    if (filter_var($url, FILTER_VALIDATE_URL)) {
        // Fetch the content of the URL
        $content = file_get_contents($url);

        // Output the content
        echo $content;
    } else {
        echo "Invalid URL.";
    }
} else {
    echo "No URL provided.";
}
?>
