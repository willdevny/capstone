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
    <input type="radio" id="roll" name="gold" onchange="getStats(<?php echo $_SESSION['race']?>)">

    <div name="statblock" id="statblock">
        <form method = 'POST'>
            <label for='str'>Strength:</label>
            <input type='number' id='str' name='str' min='1' max='20' value = 10>
            <label for='str'>Dexterity:</label>
            <input type='number' id='dex' name='dex' min='1' max='20' value = 10>
            <label for='str'>Constitution:</label>
            <input type='number' id='con' name='con' min='1' max='20' value = 10>
            <label for='str'>Intelligence:</label>
            <input type='number' id='int' name='int' min='1' max='20' value = 10>
            <label for='str'>Wisdom:</label>
            <input type='number' id='wis' name='wis' min='1' max='20' value = 10>
            <label for='str'>Charsima:</label>
            <input type='number' id='cha' name='cha' min='1' max='20' value = 10>
            <input type='submit' name='submit' id='submit'>
        </form>
    </div>
</body>
<script type="text/javascript">
    let rolledArray=[0, 0, 0, 0, 0, 0,]
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
    function getRoll(race, roll){
        var stat = $('#'+ roll).val();
        $('#'+ stat).html("");
        
        if(roll=='roll0'){
            $('#'+ stat).append(rolledArray[0])
        }
        else if(roll=='roll1'){
            $('#'+ stat).append(rolledArray[1])
        }
        else if(roll=='roll2'){
            $('#'+ stat).append(rolledArray[2])
        }
        else if(roll=='roll3'){
            $('#'+ stat).append(rolledArray[3])
        }
        else if(roll=='roll4'){
            $('#'+ stat).append(rolledArray[4])
        }
        else if(roll=='roll5'){
            $('#'+ stat).append(rolledArray[5])
        }
    }
    function applyStatBonus(key, value, stat){
        if(key=='human')
    }

    function getStats(key){
        $("#statblock").html("");

        var $manual = "\
                <form method = 'POST'>\
                    <label for='str'>Strength:</label>\
                    <input type='number' id='str' name='str' min='1' max='20' value = 10>\
                    <label for='str'>Dexterity:</label>\
                    <input type='number' id='dex' name='dex' min='1' max='20' value = 10>\
                    <label for='str'>Constitution:</label>\
                    <input type='number' id='con' name='con' min='1' max='20' value = 10>\
                    <label for='str'>Intelligence:</label>\
                    <input type='number' id='int' name='int' min='1' max='20' value = 10>\
                    <label for='str'>Wisdom:</label>\
                    <input type='number' id='wis' name='wis' min='1' max='20' value = 10>\
                    <label for='str'>Charsima:</label>\
                    <input type='number' id='cha' name='cha' min='1' max='20' value = 10>\
                    <input type='submit' name='submit' id='submit'>\
                </form>\
                "
        var $array = "\
                <div name='diceArray' id='diceArray' style='display:inline;'>" + rolledArray[0] + ", " + rolledArray[1] + ", " + rolledArray[2] + ", "  + rolledArray[3] + ", "  + rolledArray[4] + ", "  + rolledArray[5] + "</div>\
                <button type='button' onclick='rollArray()'></button>\
                <div>\
                <select name='roll0' id='roll0' onchange='getRoll(" + key + ", roll0)'>\
                <option value=''>------</option>\
                <option value='Str'>Strength</option>\
                <option value='Dex'>Dexterity</option>\
                <option value='Con'>Constitution</option>\
                <option value='Int'>Intelligence</option>\
                <option value='Wis'>Wisdom</option>\
                <option value='Cha'>Charisma</option>\
                </select>\
                <select name='roll1' id='roll1' onchange='getRoll(" + key + ", roll1)'>\
                <option value=''>------</option>\
                <option value='Str'>Strength</option>\
                <option value='Dex'>Dexterity</option>\
                <option value='Con'>Constitution</option>\
                <option value='Int'>Intelligence</option>\
                <option value='Wis'>Wisdom</option>\
                <option value='Cha'>Charisma</option>\
                </select>\
                <select name='roll1' id='roll2' onchange='getRoll(" + key + ", roll2)'>\
                <option value=''>------</option>\
                <option value='Str'>Strength</option>\
                <option value='Dex'>Dexterity</option>\
                <option value='Con'>Constitution</option>\
                <option value='Int'>Intelligence</option>\
                <option value='Wis'>Wisdom</option>\
                <option value='Cha'>Charisma</option>\
                </select>\
                <select name='roll3' id='roll3' onchange='getRoll(" + key + ", roll3)'>\
                <option value=''>------</option>\
                <option value='Str'>Strength</option>\
                <option value='Dex'>Dexterity</option>\
                <option value='Con'>Constitution</option>\
                <option value='Int'>Intelligence</option>\
                <option value='Wis'>Wisdom</option>\
                <option value='Cha'>Charisma</option>\
                </select>\
                <select name='roll4' id='roll4' onchange='getRoll(" + key + ", roll4)'>\
                <option value=''>------</option>\
                <option value='Str'>Strength</option>\
                <option value='Dex'>Dexterity</option>\
                <option value='Con'>Constitution</option>\
                <option value='Int'>Intelligence</option>\
                <option value='Wis'>Wisdom</option>\
                <option value='Cha'>Charisma</option>\
                </select>\
                <select name='roll5' id='roll5' onchange='getRoll(" + key + ", roll5)'>\
                <option value=''>------</option>\
                <option value='Str'>Strength</option>\
                <option value='Dex'>Dexterity</option>\
                <option value='Con'>Constitution</option>\
                <option value='Int'>Intelligence</option>\
                <option value='Wis'>Wisdom</option>\
                <option value='Cha'>Charisma</option>\
                </select>\
                </div>\
                <div name='str' id='str'>\
                </div>\
                <div name='dex' id='dex'>\
                </div>\
                <div name='con' id='con'>\
                </div>\
                <div name='int' id='int'>\
                </div>\
                <div name='wis' id='wis'>\
                </div>\
                <div name='cha' id='cha'>\
                </div>\
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