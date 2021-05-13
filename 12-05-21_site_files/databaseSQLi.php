<?php
echo     "<html><head><link rel='stylesheet' href='css/stylesheet.css'></head><body>";

//find out which query has been selected
if (isset($_POST['submit'])) {
    if($_POST['qry']=='qry1'){
        runSQL("SELECT Name, Instructions, Ingredients, L, M, N, O, P, Q, R, S, T, U, V, W, X FROM recipes_complete WHERE Ingredients LIKE '%Beef%'
OR L LIKE '%Beef%'
OR M LIKE '%Beef%'
OR N LIKE '%Beef%'
OR O LIKE '%Beef%'
OR P LIKE '%Beef%'
OR Q LIKE '%Beef%'
OR R LIKE '%Beef%'
OR S LIKE '%Beef%'
OR T LIKE '%Beef%'
OR U LIKE '%Beef%'
OR V LIKE '%Beef%'
OR W LIKE '%Beef%'
OR X LIKE '%Beef%'");
    }
    else if ($_POST['qry']=='qry2'){
        runSQL("SELECT Name, Instructions, Ingredients, L, M, N, O, P, Q, R, S, T, U, V, W, X FROM recipes_complete WHERE Ingredients LIKE '%Chicken%'
OR L LIKE '%Chicken%'
OR M LIKE '%Chicken%'
OR N LIKE '%Chicken%'
OR O LIKE '%Chicken%'
OR P LIKE '%Chicken%'
OR Q LIKE '%Chicken%'
OR R LIKE '%Chicken%'
OR S LIKE '%Chicken%'
OR T LIKE '%Chicken%'
OR U LIKE '%Chicken%'
OR V LIKE '%Chicken%'
OR W LIKE '%Chicken%'
OR X LIKE '%Chicken%'");
    }
    else if ($_POST['qry']=='qry3'){
        runSQL("SELECT Name, Instructions, Ingredients, L, M, N, O, P, Q, R, S, T, U, V, W, X FROM recipes_complete WHERE Ingredients LIKE '%Duck%'
OR L LIKE '%Duck%'
OR M LIKE '%Duck%'
OR N LIKE '%Duck%'
OR O LIKE '%Duck%'
OR P LIKE '%Duck%'
OR Q LIKE '%Duck%'
OR R LIKE '%Duck%'
OR S LIKE '%Duck%'
OR T LIKE '%Duck%'
OR U LIKE '%Duck%'
OR V LIKE '%Duck%'
OR W LIKE '%Duck%'
OR X LIKE '%Duck%'");
    }
    else if ($_POST['qry']=='qry4'){
        runSQL("SELECT Name, Instructions, Ingredients, L, M, N, O, P, Q, R, S, T, U, V, W, X FROM recipes_complete WHERE Ingredients LIKE '%Lamb%'
OR L LIKE '%Lamb%'
OR M LIKE '%Lamb%'
OR N LIKE '%Lamb%'
OR O LIKE '%Lamb%'
OR P LIKE '%Lamb%'
OR Q LIKE '%Lamb%'
OR R LIKE '%Lamb%'
OR S LIKE '%Lamb%'
OR T LIKE '%Lamb%'
OR U LIKE '%Lamb%'
OR V LIKE '%Lamb%'
OR W LIKE '%Lamb%'
OR X LIKE '%Lamb%'");
    }
    else if ($_POST['qry']=='qry5'){
        runSQL("SELECT Name, Instructions, Ingredients, L, M, N, O, P, Q, R, S, T, U, V, W, X FROM recipes_complete WHERE Name LIKE '%Fish%'
       OR Name LIKE '%Seafood%'
       OR Name LIKE '%Shrimp%'
       OR Name LIKE '%Salmon%'
       OR Name LIKE '%Tuna%'
       OR Name LIKE '%Cod%'
       OR Name LIKE '%Hadock%'
       OR Name LIKE '%Seabass%'
       OR Name LIKE '%Squid%'
       OR Name LIKE '%Prawn%'
       OR Name LIKE '%Lobster%'
       OR Name LIKE '%Crab%'
       OR Name LIKE '%Clam%'");
    }
    else if ($_POST['qry']=='qry6'){
        runSQL("SELECT Name, Instructions, Ingredients, L, M, N, O, P, Q, R, S, T, U, V, W, X FROM recipes_complete WHERE Ingredients LIKE '%Turkey%'
OR L LIKE '%Turkey%'
OR M LIKE '%Turkey%'
OR N LIKE '%Turkey%'
OR O LIKE '%Turkey%'
OR P LIKE '%Turkey%'
OR Q LIKE '%Turkey%'
OR R LIKE '%Turkey%'
OR S LIKE '%Turkey%'
OR T LIKE '%Turkey%'
OR U LIKE '%Turkey%'
OR V LIKE '%Turkey%'
OR W LIKE '%Turkey%'
OR X LIKE '%Turkey%'");
    }
    else if ($_POST['qry']=='qry7'){
        runSQL("SELECT Name, Instructions, Ingredients, L, M, N, O, P, Q, R, S, T, U, V, W, X FROM recipes_complete WHERE Name LIKE '%Fish%'
       OR Name LIKE '%Seafood%'
       OR Name LIKE '%Shrimp%'
       OR Name LIKE '%Salmon%'
       OR Name LIKE '%Tuna%'
       OR Name LIKE '%Cod%'
       OR Name LIKE '%Hadock%'
       OR Name LIKE '%Seabass%'
       OR Name LIKE '%Squid%'
       OR Name LIKE '%Prawn%'
       OR Name LIKE '%Lobster%'
       OR Name LIKE '%Crab%'
       OR Name LIKE '%Clam%'");
    }
}        

function runSQL($txt){
    $servername = "brighton";
    $username = "jln26_select";
    $password = "J1o2r3d4a5n6";
    $db="jln26_food";     
    $mysqli = new mysqli($servername, $username,$password,$db);
    
    if ($mysqli->connect_errno) {
        printf("Connect failed: %s\n", $mysqli->connect_error);
        exit();
    }
  if ($result = $mysqli->query($txt)) {
        $noFields= $result->field_count;
        printf("Results have %d field(s).\n", $result->field_count);
        echo "<br/>";
        printf("Results have %d row(s).\n",$result->num_rows);
        echo "<br/>";
        $finfo = $result->fetch_fields(); // get field titles

       echo "<table>";
        echo "<tr>";
        foreach ($finfo as $val) {
            echo "<th>";
            printf("%s  \n",   $val->name);
            echo "</th>";
        }
        echo "<tr>"; 
            while ($row = $result->fetch_array())  { //get each field from the row  - noFields was set earlier
                for($i = 0; $i < $noFields; $i++){
                    echo "<td>";
                    echo $row[$i];
                    echo "</td>";
                }
                echo "</tr>"; 
            }    
         echo "</table>";
       $result->free();
    }
    $mysqli->close(); //end connection
}
echo "</body></html>";
?>
