<?php
$errs = [];

function validateValue($valueName, &$errs)
{
    if (!isset($_POST[$valueName]))
    {   
       $errs[$valueName] = 'Not set value for calculator: ' . $valueName;
    }
}

$_POST['first_value'] = 10;

validateValue('first_value', $errs);
validateValue('second_value', $errs);

print_r($errs); exit;
// ltrim($_POST['first_value'], '0');

if (isset($errs['first_value'])) 
{
    echo $errs['first_value'];
}
?>

<input 
class = "<?= isset($errs['first_value']) ? 'error' : 'succes'; ?>" 
name="first_value" />

