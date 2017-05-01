<a href="index2.php">Page 2</a><br>
<a href="index3.php">Page 3</a><br>
<a href="index4.php">Page 4</a><br>
<?php
if ($_SERVER['HTTP_REFERER']) {
    $_SESSION['visited_links'][] = $_SERVER['HTTP_REFERER'] . "<br>";
    echo '<a href="' . $_SERVER['HTTP_REFERER'] . '">back</a>';
}
