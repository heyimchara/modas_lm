<?php

function conn() {
    $cnx = mysqli_connect("localhost", "root", "", "basemodaslm");
    if (!$cnx) die('Deu errado a conexao!');
    return $cnx;
}