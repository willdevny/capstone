<?php
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
    <link rel="stylesheet" href="../style.css">
    <title>Document</title>
</head>
<body>
<header>
		<div class="horizontal-container else-nav nav">
			<!-- Open Menu For Profile Options -->
			<a href="main.php">
				<ion-icon class="else-profile-button" name="home"></ion-icon>
			</a>
		</div>
	</header>
        <article id="builder">
        <label for="job">Choose a class:</label>    
        <select name="job" id="job" onchange="getJob()" form="jobstuff">  
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
    <input type="hidden" name="hidden" value="job" form="jobstuff">
    <input type="Submit" name="Submit" value="Submit"  form="jobstuff">
    <div name="description" id="description"></div>
        </article>    
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
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
                        <li><b>Tools:</b>Three musical instruments of your choice</li>\
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
                        <li><select name="option4" id="option4" form="jobStuff>\
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
                        <option value="2handaxes">2 Handaxes - 1d6 slashing - Light, Thrown (20/60)</option>\
                        <option value="scimitar">Scimitar - 1d6 slashing - Finesse, Light</option>\
                        <option value="club">Club - 1d4 bludgeoning - Light</option>\
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
                        <p>You can use a druidic focus as a spellcasting focus for your druid spells.</p>"
            if($('#roll').is(':checked')){
                $("#description").append($table + $desc + $hp + $prof + $roll + $feats);
            }
            else if($('#noroll').is(':checked')){
                $("#description").append($table + $desc + $hp + $prof + $noroll + $feats);
            }
            $("#skills").chosen({max_selected_options: 2});
        }
        else if(job == "Fighter"){
            var $table = "<table>\
                <tr>\
                    <th>Level</th>\
                    <th>Proficiency Bonus</th>\
                    <th>Features</th>\
                </tr>\
                <tr>\
                    <td>1st</td>\
                    <td>+2</td>\
                    <td>Fighting Style, Second Wind</td>\
                <tr>\
                    <td>2nd</td>\
                    <td>+2</td>\
                    <td>Action Surge (x1)</td>\
                </tr>\
                <tr>\
                    <td>3rd</td>\
                    <td>+2</td>\
                    <td>Martial Archetype</td>\
                </tr>\
                <tr>\
                    <td>4th</td>\
                    <td>+2</td>\
                    <td>Ability Score Improvement, Martial Versatility (Optional)</td>\
                </tr>\
                <tr>\
                    <td>5th</td>\
                    <td>+3</td>\
                    <td>Extra Attack</td>\
                </tr>\
                <tr>\
                    <td>6th</td>\
                    <td>+3</td>\
                    <td>Ability Score Improvement, Martial Versatility (Optional)</td>\
                </tr>\
                <tr>\
                    <td>7th</td>\
                    <td>+3</td>\
                    <td>Martial Archetype feature</td>\
                </tr>\
                <tr>\
                    <td>8th</td>\
                    <td>+3</td>\
                    <td>Ability Score Improvement, Martial Versatility (Optional)</td>\
                </tr>\
                <tr>\
                    <td>9th</td>\
                    <td>+4</td>\
                    <td>Indomitable (x1)</td>\
                </tr>\
                <tr>\
                    <td>10th</td>\
                    <td>+4</td>\
                    <td>Martial Archetype feature</td>\
                </tr>\
                <tr>\
                    <td>11th</td>\
                    <td>+4</td>\
                    <td>Extra Attack (x2)</td>\
                </tr>\
                <tr>\
                    <td>12th</td>\
                    <td>+4</td>\
                    <td>Ability Score Improvement, Martial Versatility (Optional)</td>\
                </tr>\
                <tr>\
                    <td>13th</td>\
                    <td>+5</td>\
                    <td>Indomitable (x2)</td>\
                </tr>\
                <tr>\
                    <td>14th</td>\
                    <td>+5</td>\
                    <td>Ability Score Improvement, Martial Versatility (Optional)</td>\
                </tr>\
                <tr>\
                    <td>15th</td>\
                    <td>+5</td>\
                    <td>Martial Archetype feature</td>\
                </tr>\
                <tr>\
                    <td>16th</td>\
                    <td>+5</td>\
                    <td>Ability Score Improvement, Martial Versatility (Optional)</td>\
                </tr>\
                <tr>\
                    <td>17th</td>\
                    <td>+6</td>\
                    <td>Action Surge (x2), Indomitable (x3)</td>\
                </tr>\
                <tr>\
                    <td>18th</td>\
                    <td>+6</td>\
                    <td>Martial Archetype feature</td>\
                </tr>\
                <tr>\
                    <td>19th</td>\
                    <td>+6</td>\
                    <td>Ability Score Improvement, Martial Versatility (Optional)</td>\
                </tr>\
                <tr>\
                    <td>20th</td>\
                    <td>+6</td>\
                    <td>Extra Attack (x3)</td>\
                </tr>\
                </table>";
            var $desc = "<p>\
                Fighters share an unparalleled mastery with weapons and armor, and a thorough knowledge of the skills of combat.\
                They are well acquainted with death, both meting it out and staring it defiantly in the face.";
            var $hp = "<h2>Hit points</h2>\
                        <ul>\
                        <li><b>Hit Dice:</b>1d10 per fighter level</li>\
                        <li><b>Hit Points at 1st Level:</b>10 + your Constitution modifier</li>\
                        <li><b>Hit Points at Higher Levels:</b> 1d10 (or 6) + your Constitution modifier per barbarian level after 1st</li>\
                        </ul>";
            var $prof = "<h2>Proficiencies</h2>\
                        <ul>\
                        <li><b>Armour:</b>All armour, shields</li>\
                        <li><b>Weapons:</b>Simple weapons, martial weapons</li>\
                        <li><b>Tools:</b>None</li>\
                        <li><b>Saving Throws:</b>Strength and Constitution</li>\
                        <li><b>Skills:</b>Choose two from this list:\
                        <select name='skills' id='skills' multiple form='jobStuff'>\
                        <option value='acrobatic'>Acrobatics</option>\
                        <option value='animalHandling'>Animal Handling</option>\
                        <option value='athletics'>Athletics</option>\
                        <option value='intimidation'>History</option>\
                        <option value='intimidation'>Insight</option>\
                        <option value='intimidation'>Intimidation</option>\
                        <option value='perception'>Perception</option>\
                        <option value='survival'>Survival</option>\
                        </li></select></ul>";
            var $noroll = '<h2>Equipment</h2>\
                        <p>You start with the following equipment, in addition to the equipment granted by your background:</p>\
                        <ul>\
                        <li><select name="option1" id="option1" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="chainmail">Chainmail - AC 16</option>\
                        <option value="leatherBow">Leather Armour(AC11+dex) and Longbow with 20 arrows</option>\
                        </select></li>\
                        <p>Select two options from this list</p>\
                        <li><select name="option2" id="option2" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="shield">Shield - +2 AC</option>\
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
                        <option value="blowgun">Blowgun - 1 piercing - Ammunition, Range(25/100), Loading</option>\
                        <option value="handCrossbow">Hand Crossbow - 1d6 piercing - Ammunition, Range(30/120), Light, Loading</option>\
                        <option value="heavyCrossbow">Heavy Crossbow - 1d10 piercing - Ammunition, Range(100/400), Heavy, Loading, Two-Handed</option>\
                        <option value="longbow">Longbow - 1d8 piercing - Ammunition, Range(150/600), Heavy. Two-Handed</option>\
                        <option value="net">Shield - - Special, Range(5/15)</option>\
                        </select></li>\
                        <li><select name="option3" id="option3" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="crossbowBolt">Light Crossbow and 20 bolts - 1d8 piercing - Ammunition, Range(80/320), Loading, Two-Handed</option>\
                        <option value="2handaxes">2 Handaxes - 1d6 slashing - Light, Thrown (20/60)</option>\
                        </select></li>\
                        <li><select name="option4" id="option4" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="Dungeoneer Pack">Dungeoneer Pack</option>\
                        <option value="Explorer Pack">Explorer Pack</option>\
                        </select></li>\
                        </ul>';
            var $roll = '<p>roll 5d4 x 10 to find your starting gold:</p>\
                        <input name="result" id="result" readonly="readonly" form="jobstuff"></input>\
                        <button type = "button" onclick="rollGold(5, 10)">ROLL</button>'
            var $feats = '<h2>Fighting Style</h2>\
                        <li><select name="fightingstyle" id="fightingstyle" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="archery">Archery - You gain a +2 bonus to attack rolls you make with ranged weapons.</option>\
                        <option value="blind">Blind Fighting - You have blindsight with a range of 10 feet.</option>\
                        <option value="defense">Defense - While you are wearing armor, you gain a +1 bonus to AC.</option>\
                        <option value="dueling">Dueling - When you are wielding a melee weapon in one hand and no other weapons, you gain a +2 bonus to damage rolls with that weapon.</option>\
                        <option value="great">Great Weapon Fighting - When you roll a 1 or 2 on a damage die for an attack you make with a versatile or two-handed melee weapon with both hands, you can reroll the die and must use the new roll, even if the new roll is a 1 or a 2.</option>\
                        <option value="interception">Interception - When a creature you can see hits a target, other than you, within 5 feet of you with an attack, you can use your reaction to reduce the damage the target takes by 1d10 + your proficiency bonus (to a minimum of 0 damage).</option>\
                        <option value="protection">Protection - When a creature you can see attacks a target other than you that is within 5 feet of you, you can use your reaction to impose disadvantage on the attack roll using a shield that is equipped. </option>\
                        <option value="tech">Superior technique - You learn one maneuver of your choice from among those available to the Battle Master archetype and you gain one d6 superiority die.</option>\
                        <option value="throw">Thrown Weapon Fighting - You gain +2 damage when makign ranged attacks with thrown weapons and you can draw a weapon that has the thrown property as part of the attack you make with the weapon.</option>\
                        <option value="two">Two Weapon Fighting - When you engage in two-weapon fighting, you can add your ability modifier to the damage of the second attack.</option>\
                        <option value="unarmed">Unarmed Fighting - Your unarmed strikes deal bludgeoning damage equal to 1d6 + your Strength mod. If you are not wielding anything in hand when you make the attack roll, the d6 becomes a d8. At the start of each of your turns, you can deal 1d4 bludgeoning damage to one creature grappled by you.</option>\
                        </select></li>\
                        <h2>Second Wind</h2>\
                        <p>You have a limited well of stamina that you can draw on to protect yourself from harm. On your turn, you can use a bonus action to regain hit points equal to 1d10 + your fighter level.</p>\
                        <p>Once you use this feature, you must finish a short or long rest before you can use it again.</p>';
            if($('#roll').is(':checked')){
                $("#description").append($table + $desc + $hp + $prof + $roll + $feats);
            }
            else if($('#noroll').is(':checked')){
                $("#description").append($table + $desc + $hp + $prof + $noroll + $feats);
            }
            $("#skills").chosen({max_selected_options: 2});
            $("#option2").chosen({
                max_selected_options: 2,
                hide_results_on_select: false
            });
        }
        else if(job == "Monk"){
            var $table = "<table>\
                <tr>\
                    <th>Level</th>\
                    <th>Proficiency Bonus</th>\
                    <th>Features</th>\
                    <th>Martial Arts</th>\
                    <th>Ki Points</th>\
                    <th>Unarmored Movement</th>\
                </tr>\
                <tr>\
                    <td>1st</td>\
                    <td>+2</td>\
                    <td>Unarmored Defense, Martial Arts</td>\
                    <td>1d4</td>\
                    <td>-</td>\
                    <td>-</tr>\
                <tr>\
                    <td>2nd</td>\
                    <td>+2</td>\
                    <td>Ki, Unarmored Movement, Dedicated Weapon (Optional)</td>\
                    <td>1d4</td>\
                    <td>2</td>\
                    <td>+10 ft</td>\
                </tr>\
                <tr>\
                    <td>3rd</td>\
                    <td>+2</td>\
                    <td>Monastic Tradition, Deflect Missiles, Ki-Fueled Attack (Optional)</td>\
                    <td>1d4</td>\
                    <td>3</td>\
                    <td>+10 ft</td>\
                </tr>\
                <tr>\
                    <td>4th</td>\
                    <td>+2</td>\
                    <td>Ability Score Improvement, Slow Fall, Quickened Healing (Optional)</td>\
                    <td>1d4</td>\
                    <td>4</td>\
                    <td>+10 ft</td>\
                </tr>\
                <tr>\
                    <td>5th</td>\
                    <td>+3</td>\
                    <td>Extra Attack, Stunning Strike, Focused Aim (Optional)</td>\
                    <td>1d4</td>\
                    <td>5</td>\
                    <td>+10 ft</td>\
                </tr>\
                <tr>\
                    <td>6th</td>\
                    <td>+3</td>\
                    <td>Ki-Empowered Strikes, Monastic Tradition feature</td>\
                    <td>1d6</td>\
                    <td>6</td>\
                    <td>+15 ft</td>\
                </tr>\
                <tr>\
                    <td>7th</td>\
                    <td>+3</td>\
                    <td>Evasion, Stillness of Mind</td>\
                    <td>1d6</td>\
                    <td>7</td>\
                    <td>+15 ft</td>\
                </tr>\
                <tr>\
                    <td>8th</td>\
                    <td>+3</td>\
                    <td>Ability Score Improvement</td>\
                    <td>1d6</td>\
                    <td>8</td>\
                    <td>+15 ft</td>\
                </tr>\
                <tr>\
                    <td>9th</td>\
                    <td>+4</td>\
                    <td>Unarmored Movement improvement</td>\
                    <td>1d6</td>\
                    <td>9</td>\
                    <td>+15 ft</td>\
                </tr>\
                <tr>\
                    <td>10th</td>\
                    <td>+4</td>\
                    <td>Purity of Body</td>\
                    <td>1d6</td>\
                    <td>10</td>\
                    <td>+20 ft</td>\
                </tr>\
                <tr>\
                    <td>11th</td>\
                    <td>+4</td>\
                    <td>Monastic Tradition feature</td>\
                    <td>1d8</td>\
                    <td>11</td>\
                    <td>+20 ft</td>\
                </tr>\
                <tr>\
                    <td>12th</td>\
                    <td>+4</td>\
                    <td>Ability Score Improvement</td>\
                    <td>1d8</td>\
                    <td>12</td>\
                    <td>+20 ft</td>\
                </tr>\
                <tr>\
                    <td>13th</td>\
                    <td>+5</td>\
                    <td>Tongue of the Sun and Moon</td>\
                    <td>1d8</td>\
                    <td>13</td>\
                    <td>+20 ft</td>\
                </tr>\
                <tr>\
                    <td>14th</td>\
                    <td>+5</td>\
                    <td>Diamond Soul</td>\
                    <td>1d8</td>\
                    <td>14</td>\
                    <td>+25 ft</td>\
                </tr>\
                <tr>\
                    <td>15th</td>\
                    <td>+5</td>\
                    <td>Timeless Body</td>\
                    <td>1d8</td>\
                    <td>15</td>\
                    <td>+25 ft</td>\
                </tr>\
                <tr>\
                    <td>16th</td>\
                    <td>+5</td>\
                    <td>Ability Score Improvement</td>\
                    <td>1d8</td>\
                    <td>16</td>\
                    <td>+25 ft</td>\
                </tr>\
                <tr>\
                    <td>17th</td>\
                    <td>+6</td>\
                    <td>Monastic Tradition feature</td>\
                    <td>1d10</td>\
                    <td>17</td>\
                    <td>+25 ft</td>\
                </tr>\
                <tr>\
                    <td>18th</td>\
                    <td>+6</td>\
                    <td>Empty Body</td>\
                    <td>1d10</td>\
                    <td>18</td>\
                    <td>+30 ft</td>\
                </tr>\
                <tr>\
                    <td>19th</td>\
                    <td>+6</td>\
                    <td>Ability Score Improvement</td>\
                    <td>1d10</td>\
                    <td>19</td>\
                    <td>+30 ft</td>\
                </tr>\
                <tr>\
                    <td>20th</td>\
                    <td>+6</td>\
                    <td>Perfect Self</td>\
                    <td>1d10</td>\
                    <td>20</td>\
                    <td>+30 ft</td>\
                </tr>\
                </table>";
            var $desc = "<p>\
                Monks are united in their ability to magically harness the energy that flows in their bodies.\
                Whether channeled as a striking display of combat prowess or a subtler focus of defensive ability and speed, this energy infuses all that a monk does.</p>"
            var $hp = "<h2>Hit points</h2>\
                        <ul>\
                        <li><b>Hit Dice:</b>1d8 per monk level</li>\
                        <li><b>Hit Points at 1st Level:</b>8 + your Constitution modifier</li>\
                        <li><b>Hit Points at Higher Levels:</b> 1d8 (or 5) + your Constitution modifier per monk level after 1st</li>\
                        </ul>";
            var $prof = "<h2>Proficiencies</h2>\
                        <ul>\
                        <li><b>Armour:</b>None</li>\
                        <li><b>Weapons:</b>Simple weapons, shortswords</li>\
                        <li><b>Tools:</b>Choose one type of artisan's tools or one musical instrument</li>\
                        <li><b>Saving Throws:</b>Strength and Dexterity</li>\
                        <li><b>Skills:</b>Choose two from this list:\
                        <select name='skills' id='skills' multiple form='jobStuff'>\
                        <option value='acrobatics'>Acrobatics</option>\
                        <option value='athletics'>Athletics</option>\
                        <option value='history'>History</option>\
                        <option value='insight'>Insight</option>\
                        <option value='religon'>Religion</option>\
                        <option value='stealth'>Stealth</option>\
                        </li></select></ul>";
            var $noroll = '<h2>Equipment</h2>\
                        <p>You start with the following equipment, in addition to the equipment granted by your background:</p>\
                        <ul>\
                        <li><select name="option1" id="option1" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="shortsword">Shortsword - 1d6 piercing - Finesse, Light</option>\
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
                        <option value="dungeoneer">Dungeoneer pack</option>\
                        <option value="explorer">Explorer pack</option>\
                        </select></li>\
                        <li>10 darts</li>\
                        </ul>';
            var $roll = '<p>roll 5d4 to find your starting gold:</p>\
                        <input name="result" id="result" readonly="readonly" form="jobstuff"></input>\
                        <button type = "button" onclick="rollGold(5, 0)">ROLL</button>'
            var $feats = "<h2>Martial Arts</h2>\
                        <p>At 1st level, your practice of martial arts gives you mastery of combat styles that use unarmed strikes and monk weapons, which are shortswords and any simple melee weapons that don't have the two-handed or heavy property.</p>\
                        <p>You gain the following benefits while you are unarmed or wielding only monk weapons and you aren't wearing armor or wielding a shield:</p>\
                        <ul>\
                        <li>You can use Dexterity instead of Strength for the attack and damage rolls of your unarmed strikes and monk weapons.</li>\
                        <li>You can roll a d4 in place of the normal damage of your unarmed strike or monk weapon. This die changes as you gain monk levels, as shown in the Martial Arts column of the Monk table.</li>\
                        <li>When you use the Attack action with an unarmed strike or a monk weapon on your turn, you can make one unarmed strike as a bonus action. For example, if you take the Attack action and attack with a quarterstaff, you can also make an unarmed strike as a bonus action, assuming you haven't already taken a bonus action this turn.</li>\
                        </ul>\
                        <p>Certain monasteries use specialized forms of the monk weapons. For example, you might use a club that is two lengths of wood connected by a short chain (called a nunchaku) or a sickle with a shorter, straighter blade (called a kama). Whatever name you use for a monk weapon, you can use the game statistics provided for the weapon on the Weapons page.</p>\
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
        else if(job == "Paladin"){
            var $table = "<table>\
                <tr>\
                    <th>Level</th>\
                    <th>Proficiency Bonus</th>\
                    <th>Features</th>\
                    <th>1st</th>\
                    <th>2nd</th>\
                    <th>3rd</th>\
                    <th>4th</th>\
                    <th>5th</th>\
                </tr>\
                <tr>\
                    <td>1st</td>\
                    <td>+2</td>\
                    <td>Divine Sense, Lay on Hands</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                <tr>\
                    <td>2nd</td>\
                    <td>+2</td>\
                    <td>Fighting Style, Spellcasting, Divine Smite</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>3rd</td>\
                    <td>+2</td>\
                    <td>Divine Health, Sacred Oath, Harness Divine Power (Optional)</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>4th</td>\
                    <td>+2</td>\
                    <td>Ability Score Improvement, Martial Versatility (Optional)</td>\
                    <td>3</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>5th</td>\
                    <td>+3</td>\
                    <td>Extra Attack</td>\
                    <td>4</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>6th</td>\
                    <td>+3</td>\
                    <td>Aura of Protection</td>\
                    <td>4</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>7th</td>\
                    <td>+3</td>\
                    <td>Sacred Oath feature</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>8th</td>\
                    <td>+3</td>\
                    <td>Ability Score Improvement, Martial Versatility (Optional)</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>9th</td>\
                    <td>+4</td>\
                    <td></td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>10th</td>\
                    <td>+4</td>\
                    <td>Aura of Courage</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>11th</td>\
                    <td>+4</td>\
                    <td>Improved Divine Smite</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>12th</td>\
                    <td>+4</td>\
                    <td>Ability Score Improvement, Martial Versatility (Optional)</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>13th</td>\
                    <td>+5</td>\
                    <td></td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>1</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>14th</td>\
                    <td>+5</td>\
                    <td>Cleansing Touch</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>1</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>15th</td>\
                    <td>+5</td>\
                    <td>Sacred Oath feature</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>16th</td>\
                    <td>+5</td>\
                    <td>Ability Score Improvement, Martial Versatility (Optional)</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>17th</td>\
                    <td>+6</td>\
                    <td></td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>1</td>\
                </tr>\
                <tr>\
                    <td>18th</td>\
                    <td>+6</td>\
                    <td>Aura improvements</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>1</td>\
                </tr>\
                <tr>\
                    <td>19th</td>\
                    <td>+6</td>\
                    <td>Ability Score Improvement, Martial Versatility (Optional)</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                </tr>\
                <tr>\
                    <td>20th</td>\
                    <td>+6</td>\
                    <td>Sacred Oath feature</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                </tr>\
                </table>";
            var $desc = "<p>\
                    Whether sworn before a god's altar and the witness of a priest, in a sacred glade before nature spirits and fey beings, or in a moment of desperation and grief with the dead as the only witness, a paladin's oath is a powerful bond.</p>";
            var $hp = "<h2>Hit points</h2>\
                        <ul>\
                        <li><b>Hit Dice:</b>1d10 per paladin level</li>\
                        <li><b>Hit Points at 1st Level:</b>10 + your Constitution modifier</li>\
                        <li><b>Hit Points at Higher Levels:</b> 1d10 (or 6) + your Constitution modifier per paladin level after 1st</li>\
                        </ul>";
            var $prof = "<h2>Proficiencies</h2>\
                        <ul>\
                        <li><b>Armour:</b>All armor, Shields</li>\
                        <li><b>Weapons:</b>Simple weapons, martial weapons</li>\
                        <li><b>Tools:</b>None</li>\
                        <li><b>Saving Throws:</b>Wisdom and Charisma</li>\
                        <li><b>Skills:</b>Choose two from this list:\
                        <select name='skills' id='skills' multiple form='jobStuff'>\
                        <option value='athletics'>Athletics</option>\
                        <option value='insight'>Insight</option>\
                        <option value='intimidation'>Intimidation</option>\
                        <option value='medicine'>Medicine</option>\
                        <option value='persuasion'>Persuasion</option>\
                        <option value='religion'>Religion</option>\
                        </li></select></ul>";
            var $noroll = '<h2>Equipment</h2>\
                        <p>You start with the following equipment, in addition to the equipment granted by your background:</p>\
                        <ul>\
                        <li>Select two from this list:<select name="option1" id="option1" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="shield">Shield - +2 AC</option>\
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
                        <option value="blowgun">Blowgun - 1 piercing - Ammunition, Range(25/100), Loading</option>\
                        <option value="handCrossbow">Hand Crossbow - 1d6 piercing - Ammunition, Range(30/120), Light, Loading</option>\
                        <option value="heavyCrossbow">Heavy Crossbow - 1d10 piercing - Ammunition, Range(100/400), Heavy, Loading, Two-Handed</option>\
                        <option value="longbow">Longbow - 1d8 piercing - Ammunition, Range(150/600), Heavy. Two-Handed</option>\
                        <option value="net">Shield - - Special, Range(5/15)</option>\
                        </select></li>\
                        </select></li>\
                        <li><select name="option2" id="option2" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="5javelin">5 Javelins - 1d6 piercing - Thrown(30/120)</option>\
                        <option value="club">Club - 1d4 bludgeoning - Light</option>\
                        <option value="2handaxes">2 Handaxes - 1d6 slashing - Light, Thrown(20/60)</option>\
                        <option value="dagger">Dagger - 1d4 piercing - Finesse, Light, Thrown(20/60)</option>\
                        <option value="greatclub">Greatclub - 1d8 bludgeoning - Two-Handed</option>\
                        <option value="lightCross">Light Crossbow - 1d8 piercing - Ammunition, Range(80/320), Loading, Two-Handed</option>\
                        <option value="lightHammer">Light Hammer - 1d6 bludgeoning - Light, Thrown(20/60)</option>\
                        <option value="mace">Mace - 1d6 bludgeoning - </option>\
                        <option value="quarterstaff">Quarterstaff - 1d6 bludgeoning - Versatile(1d8)</option>\
                        <option value="sickle">Sickle - 1d4 slashing - Light</option>\
                        <option value="spear">Spear - 1d6 piercing - Thrown(20/60), Versatile(1d8)</option>\
                        <option value="dart">Dart - 1d4 piercing - Finesse, Thrown(20/60)</option>\
                        <option value="shortbow">Shortbow - 1d6 piercing - Ammunition, Range(80/320), Two-Handed</option>\
                        <option value="sling">Sling - 1d4 piercing - Ammunition, Range(30/120)</option>\
                        </select></li>\
                        <li><select name="option3" id="option3" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="priest">priest pack</option>\
                        <option value="explorer">explorer pack</option>\
                        </select></li>\
                        <li>Chainmail and a Holy Symbol</li>\
                        </ul>';
            var $roll = '<p>roll 5d4 x 10 to find your starting gold:</p>\
                        <input name="result" id="result" readonly="readonly" form="jobstuff"></input>\
                        <button type = "button" onclick="rollGold(5, 10)">ROLL</button>'
            var $feats = "<h1>Divine Sense</h1>\
                        <p>The presence of strong evil registers on your senses like a noxious odor, and powerful good rings like heavenly music in your ears. As an action, you can open your awareness to detect such forces. Until the end of your next turn, you know the location of any celestial, fiend, or undead within 60 feet of you that is not behind total cover. You know the type (celestial, fiend, or undead) of any being whose presence you sense, but not its identity (the vampire Count Strahd von Zarovich, for instance). Within the same radius, you also detect the presence of any place or object that has been consecrated or desecrated, as with the Hallow spell.</p>\
                        <p>You can use this feature a number of times equal to 1 + your Charisma modifier. When you finish a long rest, you regain all expended uses.</p>\
                        <h1>Lay on Hands</h1>\
                        <p>Your blessed touch can heal wounds. You have a pool of healing power that replenishes when you take a long rest. With that pool, you can restore a total number of hit points equal to your paladin level x 5.</p>\
                        <p>As an action, you can touch a creature and draw power from the pool to restore a number of hit points to that creature, up to the maximum amount remaining in your pool.</p>\
                        <p>Alternatively, you can expend 5 hit points from your pool of healing to cure the target of one disease or neutralize one poison affecting it. You can cure multiple diseases and neutralize multiple poisons with a single use of Lay on Hands, expending hit points separately for each one.</p>\
                        <p>This feature has no effect on undead and constructs.</p>"
            if($('#roll').is(':checked')){
                $("#description").append($table + $desc + $hp + $prof + $roll + $feats);
            }
            else if($('#noroll').is(':checked')){
                $("#description").append($table + $desc + $hp + $prof + $noroll + $feats);
            }
            $("#skills").chosen({max_selected_options: 2});
            $("#option1").chosen({max_selected_options: 2});
        }
        else if(job == "Ranger"){
            var $table = "<table>\
                <tr>\
                    <th>Level</th>\
                    <th>Proficiency Bonus</th>\
                    <th>Features</th>\
                    <th>Spells Known</th>\
                    <th>1st</th>\
                    <th>2nd</th>\
                    <th>3rd</th>\
                    <th>4th</th>\
                    <th>5th</th>\
                </tr>\
                <tr>\
                    <td>1st</td>\
                    <td>+2</td>\
                    <td>Divine Sense, Lay on Hands</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                <tr>\
                    <td>2nd</td>\
                    <td>+2</td>\
                    <td>Fighting Style, Spellcasting, Divine Smite</td>\
                    <td>2</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>3rd</td>\
                    <td>+2</td>\
                    <td>Divine Health, Sacred Oath, Harness Divine Power (Optional)</td>\
                    <td>3</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>4th</td>\
                    <td>+2</td>\
                    <td>Ability Score Improvement, Martial Versatility (Optional)</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>5th</td>\
                    <td>+3</td>\
                    <td>Extra Attack</td>\
                    <td>4</td>\
                    <td>4</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>6th</td>\
                    <td>+3</td>\
                    <td>Aura of Protection</td>\
                    <td>4</td>\
                    <td>4</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>7th</td>\
                    <td>+3</td>\
                    <td>Sacred Oath feature</td>\
                    <td>5</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>8th</td>\
                    <td>+3</td>\
                    <td>Ability Score Improvement, Martial Versatility (Optional)</td>\
                    <td>5</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>-</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>9th</td>\
                    <td>+4</td>\
                    <td></td>\
                    <td>6</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>10th</td>\
                    <td>+4</td>\
                    <td>Aura of Courage</td>\
                    <td>6</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>11th</td>\
                    <td>+4</td>\
                    <td>Improved Divine Smite</td>\
                    <td>7</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>12th</td>\
                    <td>+4</td>\
                    <td>Ability Score Improvement, Martial Versatility (Optional)</td>\
                    <td>7</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>13th</td>\
                    <td>+5</td>\
                    <td></td>\
                    <td>8</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>1</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>14th</td>\
                    <td>+5</td>\
                    <td>Cleansing Touch</td>\
                    <td>8</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>1</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>15th</td>\
                    <td>+5</td>\
                    <td>Sacred Oath feature</td>\
                    <td>9</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>16th</td>\
                    <td>+5</td>\
                    <td>Ability Score Improvement, Martial Versatility (Optional)</td>\
                    <td>9</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>17th</td>\
                    <td>+6</td>\
                    <td></td>\
                    <td>10</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>1</td>\
                </tr>\
                <tr>\
                    <td>18th</td>\
                    <td>+6</td>\
                    <td>Aura improvements</td>\
                    <td>10</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>1</td>\
                </tr>\
                <tr>\
                    <td>19th</td>\
                    <td>+6</td>\
                    <td>Ability Score Improvement, Martial Versatility (Optional)</td>\
                    <td>11</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                </tr>\
                <tr>\
                    <td>20th</td>\
                    <td>+6</td>\
                    <td>Sacred Oath feature</td>\
                    <td>11</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>3</td>\
                    <td>2</td>\
                </tr>\
                </table>";
            var $desc = "<p>\
                        Far from the bustle of cities and towns, past the hedges that shelter the most distant farms from the terrors of the wild, amid the dense-packed trees of trackless forests and across wide and empty plains, rangers keep their unending watch.</p>";
            var $hp = "<h2>Hit points</h2>\
                        <ul>\
                        <li><b>Hit Dice:</b>1d10 per ranger level</li>\
                        <li><b>Hit Points at 1st Level:</b>10 + your Constitution modifier</li>\
                        <li><b>Hit Points at Higher Levels:</b> 1d10 (or 6) + your Constitution modifier per ranger level after 1st</li>\
                        </ul>";
            var $prof = "<h2>Proficiencies</h2>\
                        <ul>\
                        <li><b>Armour:</b>Light Armor, Medium Armour, Shields</li>\
                        <li><b>Weapons:</b>Simple weapons, martial weapons</li>\
                        <li><b>Tools:</b>None</li>\
                        <li><b>Saving Throws:</b>Strength and Dexterity</li>\
                        <li><b>Skills:</b>Choose three from this list:\
                        <select name='skills' id='skills' multiple form='jobStuff'>\
                        <option value='animalHandling'>Animal Handling</option>\
                        <option value='athletics'>Athletics</option>\
                        <option value='insight'>Insight</option>\
                        <option value='investigation'>Investigation</option>\
                        <option value='nature'>Nature</option>\
                        <option value='persuasion'>Persuasion</option>\
                        <option value='stealth'>Stealth</option>\
                        <option value='survival'>Survival</option>\
                        </li></select></ul>";
            var $noroll = '<h2>Equipment</h2>\
                        <p>You start with the following equipment, in addition to the equipment granted by your background:</p>\
                        <ul>\
                        <li>Select two from this list:<select name="option1" id="option1" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="scalemail">Scalemail - AC 14 + Dex(Max 2)</option>\
                        <option value="leather">Leather Armour - AC 11 + Dex</option>\
                        </select></li>\
                        </select></li>\
                        <li><select name="option2" id="option2" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="shortsword">Shortsword - 1d6 piercing - Finesse, Light</option>\
                        <option value="javelin">Javelin - 1d6 piercing - Thrown(30/120) </option>\
                        <option value="club">Club - 1d4 bludgeoning - Light</option>\
                        <option value="2handaxes">2 Handaxes - 1d6 slashing - Light, Thrown (20/60)</option>\
                        <option value="dagger">Dagger - 1d4 piercing - Finesse, Light, Thrown (20/60)</option>\
                        <option value="greatclub">Greatclub - 1d8 bludgeoning - Two-Handed</option>\
                        <option value="lightCross">Light Crossbow - 1d8 piercing - Ammunition, Range(80/320), Loading, Two-Handed</option>\
                        <option value="lightHammer">Light Hammer - 1d6 bludgeoning - Light, Thrown (20/60)</option>\
                        <option value="mace">Mace - 1d6 bludgeoning - </option>\
                        <option value="quarterstaff">Quarterstaff - 1d6 bludgeoning - Versatile(1d8)</option>\
                        <option value="sickle">Sickle - 1d4 slashing - Light</option>\
                        <option value="spear">Spear - 1d6 piercing - Thrown(20/60), Versatile(1d8)</option>\
                        <option value="dart">Dart - 1d4 piercing - Finesse, Thrown(20/60)</option>\
                        <option value="shortbow">Shortbow - 1d6 piercing - Ammunition, Range(80/320), Two-Handed</option>\
                        <option value="sling">Sling - 1d4 piercing - Ammunition, Range(30/120)</option>\
                        </select></li>\
                        <li><select name="option3" id="option3" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="priest">dungeoneer pack</option>\
                        <option value="explorer">explorer pack</option>\
                        </select></li>\
                        <li>A longbow and a quiver of 20 arrows</li>\
                        </ul>';
            var $roll = '<p>roll 5d4 x 10 to find your starting gold:</p>\
                        <input name="result" id="result" readonly="readonly" form="jobstuff"></input>\
                        <button type = "button" onclick="rollGold(5, 10)">ROLL</button>'
            var $feats = "<h1>Favored Enemy</h1>\
                        <p>Beginning at 1st level, you have significant experience studying, tracking, hunting, and even talking to a certain type of enemy.</p>\
                        <p>Choose a type of favored enemy: aberrations, beasts, celestials, constructs, dragons, elementals, fey, fiends, giants, monstrosities, oozes, plants, or undead. Alternatively, you can select two races of humanoid (such as gnolls and orcs) as favored enemies.</p>\
                        <p>You have advantage on Wisdom (Survival) checks to track your favored enemies, as well as on Intelligence checks to recall information about them.</p>\
                        <p>When you gain this feature, you also learn one language of your choice that is spoken by your favored enemies, if they speak one at all.</p>\
                        <p>You choose one additional favored enemy, as well as an associated language, at 6th and 14th level. As you gain levels, your choices should reflect the types of monsters you have encountered on your adventures.</p>\
                        <h1>Natural Explorer</h1>\
                        <p>Also at 1st level, you are particularly familiar with one type of natural environment and are adept at traveling and surviving in such regions. Choose one type of favored terrain: arctic, coast, desert, forest, grassland, mountain, swamp, or the Underdark. When you make an Intelligence or Wisdom check related to your favored terrain, your proficiency bonus is doubled if you are using a skill that you’re proficient in.</p>\
                        <p>While traveling for an hour or more in your favored terrain, you gain the following benefits:</p>\
                        <ul><li>Difficult terrain does not slow your group travel.</li>\
                        <li>Your group can not become lost except by magical means.</li>\
                        <li>Even when you are engaged in another activity while traveling (such as foraging, navigating, or tracking), you remain alert to danger.</li>\
                        <li>If you are traveling alone, you can move stealthily at a normal pace.</li>\
                        <li>When you forage, you find twice as much food as you normally would.</li>\
                        <li>While tracking other creatures, you also learn their exact number, their sizes, and how long ago they passed through the area.</li>\
                        <p>You choose additional favored terrain types at 6th and 10th level.</p>"
            if($('#roll').is(':checked')){
                $("#description").append($table + $desc + $hp + $prof + $roll + $feats);
            }
            else if($('#noroll').is(':checked')){
                $("#description").append($table + $desc + $hp + $prof + $noroll + $feats);
            }
            $("#skills").chosen({max_selected_options: 2});
            $("#option2").chosen({
                max_selected_options: 2,
                hide_results_on_select: false
            });
        }
        else if(job == "Rogue"){       
            var $table = "<table>\
                <tr>\
                    <th>Level</th>\
                    <th>Proficiency Bonus</th>\
                    <th>Sneak Attack</th>\
                    <th>Features</th>\
                </tr>\
                <tr>\
                    <td>1st</td>\
                    <td>+2</td>\
                    <td>1d6</td>\
                    <td>Expertise, Sneak Attack, Thieves' Cant</td>\
                <tr>\
                    <td>2nd</td>\
                    <td>+2</td>\
                    <td>1d6</td>\
                    <td>Cunning Action</td>\
                </tr>\
                <tr>\
                    <td>3rd</td>\
                    <td>+2</td>\
                    <td>2d6</td>\
                    <td>Roguish Archetype, Steady Aim (Optional)</td>\
                </tr>\
                <tr>\
                    <td>4th</td>\
                    <td>+2</td>\
                    <td>2d6</td>\
                    <td>Ability Score Improvement</td>\
                </tr>\
                <tr>\
                    <td>5th</td>\
                    <td>+3</td>\
                    <td>3d6</td>\
                    <td>Uncanny Dodge</td>\
                </tr>\
                <tr>\
                    <td>6th</td>\
                    <td>+3</td>\
                    <td>3d6</td>\
                    <td>Expertise</td>\
                </tr>\
                <tr>\
                    <td>7th</td>\
                    <td>+3</td>\
                    <td>4d6</td>\
                    <td>Evasion</td>\
                </tr>\
                <tr>\
                    <td>8th</td>\
                    <td>+3</td>\
                    <td>4d6</td>\
                    <td>Ability Score Improvement</td>\
                </tr>\
                <tr>\
                    <td>9th</td>\
                    <td>+4</td>\
                    <td>5d6</td>\
                    <td>Roguish Archetype feature</td>\
                </tr>\
                <tr>\
                    <td>10th</td>\
                    <td>+4</td>\
                    <td>5d6</td>\
                    <td>Ability Score Improvement</td>\
                </tr>\
                <tr>\
                    <td>11th</td>\
                    <td>+4</td>\
                    <td>6d6</td>\
                    <td>Reliable Talent</td>\
                </tr>\
                <tr>\
                    <td>12th</td>\
                    <td>+4</td>\
                    <td>6d6</td>\
                    <td>Ability Score Improvement</td>\
                </tr>\
                <tr>\
                    <td>13th</td>\
                    <td>+5</td>\
                    <td>7d6</td>\
                    <td>Roguish Archetype feature</td>\
                </tr>\
                <tr>\
                    <td>14th</td>\
                    <td>+5</td>\
                    <td>7d6</td>\
                    <td>Blindsense</td>\
                </tr>\
                <tr>\
                    <td>15th</td>\
                    <td>+5</td>\
                    <td>8d6</td>\
                    <td>Slippery Mind</td>\
                </tr>\
                <tr>\
                    <td>16th</td>\
                    <td>+5</td>\
                    <td>8d6</td>\
                    <td>Ability Score Improvement</td>\
                </tr>\
                <tr>\
                    <td>17th</td>\
                    <td>+6</td>\
                    <td>9d6</td>\
                    <td>Roguish Archetype feature</td>\
                </tr>\
                <tr>\
                    <td>18th</td>\
                    <td>+6</td>\
                    <td>9d6</td>\
                    <td>Elusive</td>\
                </tr>\
                <tr>\
                    <td>19th</td>\
                    <td>+6</td>\
                    <td>10d6</td>\
                    <td>Ability Score Improvement</td>\
                </tr>\
                <tr>\
                    <td>20th</td>\
                    <td>+6</td>\
                    <td>10d6</td>\
                    <td>Stroke of Luck</td>\
                </tr>\
                </table>";
            var $desc = "<p>\
                Rogues rely on skill, stealth, and their foes' vulnerabilities to get the upper hand in any situation.\
                They have a knack for finding the solution to just about any problem, demonstrating a resourcefulness and versatility that is the cornerstone of any successful adventuring party.";
            var $hp = "<h2>Hit points</h2>\
                        <ul>\
                        <li><b>Hit Dice:</b>1d8 per rogue level</li>\
                        <li><b>Hit Points at 1st Level:</b>8 + your Constitution modifier</li>\
                        <li><b>Hit Points at Higher Levels:</b> 1d8 (or 5) + your Constitution modifier per rogue level after 1st</li>\
                        </ul>";
            var $prof = "<h2>Proficiencies</h2>\
                        <ul>\
                        <li><b>Armour:</b>Light armour</li>\
                        <li><b>Weapons:</b>Simple weapons, hand crossbows, longswords, rapiers, shortswords</li>\
                        <li><b>Tools:</b>Thieves' tools</li>\
                        <li><b>Saving Throws:</b>Dexterity and intelligence</li>\
                        <li><b>Skills:</b>Choose four from this list:\
                        <select name='skills' id='skills' multiple form='jobStuff'>\
                        <option value='acrobatic'>Acrobatics</option>\
                        <option value='athletics'>Athletics</option>\
                        <option value='deception'>Deception</option>\
                        <option value='insight'>Insight</option>\
                        <option value='intimidation'>Intimidation</option>\
                        <option value='investigation'>Investigation</option>\
                        <option value='perception'>Perception</option>\
                        <option value='performance'>Performance</option>\
                        <option value='persuasion'>Persuasion</option>\
                        <option value='sleight'>Sleight of Hand</option>\
                        <option value='stealth'>Stealth</option>\
                        </li></select></ul>";
            var $noroll = '<h2>Equipment</h2>\
                        <p>You start with the following equipment, in addition to the equipment granted by your background:</p>\
                        <ul>\
                        <li><select name="option1" id="option1" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="rapier">Rapier - 1d8 piercing - Finesse</option>\
                        <option value="shortsword">Shortsword - 1d6 piercing - Finesse, Light</option>\
                        </select></li>\
                        <li><select name="option2" id="option2" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="shortBow">Short Bow - 1d6 piercing - Ammunition, Range(80/320), Two-Handed</option>\
                        <option value="shortsword">Shortsword - 1d6 piercing - Finesse, Light</option>\
                        </select></li>\
                        <li><select name="option3" id="option3" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="burglar">Burglar Pack</option>\
                        <option value="dungeoneer">Dungeoneer Pack</option>\
                        <option value="explorer">Explorer Pack</option>\
                        </select></li>\
                        <li>Leather armor, two Daggers, and Thieves Tools</li>\
                        </ul>';
            var $roll = '<p>roll 4d4 x 10 to find your starting gold:</p>\
                        <input name="result" id="result" readonly="readonly" form="jobstuff"></input>\
                        <button type = "button" onclick="rollGold(4, 10)">ROLL</button>'
            var $feats = '<h2>Expertise</h2>\
                        <p>At 1st level, choose two of your skill proficiencies, or one of your skill proficiencies and your proficiency with thieves tools. Your proficiency bonus is doubled for any ability check you make that uses either of the chosen proficiencies.</p>\
                        <p>At 6th level, you can choose two more of your proficiencies (in skills or with thieves tools) to gain this benefit.</p>\
                        <h2>Sneak Attack</h2>\
                        <p>Beginning at 1st level, you know how to strike subtly and exploit a foe. Once per turn, you can deal an extra 1d6 damage to one creature you hit with an attack if you have advantage on the attack roll. The attack must use a finesse or a ranged weapon.</p>\
                        <p>You do not need advantage on the attack roll if another enemy of the target is within 5 feet of it, that enemy is not incapacitated, and you do not have disadvantage on the attack roll.</p>\
                        <p>The amount of the extra damage increases as you gain levels in this class, as shown in the Sneak Attack column of the Rogue table.</p>\
                        <h2>Thieves Cant</h2>\
                        <p>During your rogue training you learned thieves cant, a secret mix of dialect, jargon, and code that allows you to hide messages in seemingly normal conversation. Only another creature that knows thieves cant understands such messages. It takes four times longer to convey such a message than it does to speak the same idea plainly.</p>\
                        <p>In addition, you understand a set of secret signs and symbols used to convey short, simple messages, such as whether an area is dangerous or the territory of a thieves guild, whether loot is nearby, or whether the people in an area are easy marks or will provide a safe house for thieves on the run.</p>\
                        ';
            if($('#roll').is(':checked')){
                $("#description").append($table + $desc + $hp + $prof + $roll + $feats);
            }
            else if($('#noroll').is(':checked')){
                $("#description").append($table + $desc + $hp + $prof + $noroll + $feats);
            }
            $("#skills").chosen({max_selected_options: 4});
        }
        else if(job == "Sorcerer"){
            var $table = "<table>\
                <tr>\
                    <th>Level</th>\
                    <th>Proficiency Bonus</th>\
                    <th>Features</th>\
                    <th>Sorcery Points</th>\
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
                    <td>Spellcasting, Sorcerous Origin</td>\
                    <td>-</td>\
                    <td>4</td>\
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
                    <td>Font of Magic</td>\
                    <td>2</td>\
                    <td>4</td>\
                    <td>3</td>\
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
                    <td>3rd</td>\
                    <td>+2</td>\
                    <td>Metamagic</td>\
                    <td>3</td>\
                    <td>4</td>\
                    <td>4</td>\
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
                    <td>Ability Score Improvement, Sorcerous Versatility (Optional)</td>\
                    <td>4</td>\
                    <td>5</td>\
                    <td>5</td>\
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
                    <td>Magical Guidance (Optional)</td>\
                    <td>5</td>\
                    <td>5</td>\
                    <td>6</td>\
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
                    <td>Sorcerous Origin feature</td>\
                    <td>6</td>\
                    <td>5</td>\
                    <td>7</td>\
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
                    <td>7</td>\
                    <td>5</td>\
                    <td>8</td>\
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
                    <td>Ability Score Improvement, Sorcerous Versatility (Optional)</td>\
                    <td>8</td>\
                    <td>5</td>\
                    <td>9</td>\
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
                    <td>9</td>\
                    <td>5</td>\
                    <td>10</td>\
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
                    <td>Metamagic</td>\
                    <td>10</td>\
                    <td>6</td>\
                    <td>11</td>\
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
                    <td>11</td>\
                    <td>6</td>\
                    <td>12</td>\
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
                    <td>Ability Score Improvement, Sorcerous Versatility (Optional)</td>\
                    <td>12</td>\
                    <td>6</td>\
                    <td>12</td>\
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
                    <td>13</td>\
                    <td>6</td>\
                    <td>13</td>\
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
                    <td>Sorcerous Origin feature</td>\
                    <td>14</td>\
                    <td>6</td>\
                    <td>13</td>\
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
                    <td>15</td>\
                    <td>6</td>\
                    <td>14</td>\
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
                    <td>Ability Score Improvement, Sorcerous Versatility (Optional)</td>\
                    <td>16</td>\
                    <td>6</td>\
                    <td>14</td>\
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
                    <td>Metamagic</td>\
                    <td>17</td>\
                    <td>6</td>\
                    <td>15</td>\
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
                    <td>Sorcerous Origin feature</td>\
                    <td>18</td>\
                    <td>6</td>\
                    <td>15</td>\
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
                    <td>Ability Score Improvement, Sorcerous Versatility (Optional)</td>\
                    <td>19</td>\
                    <td>6</td>\
                    <td>15</td>\
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
                    <td>Sorcerous Restoration</td>\
                    <td>20</td>\
                    <td>6</td>\
                    <td>15</td>\
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
                Sorcerers carry a magical birthright conferred upon them by an exotic bloodline, some otherworldly influence, or exposure to unknown cosmic forces.\
                No one chooses sorcery; the power chooses the sorcerer.</p>";
            var $hp = "<h2>Hit points</h2>\
                        <ul>\
                        <li><b>Hit Dice:</b>1d6 per sorcerer level</li>\
                        <li><b>Hit Points at 1st Level:</b>6 + your Constitution modifier</li>\
                        <li><b>Hit Points at Higher Levels:</b> 1d6 (or 4) + your Constitution modifier per sorcerer level after 1st</li>\
                        </ul>";
            var $prof = "<h2>Proficiencies</h2>\
                        <ul>\
                        <li><b>Armour:</b>None</li>\
                        <li><b>Weapons:</b>Daggers, darts, slings, quarterstaffs, light crossbows</li>\
                        <li><b>Tools:</b>None</li>\
                        <li><b>Saving Throws:</b>Consitution and Charisma</li>\
                        <li><b>Skills:</b>Choose two from this list:\
                        <select name='skills' id='skills' multiple form='jobStuff'>\
                        <option value='arcana'>Arcana</option>\
                        <option value='deception'>Deception</option>\
                        <option value='insight'>Insight</option>\
                        <option value='intimidation'>Intimidation</option>\
                        <option value='persuasion'>Persuasion</option>\
                        <option value='religon'>Religon</option>\
                        </li></select></ul>";
            var $noroll = '<h2>Equipment</h2>\
                        <p>You start with the following equipment, in addition to the equipment granted by your background:</p>\
                        <ul>\
                        <li><select name="option1" id="option1" form="jobStuff>\
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
                        <option value="pouch">Component Pouch</option>\
                        <option value="focus">Arcane Focus</option>\
                        </select></li>\
                        <li><select name="option3" id="option3" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="dungeoneer">Dungeoneer Pack</option>\
                        <option value="explorer">Explorer Pack</option>\
                        </select></li>\
                        <li>Two daggers</li>\
                        </ul>';
            var $roll = '<p>roll 3d4 x 10 to find your starting gold:</p>\
                        <input name="result" id="result" readonly="readonly" form="jobstuff"></input>\
                        <button type = "button" onclick="rollGold(3, 10)">ROLL</button>'
            var $feats = "<h1>Spellcasting</h1>\
                        <p>An event in your past, or in the life of a parent or ancestor, left an indelible mark on you, infusing you with arcane magic. This font of magic, whatever its origin, fuels your spells.</p>\
                        <h1>cantrips</h1>\
                        <p>At 1st level, you know four cantrips of your choice from the sorcerer spell list. You learn additional sorcerer cantrips of your choice at higher levels, as shown in the Cantrips Known column of the Sorcerer table.</p>\
                        <h1>Spell Slots</h1>\
                        <p>The Sorcerer table shows how many spell slots you have to cast your sorcerer spells of 1st level and higher. To cast one of these sorcerer spells, you must expend a slot of the spell's level or higher. You regain all expended spell slots when you finish a long rest.</p>\
                        <p>For example, if you know the 1st-level spell burning hands and have a 1st-level and a 2nd-level spell slot available, you can cast burning hands using either slot.</p>\
                        <h1>Spells Known of 1st Level and Higher</h1>\
                        <p>You know two 1st-level spells of your choice from the sorcerer spell list.</p>\
                        <p>The Spells Known column of the Sorcerer table shows when you learn more sorcerer spells of your choice. Each of these spells must be of a level for which you have spell slots. For instance, when you reach 3rd level in this class, you can learn one new spell of 1st or 2nd level.</p>\
                        <p>Additionally, when you gain a level in this class, you can choose one of the sorcerer spells you know and replace it with another spell from the sorcerer spell list, which also must be of a level for which you have spell slots.</p>\
                        <h1>Spellcasting Ability</h1>\
                        <p>Charisma is your spellcasting ability for your sorcerer spells, since the power of your magic relies on your ability to project your will into the world. You use your Charisma whenever a spell refers to your spellcasting ability. In addition, you use your Charisma modifier when setting the saving throw DC for a sorcerer spell you cast and when making an attack roll with one.</p>\
                        <p><b>Spell save DC</b> = 8 + your proficiency bonus + your Charisma modifier</p>\
                        <p><b>Spell attack modifier</b> = your proficiency bonus + your Charisma modifier</p>\
                        <h1>Spellcasting Focus</h1>\
                        <p>You can use an arcane focus as a spellcasting focus for your sorcerer spells.</p>\
                        <h1>Sorcerous Origin</h1>\
                        <p>Choose a sorcerous origin, which describes the source of your innate magical power. Your choice grants you features when you choose it at 1st level and again at 6th, 14th, and 18th level.</p>\
                        "
            if($('#roll').is(':checked')){
                $("#description").append($table + $desc + $hp + $prof + $roll + $feats);
            }
            else if($('#noroll').is(':checked')){
                $("#description").append($table + $desc + $hp + $prof + $noroll + $feats);
            }
            $("#skills").chosen({max_selected_options: 2});        
        }
        else if(job == "Warlock"){
            var $table = "<table>\
                <tr>\
                    <th>Level</th>\
                    <th>Proficiency Bonus</th>\
                    <th>Features</th>\
                    <th>Cantrips Known</th>\
                    <th>Spells Known</th>\
                    <th>Spell Slots</th>\
                    <th>Slot Level</th>\
                    <th>Invocations Known</th>\
                </tr>\
                <tr>\
                    <td>1st</td>\
                    <td>+2</td>\
                    <td>Otherworldly Patron, Pact Magic</td>\
                    <td>2</td>\
                    <td>2</td>\
                    <td>1</td>\
                    <td>1st</td>\
                    <td>-</td>\
                <tr>\
                    <td>2nd</td>\
                    <td>+2</td>\
                    <td>Eldritch Invocations</td>\
                    <td>2</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>1st</td>\
                    <td>2</td>\
                </tr>\
                <tr>\
                    <td>3rd</td>\
                    <td>+2</td>\
                    <td>Pact Boon</td>\
                    <td>2</td>\
                    <td>4</td>\
                    <td>2</td>\
                    <td>2nd</td>\
                    <td>2</td>\
                </tr>\
                <tr>\
                    <td>4th</td>\
                    <td>+2</td>\
                    <td>Ability Score Improvement, Eldritch Versatility (Optional)</td>\
                    <td>3</td>\
                    <td>5</td>\
                    <td>2</td>\
                    <td>2nd</td>\
                    <td>2<td>\
                </tr>\
                <tr>\
                    <td>5th</td>\
                    <td>+3</td>\
                    <td>/td>\
                    <td>3</td>\
                    <td>6</td>\
                    <td>2</td>\
                    <td>3rd</td>\
                    <td>3</td>\
                </tr>\
                <tr>\
                    <td>6th</td>\
                    <td>+3</td>\
                    <td>Otherworldly Patron feature</td>\
                    <td>3</td>\
                    <td>7</td>\
                    <td>2</td>\
                    <td>3rd</td>\
                    <td>3</td>\
                </tr>\
                <tr>\
                    <td>7th</td>\
                    <td>+3</td>\
                    <td></td>\
                    <td>3</td>\
                    <td>8</td>\
                    <td>2</td>\
                    <td>4th</td>\
                    <td>4</td>\
                </tr>\
                <tr>\
                    <td>8th</td>\
                    <td>+3</td>\
                    <td>Ability Score Improvement, Eldritch Versatility (Optional)</td>\
                    <td>3</td>\
                    <td>9</td>\
                    <td>2</td>\
                    <td>4th</td>\
                    <td>4</td>\
                </tr>\
                <tr>\
                    <td>9th</td>\
                    <td>+4</td>\
                    <td></td>\
                    <td>6</td>\
                    <td>4</td>\
                    <td>3</td>\
                    <td>2</td>\
                    <td>-</td>\
                    <td>-</td>\
                </tr>\
                <tr>\
                    <td>10th</td>\
                    <td>+4</td>\
                    <td>Otherworldly Patron feature</td>\
                    <td>4</td>\
                    <td>10</td>\
                    <td>2</td>\
                    <td>5th</td>\
                    <td>5</td>\
                </tr>\
                <tr>\
                    <td>11th</td>\
                    <td>+4</td>\
                    <td>Mystic Arcanum (6th level)</td>\
                    <td>4</td>\
                    <td>11</td>\
                    <td>3</td>\
                    <td>5th</td>\
                    <td>5</td>\
                </tr>\
                <tr>\
                    <td>12th</td>\
                    <td>+4</td>\
                    <td>Ability Score Improvement, Eldritch Versatility (Optional)</td>\
                    <td>4</td>\
                    <td>11</td>\
                    <td>3</td>\
                    <td>5th</td>\
                    <td>6</td>\
                </tr>\
                <tr>\
                    <td>13th</td>\
                    <td>+5</td>\
                    <td>Mystic Arcanum (7th level)</td>\
                    <td>4</td>\
                    <td>12</td>\
                    <td>3</td>\
                    <td>5th</td>\
                    <td>6</td>\
                </tr>\
                <tr>\
                    <td>14th</td>\
                    <td>+5</td>\
                    <td>Otherworldly Patron feature</td>\
                    <td>4</td>\
                    <td>12</td>\
                    <td>3</td>\
                    <td>5th</td>\
                    <td>6</td>\
                </tr>\
                <tr>\
                    <td>15th</td>\
                    <td>+5</td>\
                    <td>Mystic Arcanum (8th level)</td>\
                    <td>4</td>\
                    <td>13</td>\
                    <td>3</td>\
                    <td>5th</td>\
                    <td>7</td>\
                </tr>\
                <tr>\
                    <td>16th</td>\
                    <td>+5</td>\
                    <td>Ability Score Improvement, Eldritch Versatility (Optional)</td>\
                    <td>4</td>\
                    <td>13</td>\
                    <td>3</td>\
                    <td>5th</td>\
                    <td>7</td>\
                </tr>\
                <tr>\
                    <td>17th</td>\
                    <td>+6</td>\
                    <td>Mystic Arcanum (9th level)</td>\
                    <td>4</td>\
                    <td>14</td>\
                    <td>4</td>\
                    <td>5th</td>\
                    <td>7</td>\
                </tr>\
                <tr>\
                    <td>18th</td>\
                    <td>+6</td>\
                    <td></td>\
                    <td>4</td>\
                    <td>14</td>\
                    <td>4</td>\
                    <td>5th</td>\
                    <td>8</td>\
                </tr>\
                <tr>\
                    <td>19th</td>\
                    <td>+6</td>\
                    <td>Ability Score Improvement, Eldritch Versatility (Optional)</td>\
                    <td>4</td>\
                    <td>15</td>\
                    <td>4</td>\
                    <td>5th</td>\
                    <td>8</td>\
                </tr>\
                <tr>\
                    <td>20th</td>\
                    <td>+6</td>\
                    <td>Eldritch Master</td>\
                    <td>4</td>\
                    <td>15</td>\
                    <td>4</td>\
                    <td>5th</td>\
                    <td>8</td>\
                </tr>\
                </table>";
            var $desc = "<p>\
                Warlocks are seekers of the knowledge that lies hidden in the fabric of the multiverse.\
                Through pacts made with mysterious beings of supernatural power, warlocks unlock magical effects both subtle and spectacular.</p>";
            var $hp = "<h2>Hit points</h2>\
                        <ul>\
                        <li><b>Hit Dice:</b>1d8 per warlock level</li>\
                        <li><b>Hit Points at 1st Level:</b>8 + your Constitution modifier</li>\
                        <li><b>Hit Points at Higher Levels:</b> 1d8 (or 5) + your Constitution modifier per warlock level after 1st</li>\
                        </ul>";
            var $prof = "<h2>Proficiencies</h2>\
                        <ul>\
                        <li><b>Armour:</b>Light Armor</li>\
                        <li><b>Weapons:</b>Simple weapons</li>\
                        <li><b>Tools:</b>None</li>\
                        <li><b>Saving Throws:</b>Wisdom and Charisma</li>\
                        <li><b>Skills:</b>Choose two from this list:\
                        <select name='skills' id='skills' multiple form='jobStuff'>\
                        <option value='arcana'>Arcana</option>\
                        <option value='deception'>Deception</option>\
                        <option value='history'>History</option>\
                        <option value='intimidation'>Intimidation</option>\
                        <option value='investigation'>Investigation</option>\
                        <option value='nature'>Nature</option>\
                        <option value='religon'>Religon</option>\
                        </li></select></ul>";
            var $noroll = '<h2>Equipment</h2>\
                        <p>You start with the following equipment, in addition to the equipment granted by your background:</p>\
                        <ul>\
                        <li>Select two from this list:<select name="option1" id="option1" form="jobStuff>\
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
                        </select></li>\
                        <li><select name="option2" id="option2" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="pouch">Component Pouch</option>\
                        <option value="focus">Arcane Focus</option>\
                        </select></li>\
                        <li><select name="option3" id="option3" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="scholar">scholar pack</option>\
                        <option value="dungeoneer">dungeoneer pack</option>\
                        </select></li>\
                        <li>Leather armor and two daggers</li>\
                        </ul>';
            var $roll = '<p>roll 4d4 x 10 to find your starting gold:</p>\
                        <input name="result" id="result" readonly="readonly" form="jobstuff"></input>\
                        <button type = "button" onclick="rollGold(4, 10)">ROLL</button>'
            var $feats = "<h1>Otherworldly Patron</h1>\
                        <p>At 1st level, you have struck a bargain with an otherworldly being of your choice. Your choice grants you features at 1st level and again at 6th, 10th, and 14th level.</p>\
                        <h1>Pact Magic</h1>\
                        <p>Your arcane research and the magic bestowed on you by your patron have given you facility with spells.</p>\
                        <h1>Cantrips</h1>\
                        <p>You know two cantrips of your choice from the warlock spell list. You learn additional warlock cantrips of your choice at higher levels, as shown in the Cantrips Known column of the Warlock table.</p>\
                        <h1>Spell Slots</h1>\
                        <p>The Warlock table shows how many spell slots you have to cast your warlock spells of 1st through 5th level. The table also shows what the level of those slots is; all of your spell slots are the same level. To cast one of your warlock spells of 1st level or higher, you must expend a spell slot. You regain all expended spell slots when you finish a short or long rest.\
                        <p>For example, when you are 5th level, you have two 3rd-level spell slots. To cast the 1st-level spell witch bolt, you must spend one of those slots, and you cast it as a 3rd-level spell.</p>\
                        <h1>Spells Known of 1st Level and Higher</h1>\
                        <p>At 1st level, you know two 1st-level spells of your choice from the warlock spell list.</p>\
                        <p>The Spells Known column of the Warlock table shows when you learn more warlock spells of your choice of 1st level or higher. A spell you choose must be of a level no higher than what's shown in the table's Slot Level column for your level. When you reach 6th level, for example, you learn a new warlock spell, which can be 1st, 2nd, or 3rd level.</p>\
                        <p>Additionally, when you gain a level in this class, you can choose one of the warlock spells you know and replace it with another spell from the warlock spell list, which also must be of a level for which you have spell slots.</p>\
                        <h1>Spellcasting Ability</h1>\
                        <p>Charisma is your spellcasting ability for your warlock spells, so you use your Charisma whenever a spell refers to your spellcasting ability. In addition, you use your Charisma modifier when setting the saving throw DC for a warlock spell you cast and when making an attack roll with one.</p>\
                        <p><b>Spell save DC</b> = 8 + your proficiency bonus + your Charisma modifier</p>\
                        <p><b>Spell attack modifier</b> = your proficiency bonus + your Charisma modifier</p>\
                        <h1>Spellcasting Focus</h1>\
                        <p>You can use an arcane focus as a spellcasting focus for your warlock spells.</p>\
                        <p></p>"
            if($('#roll').is(':checked')){
                $("#description").append($table + $desc + $hp + $prof + $roll + $feats);
            }
            else if($('#noroll').is(':checked')){
                $("#description").append($table + $desc + $hp + $prof + $noroll + $feats);
            }
            $("#skills").chosen({max_selected_options: 2});
        }
        else if(job == "Wizard"){ 
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
                Wizards are supreme magic-users, defined and united as a class by the spells they cast.\
                Drawing on the subtle weave of magic that permeates the cosmos, wizards cast spells of explosive fire, arcing lightning, subtle deception, brute-force mind control, and much more.</p>";
            var $hp = "<h2>Hit points</h2>\
                        <ul>\
                        <li><b>Hit Dice:</b>1d6 per wizard level</li>\
                        <li><b>Hit Points at 1st Level:</b>6 + your Constitution modifier</li>\
                        <li><b>Hit Points at Higher Levels:</b> 1d6 (or 4) + your Constitution modifier per wizard level after 1st</li>\
                        </ul>";
            var $prof = "<h2>Proficiencies</h2>\
                        <ul>\
                        <li><b>Armour:</b>None</li>\
                        <li><b>Weapons:</b>Daggers, darts, slings, quarterstaffs, light crossbows</li>\
                        <li><b>Tools:</b>None</li>\
                        <li><b>Saving Throws:</b>Wisdom and Intelligence</li>\
                        <li><b>Skills:</b>Choose two from this list:\
                        <select name='skills' id='skills' multiple form='jobStuff'>\
                        <option value='arcane'>Arcane</option>\
                        <option value='history'>History</option>\
                        <option value='insight'>Insight</option>\
                        <option value='investigation'>Investigation</option>\
                        <option value='medicine'>Medicine</option>\
                        <option value='religion'>Religion</option>\
                        </li></select></ul>";
            var $noroll = '<h2>Equipment</h2>\
                        <p>You start with the following equipment, in addition to the equipment granted by your background:</p>\
                        <ul>\
                        <li><select name="option1" id="option1" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="quarterstaff">Quarterstaff - 1d6 bludgeoning - Versatile(1d8)</option>\
                        <option value="dagger">Dagger - 1d4 piercing - Finesse, Light, Thrown (20/60)</option>\
                        </select></li>\
                        <li><select name="option2" id="option2" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="pouch">Component Pouch</option>\
                        <option value="focus">Arcane Focus</option>\
                        </select></li>\
                        <li><select name="option3" id="option3" form="jobStuff>\
                        <option value="">------</option>\
                        <option value="scholar">scholar pack</option>\
                        <option value="explorer">explorer pack</option>\
                        </select></li>\
                        <li>A Spellbook</li>\
                        </ul>';
            var $roll = '<p>roll 4d4 x 10 to find your starting gold:</p>\
                        <input name="result" id="result" readonly="readonly" form="jobstuff"></input>\
                        <button type = "button" onclick="rollGold(4, 10)">ROLL</button>'
            var $feats = "<h1>Spellcasting</h1>\
                        <p>As a student of arcane magic, you have a spellbook containing spells that show the first glimmerings of your true power.</p>\
                        <h1>cantrips</h1>\
                        <p>At 1st level, you know three cantrips of your choice from the wizard spell list. You learn additional wizard cantrips of your choice at higher levels, as shown in the Cantrips Known column of the Wizard table.</p>\
                        <h1>Spellbook</h1>\
                        <p>At 1st level, you have a spellbook containing six 1st-level wizard spells of your choice. Your spellbook is the repository of the wizard spells you know, except your cantrips, which are fixed in your mind.</p>\
                        <p>The spells that you add to your spellbook as you gain levels reflect the arcane research you conduct on your own, as well as intellectual breakthroughs you have had about the nature of the multiverse. You might find other spells during your adventures. You could discover a spell recorded on a scroll in an evil wizard's chest, for example, or in a dusty tome in an ancient library.</p>\
                        <p><b>Copying a Spell into the Book.</b>When you find a wizard spell of 1st level or higher, you can add it to your spellbook if it is of a spell level you can prepare and if you can spare the time to decipher and copy it.</p>\
                        <p>Copying a spell into your spellbook involves reproducing the basic form of the spell, then deciphering the unique system of notation used by the wizard who wrote it. You must practice the spell until you understand the sounds or gestures required, then transcribe it into your spellbook using your own notation.</p>\
                        <p>For each level of the spell, the process takes 2 hours and costs 50 gp. The cost represents material components you expend as you experiment with the spell to master it, as well as the fine inks you need to record it. Once you have spent this time and money, you can prepare the spell just like your other spells.</p>\
                        <p><b>Replacing the Book.</b>You can copy a spell from your own spellbook into another book-for example, if you want to make a backup copy of your spellbook. This is just like copying a new spell into your spellbook, but faster and easier, since you understand your own notation and already know how to cast the spell. You need spend only 1 hour and 10 gp for each level of the copied spell.</p>\
                        <p>If you lose your spellbook, you can use the same procedure to transcribe the spells that you have prepared into a new spellbook. Filling out the remainder of your spellbook requires you to find new spells to do so, as normal. For this reason, many wizards keep backup spellbooks in a safe place.</p>\
                        <p><b>The Book's Appearance.</b> Your spellbook is a unique compilation of spells, with its own decorative flourishes and margin notes. It might be a plain, functional leather volume that you received as a gift from your master, a finely bound gilt-edged tome you found in an ancient library or even a loose collection of notes scrounged together after you lost your previous spellbook in a mishap.</p>\
                        <h1>Preparing and Casting Spells</h1>\
                        <p>The Wizard table shows how many spell slots you have to cast your wizard spells of 1st level and higher. To cast one of these spells, you must expend a slot of the spell's level or higher. You regain all expended spell slots when you finish a long rest.</p>\
                        <p>You prepare the list of wizard spells that are available for you to cast. To do so, choose a number of wizard spells from your spellbook equal to your Intelligence modifier + your wizard level (minimum of one spell). The spells must be of a level for which you have spell slots.</p>\
                        <p>For example, if you're a 3rd-level wizard, you have four 1st-level and two 2nd-level spell slots. With an Intelligence of 16, your list of prepared spells can include six spells of 1st or 2nd level, in any combination, chosen from your spellbook. If you prepare the 1st-level spell magic missile, you can cast it using a 1st-level or a 2nd-level slot. Casting the spell doesn't remove it from your list of prepared spells.</p>\
                        <p>You can change your list of prepared spells when you finish a long rest. Preparing a new list of wizard spells requires time spent studying your spellbook and memorizing the incantations and gestures you must make to cast the spell: at least 1 minute per spell level for each spell on your list.</p>\
                        <h1>Spellcasting Ability</h1>\
                        <p>Intelligence is your spellcasting ability for your wizard spells, since you learn your spells through dedicated study and memorization. You use your Intelligence whenever a spell refers to your spellcasting ability. In addition, you use your Intelligence modifier when setting the saving throw DC for a wizard spell you cast and when making an attack roll with one.</p>\
                        <p><b>Spell save DC</b> = 8 + your proficiency bonus + your Intelligence modifier</p>\
                        <p><b>Spell attack modifier</b> = your proficiency bonus + your Intelligence modifier</p>\
                        <h1>Ritual Casting</h1>\
                        <p>You can cast a wizard spell as a ritual if that spell has the ritual tag and you have the spell in your spellbook. You don't need to have the spell prepared.</p>\
                        <h1>Spellcasting Focus</h1>\
                        <p>You can use an arcane focus as a spellcasting focus for your wizard spells.</p>\
                        <h1>Learning Spells of 1st Level and Higher</h1>\
                        <p>Each time you gain a wizard level, you can add two wizard spells of your choice to your spellbook. Each of these spells must be of a level for which you have spell slots, as shown on the Wizard table. On your adventures, you might find other spells that you can add to your spellbook.</p>\
                        <h1>Arcane Recovery</h1>\
                        <p>You have learned to regain some of your magical energy by studying your spellbook. Once per day when you finish a short rest, you can choose expended spell slots to recover. The spell slots can have a combined level that is equal to or less than half your wizard level (rounded up), and none of the slots can be 6th level or higher.</p>\
                        <p>For example, if you're a 4th-level wizard, you can recover up to two levels worth of spell slots. You can recover either a 2nd-level spell slot or two 1st-level spell slots.</p>"
            if($('#roll').is(':checked')){
                $("#description").append($table + $desc + $hp + $prof + $roll + $feats);
            }
            else if($('#noroll').is(':checked')){
                $("#description").append($table + $desc + $hp + $prof + $noroll + $feats);
            }
            $("#skills").chosen({max_selected_options: 2});
        }
    }
</script>
</html>