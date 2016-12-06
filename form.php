<?php
$errors = [];
if (isset($_POST['name'])) {
	$name = $_POST['name'];
	if (gettype($name) != 'string') {
            $errors[] = 'Error Name value type!!!';
	}
} else {
    $name = '';
}
if (isset($_POST['age'])) {
	$age = (integer) $_POST['age'];
	if (gettype($age) != 'integer') {
            $errors[] = 'Error Age value type!!!';
	}
} else {
    $age = '';
}

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<div style='color: red;'>$error</div>";
    }
}
    $form = <<<FORM
<form action="form.php" method="post">
  <p>Ваше имя:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <input type ="text" name="name" value="$name" /></p>
  <p>Ваш возраст: <input type="text" name="age" value="$age" /></p>
  <p><input type="submit" /></p>
</form>
FORM;
echo $form;
echo "<br /><br />";
    echo "Здравствуйте, " . htmlspecialchars($name) . ".<br />";
    echo "Вам " . (int)$age . " лет.<br />";
    echo "<a href='form.php'>Back</a>";

