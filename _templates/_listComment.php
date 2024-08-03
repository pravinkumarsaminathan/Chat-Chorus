<div class="comment-section">
        <h2>Comments</h2>
        </div>
    </div>


<?php
ob_start(); 
$conn = Database::getConnection();
$len = Database::length();
$comments = Database::comment();
for ($i=0;$i<$len;$i++)
{?>
    <div class="commentlist">
                <div class="avatarlist">
                    <img src="<?php ($comments[$i]['avatar'] == NULL) ? print("/Chat-Chorus/assests/default.svg") : print($comments[$i]['avatar']) ; ?>" alt="Avatar">
                </div>
                <div class="commentlist-content">
                    <div class="commentlist-header">
                        <span class="usernamelist"><?php print($comments[$i]['username']); ?></span>
                        <span class="timestamplist"><?php print(time_elapsed_string($comments[$i]['date']));?></span>
                    </div>
                    <div class="commentlist-body">
                        <?php print($comments[$i]['comment']); ?>
                    </div>
                    <div class="commentlist-footer">
                        <form action="/Chat-Chorus/index.php" method="POST">
                        <button class="like-button" name = "like" value="<?php print($comments[$i]['id'])?>"><?php print($comments[$i]['like']);?>👍</button>
                        <button class="dislike-button" name = "dislike" value="<?php print($comments[$i]['id'])?>"><?php print($comments[$i]['dislike']);?>👎</button>
                        </form>
                    </div>
                </div>
            </div>
<?php }
if (isset($_POST['like']))
{
    $update_id = $_POST['like'];
    $sql = "SELECT `like` FROM `list` WHERE `id` = '$update_id' ";
    $count = $conn->query($sql);
    $results = array();
    while ($answer = $count->fetch_assoc()) {
        $results[] = $answer;
    }
    $ans = $results[0]['like'] + 1;
    $update = "UPDATE `list` SET `like` = '$ans' WHERE `id` = '$update_id' ";
    $conn->query($update);
    header("Refresh:0; url=/Chat-Chorus/index.php");
    exit();
}
else if (isset($_POST['dislike']))
{
    $update_id = $_POST['dislike'];
    $sql = "SELECT `dislike` FROM `list` WHERE `id` = '$update_id' ";
    $count = $conn->query($sql);
    $results = array();
    while ($answer = $count->fetch_assoc()) {
        $results[] = $answer;
    }
    $ans = $results[0]['dislike'] + 1;
    $update = "UPDATE `list` SET `dislike` = '$ans' WHERE `id` = '$update_id' ";
    $conn->query($update);
    header("Refresh:0; url=/Chat-Chorus/index.php");
    exit();
}
else
{}
ob_end_flush();