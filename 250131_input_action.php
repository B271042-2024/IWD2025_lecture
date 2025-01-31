<?php
if (isset($_POST['natmax']) && $_POST['natmax'] > 0){
    echo "Value set for natmax in the form = ".$_POST['natmax'];
} else{
    echo "There is no value submitted.";
}
?>
