<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat-Chorus</title>
    <?php if (file_exists($_SERVER['DOCUMENT_ROOT']."/Chat-Chorus/css/".basename($_SERVER['PHP_SELF'],".php").".css"))
    { ?>
    <link 
        href="/Chat-Chorus/css/<?php print(basename($_SERVER['PHP_SELF'],".php"))?>.css"
        rel="stylesheet">
    <?php } ?>
</head>