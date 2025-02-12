<?php
# CARREGA MIDDLEWARE PARA GARANTIR QUE APENAS UTILIZADORES AUTENTICADOS ACESSEM ESTE SITIO
require_once __DIR__ . '../../../middleware/middleware-utilizador.php';

# CARREGA O CABEÇALHO PADRÃO COM O TÍTULO
$titulo = ' - Perfil';
//include_once __DIR__ . '/templates/cabecalho.php';

# ACESSA DE FUNÇÕES AUXILIADORAS. 
# NOTA: O SÍMBOLO ARROBA (@) SERVE PARA NÃO MOSTRAR MENSAGEM DE WARNING, POIS A FUNÇÃO ABAIXO TAMBÉM INICIA SESSÕES
@require_once __DIR__ . '../../../auxiliadores/auxiliador.php';
$utilizador = utilizador();
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
        <div class="d-flex justify-content">
          <a href="../Index/index.php"><button type="button" class="btn btn-secondary px-5 me-2">Voltar</button></a>
          <a href="../AlterPP/palavra-passe.php"><button class="btn btn-warning px-2 me-2">Alterar Palavra Passe</button></a>
        </div>
      </section>
      <section>
        <?php

        # MOSTRA AS MENSAGENS DE SUCESSO E DE ERRO VINDA DO CONTROLAR-UTILIZADOR

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
      <section>
        <form enctype="multipart/form-data" action="../../Controladores/controlar-utilizador.php" method="post" class="form-control py-3">
          <div class="input-group mb-3">
            <span class="input-group-text">Nome</span>
            <input type="text" class="form-control" name="nome" placeholder="nome" maxlength="100" size="100" value="<?= isset($_REQUEST['nome']) ? $_REQUEST['nome'] : $utilizador['nome'] ?>" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Apelido</span>
            <input type="text" class="form-control" name="apelido" maxlength="100" size="100" value="<?= isset($_REQUEST['apelido']) ? $_REQUEST['apelido'] : $utilizador['apelido'] ?>" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">NIF</span>
            <input type="tel" class="form-control" name="nif" maxlength="9" size="9" value="<?= isset($_REQUEST['nif']) ? $_REQUEST['nif'] : $utilizador['nif'] ?>" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">Telemóvel</span>
            <input type="tel" class="form-control" name="telemovel" maxlength="9" value="<?= isset($_REQUEST['telemovel']) ? $_REQUEST['telemovel'] : $utilizador['telemovel'] ?>" required>
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text">E-mail</span>
            <input type="email" class="form-control" name="email" maxlength="255" value="<?= isset($_REQUEST['email']) ? $_REQUEST['email'] : $utilizador['email'] ?>" required>
          </div>
          <div class="input-group mb-3">
            <label class="input-group-text" for="inputGroupFile01">Foto de Perfil</label>
            <input accept="image/*" type="file" class="form-control" id="inputGroupFile01" name="foto" />
          </div>
          <div class="d-grid col-4 mx-auto">
            <button class="w-100 btn btn-lg btn-success mb-2" type="submit" name="utilizador" value="perfil">Alterar</button>
          </div>
        </form>
      </section>
  </div>
  </main>
  <script src="https://kit.fontawesome.com/f3e7e2778c.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

  <?php
  include_once __DIR__ . '../../nf/footer.php';
  ?>