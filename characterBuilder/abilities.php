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
    <p>Input manually or roll (4d6 drop lowest) for stats?</p>
    <p>Racial Modifiers are only automatically added if you choose to roll</p>
    <label for="noroll">Input stats:</label>
    <input type="radio" id="noroll" name="gold" onchange="getStats('no')" checked>
    <label for="roll">Roll for stats:</label>
    <input type="radio" id="roll" name="gold" onchange="getStats('yes')">

    <div name="statblock" id="statblock">
        <form method = 'POST'>
            <label for='Strength'>Strength:</label>
            <input type='number' id='Strength' name='Strength' min='1' max='20' value = 10>
            <label for='Dexterity'>Dexterity:</label>
            <input type='number' id='Dexterity' name='Dexterity' min='1' max='20' value = 10>
            <label for='Constitution'>Constitution:</label>
            <input type='number' id='Constitution' name='Constitution' min='1' max='20' value = 10>
            <label for='Intelligence'>Intelligence:</label>
            <input type='number' id='Intelligence' name='Intelligence' min='1' max='20' value = 10>
            <label for='Wisdom'>Wisdom:</label>
            <input type='number' id='Wisdom' name='Wisdom' min='1' max='20' value = 10>
            <label for='Charisma'>Charisma:</label>
            <input type='Charisma' id='Charisma' name='Charisma' min='1' max='20' value = 10>
            <input type='hidden' name='hidden' value='stats'>
            <input type='submit' name='Submit' id='Submit'>
        </form>
    </div>
</body>
<script type="text/javascript">
    let rolledArray=[0, 0, 0, 0, 0, 0,];
    let key= "<?php echo $_SESSION['race']; ?>";
    let last= ["", "", "", "", "", "",]


    function rollD6(){
        return Math.floor(Math.random() * (6) + 1);
    }
    function roll(){
        var rolls = [rollD6(), rollD6(), rollD6() ,rollD6()]
        rolls.sort(function (a, b){return a - b;});
        rolls.shift();
        var sum = rolls.reduce((partialSum, a) => partialSum + a, 0);
        return sum 
    }
    function rollArray(add){
        rolledArray = [roll(add), roll(add), roll(add), roll(add), roll(add), roll(add)]
        $('#diceArray').html("")
        $('#diceArray').append(rolledArray[0] + ", " + rolledArray[1] + ", " + rolledArray[2] + ", " + rolledArray[3] + ", " + rolledArray[4] + ", " + rolledArray[5])
    }

    function addOptionBack(lastOwner, stat){
        for(let i = 0; i<6; i++){
            if('roll'+i!=lastOwner){
                $('#roll'+i).find('option[value="' + stat + '"]').attr("hidden", false);
            }
        }
    }
    function removeOption(owner, stat){
        if(stat != ""){
            for(let i = 0; i<6; i++){
                if(('roll'+i!=owner)&&(stat!= '')){
                    $('#roll'+i).find('option[value="' + stat + '"]').attr("hidden", true);
                }
            }
        }
    }
    function getRoll(roll){
        // roll = string that represents the dropdown's id
        var stat = $("#" + roll).val();
        console.log("this is the button you pressed:" + stat)
        if(stat != ''){
            $('#'+ stat).html("");
        }
        removeOption(roll, stat)
        if(roll=='roll0'){
            console.log("this is what will be added back if not empty:" + last[0])
            addOptionBack(roll, last[0])
            if(stat != ''){
                $('#'+ stat).val(applyStatBonus(rolledArray[0], stat))
            }
            if(last[0] != ''){
                $('#'+ last[0]).val("");
            }
            last[0] = stat
        }
        else if(roll=='roll1'){
            addOptionBack(roll, last[1])
            if(stat != ''){
                $('#'+ stat).val(applyStatBonus(rolledArray[1], stat))
            }
            if(last[1] != ''){
                $('#'+ last[1]).val("");
            }
            last[1] = stat
        }
        else if(roll=='roll2'){
            addOptionBack(roll, last[2])
            if(stat != ''){
                $('#'+ stat).val(applyStatBonus(rolledArray[2], stat))
            }
            if(last[2] != ''){
                $('#'+ last[2]).val("");
            }
            last[2] = stat
        }
        else if(roll=='roll3'){
            addOptionBack(roll, last[3])
            if(stat != ''){
                $('#'+ stat).val(applyStatBonus(rolledArray[3], stat))
            }
            if(last[3] != ''){
                $('#'+ last[3]).val("");
            }
            last[3] = stat
        }
        else if(roll=='roll4'){
            addOptionBack(roll, last[4])
            if(stat != ''){
                $('#'+ stat).val(applyStatBonus(rolledArray[4], stat))
            }
            if(last[4] != ''){
                $('#'+ last[4]).val("");
            }
            last[4] = stat
        }
        else if(roll=='roll5'){
            addOptionBack(roll, last[5])
            if(stat != ''){
                $('#'+ stat).val(applyStatBonus(rolledArray[5], stat))
            }
            if(last[5] != ''){
                $('#'+ last[5]).val("");
            }
            last[5] = stat
        }

    }
    function applyStatBonus(value, stat){
        $('#Notice').html("")
        if(key=='Human'){
            console.log(value)
            console.log(value + 1)
            return value + 1
        }
        else if(key=='Variant-Human'){
            $('#Notice').append("As a Variant Human, you can increase two ability scores by 1")
            $('#Strength').attr("readonly", false);
            $('#Dexterity').attr("readonly", false);
            $('#Charisma').attr("readonly", false);
            $('#Constitution').attr("readonly", false);
            $('#Intelligence').attr("readonly", false);
            $('#Wisdom').attr("readonly", false);
        }
        else if(key=='Dragonborn'){
            if(stat == 'Strength'){
                return value + 2
            }
            if(stat == 'Charisma'){
                return value + 1
            }
        }
        else if(key=='Hill-Dwarf'){
            if(stat == 'Constitution'){
                return value + 2
            }
            if(stat == 'Wisdom'){
                return value + 1
            }
        }
        else if(key=='Mountain-Dwarf'){
            if(stat == 'Constitution'){
                return value + 2
            }
            if(stat == 'Strength'){
                return value + 2
            }
        }
        else if(key=='High-Elf'){
            if(stat == 'Dexterity'){
                return value + 2
            }
            if(stat == 'Intelligence'){
                return value + 1
            }
        }
        else if(key=='Wood-Elf'){
            
            if(stat == 'Dexterity'){
                return value + 2
            }
            if(stat == 'Wisdom'){
                return value + 1
            }
        }
        else if(key=='Drow'){
            if(stat == 'Dexterity'){
                return value + 2
            }
            if(stat == 'Charisma'){
                return value + 1
            }
        }
        else if(key=='Forest-Gnome'){
            if(stat == 'Intelligence'){
                return value + 2
            }
            if(stat == 'Dexterity'){
                return value + 1
            }
        }
        else if(key=='Rock-Gnome'){
            if(stat == 'Intelligence'){
                return value + 2
            }
            if(stat == 'Constitution'){
                return value + 1
            }
        }
        else if(key=='Half-Elf'){
            if(stat == 'Charisma'){
                return value + 2
            }
            $('#Notice').append("As a Half-ELf, you can increase two ability scores other than Charisma by 1")
            $('#Strength').attr("readonly", false);
            $('#Dexterity').attr("readonly", false);
            $('#Constitution').attr("readonly", false);
            $('#Intelligence').attr("readonly", false);
            $('#Wisdom').attr("readonly", false);
        }
        else if(key=='Half-Orc'){
            if(stat == 'Strength'){
                return value + 2
            }
            if(stat == 'Constitution'){
                return value + 1
            }
        }
        else if(key=='Stout-Halfling'){
            if(stat == 'Dexterity'){
                return value + 2
            }
            if(stat == 'Charisma'){
                return value + 1
            }
        }
        else if(key=='Lightfoot-Halfling'){
            if(stat == 'Dexterity'){
                return value + 2
            }
            if(stat == 'Constitution'){
                return value + 1
            }
        }
        else if(key=='Asmodeus-Tiefling'){
            if(stat == 'Charisma'){
                return value + 2
            }
            if(stat == 'Intelligence'){
                return value + 1
            }
        }
        return value
    }

    function getStats(key){
        $("#statblock").html("");

        var $manual = "\
                <form method = 'POST'>\
                    <label for='Strength'>Strength:</label>\
                    <input type='number' id='Strength' name='Strength' min='1' max='20' value = 10>\
                    <label for='Dexterity'>Dexterity:</label>\
                    <input type='number' id='Dexterity' name='Dexterity' min='1' max='20' value = 10>\
                    <label for='Constitution'>Constitution:</label>\
                    <input type='number' id='Constitution' name='Constitution' min='1' max='20' value = 10>\
                    <label for='Intelligence'>Intelligence:</label>\
                    <input type='number' id='Intelligence' name='intelligence' min='1' max='20' value = 10>\
                    <label for='Wisdom'>Wisdom:</label>\
                    <input type='number' id='Wisdom' name='Wisdom' min='1' max='20' value = 10>\
                    <label for='Charisma'>Charisma:</label>\
                    <input type='Charisma' id='Charisma' name='Charisma' min='1' max='20' value = 10>\
                    <input type='submit' name='submit' id='submit'>\
                </form>\
                "
        var $array = "\
                <div name='diceArray' id='diceArray' style='display:inline;'>" + rolledArray[0] + ", " + rolledArray[1] + ", " + rolledArray[2] + ", "  + rolledArray[3] + ", "  + rolledArray[4] + ", "  + rolledArray[5] + "</div>\
                <button type='button' onclick='rollArray()'></button>\
                <div>\
                <select name='roll0' id='roll0' onchange='getRoll(`roll0`)'>\
                <option value=''>------</option>\
                <option value='Strength'>Strength</option>\
                <option value='Dexterity'>Dexterity</option>\
                <option value='Constitution'>Constitution</option>\
                <option value='Intelligence'>Intelligence</option>\
                <option value='Wisdom'>Wisdom</option>\
                <option value='Charisma'>Charisma</option>\
                </select>\
                <select name='roll1' id='roll1' onchange='getRoll(`roll1`)'>\
                <option value=''>------</option>\
                <option value='Strength'>Strength</option>\
                <option value='Dexterity'>Dexterity</option>\
                <option value='Constitution'>Constitution</option>\
                <option value='Intelligence'>Intelligence</option>\
                <option value='Wisdom'>Wisdom</option>\
                <option value='Charisma'>Charisma</option>\
                </select>\
                <select name='roll1' id='roll2' onchange='getRoll(`roll2`)'>\
                <option value=''>------</option>\
                <option value='Strength'>Strength</option>\
                <option value='Dexterity'>Dexterity</option>\
                <option value='Constitution'>Constitution</option>\
                <option value='Intelligence'>Intelligence</option>\
                <option value='Wisdom'>Wisdom</option>\
                <option value='Charisma'>Charisma</option>\
                </select>\
                <select name='roll3' id='roll3' onchange='getRoll(`roll3`)'>\
                <option value=''>------</option>\
                <option value='Strength'>Strength</option>\
                <option value='Dexterity'>Dexterity</option>\
                <option value='Constitution'>Constitution</option>\
                <option value='Intelligence'>Intelligence</option>\
                <option value='Wisdom'>Wisdom</option>\
                <option value='Charisma'>Charisma</option>\
                </select>\
                <select name='roll4' id='roll4' onchange='getRoll(`roll4`)'>\
                <option value=''>------</option>\
                <option value='Strength'>Strength</option>\
                <option value='Dexterity'>Dexterity</option>\
                <option value='Constitution'>Constitution</option>\
                <option value='Intelligence'>Intelligence</option>\
                <option value='Wisdom'>Wisdom</option>\
                <option value='Charisma'>Charisma</option>\
                </select>\
                <select name='roll5' id='roll5' onchange='getRoll(`roll5`)'>\
                <option value=''>------</option>\
                <option value='Strength'>Strength</option>\
                <option value='Dexterity'>Dexterity</option>\
                <option value='Constitution'>Constitution</option>\
                <option value='Intelligence'>Intelligence</option>\
                <option value='Wisdom'>Wisdom</option>\
                <option value='Charisma'>Charisma</option>\
                </select>\
                </div>\
                <form method='POST'>\
                <label for='Strength'>Strength:</label>\
                <input type='number' name='Strength' id='Strength' readonly></input>\
                <label for='Dexterity'>Dexterity:</label>\
                <input type='number' name='Dexterity' id='Dexterity' readonly></input>\
                <label for='Constitution'>Constitution:</label>\
                <input type='number' name='Constitution' id='Constitution' readonly></input>\
                <label for='Intelligence'>Intelligence:</label>\
                <input type='number' name='Intelligence' id='Intelligence' readonly></input>\
                <label for='Wisdom'>Wisdom:</label>\
                <input type='number' name='Wisdom' id='Wisdom' readonly></input>\
                <label for='Charisma'>Charisma:</label>\
                <input type='number' name='Charisma' id='Charisma' readonly></input>\
                <input type='hidden' name='hidden' value='stats'>\
                <input type='submit' name='Submit' value='Submit'>\
                </form>\
                <div name='Notice' id='Notice'></div>\
                " 

        if(key == 'no'){
            $("#statblock").append($manual);
        }
        else{
            $("#statblock").append($array);
        }
    }
</script>
</html>