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
    <title>Document</title>
</head>
<body>
    <label for="sub">Choose a subclass:</label>
        <select name="sub" id="sub" onchange="getSub()" form="sub">
            <option value="">------</option>
              <?php 
                if($_SESSION['class'] == 'Cleric'){
                    echo '<option value="Knowledge">Knowledge</option>
                    <option value="Life">Life</option>
                    <option value="Light">Light</option>
                    <option value="Nature">Nature</option>
                    <option value="Tempest">Tempest</option>
                    <option value="Trickery">Trickery</option>
                    <option value="War">War</option>';
                }
                else if($_SESSION['class'] == 'Sorcerer'){
                    echo '<option value="Draconic">Draconic Bloodline</option>
                    <option value="Wild">Wild Magic</option>';
                }
                else if($_SESSION['class'] == 'Warlock'){
                    echo '<option value="Archfey">Archfey</option>
                    <option value="Fiend">Fiend</option>
                    <option value="Old">Great Old One</option>';
                }
              ?>
        </select>
        <br>
        <br>
        <div name="description" id="description"></div>
</body>
<script type="text/javascript">
    function getSub(){
        $("#description").html("");
        var sub=$('#sub').val();
        console.log(sub)
        if(sub=="Knowledge"){
            var table = "<table>\
                            <tr>\
                            <th>Cleric Level</th>\
                            <th>Spells</th>\
                            </tr>\
                            <tr>\
                            <td>1st</th>\
                            <td>Command, Identify</th>\
                            </tr>\
                            <tr>\
                            <td>3rd</th>\
                            <td>Augury, Suggestion</th>\
                            </tr>\
                            <tr>\
                            <td>5th</th>\
                            <td>Nondetection, Speak with Dead</th>\
                            </tr>\
                            <tr>\
                            <td>7th</th>\
                            <td>Arcane Eye, Confusion</th>\
                            </tr>\
                            <tr>\
                            <td>9th</th>\
                            <td>Legend Lore, Scrying</th>\
                            </tr>\
                        </table"

            var desc = "<p>\
                        The gods of knowledge, including Oghma, Boccob, Gilean, Aureon, and Thoth, value learning and understanding above all. Some teach that knowledge is to be gathered and shared in libraries and universities, or promote the practical knowledge of craft and invention. Some deities hoard knowledge and keep its secrets to themselves. And some promise their followers that they will gain tremendous power if they unlock the secrets of the multiverse. Followers of these gods study esoteric lore, collect old tomes, delve into the secret places of the earth, and learn all they can. Some gods of knowledge promote the practical knowledge of craft and invention, including smith deities like Gond, Reorx, Onatar, Moradin, Hephaestus, and Goibhniu.\
                        </p>"
            var feats ="<h1>Blessings of Knowledge</h1>\
                    <p>At 1st level, you learn two languages of your choice. You also become proficient in your choice of two of the following skills: Arcana, History, Nature, or Religion.</p>\
                    <p>Your proficiency bonus is doubled for any ability check you make that uses either of those skills.</p>"

            $("#description").append(table + desc + feats);
        }
        else if(sub=="Life"){
            var table = "<table>\
                            <tr>\
                            <th>Cleric Level</th>\
                            <th>Spells</th>\
                            </tr>\
                            <tr>\
                            <td>1st</th>\
                            <td>Bless, Cure Wounds</th>\
                            </tr>\
                            <tr>\
                            <td>3rd</th>\
                            <td>Lesser Restoration, Spiritual Weapon</th>\
                            </tr>\
                            <tr>\
                            <td>5th</th>\
                            <td>Beacon of Hope, Revivify</th>\
                            </tr>\
                            <tr>\
                            <td>7th</th>\
                            <td>Death Ward, Guardian of Faith</th>\
                            </tr>\
                            <tr>\
                            <td>9th</th>\
                            <td>Mass Cure Wounds, Raise Dead</th>\
                            </tr>\
                        </table"

            var desc = "<p>\
                        The Life domain focuses on the vibrant positive energy, one of the fundamental forces of the universe, that sustains all life. The gods of life promote vitality and health through healing the sick and wounded, caring for those in need, and driving away the forces of death and undeath. Almost any non-evil deity can claim influence over this domain, particularly agricultural deities (such as Chauntea, Arawai, and Demeter), sun gods (such as Lathander, Pelor, and Re-Horakhty), gods of healing or endurance (such as Ilmater, Mishakal, Apollo, and Diancecht), and gods of home and community (such as Hestia, Hathor, and Boldrci).\
                        </p>"
            var feats ="\
                    <h1>Bonus Proficiency</h1>\
                    <p>When you choose this domain at 1st level, you gain proficiency with heavy armor.</p>\
                    <h1>Disciple of Life</h1>\
                    <p>Also starting at 1st level, your healing spells are more effective. Whenever you use a spell of 1st level or higher to restore hit points to a creature, the creature regains additional hit points equal to 2 + the spell's level.</p>\
                    "

            $("#description").append(table + desc + feats);
        }
        else if(sub=="Light"){
            var table = "<table>\
                            <tr>\
                            <th>Cleric Level</th>\
                            <th>Spells</th>\
                            </tr>\
                            <tr>\
                            <td>1st</th>\
                            <td>Burning Hands, Faerie Fire</th>\
                            </tr>\
                            <tr>\
                            <td>3rd</th>\
                            <td>Flaming Sphere, Scorching ray</th>\
                            </tr>\
                            <tr>\
                            <td>5th</th>\
                            <td>Daylight, Fireball</th>\
                            </tr>\
                            <tr>\
                            <td>7th</th>\
                            <td>Guardian of Faith, Wall of Fire</th>\
                            </tr>\
                            <tr>\
                            <td>9th</th>\
                            <td>Flame Strike, Scrying</th>\
                            </tr>\
                        </table"

            var desc = "<p>\
                            Gods of light, including Helm, Lathander, Pholtus, Branchala, the Silver Flame, Belenus, Apollo, and Re-Horakhty, promote the ideals of rebirth and renewal, truth, vigilance, and beauty, often using the symbol of the sun. Some of these gods are portrayed as the sun itself or as a charioteer who guides the sun across the sky. Others are tireless sentinels whose eyes pierce every shadow and see through every deception. Some are deities of beauty and artistry, who teach that art is a vehicle for the soul's improvement. Clerics of a god of light are enlightened souls infused with radiance and the power of their gods' discerning vision, charged with chasing away lies and burning away darkness.\
                        </p>"
            var feats ="\
                    <h1>Bonus Cantrip</h1>\
                    <p>When you choose this domain at 1st level, you gain the Light cantrip if you don't already know it. This cantrip doesn't count against the number of cleric cantrips you know.</p>\
                    <h1>Warding Flare</h1>\
                    <p>Also at 1st level, you can interpose divine light between yourself and an attacking enemy. When you are attacked by a creature within 30 feet of you that you can see, you can use your reaction to impose disadvantage on the attack roll, causing light to flare before the attacker before it hits or misses. An attacker that can't be blinded is immune to this feature.</p>\
                    <p>You can use this feature a number of times equal to your Wisdom modifier (a minimum of once). You regain all expended uses when you finish a long rest.</p>\
                    "
            $("#description").append(table + desc + feats);
        }
        else if(sub=="Nature"){
            var table = "<table>\
                            <tr>\
                            <th>Cleric Level</th>\
                            <th>Spells</th>\
                            </tr>\
                            <tr>\
                            <td>1st</th>\
                            <td>Animal Friendship, Speak with Animals</th>\
                            </tr>\
                            <tr>\
                            <td>3rd</th>\
                            <td>Barkskin, Spike Growth</th>\
                            </tr>\
                            <tr>\
                            <td>5th</th>\
                            <td>Plant Growth, Wind Wall</th>\
                            </tr>\
                            <tr>\
                            <td>7th</th>\
                            <td>Dominate Beast, Grasping Vine</th>\
                            </tr>\
                            <tr>\
                            <td>9th</th>\
                            <td>Insect Plague, Tree Stride</th>\
                            </tr>\
                        </table"

            var desc = "<p>\
            Gods of nature are as varied as the natural world itself; from inscrutable gods of the deep forests (such as Silvanus, Obad-Hai, Chislev, Balinor, and Pan) to friendly deities associated with particular springs and groves (such as Eldath). Druids revere nature as a whole and might serve one of these deities, practicing mysterious rites and reciting all-but-forgotten prayers in their own secret tongue. But many of these gods have clerics as well, champions who take a more active role in advancing the interests of a particular nature god. These clerics might hunt the evil monstrosities that despoil the woodlands, bless the harvest of the faithful, or wither the crops of those who anger their gods.\
                        </p>"
            var feats ="\
                    <h1>Acolyte of Nature</h1>\
                    <p>At 1st level, you learn one cantrip of your choice from the druid spell list. This cantrip counts as a cleric cantrip for you, but it doesn't count against the number of cleric cantrips you know. You also gain proficiency in one of the following skills of your choice: Animal Handling, Nature, or Survival.</p>\
                    <h1>Bonus Proficiency</h1>\
                    <p>Also at 1st level, you gain proficiency with heavy armor.</p>\
                    "
            $("#description").append(table + desc + feats);
        }
        else if(sub=="Tempest"){
            var table = "<table>\
                            <tr>\
                            <th>Cleric Level</th>\
                            <th>Spells</th>\
                            </tr>\
                            <tr>\
                            <td>1st</th>\
                            <td>Fog Cloud, Thunderwave</th>\
                            </tr>\
                            <tr>\
                            <td>3rd</th>\
                            <td>Gust of Wind, Shatter</th>\
                            </tr>\
                            <tr>\
                            <td>5th</th>\
                            <td>Call of Lightning, Sleet Storm</th>\
                            </tr>\
                            <tr>\
                            <td>7th</th>\
                            <td>Control Water, Ice Storm</th>\
                            </tr>\
                            <tr>\
                            <td>9th</th>\
                            <td>Destructive Wave, Insect Plague</th>\
                            </tr>\
                        </table"

            var desc = "<p>\
            Gods whose portfolios include the Tempest domain, including Talos, Umberlee, Kord, Zeboim, the Devourer, Zeus, and Thor, govern storms, sea, and, sky. They include gods of lightning and thunder, gods of earthquakes, some fire gods, and certain gods of violence, physical strength, and courage. In some pantheons, a god of this domain rules over other deities and is known for swift justice delivered by thunderbolts. In the pantheons of seafaring people, gods of this domain are ocean deities and the patrons of sailors. Tempest gods send their clerics to inspire fear in the common folk, either to keep those folk on the path of righteousness or to encourage them to offer sacrifices of propitiation to ward off divine wrath.\
                        </p>"
            var feats ="\
                    <h1>Bonus Proficiencies</h1>\
                    <p>At 1st level, you gain proficiency with martial weapons and heavy armor.</p>\
                    <h1>Wrath of the Storm</h1>\
                    <p>Also at 1st level, you can thunderously rebuke attackers. When a creature within 5 feet of you that you can see hits you with an attack, you can use your reaction to cause the creature to make a Dexterity saving throw. The creature takes 2d8 lightning or thunder damage (your choice) on a failed saving throw, and half as much damage on a successful one.</p>\
                    <p>You can use this feature a number of times equal to your Wisdom modifier (a minimum of once). You regain all expended uses when you finish a long rest.</p>\
                    "
            $("#description").append(table + desc + feats);
        }
        else if(sub=="Trickery"){
            var table = "<table>\
                            <tr>\
                            <th>Cleric Level</th>\
                            <th>Spells</th>\
                            </tr>\
                            <tr>\
                            <td>1st</th>\
                            <td>Charm Person, Disguise Self</th>\
                            </tr>\
                            <tr>\
                            <td>3rd</th>\
                            <td>Mirror Image, Pass without Trace</th>\
                            </tr>\
                            <tr>\
                            <td>5th</th>\
                            <td>Blink, Dispel Magic</th>\
                            </tr>\
                            <tr>\
                            <td>7th</th>\
                            <td>Dimension Door, Polymorph</th>\
                            </tr>\
                            <tr>\
                            <td>9th</th>\
                            <td>Dominate Person, Modify Memory</th>\
                            </tr>\
                        </table"

            var desc = "<p>\
            Gods of trickery, such as Tymora, Beshaba, Olidammara, the Traveler, Garl Glittergold, and Loki, are mischief-makers and instigators who stand as a constant challenge to the accepted order among both gods and mortals. They're patrons of thieves, scoundrels, gamblers, rebels, and liberators. Their clerics are a disruptive force in the world, puncturing pride, mocking tyrants, stealing from the rich, freeing captives, and flouting hollow traditions. They prefer subterfuge, pranks, deception, and theft rather than direct confrontation.\
                        </p>"
            var feats ="\
                    <h1>Blessing of the Trickster</h1>\
                    <p>Starting when you choose this domain at 1st level, you can use your action to touch a willing creature other than yourself to give it advantage on Dexterity (Stealth) checks. This blessing lasts for 1 hour or until you use this feature again.</p>\
                    "
            $("#description").append(table + desc + feats);
        }
        else if(sub=="War"){
            var table = "<table>\
                            <tr>\
                            <th>Cleric Level</th>\
                            <th>Spells</th>\
                            </tr>\
                            <tr>\
                            <td>1st</th>\
                            <td>Divine Favor, Shield of Faith</th>\
                            </tr>\
                            <tr>\
                            <td>3rd</th>\
                            <td>Magic Weapon, Spiritual Weapon</th>\
                            </tr>\
                            <tr>\
                            <td>5th</th>\
                            <td>Crusader's Mantle, Spirit Guardians</th>\
                            </tr>\
                            <tr>\
                            <td>7th</th>\
                            <td>Freedom of Movement, Stoneskin</th>\
                            </tr>\
                            <tr>\
                            <td>9th</th>\
                            <td>Flame Strike, Hold Monster</th>\
                            </tr>\
                        </table"

            var desc = "<p>\
            War has many manifestations. It can make heroes of ordinary people. It can be desperate and horrific, with acts of cruelty and cowardice eclipsing instances of excellence and courage. In either case, the gods of war watch over warriors and reward them for their great deeds. The clerics of such gods excel in battle, inspiring others to fight the good fight or offering acts of violence as prayers. Gods of war include champions of honor and chivalry (such as Torm, Heironeous, and Kiri-Jolith) as well as gods of destruction and pillage (such as Erythnul, the Fury, Gruumsh, and Ares) and gods of conquest and domination (such as Bane, Hextor, and Maglubiyet). Other war gods (such as Tempus, Nike, and Nuada) take a more neutral stance, promoting war in all its manifestations and supporting warriors in any circumstance.\
                        </p>"
            var feats ="\
                    <h1>Bonus Proficiency</h1>\
                    <p>At 1st level, you gain proficiency with martial weapons and heavy armor.</p>\
                    <h1>War Priest</h1>\
                    <p>From 1st level, your god delivers bolts of inspiration to you while you are engaged in battle. When you use the Attack action, you can make one weapon attack as a bonus action.</p>\
                    <p>You can use this feature a number of times equal to your Wisdom modifier (a minimum of once). You regain all expended uses when you finish a long rest.</p>\
                    "
            $("#description").append(table + desc + feats);
        }
        else if(sub=="Draconic"){
            var table = "<table>\
                            <tr>\
                            <th>Dragon Color</th>\
                            <th>Damage Type</th>\
                            </tr>\
                            <tr>\
                            <td>Black</th>\
                            <td>Acid</th>\
                            </tr>\
                            <tr>\
                            <td>Blue</th>\
                            <td>lightning</th>\
                            </tr>\
                            <tr>\
                            <td>Brass</th>\
                            <td>Fire</th>\
                            </tr>\
                            <tr>\
                            <td>Bronze</th>\
                            <td>Lightning</th>\
                            </tr>\
                            <tr>\
                            <td>Copper</th>\
                            <td>Acid</th>\
                            </tr>\
                            <tr>\
                            <td>Gold</th>\
                            <td>Fire</th>\
                            </tr>\
                            <tr>\
                            <td>Green</th>\
                            <td>Poison</th>\
                            </tr>\
                            <tr>\
                            <td>Red</th>\
                            <td>Fire</th>\
                            </tr>\
                            <tr>\
                            <td>Silver</th>\
                            <td>Cold</th>\
                            </tr>\
                            <tr>\
                            <td>White</th>\
                            <td>Cold</th>\
                            </tr>\
                        </table"

            var desc = "<p>\
                    Your innate magic comes from draconic magic that was mingled with your blood or that of your ancestors. Most often, sorcerers with this origin trace their descent back to a mighty sorcerer of ancient times who made a bargain with a dragon or who might even have claimed a dragon parent. Some of these bloodlines are well established in the world, but most are obscure. Any given sorcerer could be the first of a new bloodline, as a result of a pact or some other exceptional circumstance.\
                        </p>"
            var feats ="<h1>Dragon Ancestor</h1>\
                    <p>At 1st level, you choose one type of dragon as your ancestor. The damage type associated with each dragon is used by features you gain later.</p>\
                    <p>You can speak, read, and write Draconic. Additionally, whenever you make a Charisma check when interacting with dragons, your proficiency bonus is doubled if it applies to the check.</p>\
                    <h1>Draconic Resilience</h1>\
                    <p>As magic flows through your body, it causes physical traits of your dragon ancestors to emerge. At 1st level, your hit point maximum increases by 1 and increases by 1 again whenever you gain a level in this class.</p>\
                    <p>Additionally, parts of your skin are covered by a thin sheen of dragon-like scales. When you aren't wearing armor, your AC equals 13 + your Dexterity modifier.</p>\
                    "
            $("#description").append(table + desc + feats);
        }
        else if(sub=="Wild Magic"){
            var desc = "<p>\
            Your innate magic comes from the wild forces of chaos that underlie the order of creation. You might have endured exposure to some form of raw magic, perhaps through a planar portal leading to Limbo, the Elemental Planes, or the mysterious Far Realm. Perhaps you were blessed by a powerful fey creature or marked by a demon. Or your magic could be a fluke of your birth, with no apparent cause or reason. However it came to be, this chaotic magic churns within you, waiting for any outlet.\
                        </p>"
            var feats ="<h1>Wild Magic Surge</h1>\
                    <p>Starting when you choose this origin at 1st level, your spellcasting can unleash surges of untamed magic. Once per turn, the DM can have you roll a d20 immediately after you cast a sorcerer spell of 1st level or higher. If you roll a 1, roll on the Wild Magic Surge table to create a magical effect. If that effect is a spell, it is too wild to be affected by your Metamagic, and if it normally requires concentration, it doesn't require concentration in this case; the spell lasts for its full duration.</p>\
                    <h1>Tides of Chaos</h1>\
                    <p>Starting at 1st level, you can manipulate the forces of chance and chaos to gain advantage on one attack roll, ability check, or saving throw. Once you do so, you must finish a long rest before you can use this feature again.</p>\
                    <p>Any time before you regain the use of this feature, the DM can have you roll on the Wild Magic Surge table immediately after you cast a sorcerer spell of 1st level or higher. You then regain the use of this feature.</p>\
                    "
            $("#description").append(table + desc + feats);
        }
        else if(sub=="Archfey"){
            var table = "<table>\
                            <tr>\
                            <th>Spell Level</th>\
                            <th>Spells</th>\
                            </tr>\
                            <tr>\
                            <td>1st</th>\
                            <td>Faerie Fire, Sleep</th>\
                            </tr>\
                            <tr>\
                            <td>2nd</th>\
                            <td>Calm Emotions, Phantasmal Force</th>\
                            </tr>\
                            <tr>\
                            <td>3rd</th>\
                            <td>Blink, Plant Growth</th>\
                            </tr>\
                            <tr>\
                            <td>4th</th>\
                            <td>Dominate Beast, Greater Invisibility</th>\
                            </tr>\
                            <tr>\
                            <td>5th</th>\
                            <td>Dominate Person, Seeming</th>\
                            </tr>\
                        </table"

            var desc = "<p>\
            Your patron is a lord or lady of the fey, a creature of legend who holds secrets that were forgotten before the mortal races were born. This being's motivations are often inscrutable, and sometimes whimsical, and might involve a striving for greater magical power or the settling of age-old grudges. Beings of this sort include the Prince of Frost; the Queen of Air and Darkness, ruler of the Gloaming Court; Titania of the Summer Court; her consort Oberon, the Green Lord; Hyrsam, the Prince of Fools; and ancient hags.\
                        </p>"
            var feats ="\
                    <h1>Expanded Spell List</h1>\
                    <p>The Archfey lets you choose from an expanded list of spells when you learn a warlock spell.</p>\
                    <h1>Fey Presence</h1>\
                    <p>Starting at 1st level, your patron bestows upon you the ability to project the beguiling and fearsome presence of the fey. As an action, you can cause each creature in a 10-foot cube originating from you to make a Wisdom saving throw against your warlock spell save DC. The creatures that fail their saving throws are all charmed or frightened by you (your choice) until the end of your next turn.</p>\
                    <p>Once you use this feature, you can't use it again until you finish a short or long rest.</p>\
                    "
            $("#description").append(table + desc + feats);
        }
        else if(sub=="Fiend"){
            var table = "<table>\
                            <tr>\
                            <th>Spell Level</th>\
                            <th>Spells</th>\
                            </tr>\
                            <tr>\
                            <td>1st</th>\
                            <td>Burning Hands, Command</th>\
                            </tr>\
                            <tr>\
                            <td>2nd</th>\
                            <td>Blindness/Deafness, Scorching ray</th>\
                            </tr>\
                            <tr>\
                            <td>3rd</th>\
                            <td>Fireball, Stinking Cloud</th>\
                            </tr>\
                            <tr>\
                            <td>4th</th>\
                            <td>Fire Shield, Wall of Fire</th>\
                            </tr>\
                            <tr>\
                            <td>5th</th>\
                            <td>Flame Strike, Hallow</th>\
                            </tr>\
                        </table"

            var desc = "<p>\
            You have made a pact with a fiend from the lower planes of existence, a being whose aims are evil, even if you strive against those aims. Such beings desire the corruption or destruction of all things, ultimately including you. Fiends powerful enough to forge a pact include demon lords such as Demogorgon, Orcus, Fraz'Urb-luu, and Baphomet; archdevils such as Asmodeus, Dispater, Mephistopheles, and Belial; pit fiends and balors that are especially mighty; and ultroloths and other lords of the yugoloths.\
                        </p>"
            var feats ="\
                    <h1>Expanded Spell List</h1>\
                    <p>The Fiend lets you choose from an expanded list of spells when you learn a warlock spell.</p>\
                    <h1>Dark One's Blessing</h1>\
                    <p>Starting at 1st level, when you reduce a hostile creature to 0 hit points, you gain temporary hit points equal to your Charisma modifier + your warlock level (minimum of 1).</p>\
                    "
            $("#description").append(table + desc + feats);
        }
        else if(sub=="Old"){
            var table = "<table>\
                            <tr>\
                            <th>Spell Level</th>\
                            <th>Spells</th>\
                            </tr>\
                            <tr>\
                            <td>1st</th>\
                            <td>Dissonant Whispers, Tasha's Hideous Laughter</th>\
                            </tr>\
                            <tr>\
                            <td>2nd</th>\
                            <td>Detect Thoughts, Phantasmal Force</th>\
                            </tr>\
                            <tr>\
                            <td>3rd</th>\
                            <td>Clairvoyance, Sending</th>\
                            </tr>\
                            <tr>\
                            <td>4th</th>\
                            <td>Dominant Beast, Evard's Black tentacles</th>\
                            </tr>\
                            <tr>\
                            <td>5th</th>\
                            <td>Dominate Person, Telekinesis</th>\
                            </tr>\
                        </table"

            var desc = "<p>\
            Your patron is a mysterious entity whose nature is utterly foreign to the fabric of reality. It might come from the Far Realm, the space beyond reality, or it could be one of the elder gods known only in legends. Its motives are incomprehensible to mortals, and its knowledge so immense and ancient that even the greatest libraries pale in comparison to the vast secrets it holds. The Great Old One might be unaware of your existence or entirely indifferent to you, but the secrets you have learned allow you to draw your magic from it.\
                        </p>"
            var feats ="\
                    <h1>Expanded Spell List</h1>\
                    <p>The Great Old One lets you choose from an expanded list of spells when you learn a warlock spell. </p>\
                    <h1>Awakened Mind</h1>\
                    <p>Starting at 1st level, your alien knowledge gives you the ability to touch the minds of other creatures. You can telepathically speak to any creature you can see within 30 feet of you. You don't need to share a language with the creature for it to understand your telepathic utterances, but the creature must be able to understand at least one language.</p>\
                    "
            $("#description").append(table + desc + feats);
        }
    }
</script>
</html>