<?php
# NOTA: O FORMULÁRIO UTILIZADOR ESTÁ SENDO USADO PARA CRIAÇÃO E ALTERAÇÃO DE UTILIZADORES
# PARA ISSO FUNCIONAR, EXISTE UM TRATAMENTO VIA GET/REQUEST ALTERANDO O VALOR DO BOTÃO DE NOME name="utilizador" 

# CARREGA MIDDLEWARE PAGARA GARANTIR QUE APENAS UTILIZADORES ACESSE O SITIO
require_once __DIR__ . '/../../middleware/middleware-utilizador.php';

# CARREGA O CABECALHO PADRÃO COM O TÍTULO
$titulo = ' - Utilizador';
//require_once __DIR__ . '/templates/cabecalho.php';
?>

<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

</head>

<body class="container bg-light">
  <div class="pt-1 ">
    <div class="p-5 mb-2 bg-info text-white">
      <h1>Registo de Utilizadores</h1>
      <p>CRUD | Front-end Bootstrap | Back-end PHP</p>
    </div>
    <main class="bg-light">
      <section class="py-4">
        <a href="../Admin/index.php"><button type="button" class="btn btn-secondary px-5">Voltar</button></a>
      </section>
      <section>
        <?php
        # MOSTRA AS MENSAGENS DE SUCESSO E DE ERRO VINDA DO CONTROLADOR-UTILIZADOR
        if (isset($_SESSION['sucesso'])) {
          echo '<div class="alert alert-success alert-dismissible fade show" role="alert">';
          echo $_SESSION['sucesso'] . '<br>';
          echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>';
          unset($_SESSION['sucesso']);
        }
        if (isset($_SESSION['erros'])) {
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">';
          foreach ($_SESSION['erros'] as $erro) {
            echo $erro . '<br>';
          }
          echo '<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>';
          unset($_SESSION['erros']);
        }
        ?>
      </section>
      <section class="pb-4">
        <form enctype="multipart/form-data" action="../../Controladores/controlar-utilizador.php" method="post" class="form-control py-3">
          <div class="input-group mb-3">
            <span class="input-group-text">Nome</span>
            <input type="text" class="form-control" name="nome" maxlength="100" size="100" value="<?= isset($_REQUEST['nome']) ? $_REQUEST['nome'] : null ?>" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Apelido</span>
            <input type="text" class="form-control" name="apelido" maxlength="100" size="100" value="<?= isset($_REQUEST['apelido']) ? $_REQUEST['apelido'] : null ?>" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">NIF</span>
            <input type="tel" class="form-control" name="nif" maxlength="9" size="9" value="<?= isset($_REQUEST['nif']) ? $_REQUEST['nif'] : null ?>" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Telemóvel</span>
            <input type="tel" class="form-control" name="telemovel" maxlength="9" value="<?= isset($_REQUEST['telemovel']) ? $_REQUEST['telemovel'] : null ?>" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">E-mail</span>
            <input type="email" class="form-control" name="email" maxlength="255" value="<?= isset($_REQUEST['email']) ? $_REQUEST['email'] : null ?>" required>
          </div>
          <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Foto de Perfil</label>
            <input accept="image/*" type="file" class="form-control" id="inputGroupFile01" name="foto" />
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Palavra Passe</span>
            <input type="password" class="form-control" name="palavra_passe" maxlength="255">
          </div>
          <div class="input-group mb-3">
            <div class="form-check form-switch mb-3">
              <input class="form-check-input" type="checkbox" name="administrador" role="switch" id="flexSwitchCheckChecked" <?= isset($_REQUEST['administrador']) && $_REQUEST['administrador'] == true ? 'checked' : null ?>>
              <label class="form-check-label" for="flexSwitchCheckChecked">Administrador</label>
            </div>
          </div>
          <div class="d-grid col-4 mx-auto">
            <input type="hidden" name="id" value="<?= isset($_REQUEST['id']) ? $_REQUEST['id'] : null ?>">
            <input type="hidden" name="foto" value="<?= isset($_REQUEST['foto']) ? $_REQUEST['foto'] : null ?>">
            <button type="submit" class="btn btn-success" name="utilizador" <?= isset($_REQUEST['acao']) && $_REQUEST['acao'] == 'atualizar' ? 'value="atualizar"' : 'value="criar"' ?>>Enviar</button>
          </div>
        </form>
      </section>
    </main>
    <script src="https://kit.fontawesome.com/f3e7e2778c.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <?php
    ?>