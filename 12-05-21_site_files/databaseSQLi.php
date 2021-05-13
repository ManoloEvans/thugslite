
<?php
echo "<title>ThugLite - Recipies</title>";
echo     "<html><head><link rel='stylesheet' href='css/stylesheet.css'></head><body>";
echo "<header class='banner'>
        <h1 class='bannerTitle' id='title'>ThugLite Recipe Generator - Recipies</h1>
	  </header>";
echo "<style>
        table{border: 1px solid black;
        background-color: white;
        color: black;
        margin: 0em 1em 1em 1em;
        }
        th{border: 1px solid black;
            background-color: #262626;
            color: white;
        }
        tr{border: 1px solid black;}
        tr:nth-child(even) {
        background-color: #f2f2f2;
        }
        td{border: 1px solid black;}
        footer {

        height: 13em;
        display: inline-block;
        width: 100%;
        }
        small	{
        font-size: .75em;
        text-align: center !important;
        }
        .footermen {
        color: #a6a6a6 !important;
        margin-bottom: 8em;
        margin-right: 1em;
        text-decoration: underline !important;
        text-decoration-color: #a6a6a6 !important;
        }
        .footermen :link {
        padding: 0.1em 0em 0.1em .5em;
        text-transform: uppercase;
        }
        .footermen a:hover	{
        color: #FFF;
        }
        body {
        background-color: #262626;
        font-family: 'ABeeZee';
        color: #FFFBECB3;
        font-size: 100%;
        line-height: 1.2;
        margin: 0;
        padding: 0;
        }
        header{
            padding: 2em;
            text-align: center;
            color: white;
            font-size: 20px;
            background-repeat: no-repeat
        }
        .bannerTitle {
        font-size: 3em;
        margin-top: 1em;
        text-transform: uppercase;
        line-height: 3;
        margin-left: 0.5em;
        color: #FFF;
        }
        small	{
        font-size: 0.75em;
        margin-left: 1em;
        }
        </style>";

//find out which query has been selected
if (isset($_POST['submit'])) {
    if($_POST['qry']=='qry1'){
        runSQL("SELECT Name, Instructions, Ingredients, Column1, Column2, Column3, Column4, Column5, Column6, Column7, Column8, Column9, Column10, Column11, Column12, Column13 FROM Sheet1 WHERE Ingredients LIKE '%Beef%'
OR Column1 LIKE '%Beef%'
OR Column2 LIKE '%Beef%'
OR Column3 LIKE '%Beef%'
OR Column4 LIKE '%Beef%'
OR Column5 LIKE '%Beef%'
OR Column6 LIKE '%Beef%'
OR Column7 LIKE '%Beef%'
OR Column8 LIKE '%Beef%'
OR Column9 LIKE '%Beef%'
OR Column10 LIKE '%Beef%'
OR Column11 LIKE '%Beef%'
OR Column12 LIKE '%Beef%'
OR Column13 LIKE '%Beef%'");
echo"<style>header{background-image: url(https://images.pexels.com/photos/65175/pexels-photo-65175.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260); background-size: 100%, 20%}</style>";
    }
    else if ($_POST['qry']=='qry2'){
        runSQL("SELECT Name, Instructions, Ingredients, Column1, Column2, Column3, Column4, Column5, Column6, Column7, Column8, Column9, Column10, Column11, Column12, Column13 FROM Sheet1 WHERE Ingredients LIKE '%Chicken%'
OR Column1 LIKE '%Chicken%'
OR Column2 LIKE '%Chicken%'
OR Column3 LIKE '%Chicken%'
OR Column4 LIKE '%Chicken%'
OR Column5 LIKE '%Chicken%'
OR Column6 LIKE '%Chicken%'
OR Column7 LIKE '%Chicken%'
OR Column8 LIKE '%Chicken%'
OR Column9 LIKE '%Chicken%'
OR Column10 LIKE '%Chicken%'
OR Column11 LIKE '%Chicken%'
OR Column12 LIKE '%Chicken%'
OR Column13 LIKE '%Chicken%'");
    echo"<style>header{background-image: url(https://images.pexels.com/photos/262945/pexels-photo-262945.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260); background-size: 100%, 20%}</style>";
    }
    else if ($_POST['qry']=='qry3'){
        runSQL("SELECT Name, Instructions, Ingredients, Column1, Column2, Column3, Column4, Column5, Column6, Column7, Column8, Column9, Column10, Column11, Column12, Column13 FROM Sheet1 WHERE Ingredients LIKE '%Duck%'
OR Column1 LIKE '%Duck%'
OR Column2 LIKE '%Duck%'
OR Column3 LIKE '%Duck%'
OR Column4 LIKE '%Duck%'
OR Column5 LIKE '%Duck%'
OR Column6 LIKE '%Duck%'
OR Column7 LIKE '%Duck%'
OR Column8 LIKE '%Duck%'
OR Column9 LIKE '%Duck%'
OR Column10 LIKE '%Duck%'
OR Column11 LIKE '%Duck%'
OR Column12 LIKE '%Duck%'
OR Column13 LIKE '%Duck%'");
echo"<style>header{background-image: url(https://images.pexels.com/photos/6646166/pexels-photo-6646166.jpeg?cs=srgb&dl=pexels-rodnae-productions-6646166.jpg&fm=jpg); background-size: 100%, 20%}</style>";
    }
    else if ($_POST['qry']=='qry4'){
        runSQL("SELECT Name, Instructions, Ingredients, Column1, Column2, Column3, Column4, Column5, Column6, Column7, Column8, Column9, Column10, Column11, Column12, Column13 FROM Sheet1 WHERE Ingredients LIKE '%Lamb%'
OR Column1 LIKE '%Lamb%'
OR Column2 LIKE '%Lamb%'
OR Column3 LIKE '%Lamb%'
OR Column4 LIKE '%Lamb%'
OR Column5 LIKE '%Lamb%'
OR Column6 LIKE '%Lamb%'
OR Column7 LIKE '%Lamb%'
OR Column8 LIKE '%Lamb%'
OR Column9 LIKE '%Lamb%'
OR Column10 LIKE '%Lamb%'
OR Column11 LIKE '%Lamb%'
OR Column12 LIKE '%Lamb%'
OR Column13 LIKE '%Lamb%'");
echo"<style>header{background-image: url(https://images.unsplash.com/photo-1507150370052-1e798df49f29?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=964&q=80); background-size: 100%, 20%}</style>";
    }
    else if ($_POST['qry']=='qry5'){
        runSQL("SELECT Name, Instructions, Ingredients, Column1, Column2, Column3, Column4, Column5, Column6, Column7, Column8, Column9, Column10, Column11, Column12, Column13 FROM Sheet1 WHERE Name LIKE '%Fish%'
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
       echo"<style>header{background-image: url(https://images.pexels.com/photos/699544/pexels-photo-699544.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260); background-size: 100%, 20%}</style>";
    }
    else if ($_POST['qry']=='qry6'){
        runSQL("SELECT Name, Instructions, Ingredients, Column1, Column2, Column3, Column4, Column5, Column6, Column7, Column8, Column9, Column10, Column11, Column12, Column13 FROM Sheet1 WHERE Ingredients LIKE '%Turkey%'
OR Column1 LIKE '%Turkey%'
OR Column2 LIKE '%Turkey%'
OR Column3 LIKE '%Turkey%'
OR Column4 LIKE '%Turkey%'
OR Column5 LIKE '%Turkey%'
OR Column6 LIKE '%Turkey%'
OR Column7 LIKE '%Turkey%'
OR Column8 LIKE '%Turkey%'
OR Column9 LIKE '%Turkey%'
OR Column10 LIKE '%Turkey%'
OR Column11 LIKE '%Turkey%'
OR Column12 LIKE '%Turkey%'
OR Column13 LIKE '%Turkey%'");
echo"<style>header{background-image: url(https://images.pexels.com/photos/5702781/pexels-photo-5702781.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260); background-size: 100%, 20%}</style>";
    }
    else if ($_POST['qry']=='qry7'){
        runSQL("SELECT Name, Instructions, Ingredients, Column1, Column2, Column3, Column4, Column5, Column6, Column7, Column8, Column9, Column10, Column11, Column12, Column13 FROM Sheet1 WHERE Name LIKE '%Fish%'
       OR Name LIKE '%Salmon%'
       OR Name LIKE '%Tuna%'
       OR Name LIKE '%Cod%'
       OR Name LIKE '%Hadock%'
       OR Name LIKE '%Seabass%'
        ");
       echo"<style>header{background-image: url(https://images.unsplash.com/photo-1535424921017-85119f91e5a1?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1350&q=80); background-size: 100%, 20%}</style>";
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
        $finfo = $result->fetch_fields(); // get field titles
        echo "<table class = 'resultsTable''>";
        echo "<tr>";

            echo "<th class = 'resultsTh'>";
            printf("%s  \n",   "Recipe");
            echo "</th>";
            echo "<th class = 'resultsTh'>";
            printf("%s  \n",   "Directions");
            echo "</th>";
            echo "<th class = 'resultsTh' colspan = '14'>";
            printf("%s  \n",   "Ingredience");
            echo "</th>";
           
            
        
        echo "<tr>"; 
            while ($row = $result->fetch_array())  { //get each field from the row  - noFields was set earlier
                for($i = 0; $i < $noFields; $i++){
                    echo "<td class = 'resultsTd'>";
                    echo $row[$i];
                    echo "</td>";
                }
                echo "</tr>"; 
            }    
         echo "</table>";
       $result->free();
    }
    echo"<footer>
    	    <div class style='margin: 12px'>
                <a href='index.html' style='margin-top: 1em;  color: #a6a6a6 !important; color: #a6a6a6 !important;'>Return to main page</a>
            </div>
            <br>
	    	<small>&copy; 2021, University of Brighton, School of Computing, Engineering and Mathematics</small>
    	</footer>";
    $mysqli->close(); //end connection
}
echo "</body></html>";
?>