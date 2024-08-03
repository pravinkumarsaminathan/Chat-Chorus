<?php
include_once 'libs/load.php';

if (isset($_POST['avatar']) and isset($_POST['username']) and isset($_POST['comment']))
{
$avatar = $_POST['avatar'];
$username = $_POST['username'];
$comment = $_POST['comment'];

$conn = Database::getConnection();
$checkUserQuery = "SELECT * FROM list WHERE username='$username'";
$result = $conn->query($checkUserQuery);

if ($result->num_rows > 0) {
    echo "Username already exists. Please choose a different username.";
} 
else {
    $sql = "INSERT INTO `list` (`avatar`, `username`, `comment`, `date`)
    VALUES ('$avatar', '$username', '$comment', now());";
    unset($_POST['avatar']);
    unset($_POST['username']);
    unset($_POST['comment']);
    if ($conn->query($sql) === TRUE) {
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
}
?>

<!DOCTYPE html>
<html lang="en">
<?php load_templates("_head"); ?>
<body>
    <div class="header-section">
        <h1>Chat-Chorus</h1>
    </div>
    <div class="container">
        <?php load_templates("_avatar"); ?>
        <?php load_templates("_getComment"); ?>
    </div>
    <?php load_templates("_listComment"); ?>
    <script src="/Chat-Chorus/js/index.js"></script>
</body>
</html>