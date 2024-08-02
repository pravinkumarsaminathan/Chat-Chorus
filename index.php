<?php
include_once 'libs/load.php';
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
    <script src="js/index.js"></script>
</body>
</html>
