<?php
    // $resultats ="";
    // if (isset($_POST['query'])&& !empty($_POST['query'])){
    //     //mazel hajet lenna ???
    //     $query= preg_replace("#[^a-zA-Z ?0-9]#i","",$_POST['query']);
        
    //     if($_POST['filtre']=="site entier"){

    //     }else if ($_POST['filtre']=="etudiant"){
    //         $sql ="SELECT idetd AS title FROM etudiant";
    //     }else if ($_POST['filtre']=="enseignants"){
    //         $sql ="SELECT idens AS title FROM enseignant ";
    //     }else {
    //         $sql ="SELECT nom AS title FROM matiere ";
    //     }
    //     include("includes/connect_db.php");

    //     $req = $db->prepare($sql);
    //     $req->execute(array('%'.$query.'%','%'.$query.'%'));

    //     $count= $req->rowCount();
    //     if ($count>= 1){
    //         echo $count."resultat trouver pour <strong>".$query."</strong><hr/>";
    //     }else {
    //         echo "0 resultat trouver pour <strong>$query</strong><hr/>";
    //     }
    // }
    $resultats ="";
    if (isset($_POST['query'])&& !empty($_POST['query'])){
        //mazel hajet lenna ???
        $query= preg_replace("#[^a-zA-Z ?0-9]#i","",$_POST['query']);
        
        if($_POST['filtre']=="site entier"){

        }else if ($_POST['filtre']=="etudiant"){
            $sql ="SELECT idetd AS title FROM etudiant";
        }else if ($_POST['filtre']=="enseignants"){
            $sql ="SELECT idens AS title FROM enseignant ";
        }else if($_POST['filtre']=="matiere"){
            $sql ="SELECT nom AS title FROM matiere ";
        }
        include("includes/connect_db.php");

        $req = $db->prepare($sql);
        $req->execute(array('%'.$query.'%','%'.$query.'%'));

        $count= $req->rowCount();
        if ($count>= 1){
            echo "$count resultat trouve pour <strong>$query</strong><hr/>";
        }else {
            echo "0 resultat trouve pour <strong>$query</strong><hr/>";
        }
    }
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>moteur de recherche</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="query">Entrer votre recherche: </label>
        <input type="search" name="query" required maxlength="80" size="80" id="query"><br>
        chercher au niveau de: 
        <select name="filtre">
            <option value="site entier">site entier</option>
            <option value="etudiant">etudiant</option>
            <option value="enseignants">enseignants</option>
            <option value="matieres">matieres</option>
        </select><br>
        <input type="submit" value="rechercher">
    </form>
    <?php echo $resultats; ?>
</body>
</html>