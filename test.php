<?php
require_once 'quillJS.php';
$quillJs = new quillJS('./js/','./js/');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>PHP-Quill-Wrapper</title>
    <meta charset="ISO-8859-15">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="language" content="german">
    <meta name="viewport" content="width=device-width">
    <?php
    echo $quillJs->setCss();
    echo $quillJs->setInlkineCss('75px');
    ?>
</head>
<body>
<?php
echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">';
echo $quillJs->setTextField('t1','t1','');
echo $quillJs->setTextField('t2','t2','');
echo $quillJs->setTextField('t3','t3','');
echo $quillJs->setTextField('t4','t4','');
?>
<input type="submit">
</form>
<?php
echo $quillJs->setJs();
echo $quillJs->setEditor();
?>
</body>
</html>
