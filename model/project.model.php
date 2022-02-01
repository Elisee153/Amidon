<?php

require('connexion.php');

//================== CRUD QUERIES================

function get_project()
{
    $connexion = connexion();

    $query = "SELECT * FROM project";

    $transaction = $connexion->prepare($query);
    $transaction->execute();

    $data = $transaction->fetchAll(PDO::FETCH_ASSOC);

    return json_encode($data); 
}


// $produit = array(
//     "p" => array("name"=>"Jemima","number"=>"0974257002"),
//     "p" => array("name"=>"Jemima","number"=>"0974257002"),
// );

// foreach($produit as $key => $value)
// {
//     echo $value['name'];
// }

