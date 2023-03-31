<?php
session_start();
require 'builderFunctions.php';
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
        <label for="job">Choose a class:</label>    
        <select name="job" id="job" onchange="getJob()">  
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
        <input type="radio" id="noroll" name="gold" onchange="getJob()" checked>
        <label for="roll">Roll for gold:</label>
        <input type="radio" id="roll" name="gold" onchange="getJob()">
    <form method="POST" action="class.php" name="jobstuff" id="jobstuff">
    <input type="submit" name="job" value="Submit"  form="jobstuff">
    <div name="description" id="description"></div>
    
</body>
<script type="text/javascript">
    function rollGold(dice, multi){
        total = 0
        for(let i = 0; i< dice; i++){
            total += Math.floor(Math.random() * 4);
        };
        if(multi > 0){
            total*=multi
        };
        $('#result').append(total);
        $('#result').val(total);
    }
    function getJob(){
        $("#description").html("");
        var job=$('#job').val();
        if(job == "Barbarian"){
            var $table = "<table>\
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
                    <td>Primal Path, Primal Knowledge (Optional)</td>\
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
                    <td>Feral Instinct, Instinctive Pounce (Optional)</td>\
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
                    <td>Path feature, Primal Knowledge (Optional)</td>\
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
                </table>";
            var $desc = "<p>\
                For some, their rage springs from a communion with fierce animal spirits.\
                Others draw from a roiling reservoir of anger at a world full of pain.\
                For every barbarian, rage is a power that fuels not just a battle frenzy but also uncanny reflexes, resilience, and feats of strength.</p>";
            var $hp = "<h2>Hit points</h2>\
                        <ul>\
                        <li><b>Hit Dice:</b>1d12 per barbarian level</li>\
                        <li><b>Hit Points at 1st Level:</b>12 + your Constitution modifier</li>\
                        <li><b>Hit Points at Higher Levels:</b> 1d12 (or 7) + your Constitution modifier per barbarian level after 1st</li>\
                        </ul>";
            var $prof = "<h2>Proficiencies</h2>\
                        <ul>\
                        <li><b>Armour:</b>Light armor, medium armor, shields</li>\
                        <li><b>Weapons:</b>Simple weapons, martial weapons</li>\
                        <li><b>Tools:</b>None</li>\
                        <li><b>Saving Throws:</b>Strength and Constitution</li>\
                        <li><b>Skills:</b>Choose two from this list:\
                        <select name='skills' id='skills' multiple form='jobStuff'>\
                        <option value='animalHandling'>Animal Handling</option>\
                        <option value='athletics'>Athletics</option>\
                        <option value='intimidation'>Intimidation</option>\
                        <option value='natue'>Nature</option>\
                        <option value='perception'>Perception</option>\
                        <option value='survival'>Survival</option>\
                        </li></select></ul>";
            var $noroll = '<h2>Equipment</h2>\
                        <p>You start with the following equipment, in addition to the equipment granted by your background:</p>\
                        <ul>\
                        <li><select name="option1" id="option1" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="battleaxe">Battleaxe - 1d8 slashing - Versatile(1d10)</option>\
                        <option value="flail">Flail - 1d8 bludgeoning - </option>\
                        <option value="glaive">Glaive - 1d10 slashing - Heavy, Reach, Two-Handed</option>\
                        <option value="greataxe">Greataxe - 1d12 slashing - Heavy, Two-Handed</option>\
                        <option value="greatsword">Greatsword - 2d6 slashing - Heavy, Two-Handed</option>\
                        <option value="halberd">Halberd - 1d10 slashing - Heavy, Reach, Two-Handed</option>\
                        <option value="lance">Lance - 1d12 piercing - Reach, Special</option>\
                        <option value="longsword">Longsword - 1d8 slashing - Versatile(1d10)</option>\
                        <option value="maul">Maul - 2d6 bludgeoning - Heavy, Two-Handed</option>\
                        <option value="morningstar">Morningstar - 1d8 piercing - </option>\
                        <option value="pike">Pike - 1d10 piercing - Heavy, Reach, Two-Handed</option>\
                        <option value="rapier">Rapier - 1d8 piercing - Finesse</option>\
                        <option value="scimitar">Scimitar - 1d6 slashing - Finesse, Light</option>\
                        <option value="shortsword">Shortsword - 1d6 piercing - Finesse, Light</option>\
                        <option value="trident">Trident - 1d6 piercing - Thrown(20/60), Versatile(1d8)</option>\
                        <option value="warpick">Warpick - 1d8 piercing - </option>\
                        <option value="warhammer">Warhammer - 1d8 bludgeoning - Versatile(1d10)</option>\
                        <option value="whip">Whip - 1d4 slashing - Finesse, Reach</option>\
                        </select></li>\
                        <li><select name="option2" id="option2" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="club">Club - 1d4 bludgeoning - Light</option>\
                        <option value="2handaxes">2 Handaxes - 1d6 slashing - Light, Thrown (20/60)</option>\
                        <option value="dagger">Dagger - 1d4 piercing - Finesse, Light, Thrown (20/60)</option>\
                        <option value="greatclub">Greatclub - 1d8 bludgeoning - Two-Handed</option>\
                        <option value="javelin">Javelin - 1d6 piercing - Thrown (30/120)</option>\
                        <option value="lightHammer">Light Hammer - 1d6 bludgeoning - Light, Thrown (20/60)</option>\
                        <option value="mace">Mace - 1d6 bludgeoning - </option>\
                        <option value="quarterstaff">Quarterstaff - 1d6 bludgeoning - Versatile(1d8)</option>\
                        <option value="sickle">Sickle - 1d4 slashing - Light</option>\
                        <option value="spear">Spear - 1d6 piercing - Thrown(20/60), Versatile(1d8)</option>\
                        <option value="lightCross">Light Crossbow - 1d8 piercing - Ammunition, Range(80/320), Loading, Two-Handed</option>\
                        <option value="dart">Dart - 1d4 piercing - Finesse, Thrown(20/60)</option>\
                        <option value="shortbow">Shortbow - 1d6 piercing - Ammunition, Range(80/320), Two-Handed</option>\
                        <option value="sling">Sling - 1d4 piercing - Ammunition, Range(30/120)</option>\
                        </select></li>\
                        <li>An explorer pack and four javelins</li>\
                        </ul>';
            var $roll = '<p>roll 2d4 x 10 to find your starting gold:</p>\
                        <input name="result" id="result" readonly="readonly" form="jobstuff"></input>\
                        <button type = "button" onclick="rollGold(2, 10)">ROLL</button>'
            var $feats = "<h2>Rage</h2>\
                        <p>In battle, you fight with primal ferocity. On your turn, you can enter a rage as a bonus action.</p>\
                        <p>While raging, you gain the following benefits if you aren't wearing heavy armor:</p>\
                        <p>If you are able to cast spells, you can't cast them or concentrate on them while raging.</p>\
                        <p>Your rage lasts for 1 minute. It ends early if you are knocked unconscious or if your turn ends and you haven't attacked a hostile creature since your last turn or taken damage since then. You can also end your rage on your turn as a bonus action.</p>\
                        <p>Once you have raged the number of times shown for your barbarian level in the Rages column of the Barbarian table, you must finish a long rest before you can rage again.</p>\
                        <ul>\
                        <li>You have advantage on Strength checks and Strength saving throws.</li>\
                        <li>When you make a melee weapon attack using Strength, you gain a bonus to the damage roll that increases as you gain levels as a barbarian, as shown in the Rage Damage column of the Barbarian table.</li>\
                        <li>You have resistance to bludgeoning, piercing, and slashing damage.</li>\
                        </ul>\
                        <h2>Unarmored Defense</h2>\
                        <p>While you are not wearing any armor, your armor job equals 10 + your Dexterity modifier + your Constitution modifier. You can use a shield and still gain this benefit.</p>";
            if($('#roll').is(':checked')){
                $("#description").append($table + $desc + $hp + $prof + $roll + $feats);
            }
            else if($('#noroll').is(':checked')){
                $("#description").append($table + $desc + $hp + $prof + $noroll + $feats);
            }
            $("#skills").chosen({max_selected_options: 2});
        }
        else if(job == "Bard"){
            var $table = "<table>\
                <tr>\
                    <th>Level</th>\
                    <th>Proficiency Bonus</th>\
                    <th>Features</th>\
                    <th>Cantrips Known</th>\
                    <th>Spells Known</th>\
                    <th>1st</th>\
                    <th>2nd</th>\
                    <th>3rd</th>\
                    <th>4th</th>\
                    <th>5th</th>\
                    <th>6th</th>\
                    <th>7th</th>\
                    <th>8th</th>\
                    <th>9th</th>\
                </tr>\
                <tr>\
                    <td>1st</td>\
                    <td>+2</td>\
                    <td>Spellcasting, Bardic Inspiration (d6)</td>\
                    <td>2</td>\
                    <td>4</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                <tr>\
                    <td>2nd</td>\
                    <td>+2</td>\
                    <td>Jack of All Trades, Song of Rest (d6), Magical Inspiration (Optional)</td>\
                    <td>2</td>\
                    <td>5</td>\
                    <td>3</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>3rd</td>\
                    <td>+2</td>\
                    <td>Bard College, Expertise</em></td>\
                    <td>2</td>\
                    <td>6</td>\
                    <td>4</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>4th</td>\
                    <td>+2</td>\
                    <td>Ability Score Improvement, Bardic Versatility (Optional)</td>\
                    <td>3</td>\
                    <td>7</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>5th</td>\
                    <td>+3</td>\
                    <td>Bardic Inspiration (d8), Font of Inspiration</td>\
                    <td>3</td>\
                    <td>8</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>6th</td>\
                    <td>+3</td>\
                    <td>Countercharm, Bard College feature</td>\
                    <td>3</td>\
                    <td>9</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>7th</td>\
                    <td>+3</td>\
                    <td></td>\
                    <td>3</td>\
                    <td>10</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>1</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>8th</td>\
                    <td>+3</td>\
                    <td>Ability Score Improvement, Bardic Versatility (Optional)</td>\
                    <td>3</td>\
                    <td>11</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>9th</td>\
                    <td>+4</td>\
                    <td>Song of Rest (d8)</td>\
                    <td>3</td>\
                    <td>12</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>1</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>10th</td>\
                    <td>+4</td>\
                    <td>Bardic Inspiration (d10), Expertise, Magical Secrets</td>\
                    <td>4</td>\
                    <td>14</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>11th</td>\
                    <td>+4</td>\
                    <td></td>\
                    <td>4</td>\
                    <td>15</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>12th</td>\
                    <td>+4</td>\
                    <td>Ability Score Improvement, Bardic Versatility (Optional)</td>\
                    <td>4</td>\
                    <td>15</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>13th</td>\
                    <td>+5</td>\
                    <td>Song of Rest (d10)</td>\
                    <td>4</td>\
                    <td>16</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>14th</td>\
                    <td>+5</td>\
                    <td>Magical Secrets, Bard College feature</td>\
                    <td>4</td>\
                    <td>18</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>15th</td>\
                    <td>+5</td>\
                    <td>Bardic Inspiration (d12)</td>\
                    <td>4</td>\
                    <td>19</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>16th</td>\
                    <td>+5</td>\
                    <td>Ability Score Improvement, Bardic Versatility (Optional)</td>\
                    <td>4</td>\
                    <td>19</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>17th</td>\
                    <td>+6</td>\
                    <td>Song of Rest (d12)</td>\
                    <td>4</td>\
                    <td>20</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>1</td>\
                </tr>\
                <tr>\
                    <td>18th</td>\
                    <td>+6</td>\
                    <td>Magical Secrets</td>\
                    <td>4</td>\
                    <td>22</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>1</td>\
                </tr>\
                <tr>\
                    <td>19th</td>\
                    <td>+6</td>\
                    <td>Ability Score Improvement, Bardic Versatility (Optional)</td>\
                    <td>4</td>\
                    <td>22</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>1</td>\
                </tr>\
                <tr>\
                    <td>20th</td>\
                    <td>+6</td>\
                    <td>Superior Inspiration</td>\
                    <td>4</td>\
                    <td>22</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>1</td>\
                </tr>\
                </table>";
            var $desc = "<p>\
                Whether scholar, skald, or scoundrel, a bard weaves magic through words and music to inspire allies, demoralize foes, manipulate minds, create illusions, and even heal wounds.\
                The bard is a master of song, speech, and the magic they contain.</p>";
            var $hp = "<h2>Hit points</h2>\
                        <ul>\
                        <li><b>Hit Dice:</b>1d8 per bard level</li>\
                        <li><b>Hit Points at 1st Level:</b>8 + your Constitution modifier</li>\
                        <li><b>Hit Points at Higher Levels:</b> 1d8 (or 5) + your Constitution modifier per bard level after 1st</li>\
                        </ul>";
            var $prof = "<h2>Proficiencies</h2>\
                        <ul>\
                        <li><b>Armour:</b>Light armor</li>\
                        <li><b>Weapons:</b>Simple weapons, hand crossbows, longswords, rapiers, shortswords</li>\
                        <li><b>Tools:</b> Three musical instruments of your choice</li>\
                        <li><b>Saving Throws:</b>Dexterity and Charisma</li>\
                        <li><b>Skills:</b>Choose three from this list:\
                        <select name='skills' id='skills' multiple form='jobStuff'>\
                        <option value='acrobatics'>Acrobatics</option>\
                        <option value='animalHandling'>Animal Handling</option>\
                        <option value='arcana'>Arcana</option>\
                        <option value='athletics'>Athletics</option>\
                        <option value='deception'>Deception</option>\
                        <option value='history'>History</option>\
                        <option value='insight'>Insight</option>\
                        <option value='intimidation'>Intimidation</option>\
                        <option value='investigation'>Investigation</option>\
                        <option value='medicine'>Medicine</option>\
                        <option value='natue'>Nature</option>\
                        <option value='perception'>Perception</option>\
                        <option value='performance'>Performance</option>\
                        <option value='persuasion'>Persuasion</option>\
                        <option value='religion'>Religion</option>\
                        <option value='sleightOfHand'>Sleight of Hand</option>\
                        <option value='stealth'>Stealth</option>\
                        <option value='survival'>Survival</option>\
                        </li></select></ul>";
            var $noroll = '<h2>Equipment</h2>\
                        <p>You start with the following equipment, in addition to the equipment granted by your background:</p>\
                        <ul>\
                        <li><select name="option1" id="option1" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="longsword">Longsword - 1d8 slashing - Versatile(1d10)</option>\
                        <option value="rapier">Rapier - 1d8 piercing - Finesse</option>\
                        <option value="club">Club - 1d4 bludgeoning - Light</option>\
                        <option value="2handaxes">2 Handaxes - 1d6 slashing - Light, Thrown (20/60)</option>\
                        <option value="dagger">Dagger - 1d4 piercing - Finesse, Light, Thrown (20/60)</option>\
                        <option value="greatclub">Greatclub - 1d8 bludgeoning - Two-Handed</option>\
                        <option value="javelin">Javelin - 1d6 piercing - Thrown (30/120)</option>\
                        <option value="lightHammer">Light Hammer - 1d6 bludgeoning - Light, Thrown (20/60)</option>\
                        <option value="mace">Mace - 1d6 bludgeoning - </option>\
                        <option value="quarterstaff">Quarterstaff - 1d6 bludgeoning - Versatile(1d8)</option>\
                        <option value="sickle">Sickle - 1d4 slashing - Light</option>\
                        <option value="spear">Spear - 1d6 piercing - Thrown(20/60), Versatile(1d8)</option>\
                        <option value="lightCross">Light Crossbow - 1d8 piercing - Ammunition, Range(80/320), Loading, Two-Handed</option>\
                        <option value="dart">Dart - 1d4 piercing - Finesse, Thrown(20/60)</option>\
                        <option value="shortbow">Shortbow - 1d6 piercing - Ammunition, Range(80/320), Two-Handed</option>\
                        <option value="sling">Sling - 1d4 piercing - Ammunition, Range(30/120)</option>\
                        </select></li>\
                        <li><select name="option2" id="option2" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="diplomat">diplomat pack</option>\
                        <option value="entertainer">entertainer pack</option>\
                        </select></li>\
                        <li>Any musical instrument, Leather Armor and a Dagger</li>\
                        </ul>';
            var $roll = '<p>roll 5d4 x 10 to find your starting gold:</p>\
                        <input name="result" id="result" readonly="readonly" form="jobstuff"></input>\
                        <button type = "button" onclick="rollGold(5, 10)">ROLL</button>'
            var $feats = "<h1>Spellcasting</h1>\
                        <p>You have learned to untangle and reshape the fabric of reality in harmony with your wishes and music. Your spells are part of your vast repertoire, magic that you can tune to different situations.</p>\
                        <h1>cantrips</h1>\
                        <p>You know two cantrips of your choice from the bard spell list. You learn additional bard cantrips of your choice at higher levels, as shown in the Cantrips Known column of the Bard table.</p>\
                        <h1>Spell Slots</h1>\
                        <p>The Bard table shows how many spell slots you have to cast your bard spells of 1st level and higher. To cast one of these spells, you must expend a slot of the spell's level or higher. You regain all expended spell slots when you finish a long rest. For example, if you know the 1st-level spell Cure Wounds and have a 1st-level and a 2nd-level spell slot available, you can cast Cure Wounds using either slot.</p>\
                        <h1>Spells Known of 1st Level and Higher</h1>\
                        <p>You know four 1st-level spells of your choice from the bard spell list.</p>\
                        <p>The Spells Known column of the Bard table shows when you learn more bard spells of your choice. Each of these spells must be of a level for which you have spell slots, as shown on the table. For instance, when you reach 3rd level in this class, you can learn one new spell of 1st or 2nd level.</p>\
                        <p>Additionally, when you gain a level in this class, you can choose one of the bard spells you know and replace it with another spell from the bard spell list, which also must be of a level for which you have spell slots.</p>\
                        <h1>Spellcasting Ability</h1>\
                        <p>Charisma is your spellcasting ability for your bard spells. Your magic comes from the heart and soul you pour into the performance of your music or oration. You use your Charisma whenever a spell refers to your spellcasting ability. In addition, you use your Charisma modifier when setting the saving throw DC for a bard spell you cast and when making an attack roll with one.</p>\
                        <p><b>Spell save DC</b> = 8 + your proficiency bonus + your Charisma modifier</p>\
                        <p><b>Spell attack modifier</b> = your proficiency bonus + your Charisma modifier</p>\
                        <h1>Ritual Casting</h1>\
                        <p>You can cast any bard spell you know as a ritual if that spell has the ritual tag.</p>\
                        <h1>Spellcasting Focus</h1>\
                        <p>You can use a musical instrument (found in chapter 5) as a spellcasting focus for your bard spells.</p>\
                        <h1>Bardic Inspiration</h1>\
                        <p>You can inspire others through stirring words or music. To do so, you use a bonus action on your turn to choose one creature other than yourself within 60 feet of you who can hear you. That creature gains one Bardic Inspiration die, a d6.</p>\
                        <p>Once within the next 10 minutes, the creature can roll the die and add the number rolled to one ability check, attack roll, or saving throw it makes. The creature can wait until after it rolls the d20 before deciding to use the Bardic Inspiration die, but must decide before the DM says whether the roll succeeds or fails. Once the Bardic Inspiration die is rolled, it is lost. A creature can have only one Bardic Inspiration die at a time.</p>\
                        <p>You can use this feature a number of times equal to your Charisma modifier (a minimum of once). You regain any expended uses when you finish a long rest.</p>\
                        <p>Your Bardic Inspiration die changes when you reach certain levels in this class. The die becomes a d8 at 5th level, a d10 at 10th level, and a d12 at 15th level.</p>"
            if($('#roll').is(':checked')){
                $("#description").append($table + $desc + $hp + $prof + $roll + $feats);
            }
            else if($('#noroll').is(':checked')){
                $("#description").append($table + $desc + $hp + $prof + $noroll + $feats);
            }
            $("#skills").chosen({max_selected_options: 3});
        }
        else if(job == "Cleric"){
            var $table = "<table>\
                <tr>\
                    <th>Level</th>\
                    <th>Proficiency Bonus</th>\
                    <th>Features</th>\
                    <th>Cantrips Known</th>\
                    <th>1st</th>\
                    <th>2nd</th>\
                    <th>3rd</th>\
                    <th>4th</th>\
                    <th>5th</th>\
                    <th>6th</th>\
                    <th>7th</th>\
                    <th>8th</th>\
                    <th>9th</th>\
                </tr>\
                <tr>\
                    <td>1st</td>\
                    <td>+2</td>\
                    <td>Spellcasting, Divine Domain</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                <tr>\
                    <td>2nd</td>\
                    <td>+2</td>\
                    <td>Channel Divinity (x1), Divine Domain feature, Harness Divine Power (Optional)</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>3rd</td>\
                    <td>+2</td>\
                    <td></td>\
                    <td>3</td>\
                    <td>4</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>4th</td>\
                    <td>+2</td>\
                    <td>Ability Score Improvement, Cantrip Versatility (Optional)</td>\
                    <td>4</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>5th</td>\
                    <td>+3</td>\
                    <td>Destroy Undead (CR 1/2)</td>\
                    <td>4</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>6th</td>\
                    <td>+3</td>\
                    <td>Channel Divinity (x2), Divine Domain feature</td>\
                    <td>4</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>7th</td>\
                    <td>+3</td>\
                    <td></td>\
                    <td>4</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>1</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>8th</td>\
                    <td>+3</td>\
                    <td>Ability Score Improvement, Destroy Undead (CR 1), Divine Domain feature, Cantrip Versatility (Optional)</td>\
                    <td>4</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>9th</td>\
                    <td>+4</td>\
                    <td></td>\
                    <td>4</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>1</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>10th</td>\
                    <td>+4</td>\
                    <td>Divine Intervention</td>\
                    <td>5</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>11th</td>\
                    <td>+4</td>\
                    <td>Destroy Undead (CR 2)</td>\
                    <td>5</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>12th</td>\
                    <td>+4</td>\
                    <td>Ability Score Improvement, Cantrip Versatility (Optional)</td>\
                    <td>5</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>13th</td>\
                    <td>+5</td>\
                    <td></td>\
                    <td>5</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>14th</td>\
                    <td>+5</td>\
                    <td>Destroy Undead (CR 3)</td>\
                    <td>5</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>15th</td>\
                    <td>+5</td>\
                    <td></td>\
                    <td>5</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>16th</td>\
                    <td>+5</td>\
                    <td>Ability Score Improvement, Cantrip Versatility (Optional)</td>\
                    <td>5</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>17th</td>\
                    <td>+6</td>\
                    <td>Destroy Undead (CR 4), Divine Domain feature</td>\
                    <td>5</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>1</td>\
                </tr>\
                <tr>\
                    <td>18th</td>\
                    <td>+6</td>\
                    <td>Channel Divinity (x3)</td>\
                    <td>5</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>1</td>\
                </tr>\
                <tr>\
                    <td>19th</td>\
                    <td>+6</td>\
                    <td>Ability Score Improvement, Cantrip Versatility (Optional)</td>\
                    <td>5</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>1</td>\
                </tr>\
                <tr>\
                    <td>20th</td>\
                    <td>+6</td>\
                    <td>Divine Intervention improvement</td>\
                    <td>5</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>1</td>\
                </tr>\
                </table>";
            var $desc = "<p>\
                Clerics are intermediaries between the mortal world and the distant planes of the gods.\
                As varied as the gods they serve, clerics strive to embody the handiwork of their deities.\
                No ordinary priest, a cleric is imbued with divine magic.</p>";
            var $hp = "<h2>Hit points</h2>\
                        <ul>\
                        <li><b>Hit Dice:</b>1d8 per cleric level</li>\
                        <li><b>Hit Points at 1st Level:</b>8 + your Constitution modifier</li>\
                        <li><b>Hit Points at Higher Levels:</b> 1d8 (or 5) + your Constitution modifier per cleric level after 1st</li>\
                        </ul>";
            var $prof = "<h2>Proficiencies</h2>\
                        <ul>\
                        <li><b>Armour:</b>Light Armor, Medium Armor, Shields</li>\
                        <li><b>Weapons:</b>Simple weapons</li>\
                        <li><b>Tools:</b>None</li>\
                        <li><b>Saving Throws:</b>Wisdom and Charisma</li>\
                        <li><b>Skills:</b>Choose two from this list:\
                        <select name='skills' id='skills' multiple form='jobStuff'>\
                        <option value='history'>History</option>\
                        <option value='insight'>Insight</option>\
                        <option value='medicine'>Medicine</option>\
                        <option value='persuasion'>Persuasion</option>\
                        <option value='religion'>Religion</option>\
                        </li></select></ul>";
            var $noroll = '<h2>Equipment</h2>\
                        <p>You start with the following equipment, in addition to the equipment granted by your background:</p>\
                        <ul>\
                        <li><select name="option1" id="option1" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="mace">Mace - 1d6 bludgeoning - </option>\
                        <option value="warhammer">Warhammer - 1d8 bludgeoning - Versatile(1d10)</option>\
                        </select></li>\
                        <li><select name="option2" id="option2" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="scaleMail">Scale Mail - AC 14 + Dex modifier(max 2)</option>\
                        <option value="leatherArmour">Leather Armour - AC 11 + Dex modifier</option>\
                        <option value="chainMail">Chain Mail- AC 16</option>\
                        </select></li>\
                        <li><select name="option3" id="option3" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="crossbowBolt">Light Crossbow and 20 bolts - 1d8 piercing - Ammunition, Range(80/320), Loading, Two-Handed</option>\
                        <option value="club">Club - 1d4 bludgeoning - Light</option>\
                        <option value="2handaxes">2 Handaxes - 1d6 slashing - Light, Thrown (20/60)</option>\
                        <option value="dagger">Dagger - 1d4 piercing - Finesse, Light, Thrown (20/60)</option>\
                        <option value="greatclub">Greatclub - 1d8 bludgeoning - Two-Handed</option>\
                        <option value="javelin">Javelin - 1d6 piercing - Thrown (30/120)</option>\
                        <option value="lightHammer">Light Hammer - 1d6 bludgeoning - Light, Thrown (20/60)</option>\
                        <option value="mace">Mace - 1d6 bludgeoning - </option>\
                        <option value="quarterstaff">Quarterstaff - 1d6 bludgeoning - Versatile(1d8)</option>\
                        <option value="sickle">Sickle - 1d4 slashing - Light</option>\
                        <option value="spear">Spear - 1d6 piercing - Thrown(20/60), Versatile(1d8)</option>\
                        <option value="dart">Dart - 1d4 piercing - Finesse, Thrown(20/60)</option>\
                        <option value="shortbow">Shortbow - 1d6 piercing - Ammunition, Range(80/320), Two-Handed</option>\
                        <option value="sling">Sling - 1d4 piercing - Ammunition, Range(30/120)</option>\
                        </select></li>\
                        <li><select name="option2" id="option2" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="priest">priest pack</option>\
                        <option value="explorer">explorer pack</option>\
                        </select></li>\
                        <li>A Shield and a Holy Symbol</li>\
                        </ul>';
            var $roll = '<p>roll 5d4 x 10 to find your starting gold:</p>\
                        <input name="result" id="result" readonly="readonly" form="jobstuff"></input>\
                        <button type = "button" onclick="rollGold(5, 10)">ROLL</button>'
            var $feats = "<h1>Spellcasting</h1>\
                        <p>As a conduit for divine power, you can cast cleric spells.</p>\
                        <h1>cantrips</h1>\
                        <p>At 1st level, you know three cantrips of your choice from the cleric spell list. You learn additional cleric cantrips of your choice at higher levels, as shown in the Cantrips Known column of the Cleric table.</p>\
                        <h1>Spell Slots</h1>\
                        <p>The Cleric table shows how many spell slots you have to cast your cleric spells of 1st level and higher. To cast one of these spells, you must expend a slot of the spell's level or higher. You regain all expended spell slots when you finish a long rest.</p>\
                        <p>You prepare the list of cleric spells that are available for you to cast, choosing from the cleric spell list. When you do so, choose a number of cleric spells equal to your Wisdom modifier + your cleric level (minimum of one spell). The spells must be of a level for which you have spell slots.</p>\
                        <p>For example, if you are a 3rd-level cleric, you have four 1st-level and two 2nd-level spell slots. With a Wisdom of 16, your list of prepared spells can include six spells of 1st or 2nd level, in any combination. If you prepare the 1st-level spell Cure Wounds, you can cast it using a 1st-level or 2nd-level slot. Casting the spell doesn't remove it from your list of prepared spells.</p>\
                        <p>You can change your list of prepared spells when you finish a long rest. Preparing a new list of cleric spells requires time spent in prayer and meditation: at least 1 minute per spell level for each spell on your list.</p>\
                        <h1>Spellcasting Ability</h1>\
                        <p>Wisdom is your spellcasting ability for your cleric spells. The power of your spells comes from your devotion to your deity. You use your Wisdom whenever a cleric spell refers to your spellcasting ability. In addition, you use your Wisdom modifier when setting the saving throw DC for a cleric spell you cast and when making an attack roll with one.</p>\
                        <p><b>Spell save DC</b> = 8 + your proficiency bonus + your Wisdom modifier</p>\
                        <p><b>Spell attack modifier</b> = your proficiency bonus + your Wisdom modifier</p>\
                        <h1>Ritual Casting</h1>\
                        <p>You can cast a cleric spell as a ritual if that spell has the ritual tag and you have the spell prepared.</p>\
                        <h1>Spellcasting Focus</h1>\
                        <p>You can use a holy symbol as a spellcasting focus for your cleric spells.</p>\
                        <h1>Divine Domain</h1>\
                        <p>At 1st level, you choose a domain shaped by your choice of Deity and the gifts they grant you. Your choice grants you domain spells and other features when you choose it at 1st level. It also grants you additional ways to use Channel Divinity when you gain that feature at 2nd level, and additional benefits at 6th, 8th, and 17th levels.</p>\
                        <h1>Domain Spells</h1>\
                        <p>Each domain has a list of spells-its domain spells that you gain at the cleric levels noted in the domain description. Once you gain a domain spell, you always have it prepared, and it doesn't count against the number of spells you can prepare each day.</p>\
                        <p>If you have a domain spell that doesn't appear on the cleric spell list, the spell is nonetheless a cleric spell for you.</p>"
            if($('#roll').is(':checked')){
                $("#description").append($table + $desc + $hp + $prof + $roll + $feats);
            }
            else if($('#noroll').is(':checked')){
                $("#description").append($table + $desc + $hp + $prof + $noroll + $feats);
            }
            $("#skills").chosen({max_selected_options: 2});
        }
        else if(job == "Druid"){
            var $table = "<table>\
                <tr>\
                    <th>Level</th>\
                    <th>Proficiency Bonus</th>\
                    <th>Features</th>\
                    <th>Cantrips Known</th>\
                    <th>1st</th>\
                    <th>2nd</th>\
                    <th>3rd</th>\
                    <th>4th</th>\
                    <th>5th</th>\
                    <th>6th</th>\
                    <th>7th</th>\
                    <th>8th</th>\
                    <th>9th</th>\
                </tr>\
                <tr>\
                    <td>1st</td>\
                    <td>+2</td>\
                    <td>Druidic, Spellcasting</td>\
                    <td>2</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                <tr>\
                    <td>2nd</td>\
                    <td>+2</td>\
                    <td>Wild Shape, Druid Circle, Wild Companion (Optional)</td>\
                    <td>2</td>\
                    <td>3</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>3rd</td>\
                    <td>+2</td>\
                    <td></td>\
                    <td>2</td>\
                    <td>4</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>4th</td>\
                    <td>+2</td>\
                    <td>Wild Shape improvement, Ability Score Improvement, Cantrip Versatility (Optional)</td>\
                    <td>3</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>5th</td>\
                    <td>+3</td>\
                    <td></td>\
                    <td>3</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>6th</td>\
                    <td>+3</td>\
                    <td>Druid Circle feature</td>\
                    <td>3</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>7th</td>\
                    <td>+3</td>\
                    <td></td>\
                    <td>3</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>1</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>8th</td>\
                    <td>+3</td>\
                    <td>Wild Shape improvement, Ability Score Improvement, Cantrip Versatility (Optional)</td>\
                    <td>3</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>9th</td>\
                    <td>+4</td>\
                    <td></td>\
                    <td>3</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>1</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>10th</td>\
                    <td>+4</td>\
                    <td>Druid Circle feature</td>\
                    <td>4</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>11th</td>\
                    <td>+4</td>\
                    <td></td>\
                    <td>4</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>12th</td>\
                    <td>+4</td>\
                    <td>Ability Score Improvement, Cantrip Versatility (Optional)</td>\
                    <td>4</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>13th</td>\
                    <td>+5</td>\
                    <td></td>\
                    <td>4</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>14th</td>\
                    <td>+5</td>\
                    <td>Druid Circle feature</td>\
                    <td>4</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>15th</td>\
                    <td>+5</td>\
                    <td></td>\
                    <td>4</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>16th</td>\
                    <td>+5</td>\
                    <td>Ability Score Improvement, Cantrip Versatility (Optional)</td>\
                    <td>4</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>17th</td>\
                    <td>+6</td>\
                    <td></td>\
                    <td>4</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>1</td>\
                </tr>\
                <tr>\
                    <td>18th</td>\
                    <td>+6</td>\
                    <td>Timeless Body, Beast Spells</td>\
                    <td>4</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>1</td>\
                </tr>\
                <tr>\
                    <td>19th</td>\
                    <td>+6</td>\
                    <td>Ability Score Improvement, Cantrip Versatility (Optional)</td>\
                    <td>4</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>1</td>\
                    <td>1</td>\
                </tr>\
                <tr>\
                    <td>20th</td>\
                    <td>+6</td>\
                    <td>Archdruid</td>\
                    <td>4</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>1</td>\
                </tr>\
                </table>";
            var $desc = "<p>\
                Whether calling on the elemental forces of nature or emulating the creatures of the animal world, druids are an embodiment of nature's resilience, cunning, and fury.\
                They claim no mastery over nature, but see themselves as extensions of nature's indomitable will.</p>";
            var $hp = "<h2>Hit points</h2>\
                        <ul>\
                        <li><b>Hit Dice:</b>1d8 per druid level</li>\
                        <li><b>Hit Points at 1st Level:</b>8 + your Constitution modifier</li>\
                        <li><b>Hit Points at Higher Levels:</b> 1d8 (or 5) + your Constitution modifier per cleric level after 1st</li>\
                        </ul>";
            var $prof = "<h2>Proficiencies</h2>\
                        <ul>\
                        <li><b>Armour:</b>Light Armor, Medium Armor, Shields (druids will not wear armor or use shields made of metal)</li>\
                        <li><b>Weapons:</b>Clubs, daggers, darts, javelins, maces, quarterstaffs, scimitars, sickles, slings, spears</li>\
                        <li><b>Tools:</b>Herbalism kit</li>\
                        <li><b>Saving Throws:</b>Wisdom and Intelligence</li>\
                        <li><b>Skills:</b>Choose two from this list:\
                        <select name='skills' id='skills' multiple form='jobStuff'>\
                        <option value='arcana'>Arcana</option>\
                        <option value='animalHandling'>Animal Handling</option>\
                        <option value='insight'>Insight</option>\
                        <option value='medicine'>Medicine</option>\
                        <option value='nature'>Nature</option>\
                        <option value='perception'>Perception</option>\
                        <option value='religion'>Religion</option>\
                        <option value='survival'>Survival</option>\
                        </li></select></ul>";
            var $noroll = '<h2>Equipment</h2>\
                        <p>You start with the following equipment, in addition to the equipment granted by your background:</p>\
                        <ul>\
                        <li><select name="option1" id="option1" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="woodShield">Wooden Shield - +2 AC</option>\
                        <option value="club">Club - 1d4 bludgeoning - Light</option>\
                        <option value="2handaxes">2 Handaxes - 1d6 slashing - Light, Thrown (20/60)</option>\
                        <option value="dagger">Dagger - 1d4 piercing - Finesse, Light, Thrown (20/60)</option>\
                        <option value="greatclub">Greatclub - 1d8 bludgeoning - Two-Handed</option>\
                        <option value="javelin">Javelin - 1d6 piercing - Thrown (30/120)</option>\
                        <option value="lightHammer">Light Hammer - 1d6 bludgeoning - Light, Thrown (20/60)</option>\
                        <option value="mace">Mace - 1d6 bludgeoning - </option>\
                        <option value="quarterstaff">Quarterstaff - 1d6 bludgeoning - Versatile(1d8)</option>\
                        <option value="sickle">Sickle - 1d4 slashing - Light</option>\
                        <option value="spear">Spear - 1d6 piercing - Thrown(20/60), Versatile(1d8)</option>\
                        <option value="lightCross">Light Crossbow - 1d8 piercing - Ammunition, Range(80/320), Loading, Two-Handed</option>\
                        <option value="dart">Dart - 1d4 piercing - Finesse, Thrown(20/60)</option>\
                        <option value="shortbow">Shortbow - 1d6 piercing - Ammunition, Range(80/320), Two-Handed</option>\
                        <option value="sling">Sling - 1d4 piercing - Ammunition, Range(30/120)</option>\
                        </select></li>\
                        <li><select name="option2" id="option2" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="scimitar">Scimitar - 1d6 slashing - Finesse, Light</option>\
                        <option value="club">Club - 1d4 bludgeoning - Light</option>\
                        <option value="2handaxes">2 Handaxes - 1d6 slashing - Light, Thrown (20/60)</option>\
                        <option value="dagger">Dagger - 1d4 piercing - Finesse, Light, Thrown (20/60)</option>\
                        <option value="greatclub">Greatclub - 1d8 bludgeoning - Two-Handed</option>\
                        <option value="javelin">Javelin - 1d6 piercing - Thrown (30/120)</option>\
                        <option value="lightHammer">Light Hammer - 1d6 bludgeoning - Light, Thrown (20/60)</option>\
                        <option value="mace">Mace - 1d6 bludgeoning - </option>\
                        <option value="quarterstaff">Quarterstaff - 1d6 bludgeoning - Versatile(1d8)</option>\
                        <option value="sickle">Sickle - 1d4 slashing - Light</option>\
                        <option value="spear">Spear - 1d6 piercing - Thrown(20/60), Versatile(1d8)</option>\
                        </select></li>\
                        <li>Leather armour, an explorer pack and a druidic focus</li>\
                        </ul>';
            var $roll = '<p>roll 2d4 x 10 to find your starting gold:</p>\
                        <input name="result" id="result" readonly="readonly" form="jobstuff"></input>\
                        <button type = "button" onclick="rollGold(2, 10)">ROLL</button>'
            var $feats = "<h1>Spellcasting</h1>\
                        <p>Drawing on the divine essence of nature itself, you can cast spells to shape that essence to your will.</p>\
                        <h1>cantrips</h1>\
                        <p>At 1st level, you know two cantrips of your choice from the druid spell list. You learn additional druid cantrips of your choice at higher levels, as shown in the Cantrips Known column of the Druid table.</p>\
                        <h1>Spell Slots</h1>\
                        <p>The Druid table shows how many spell slots you have to cast your druid spells of 1st level and higher. To cast one of these druid spells, you must expend a slot of the spell's level or higher. You regain all expended spell slots when you finish a long rest.</p>\
                        <p>You prepare the list of druid spells that are available for you to cast, choosing from the druid spell list. When you do so, choose a number of druid spells equal to your Wisdom modifier + your Druid level (minimum of one spell). The spells must be of a level for which you have spell slots.</p>\
                        <p>You can also change your list of prepared spells when you finish a long rest. Preparing a new list of druid spells requires time spent in prayer and meditation: at least 1 minute per spell level for each spell on your list.</p>\
                        <h1>Spellcasting Ability</h1>\
                        <p>Wisdom is your spellcasting ability for your druid spells, since your magic draws upon your devotion and attunement to nature. You use your Wisdom whenever a spell refers to your spellcasting ability. In addition, you use your Wisdom modifier when setting the saving throw DC for a druid spell you cast and when making an attack roll with one.</p>\
                        <p><b>Spell save DC</b> = 8 + your proficiency bonus + your Wisdom modifier</p>\
                        <p><b>Spell attack modifier</b> = your proficiency bonus + your Wisdom modifier</p>\
                        <h1>Ritual Casting</h1>\
                        <p>You can cast a druid spell as a ritual if that spell has the ritual tag and you have the spell prepared.</p>\
                        <h1>Spellcasting Focus</h1>\
                        <p>You can use a druidic focus as a spellcasting focus for your druid spells.</p>\
                        <h1>Divine Domain</h1>\
                        <p>At 1st level, you choose a domain shaped by your choice of Deity and the gifts they grant you. Your choice grants you domain spells and other features when you choose it at 1st level. It also grants you additional ways to use Channel Divinity when you gain that feature at 2nd level, and additional benefits at 6th, 8th, and 17th levels.</p>\
                        <h1>Domain Spells</h1>\
                        <p>Each domain has a list of spells-its domain spells that you gain at the cleric levels noted in the domain description. Once you gain a domain spell, you always have it prepared, and it doesn't count against the number of spells you can prepare each day.</p>\
                        <p>If you have a domain spell that doesn't appear on the cleric spell list, the spell is nonetheless a cleric spell for you.</p>"
            if($('#roll').is(':checked')){
                $("#description").append($table + $desc + $hp + $prof + $roll + $feats);
            }
            else if($('#noroll').is(':checked')){
                $("#description").append($table + $desc + $hp + $prof + $noroll + $feats);
            }
            $("#skills").chosen({max_selected_options: 2});
        }
        else if(job == "Fighter"){

        }
        else if(job == "Monk"){

        }
        else if(job == "Paladin"){
            
        }
        else if(job == "Ranger"){
            
        }
        else if(job == "Rogue"){
            
        }
        else if(job == "Sorcerer"){
            
        }
        else if(job == "Warlock"){
            
        }
        else if(job == "Wizard"){
            
        }
    }
</script>
</html>