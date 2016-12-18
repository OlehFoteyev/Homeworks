<form action="index.php" method ="POST">
    <input type = "text" name ="username" placeholder="username"/>
    <input type = "text" name ="email" placeholder="email"/>
    <input type = "tel" name="message" placeholder="text"/>
    <input type = "submit" value ="отправить"/>
</form>
<?php
print_r($_POST);
echo '<br>';
echo $str  = serialize($_POST);
?>