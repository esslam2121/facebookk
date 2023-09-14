<?php
if ($_POST['First Name']=='Esslam' and $_POST['Last Name']=='mohamed' and $_POST['Country']=='egypt' and $_POST['password']=='123456'){
    header('location: index.html');
}else{
    header('location: error.html');
}
?>