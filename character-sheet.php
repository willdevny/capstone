<?php

?>
<script>
	let playerRace = "";
	let playerClass = "";
	let dynamicRendering = true;
	let editToggle = true;
	$('document').ready(function()) {
		$("#importBtn").on('change', function() {
			var reader = new FileReader();
			reader.onload = function(event) {
				var jsonObj = JSON.parse(event.target.result);
				console.log(jsonObj.characterName);
				fillInputs(jsonObj);
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
						$("#conAbility").val(parseInt($("#conAbility").val()) + 2)
					}
					if ($("#wisAbility").val() != "") {
						$("#wisAbility").val(parseInt($("#wisAbility").val()) + 1)
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
						$("#conAbility").val(parseInt($("#conAbility").val()) + 2)
					}
					if ($("#strAbility").val() != "") {
						$("#strAbility").val(parseInt($("#strAbility").val()) + 2)
					}
				} else if (playerRace == "highelf") {
					$("#speedInput").val("30");
					$(":input[name=perception]").prop('checked', true);
					$("#featAndTraitInput").val($("#featAndTraitInput").val() + "\nDarkvision \nFey Ancestry \nTrance");
					$("#weaponProf").val($("#weaponProf").val() + " Longsword, Shortsword, Shortbow, Longbow");
					$("#langProf").val($("#langProf").val() + " Common, Elvish");

					if ($("#dexAbility").val() != "") {
						$("#dexAbility").val(parseInt($("#dexAbility").val()) + 2)
					}
					if ($("#intAbility").val() != "") {
						$("#intAbility").val(parseInt($("#intAbility").val()) + 1)
					}
				} else if (playerRace == "woodelf") {
					$("#speedInput").val("35");
					$(":input[name=perception]").prop('checked', true);
					$("#featAndTraitInput").val($("#featAndTraitInput").val() + "\nDarkvision \nFey Ancestry \nTrance\n Mask of the Wild");
					$("#weaponProf").val($("#weaponProf").val() + " Longsword, Shortsword, Shortbow, Longbow");
					$("#langProf").val($("#langProf").val() + " Common, Elvish");

					if ($("#dexAbility").val() != "") {
						$("#dexAbility").val(parseInt($("#dexAbility").val()) + 2)
					}
					if ($("#wisAbility").val() != "") {
						$("#wisAbility").val(parseInt($("#wisAbility").val()) + 1)
					}
				} else if (playerRace == "darkelf") {
					$("#speedInput").val("30");
					$(":input[name=perception]").prop('checked', true);
					$("#featAndTraitInput").val($("#featAndTraitInput").val() + "\nSuperior Darkvision \nFey Ancestry \nTrance \nSunlight Sensitivity \nDrow Magic");
					$("#weaponProf").val($("#weaponProf").val() + " Rapiers, Shortswords, Hand Crossbows");
					$("#langProf").val($("#langProf").val() + " Common, Elvish");

					if ($("#dexAbility").val() != "") {
						$("#dexAbility").val(parseInt($("#dexAbility").val()) + 2)
					}
					if ($("#chaAbility").val() != "") {
						$("#chaAbility").val(parseInt($("#chaAbility").val()) + 1)
					}
				} else if (playerRace == "lightfoothalfling") {
					$("#speedInput").val("25");
					$("#langProf").val($("#langProf").val() + " Common, Halfling");
					$("#featAndTraitInput").val($("#featAndTraitInput").val() + "\nLucky \nBrave \nHalfling Nimbleness \nNaturally Stealthy");

					if ($("#dexAbility").val() != "") {
						$("#dexAbility").val(parseInt($("#dexAbility").val()) + 2)
					}
					if ($("#chaAbility").val() != "") {
						$("#chaAbility").val(parseInt($("#chaAbility").val()) + 1)
					}
				} else if (playerRace == "stouthalfling") {
					$("#speedInput").val("25");
					$("#langProf").val($("#langProf").val() + " Common, Halfling");
					$("#featAndTraitInput").val($("#featAndTraitInput").val() + "\nLucky \nBrave \nHalfling Nimbleness \nStout Resilience");

					if ($("#dexAbility").val() != "") {
						$("#dexAbility").val(parseInt($("#dexAbility").val()) + 2)
					}
					if ($("#conAbility").val() != "") {
						$("#conAbility").val(parseInt($("#conAbility").val()) + 1)
					}
				} else if (playerRace == "human") {
					$("#speedInput").val("30");
					$("#langProf").val($("#langProf").val() + " Common");

					if ($("#dexAbility").val() != "") {
						$("#dexAbility").val(parseInt($("#dexAbility").val()) + 1)
					}
					if ($("#conAbility").val() != "") {
						$("#conAbility").val(parseInt($("#conAbility").val()) + 1)
					}
					if ($("#strAbility").val() != "") {
						$("#strAbility").val(parseInt($("#strAbility").val()) + 1)
					}
					if ($("#intAbility").val() != "") {
						$("#intAbility").val(parseInt($("#intAbility").val()) + 1)
					}
					if ($("#wisAbility").val() != "") {
						$("#wisAbility").val(parseInt($("#wisAbility").val()) + 1)
					}
					if ($("#chaAbility").val() != "") {
						$("#chaAbility").val(parseInt($("#chaAbility").val()) + 1)
					}
				} else if (playerRace == "dragonborn") {
					$("#speedInput").val("30");
					$("#featAndTraitInput").val($("#featAndTraitInput").val() + "\nDamage Resistance \nBreath Weapon");
					$("#langProf").val($("#langProf").val() + " Common, Draconic");

					if ($("#strAbility").val() != "") {
						$("#strAbility").val(parseInt($("#strAbility").val()) + 2)
					}
					if ($("#chaAbility").val() != "") {
						$("#chaAbility").val(parseInt($("#chaAbility").val()) + 1)
					}
				} else if (playerRace == "forestgnome") {
					$("#speedInput").val("25");
					$("#langProf").val($("#langProf").val() + " Common, Gnomish");
					$("#featAndTraitInput").val($("#featAndTraitInput").val() + "\nDarkvision \nGnome Cunning \nNatural Illusionist \nSpeak with Small Beasts");

					if ($("#intAbility").val() != "") {
						$("#intAbility").val(parseInt($("#intAbility").val()) + 2)
					}
					if ($("#dexAbility").val() != "") {
						$("#dexAbility").val(parseInt($("#dexAbility").val()) + 1)
					}
				} else if (playerRace == "rockgnome") {
					$("#speedInput").val("25");
					$("#langProf").val($("#langProf").val() + " Common, Gnomish");
					$("#featAndTraitInput").val($("#featAndTraitInput").val() + "\nDarkvision \nGnome Cunning \nArtificer's Lore \nTinker");

					if ($("#intAbility").val() != "") {
						$("#intAbility").val(parseInt($("#intAbility").val()) + 2)
					}
					if ($("#conAbility").val() != "") {
						$("#conAbility").val(parseInt($("#conAbility").val()) + 1)
					}
				} else if (playerRace == "halfelf") {
					$("#speedInput").val("30");
					$("#langProf").val($("#langProf").val() + " Common, Elvish");
					$("#featAndTraitInput").val($("#featAndTraitInput").val() + "\nDarkvision \nFey Ancestry");

					if ($("#chaAbility").val() != "") {
						$("#chaAbility").val(parseInt($("#chaAbility").val()) + 2)
					}
				} else if (playerRace == "halforc") {
					$("#speedInput").val("30");
					$(":input[name=intimidation]").prop('checked', true);
					$("#langProf").val($("#langProf").val() + " Common, Orcish");
					$("#featAndTraitInput").val($("#featAndTraitInput").val() + "\nDarkvision \nRelentless Endurance \nSavage Attacks");

					if ($("#strAbility").val() != "") {
						$("#strAbility").val(parseInt($("#strAbility").val()) + 2)
					}
					if ($("#conAbility").val() != "") {
						$("#conAbility").val(parseInt($("#conAbility").val()) + 1)
					}
				} else if (playerRace == "tiefling") {
					$("#speedInput").val("30");
					$("#langProf").val($("#langProf").val() + " Common, Infernal");
					$("#featAndTraitInput").val($("#featAndTraitInput").val() + "\nDarkvision \nHellish Resistance");

					if ($("#chaAbility").val() != "") {
						$("#chaAbility").val(parseInt($("#chaAbility").val()) + 2)
					}
					if ($("#intAbility").val() != "") {
						$("#intAbility").val(parseInt($("#intAbility").val()) + 1)
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
				} else if (playerClass == "fighter") {
					$("#hitDiceInput").val("d10");
					$("#strProf").prop('checked', true);
					$("#conProf").prop('checked', true);
				} else if (playerClass == "bard") {
					$("#hitDiceInput").val("d8");
					$("#dexProf").prop('checked', true);
					$("#chaProf").prop('checked', true);
				} else if (playerClass == "sorcerer") {
					$("#hitDiceInput").val("d6");
					$("#conProf").prop('checked', true);
					$("#chaProf").prop('checked', true);
				} else if (playerClass == "cleric") {
					$("#hitDiceInput").val("d8");
					$("#wisProf").prop('checked', true);
					$("#chaProf").prop('checked', true);
				} else if (playerClass == "druid") {
					$("#hitDiceInput").val("d8");
					$("#intProf").prop('checked', true);
					$("#wisProf").prop('checked', true);
				} else if (playerClass == "monk") {
					$("#hitDiceInput").val("d8");
					$("#strProf").prop('checked', true);
					$("#dexProf").prop('checked', true);
				} else if (playerClass == "paladin") {
					$("#hitDiceInput").val("d10");
					$("#wisProf").prop('checked', true);
					$("#chaProf").prop('checked', true);
				} else if (playerClass == "ranger") {
					$("#hitDiceInput").val("d10");
					$("#strProf").prop('checked', true);
					$("#dexProf").prop('checked', true);
				} else if (playerClass == "rogue") {
					$("#hitDiceInput").val("d8");
					$("#dexProf").prop('checked', true);
					$("#intProf").prop('checked', true);
				} else if (playerClass == "warlock") {
					$("#hitDiceInput").val("d8");
					$("#wisProf").prop('checked', true);
					$("#chaProf").prop('checked', true);
				} else if (playerClass == "wizard") {
					$("#hitDiceInput").val("d6");
					$("#intProf").prop('checked', true);
					$("#wisProf").prop('checked', true);
				}
			}
		});
		$("#strAbility").on("change", function() {
			if ($("#strAbility").val() != "") {
				if (playerRace == "mountaindwarf" || playerRace == "dragonborn" || playerRace == "halforc") {
					$("#strAbility").val(parseInt($("#strAbility").val()) + 2)
				} else if (playerRace == "human") {
					$("#strAbility").val(parseInt($("#strAbility").val()) + 1)
				}
			}
		});
		$("#dexAbility").on("change", function() {
			if ($("#dexAbility").val() != "") {
				if (playerRace == "highelf" || playerRace == "woodelf" || playerRace == "darkelf" || playerRace == "lightfoothalfling" || playerRace == "stouthalfling" || playerRace == "human" || playerRace == "") {
					$("#dexAbility").val(parseInt($("#dexAbility").val()) + 2)
				} else if (playerRace == "forestgnome") {
					$("#dexAbility").val(parseInt($("#dexAbility").val()) + 1)
				}
			}
		});
		$("#conAbility").on("change", function() {
			if ($("#conAbility").val() != "") {
				if (playerRace == "mountaindwarf" || playerRace == "hilldwarf") {
					$("#conAbility").val(parseInt($("#conAbility").val()) + 2)
				} else if (playerRace == "stouthalfling" || playerRace == "human" || playerRace == "dragonborn" || playerRace == "rockgnome" || playerRace == "halforc") {
					$("#conAbility").val(parseInt($("#conAbility").val()) + 1)
				}
			}
		});
		$("#intAbility").on("change", function() {
			if ($("#intAbility").val() != "") {
				if (playerRace == "forestgnome" || playerRace == "rockgnome") {
					$("#intAbility").val(parseInt($("#intAbility").val()) + 2)
				} else if (playerRace == "highelf" || playerRace == "human" || playerRace == "tiefling") {
					$("#intAbility").val(parseInt($("#intAbility").val()) + 1)
				}
			}
		});
		$("#wisAbility").on("change", function() {
			if ($("#wisAbility").val() != "") {
				if (playerRace == "hilldwarf" || playerRace == "woodelf" || playerRace == "human" || playerRace == "tiefling") {
					$("#wisAbility").val(parseInt($("#wisAbility").val()) + 1)
				}
			}
		});
		$("#chaAbility").on("change", function() {
			if ($("#chaAbility").val() != "") {
				if (playerRace == "halfelf" || playerRace == "tiefling") {
					$("#chaAbility").val(parseInt($("#chaAbility").val()) + 2)
				} else if (playerRace == "darkelf" || playerRace == "lightfoothalfling" || playerRace == "human" || playerRace == "dragonborn") {
					$("#chaAbility").val(parseInt($("#chaAbility").val()) + 1)
				}
			}

		})
	});

	function downloadJSON(args) {
		let dict = {
			characterName: $("#nameInput").val(),
			characterRace: $("#raceSelection :selected").val(),
			characterClass: $("#classSelection :selected").val(),

			strAbility: $("#strAbility").val(),
			strMod: $("#strMod").val(),
			dexAbility: $("#dexAbility").val(),
			dexMod: $("#dexMod").val(),
			conAbility: $("#conAbility").val(),
			conMod: $("#conMod").val(),
			intAbility: $("#intAbility").val(),
			intMod: $("#intMod").val(),
			wisAbility: $("#wisAbility").val(),
			wisMod: $("#wisMod").val(),
			chaAbility: $("#chaAbility").val(),
			chaMod: $("#chaMod").val(),

			strThrow: $("#strThrow").val(),
			dexThrow: $("#dexThrow").val(),
			conThrow: $("#conThrow").val(),
			intThrow: $("#intThrow").val(),
			wisThrow: $("#wisThrow").val(),
			chaThrow: $("#chaThrow").val(),

			acrobatics: $(':input[name=acrobatics]').val(),
			animalHandling: $(':input[name=animalHandling]').val(),
			arcana: $(':input[name=arcana]').val(),
			athletics: $(':input[name=athletics]').val(),
			deception: $(':input[name=deception]').val(),
			history: $(':input[name=history]').val(),
			insight: $(':input[name=insight]').val(),
			intimidation: $(':input[name=intimidation]').val(),
			investigation: $(':input[name=investigation]').val(),
			medicine: $(':input[name=medicine]').val(),
			nature: $(':input[name=nature]').val(),
			perception: $(':input[name=perception]').val(),
			performance: $(':input[name=performance]').val(),
			persuasion: $(':input[name=persuasion]').val(),
			religion: $(':input[name=religion]').val(),
			sleightHand: $(':input[name=sleightHand]').val(),
			stealth: $(':input[name=stealth]').val(),
			survival: $(':input[name=survival]').val(),

			armorClass: $('#ACInput').val(),

			initiative: $('#initInput').val(),

			speed: $("#speedInput").val(),

			maxHitPoints: $('#maxHPInput').val(),
			currentHitPoints: $('#currentHPInput').val(),
			tempHP: $('#tempHPInput').val(),
			totalHitDice: $("#totalHitDiceInput").val(),
			hitDice: $("#hitDiceInput").val(),

			proficiencyBonus: $("#proficiencyInput").val(),

			passiveWisdom: $("#passiveWisdomInput").val(),

			armorProf: $("#armorProf").val(),
			weaponProf: $("#weaponProf").val(),
			toolProf: $("#toolProf").val(),
			langProf: $("#langProf").val(),

			copper: $(":input[name=cp]").val(),
			silver: $(":input[name=sp]").val(),
			electrum: $(":input[name=ep]").val(),
			gold: $(":input[name=gp]").val(),
			platinum: $(":input[name=pp]").val(),
			equipment: $("#equipmentInput").val(),
			featAndTrait: $("#featAndTraitInput").val(),

			weaponOneName: $(":input[name=weaponOneName]").val(),
			weaponTwoName: $(":input[name=weaponTwoName]").val(),
			weaponThreeName: $(":input[name=weaponThreeName]").val(),
			weaponOneBonus: $(":input[name=weaponOneBonus]").val(),
			weaponTwoBonus: $(":input[name=weaponTwoBonus]").val(),
			weaponThreeBonus: $(":input[name=weaponThreeBonus]").val(),
			weaponOneDmg: $(":input[name=weaponOneDmg]").val(),
			weaponTwoDmg: $(":input[name=weaponTwoDmg]").val(),
			weaponThreeDmg: $(":input[name=weaponThreeDmg]").val(),
			attacks: $("#attacksInput").val(),

			spellClass: $(":input[name=spellClass]").val(),
			spellAbility: $(":input[name=spellAbility]").val(),
			spellSave: $(":input[name=spellSave]").val(),
			spellAttack: $(":input[name=spellAttack]").val(),

			cantripOne: $(":input[name=cantripOne]").val(),
			cantripTwo: $(":input[name=cantripTwo]").val(),
			cantripThree: $(":input[name=cantripThree]").val(),
			cantripFour: $(":input[name=cantripFour]").val(),
			cantripFive: $(":input[name=cantripFive]").val(),
			cantripSix: $(":input[name=cantripSix]").val(),
			cantripSeven: $(":input[name=cantripSeven]").val(),
			cantripEight: $(":input[name=cantripEight]").val(),

			levelOneSlots: $(":input[name=levelOneTotal]").val(),
			levelOneSlotsSpent: $(":input[name=levelOneSpent]").val(),
			levelOneSpellOne: $(":input[name=levelOneSpellOne]").val(),
			levelOneSpellTwo: $(":input[name=levelOneSpellTwo]").val(),
			levelOneSpellThree: $(":input[name=levelOneSpellThree]").val(),
			levelOneSpellFour: $(":input[name=levelOneSpellFour]").val(),
			levelOneSpellFive: $(":input[name=levelOneSpellFive]").val(),
			levelOneSpellSix: $(":input[name=levelOneSpellSix]").val(),
			levelOneSpellSeven: $(":input[name=levelOneSpellSeven]").val(),
			levelOneSpellEight: $(":input[name=levelOneSpellEight]").val(),
			levelOneSpellNine: $(":input[name=levelOneSpellNine]").val(),
			levelOneSpellTen: $(":input[name=levelOneSpellTen]").val(),
			levelOneSpellEleven: $(":input[name=levelOneSpellEleven]").val(),
			levelOneSpellTwelve: $(":input[name=levelOneSpellTwelve]").val(),

			levelTwoSlots: $(":input[name=levelTwoTotal]").val(),
			levelTwoSlotsSpent: $(":input[name=levelTwoSpent]").val(),
			levelTwoSpellOne: $(":input[name=levelTwoSpellOne]").val(),
			levelTwoSpellTwo: $(":input[name=levelTwoSpellTwo]").val(),
			levelTwoSpellThree: $(":input[name=levelTwoSpellThree]").val(),
			levelTwoSpellFour: $(":input[name=levelTwoSpellFour]").val(),
			levelTwoSpellFive: $(":input[name=levelTwoSpellFive]").val(),
			levelTwoSpellSix: $(":input[name=levelTwoSpellSix]").val(),
			levelTwoSpellSeven: $(":input[name=levelTwoSpellSeven]").val(),
			levelTwoSpellEight: $(":input[name=levelTwoSpellEight]").val(),
			levelTwoSpellNine: $(":input[name=levelTwoSpellNine]").val(),
			levelTwoSpellTen: $(":input[name=levelTwoSpellTen]").val(),
			levelTwoSpellEleven: $(":input[name=levelTwoSpellEleven]").val(),
			levelTwoSpellTwelve: $(":input[name=levelTwoSpellTwelve]").val(),
			levelTwoSpellThirteen: $(":input[name=levelTwoSpellThirteen]").val(),

			levelThreeSlots: $(":input[name=levelThreeTotal]").val(),
			levelThreeSlotsSpent: $(":input[name=levelThreeSpent]").val(),
			levelThreeSpellOne: $(":input[name=levelThreeSpellOne]").val(),
			levelThreeSpellTwo: $(":input[name=levelThreeSpellTwo]").val(),
			levelThreeSpellThree: $(":input[name=levelThreeSpellThree]").val(),
			levelThreeSpellFour: $(":input[name=levelThreeSpellFour]").val(),
			levelThreeSpellFive: $(":input[name=levelThreeSpellFive]").val(),
			levelThreeSpellSix: $(":input[name=levelThreeSpellSix]").val(),
			levelThreeSpellSeven: $(":input[name=levelThreeSpellSeven]").val(),
			levelThreeSpellEight: $(":input[name=levelThreeSpellEight]").val(),
			levelThreeSpellNine: $(":input[name=levelThreeSpellNine]").val(),
			levelThreeSpellTen: $(":input[name=levelThreeSpellTen]").val(),
			levelThreeSpellEleven: $(":input[name=levelThreeSpellEleven]").val(),
			levelThreeSpellTwelve: $(":input[name=levelThreeSpellTwelve]").val(),
			levelThreeSpellThirteen: $(":input[name=levelThreeSpellThirteen]").val(),

			levelFourSlots: $(":input[name=levelFourTotal]").val(),
			levelFourSlotsSpent: $(":input[name=levelFourSpent]").val(),
			levelFourSpellOne: $(":input[name=levelFourSpellOne]").val(),
			levelFourSpellTwo: $(":input[name=levelFourSpellTwo]").val(),
			levelFourSpellThree: $(":input[name=levelFourSpellThree]").val(),
			levelFourSpellFour: $(":input[name=levelFourSpellFour]").val(),
			levelFourSpellFive: $(":input[name=levelFourSpellFive]").val(),
			levelFourSpellSix: $(":input[name=levelFourSpellSix]").val(),
			levelFourSpellSeven: $(":input[name=levelFourSpellSeven]").val(),
			levelFourSpellEight: $(":input[name=levelFourSpellEight]").val(),
			levelFourSpellNine: $(":input[name=levelFourSpellNine]").val(),
			levelFourSpellTen: $(":input[name=levelFourSpellTen]").val(),
			levelFourSpellEleven: $(":input[name=levelFourSpellEleven]").val(),
			levelFourSpellTwelve: $(":input[name=levelFourSpellTwelve]").val(),
			levelFourSpellThirteen: $(":input[name=levelFourSpellThirteen]").val(),

			levelFiveSlots: $(":input[name=levelFiveTotal]").val(),
			levelFiveSlotsSpent: $(":input[name=levelFiveSpent]").val(),
			levelFiveSpellOne: $(":input[name=levelFiveSpellOne]").val(),
			levelFiveSpellTwo: $(":input[name=levelFiveSpellTwo]").val(),
			levelFiveSpellThree: $(":input[name=levelFiveSpellThree]").val(),
			levelFiveSpellFour: $(":input[name=levelFiveSpellFour]").val(),
			levelFiveSpellFive: $(":input[name=levelFiveSpellFive]").val(),
			levelFiveSpellSix: $(":input[name=levelFiveSpellSix]").val(),
			levelFiveSpellSeven: $(":input[name=levelFiveSpellSeven]").val(),
			levelFiveSpellEight: $(":input[name=levelFiveSpellEight]").val(),
			levelFiveSpellNine: $(":input[name=levelFiveSpellNine]").val(),

			levelSixSlots: $(":input[name=levelSixTotal]").val(),
			levelSixSlotsSpent: $(":input[name=levelSixSpent]").val(),
			levelSixSpellOne: $(":input[name=levelSixSpellOne]").val(),
			levelSixSpellTwo: $(":input[name=levelSixSpellTwo]").val(),
			levelSixSpellThree: $(":input[name=levelSixSpellThree]").val(),
			levelSixSpellFour: $(":input[name=levelSixSpellFour]").val(),
			levelSixSpellFive: $(":input[name=levelSixSpellFive]").val(),
			levelSixSpellSix: $(":input[name=levelSixSpellSix]").val(),
			levelSixSpellSeven: $(":input[name=levelSixSpellSeven]").val(),
			levelSixSpellEight: $(":input[name=levelSixSpellEight]").val(),
			levelSixSpellNine: $(":input[name=levelSixSpellNine]").val(),

			levelSevenSlots: $(":input[name=levelSevenTotal]").val(),
			levelSevenSlotsSpent: $(":input[name=levelSevenSpent]").val(),
			levelSevenSpellOne: $(":input[name=levelSevenSpellOne]").val(),
			levelSevenSpellTwo: $(":input[name=levelSevenSpellTwo]").val(),
			levelSevenSpellThree: $(":input[name=levelSevenSpellThree]").val(),
			levelSevenSpellFour: $(":input[name=levelSevenSpellFour]").val(),
			levelSevenSpellFive: $(":input[name=levelSevenSpellFive]").val(),
			levelSevenSpellSix: $(":input[name=levelSevenSpellSix]").val(),
			levelSevenSpellSeven: $(":input[name=levelSevenSpellSeven]").val(),
			levelSevenSpellEight: $(":input[name=levelSevenSpellEight]").val(),
			levelSevenSpellNine: $(":input[name=levelSevenSpellNine]").val(),

			levelEightSlots: $(":input[name=levelEightTotal]").val(),
			levelEightSlotsSpent: $(":input[name=levelEightSpent]").val(),
			levelEightSpellOne: $(":input[name=levelEightSpellOne]").val(),
			levelEightSpellTwo: $(":input[name=levelEightSpellTwo]").val(),
			levelEightSpellThree: $(":input[name=levelEightSpellThree]").val(),
			levelEightSpellFour: $(":input[name=levelEightSpellFour]").val(),
			levelEightSpellFive: $(":input[name=levelEightSpellFive]").val(),
			levelEightSpellSix: $(":input[name=levelEightSpellSix]").val(),
			levelEightSpellSeven: $(":input[name=levelEightSpellSeven]").val(),

			levelNineSlots: $(":input[name=levelNineTotal]").val(),
			levelNineSlotsSpent: $(":input[name=levelNineSpent]").val(),
			levelNineSpellOne: $(":input[name=levelNineSpellOne]").val(),
			levelNineSpellTwo: $(":input[name=levelNineSpellTwo]").val(),
			levelNineSpellThree: $(":input[name=levelNineSpellThree]").val(),
			levelNineSpellFour: $(":input[name=levelNineSpellFour]").val(),
			levelNineSpellFive: $(":input[name=levelNineSpellFive]").val(),
			levelNineSpellSix: $(":input[name=levelNineSpellSix]").val(),
			levelNineSpellSeven: $(":input[name=levelNineSpellSeven]").val(),
		};
		let csv = 'data:text/json;charset=utf-8,' + JSON.stringify(dict);
		let filename = args.filename || 'export.csv';
		let data = encodeURI(csv);
		let link = document.createElement('a');
		link.setAttribute('href', data);
		link.setAttribute('download', filename);
		link.click();
	}

	function fillInputs(jsonObj) {
		$("#nameInput").val(jsonObj.characterName);
		$("#raceSelection").val(jsonObj.characterRace);
		$("#classSelection").val(jsonObj.characterClass);

		$("#strAbility").val(jsonObj.strAbility);
		$("#strMod").val(jsonObj.strMod);
		$("#dexAbility").val(jsonObj.dexAbility);
		$("#dexMod").val(jsonObj.dexMod);
		$("#conAbility").val(jsonObj.conAbility);
		$("#conMod").val(jsonObj.conMod);
		$("#intAbility").val(jsonObj.intAbility);
		$("#intMod").val(jsonObj.intMod);
		$("#wisAbility").val(jsonObj.wisAbility);
		$("#wisMod").val(jsonObj.wisMod);
		$("#chaAbility").val(jsonObj.chaAbility);
		$("#chaMod").val(jsonObj.chaMod);

		$("#strThrow").val(jsonObj.strThrow);
		$("#dexThrow").val(jsonObj.dexThrow);
		$("#conThrow").val(jsonObj.conThrow);
		$("#intThrow").val(jsonObj.intThrow);
		$("#wisThrow").val(jsonObj.wisThrow);
		$("#chaThrow").val(jsonObj.chaThrow);

		$(":input[name=acrobatics]").val(jsonObj.acrobatics);
		$(":input[name=animalHandling]").val(jsonObj.animalHandling);
		$(":input[name=arcana]").val(jsonObj.arcana);
		$(":input[name=athletics]").val(jsonObj.athletics);
		$(":input[name=deception]").val(jsonObj.deception);
		$(":input[name=history]").val(jsonObj.history);
		$(":input[name=insight]").val(jsonObj.insight);
		$(":input[name=intimidation]").val(jsonObj.intimidation);
		$(":input[name=investigation]").val(jsonObj.investigation);
		$(":input[name=medicine]").val(jsonObj.medicine);
		$(":input[name=nature]").val(jsonObj.nature);
		$(":input[name=perception]").val(jsonObj.perception);
		$(":input[name=performance]").val(jsonObj.performance);
		$(":input[name=persuasion]").val(jsonObj.persuasion);
		$(":input[name=religion]").val(jsonObj.religion);
		$(":input[name=sleightHand]").val(jsonObj.sleightHand);
		$(":input[name=stealth]").val(jsonObj.stealth);
		$(":input[name=survival]").val(jsonObj.survival);

		$("#ACInput").val(jsonObj.armorClass);

		$("#initInput").val(jsonObj.initiative);

		$("#speedInput").val(jsonObj.speed);

		$("#maxHPInput").val(jsonObj.maxHitPoints);
		$("#currentHPInput").val(jsonObj.currentHitPoints);
		$("#tempHPInput").val(jsonObj.tempHP);
		$("#totalHitDiceInput").val(jsonObj.totalHitDice);
		$("#hitDiceInput").val(jsonObj.hitDice);

		$("#proficiencyInput").val(jsonObj.proficiencyBonus);

		$("#passiveWisdomInput").val(jsonObj.passiveWisdom);

		$("#armorProf").val(jsonObj.armorProf);
		$("#weaponProf").val(jsonObj.weaponProf);
		$("#toolProf").val(jsonObj.toolProf);
		$("#langProf").val(jsonObj.langProf);

		$(":input[name=cp]").val(jsonObj.copper);
		$(":input[name=sp]").val(jsonObj.silver);
		$(":input[name=ep]").val(jsonObj.electrum);
		$(":input[name=gp]").val(jsonObj.gold);
		$(":input[name=pp]").val(jsonObj.platinum);
		$("#equipmentInput").val(jsonObj.equipment);
		$("#featAndTraitInput").val(jsonObj.featAndTrait);

		$(":input[name=weaponOneName]").val(jsonObj.weaponOneName);
		$(":input[name=weaponTwoName]").val(jsonObj.weaponTwoName);
		$(":input[name=weaponThreeName]").val(jsonObj.weaponThreeName);
		$(":input[name=weaponOneBonus]").val(jsonObj.weaponOneBonus);
		$(":input[name=weaponTwoBonus]").val(jsonObj.weaponTwoBonus);
		$(":input[name=weaponThreeBonus]").val(jsonObj.weaponThreeBonus);
		$(":input[name=weaponOneDmg]").val(jsonObj.weaponOneDmg);
		$(":input[name=weaponTwoDmg]").val(jsonObj.weaponTwoDmg);
		$(":input[name=weaponThreeDmg]").val(jsonObj.weaponThreeDmg);
		$("#attacksInput").val(jsonObj.attacks);

		$(":input[name=spellClass]").val(jsonObj.spellClass);
		$(":input[name=spellAbility]").val(jsonObj.spellAbility);
		$(":input[name=spellSave]").val(jsonObj.spellSave);
		$(":input[name=spellAttack]").val(jsonObj.spellAttack);

		$(":input[name=cantripOne]").val(jsonObj.cantripOne);
		$(":input[name=cantripTwo]").val(jsonObj.cantripTwo);
		$(":input[name=cantripThree]").val(jsonObj.cantripThree);
		$(":input[name=cantripFour]").val(jsonObj.cantripFour);
		$(":input[name=cantripFive]").val(jsonObj.cantripFive);
		$(":input[name=cantripSix]").val(jsonObj.cantripSix);
		$(":input[name=cantripSeven]").val(jsonObj.cantripSeven);
		$(":input[name=cantripEight]").val(jsonObj.cantripEight);

		$(":input[name=levelOneTotal]").val(jsonObj.levelOneSlots);
		$(":input[name=levelOneSpent]").val(jsonObj.levelOneSlotsSpent);
		$(":input[name=levelOneSpellOne]").val(jsonObj.levelOneSpellOne);
		$(":input[name=levelOneSpellTwo]").val(jsonObj.levelOneSpellTwo);
		$(":input[name=levelOneSpellThree]").val(jsonObj.levelOneSpellThree);
		$(":input[name=levelOneSpellFour]").val(jsonObj.levelOneSpellFour);
		$(":input[name=levelOneSpellFive]").val(jsonObj.levelOneSpellFive);
		$(":input[name=levelOneSpellSix]").val(jsonObj.levelOneSpellSix);
		$(":input[name=levelOneSpellSeven]").val(jsonObj.levelOneSpellSeven);
		$(":input[name=levelOneSpellEight]").val(jsonObj.levelOneSpellEight);
		$(":input[name=levelOneSpellNine]").val(jsonObj.levelOneSpellNine);
		$(":input[name=levelOneSpellTen]").val(jsonObj.levelOneSpellTen);
		$(":input[name=levelOneSpellEleven]").val(jsonObj.levelOneSpellEleven);
		$(":input[name=levelOneSpellTwelve]").val(jsonObj.levelOneSpellTwelve);

		$(":input[name=levelTwoTotal]").val(jsonObj.levelTwoSlots);
		$(":input[name=levelTwoSpent]").val(jsonObj.levelTwoSlotsSpent);
		$(":input[name=levelTwoSpellOne]").val(jsonObj.levelTwoSpellOne);
		$(":input[name=levelTwoSpellTwo]").val(jsonObj.levelTwoSpellTwo);
		$(":input[name=levelTwoSpellThree]").val(jsonObj.levelTwoSpellThree);
		$(":input[name=levelTwoSpellFour]").val(jsonObj.levelTwoSpellFour);
		$(":input[name=levelTwoSpellFive]").val(jsonObj.levelTwoSpellFive);
		$(":input[name=levelTwoSpellSix]").val(jsonObj.levelTwoSpellSix);
		$(":input[name=levelTwoSpellSeven]").val(jsonObj.levelTwoSpellSeven);
		$(":input[name=levelTwoSpellEight]").val(jsonObj.levelTwoSpellEight);
		$(":input[name=levelTwoSpellNine]").val(jsonObj.levelTwoSpellNine);
		$(":input[name=levelTwoSpellTen]").val(jsonObj.levelTwoSpellTen);
		$(":input[name=levelTwoSpellEleven]").val(jsonObj.levelTwoSpellEleven);
		$(":input[name=levelTwoSpellTwelve]").val(jsonObj.levelTwoSpellTwelve);
		$(":input[name=levelTwoSpellThirteen]").val(jsonObj.levelTwoSpellThirteen);

		$(":input[name=levelThreeTotal]").val(jsonObj.levelThreeSlots);
		$(":input[name=levelThreeSpent]").val(jsonObj.levelThreeSlotsSpent);
		$(":input[name=levelThreeSpellOne]").val(jsonObj.levelThreeSpellOne);
		$(":input[name=levelThreeSpellTwo]").val(jsonObj.levelThreeSpellTwo);
		$(":input[name=levelThreeSpellThree]").val(jsonObj.levelThreeSpellThree);
		$(":input[name=levelThreeSpellFour]").val(jsonObj.levelThreeSpellFour);
		$(":input[name=levelThreeSpellFive]").val(jsonObj.levelThreeSpellFive);
		$(":input[name=levelThreeSpellSix]").val(jsonObj.levelThreeSpellSix);
		$(":input[name=levelThreeSpellSeven]").val(jsonObj.levelThreeSpellSeven);
		$(":input[name=levelThreeSpellEight]").val(jsonObj.levelThreeSpellEight);
		$(":input[name=levelThreeSpellNine]").val(jsonObj.levelThreeSpellNine);
		$(":input[name=levelThreeSpellTen]").val(jsonObj.levelThreeSpellTen);
		$(":input[name=levelThreeSpellEleven]").val(jsonObj.levelThreeSpellEleven);
		$(":input[name=levelThreeSpellTwelve]").val(jsonObj.levelThreeSpellTwelve);
		$(":input[name=levelThreeSpellThirteen]").val(jsonObj.levelThreeSpellThirteen);

		$(":input[name=levelFourTotal]").val(jsonObj.levelFourSlots);
		$(":input[name=levelFourSpent]").val(jsonObj.levelFourSlotsSpent);
		$(":input[name=levelFourSpellOne]").val(jsonObj.levelFourSpellOne);
		$(":input[name=levelFourSpellTwo]").val(jsonObj.levelFourSpellTwo);
		$(":input[name=levelFourSpellThree]").val(jsonObj.levelFourSpellThree);
		$(":input[name=levelFourSpellFour]").val(jsonObj.levelFourSpellFour);
		$(":input[name=levelFourSpellFive]").val(jsonObj.levelFourSpellFive);
		$(":input[name=levelFourSpellSix]").val(jsonObj.levelFourSpellSix);
		$(":input[name=levelFourSpellSeven]").val(jsonObj.levelFourSpellSeven);
		$(":input[name=levelFourSpellEight]").val(jsonObj.levelFourSpellEight);
		$(":input[name=levelFourSpellNine]").val(jsonObj.levelFourSpellNine);
		$(":input[name=levelFourSpellTen]").val(jsonObj.levelFourSpellTen);
		$(":input[name=levelFourSpellEleven]").val(jsonObj.levelFourSpellEleven);
		$(":input[name=levelFourSpellTwelve]").val(jsonObj.levelFourSpellTwelve);
		$(":input[name=levelFourSpellThirteen]").val(jsonObj.levelFourSpellThirteen);

		$(":input[name=levelFiveTotal]").val(jsonObj.levelFiveSlots);
		$(":input[name=levelFiveSpent]").val(jsonObj.levelFiveSlotsSpent);
		$(":input[name=levelFiveSpellOne]").val(jsonObj.levelFiveSpellOne);
		$(":input[name=levelFiveSpellTwo]").val(jsonObj.levelFiveSpellTwo);
		$(":input[name=levelFiveSpellThree]").val(jsonObj.levelFiveSpellThree);
		$(":input[name=levelFiveSpellFour]").val(jsonObj.levelFiveSpellFour);
		$(":input[name=levelFiveSpellFive]").val(jsonObj.levelFiveSpellFive);
		$(":input[name=levelFiveSpellSix]").val(jsonObj.levelFiveSpellSix);
		$(":input[name=levelFiveSpellSeven]").val(jsonObj.levelFiveSpellSeven);
		$(":input[name=levelFiveSpellEight]").val(jsonObj.levelFiveSpellEight);
		$(":input[name=levelFiveSpellNine]").val(jsonObj.levelFiveSpellNine);

		$(":input[name=levelSixTotal]").val(jsonObj.levelSixSlots);
		$(":input[name=levelSixSpent]").val(jsonObj.levelSixSlotsSpent);
		$(":input[name=levelSixSpellOne]").val(jsonObj.levelSixSpellOne);
		$(":input[name=levelSixSpellTwo]").val(jsonObj.levelSixSpellTwo);
		$(":input[name=levelSixSpellThree]").val(jsonObj.levelSixSpellThree);
		$(":input[name=levelSixSpellFour]").val(jsonObj.levelSixSpellFour);
		$(":input[name=levelSixSpellFive]").val(jsonObj.levelSixSpellFive);
		$(":input[name=levelSixSpellSix]").val(jsonObj.levelSixSpellSix);
		$(":input[name=levelSixSpellSeven]").val(jsonObj.levelSixSpellSeven);
		$(":input[name=levelSixSpellEight]").val(jsonObj.levelSixSpellEight);
		$(":input[name=levelSixSpellNine]").val(jsonObj.levelSixSpellNine);

		$(":input[name=levelSevenTotal]").val(jsonObj.levelSevenSlots);
		$(":input[name=levelSevenSpent]").val(jsonObj.levelSevenSlotsSpent);
		$(":input[name=levelSevenSpellOne]").val(jsonObj.levelSevenSpellOne);
		$(":input[name=levelSevenSpellTwo]").val(jsonObj.levelSevenSpellTwo);
		$(":input[name=levelSevenSpellThree]").val(jsonObj.levelSevenSpellThree);
		$(":input[name=levelSevenSpellFour]").val(jsonObj.levelSevenSpellFour);
		$(":input[name=levelSevenSpellFive]").val(jsonObj.levelSevenSpellFive);
		$(":input[name=levelSevenSpellSix]").val(jsonObj.levelSevenSpellSix);
		$(":input[name=levelSevenSpellSeven]").val(jsonObj.levelSevenSpellSeven);
		$(":input[name=levelSevenSpellEight]").val(jsonObj.levelSevenSpellEight);
		$(":input[name=levelSevenSpellNine]").val(jsonObj.levelSevenSpellNine);

		$(":input[name=levelEightTotal]").val(jsonObj.levelEightSlots);
		$(":input[name=levelEightSpent]").val(jsonObj.levelEightSlotsSpent);
		$(":input[name=levelEightSpellOne]").val(jsonObj.levelEightSpellOne);
		$(":input[name=levelEightSpellTwo]").val(jsonObj.levelEightSpellTwo);
		$(":input[name=levelEightSpellThree]").val(jsonObj.levelEightSpellThree);
		$(":input[name=levelEightSpellFour]").val(jsonObj.levelEightSpellFour);
		$(":input[name=levelEightSpellFive]").val(jsonObj.levelEightSpellFive);
		$(":input[name=levelEightSpellSix]").val(jsonObj.levelEightSpellSix);
		$(":input[name=levelEightSpellSeven]").val(jsonObj.levelEightSpellSeven);

		$(":input[name=levelNineTotal]").val(jsonObj.levelNineSlots);
		$(":input[name=levelNineSpent]").val(jsonObj.levelNineSlotsSpent);
		$(":input[name=levelNineSpellOne]").val(jsonObj.levelNineSpellOne);
		$(":input[name=levelNineSpellTwo]").val(jsonObj.levelNineSpellTwo);
		$(":input[name=levelNineSpellThree]").val(jsonObj.levelNineSpellThree);
		$(":input[name=levelNineSpellFour]").val(jsonObj.levelNineSpellFour);
		$(":input[name=levelNineSpellFive]").val(jsonObj.levelNineSpellFive);
		$(":input[name=levelNineSpellSix]").val(jsonObj.levelNineSpellSix);
		$(":input[name=levelNineSpellSeven]").val(jsonObj.levelNineSpellSeven);
	}
	function toggleEdit(){
		if (editToggle == true){
			editToggle = false;
			$("#editBtn").html("View")
			$(":input").prop("disabled", true);
			$("#editBtn").prop("disabled",false);
		} else if (editToggle == false){
			editToggle = true;
			$("#editBtn").html("Edit")
			$(":input").prop("disabled", false);
		}
	}
</script>