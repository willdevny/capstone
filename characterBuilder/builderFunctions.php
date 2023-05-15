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
            $_SESSION['equipment'] = [];
            $_SESSION['gold'] = '';
            if(isset($_POST['option1'])){
                array_push($_SESSION['equipment'], $_POST['option1']);
            }
            if(isset($_POST['option2'])){
                array_push($_SESSION['equipment'], $_POST['option2']);
            }
            if(isset($_POST['option3'])){
                array_push($_SESSION['equipment'], $_POST['option3']);
            }
            if(isset($_POST['option4'])){
                array_push($_SESSION['equipment'], $_POST['option1']);
            }
            if(isset($_POST['result'])){
                $_SESSION['gold'] = $_POST['result'];
            }
            if(isset($_POST['fightingstyle'])){
                $_SESSION['fightingstyle'] = $_POST['fightingstyle'];
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
                getInfo();
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
                        if($_SESSION['class'] == 'Cleric' || 'Sorcerer' || 'Warlock'){
                            header("Location: subclass.php");
                        }
                    }
                }
                else{
                    $_SESSION['spells'] == $_POST['spellList'];
                    if($_SESSION['class'] == 'Cleric' || 'Sorcerer' || 'Warlock'){
                        getInfo();
                        header("Location: character-sheet.php");
                    }
                }
            }    
        }    
    }
    else if($_POST['hidden'] == "Subclass"){
        $_SESSION['subclass'] = $_POST['subclass'];
        getInfo();
        header("Location: character-sheet.php");
    }
}
else{
    return false;
};

function getInfo(){
    if($_SESSION['race'] == "Half-Orc"){
        $_SESSION['raceFeats'] = ['Darkvision', 'Menacing', 'Relentless', 'Savage Attacks'];
        $_SESSION['speed'] = '30';
        $_SESSION['size'] = 'medium';
        $_SESSION['languages'] = ['Common', 'Orc'];
    }
    else if($_SESSION['race'] == "Human"){
        $_SESSION['speed'] = '30';
        $_SESSION['size'] = 'medium';
        $_SESSION['languages'] = ['Common', 'A language of your choice'];
    }
    else if($_SESSION['race'] == "Variant-Human"){
        $_SESSION['raceFeats'] = ['Additonal Skill', 'Additional Feat'];
        $_SESSION['speed'] = '30';
        $_SESSION['size'] = 'medium';
        $_SESSION['languages'] = ['Common', 'A language of your choice'];
    }
    else if($_SESSION['race'] == "Variant-Human"){
        $_SESSION['raceFeats'] = ['Draconic Ancestry', 'Breath Weapon', 'Damage Resistance'];
        $_SESSION['speed'] = '30';
        $_SESSION['size'] = 'medium';
        $_SESSION['languages'] = ['Common', 'Draconic'];
    }
    else if($_SESSION['race'] == "Hill-Dwarf"){
        $_SESSION['raceFeats'] = ['Darkvision', 'Dwarven Resilience', 'Dwarven Combat Training', 'Tool Proficiency', 'Dwarven Toughness', 'Stonecunning'];
        $_SESSION['speed'] = '25';
        $_SESSION['size'] = 'medium';
        $_SESSION['languages'] = ['Common', 'Dwarvish'];
    }
    else if($_SESSION['race'] == "Mountain-Dwarf"){
        $_SESSION['raceFeats'] = ['Darkvision', 'Dwarven Resilience', 'Dwarven Combat Training', 'Tool Proficiency', 'Dwarven Armor Training', 'Stonecunning'];
        $_SESSION['speed'] = '25';
        $_SESSION['size'] = 'medium';
        $_SESSION['languages'] = ['Common', 'Dwarvish'];
    }
    else if($_SESSION['race'] == "High-Elf"){
        $_SESSION['raceFeats'] = ['Darkvision', 'Fey Ancestry', 'Trance', 'Keen Senses', 'Cantrip', 'Elf Weapon Training', 'Extra Language'];
        $_SESSION['speed'] = '30';
        $_SESSION['size'] = 'medium';
        $_SESSION['languages'] = ['Common', 'Elven'];
    }
    else if($_SESSION['race'] == "Drow"){
        $_SESSION['raceFeats'] = ['Darkvision', 'Superior Darkvision', 'Fey Ancestry', 'Trance', 'Keen Senses', 'Drow Magic', 'Drow Weapon Training', 'Sunlight Sensitivity'];
        $_SESSION['speed'] = '30';
        $_SESSION['size'] = 'medium';
        $_SESSION['languages'] = ['Common', 'Elven'];
    }
    else if($_SESSION['race'] == "Wood-Elf"){
        $_SESSION['raceFeats'] = ['Darkvision', 'Fey Ancestry', 'Trance', 'Keen Senses', 'Fleet of Foot', 'Elf Weapon Training', 'Mask of the Wild'];
        $_SESSION['speed'] = '30';
        $_SESSION['size'] = 'medium';
        $_SESSION['languages'] = ['Common', 'Elven'];
    }
    else if($_SESSION['race'] == "Forest-Gnome"){
        $_SESSION['raceFeats'] = ['Darkvision', 'Gnome Cunning', 'Natural Illusionist', 'Speak with Small Beasts'];
        $_SESSION['speed'] = '25';
        $_SESSION['size'] = 'small';
        $_SESSION['languages'] = ['Common', 'Gnomish'];
    }
    else if($_SESSION['race'] == "Rock-Gnome"){
        $_SESSION['raceFeats'] = ['Darkvision', 'Gnome Cunning', "Artificer's Lore", 'Tinker'];
        $_SESSION['speed'] = '25';
        $_SESSION['size'] = 'small';
        $_SESSION['languages'] = ['Common', 'Gnomish'];
    }
    else if($_SESSION['race'] == "Half-Elf"){
        $_SESSION['raceFeats'] = ['Darkvision', 'Fey Ancestry', "Skill Versatility"];
        $_SESSION['speed'] = '30';
        $_SESSION['size'] = 'medium';
        $_SESSION['languages'] = ['Common', 'Elven', 'A language of your choice'];
    }
    else if($_SESSION['race'] == "Lightfoot-Halfling"){
        $_SESSION['raceFeats'] = ['Lucky', 'Brave', "Nimble", 'Naturally Stealthy'];
        $_SESSION['speed'] = '25';
        $_SESSION['size'] = 'small';
        $_SESSION['languages'] = ['Common', 'Halfling'];
    }
    else if($_SESSION['race'] == "Stout-Halfling"){
        $_SESSION['raceFeats'] = ['Lucky', 'Brave', "Nimble", 'Stout Resilience'];
        $_SESSION['speed'] = '25';
        $_SESSION['size'] = 'small';
        $_SESSION['languages'] = ['Common', 'Halfling'];
    }
    else if($_SESSION['race'] == "Asmodeus-Tiefling"){
        $_SESSION['raceFeats'] = ['Darkvision', 'Hellish Resistance', "Infernal Legacy"];
        $_SESSION['speed'] = '30';
        $_SESSION['size'] = 'medium';
        $_SESSION['languages'] = ['Common', 'Infernal'];
    }
    
    if($_SESSION['class'] == 'Barbarian'){
        $_SESSION['HP'] = 12 + floor(($_SESSION['Stats'][2] - 10)/2);
        $_SESSION['profs'] = ['Light Armour', 'Medium Armour', 'Shields', 'Simple Weapons', 'Martial Weapons'];
        $_SESSION['classFeats'] = ['Rage', 'Unarmored Defense'];
        $_SESSION['throws'] = ['Str', 'Con'];
        $_SESSION['hitdice'] = '1d12';
        array_push($_SESSION['equipment'], 'Explorer Pack');
        array_push($_SESSION['equipment'], '4 Javelins');
    }
    else if($_SESSION['class'] == 'Bard'){
        $_SESSION['HP'] = 8 + floor(($_SESSION['Stats'][2] - 10)/2);
        $_SESSION['profs'] = ['Light Armour', 'Simple Weapons', 'Hand Crossbows', 'Longswords', 'Rapiers', 'Shortswords', 'Three musical instruments of your choice'];
        $_SESSION['classFeats'] = ['Spellcasting', 'Bardic Inspiration'];
        $_SESSION['throws'] = ['Dex', 'Cha'];
        $_SESSION['hitdice'] = '1d8';
        array_push($_SESSION['equipment'], 'A musical instrument');
        array_push($_SESSION['equipment'], 'Leather Armour');
        array_push($_SESSION['equipment'], 'Dagger');
    }
    else if($_SESSION['class'] == 'Cleric'){
        $_SESSION['HP'] = 8 + floor(($_SESSION['Stats'][2] - 10)/2);
        $_SESSION['profs'] = ['Light Armour', 'Medium Armour', 'Shields', 'Simple Weapons'];
        $_SESSION['classFeats'] = ['Spellcasting', 'Divine Domain'];
        $_SESSION['throws'] = ['Wis', 'Cha'];
        $_SESSION['hitdice'] = '1d8';
        array_push($_SESSION['equipment'], 'Shield');
        array_push($_SESSION['equipment'], 'Holy Symbol');
    }
    else if($_SESSION['class'] == 'Druid'){
        $_SESSION['HP'] = 8 + floor(($_SESSION['Stats'][2] - 10)/2);
        $_SESSION['profs'] = ['Light Armour', 'Medium Armour', 'Shields', 'Clubs', 'Daggers', 'Darts', 'Javelins', 'Maces', 'Quarterstaffs', 'Scimitars', 'Sickles', 'Slings', 'Spears', 'Herbalism Kit'];
        $_SESSION['classFeats'] = ['Spellcasting', 'Divine Domain'];
        $_SESSION['throws'] = ['Wis', 'Int'];
        $_SESSION['hitdice'] = '1d8';
        array_push($_SESSION['equipment'], 'Leather Armour');
        array_push($_SESSION['equipment'], 'Explorer Pack');
        array_push($_SESSION['equipment'], 'Druidic Focus');
    }
    else if($_SESSION['class'] == 'Fighter'){
        $_SESSION['HP'] = 10 + floor(($_SESSION['Stats'][2] - 10)/2);
        $_SESSION['hitdice'] = '1d10';
        $_SESSION['profs'] = ['All Armour', 'Shields', 'Simple Weapons', 'Martial Weapons'];
        $_SESSION['classFeats'] = ['Fighting Style'.$_SESSION['fightingstyle'] , 'Second Wind'];
        $_SESSION['throws'] = ['Str', 'Con'];
    }
    else if($_SESSION['class'] == 'Monk'){
        $_SESSION['HP'] = 8 + floor(($_SESSION['Stats'][2] - 10)/2);
        $_SESSION['hitdice'] = '1d8';
        $_SESSION['profs'] = ['Simple Weapons', 'Shortswords', "one type of artisan's tools or one musical instrument"];
        $_SESSION['classFeats'] = ['Martial Arts'];
        $_SESSION['throws'] = ['Str', 'Dex'];
        array_push($_SESSION['equipment'], '10 Darts');
    }
    else if($_SESSION['class'] == 'Paladin'){
        $_SESSION['HP'] = 10 + floor(($_POST['Constitution'] - 10)/2);
        $_SESSION['profs'] = ['All Armour', 'Shields', "Simple Weapons", 'Martial Weapons'];
        $_SESSION['classFeats'] = ['Divine Sense', 'Lay on Hands'];
        $_SESSION['throws'] = ['Wis', 'Cha'];
        $_SESSION['hitdice'] = '1d10';
        array_push($_SESSION['equipment'], 'Chainmail');
        array_push($_SESSION['equipment'], 'Holy Symbol');
    }
    else if($_SESSION['class'] == 'Ranger'){
        $_SESSION['HP'] = 10 + floor(($_SESSION['Stats'][2] - 10)/2);
        $_SESSION['profs'] = ['Light Armour', 'Medium Armour', 'Shields', "Simple Weapons", 'Martial Weapons'];
        $_SESSION['classFeats'] = ['Favored Enemy', 'Natural Explorer'];
        $_SESSION['throws'] = ['Str', 'Dex'];
        $_SESSION['hitdice'] = '1d10';
        array_push($_SESSION['equipment'], 'Longbow');
        array_push($_SESSION['equipment'], 'Quiver of 20 arrows');
    }
    else if($_SESSION['class'] == 'Rogue'){
        $_SESSION['HP'] = 8 + floor(($_SESSION['Stats'][2] - 10)/2);
        $_SESSION['profs'] = ['Light Armour', 'Simple Weapons', 'Hand Crossbows', 'Longswords', "Rapiers", 'Shortswords', "Thieves' Tools"];
        $_SESSION['classFeats'] = ['Expertise', 'Sneak Attack', "Thieves' Cant"];
        $_SESSION['throws'] = ['Int', 'Dex'];
        $_SESSION['hitdice'] = '1d8';
        array_push($_SESSION['equipment'], 'Leather Armour');
        array_push($_SESSION['equipment'], 'Two Daggers');
        array_push($_SESSION['equipment'], "Thieves' Tools");
    }
    else if($_SESSION['class'] == 'Sorcerer'){
        $_SESSION['HP'] = 6 + floor(($_SESSION['Stats'][2] - 10)/2);
        $_SESSION['profs'] = ['Daggers', 'Light Crossbows', 'Darts', "Slings", 'Quarterstaffs'];
        $_SESSION['classFeats'] = ['Spellcasting', 'Sorcerous Origin'];
        $_SESSION['throws'] = ['Con', 'Cha'];
        $_SESSION['hitdice'] = '1d6';
        array_push($_SESSION['equipment'], 'Two Daggers');
    }
    else if($_SESSION['class'] == 'Warlock'){
        $_SESSION['HP'] = 8 + floor(($_SESSION['Stats'][2] - 10)/2);
        $_SESSION['profs'] = ['Light Armour', 'Simple Weapons'];
        $_SESSION['classFeats'] = ['Spellcasting', 'Otherworldly Patron'];
        $_SESSION['throws'] = ['Wis', 'Cha'];
        $_SESSION['hitdice'] = '1d8';
        array_push($_SESSION['equipment'], 'Leather Armour');
        array_push($_SESSION['equipment'], 'Two Daggers');
    }
    else if($_SESSION['class'] == 'Wizard'){
        $_SESSION['HP'] = 6 + floor(($_SESSION['Stats'][2] - 10)/2);
        $_SESSION['profs'] = ['Daggers', 'Darts', 'Slings', 'Quarterstaffs', 'Light Crossbows'];
        $_SESSION['classFeats'] = ['Spellcasting', 'Arcane Recovery'];
        $_SESSION['throws'] = ['Wis', 'Int'];
        $_SESSION['hitdice'] = '1d6';
        array_push($_SESSION['equipment'], 'Spell Book');
    }
}


//session variable names -
//$_SESSION['class'] == class name
//$_SESSION['race'] == race name
//$_SESSION['skills'] == skill proficencies (array of strings)
//$_SESSION['equipment'] == starting equipment (could be empty, array string)
//$_SESSION['gold'] == starting gold (could be empty)
//$_SESSION['cantrips'] == cantrip names (array of strings)
//$_SESSION['spells'] == spell names (array of strings)
//$_SESSION['raceFeats'] == race feat names (array of strings)
//$_SESSION['speed'] == speed (string)
//$_SESSION['size'] == small/medium
//$_SESSION['languages'] == known languages (array of strings)
//$_SESSION['HP'] == max hp 
//$_SESSION['profs'] == weapon and tool proficencies (array of strings)
//$_SESSION['classFeats'] == class feat name (array of strings)
//$_SESSION['throws'] == saving throw proficencies (array of strings)
//$_SESSION['hitdice'] ==  1dsomething
//$_SESSION['subclass'] == subclass name
?>