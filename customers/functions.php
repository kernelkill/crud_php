<?php

require_once('../config.php');
require_once(DBAPI);

$customers = null;
$customer = null;


/**
 *  Listagem de Clientes
 */
function index() {
    global $customers;
    $customers = find_all('customers');
}

//Aqui começa a acessar a tabela Categorias
//$categorias = null; //Essa variavel tem relação com o nome da tabela.
//$categoria = null;  //Essa Variavel é atribuida 1 unica categoria.

//Nada de auteraçao aqui
//Fazendo Teste

/**
 *Listagem de Categorias
 *
 */
/*function listaCategorias()
{
    global $categorias;
    $categorias = find_all('categorias');
}

function viewLista($id = null)
{
    global $categoria;
    $categoria = find('categorias', $id);
}*/


/**
 *  Listagem de Clientes
 */
<<<<<<< HEAD
=======
function index()
{
    global $customers;
    $customers = find_all('customers');
    //Ele lista aqui toda a tabela.
}
>>>>>>> 2c5e6f5fe5f443062121b8a373674e6bc22038c7


/**
 *  Visualização de um Cliente
 */
function view($id = null)
{
    global $customer;
    $customer = find('customers', $id);
<<<<<<< HEAD

=======
    //E aqui ele tras por ID.
>>>>>>> 2c5e6f5fe5f443062121b8a373674e6bc22038c7
}

/**
 *  Cadastro de Clientes
 */
function add()
{

    if (!empty($_POST['customer'])) {

        $today =
            date_create('now', new DateTimeZone('America/Sao_Paulo'));
        $customer = $_POST['customer'];
        $customer['modified'] = $customer['created'] = $today->format("Y-m-d H:i:s");

        save('customers', $customer);
        header('location: add.php');
    }
}

/**
 *    Atualizacao/Edicao de Cliente
 */
function edit()
{
    $now = date_create('now', new DateTimeZone('America/Sao_Paulo'));
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        if (isset($_POST['customer'])) {
            $customer = $_POST['customer'];
            $customer['modified'] = $now->format("Y-m-d H:i:s");
            update('customers', $id, $customer);
            header('location: index.php');
        } else {
            global $customer;
            $customer = find('customers', $id);
        }
    } else {
        header('location: index.php');
    }
}

/**
 *  Exclusão de um Cliente
 */
function delete($id = null)
{
    global $customer;
    $customer = remove('customers', $id);
    header('location: index.php');
}