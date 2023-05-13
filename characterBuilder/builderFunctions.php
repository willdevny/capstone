<?php
session_start();

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
            if($_SESSION['class'] == 'Bard' || 'Cleric' || 'Druid' || 'Sorcerer' || 'Warlock' || 'Wizard'){
                header("Location: spells.php");
            }
            else{
                header("Location: character-sheet.php");
            }
        }
    }
    else if($_POST['hidden'] == "Spells"){
        $cantrips = 0;
        $Spells = 0;

        if($_SESSION['class'] == 'Bard'){
            $cantrips = '2';
            $Spells = '4';
        }
        else if($_SESSION['class'] == 'Cleric'){
            $cantrips = '3';
        }
        else if($_SESSION['class'] == 'Druid'){
            $cantrips = '2';
        }
        else if($_SESSION['class'] == 'Sorcerer'){
            $cantrips = '4';
            $Spells = '2';
        }
        else if($_SESSION['class'] == 'Warlock'){
            $cantrips = '2';
            $Spells = '2';
        }
        else if($_SESSION['class'] == 'Wizard'){
            $cantrips = '3';
            $Spells = '6';
        }
        if(isset($_POST['cantripList'])){
            if(count($_POST['cantripList']) == $cantrips){
                $_SESSION['cantrips'] == $_POST['cantripList'];
                if(isset($_POST['spellList'])){
                    if(count($_POST['spellList']) == $Spells){
                        $_SESSION['spells'] == $_POST['spellList'];
                        header("Location: subclass.php");
                    }
                }
                else{
                    header("Location: subclass.php");
                }
            }    
        }    
    }
}
else{
    return false;
}
?>