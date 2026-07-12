<?php
header('Content-Type: application/json');

$conn = mysqli_connect("localhost", "root", "", "space_explorer");

if (!$conn) {
    echo json_encode([]);
    exit();
}

$username = isset($_GET['username']) ? mysqli_real_escape_string($conn, $_GET['username']) : '';

// Make sure nasa_id is explicitly selected here (or use *)
$query = "SELECT id, nasa_id, username, title, img_url, description, date_created 
          FROM favorites 
          WHERE username = '$username' 
          ORDER BY id DESC";

$result = mysqli_query($conn, $query);
$favorites = [];

if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
        $favorites[] = [
            'id' => $row['id'],
            'nasa_id' => $row['nasa_id'], // <-- MUST BE RETURNED IN THE JSON BUNDLE
            'username' => $row['username'],
            'title' => $row['title'],
            'img_url' => $row['img_url'],
            'description' => $row['description'],
            'date_created' => $row['date_created']
        ];
    }
}

echo json_encode($favorites);
mysqli_close($conn);
?>