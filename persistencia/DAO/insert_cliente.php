<?php
/**
 * Created by PhpStorm.
 * User: kachorroski
 * Date: 15/01/17
 * Time: 18:01
 */

require_once("../../conecta/config.php");
require_once("../jdbc/ConexaoFactory.php");

$nome      = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$endereco  = $_POST['endereco'];
$email     = $_POST['email'];


echo $nome."<br/>";
echo $sobrenome."<br/>";
echo $endereco."<br/>";
echo $email."<br/>";

