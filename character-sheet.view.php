<?php
if (!isset($_SESSION))
	session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Character Sheet</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<link rel="stylesheet" href="style.css">
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
	<article id="sheet">
		<div class="horizontal-container flex-between">
			<div id="dynamicRender">
				<input type="checkbox" name="dynamicCheckbox" id="dynamicCheckbox" checked>
				<label for="dynamicCheckbox" title="If Dynamic Rendering is turned one, the character sheet will fill in certian inputs based on previous information you've inputted. Ex. Speed, Hit Points, Hit Dice">Dynamic
					Rendering</label>
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
		</div>

		<div id="raceClassName" class="horizontal-container spacing">
			<div class="vertical-container crc-spacing">
				<label for="characterName" class="section-head">Character Name</label>
				<input type="text" name="characterName" id="nameInput">
			</div>
			<div class="vertical-container crc-spacing">
				<label for="characterRace" class="section-head">Race</label>
				<select name="characterRace" id="raceSelection">
					<option value="" disabled selected>Choose a race</option>
					<option value="hill-dwarf">Hill Dwarf</option>
					<option value="mountain-dwarf">Mountain Dwarf</option>
					<option value="dark-elf">Dark Elf</option>
					<option value="high-elf">High Elf</option>
					<option value="wood-elf">Wood Elf</option>
					<option value="stout-halfling">Stout Halfling</option>
					<option value="lightfoot-halfling">Lightfoot Halfling</option>
					<option value="human">Human</option>
					<option value="variant-human">Variant Human</option>
					<option value="dragonborn">Dragonborn</option>
					<option value="forest-gnome">Forest Gnome</option>
					<option value="rock-gnome">Rock Gnome</option>
					<option value="half-elf">Half-Elf</option>
					<option value="half-orc">Half-Orc</option>
					<option value="asmodeus-tiefling">Tiefling</option>
				</select>
			</div>
			<div class="vertical-container crc-spacing">
				<label for="characterClass" class="section-head">Class</label>
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
		</div>

		<div id="abilityScores" class="horizontal-container flex-between spacing">
			<div class="vertical-container flex-center">
				<label for="strength" class="section-head">Strength</label>
				<div class="horizontal-container">
					<input type="number" name="strength" id="strAbility" class="square">
					<input type="number" name="strMod" id="strMod" class="square">
				</div>
			</div>
			<div class="vertical-container flex-center">
				<label for="dexterity" class="section-head">Dexterity</label>
				<div class="horizontal-container">
					<input type="number" name="dexterity" id="dexAbility" class="square">
					<input type="number" name="dexMod" id="dexMod" class="square">
				</div>
			</div>
			<div class="vertical-container flex-center">
				<label for="constitution" class="section-head">Constitution</label>
				<div class="horizontal-container">
					<input type="number" name="constitution" id="conAbility" class="square">
					<input type="number" name="conMod" id="conMod" class="square">
				</div>
			</div>
			<div class="vertical-container flex-center">
				<label for="intelligence" class="section-head">Intelligence</label>
				<div class="horizontal-container">
					<input type="number" name="intelligence" id="intAbility" class="square">
					<input type="number" name="intMod" id="intMod" class="square">
				</div>
			</div>
			<div class="vertical-container flex-center">
				<label for="wisdom" class="section-head">Wisdom</label>
				<div class="horizontal-container">
					<input type="number" name="wisdom" id="wisAbility" class="square">
					<input type="number" name="wisMod" id="wisMod" class="square">
				</div>
			</div>
			<div class="vertical-container flex-center">
				<label for="charisma" class="section-head">Charisma</label>
				<div class="horizontal-container">
					<input type="number" name="charisma" id="chaAbility" class="square">
					<input type="number" name="chaMod" id="chaMod" class="square">
				</div>
			</div>
		</div>
		<div class="horizontal-container flex-between section-spacing">
			<div class="vertical-container flex-between fourth1">
				<div id="savingThrows">
					<p class="section-head">Saving Throws</p>
					<table class="saving-throw-table">
						<tr class="horizontal-container flex-between">
							<td><label for="strThrow" class="section-subhead">Strength</label></td>
							<td>
								<div>
									<input type="number" name="strThrow" id="strThrow" class="square">
									<input type="checkbox" name="strProf" class="profCheckbox" id="strProf">
								</div>
							</td>
						</tr>
						<tr class="horizontal-container flex-between">
							<td><label for="dexThrow" class="section-subhead">Dexterity</label></td>
							<td>
								<div>
									<input type="number" name="dexThrow" id="dexThrow" class="square">
									<input type="checkbox" name="sdexProf" class="profCheckbox" id="dexProf">
								</div>
							</td>
						</tr>
						<tr class="horizontal-container flex-between">
							<td><label for="conThrow" class="section-subhead">Constitution</label></td>
							<td>
								<div>
									<input type="number" name="conThrow" id="conThrow" class="square">
									<input type="checkbox" name="conProf" class="profCheckbox" id="conProf">
								</div>
							</td>
						</tr>
						<tr class="horizontal-container flex-between">
							<td><label for="intThrow" class="section-subhead">Intelligence</label></td>
							<td>
								<div>
									<input type="number" name="intThrow" id="intThrow" class="square">
									<input type="checkbox" name="intProf" class="profCheckbox" id="intProf">
								</div>
							</td>
						</tr>
						<tr class="horizontal-container flex-between">
							<td><label for="wis" class="section-subhead">Wisdom</label></td>
							<td>
								<div>
									<input type="number" name="wisThrow" id="wisThrow" class="square">
									<input type="checkbox" name="wisProf" class="profCheckbox" id="wisProf">
								</div>
							</td>
						</tr>
						<tr class="horizontal-container flex-between">
							<td><label for="chaThrow" class="section-subhead">Charisma</label></td>
							<td>
								<div>
									<input type="number" name="chaThrow" id="chaThrow" class="square">
									<input type="checkbox" name="chaProf" class="profCheckbox" id="chaProf">
								</div>
							</td>
						</tr>
					</table>
					<div id="passiveWisdom" class="vertical-container spacing">
						<label for="passiveWisdom" class="section-head">Passive Wisdom (Perception)</label>
						<div class="vertical-container flex-center">
							<input type="number" name="passiveWisdom" id="passiveWisdomInput" class="square">
						</div>
					</div>
				</div>
			</div>
			<div id="profAndLang" class="vertical-container flex-start fourth2">
				<div id="proficiency">
					<label for="proficiency" class="section-head">Proficiency Bonus</label>
					<input type="number" name="proficiency" id="proficiencyInput" class="skillInputs">
				</div>
				<div id="inspiration" class="spacing">
					<label for="inspiration" class="section-head">Inspiration</label>
					<input type="checkbox" name="inspiration" id="inspirationInput">
				</div>
				<p class="section-head spacing">Proficiencies and Languages</p>
				<!-- <div class="horizontal-container flex-between">
					<label for="armorProf">Armor:</label>
					<input type="text" name="armorProf" id="armorProf" class="rectangle">
				</div> -->
				<div class="horizontal-container flex-between">
					<label for="weaponProf">Proficiencies:</label>
					<input type="text" name="weaponProf" id="weaponProf" class="rectangle">
				</div>
				<!-- <div class="horizontal-container flex-between">
					<label for="toolProf">Tools:</label>
					<input type="text" name="toolProf" id="toolProf" class="rectangle">
				</div> -->
				<div class="horizontal-container flex-between">
					<label for="langProf">Languages:</label>
					<input type="text" name="langProf" id="langProf" class="rectangle">
				</div>
				<div id="deathSaves" class="vertical-container spacing">
					<p class="section-head">Death Saves</p>
					<table>
						<tr>
							<td>
								<label for="successfulSaves" class="section-subhead">Successes</label>
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
								<label for="failedSaves" class="section-subhead">Failures</label>
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
				</div>
			</div>
			<div class="vertical-container fourth3">
				<div class="horizontal-container flex-between">
					<div id="armorClass" class="vertical-container flex-center">
						<label for="AC" class="section-head">Armor Class</label>
						<input type="text" name="AC" id="ACInput" class="square">
					</div>
					<div id="initiative" class="vertical-container flex-center">
						<label for="init" class="section-head">Initiative</label>
						<input type="number" name="init" id="initInput" class="square">
					</div>
					<div id="speed" class="vertical-container flex-center">
						<label for="speed" class="section-head">Speed</label>
						<input type="number" name="speed" id="speedInput" class="square">
					</div>
				</div>
				<div id="hitpoints" class="vertical-container flex-center spacing">
					<label for="maxHP" class="section-head">Hit Points</label>
					<div style="display: flex; align-items: center;">
						<input type="number" name="currentHP" id="currentHPInput" class="square">
						<span style="font-size: 3em; padding-left: 5px; padding-right: 5px;">/</span>
						<input type="number" name="maxHP" id="maxHPInput" class="square">
					</div>
					<label for="tempHP" class="section-head half-spacing">Temporary Hit Points</label>
					<input type="number" name="tempHP" id="tempHPInput" class="rectangle">
					<div id="hitDice" class="half-spacing vertical-container flex-center">
						<p class="section-head">Hit Dice</p>
						<div class="horizontal-container flex-between">
							<div class="vertical-container flex-center">
								<label for="hitDice">Current</label>
								<input type="text" name="hitDice" id="hitDiceInput" class="rectangle">
							</div>
							<div class="vertical-container flex-center">
								<label for="totalHitDice">Total</label>
								<input type="text" name="totalHitDice" id="totalHitDiceInput" class="rectangle">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="skills" class="fourth4">
				<p class="section-head">Skills</p>
				<table class="saving-throw-table">
					<tr>
						<td><label for="acrobatics">Acrobatics</label></td>
						<td><input type="checkbox" name="acrobaticsProf" class="skillProf"></td>
						<td><input type="number" name="acrobatics" class="skillInputs"></td>
					</tr>
					<tr>
						<td><label for="animalHandling">Animal Handling</label></td>
						<td><input type="checkbox" name="animalProf" class="skillProf"></td>
						<td><input type="number" name="animalHandling" class="skillInputs"></td>
					</tr>
					<tr>
						<td><label for="arcana">Arcana</label></td>
						<td><input type="checkbox" name="arcanaProf" class="skillProf"></td>
						<td><input type="number" name="arcana" class="skillInputs"></td>
					</tr>
					<tr>
						<td><label for="athletics">Athletics</label></td>
						<td><input type="checkbox" name="athleticsProf" class="skillProf"></td>
						<td><input type="number" name="athletics" class="skillInputs"></td>
					</tr>
					<tr>
						<td><label for="deception">Deception</label></td>
						<td><input type="checkbox" name="deceptionProf" class="skillProf"></td>
						<td><input type="number" name="deception" class="skillInputs"></td>
					</tr>
					<tr>
						<td><label for="history">History</label></td>
						<td><input type="checkbox" name="historyProf" class="skillProf"></td>
						<td><input type="number" name="history" class="skillInputs"></td>
					</tr>
					<tr>
						<td><label for="insight">Insight</label></td>
						<td><input type="checkbox" name="insightProf" class="skillProf"></td>
						<td><input type="number" name="insight" class="skillInputs"></td>
					</tr>
					<tr>
						<td><label for="intimidation">Intimidation</label></td>
						<td><input type="checkbox" name="intimidationProf" class="skillProf"></td>
						<td><input type="number" name="intimidation" class="skillInputs"></td>
					</tr>
					<tr>
						<td><label for="investigation">Investigation</label></td>
						<td><input type="checkbox" name="investigationProf" class="skillProf"></td>
						<td><input type="number" name="investigation" class="skillInputs"></td>
					</tr>
					<tr>
						<td><label for="medicine">Medicine</label></td>
						<td><input type="checkbox" name="medicineProf" class="skillProf"></td>
						<td><input type="number" name="medicine" class="skillInputs"></td>
					</tr>
					<tr>
						<td><label for="nature">Nature</label></td>
						<td><input type="checkbox" name="natureProf" class="skillProf"></td>
						<td><input type="number" name="nature" class="skillInputs"></td>
					</tr>
					<tr>
						<td><label for="perception">Perception</label></td>
						<td><input type="checkbox" name="perceptionPzrof" class="skillProf"></td>
						<td><input type="number" name="perception" class="skillInputs"></td>
					</tr>
					<tr>
						<td><label for="performance">Performance</label></td>
						<td><input type="checkbox" name="performanceProf" class="skillProf"></td>
						<td><input type="number" name="performance" class="skillInputs"></td>
					</tr>
					<tr>
						<td><label for="persuasion">Persuasion</label></td>
						<td><input type="checkbox" name="persuasionProf" class="skillProf"></td>
						<td><input type="number" name="persuasion" class="skillInputs"></td>
					</tr>
					<tr>
						<td><label for="religion">Religion</label></td>
						<td><input type="checkbox" name="religionProf" class="skillProf"></td>
						<td><input type="number" name="religion" class="skillInputs"></td>
					</tr>
					<tr>
						<td><label for="sleightHand">Sleight of Hand</label></td>
						<td><input type="checkbox" name="sleightProf" class="skillProf"></td>
						<td><input type="number" name="sleightHand" class="skillInputs"></td>
					</tr>
					<tr>
						<td><label for="stealth">Stealth</label></td>
						<td><input type="checkbox" name="stealthProf" class="skillProf"></td>
						<td><input type="number" name="stealth" class="skillInputs"></td>
					</tr>
					<tr>
						<td><label for="survival">Survival</label></td>
						<td><input type="checkbox" name="survivalProf" class="skillProf"></td>
						<td><input type="number" name="survival" class="skillInputs"></td>
					</tr>
				</table>
			</div>
		</div>

		<div class="horizontal-container flex-between section-spacing">
			<div id="equipment" class="vertical-container">
				<label for="equipment" class="section-head">Equipment</label>
				<textarea name="equipment" id="equipmentInput" class="equipment-box half-spacing"></textarea>
				<div id="money" class="vertical-container half-spacing">
					<label class="section-head">Money</label>
					<div class="horizontal-container flex-around half-spacing">
						<div>
							<label for="pp">PP</label>
							<input type="number" name="pp" class="moneyInputs">
						</div>
						<div>
							<label for="gp">GP</label>
							<input type="number" name="gp" class="moneyInputs">
						</div>
					</div>
					<div class="horizontal-container flex-around">
						<div>
							<label for="cp">CP</label>
							<input type="number" name="cp" class="moneyInputs">
						</div>
						<div>
							<label for="sp">SP</label>
							<input type="number" name="sp" class="moneyInputs">
						</div>
						<div>
							<label for="ep">EP</label>
							<input type="number" name="ep" class="moneyInputs">
						</div>
					</div>
				</div>
			</div>
			<div id="featAndTrait" class="vertical-container">
				<label for="featAndTrait" class="section-head">Feats and Traits</label>
				<textarea type="text" name="featAndTrait" id="featAndTraitInput" class="feat-box half-spacing"></textarea>
			</div>
			<div id="attacks" class="vertical-container">
				<p class="section-head">Attacks</p>
				<table>
					<tr>
						<td>
							<p class="section-subhead">Name</p>
						</td>
						<td>
							<p class="section-subhead">Atk Bonus</p>
						</td>
						<td>
							<p class="section-subhead">Damage/Type</p>
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
				<label for="attacks" class="section-head spacing">Notes</label>
				<textarea name="attacks" id="attacksInput" class="half-spacing attack-box"></textarea>
			</div>
		</div>

		<div id="spellSheet" class="vertical-container section-spacing">
			<p class="section-head">Spellcasting</p>
			<div id="casterInfo" class="horizontal-container flex-between spacing">
				<div id="cantrips">
					<table>
						<tr>
							<td>
								<p>0</p>
							</td>
							<td>
								<p>Cantrips</p>
							</td>
						</tr>
						<tr>
							<td colspan="2"><input type="text" name="cantrip1" class="spellInput"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="text" name="cantrip2" class="spellInput"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="text" name="cantrip3" class="spellInput"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="text" name="cantrip4" class="spellInput"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="text" name="cantrip5" class="spellInput"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="text" name="cantrip6" class="spellInput"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="text" name="cantrip7" class="spellInput"></td>
						</tr>
						<tr>
							<td colspan="2"><input type="text" name="cantrip8" class="spellInput"></td>
						</tr>
					</table>
				</div>
				<div>
					<label for="spellClass" class="section-subhead">Spellcasting Class</label>
					<input type="text" name="spellClass" class="casterInfoInput square">
				</div>
				<div>
					<label for="spellAbility" class="section-subhead">Spellcasting Ability</label>
					<input type="number" name="spellAbility" class="casterInfoInput square">
				</div>
				<div>
					<label for="spellSave" class="section-subhead">Spell Save DC</label>
					<input type="number" name="spellSave" class="casterInfoInput square">
				</div>
				<div>
					<label for="spellAttack" class="section-subhead">Spell Attack Bonus</label>
					<input type="number" name="spellAttack" class="casterInfoInput square">
				</div>
			</div>
			<div id="spells" class="spell-section spacing">
				<div id="levelOne">
					<div class="spellHeader">
						<table>
							<tr>
								<td>
									<p>Spell Level</p>
								</td>
								<td><label for="levelOneTotal">Slots Total</label></td>
								<td><label for="levelOneSpent">Slots Expended</label></td>
							</tr>
							<tr>
								<td>
									<p>1</p>
								</td>
								<td><input type="number" name="levelOneTotal" class="spellSlotTotal"></td>
								<td><input type="number" name="levelOneSpent" class="spellSlotSpent"></td>
							</tr>
						</table>
					</div>
					<table>
						<tr>
							<td>
								<p>Prepared</p>
							</td>
							<td>
								<p>Spell Name</p>
							</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelOneSpell1" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelOneSpell2" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelOneSpell3" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelOneSpell4" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelOneSpell5" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelOneSpell6" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelOneSpell7" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelOneSpell8" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelOneSpell9" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelOneSpell10" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelOneSpell11" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelOneSpell12" class="spellName"></td>
						</tr>
					</table>
				</div>
				<div id="levelTwo">
					<div class="spellHeader">
						<table>
							<tr>
								<td>
									<p>Spell Level</p>
								</td>
								<td><label for="levelTwoTotal">Slots Total</label></td>
								<td><label for="levelTwoSpent">Slots Expended</label></td>
							</tr>
							<tr>
								<td>
									<p>2</p>
								</td>
								<td><input type="number" name="levelTwoTotal" class="spellSlotTotal"></td>
								<td><input type="number" name="levelTwoSpent" class="spellSlotSpent"></td>
							</tr>
						</table>
					</div>
					<table>
						<tr>
							<td>
								<p>Prepared</p>
							</td>
							<td>
								<p>Spell Name</p>
							</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpell1" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpell2" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpell3" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpell4" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpell5" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpell6" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpell7" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpell8" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpell9" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpell10" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpell11" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpell12" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelTwoSpell13" class="spellName"></td>
						</tr>
					</table>
				</div>
				<div id="levelThree">
					<div class="spellHeader">
						<table>
							<tr>
								<td>
									<p>Spell Level</p>
								</td>
								<td><label for="levelThreeTotal">Slots Total</label></td>
								<td><label for="levelThreeSpent">Slots Expended</label></td>
							</tr>
							<tr>
								<td>
									<p>3</p>
								</td>
								<td><input type="number" name="levelThreeTotal" class="spellSlotTotal"></td>
								<td><input type="number" name="levelThreeSpent" class="spellSlotSpent"></td>
							</tr>
						</table>
					</div>
					<table>
						<tr>
							<td>
								<p>Prepared</p>
							</td>
							<td>
								<p>Spell Name</p>
							</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpell1" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpell2" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpell3" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpell4" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpell5" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpell6" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpell7" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpell8" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpell9" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpell10" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpell11" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpell12" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelThreeSpell13" class="spellName"></td>
						</tr>
					</table>
				</div>
				<div id="levelFour">
					<div class="spellHeader">
						<table>
							<tr>
								<td>
									<p>Spell Level</p>
								</td>
								<td><label for="levelFourTotal">Slots Total</label></td>
								<td><label for="levelFourSpent">Slots Expended</label></td>
							</tr>
							<tr>
								<td>
									<p>4</p>
								</td>
								<td><input type="number" name="levelFourTotal" class="spellSlotTotal"></td>
								<td><input type="number" name="levelFourSpent" class="spellSlotSpent"></td>
							</tr>
						</table>
					</div>
					<table>
						<tr>
							<td>
								<p>Prepared</p>
							</td>
							<td>
								<p>Spell Name</p>
							</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpell1" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpell2" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpell3" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpell4" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpell5" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpell6" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpell7" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpell8" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpell9" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpell10" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpell11" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpell12" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFourSpell13" class="spellName"></td>
						</tr>
					</table>
				</div>
				<div id="levelFive">
					<div class="spellHeader">
						<table>
							<tr>
								<td>
									<p>Spell Level</p>
								</td>
								<td><label for="levelFiveTotal">Slots Total</label></td>
								<td><label for="levelFiveSpent">Slots Expended</label></td>
							</tr>
							<tr>
								<td>
									<p>5</p>
								</td>
								<td><input type="number" name="levelFiveTotal" class="spellSlotTotal"></td>
								<td><input type="number" name="levelFiveSpent" class="spellSlotSpent"></td>
							</tr>
						</table>
					</div>
					<table>
						<tr>
							<td>
								<p>Prepared</p>
							</td>
							<td>
								<p>Spell Name</p>
							</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFiveSpell1" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFiveSpell2" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFiveSpell3" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFiveSpell4" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFiveSpell5" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFiveSpell6" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFiveSpell7" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFiveSpell8" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelFiveSpell9" class="spellName"></td>
						</tr>
					</table>
				</div>
				<div id="levelSix">
					<div class="spellHeader">
						<table>
							<tr>
								<td>
									<p>Spell Level</p>
								</td>
								<td><label for="levelSixTotal">Slots Total</label></td>
								<td><label for="levelSixSpent">Slots Expended</label></td>
							</tr>
							<tr>
								<td>
									<p>6</p>
								</td>
								<td><input type="number" name="levelSixTotal" class="spellSlotTotal"></td>
								<td><input type="number" name="levelSixSpent" class="spellSlotSpent"></td>
							</tr>
						</table>
					</div>
					<table>
						<tr>
							<td>
								<p>Prepared</p>
							</td>
							<td>
								<p>Spell Name</p>
							</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSixSpell1" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSixSpell2" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSixSpell3" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSixSpell4" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSixSpell5" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSixSpell6" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSixSpell7" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSixSpell8" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSixSpell9" class="spellName"></td>
						</tr>
					</table>
				</div>
				<div id="levelSeven">
					<div class="spellHeader">
						<table>
							<tr>
								<td>
									<p>Spell Level</p>
								</td>
								<td><label for="levelSevenTotal">Slots Total</label></td>
								<td><label for="levelSevenSpent">Slots Expended</label></td>
							</tr>
							<tr>
								<td>
									<p>7</p>
								</td>
								<td><input type="number" name="levelSevenTotal" class="spellSlotTotal"></td>
								<td><input type="number" name="levelSevenSpent" class="spellSlotSpent"></td>
							</tr>
						</table>
					</div>
					<table>
						<tr>
							<td>
								<p>Prepared</p>
							</td>
							<td>
								<p>Spell Name</p>
							</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSevenSpell1" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSevenSpell2" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSevenSpell3" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSevenSpell4" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSevenSpell5" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSevenSpell6" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSevenSpell7" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSevenSpell8" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelSevenSpell9" class="spellName"></td>
						</tr>
					</table>
				</div>
				<div id="levelEight">
					<div class="spellHeader">
						<table>
							<tr>
								<td>
									<p>Spell Level</p>
								</td>
								<td><label for="levelEightTotal">Slots Total</label></td>
								<td><label for="levelEightSpent">Slots Expended</label></td>
							</tr>
							<tr>
								<td>
									<p>8</p>
								</td>
								<td><input type="number" name="levelEightTotal" class="spellSlotTotal"></td>
								<td><input type="number" name="levelEightSpent" class="spellSlotSpent"></td>
							</tr>
						</table>
					</div>
					<table>
						<tr>
							<td>
								<p>Prepared</p>
							</td>
							<td>
								<p>Spell Name</p>
							</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelEightSpell1" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelEightSpell2" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelEightSpell3" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelEightSpell4" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelEightSpell5" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelEightSpell6" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelEightSpell7" class="spellName"></td>
						</tr>
					</table>
				</div>
				<div id="levelNine">
					<div class="spellHeader">
						<table>
							<tr>
								<td>
									<p>Spell Level</p>
								</td>
								<td><label for="levelNineTotal">Slots Total</label></td>
								<td><label for="levelNineSpent">Slots Expended</label></td>
							</tr>
							<tr>
								<td>
									<p>9</p>
								</td>
								<td><input type="number" name="levelNineTotal" class="spellSlotTotal"></td>
								<td><input type="number" name="levelNineSpent" class="spellSlotSpent"></td>
							</tr>
						</table>
					</div>
					<table>
						<tr>
							<td>
								<p>Prepared</p>
							</td>
							<td>
								<p>Spell Name</p>
							</td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelNineSpell1" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelNineSpell2" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelNineSpell3" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelNineSpell4" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelNineSpell5" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelNineSpell6" class="spellName"></td>
						</tr>
						<tr>
							<td><input type="checkbox" name="preparedSpell" class="preparedCheckbox"></td>
							<td><input type="text" name="levelNineSpell7" class="spellName"></td>
						</tr>
					</table>
				</div>
			</div>
		</div>
	</article>
	<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
<?php
require 'character-sheet.php';
?>

</html>