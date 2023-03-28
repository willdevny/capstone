<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
<form method="POST" action="class.php">  
        <label for="job">Choose a class:</label>    
        <select name="job" id="job"  onchange="getJob()">
            <option value="">------</option>
            <option value="Barbarian">Barbarian</option>
            <option value="Bard">Bard</option>
            <option value="Cleric">Cleric</option>
            <option value="Druid">Druid</option>
            <option value="Fighter">Fighter</option>
            <option value="Monk">Monk</option>
            <option value="Paladin">Paladin</option>
            <option value="Ranger">Ranger</option>
            <option value="Rogue">Rogue</option>
            <option value="Sorcerer">Sorcerer</option> 
            <option value="Warlock">Warlock</option>
            <option value="Wizard">Wizard</option>
        </select>
        <p>Choose from starting equipment or roll for starting gold?</p>
        <label for="noroll">Choose equipment:</label>
        <input type="radio" id="noroll" name="gold" value="noroll" checked>
        <label for="roll">Roll for gold:</label>
        <input type="radio" id="roll" name="gold" value="roll">
        <input type="submit" name="job" value="Submit">
    </form>

    <p name="description" id="description"></p>
    
</body>
<script type="text/javascript">
    function rollGold(dice, multi){
        total = 0
        for(let i = 0; i< dice; i++){
            total += Math.floor(Math.random() * 4);
        }
        if(multi > 0){
            total*=multi
        }
        $('#result').append(total)
        $('#result').val(total)
    }
    function getJob(){
        alert($('#job').val())
        $("#description").html("");
        var job=$('#job').val();
        var roll=$('#gold').val();
        if(job == "Barbarian") {
            var $table = "\
            <table>\
                <tr>\
                    <th>Level</th>\
                    <th>Proficiency Bonus</th>\
                    <th>Features</th>\
                    <th>Rages</th>\
                    <th>Rage Damage</th>\
                </tr>\
                <tr>\
                    <td>1st</td>\
                    <td>+2</td>\
                    <td>Rage, Unarmored Defense</td>\
                    <td>2</td>\
                    <td>+2</td></tr>\
                <tr>\
                    <td>2nd</td>\
                    <td>+2</td>\
                    <td>Reckless Attack, Danger Sense</td>\
                    <td>2</td>\
                    <td>+2</td>\
                </tr>\
                <tr>\
                    <td>3rd</td>\
                    <td>+2</td>\
                    <td>Primal Path, <em>Primal Knowledge (Optional)</em></td>\
                    <td>3</td>\
                    <td>+2</td>\
                </tr>\
                <tr>\
                    <td>4th</td>\
                    <td>+2</td>\
                    <td>Ability Score Improvement</td>\
                    <td>3</td>\
                    <td>+2</td>\
                </tr>\
                <tr>\
                    <td>5th</td>\
                    <td>+3</td>\
                    <td>Extra Attack, Fast Movement</td>\
                    <td>3</td>\
                    <td>+2</td>\
                </tr>\
                <tr>\
                    <td>6th</td>\
                    <td>+3</td>\
                    <td>Path feature</td>\
                    <td>4</td>\
                    <td>+2</td>\
                </tr>\
                <tr>\
                    <td>7th</td>\
                    <td>+3</td>\
                    <td>Feral Instinct, <em>Instinctive Pounce (Optional)</em></td>\
                    <td>4</td>\
                    <td>+2</td>\
                </tr>\
                <tr>\
                    <td>8th</td>\
                    <td>+3</td>\
                    <td>Ability Score Improvement</td>\
                    <td>4</td>\
                    <td>+2</td>\
                </tr>\
                <tr>\
                    <td>9th</td>\
                    <td>+4</td>\
                    <td>Brutal Critical (1 die)</td>\
                    <td>4</td>\
                    <td>+3</td>\
                </tr>\
                <tr>\
                    <td>10th</td>\
                    <td>+4</td>\
                    <td>Path feature, <em>Primal Knowledge (Optional)</em></td>\
                    <td>4</td>\
                    <td>+3</td>\
                </tr>\
                <tr>\
                    <td>11th</td>\
                    <td>+4</td>\
                    <td>Relentless Rage</td>\
                    <td>4</td>\
                    <td>+3</td>\
                </tr>\
                <tr>\
                    <td>12th</td>\
                    <td>+4</td>\
                    <td>Ability Score Improvement</td>\
                    <td>5</td>\
                    <td>+3</td>\
                </tr>\
                <tr>\
                    <td>13th</td>\
                    <td>+5</td>\
                    <td>Brutal Critical (2 dice)</td>\
                    <td>5</td>\
                    <td>+3</td>\
                </tr>\
                <tr>\
                    <td>14th</td>\
                    <td>+5</td>\
                    <td>Path feature</td>\
                    <td>5</td>\
                    <td>+3</td>\
                </tr>\
                <tr>\
                    <td>15th</td>\
                    <td>+5</td>\
                    <td>Persistent Rage</td>\
                    <td>5</td>\
                    <td>+3</td>\
                </tr>\
                <tr>\
                    <td>16th</td>\
                    <td>+5</td>\
                    <td>Ability Score Improvement</td>\
                    <td>5</td>\
                    <td>+4</td>\
                </tr>\
                <tr>\
                    <td>17th</td>\
                    <td>+6</td>\
                    <td>Brutal Critical (3 dice)</td>\
                    <td>6</td>\
                    <td>+4</td>\
                </tr>\
                <tr>\
                    <td>18th</td>\
                    <td>+6</td>\
                    <td>Indomitable Might</td>\
                    <td>6</td>\
                    <td>+4</td>\
                </tr>\
                <tr>\
                    <td>19th</td>\
                    <td>+6</td>\
                    <td>Ability Score Improvement</td>\
                    <td>6</td>\
                    <td>+4</td>\
                </tr>\
                <tr>\
                    <td>20th</td>\
                    <td>+6</td>\
                    <td>Primal Champion</td>\
                    <td>Unlimited</td>\
                    <td>+4</td>\
                </tr>\
            </table>\
            ";
            var $desc = "\
                For some, their rage springs from a communion with fierce animal spirits.\
                Others draw from a roiling reservoir of anger at a world full of pain.\
                For every barbarian, rage is a power that fuels not just a battle frenzy but also uncanny reflexes, resilience, and feats of strength.\
            ";
            var $p = $("<p>"+$desc+"</p>");
            var $form = '<form id="jobStuff" method="POST" action="job.php">'
            var $hp = "<h2>Hit points</h2>\
                        <ul>\
                        <li><b>Hit Dice:</b>1d12 per barbarian level</li>\
                        <li><b>Hit Points at 1st Level:</b>12 + your Constitution modifier</li>\
                        <li><b>Hit Points at Higher Levels:</b> 1d12 (or 7) + your Constitution modifier per barbarian level after 1st</li>\
                        </ul>\
            ";
            var $prof = "<h2>Proficiencies</h2>\
                        <ul>\
                        <li><b>Armour:</b>Light armor, medium armor, shields</li>\
                        <li><b>Weapons:</b>Simple weapons, martial weapons</li>\
                        <li><b>Tools:</b>None</li>\
                        <li><b>Saving Throws:</b>Strength and Constitution</li>\
                        <li><b>Skills:</b>Choose two from Animal Handling, Athletics, Intimidation, Nature, Perception, and Survival</li>\
                        </ul>\
            ";
            if(roll == "noroll"){
                var $equip = '<h2>Equipment</h2>\
                        <p>You start with the following eqiupment, in addition to the equipment granted by your background:</p>\
                        <ul>\
                        <li><select name="weapon" id="weapon" form="jobStuff">\
                        </select></li>\
                        </form>\
                        <form method="POST" action="job.php">\
                        <li><select name="sideweapon" id="sideweapon">\
                        </select></li>\
                        <li>An explorer pack and 4 javelins\
                        </ul>\
            ';
            }
            else{
                var $equip = '<p>roll 2d4 x 10 to find your starting gold:</p>\
                        <input name="result" id="result" readonly="readonly"></input>\
                        <button onclick="rollGold(2, 10)">\
                '
            }
            var $feats = "<h2>Rage</h2>\
                        <p>In battle, you fight with primal ferocity. On your turn, you can enter a rage as a bonus action.</p>\
                        <p>While raging, you gain the following benefits if you aren't wearing heavy armor:</p>\
                        <ul>\
                        <li>You have advantage on Strength checks and Strength saving throws.</li>\
                        <li>When you make a melee weapon attack using Strength, you gain a bonus to the damage roll that increases as you gain levels as a barbarian, as shown in the Rage Damage column of the Barbarian table.</li>\
                        <li>You have resistance to bludgeoning, piercing, and slashing damage.</li>\
                        <p>If you are able to cast spells, you can't cast them or concentrate on them while raging.</p>\
                        <p>Your rage lasts for 1 minute. It ends early if you are knocked unconscious or if your turn ends and you haven't attacked a hostile creature since your last turn or taken damage since then. You can also end your rage on your turn as a bonus action.</p>\
                        <pOnce you have raged the number of times shown for your barbarian level in the Rages column of the Barbarian table, you must finish a long rest before you can rage again.</p>\
                        </ul>\
                        <h2>Unarmored Defense<h2>\
                        <p>While you are not wearing any armor, your armor job equals 10 + your Dexterity modifier + your Constitution modifier. You can use a shield and still gain this benefit.</p>\
            ";
            var $final = $table.append($p);
            $final.append($hp);
            $final.append($ul)

            $("#description").append($final);
        }
    }
</script>
</html>