<?php
	if (!isset($_SESSION)) session_start(); 
?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Document</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	</head>
	<body>
		<div id="dynamicRender">
			<input type="checkbox" name="dynamicCheckbox" id="dynamicCheckbox" checked>
			<label for="dynamicCheckbox" title="If Dynamic Rendering is turned one, the character sheet will fill in certian inputs based on previous information you've inputted. Ex. Speed, Hit Points, Hit Dice">Dynamic Rendering</label>
		</div>
		<div id="edit">
			<label for="editBtn">Mode:</label>
			<button name="editBtn" id="editBtn" onclick="toggleEdit()">Edit</button>
		</div>
		<div id="download">
			<button id="downloadBtn" onclick="downloadJSON({filename: 'characterData.json'})">Download</button>
		</div>
		<div id="import">
			<label for="importFile">Import File</label>
			<input type="file" name="importFile" id="importBtn" accept=".json">
		</div>
		<div id="raceClassName">
			<label for="characterName">Character Name</label>
			<input type="text" name="characterName" id="nameInput">
			<label for="characterRace">Race</label>
			<select name="characterRace" id="raceSelection">
				<option value="" disabled selected>Choose a race</option>
				<option value="hilldwarf">Hill Dwarf</option>
				<option value="mountaindwarf">Mountain Dwarf</option>
				<option value="darkelf">Dark Elf</option>
				<option value="highelf">High Elf</option>
				<option value="woodelf">Wood Elf</option>
				<option value="stouthalfling">Stout Halfling</option>
				<option value="lightfoothalfling">Lightfoot Halfling</option>
				<option value="human">Human</option>
				<option value="varianthuman">Variant Human</option>
				<option value="dragonborn">Dragonborn</option>
				<option value="forestgnome">Forest Gnome</option>
				<option value="rockgnome">Rock Gnome</option>
				<option value="halfelf">Half-Elf</option>
				<option value="halforc">Half-Orc</option>
				<option value="tiefling">Tiefling</option>
			</select>
			<label for="characterClass">Class</label>
			<select name="characterClass" id="classSelection">
				<option value="" disabled selected>Choose a class</option>
				<option value="barbarian">Barbarian</option>
				<option value="bard">Bard</option>
				<option value="cleric">Cleric</option>
				<option value="druid">Druid</option>
				<option value="fighter">Fighter</option>
				<option value="monk">Monk</option>
				<option value="paladin">Paladin</option>
				<option value="ranger">Ranger</option>
				<option value="rogue">Rogue</option>
				<option value="sorcerer">Sorcerer</option>
				<option value="warlock">Warlock</option>
				<option value="wizard">Wizard</option>
			</select>
		</div>
		<div id="abilityScores">
			<table>
				<tr>
					<td><label for="strength">Strength</label></td>
					<td><label for="dexterity">Dexterity</label></td>
					<td><label for="constitution">Constitution</label></td>
					<td><label for="intelligence">Intelligence</label></td>
					<td><label for="wisdom">Wisdom</label></td>
					<td><label for="charisma">Charisma</label></td>
				</tr>
				<tr>
					<td><input type="number" name="strength" id="strAbility"></td>
					<td><input type="number" name="dexterity" id="dexAbility"></td>
					<td><input type="number" name="constitution" id="conAbility"></td>
					<td><input type="number" name="intelligence" id="intAbility"></td>
					<td><input type="number" name="wisdom" id="wisAbility"></td>
					<td><input type="number" name="charisma" id="chaAbility"></td>
				</tr>
				<tr>
					<td><input type="number" name="strMod" id="strMod"></td>
					<td><input type="number" name="dexMod" id="dexMod"></td>
					<td><input type="number" name="conMod" id="conMod"></td>
					<td><input type="number" name="intMod" id="intMod"></td>
					<td><input type="number" name="wisMod" id="wisMod"></td>
					<td><input type="number" name="chaMod" id="chaMod"></td>
				</tr>
			</table>
		</div>
		<div id="savingThrows">
			<table>
				<tr>
					<td><input type="checkbox" name="strProf" class="profCheckbox" id="strProf"></td>
					<td><input type="number" name="strThrow" id="strThrow"></td>
					<td><label for="strThrow">Strength</label></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="sdexProf" class="profCheckbox" id="dexProf"></td>
					<td><input type="number" name="dexThrow" id="dexThrow"></td>
					<td><label for="dexThrow">Dexterity</label></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="conProf" class="profCheckbox" id="conProf"></td>
					<td><input type="number" name="conThrow" id="conThrow"></td>
					<td><label for="conThrow">Constitution</label></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="intProf" class="profCheckbox" id="intProf"></td>
					<td><input type="number" name="intThrow" id="intThrow"></td>
					<td><label for="intThrow">Intelligence</label></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="wisProf" class="profCheckbox" id="wisProf"></td>
					<td><input type="number" name="wisThrow" id="wisThrow"></td>
					<td><label for="wis">Wisdom</label></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="chaProf" class="profCheckbox" id="chaProf"></td>
					<td><input type="number" name="chaThrow" id="chaThrow"></td>
					<td><label for="chaThrow">Charisma</label></td>
				</tr>
			</table>
		</div>
		<div id="skills">
			<table>
				<tr>
					<td><input type="checkbox" name="acrobaticsProf" class="skillProf"></td>
					<td><input type="number" name="acrobatics" class="skillInputs"></td>
					<td><label for="acrobatics">Acrobatics</label></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="animalProf" class="skillProf"></td>
					<td><input type="number" name="animalHandling" class="skillInputs"></td>
					<td><label for="animalHandling">Animal Handling</label></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="arcanaProf" class="skillProf"></td>
					<td><input type="number" name="arcana" class="skillInputs"></td>
					<td><label for="arcana">Arcana</label></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="athleticsProf" class="skillProf"></td>
					<td><input type="number" name="athletics" class="skillInputs"></td>
					<td><label for="athletics">Athletics</label></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="deceptionProf" class="skillProf"></td>
					<td><input type="number" name="deception" class="skillInputs"></td>
					<td><label for="deception">Deception</label></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="historyProf" class="skillProf"></td>
					<td><input type="number" name="history" class="skillInputs"></td>
					<td><label for="history">History</label></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="insightProf" class="skillProf"></td>
					<td><input type="number" name="insight" class="skillInputs"></td>
					<td><label for="insight">Insight</label></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="intimidationProf" class="skillProf"></td>
					<td><input type="number" name="intimidation" class="skillInputs"></td>
					<td><label for="intimidation">Intimidation</label></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="investigationProf" class="skillProf"></td>
					<td><input type="number" name="investigation" class="skillInputs"></td>
					<td><label for="investigation">Investigation</label></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="medicineProf" class="skillProf"></td>
					<td><input type="number" name="medicine" class="skillInputs"></td>
					<td><label for="medicine">Medicine</label></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="natureProf" class="skillProf"></td>
					<td><input type="number" name="nature" class="skillInputs"></td>
					<td><label for="nature">Nature</label></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="perceptionPzrof" class="skillProf"></td>
					<td><input type="number" name="perception" class="skillInputs"></td>
					<td><label for="perception">Perception</label></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="performanceProf" class="skillProf"></td>
					<td><input type="number" name="performance" class="skillInputs"></td>
					<td><label for="performance">Performance</label></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="persuasionProf" class="skillProf"></td>
					<td><input type="number" name="persuasion" class="skillInputs"></td>
					<td><label for="persuasion">Persuasion</label></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="religionProf" class="skillProf"></td>
					<td><input type="number" name="religion" class="skillInputs"></td>
					<td><label for="religion">Religion</label></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="sleightProf" class="skillProf"></td>
					<td><input type="number" name="sleightHand" class="skillInputs"></td>
					<td><label for="sleightHand">Sleight of Hand</label></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="stealthProf" class="skillProf"></td>
					<td><input type="number" name="stealth" class="skillInputs"></td>
					<td><label for="stealth">Stealth</label></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="survivalProf" class="skillProf"></td>
					<td><input type="number" name="survival" class="skillInputs"></td>
					<td><label for="survival">Survival</label></td>
				</tr>
			</table>
		</div>
		<div id="hitpoints">
			<label for="maxHP">Maximum Hit Points</label>
			<input type="number" name="maxHP" id="maxHPInput">
			<label for="currentHP">Current Hit Points</label>
			<input type="number" name="currentHP" id="currentHPInput">
			<label for="tempHP">Temporary Hit Points</label>
			<input type="number" name="tempHP" id="tempHPInput">
		</div>
		<div id="armorClass">
			<label for="AC">Armor Class</label>
			<input type="text" name="AC" id="ACInput">
		</div>
		<div id="initiative">
			<label for="init">Initiative</label>
			<input type="number" name="init" id="initInput">
		</div>
		<div id="speed">
			<label for="speed">Speed</label>
			<input type="number" name="speed" id="speedInput">
		</div>
		<div id="hitDice">
			<label for="totalHitDice">Total</label>
			<input type="number" name="totalHitDice" id="totalHitDiceInput">
			<label for="hitDice">Hit Dice</label>
			<input type="text" name="hitDice" id="hitDiceInput">
		</div>
		<div id="deathSaves">
			<table>
				<tr>
					<td>
						<label for="successfulSaves">Successes</label>
					</td>
					<td>
						<input type="checkbox" name="successfulSaves">
					</td>
					<td>
						<input type="checkbox" name="successfulSaves">
					</td>
					<td>
						<input type="checkbox" name="successfulSaves">
					</td>
				</tr>
				<tr>
					<td>
						<label for="failedSaves">Failures</label>
					</td>
					<td>
						<input type="checkbox" name="failedSaves">
					</td>
					<td>
						<input type="checkbox" name="failedSaves">
					</td>
					<td>
						<input type="checkbox" name="failedSaves">
					</td>
				</tr>
			</table>
			<p>Death Saves</p>
		</div>
		<div id="inspiration">
			<label for="inspiration">Inspiration</label>
			<input type="checkbox" name="inspiration" id="inspirationInput">
		</div>
		<div id="proficiency">
			<label for="proficiency">Proficiency Bonus</label>
			<input type="number" name="proficiency" id="proficiencyInput">
		</div>
		<div id="passiveWisdom">
			<label for="passiveWisdom">Passive Wisdom (Perception)</label>
			<input type="number" name="passiveWisdom" id="passiveWisdomInput">
		</div>
		<div id="profAndLang">
			<p>Proficiencies and Languages</p>
			<label for="armorProf">Armor:</label>
			<input type="text" name="armorProf" id="armorProf">
			<label for="weaponProf">Weapons:</label>
			<input type="text" name="weaponProf" id="weaponProf">
			<label for="toolProf">Tools:</label>
			<input type="text" name="toolProf" id="toolProf">
			<label for="langProf">Languages:</label>
			<input type="text" name="langProf" id="langProf">
		</div>
		<div id="equipment">
			<div id="money">
				<label for="cp">CP</label>
				<input type="number" name="cp" class="moneyInputs">
				<label for="sp">SP</label>
				<input type="number" name="sp" class="moneyInputs">
				<label for="ep">EP</label>
				<input type="number" name="ep" class="moneyInputs">
				<label for="gp">GP</label>
				<input type="number" name="gp" class="moneyInputs">
				<label for="pp">PP</label>
				<input type="number" name="pp" class="moneyInputs">
			</div>
			<label for="equipment">Equipment</label>
			<input type="text" name="equipment" id="equipmentInput">
		</div>
		<div id="featAndTrait">
			<label for="featAndTrait">Feats and Traits</label>
			<input type="text" name="featAndTrait" id="featAndTraitInput">
		</div>
		<div id="attacks">
			<table>
				<tr>
					<td>
						<p>Name</p>
					</td>
					<td>
						<p>Atk Bonus</p>
					</td>
					<td>
						<p>Damage/Type</p>
					</td>
				</tr>
				<tr>
					<td><input type="text" name="weaponOneName" class="weaponInfo"></td>
					<td><input type="text" name="weaponTwoName" class="weaponInfo"></td>
					<td><input type="text" name="weaponThreeName" class="weaponInfo"></td>
				</tr>
				<tr>
					<td><input type="text" name="weaponOneBonus" class="weaponInfo"></td>
					<td><input type="text" name="weaponTwoBonus" class="weaponInfo"></td>
					<td><input type="text" name="weaponThreeBonus" class="weaponInfo"></td>
				</tr>
				<tr>
					<td><input type="text" name="weaponOneDmg" class="weaponInfo"></td>
					<td><input type="text" name="weaponTwoDmg" class="weaponInfo"></td>
					<td><input type="text" name="weaponThreeDmg" class="weaponInfo"></td>
				</tr>
			</table>
			<input type="text" name="attacks" id="attacksInput">
			<label for="attacks">Attacks & Spellcasting</label>
		</div>
		<div id="spellSheet">
			<div id="casterInfo">
				<label for="spellClass">Spellcasting Class</label>
				<input type="text" name="spellClass" class="casterInfoInput">
				<label for="spellAbility">Spellcasting Ability</label>
				<input type="number" name="spellAbility" class="casterInfoInput">
				<label for="spellSave">Spell Save DC</label>
				<input type="number" name="spellSave" class="casterInfoInput">
				<label for="spellAttack">Spell Attack Bonus</label>
				<input type="number" name="spellAttack" class="casterInfoInput">
			</div>
			<div id="spells">
				<div id="cantrips">
					<table>
						<tr>
							<td><p>0</p></td>
							<td><p>Cantrips</p></td>
						</tr>
						<tr>
							<td colspan="2"><input type="text" name="cantripOne" class="spellInput"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="text" name="cantripTwo" class="spellInput"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="text" name="cantripThree" class="spellInput"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="text" name="cantripFour" class="spellInput"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="text" name="cantripFive" class="spellInput"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="text" name="cantripSix" class="spellInput"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="text" name="cantripSeven" class="spellInput"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="text" name="cantripEight" class="spellInput"></td>
						</tr>
					</table>
				</div>
				<div id="levelOne">
					<div class="spellHeader">
						<table>
							<tr>
								<td><p>Spell Level</p></td>
								<td><label for="levelOneTotal">Slots Total</label></td>
								<td><label for="levelOneSpent">Slots Expended</label></td>
							</tr>
							<tr>
								<td><p>1</p></td>
								<td><input type="number" name="levelOneTotal" class="spellSlotTotal"></td>
								<td><input type="number" name="levelOneSpent" class="spellSlotSpent"></td>
							</tr>
						</table>
					</div>
					<table>
						<tr>
							<td><p>Prepared</p></td>
							<td><p>Spell Name</p></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelOneSpellOne" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelOneSpellTwo" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelOneSpellThree" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelOneSpellFour" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelOneSpellFive" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelOneSpellSix" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelOneSpellSeven" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelOneSpellEight" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelOneSpellNine" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelOneSpellTen" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelOneSpellEleven" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelOneSpellTwelve" class="spellName"></td>
						</tr>
					</table>
				</div>
				<div id="levelTwo">
					<div class="spellHeader">
						<table>
							<tr>
								<td><p>Spell Level</p></td>
								<td><label for="levelTwoTotal">Slots Total</label></td>
								<td><label for="levelTwoSpent">Slots Expended</label></td>
							</tr>
							<tr>
								<td><p>2</p></td>
								<td><input type="number" name="levelTwoTotal" class="spellSlotTotal"></td>
								<td><input type="number" name="levelTwoSpent" class="spellSlotSpent"></td>
							</tr>
						</table>
					</div>
					<table>
						<tr>
							<td><p>Prepared</p></td>
							<td><p>Spell Name</p></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpellOne" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpellTwo" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpellThree" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpellFour" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpellFive" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpellSix" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpellSeven" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpellEight" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpellNine" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpellTen" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpellEleven" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpellTwelve" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpellThirteen" class="spellName"></td>
						</tr>
					</table>
				</div>
				<div id="levelThree">
					<div class="spellHeader">
						<table>
							<tr>
								<td><p>Spell Level</p></td>
								<td><label for="levelThreeTotal">Slots Total</label></td>
								<td><label for="levelThreeSpent">Slots Expended</label></td>
							</tr>
							<tr>
								<td><p>3</p></td>
								<td><input type="number" name="levelThreeTotal" class="spellSlotTotal"></td>
								<td><input type="number" name="levelThreeSpent" class="spellSlotSpent"></td>
							</tr>
						</table>
					</div>
					<table>
						<tr>
							<td><p>Prepared</p></td>
							<td><p>Spell Name</p></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpellOne" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpellTwo" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpellThree" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpellFour" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpellFive" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpellSix" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpellSeven" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpellEight" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpellNine" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpellTen" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpellEleven" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpellTwelve" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpellThirteen" class="spellName"></td>
						</tr>
					</table>
				</div>
				<div id="levelFour">
					<div class="spellHeader">
						<table>
							<tr>
								<td><p>Spell Level</p></td>
								<td><label for="levelFourTotal">Slots Total</label></td>
								<td><label for="levelFourSpent">Slots Expended</label></td>
							</tr>
							<tr>
								<td><p>4</p></td>
								<td><input type="number" name="levelFourTotal" class="spellSlotTotal"></td>
								<td><input type="number" name="levelFourSpent" class="spellSlotSpent"></td>
							</tr>
						</table>
					</div>
					<table>
						<tr>
							<td><p>Prepared</p></td>
							<td><p>Spell Name</p></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpellOne" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpellTwo" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpellThree" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpellFour" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpellFive" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpellSix" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpellSeven" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpellEight" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpellNine" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpellTen" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpellEleven" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpellTwelve" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpellThirteen" class="spellName"></td>
						</tr>
					</table>
				</div>
				<div id="levelFive">
					<div class="spellHeader">
						<table>
							<tr>
								<td><p>Spell Level</p></td>
								<td><label for="levelFiveTotal">Slots Total</label></td>
								<td><label for="levelFiveSpent">Slots Expended</label></td>
							</tr>
							<tr>
								<td><p>5</p></td>
								<td><input type="number" name="levelFiveTotal" class="spellSlotTotal"></td>
								<td><input type="number" name="levelFiveSpent" class="spellSlotSpent"></td>
							</tr>
						</table>
					</div>
					<table>
						<tr>
							<td><p>Prepared</p></td>
							<td><p>Spell Name</p></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFiveSpellOne" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFiveSpellTwo" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFiveSpellThree" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFiveSpellFour" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFiveSpellFive" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFiveSpellSix" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFiveSpellSeven" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFiveSpellEight" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFiveSpellNine" class="spellName"></td>
						</tr>
					</table>
				</div>
				<div id="levelSix">
					<div class="spellHeader">
						<table>
							<tr>
								<td><p>Spell Level</p></td>
								<td><label for="levelSixTotal">Slots Total</label></td>
								<td><label for="levelSixSpent">Slots Expended</label></td>
							</tr>
							<tr>
								<td><p>6</p></td>
								<td><input type="number" name="levelSixTotal" class="spellSlotTotal"></td>
								<td><input type="number" name="levelSixSpent" class="spellSlotSpent"></td>
							</tr>
						</table>
					</div>
					<table>
						<tr>
							<td><p>Prepared</p></td>
							<td><p>Spell Name</p></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSixSpellOne" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSixSpellTwo" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSixSpellThree" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSixSpellFour" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSixSpellFive" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSixSpellSix" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSixSpellSeven" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSixSpellEight" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSixSpellNine" class="spellName"></td>
						</tr>
					</table>
				</div>
				<div id="levelSeven">
					<div class="spellHeader">
						<table>
							<tr>
								<td><p>Spell Level</p></td>
								<td><label for="levelSevenTotal">Slots Total</label></td>
								<td><label for="levelSevenSpent">Slots Expended</label></td>
							</tr>
							<tr>
								<td><p>7</p></td>
								<td><input type="number" name="levelSevenTotal" class="spellSlotTotal"></td>
								<td><input type="number" name="levelSevenSpent" class="spellSlotSpent"></td>
							</tr>
						</table>
					</div>
					<table>
						<tr>
							<td><p>Prepared</p></td>
							<td><p>Spell Name</p></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSevenSpellOne" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSevenSpellTwo" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSevenSpellThree" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSevenSpellFour" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSevenSpellFive" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSevenSpellSix" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSevenSpellSeven" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSevenSpellEight" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSevenSpellNine" class="spellName"></td>
						</tr>
					</table>
				</div>
				<div id="levelEight">
					<div class="spellHeader">
						<table>
							<tr>
								<td><p>Spell Level</p></td>
								<td><label for="levelEightTotal">Slots Total</label></td>
								<td><label for="levelEightSpent">Slots Expended</label></td>
							</tr>
							<tr>
								<td><p>8</p></td>
								<td><input type="number" name="levelEightTotal" class="spellSlotTotal"></td>
								<td><input type="number" name="levelEightSpent" class="spellSlotSpent"></td>
							</tr>
						</table>
					</div>
					<table>
						<tr>
							<td><p>Prepared</p></td>
							<td><p>Spell Name</p></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelEightSpellOne" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelEightSpellTwo" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelEightSpellThree" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelEightSpellFour" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelEightSpellFive" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelEightSpellSix" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelEightSpellSeven" class="spellName"></td>
						</tr>
					</table>
				</div>
				<div id="levelNine">
					<div class="spellHeader">
						<table>
							<tr>
								<td><p>Spell Level</p></td>
								<td><label for="levelNineTotal">Slots Total</label></td>
								<td><label for="levelNineSpent">Slots Expended</label></td>
							</tr>
							<tr>
								<td><p>9</p></td>
								<td><input type="number" name="levelNineTotal" class="spellSlotTotal"></td>
								<td><input type="number" name="levelNineSpent" class="spellSlotSpent"></td>
							</tr>
						</table>
					</div>
					<table>
						<tr>
							<td><p>Prepared</p></td>
							<td><p>Spell Name</p></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelNineSpellOne" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelNineSpellTwo" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelNineSpellThree" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelNineSpellFour" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelNineSpellFive" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelNineSpellSix" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelNineSpellSeven" class="spellName"></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</body>
	<?php
		require 'character-sheet.php';
	?>
	</html>