<script>
	$(document).ready(function() {
		let jsonObj = JSON.parse(localStorage.getItem('json'))

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
	})
</script>