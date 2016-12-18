<form action="index.php" method ="POST">
    <input type = "text" name ="name"/>
    <input type = "text" name ="email"/>
    <input type = "tel" name="tel"/>
    <input type = "submit" value ="отправить"/>
</form>
<?php
print_r($_POST);

?>