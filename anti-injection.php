function escapestring($value) {
    $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if($conn->connect_errno) {
        die('Could not connect:' . $conn->connect_error);
    }
    return strip_tags(mysqli_real_escape_string($conn, $value));
}
