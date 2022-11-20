<?php
try{
    $db = mysqli_connect("127.0.0.1","root","","recherche")or die (mysqli_error($db));

    // $q10 = "INSERT INTO `city` (`Nom`, `Population`, `superficie`, `Nombre`) VALUES ('Zaghouan', '176945', '288', '6')";
    // $db->exec($q10);

    $q = $_GET['search'];
    $q = ucfirst($q);

    $res = mysqli_query($db,"select * from city where Nom like '$q%' ")or die (mysqli_error($res));
    $res1 = mysqli_query($db,"select * from city where Nom like '$q%' ")or die (mysqli_error($res1));

    echo "<!DOCTYPE html>
        <html lang=\"en\">
        <head>
        
            <title>Moteur de Recherche</title>
        
            <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\">
            <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin>
            <link href=\"https://fonts.googleapis.com/css2?family=Kumbh+Sans:wght@100;300;400;500;700&family=Space+Mono:wght@400;700&display=swap\" rel=\"stylesheet\">
        
            <link rel=\"stylesheet\" href=\"style1.css\">
        </head>
        <body>";
                
        if(mysqli_fetch_row($res1) != null) {
            while ($ligne =mysqli_fetch_row($res))
            {
            echo"<section>
                <aside>
                <h2>".$ligne[0]."</h2>
                <p>Population : <span>".$ligne[1]."</span></p>
                <p>superficie : <span>".$ligne[2]."</span></p>
                <p>Délégation : <span>".$ligne[3]."</span></p>
                </aside>";
            }
        } else {
            echo "<section> 
            <p style=\"font-size: xx-large;
            font-weight: 500;
            color: #e90000cc;
            text-transform: capitalize;\">non trouve</p>
            </section>";
        }  
        echo "</body></html>";
}catch(PDOException $e){
    die('Erreur : '.$e->getMessage());
}
?>