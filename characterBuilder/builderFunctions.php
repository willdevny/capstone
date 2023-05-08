<?php
session_start();

$_SESSION['race'] = 'Variant-Human';

if(isset($_POST['Submit'])){
    if($_POST['hidden'] == "race"){
        if($_POST['race']!= ""){
            $_SESSION['race'] = $_POST['race'];
            header("Location: class.php");
        }
    }
    else if($_POST['hidden'] == "job"){
        if($_POST['job']!= ""){
            $_SESSION['class'] = $_POST['job'];
            $_SESSION['skills'] = $_POST['skills'];
            if(isset($_POST['option1'])){
                $_SESSION['option1'] = $_POST['option1'];
            }
            if(isset($_POST['option2'])){
                $_SESSION['option2'] = $_POST['option2'];
            }
            if(isset($_POST['option3'])){
                $_SESSION['option3'] = $_POST['option3'];
            }
            if(isset($_POST['option4'])){
                $_SESSION['option4'] = $_POST['option4'];
            }
            if(isset($_POST['result'])){
                $_SESSION['result'] = $_POST['result'];
            }
            header("Location: abilities.php");
        }
    }
    else if($_POST['hidden'] == "stats"){
        if(($_POST['Strength']!= "")&&($_POST['Dexterity']!= "")&&($_POST['Wisdom']!= "")&&($_POST['Charisma']!= "")&&($_POST['Intelligence']!= "")&&($_POST['Constitution']!= "")){
            $_SESSION['Stats'] =[$_POST['Strength'], $_POST['Dexterity'], $_POST['Constitution'], $_POST['Intelligence'], $_POST['Wisdom'], $_POST['Charisma']];
            header("Location: spells.php");
        }
    }

}
else{
    return false;
}
?>