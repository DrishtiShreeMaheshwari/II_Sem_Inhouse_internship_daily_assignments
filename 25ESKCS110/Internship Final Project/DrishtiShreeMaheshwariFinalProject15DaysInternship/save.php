<?php
$conn = mysqli_connect("localhost", "root", "", "space_explorer");

if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}

if (isset($_POST['title']) && isset($_POST['url']) && isset($_POST['username'])) {
$nasa_id = isset($_POST['nasa_id']) ? mysqli_real_escape_string($conn, $_POST['nasa_id']) : '';
$username = mysqli_real_escape_string($conn, $_POST['username']);
$title = mysqli_real_escape_string($conn, $_POST['title']);
$url = mysqli_real_escape_string($conn, $_POST['url']);
$description = isset($_POST['description']) ? mysqli_real_escape_string($conn, $_POST['description']) : '';
$date_created = isset($_POST['date_created']) ? mysqli_real_escape_string($conn, $_POST['date_created']) : '';

$query = "INSERT INTO favorites (nasa_id, username, title, img_url, description, date_created) 
          VALUES ('$nasa_id', '$username', '$title', '$url', '$description', '$date_created')";
    
    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Saved to your personal collection!'); window.location.href='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>