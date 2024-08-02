<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Comment Section</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(to bottom right, #ffcc70, #ff6f61);
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            overflow: hidden;
            width: 800px;
        }

        .header {
            background: #ffe3b3;
            color: #333;
            padding: 20px;
            text-align: center;
            font-size: 24px;
        }

        .comment-form {
            padding: 20px;
            background: #ffe3b3;
            text-align: center;
        }

        .avatars {
            margin: 10px 0;
        }

        .comment-form input, .comment-form textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border-radius: 4px;
            border: 1px solid #ddd;
        }

        .comment-form button {
            background: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .comments {
            padding: 20px;
            background: #fff;
        }

        .commentlist {
            display: flex;
            padding: 15px;
            border-bottom: 1px solid #f0f0f0;
        }

        .avatarlist img {
            border-radius: 50%;
            width: 50px;
            height: 50px;
        }

        .commentlist-content {
            margin-left: 15px;
            flex: 1;
        }

        .commentlist-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .usernamelist {
            font-weight: bold;
        }

        .timestamplist {
            color: #999;
            font-size: 12px;
        }

        .commentlist-body {
            margin: 10px 0;
        }

        .commentlist-footer {
            display: flex;
            align-items: center;
        }

        .like-button, .dislike-button, .reply-button {
            background: none;
            border: none;
            color: #007bff;
            cursor: pointer;
            margin-right: 10px;
        }

        .like-button:before {
            content: '+';
            margin-right: 5px;
        }

        .dislike-button:before {
            content: '-';
            margin-right: 5px;
        }
        </style>
</head>
<body>
    <div class="container">
        <h1 class="header">Chat-Chorus</h1>
        <div class="comment-form">
            <h2>Select an Avatar</h2>
            <div class="avatars">
                <!-- Avatars here -->
            </div>
            <h2>Leave a Comment</h2>
            <input type="text" placeholder="Your Name">
            <textarea placeholder="Your Comment"></textarea>
            <button>Post Comment</button>
        </div>
        <div class="comments">
            <h2>Comments</h2>
            <div class="comment">
                <div class="avatar">
                    <img src="avatar-url" alt="Avatar">
                </div>
                <div class="comment-content">
                    <div class="comment-header">
                        <span class="username">amyrobson</span>
                        <span class="timestamp">1 month ago</span>
                    </div>
                    <div class="comment-body">
                        Impressive! Though it seems the drag feature could be improved. But overall it looks incredible. You've nailed the design and the responsiveness at various breakpoints works really well.
                    </div>
                    <div class="comment-footer">
                        <button class="like-button">+0</button>
                        <button class="dislike-button">-</button>
                        <button class="reply-button">Reply</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
