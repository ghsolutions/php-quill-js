<?php
require_once 'quillJsIso.php';
$quillJs = new quillJsIso('./js/','./js/');
//if(isset($_POST)){
//    echo '<pre>';
//    var_dump($_POST);
//}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Snow Theme - Quill Rich Text Editor</title>
    <meta charset="ISO-8859-15">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="language" content="german">
    <meta name="viewport" content="width=device-width">
    <?php
    echo $quillJs->setCss();
    echo $quillJs->setInlkineCss();
    ?>
</head>
<body>
<?php
echo '<form action="'.$_SERVER['PHP_SELF'].'" method="post">';
echo $quillJs->setTextField('vereinbarung','vereinbarung','leck');
echo $quillJs->setTextField('bemerkung','bemerkung','mich');
echo $quillJs->setTextField('t3','t3','am');
echo $quillJs->setTextField('t4','t4','arsch');
?>
<input type="submit">
</form>
<?php
echo $quillJs->setJs();
echo $quillJs->setEditor();
?>
</body>
</html>
