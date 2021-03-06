<?php
require_once('functions.php');
add();
//Essa Função faz com que seja recuperada todas as informaçoes dentro da tabela categorias.
//listaCategorias();
?>

<?php include(HEADER_TEMPLATE); ?>

    <h2>Novo Autor</h2>

    <form action="add.php" method="post">
        <!-- area de campos do form -->
        <hr/>
        <div class="row">
            <div class="form-group col-md-7">
                <label for="nome">Nome / Razão Social</label>
                <input type="text" class="form-control" name="customer['nome']">
            </div>

            <div class="form-group col-md-3">
                <label for="campo2">CPF</label>
                <input type="text" placeholder="012.345.678-99" class="form-control" name="customer['cpf_cnpj']">
            </div>

            <div class="form-group col-md-2">
                <label for="campo3">Data de Nascimento</label>
                <input type="text" class="form-control" placeholder="AAAA-MM-DD" name="customer['birthdate']">
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-5">
                <label for="campo1">Endereço</label>
                <input type="text" class="form-control" name="customer['address']">
            </div>

            <div class="form-group col-md-3">
                <label for="campo2">Bairro</label>
                <input type="text" class="form-control" name="customer['hood']">
            </div>

            <div class="form-group col-md-2">
                <label for="campo3">CEP</label>
                <input type="text" class="form-control" name="customer['zip_code']">
            </div>

            <div class="form-group col-md-2">
                <label for="campo3">Data de Cadastro</label>
                <input type="text" class="form-control" name="customer['created']" disabled>
            </div>
        </div>

        <div class="row">
            <div class="form-group col-md-3">
                <label for="campo1">Município</label>
                <input type="text" class="form-control" name="customer['city']">
            </div>

            <div class="form-group col-md-2">
                <label for="campo2">Telefone</label>
                <input type="text" class="form-control" name="customer['phone']">
            </div>

            <div class="form-group col-md-2">
                <label for="campo3">Celular</label>
                <input type="text" class="form-control" name="customer['mobile']">
            </div>

            <div class="form-group col-md-1">
                <label for="campo3">UF</label>
                <input type="text" class="form-control" name="customer['state']">
            </div>

            <div class="form-group col-md-2">
                <label for="campo3">Inscrição Estadual</label>
                <input type="text" class="form-control" name="customer['ie']">
            </div>

            <!-- <div class="form-group col-md-4">
    <label>Categoria</label>
    <select class="selectpicker">
      <?php /*foreach ($categorias as $categoria) : */ ?>
       <option value="<?php /*echo $categoria['id']*/ ?>" > <? /*= $categoria['nome'] */ ?> </option>
    <?php /*endforeach */ ?></select>
    </div>-->
        </div>

        <div id="actions" class="row">
            <div class="col-md-12">
                <button type="submit" name="cadastrar" class="btn btn-primary">Salvar</button>
                <a href="index.php" class="btn btn-default">Cancelar</a>
            </div>
        </div>
    </form>
<?php include(FOOTER_TEMPLATE); ?>