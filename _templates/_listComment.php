<div class="comment-section">
        <h2>Comments</h2>
        </div>
    </div>


<?php 
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
                        <span class="timestamplist">1 month ago</span>
                    </div>
                    <div class="commentlist-body">
                        <?php print($comments[$i]['comment']); ?>
                    </div>
                    <div class="commentlist-footer">
                        <button class="like-button">👍</button>
                        <button class="dislike-button">👎</button>
                    </div>
                </div>
            </div>
<?php }