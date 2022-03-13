<?php

include('db_connection.php');

if(isset($_POST['btn_value'])){

    $get = $conn->query('Select * from  click_counts where id=1')->fetch_assoc();
    
    
    if($_POST['btn_value'] == "book_my_show"){
        $book_my_show = $get['book_my_show']+1;
        $conn->query("UPDATE `click_counts` SET `book_my_show`= ".$book_my_show." WHERE id=1");
    }else if($_POST['btn_value'] == "idamoss"){

        $idamoss = $get['idamoss']+1;
        $conn->query("UPDATE `click_counts` SET `idamoss`=".$idamoss." WHERE id=1");

    }elseif($_POST['btn_value'] == "madvides"){
        $madvides = $get['madvides']+1;
        $conn->query("UPDATE `click_counts` SET `madvides`=".$madvides." WHERE id=1");

    }
    
    
    echo 'success';
}