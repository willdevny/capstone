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
    <title>Race</title>
</head>
<body>
    <form method="POST" action="race.php">
        <label for="race">Choose a race:</label>    
        <select name="race" id="race" onchange="getRace()">
            <option value="">------</option>
            <option value="Human">Human</option>
            <option value="Variant-Human">Variant Human</option>
            <option value="Dragonborn">Dragonborn</option>
            <option value="Hill-Dwarf">Hill Dwarf</option>
            <option value="Mountain-Dwarf">Mountain Dwarf</option>
            <option value="High-Elf"> High Elf</option>
            <option value="Wood-Elf"> Wood Elf</option>
            <option value="Drow"> Drow</option>
            <option value="Forest-Gnome">Forest Gnome</option>
            <option value="Rock-Gnome">Rock Gnome</option>
            <option value="Half-Elf">Half-Elf</option>
            <option value="Half-Orc">Half-Orc</option>
            <option value="Stout-Halfling">Stout Halfling</option>
            <option value="Lightfoot-Halfling">Lightfoot Halfling</option>
            <option value="Asmodeus-Tiefling">Bloodline of Asmodeus Tiefling</option>
        </select>
        <input type="hidden" name="hidden" value="race">
        <input type="submit" name="Submit" value="Submit">
    </form>

    <p name="description" id="description"></p>
    
</body>
<script type="text/javascript">
    function getRace(){
        //used to get race info right now it's set to work on change of the drop down but should be able to be used with whatever selection you think looks nice
        $("#description").html("");// clears the destination tag
        var race=$('#race').val();//grabs the value of the input named race
        if(race == "Half-Orc") {
            //all races follow this structure for their content
            var desc = "\
            When alliances between humans and orcs are sealed by marriages, half-orcs are born.\
            Some half-orcs rise to become proud chiefs of orc tribes, their human blood giving them an edge over their full-blooded orc rivals.\
            Some venture into the world to prove their worth among humans and other more civilized races.\
            Many of these become adventurers, achieving greatness for their mighty deeds and notoriety for their barbaric customs and savage fury.\
            "//variable contains race description text 
            var $p = $("<p>"+desc+"</p>"); //puts it in a tag
            var lis = "<li><b>Ability Score Increase.</b>Your Strength score increases by 2, and your Constitution score increases by 1.</li>\
                        <li><b>Age.</b>Half-orcs mature a little faster than humans, reaching adulthood around age 14. They age noticeably faster and rarely live longer than 75 years.</li>\
                        <li><b>Alignment.</b>Half-orcs inherit a tendency toward chaos from their orc parents and are not strongly inclined toward good. Half-orcs raised among orcs and willing to live out their lives among them are usually evil.</li>\
                        <li><b>Size.</b>Half-orcs are somewhat larger and bulkier than humans, and they range from 5 to well over 6 feet tall. Your size is Medium.</li>\
                        <li><b>Speed.</b>Your base walking speed is 30 feet.</li>\
                        <li><b>Darkvision.</b>Thanks to your orc blood, you have superior vision in dark and dim conditions. You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can't discern color in darkness, only shades of gray.</li>\
                        <li><b>Menacing.</b>You gain proficiency in the Intimidation skill.</li>\
                        <li><b>Relentless Endurance.</b>When you are reduced to 0 hit points but not killed outright, you can drop to 1 hit point instead. You can't use this feature again until you finish a long rest.</li>\
                        <li><b>Savage Attacks.</b>When you score a critical hit with a melee weapon attack, you can roll one of the weapon's damage dice one additional time and add it to the extra damage of the critical hit.</li>\
                        <li><b>Languages.</b>You can speak, read, and write Common and Orc. Orc is a harsh, grating language with hard consonants. It has no script of its own but is written in the Dwarvish script.</li>\
                        "//list of abilities, will sometimes have sublists
            var $ul = $("<ul>" + lis + "</ul>");//puts it in a tag
            var $final = $p.append($ul); //adds the contents together

            $("#description").append($final);//adds the contents to the destination tag
        }
        else if(race == "Human"){
            var desc = "\
            In the reckonings of most worlds, humans are the youngest of the common races, late to arrive on the world scene and short-lived in comparison to dwarves, elves, and dragons.\
            Perhaps it is because of their shorter lives that they strive to achieve as much as they can in the years they are given.\
            Or maybe they feel they have something to prove to the elder races, and that is why they build their mighty empires on the foundation of conquest and trade.\
            Whatever drives them, humans are the innovators, the achievers, and the pioneers of the worlds.\
            "
            var $p = $("<p>"+desc+"</p>");
            var lis = "<li><b>Ability Score Increase.</b>Your ability scores each increase by 1.</li>\
                        <li><b>Age.</b>Humans reach adulthood in their late teens and live less than a century.</li>\
                        <li><b>Alignment.</b>Humans tend toward no particular alignment. The best and the worst are found among them.</li>\
                        <li><b>Size.</b>Humans vary widely in height and build, from barely 5 feet to well over 6 feet tall. Regardless of your position in that range, your size is Medium.</li>\
                        <li><b>Speed.</b>Your base walking speed is 30 feet.</li>\
                        <li><b>Languages.</b>You can speak, read, and write Common and one extra language of your choice. Humans typically learn the languages of other peoples they deal with, including obscure dialects. They are fond of sprinkling their speech with words borrowed from other tongues: Orc curses, Elvish musical expressions, Dwarvish military phrases, and so on.</li>\
                        "
            var $ul = $("<ul>" + lis + "</ul>");
            var $final = $p.append($ul);

            $("#description").append($final);
        }
        else if(race == "Variant-Human"){
            var desc = "\
            In the reckonings of most worlds, humans are the youngest of the common races, late to arrive on the world scene and short-lived in comparison to dwarves, elves, and dragons.\
            Perhaps it is because of their shorter lives that they strive to achieve as much as they can in the years they are given.\
            Or maybe they feel they have something to prove to the elder races, and that is why they build their mighty empires on the foundation of conquest and trade.\
            Whatever drives them, humans are the innovators, the achievers, and the pioneers of the worlds.\
            If your campaign uses the optional feat rules from chapter 5 of the Player's Handbook, your Dungeon Master might allow these variant traits, all of which replace the human's Ability Score Increase trait.\
            "
            var $p = $("<p>"+desc+"</p>");
            var lis = "<li><b>Ability Score Increase.</b>Two different ability scores of your choice increase by 1.</li>\
                        <li><b>Age.</b>Humans reach adulthood in their late teens and live less than a century.</li>\
                        <li><b>Alignment.</b>Humans tend toward no particular alignment. The best and the worst are found among them.</li>\
                        <li><b>Size.</b>Humans vary widely in height and build, from barely 5 feet to well over 6 feet tall. Regardless of your position in that range, your size is Medium.</li>\
                        <li><b>Speed.</b>Your base walking speed is 30 feet.</li>\
                        <li><b>Skills.</b>You gain proficiency in one skill of your choice.</li>\
                        <li><b>Feat.</b>You gain one Feat of your choice.</li>\
                        <li><b>Languages.</b>You can speak, read, and write Common and one extra language of your choice. Humans typically learn the languages of other peoples they deal with, including obscure dialects. They are fond of sprinkling their speech with words borrowed from other tongues: Orc curses, Elvish musical expressions, Dwarvish military phrases, and so on.</li>\
                        "
            var $ul = $("<ul>" + lis + "</ul>");
            var $final = $p.append($ul);

            $("#description").append($final);
        }
        else if(race == "Dragonborn"){
            var desc = "\
            Born of dragons, as their name proclaims, the dragonborn walk proudly through a world that greets them with fearful incomprehension.\
            Shaped by draconic gods or the dragons themselves, dragonborn originally hatched from dragon eggs as a unique race, combining the best attributes of dragons and humanoids.\
            Some dragonborn are faithful servants to true dragons, others form the ranks of soldiers in great wars, and still others find themselves adrift, with no clear calling in life.\
            "
            var $p = $("<p>"+desc+"</p>");
            var lis = "<li><b>Ability Score Increase.</b>Your Strength score increases by 2, and your Charisma score increases by 1.</li>\
                        <li><b>Age.</b>Young dragonborn grow quickly. They walk hours after hatching, attain the size and development of a 10-year-old human child by the age of 3, and reach adulthood by 15. They live to be around 80.</li>\
                        <li><b>Alignment.</b>Dragonborn tend towards extremes, making a conscious choice for one side or the other between Good and Evil (represented by Bahamut and Tiamat, respectively). More side with Bahamut than Tiamat (whose non-dragon followers are mostly kobolds), but villainous dragonborn can be quite terrible indeed. Some rare few choose to devote themselves to lesser dragon deities, such as Chronepsis (Neutral), and fewer still choose to worship Io, the Ninefold Dragon, who is all alignments at once.</li>\
                        <li><b>Size.</b>Dragonborn are taller and heavier than humans, standing well over 6 feet tall and averaging almost 250 pounds. Your size is Medium.</li>\
                        <li><b>Speed.</b>Your base walking speed is 30 feet.</li>\
                        <li><b>Draconic Ancestry.</b>You are distantly related to a particular kind of dragon. Choose a type of dragon from the below list; this determines the damage and area of your breath weapon, and the type of resistance you gain.</li>\
                        <li><b>Breath Weapon.</b>You can use your action to exhale destructive energy. It deals damage in an area according to your ancestry. When you use your breath weapon, all creatures in the area must make a saving throw, the type of which is determined by your ancestry. The DC of this saving throw is 8 + your Constitution modifier + your proficiency bonus. A creature takes 2d6 damage on a failed save, and half as much damage on a successful one. The damage increase to 3d6 at 6th level, 4d6 at 11th, and 5d6 at 16th level. After using your breath weapon, you cannot use it again until you complete a short or long rest. HBInstead, you may use your breath weapon a number of times equal to your Constitution modifier. You regain expended uses on a short or long rest.</li>\
                        <li><b>Damage Resistance.</b>You have resistance to the damage type associated with your ancestry.</li>\
                        <li><b>Languages.</b>You can read, speak, and write Common and Draconic.</li>\
                        "
            var $ul = $("<ul>" + lis + "</ul>");
            var $final = $p.append($ul);

            $("#description").append($final);
        }
        else if(race == "Hill-Dwarf"){
            var desc = "\
            Kingdoms rich in ancient grandeur, halls carved into the roots of mountains, the echoing of picks and hammers in deep mines and blazing forges, a commitment to clan and tradition, and a burning hatred of goblins and orcs—these common threads unite all dwarves.\
            As a hill dwarf, you have keen senses, deep intuition, and remarkable resilience.\
            The gold dwarves of Faerûn in their mighty southern kingdom are hill dwarves, as are the exiled Neidar and the debased Klar of Krynn in the Dragonlance setting.\
            "
            var $p = $("<p>"+desc+"</p>");
            var lis = "<li><b>Ability Score Increase.</b>Your Constitution score increases by 2 and your Wisdom score increases by 1.</li>\
                        <li><b>Age.</b>Dwarves mature at the same rate as humans, but they are considered young until they reach the age of 50. On average, they live about 350 years.</li>\
                        <li><b>Alignment.</b>Most dwarves are lawful, believing firmly in the benefits of a well-ordered society. </li>\
                        <li><b>Size.</b>Dwarves stand between 4 and 5 feet tall and average about 150 pounds. Your size is Medium.</li>\
                        <li><b>Speed.</b>Your base walking speed is 25 feet. Your speed is not reduced by wearing heavy armor.</li>\
                        <li><b>Darkvision.</b>Accustomed to life underground, you have superior vision in dark and dim conditions. You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can't discern color in darkness, only shades of gray.</li>\
                        <li><b>Dwarven Resilience.</b>You have advantage on saving throws against poison, and you have resistance against poison damage.</li>\
                        <li><b>Dwarven Combat Training.</b>You have proficiency with the battleaxe, handaxe, light hammer, and warhammer.</li>\
                        <li><b>Tool Proficiency.</b>You gain proficiency with the artisan's tools of your choice: smith's tools, brewer's supplies, or mason's tools.</li>\
                        <li><b>Dwarven Toughness.</b>Your hit point maximum increases by 1, and it increases by 1 every time you gain a level.</li>\
                        <li><b>Stonecunning.</b>Whenever you make an Intelligence (History) check related to the origin of stonework, you are considered proficient in the History skill and add double your proficiency bonus to the check, instead of your normal proficiency bonus.</li>\
                        <li><b>Languages.</b>You can speak, read, and write Common and Dwarvish. Dwarvish is full of hard consonants and guttural sounds, and those characteristics spill over into whatever other language a dwarf might speak.</li>"
            var $ul = $("<ul>" + lis + "</ul>");
            var $final = $p.append($ul);

            $("#description").append($final);
        }
        else if(race == "Mountain-Dwarf"){
            var desc = "\
            Kingdoms rich in ancient grandeur, halls carved into the roots of mountains, the echoing of picks and hammers in deep mines and blazing forges, a commitment to clan and tradition, and a burning hatred of goblins and orcs—these common threads unite all dwarves.\
            As a mountain dwarf, you are strong and hardy, accustomed to a difficult life in rugged terrain.\
            You are probably on the tall side (for a dwarf), and tend toward lighter coloration.\
            The shield dwarves of northern Faerûn, as well as the ruling Hylar clan and the noble Daewar clan of Dragonlance, are mountain dwarves.\
            "
            var $p = $("<p>"+desc+"</p>");
            var lis = "<li><b>Ability Score Increase.</b>Your Constitution score increases by 2 and your Strength score increases by 2.</li>\
                        <li><b>Age.</b>Dwarves mature at the same rate as humans, but they are considered young until they reach the age of 50. On average, they live about 350 years.</li>\
                        <li><b>Alignment.</b>Most dwarves are lawful, believing firmly in the benefits of a well-ordered society. </li>\
                        <li><b>Size.</b>Dwarves stand between 4 and 5 feet tall and average about 150 pounds. Your size is Medium.</li>\
                        <li><b>Speed.</b>Your base walking speed is 25 feet. Your speed is not reduced by wearing heavy armor.</li>\
                        <li><b>Darkvision.</b>Accustomed to life underground, you have superior vision in dark and dim conditions. You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can't discern color in darkness, only shades of gray.</li>\
                        <li><b>Dwarven Resilience.</b>You have advantage on saving throws against poison, and you have resistance against poison damage.</li>\
                        <li><b>Dwarven Combat Training.</b>You have proficiency with the battleaxe, handaxe, light hammer, and warhammer.</li>\
                        <li><b>Dwarven Armor Training.</b>You have proficiency with light and medium armor.</li>\
                        <li><b>Tool Proficiency.</b>You gain proficiency with the artisan's tools of your choice: smith's tools, brewer's supplies, or mason's tools.</li>\
                        <li><b>Stonecunning.</b>Whenever you make an Intelligence (History) check related to the origin of stonework, you are considered proficient in the History skill and add double your proficiency bonus to the check, instead of your normal proficiency bonus.</li>\
                        <li><b>Languages.</b>You can speak, read, and write Common and Dwarvish. Dwarvish is full of hard consonants and guttural sounds, and those characteristics spill over into whatever other language a dwarf might speak.</li>"
            var $ul = $("<ul>" + lis + "</ul>");
            var $final = $p.append($ul);

            $("#description").append($final);
        }
        else if(race == "High-Elf"){
            var desc = "\
            Elves are a magical people of otherworldly grace, living in the world but not entirely part of it.\
            They live in places of ethereal beauty, in the midst of ancient forests or in silvery spires glittering with faerie light, where soft music drifts through the air and gentle fragrances waft on the breeze.\
            Elves love nature and magic, art and artistry, music and poetry, and the good things of the world.\
            As a high elf, you have a keen mind and a mastery of at least the basics of magic. In many of the worlds of D&D, there are two kinds of high elves.\
            One type (which includes the gray elves and valley elves of Greyhawk, the Silvanesti of Dragonlance, and the sun elves of the Forgotten Realms) is haughty and reclusive, believing themselves to be superior to non-elves and even other elves.\
            The other type (including the high elves of Greyhawk, the Qualinesti of Dragonlance, and the moon elves of the Forgotten Realms) are more common and more friendly, and often encountered among humans and other races.\
            "
            var $p = $("<p>"+desc+"</p>");
            var lis = "<li><b>Ability Score Increase.</b>Your Dexterity score increases by 2 and your Intelligence score increases by 1.</li>\
                        <li><b>Age.</b>Although elves reach physical maturity at about the same age as humans, the elven understanding of adulthood goes beyond physical growth to encompass worldly experience. An elf typically claims adulthood and an adult name around the age of 100 and can live to be 750 years old.</li>\
                        <li><b>Alignment.</b>Elves love freedom, variety, and self-expression, so they lean strongly towards the gentler aspects of chaos. They value and protect others' freedom as well as their own, and are good more often than not. Drow are an exception; their exile into the Underdark has made them vicious and dangerous. Drow are more often evil than not.</li>\
                        <li><b>Size.</b>Elves range from under 5 to over 6 feet tall and have slender builds. Your size is Medium.</li>\
                        <li><b>Speed.</b>Your base walking speed is 30 feet.</li>\
                        <li><b>Darkvision.</b>Accustomed to twilit forests and the night sky, you have superior vision in dark and dim conditions. You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can't discern color in darkness, only shades of gray.</li>\
                        <li><b>Fey Ancestry. </b>You have advantage on saving throws against being charmed, and magic can't put you to sleep.</li>\
                        <li><b>Trance.</b>Elves do not sleep. Instead they meditate deeply, remaining semi-conscious, for 4 hours a day. The Common word for this meditation is trance. While meditating, you dream after a fashion; such dreams are actually mental exercises that have become reflexive after years of practice. After resting in this way, you gain the same benefit a human would from 8 hours of sleep.</li>\
                        <li><b>Keen Senses.</b>You have proficiency in the Perception skill.</li>\
                        <li><b>Cantrip.</b>You know one cantrip of your choice from the Wizard spell list. Intelligence is your spellcasting ability for it.</li>\
                        <li><b>Elf Weapon Training.</b>You have proficiency with the longsword, shortsword, shortbow, and longbow.</li>\
                        <li><b>Extra Language.</b>You can speak, read, and write Common and Elven.</li>\
                        <li><b>Languages.</b>You can read, speak, and write one additional language of your choice.</li>\
                        "
            var $ul = $("<ul>" + lis + "</ul>");
            var $final = $p.append($ul);

            $("#description").append($final);
        }
        else if(race == "Drow"){
            var desc = "\
            Elves are a magical people of otherworldly grace, living in the world but not entirely part of it.\
            They live in places of ethereal beauty, in the midst of ancient forests or in silvery spires glittering with faerie light, where soft music drifts through the air and gentle fragrances waft on the breeze.\
            Elves love nature and magic, art and artistry, music and poetry, and the good things of the world.\
            Descended from an earlier subrace of dark-skinned elves, the drow were banished from the surface world for following the goddess Lolth down the path to evil and corruption.\
            Now they have built their own civilization in the depths of the Underdark, patterned after the Way of Lolth.\
            Also called dark elves, the drow have black skin that resembles polished obsidian and stark white or pale yellow hair.\
            They commonly have very pale eyes (so pale as to be mistaken for while) in shades of lilac, silver, pink, red, and blue.\
            They lend to be smaller and thinner than most elves.\
            "
            var $p = $("<p>"+desc+"</p>");
            var lis = "<li><b>Ability Score Increase.</b>Your Dexterity score increases by 2 and your Charisma score increases by 1.</li>\
                        <li><b>Age.</b>Although elves reach physical maturity at about the same age as humans, the elven understanding of adulthood goes beyond physical growth to encompass worldly experience. An elf typically claims adulthood and an adult name around the age of 100 and can live to be 750 years old.</li>\
                        <li><b>Alignment.</b>Elves love freedom, variety, and self-expression, so they lean strongly towards the gentler aspects of chaos. They value and protect others' freedom as well as their own, and are good more often than not. Drow are an exception; their exile into the Underdark has made them vicious and dangerous. Drow are more often evil than not.</li>\
                        <li><b>Size.</b>Elves range from under 5 to over 6 feet tall and have slender builds. Your size is Medium.</li>\
                        <li><b>Speed.</b>Your base walking speed is 30 feet.</li>\
                        <li><b>Darkvision.</b>Accustomed to twilit forests and the night sky, you have superior vision in dark and dim conditions. You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can't discern color in darkness, only shades of gray.</li>\
                        <li><b>Superior Darkvision.</b>Your darkvision has a range of 120 feet, instead of 60.</li>\
                        <li><b>Sunlight Sensitivity.</b>You have disadvantage on attack rolls and Wisdom (Perception) checks that rely on sight when you, the target of the attack, or whatever you are trying to perceive is in direct sunlight.</li>\
                        <li><b>Fey Ancestry.</b>You have advantage on saving throws against being charmed, and magic can't put you to sleep.</li>\
                        <li><b>Trance.</b>Elves do not sleep. Instead they meditate deeply, remaining semi-conscious, for 4 hours a day. The Common word for this meditation is trance. While meditating, you dream after a fashion; such dreams are actually mental exercises that have become reflexive after years of practice. After resting in this way, you gain the same benefit a human would from 8 hours of sleep.</li>\
                        <li><b>Keen Senses.</b>You have proficiency in the Perception skill.</li>\
                        <li><b>Drow Magic.</b>You know the Dancing Lights cantrip. When you reach 3rd level, you can cast the Faerie Fire spell once with this trait and regain the ability to do so when you finish a long rest. When you reach 5th level, you can cast the Darkness spell onceand regain the ability to do so when you finish a long rest. Charisma is your spellcasting ability for these spells.</li>\
                        <li><b>Drow Weapon Training.</b>You have proficiency with rapiers, shortswords, and hand crossbows.</li>\
                        <li><b>Languages.</b>You can speak, read, and write Common and Elven.</li>\
                        "
            var $ul = $("<ul>" + lis + "</ul>");
            var $final = $p.append($ul);

            $("#description").append($final);
        }
        else if(race == "Wood-Elf"){
            var desc = "\
            Elves are a magical people of otherworldly grace, living in the world but not entirely part of it.\
            They live in places of ethereal beauty, in the midst of ancient forests or in silvery spires glittering with faerie light, where soft music drifts through the air and gentle fragrances waft on the breeze.\
            Elves love nature and magic, art and artistry, music and poetry, and the good things of the world.\
            As a wood elf, you have keen senses and intuition, and your fleet feet carry you quickly and stealthily through your native forests.\
            This category includes the wild elves (grugach) of Greyhawk and the Kagonesti of Dragonlance, as well as the races called wood elves in Greyhawk and the Forgotten Realms.\
            In Faerun, wood elves (also called wild elves. green elves, or forest elves) are reclusive and distrusting of non-elves.\
            "
            var $p = $("<p>"+desc+"</p>");
            var lis = "<li><b>Ability Score Increase.</b>Your Dexterity score increases by 2 and your Wisdom score increases by 1.</li>\
                        <li><b>Age.</b>Although elves reach physical maturity at about the same age as humans, the elven understanding of adulthood goes beyond physical growth to encompass worldly experience. An elf typically claims adulthood and an adult name around the age of 100 and can live to be 750 years old.</li>\
                        <li><b>Alignment.</b>Elves love freedom, variety, and self-expression, so they lean strongly towards the gentler aspects of chaos. They value and protect others' freedom as well as their own, and are good more often than not. Drow are an exception; their exile into the Underdark has made them vicious and dangerous. Drow are more often evil than not.</li>\
                        <li><b>Size.</b>Elves range from under 5 to over 6 feet tall and have slender builds. Your size is Medium.</li>\
                        <li><b>Speed.</b>Your base walking speed is 30 feet.</li>\
                        <li><b>Fleet of Foot.</b>Your base walking speed increases to 35 feet.</li>\
                        <li><b>Darkvision.</b>Accustomed to twilit forests and the night sky, you have superior vision in dark and dim conditions. You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can't discern color in darkness, only shades of gray.</li>\
                        <li><b>Fey Ancestry.</b>You have advantage on saving throws against being charmed, and magic can't put you to sleep.</li>\
                        <li><b>Trance.</b>Elves do not sleep. Instead they meditate deeply, remaining semi-conscious, for 4 hours a day. The Common word for this meditation is trance. While meditating, you dream after a fashion; such dreams are actually mental exercises that have become reflexive after years of practice. After resting in this way, you gain the same benefit a human would from 8 hours of sleep.</li>\
                        <li><b>Mask of the Wild.</b>You can attempt to hide even when you are only lightly obscured by foliage, heavy rain, falling snow, mist, and other natural phenomena.</li>\
                        <li><b>Keen Senses.</b>You have proficiency in the Perception skill.</li>\
                        <li><b>Elf Weapon Training.</b>You have proficiency with the longsword, shortsword, shortbow, and longbow.</li>\
                        <li><b>Languages.</b>You can speak, read, and write Common and Elven.</li>"
            var $ul = $("<ul>" + lis + "</ul>");
            var $final = $p.append($ul);

            $("#description").append($final);
        }
        else if(race == "Forest-Gnome"){
            var desc = "\
            A constant hum of busy activity pervades the warrens and neighborhoods where gnomes form their close-knit communities.\
            Louder sounds punctuate the hum: a crunch of grinding gears here, a minor explosion there, a yelp of surprise or triumph, and especially bursts of laughter.\
            Gnomes take delight in life, enjoying every moment of invention, exploration, investigation, creation, and play.\
            As a forest gnome, you have a natural knack for illusion and inherent quickness and stealth.\
            In the worlds of D&D, forest gnomes are rare and secretive.\
            They gather in hidden communities in sylvan forests, using illusions and trickery to conceal themselves from threats or to mask their escape should they be detected.\
            Forest gnomes tend to be friendly with other good-spirited woodland folk, and they regard elves and good fey as their most important allies.\
            These gnomes also befriend small forest animals and rely on them for information about threats that might prowl their lands.\
            "
            var $p = $("<p>"+desc+"</p>");
            var lis = "<li><b>Ability Score Increase.</b>Your Intelligence score increases by 2 and your Dexterity score increases by 1.</li>\
                        <li><b>Age.</b>Gnomes mature at the same rate as humans, and most are expected to settle into adult life around the age of 40. They can live to 350 years on average, but it's not too uncommon for them to reach 500 years of age.</li>\
                        <li><b>Alignment.</b>Gnomes are generally Good. Those who tend towards Law are sages, engineers, researchers, scholars, investigators, or inventors. Those who tend towards Chaos are often minstrels, tricksters, wanderers, or fanciful jewelers. Gnomes are light-hearted, and even the tricksters amongst them favor harmless pranks over vicious schemes.</li>\
                        <li><b>Size.</b>Gnomes are between 3 and 4 feet tall and weigh around 40 pounds. Your size is Small.</li>\
                        <li><b>Speed.</b>Your base walking speed is 25 feet.</li>\
                        <li><b>Darkvision.</b>Accustomed to life underground, you have superior vision in dark and dim conditions. You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can't discern color in darkness, only shades of gray.</li>\
                        <li><b>Gnome Cunning.</b>You have advantage on all Intelligence, Wisdom, and Charisma saves against magic.</li>\
                        <li><b>Natural Illusionist.</b>You know the Minor Illusion cantrip. Intelligence is your spellcasting modifier for it.</li>\
                        <li><b><Speak with Small Beasts./b>Through sound and gestures, you may communicate simple ideas with Small or smaller beasts.</li>\
                        <li><b>Languages.</b>You can read, speak, and write Common and Gnomish.</li>"
            var $ul = $("<ul>" + lis + "</ul>");
            var $final = $p.append($ul);

            $("#description").append($final);
        }
        else if(race == "Rock-Gnome"){
            var desc = "\
            A constant hum of busy activity pervades the warrens and neighborhoods where gnomes form their close-knit communities.\
            Louder sounds punctuate the hum: a crunch of grinding gears here, a minor explosion there, a yelp of surprise or triumph, and especially bursts of laughter.\
            Gnomes take delight in life, enjoying every moment of invention, exploration, investigation, creation, and play.\
            As a rock gnome, you have a natural inventiveness and hardiness beyond that of other gnomes.\
            Most gnomes in the worlds of D&D are rock gnomes, including the tinker gnomes of the Dragonlance setting.\
            "
            var $p = $("<p>"+desc+"</p>");
            var lis = "<li><b>Ability Score Increase.</b>Your Intelligence score increases by 2 and your Constitution score increases by 1.</li>\
                        <li><b>Age.</b>Gnomes mature at the same rate as humans, and most are expected to settle into adult life around the age of 40. They can live to 350 years on average, but it's not too uncommon for them to reach 500 years of age.</li>\
                        <li><b>Alignment.</b>Gnomes are generally Good. Those who tend towards Law are sages, engineers, researchers, scholars, investigators, or inventors. Those who tend towards Chaos are often minstrels, tricksters, wanderers, or fanciful jewelers. Gnomes are light-hearted, and even the tricksters amongst them favor harmless pranks over vicious schemes.</li>\
                        <li><b>Size.</b>Gnomes are between 3 and 4 feet tall and weigh around 40 pounds. Your size is Small.</li>\
                        <li><b>Speed.</b>Your base walking speed is 25 feet.</li>\
                        <li><b>Darkvision.</b>Accustomed to life underground, you have superior vision in dark and dim conditions. You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can't discern color in darkness, only shades of gray.</li>\
                        <li><bGnome Cunning.></b>You have advantage on all Intelligence, Wisdom, and Charisma saves against magic.</li>\
                        <li><b>Artificer's Lore.</b>Whenever you make an Intelligence (History) check related to magical, alchemical, or technological items, you can add twice your proficiency bonus instead of any other proficiency bonus that may apply.</li>\
                        <li><b>Tinker.</b>You have proficiency with artisan tools (tinker's tools). Using those tools, you can spend 1 hour and 10 gp worth of materials to construct a Tiny clockwork device (AC 5, 1 hp). The device ceases to function after 24 hours (unless you spend 1 hour repairing it to keep the device functioning), or when you use your action to dismantle it; at that time, you can reclaim the materials used to create it. You can have up to three such devices active at a time. When you create a device, choose one of the following options:\
                        <ul>\
                        <li><b>Clockwork Toy.</b> This toy is a clockwork animal, monster, or person, such as a frog, mouse, bird, dragon, or soldier. When placed on the ground, the toy moves 5 feet across the ground on each of your turns in a random direction. It makes noises as appropriate to the creature it represents.</li>\
                        <li><b>Fire Starter.</b> The device produces a miniature flame, which you can use to light a candle, torch, or campfire. Using the device requires your action.</li>\
                        <li><b>Music Box.</b> When opened, this music box plays a single song at a moderate volume. The box stops playing when it reaches the song's end or when it is closed.</li>\
                        <li>At your DM's discretion, you may make other objects with effects similar in power to these. The Prestidigitation cantrip is a good baseline for such effects.</li>\
                        </ul></li>\
                        <li><b>Languages.</b>You can read, speak, and write Common and Gnomish.</li>"
            var $ul = $("<ul>" + lis + "</ul>");
            var $final = $p.append($ul);

            $("#description").append($final);
        }
        else if(race == "Half-Elf"){
            var desc = "\
            Walking in two worlds but truly belonging to neither, half-elves combine what some say are the best qualities of their elf and human parents: human curiosity, inventiveness, and ambition tempered by the refined senses, love of nature, and artistic tastes of the elves.\
            Some half-elves live among humans, set apart by their emotional and physical differences, watching friends and loved ones age while time barely touches them.\
            Others live with the elves, growing restless as they reach adulthood in the timeless elven realms, while their peers continue to live as children. \
            Many half-elves, unable to fit into either society, choose lives of solitary wandering or join with other misfits and outcasts in the adventuring life.\
            "
            var $p = $("<p>"+desc+"</p>");
            var lis = "<li><b>Ability Score Increase.</b>Your Charisma score increases by 2, and two other ability scores of your choice each increase by 1.</li>\
                        <li><b>Age.</b>Half-elves age at much the same rate as humans, reaching adulthood at the age of 20. They live much longer than humans, however, often exceeding 180 years.</li>\
                        <li><b>Alignment.</b>Half-elves share the chaotic bent of their elven heritage. They both value personal freedom and creative expression, demonstrating neither love of leaders nor desire for followers. They chafe at rules, resent others' demands, and sometimes prove unreliable, or at least unpredictable. They are good and evil in equal numbers, a trait they share with their human parents.</li>\
                        <li><b>Size.</b>Half-elves are more or less the same size as humans, ranging from 5 to 6 feet tall. Your size is Medium.</li>\
                        <li><b>Speed.</b>Your base walking speed is 30 feet.</li>\
                        <li><b>Darkvision.</b>Thanks to your elven heritage, you have superior vision in dark and dim conditions. You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can't discern color in darkness, only shades of gray.</li>\
                        <li><b>Fey Ancestry.</b>You have advantage on saving throws against being charmed, and magic can't put you to sleep.</li>\
                        <li><b>Half-Elf Versatility.</b>Choose one of the following traits:\
                        <ul>\
                        <li><b>Skill Versatility (General).</b> You gain proficiency in two skills of your choice.</li>\
                        <li><b>Elf Weapon Training (High or Wood Elf Heritage).</b> You have proficiency with the longsword, shortsword, shortbow, and longbow.</li>\
                        <li><b>Cantrip (High Elf Heritage).</b> You know one cantrip of your choice from the wizard spell list. Intelligence is your spellcasting ability for it.</li>\
                        <li><b>Fleet of Foot (Wood Elf Heritage).</b> Your base walking speed increases to 35 feet.</li>\
                        <li><b>Mask of the Wild (Wood Elf Heritage).</b> You can attempt to hide even when you are only lightly obscured by foliage, heavy rain, falling snow, mist, and other natural phenomena.</li>\
                        <li><b>Drow Magic (Dark Elf Heritage).</b> You know the Dancing Lights cantrip. When you reach 3rd level, you can cast Faerie Fire once, and it recharges after a long rest. When you reach 5th level, you can cast Darkness once, and it recharges after a long rest. Charisma is your spellcasting ability for these spells.</li>\
                        <li><b>Swim Speed (Sea Elf Heritage).</b> You have a swimming speed of 30 feet.</li>\
                        <li><b>Languages.</b>You can read, speak, and write Common, Elven, and one language of your choice.</li>\
                        </ul></li>"
            var $ul = $("<ul>" + lis + "</ul>");
            var $final = $p.append($ul);

            $("#description").append($final);
        }
        else if(race == "Lightfoot-Halfling"){
            var desc = "\
            The comforts of home are the goals of most halflings' lives: a place to settle in peace and quiet, far from marauding monsters and clashing armies. \
            Others form nomadic bands that travel constantly, lured by the open road and the wide horizon to discover the wonders of new lands and peoples.\
            Halflings work readily with others, and they are loyal to their friends, whether halfling or otherwise.\
            They can display remarkable ferocity when their friends, families, or communities are threatened.\
            As a lightfoot halfling, you can easily hide from notice, even using other people as cover.\
            You're inclined to be affable and get along well with others. In the Forgotten Realms, lightfoot halflings have spread the farthest and thus are the most common variety.\
            "
            var $p = $("<p>"+desc+"</p>");
            var lis = "<li><b>Ability Score Increase.</b>Your Dexterity score increases by 2 and your Charisma score increases by 1.</li>\
                        <li><b>Age.</b>A halfling reaches adulthood at the age of 20 and generally lives into the middle of his or her second century.</li>\
                        <li><b>Alignment.</b>Most halflings are lawful good. As a rule, they are good-hearted and kind, hate to see others in pain, and have no tolerance for oppression. They are also very orderly and traditional, leaning heavily on the support of their community and the comfort of the old ways.</li>\
                        <li><b>Size.</b>Halflings average about 3 feet tall and weigh about 40 pounds. Your size is small.</li>\
                        <li><b>Speed.</b>Your base walking speed is 25 feet.</li>\
                        <li><b>Lucky.</b>When you roll a 1 on an attack roll, ability check, or saving throw, you can reroll the die. You must use the new result, even if it is a 1.</li>\
                        <li><b>Brave.</b>You have advantage on saving throws against being frightened.</li>\
                        <li><b>Nimble.</b>You can move through the space of any creature that is of a size larger than yours.</li>\
                        <li><b>Naturally Stealthy.</b>You can attempt to hide even when you are only obscured by a creature that is at least one size larger than you.</li>\
                        <li><b>Languages.</b>You can speak, read, and write Common and Halfling.</li>"
            var $ul = $("<ul>" + lis + "</ul>");
            var $final = $p.append($ul);

            $("#description").append($final);
        }
        else if(race == "Stout-Halfling"){
            var desc = "\
            The comforts of home are the goals of most halflings' lives: a place to settle in peace and quiet, far from marauding monsters and clashing armies. \
            Others form nomadic bands that travel constantly, lured by the open road and the wide horizon to discover the wonders of new lands and peoples.\
            Halflings work readily with others, and they are loyal to their friends, whether halfling or otherwise.\
            They can display remarkable ferocity when their friends, families, or communities are threatened.\
            As a lightfoot halfling, you can easily hide from notice, even using other people as cover.\
            You're inclined to be affable and get along well with others. In the Forgotten Realms, lightfoot halflings have spread the farthest and thus are the most common variety.\
            "
            var $p = $("<p>"+desc+"</p>");
            var lis = "<li><b>Ability Score Increase.</b>Your Dexterity score increases by 2 and your Constitution score increases by 1.</li>\
                        <li><b>Age.</b>A halfling reaches adulthood at the age of 20 and generally lives into the middle of his or her second century.</li>\
                        <li><b>Alignment.</b>Most halflings are lawful good. As a rule, they are good-hearted and kind, hate to see others in pain, and have no tolerance for oppression. They are also very orderly and traditional, leaning heavily on the support of their community and the comfort of the old ways.</li>\
                        <li><b>Size.</b>Halflings average about 3 feet tall and weigh about 40 pounds. Your size is small.</li>\
                        <li><b>Speed.</b>Your base walking speed is 25 feet.</li>\
                        <li><b>Lucky.</b>When you roll a 1 on an attack roll, ability check, or saving throw, you can reroll the die. You must use the new result, even if it is a 1.</li>\
                        <li><b>Brave.</b>You have advantage on saving throws against being frightened.</li>\
                        <li><b>Nimble.</b>You can move through the space of any creature that is of a size larger than yours.</li>\
                        <li><b>Stout Resilience.</b>You have advantage on saving throws against poison, and you have resistance to poison damage.</li>\
                        <li><b>Languages.</b>You can speak, read, and write Common and Halfling.</li>"
            var $ul = $("<ul>" + lis + "</ul>");
            var $final = $p.append($ul);

            $("#description").append($final);
        }
        else if(race == "Asmodeus-Tiefling"){
            var desc = "\
            To be greeted with stares and whispers, to suffer violence and insult on the street, to see mistrust and fear in every eye: this is the lot of the tiefling.\
            And to twist the knife, tieflings know that this is because a pact struck generations ago infused the essence of Asmodeus, overlord of the Nine Hells (and many of the other powerful devils serving under him) into their bloodline.\
            Their appearance and their nature are not their fault but the result of an ancient sin, for which they and their children and their children's children will always be held accountable.\
            The tieflings connected to Nessus command the power of fire and darkness, guided by a keener than normal intellect, as befits those linked to Asmodeus himself.\
            "
            var $p = $("<p>"+desc+"</p>");
            var lis = "<li><b>Ability Score Increase.</b>Your Charisma score increases by 2 and your Intelligence score increases by 1.</li>\
                        <li><b>Age.</b>Tieflings mature at the same rate as humans but live a few years longer.</li>\
                        <li><b>Alignment.</b>Tieflings might not have an innate tendency toward evil, but many of them end up there. Evil or not, an independent nature inclines many tieflings toward a chaotic alignment.</li>\
                        <li><b>Size.</b>Tieflings are about the same size and build as humans. Your size is Medium.</li>\
                        <li><b>Speed.</b>Your base walking speed is 30 feet.</li>\
                        <li><b>Darkvision.</b>Thanks to your infernal heritage, you have superior vision in dark and dim conditions. You can see in dim light within 60 feet of you as if it were bright light, and in darkness as if it were dim light. You can not discern color in darkness, only shades of gray.</li>\
                        <li><b>Hellish Resistance.</b>You have resistance to fire damage.</li>\
                        <li><b>Infernal Legacy.</b>You know the Thaumaturgy cantrip. Once you reach 3rd level, you can cast the Hellish Rebuke spell once as a 2nd-level spell. Once you reach 5th level, you can also cast the Darkness spell once. You must finish a long rest to cast these spells again with this trait. Charisma is your spellcasting ability for these spells.</li>\
                        <li><b>Languages.</b>You can speak, read, and write Common and Infernal.</li>"
            var $ul = $("<ul>" + lis + "</ul>");
            var $final = $p.append($ul);

            $("#description").append($final);
        }
    }
</script>
</html>

