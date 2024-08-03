<div class="commentlist">
                <div class="avatarlist">
                    <img src="<?php print($comments[$i]['avatar']); ?>" alt="Avatar">
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