<?php
if (isset($_SERVER['HTTP_X_REQUESTED_WITH'])
    && !empty($_SERVER['HTTP_X_REQUESTED_WITH'])
    && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
{


//echo 'Успешно соединились<br /><br />';
//
//$sqlQuery = "SELECT `id`, `name` FROM `author`";
//$result = mysqli_query($link, $sqlQuery);
    $connection = mysqli_connect('localhost', 'root', 'password', 'test');

    if (mysqli_connect_errno())
    {
        printf("Connect failed: %s\n", mysqli_connect_error());
        exit();
    }
//    $db = mysqli_select_db("test", $connection); // Selecting Database

    //Fetching Values from URL
    $name2     = htmlentities($_POST['name1']);
    $email2    = htmlentities($_POST['email1']);
    $password2 = htmlentities($_POST['password1']);
    $contact2  = htmlentities($_POST['contact1']);

    //Insert query
    $query = "INSERT INTO form_element(name, email, password, contact) VALUES ('$name2', '$email2', '$password2','$contact2')";
    mysqli_query($connection, $query);

    $successText =  "Form Submitted Succesfully";
    echo $successText;

//    header('Content-Type: application/json');
//    echo json_encode(['resultString' => $successText . ' with JSON']);

    //mysqli_free_result($connection); // Free results
    mysqli_close($connection); // Connection Closed

}
else
{
    echo "<h1>Warning: This script just for AJAX requests!</h1>";
}
