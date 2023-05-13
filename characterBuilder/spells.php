<?php
require 'builderFunctions.php';
require 'spellbooks.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/chosen/1.8.7/chosen.css" integrity="sha512-0nkKORjFgcyxv3HbE4rzFUlENUMNqic/EzDIeYCgsKa/nwqr2B91Vu/tNAu4Q0cBuG4Xe/D1f/freEci/7GDRA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
<div>
    <?php 
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

        echo 'Pick '.$cantrips.' cantrips and '.$Spells.' 1st level spells.'
    ?>
</div>

<div>
    <form method="POST" id="Spells">
        <input type="hidden" name="hidden" value="Spells" form="Spells">
        <input type="Submit" name="Submit" value="Submit" form="Spells">
        <table>
                <tr>
                    <th>Level</th>
                    <th>Spell Name</th>
                    <th>School</th>
                    <th>Casting Time</th>
                    <th>Range</th>
                    <th>Duration</th>
                    <th>Components</th>
                    <th></th>
                </tr>
                <?php
                    $Spells = [];

                    if($_SESSION['class'] == 'Bard'){
                        $Spells = $bardSpells;
                    }
                    else if($_SESSION['class'] == 'Cleric'){
                        $spells = $clericSpells;
                    }
                    else if($_SESSION['class'] == 'Druid'){
                        $spells = $druidSpells;
                    }
                    else if($_SESSION['class'] == 'Sorcerer'){
                        $Spells = $sorcererSpells;
                    }
                    else if($_SESSION['class'] == 'Warlock'){
                        $Spells = $warlockSpells;
                    }
                    else if($_SESSION['class'] == 'Wizard'){
                        $Spells = $wizardSpells;
                    }
                    for($x = 0; $x <count($Spells); $x++){
                        $canOrLev = $Spells[$x][0];

                        $level = "<td>".$Spells[$x][0]."<td>";
                        $name = "<td>".$Spells[$x][1]."<td>";
                        $school = "<td>".$Spells[$x][2]."<td>";
                        $casttime = "<td>".$Spells[$x][3]."<td>";
                        $range = "<td>".$Spells[$x][4]."<td>";
                        $duration = "<td>".$Spells[$x][5]."<td>";
                        $components = "<td>".$Spells[$x][6]."<td>";


                        if($canOrLev == 'Cantrip'){
                            $button = "<td><input type='checkbox' name='cantripList[]' value='".$name."' form='Spells'></td>";
                        }
                        else{
                            $button = "<td><input type='checkbox' name='spellList[]' value='".$name."' form='Spells'></td>";
                        }
                        echo "<tr>".$level.$name.$school.$casttime.$range.$duration.$components.$button."</tr>";
                    };
                ?>
        </table>
    </form>
</div>
</body>
<script type="text/javascript">
</script>
</html>