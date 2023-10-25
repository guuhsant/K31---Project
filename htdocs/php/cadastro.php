<?php
    include('conexao.php');
    $nome = $_POST['nome'];
    $ra = $_POST['ra'];
    $today = date("Y-m-d");


    $sql ="insert into tb_aluno (nm_nome,cd_ra, dt_nasc) values (:nm_nome, :cd_ra, :today)";
    $query = $pdo->prepare($sql);
    $query->bindValue(":nm_nome", $nome);
    $query->bindValue(":cd_ra", $ra);
    $query->bindValue(":today", $today);



    $query->execute();
    print_r($query->errorInfo());


?>