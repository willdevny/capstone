<?php
if(isset($_POST['Submit'])){
    if($_POST['hidden'] == "race"){
        if($_POST['race']!= ""){
            $_SESSION['race'] = $_POST['race'];
            header("Location: class.php");
        }
    }
}
?>