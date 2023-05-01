<?php

// $db_handle = pg_connect("host=localhost dbname=Dndbuilder user=williemdevenney password=password");

// $query = "SELECT name, damagedice, damagetype, abilites
// FROM weapon
// WHERE quality='martial' AND distance='melee'";

// $barbWeps1 = pg_fetch_all(pg_query($db_handle, $query));

// $query = "SELECT name, damagedice, damagetype, abilites
// FROM weapon
// WHERE quality='simple' AND distance='melee'";

// $barbWeps2 = pg_fetch_all(pg_query($db_handle, $query));

// $query = "SELECT name, damagedice, damagetype, abilites
// FROM weapon
// WHERE name = 'Rapier' OR (quality='simple' AND distance='melee')";











if(isset($_POST['Submit'])){
    if($_POST['hidden'] == "race"){
        if($_POST['race']!= ""){
            $_SESSION['race'] = $_POST['race'];
            header("Location: class.php");
        }
    }
}
?>