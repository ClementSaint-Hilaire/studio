<?php       
 try {
        $db = new PDO('mysql:host=localhost;dbname=cshdb;charset=utf8;', 'root', '');
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die('Erreur de connexion à la bdd : ' . $e->getMessage());
    }
?>

