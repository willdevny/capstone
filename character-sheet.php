<?php
if (!isset($_SESSION)) session_start();

$db_connection = pg_connect("host=localhost dbname=postgres user=macowner password=password");

if (isset($_POST['json_data'])) {
	$character = $_POST['json_data'];
	
	$query = pg_query_params($db_connection, "INSERT INTO characters (userid, character) VALUES ($1, $2)", array($_SESSION['Id'], $character));
	header("Location:roster.view.php");
}
?>
<script>
	let playerRace = "";
	let playerClass = "";
	let dynamicRendering = true;
	let editToggle = true;
	$('document').ready(function() {

		if (dynamicRendering == true) {
			$('#proficiencyInput').val(2);

			$("#importBtn").on('change', function() {
				var reader = new FileReader();
				reader.onload = function(event) {
					var jsonObj = JSON.parse(event.target.result);
					fillInputs(jsonObj);
					toggleEdit();
				}
				reader.readAsText(event.target.files[0]);
			});
			$("#dynamicCheckbox").on('change', function() {
				if ($("#dynamicCheckbox").is(":checked")) {
					dynamicRendering = true;
				} else {
					dynamicRendering = false;
				}
			});
			$("#maxHPInput").on('change', function() {
				if (playerRace == "hilldwarf") {
					$("#maxHPInput").val(parseInt($("#maxHPInput").val()) + 1);
				}
			})
			$("#raceSelection").on('change', function() {
				playerRace = $("#raceSelection :selected").val();
				$("#speedInput").val("");
				$("#featAndTraitInput").val("");
				$("#weaponProf").val("");
				$("#armorProf").val("");
				$("#langProf").val("");
				if (dynamicRendering == true) {
					if (playerRace == "hilldwarf") {
						$("#speedInput").val("25");
						$("#featAndTraitInput").val($("#featAndTraitInput").val() + "\nDarkvision \nDwarven Resilience \nStonecunning \nDwarven Toughness");
						$("#weaponProf").val($("#weaponProf").val() + " Battleaxe, Handaxe, Light Hammer, Warhammer");
						$("#langProf").val($("#langProf").val() + " Common, Dwarvish");

						if ($("#conAbility").val() != "") {
							$("#conAbility").val(parseInt($("#conAbility").val()) + 2).trigger("change")
						}
						if ($("#wisAbility").val() != "") {
							$("#wisAbility").val(parseInt($("#wisAbility").val()) + 1).trigger("change")
						}
						if ($("#maxHPInput").val() != "") {
							$("#maxHPInput").val(parseInt($("#maxHPInput").val()) + 1)
						}

					} else if (playerRace == "mountaindwarf") {
						$("#speedInput").val("25");
						$("#featAndTraitInput").val($("#featAndTraitInput").val() + "\nDarkvision \nStonecunning \nDwarven Resilience");
						$("#weaponProf").val($("#weaponProf").val() + " Battleaxe, Handaxe, Light Hammer, Warhammer");
						$("#armorProf").val($("#armorProf").val() + " Light Armor, Medium Armor");
						$("#langProf").val($("#langProf").val() + " Common, Dwarvish");

						if ($("#conAbility").val() != "") {
							$("#conAbility").val(parseInt($("#conAbility").val()) + 2).trigger("change")
						}
						if ($("#strAbility").val() != "") {
							$("#strAbility").val(parseInt($("#strAbility").val()) + 2).trigger("change")
						}
					} else if (playerRace == "highelf") {
						$("#speedInput").val("30");
						$(":input[name=perception]").prop('checked', true);
						$("#featAndTraitInput").val($("#featAndTraitInput").val() + "\nDarkvision \nFey Ancestry \nTrance");
						$("#weaponProf").val($("#weaponProf").val() + " Longsword, Shortsword, Shortbow, Longbow");
						$("#langProf").val($("#langProf").val() + " Common, Elvish");

						if ($("#dexAbility").val() != "") {
							$("#dexAbility").val(parseInt($("#dexAbility").val()) + 2).trigger("change")
						}
						if ($("#intAbility").val() != "") {
							$("#intAbility").val(parseInt($("#intAbility").val()) + 1).trigger("change")
						}
					} else if (playerRace == "woodelf") {
						$("#speedInput").val("35");
						$(":input[name=perception]").prop('checked', true);
						$("#featAndTraitInput").val($("#featAndTraitInput").val() + "\nDarkvision \nFey Ancestry \nTrance\n Mask of the Wild");
						$("#weaponProf").val($("#weaponProf").val() + " Longsword, Shortsword, Shortbow, Longbow");
						$("#langProf").val($("#langProf").val() + " Common, Elvish");

						if ($("#dexAbility").val() != "") {
							$("#dexAbility").val(parseInt($("#dexAbility").val()) + 2).trigger("change")
						}
						if ($("#wisAbility").val() != "") {
							$("#wisAbility").val(parseInt($("#wisAbility").val()) + 1).trigger("change")
						}
					} else if (playerRace == "darkelf") {
						$("#speedInput").val("30");
						$(":input[name=perception]").prop('checked', true);
						$("#featAndTraitInput").val($("#featAndTraitInput").val() + "\nSuperior Darkvision \nFey Ancestry \nTrance \nSunlight Sensitivity \nDrow Magic");
						$("#weaponProf").val($("#weaponProf").val() + " Rapiers, Shortswords, Hand Crossbows");
						$("#langProf").val($("#langProf").val() + " Common, Elvish");

						if ($("#dexAbility").val() != "") {
							$("#dexAbility").val(parseInt($("#dexAbility").val()) + 2).trigger("change")
						}
						if ($("#chaAbility").val() != "") {
							$("#chaAbility").val(parseInt($("#chaAbility").val()) + 1).trigger("change")
						}
					} else if (playerRace == "lightfoothalfling") {
						$("#speedInput").val("25");
						$("#langProf").val($("#langProf").val() + " Common, Halfling");
						$("#featAndTraitInput").val($("#featAndTraitInput").val() + "\nLucky \nBrave \nHalfling Nimbleness \nNaturally Stealthy");

						if ($("#dexAbility").val() != "") {
							$("#dexAbility").val(parseInt($("#dexAbility").val()) + 2).trigger("change")
						}
						if ($("#chaAbility").val() != "") {
							$("#chaAbility").val(parseInt($("#chaAbility").val()) + 1).trigger("change")
						}
					} else if (playerRace == "stouthalfling") {
						$("#speedInput").val("25");
						$("#langProf").val($("#langProf").val() + " Common, Halfling");
						$("#featAndTraitInput").val($("#featAndTraitInput").val() + "\nLucky \nBrave \nHalfling Nimbleness \nStout Resilience");

						if ($("#dexAbility").val() != "") {
							$("#dexAbility").val(parseInt($("#dexAbility").val()) + 2).trigger("change")
						}
						if ($("#conAbility").val() != "") {
							$("#conAbility").val(parseInt($("#conAbility").val()) + 1).trigger("change")
						}
					} else if (playerRace == "human") {
						$("#speedInput").val("30");
						$("#langProf").val($("#langProf").val() + " Common");

						if ($("#dexAbility").val() != "") {
							$("#dexAbility").val(parseInt($("#dexAbility").val()) + 1).trigger("change")
						}
						if ($("#conAbility").val() != "") {
							$("#conAbility").val(parseInt($("#conAbility").val()) + 1).trigger("change")
						}
						if ($("#strAbility").val() != "") {
							$("#strAbility").val(parseInt($("#strAbility").val()) + 1).trigger("change")
						}
						if ($("#intAbility").val() != "") {
							$("#intAbility").val(parseInt($("#intAbility").val()) + 1).trigger("change")
						}
						if ($("#wisAbility").val() != "") {
							$("#wisAbility").val(parseInt($("#wisAbility").val()) + 1).trigger("change")
						}
						if ($("#chaAbility").val() != "") {
							$("#chaAbility").val(parseInt($("#chaAbility").val()) + 1).trigger("change")
						}
					} else if (playerRace == "dragonborn") {
						$("#speedInput").val("30");
						$("#featAndTraitInput").val($("#featAndTraitInput").val() + "\nDamage Resistance \nBreath Weapon");
						$("#langProf").val($("#langProf").val() + " Common, Draconic");

						if ($("#strAbility").val() != "") {
							$("#strAbility").val(parseInt($("#strAbility").val()) + 2).trigger("change")
						}
						if ($("#chaAbility").val() != "") {
							$("#chaAbility").val(parseInt($("#chaAbility").val()) + 1).trigger("change")
						}
					} else if (playerRace == "forestgnome") {
						$("#speedInput").val("25");
						$("#langProf").val($("#langProf").val() + " Common, Gnomish");
						$("#featAndTraitInput").val($("#featAndTraitInput").val() + "\nDarkvision \nGnome Cunning \nNatural Illusionist \nSpeak with Small Beasts");

						if ($("#intAbility").val() != "") {
							$("#intAbility").val(parseInt($("#intAbility").val()) + 2).trigger("change")
						}
						if ($("#dexAbility").val() != "") {
							$("#dexAbility").val(parseInt($("#dexAbility").val()) + 1).trigger("change")
						}
					} else if (playerRace == "rockgnome") {
						$("#speedInput").val("25");
						$("#langProf").val($("#langProf").val() + " Common, Gnomish");
						$("#featAndTraitInput").val($("#featAndTraitInput").val() + "\nDarkvision \nGnome Cunning \nArtificer's Lore \nTinker");

						if ($("#intAbility").val() != "") {
							$("#intAbility").val(parseInt($("#intAbility").val()) + 2).trigger("change")
						}
						if ($("#conAbility").val() != "") {
							$("#conAbility").val(parseInt($("#conAbility").val()) + 1).trigger("change")
						}
					} else if (playerRace == "halfelf") {
						$("#speedInput").val("30");
						$("#langProf").val($("#langProf").val() + " Common, Elvish");
						$("#featAndTraitInput").val($("#featAndTraitInput").val() + "\nDarkvision \nFey Ancestry");

						if ($("#chaAbility").val() != "") {
							$("#chaAbility").val(parseInt($("#chaAbility").val()) + 2).trigger("change")
						}
					} else if (playerRace == "halforc") {
						$("#speedInput").val("30");
						$(":input[name=intimidation]").prop('checked', true);
						$("#langProf").val($("#langProf").val() + " Common, Orcish");
						$("#featAndTraitInput").val($("#featAndTraitInput").val() + "\nDarkvision \nRelentless Endurance \nSavage Attacks");

						if ($("#strAbility").val() != "") {
							$("#strAbility").val(parseInt($("#strAbility").val()) + 2).trigger("change")
						}
						if ($("#conAbility").val() != "") {
							$("#conAbility").val(parseInt($("#conAbility").val()) + 1).trigger("change")
						}
					} else if (playerRace == "tiefling") {
						$("#speedInput").val("30");
						$("#langProf").val($("#langProf").val() + " Common, Infernal");
						$("#featAndTraitInput").val($("#featAndTraitInput").val() + "\nDarkvision \nHellish Resistance");

						if ($("#chaAbility").val() != "") {
							$("#chaAbility").val(parseInt($("#chaAbility").val()) + 2).trigger("change")
						}
						if ($("#intAbility").val() != "") {
							$("#intAbility").val(parseInt($("#intAbility").val()) + 1).trigger("change")
						}
					}
				}
			});
			$("#classSelection").on('change', function() {
				playerClass = $("#classSelection :selected").val();
				if (dynamicRendering == true) {
					$(".profCheckbox").prop('checked', false);
					if (playerClass == "barbarian") {
						$("#hitDiceInput").val("d12");
						$("#strProf").prop('checked', true);
						$("#conProf").prop('checked', true);
						$("#armorProf").val("Light, Medium, Shields");
						if ($("#weaponProf").val() != "") {
							$("#weaponProf").val($("#weaponProf").val() + ", Simple, Martial")
						} else {
							$("#weaponProf").val("Simple, Martial")
						}
					} else if (playerClass == "fighter") {
						$("#hitDiceInput").val("d10");
						$("#strProf").prop('checked', true);
						$("#conProf").prop('checked', true);
						$("#armorProf").val("All Armor, Shields");
						if ($("#weaponProf").val() != "") {
							$("#weaponProf").val($("#weaponProf").val() + ", Simple, Martial")
						} else {
							$("#weaponProf").val("Simple, Martial")
						}
					} else if (playerClass == "bard") {
						$("#hitDiceInput").val("d8");
						$("#dexProf").prop('checked', true);
						$("#chaProf").prop('checked', true);
						$("#armorProf").val("Light");
						if ($("#weaponProf").val() != "") {
							$("#weaponProf").val($("#weaponProf").val() + ", Simple, Hand Crossbows, Longswords, Rapiers, Shortswords")
						} else {
							$("#weaponProf").val("Simple, Hand Crossbows, Longswords, Rapiers, Shortswords")
						}
					} else if (playerClass == "sorcerer") {
						$("#hitDiceInput").val("d6");
						$("#conProf").prop('checked', true);
						$("#chaProf").prop('checked', true);
						if ($("#weaponProf").val() != "") {
							$("#weaponProf").val($("#weaponProf").val() + ", Daggers, Darts, Slings, Quarterstaffs, Light Crossbows")
						} else {
							$("#weaponProf").val("Daggers, Darts, Slings, Quarterstaffs, Light Crossbows")
						}
					} else if (playerClass == "cleric") {
						$("#hitDiceInput").val("d8");
						$("#wisProf").prop('checked', true);
						$("#chaProf").prop('checked', true);
						$("#armorProf").val("Light, Medium, Shields");
						if ($("#weaponProf").val() != "") {
							$("#weaponProf").val($("#weaponProf").val() + ", Simple")
						} else {
							$("#weaponProf").val("Simple")
						}
					} else if (playerClass == "druid") {
						$("#hitDiceInput").val("d8");
						$("#intProf").prop('checked', true);
						$("#wisProf").prop('checked', true);
						$("#armorProf").val("Light, Medium, Shields");
						if ($("#weaponProf").val() != "") {
							$("#weaponProf").val($("#weaponProf").val() + ", Clubs, Daggers, Darts, Javelins, Maces, Quarterstaffs, Scimitars, Sickles, Slings, Spears")
						} else {
							$("#weaponProf").val("Clubs, Daggers, Darts, Javelins, Maces, Quarterstaffs, Scimitars, Sickles, Slings, Spears")
						}
						$("#toolProf").val("Herbalism Kit");
					} else if (playerClass == "monk") {
						$("#hitDiceInput").val("d8");
						$("#strProf").prop('checked', true);
						$("#dexProf").prop('checked', true);
						if ($("#weaponProf").val() != "") {
							$("#weaponProf").val($("#weaponProf").val() + ", Simple, Shortswords")
						} else {
							$("#weaponProf").val("Simple, Shortswords")
						}
					} else if (playerClass == "paladin") {
						$("#hitDiceInput").val("d10");
						$("#wisProf").prop('checked', true);
						$("#chaProf").prop('checked', true);
						$("#armorProf").val("All Armor, Shields");
						if ($("#weaponProf").val() != "") {
							$("#weaponProf").val($("#weaponProf").val() + ", Simple, Martial")
						} else {
							$("#weaponProf").val("Simple, Martial")
						}
					} else if (playerClass == "ranger") {
						$("#hitDiceInput").val("d10");
						$("#strProf").prop('checked', true);
						$("#dexProf").prop('checked', true);
						$("#armorProf").val("Light, Medium, Shields");
						if ($("#weaponProf").val() != "") {
							$("#weaponProf").val($("#weaponProf").val() + ", Simple, Martial")
						} else {
							$("#weaponProf").val("Simple, Martial")
						}
					} else if (playerClass == "rogue") {
						$("#hitDiceInput").val("d8");
						$("#dexProf").prop('checked', true);
						$("#intProf").prop('checked', true);
						$("#armorProf").val("Light");
						if ($("#weaponProf").val() != "") {
							$("#weaponProf").val($("#weaponProf").val() + ", Simple, Hand Crossbows, Longswords, Rapiers, Shortsword")
						} else {
							$("#weaponProf").val("Simple, Hand Crossbows, Longswords, Rapiers, Shortsword")
						}
						$("toolProf").val("Thieves'");
					} else if (playerClass == "warlock") {
						$("#hitDiceInput").val("d8");
						$("#wisProf").prop('checked', true);
						$("#chaProf").prop('checked', true);
						$("#armorProf").val("Light");
						if ($("#weaponProf").val() != "") {
							$("#weaponProf").val($("#weaponProf").val() + ", Simple")
						} else {
							$("#weaponProf").val("Simple")
						}
					} else if (playerClass == "wizard") {
						$("#hitDiceInput").val("d6");
						$("#intProf").prop('checked', true);
						$("#wisProf").prop('checked', true);
						if ($("#weaponProf").val() != "") {
							$("#weaponProf").val($("#weaponProf").val() + ", Daggers, Darts, Slings, Quarterstaffs, Light Crossbows")
						} else {
							$("#weaponProf").val("Daggers, Darts, Slings, Quarterstaffs, Light Crossbows")
						}
					}
				}
			});
			$("#strAbility").change(function() {
				if ($("#strAbility").val() != "") {
					if (playerRace == "mountaindwarf" || playerRace == "dragonborn" || playerRace == "halforc") {
						$("#strAbility").val(parseInt($("#strAbility").val()) + 2)
					} else if (playerRace == "human") {
						$("#strAbility").val(parseInt($("#strAbility").val()) + 1)
					}
					$("#strMod").val(Math.floor((parseInt($("#strAbility").val()) - 10) / 2))

					if ($("#strProf").is('checked')) {
						$("$strThrow").val($("#strMod").val() + $("#proficiencyInput").val())
					} else {
						$("#strThrow").val($("#strMod").val())
					}

					if ($(":input[name=athleticsProf]").is("checked")) {
						$(":input[name=athletics]").val($("#strMod").val() + $("#proficiencyInput").val())
					} else {
						$(":input[name=athletics]").val($("#strMod").val())
					}
				}
			});
			$("#dexAbility").change(function() {
				if ($("#dexAbility").val() != "") {
					if (playerRace == "highelf" || playerRace == "woodelf" || playerRace == "darkelf" || playerRace == "lightfoothalfling" || playerRace == "stouthalfling" || playerRace == "human") {
						$("#dexAbility").val(parseInt($("#dexAbility").val()) + 2)
					} else if (playerRace == "forestgnome") {
						$("#dexAbility").val(parseInt($("#dexAbility").val()) + 1)
					}
					$("#dexMod").val(Math.floor((parseInt($("#dexAbility").val()) - 10) / 2))

					if ($("#dexProf").is('checked')) {
						$("#dexThrow").val($("#dexMod").val() + $("#proficiencyInput").val())
					} else {
						$("#dexThrow").val($("#dexMod").val())
					}

					if ($(":input[name=acrobaticsProf]").is("checked")) {
						$(":input[name=acrobatics]").val($("#dexMod").val() + $("#proficiencyInput").val())
					} else {
						$(":input[name=acrobatics]").val($("#dexMod").val())
					}
					if ($(":input[name=sleightProf]").is("checked")) {
						$(":input[name=sleightHand]").val($("#dexMod").val() + $("#proficiencyInput").val())
					} else {
						$(":input[name=sleightHand]").val($("#dexMod").val())
					}
					if ($(":input[name=stealthProf]").is("checked")) {
						$(":input[name=stealth]").val($("#dexMod").val() + $("#proficiencyInput").val())
					} else {
						$(":input[name=stealth]").val($("#dexMod").val())
					}

				}
			});
			$("#conAbility").change(function() {
				if ($("#conAbility").val() != "") {
					if (playerRace == "mountaindwarf" || playerRace == "hilldwarf") {
						$("#conAbility").val(parseInt($("#conAbility").val()) + 2)
					} else if (playerRace == "stouthalfling" || playerRace == "human" || playerRace == "dragonborn" || playerRace == "rockgnome" || playerRace == "halforc") {
						$("#conAbility").val(parseInt($("#conAbility").val()) + 1)
					}
					$("#conMod").val(Math.floor((parseInt($("#conAbility").val()) - 10) / 2))

					if ($("#conProf").is('checked')) {
						$("#conThrow").val($("#conMod").val() + $("#proficiencyInput").val())
					} else {
						$("#conThrow").val($("#conMod").val())
					}


					if (playerClass == "barbarian") {
						$("#maxHPInput").val(12 + parseInt($("#conMod").val()))
					} else if (playerClass == "fighter" || playerClass == "paladin" || playerClass == "ranger") {
						$("#maxHPInput").val(10 + parseInt($("#conMod").val()))
					} else if (playerClass == "bard" || playerClass == "cleric" || playerClass == "druid" || playerClass == "monk" || playerClass == "rogue" || playerClass == "warlock") {
						$("#maxHPInput").val(8 + parseInt($("#conMod").val()))
					} else if (playerClass == "sorcerer" || playerClass == "wizard") {
						$("#maxHPInput").val(6 + parseInt($("#conMod").val()))
					}
				}
			});
			$("#intAbility").change(function() {
				if ($("#intAbility").val() != "") {
					if (playerRace == "forestgnome" || playerRace == "rockgnome") {
						$("#intAbility").val(parseInt($("#intAbility").val()) + 2)
					} else if (playerRace == "highelf" || playerRace == "human" || playerRace == "tiefling") {
						$("#intAbility").val(parseInt($("#intAbility").val()) + 1)
					}
					$("#intMod").val(Math.floor((parseInt($("#intAbility").val()) - 10) / 2))

					if ($("#intProf").is('checked')) {
						$("#intThrow").val($("#intMod").val() + $("#proficiencyInput").val())
					} else {
						$("#intThrow").val($("#intMod").val())
					}


					if (playerClass == "wizard") {
						$(":input[name=spellAbility]").val($("#intMod").val())
					}

					if ($(":input[name=arcanaProf]").is("checked")) {
						$(":input[name=arcana]").val($("#intMod").val() + $("#proficiencyInput").val())
					} else {
						$(":input[name=arcana]").val($("#intMod").val())
					}
					if ($(":input[name=historyProf]").is("checked")) {
						$(":input[name=history]").val($("#intMod").val() + $("#proficiencyInput").val())
					} else {
						$(":input[name=history]").val($("#intMod").val())
					}
					if ($(":input[name=investigationProf]").is("checked")) {
						$(":input[name=investigation]").val($("#intMod").val() + $("#proficiencyInput").val())
					} else {
						$(":input[name=investigation]").val($("#intMod").val())
					}
					if ($(":input[name=natureProf]").is("checked")) {
						$(":input[name=nature]").val($("#intMod").val() + $("#proficiencyInput").val())
					} else {
						$(":input[name=nature]").val($("#intMod").val())
					}
					if ($(":input[name=religionProf]").is("checked")) {
						$(":input[name=religion]").val($("#intMod").val() + $("#proficiencyInput").val())
					} else {
						$(":input[name=religion]").val($("#intMod").val())
					}
				}
			});
			$("#wisAbility").change(function() {
				if ($("#wisAbility").val() != "") {
					if (playerRace == "hilldwarf" || playerRace == "woodelf" || playerRace == "human" || playerRace == "tiefling") {
						$("#wisAbility").val(parseInt($("#wisAbility").val()) + 1)
					}
					$("#wisMod").val(Math.floor((parseInt($("#wisAbility").val()) - 10) / 2))
					$("#passiveWisdomInput").val(10 + parseInt($("#wisMod").val()))

					if ($("#wisProf").is('checked')) {
						$("#wisThrow").val($("#wisMod").val() + $("#proficiencyInput").val())
					} else {
						$("#wisThrow").val($("#wisMod").val())
					}


					if (playerClass == "cleric" || playerClass == "druid" || playerClass == "ranger") {
						$(":input[name=spellAbility]").val($("#wisMod").val())
					}

					if ($(":input[name=animalProf]").is("checked")) {
						$(":input[name=animalHandling]").val($("#wisMod").val() + $("#proficiencyInput").val())
					} else {
						$(":input[name=animalHandling]").val($("#wisMod").val())
					}
					if ($(":input[name=insightProf]").is("checked")) {
						$(":input[name=insight]").val($("#wisMod").val() + $("#proficiencyInput").val())
					} else {
						$(":input[name=insight]").val($("#wisMod").val())
					}
					if ($(":input[name=medicineProf]").is("checked")) {
						$(":input[name=medicine]").val($("#wisMod").val() + $("#proficiencyInput").val())
					} else {
						$(":input[name=medicine]").val($("#wisMod").val())
					}
					if ($(":input[name=perceptionProf]").is("checked")) {
						$(":input[name=perception]").val($("#wisMod").val() + $("#proficiencyInput").val())
					} else {
						$(":input[name=perception]").val($("#wisMod").val())
					}
					if ($(":input[name=survivalProf]").is("checked")) {
						$(":input[name=survival]").val($("#wisMod").val() + $("#proficiencyInput").val())
					} else {
						$(":input[name=survival]").val($("#wisMod").val())
					}
				}
			});
			$("#chaAbility").change(function() {
				if ($("#chaAbility").val() != "") {
					if (playerRace == "halfelf" || playerRace == "tiefling") {
						$("#chaAbility").val(parseInt($("#chaAbility").val()) + 2)
					} else if (playerRace == "darkelf" || playerRace == "lightfoothalfling" || playerRace == "human" || playerRace == "dragonborn") {
						$("#chaAbility").val(parseInt($("#chaAbility").val()) + 1)
					}
					$("#chaMod").val(Math.floor((parseInt($("#chaAbility").val()) - 10) / 2))

					if ($("#chaProf").is('checked')) {
						$("#chaThrow").val($("#chaMod").val() + $("#proficiencyInput").val())
					} else {
						$("#chaThrow").val($("#chaMod").val())
					}

					if (playerClass == "bard" || playerClass == "paladin" || playerClass == "sorcerer" || playerClass == "warlock")
						$(":input[name=spellAbility").val($("#chaMod").val())

					if ($(":input[name=deceptionProf]").is("checked")) {
						$(":input[name=deception]").val($("#chaMod").val() + $("#proficiencyInput").val())
					} else {
						$(":input[name=deception]").val($("#chaMod").val())
					}
					if ($(":input[name=intimidationProf]").is("checked")) {
						$(":input[name=intimidation]").val($("#chaMod").val() + $("#proficiencyInput").val())
					} else {
						$(":input[name=intimidation]").val($("#chaMod").val())
					}
					if ($(":input[name=performanceProf]").is("checked")) {
						$(":input[name=performance]").val($("#chaMod").val() + $("#proficiencyInput").val())
					} else {
						$(":input[name=performance]").val($("#chaMod").val())
					}
					if ($(":input[name=persuasionProf]").is("checked")) {
						$(":input[name=persuasion]").val($("#chaMod").val() + $("#proficiencyInput").val())
					} else {
						$(":input[name=persuasion]").val($("#chaMod").val())
					}
				}
			});
		}
	});

	function saveToggle() {
		$("#saveText").prop('hidden', false);
		$("#saveBtn").prop('disabled', true);
	}

	function saveSheet() {
		let array = $("#characterInfo :input").serializeArray();
		let dict = {};
		$.each(array, function(i) {
			dict[array[i].name] = array[i].value
		})
		let csv = JSON.stringify(dict);
		let character = encodeURI(csv);

		$("#json_data").val(character);
	}

	function downloadJSON(args) {
		//This function is used to convert all inputs into a json file and downloads it.
		let array = $("#characterInfo :input").serializeArray();
		let dict = {};
		$.each(array, function(i) {
			dict[array[i].name] = array[i].value
		})
		let csv = 'data:text/json;charset=utf-8,' + JSON.stringify(dict);
		let filename = args.filename || 'export.csv';
		let data = encodeURI(csv);

		let link = document.createElement('a');
		link.setAttribute('href', data);
		link.setAttribute('download', filename);
		link.click();
	}

	function fillInputs(jsonObj) {
		//This function takes a json object and fills in the character sheet inputs based off that json object.
		$.each(jsonObj, function(i) {
			if (jsonObj[i] == "on") {
				$(":input[name=" + i + "]").prop('checked', true)
			} else {
				$(":input[name=" + i + "]").val(jsonObj[i])
			}
		})
	}

	function toggleEdit() {
		//This function enables or disables buttons and inputs on the sheet based on which mode the user is in.
		if (editToggle == true) {
			editToggle = false;
			$("#editBtn").html("View")
			$(":input").prop("disabled", true);
			$("#editBtn").prop("disabled", false);
		} else if (editToggle == false) {
			editToggle = true;
			$("#editBtn").html("Edit")
			$(":input").prop("disabled", false);
		}
	}
</script>
<?php
if (!isset($_SESSION['Id'])) {
	echo("<script>saveToggle()</script>");
}

if (isset($_GET['id'])) {
	$query = pg_query_params($db_connection, "SELECT character FROM characters WHERE characterid = $1;", array($_GET['id']));
	$result = pg_fetch_array($query);
	$character = $result[0];

	$character = str_replace("%22", '"', $character);
	$character = str_replace("%7B", '{', $character);
	$character = str_replace("%7D", '}', $character);

	echo("<script>fillInputs($character);</script>");	
}
?>