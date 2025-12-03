<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Criar Chamado</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="css/chamado.css">
</head>
<body>
  <div class="container py-4">
    <header class="d-flex align-items-center mb-3">
      <div class="logo d-flex align-items-center gap-2 text-white me-auto">
        <h3 class="m-0">Você entrou!</h3>
        <div class="avatar-icon-small d-flex justify-content-center align-items-center bg-black rounded-circle">
          <svg width="24" height="24" fill="white" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
            <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
          </svg>
        </div>
      </div>
 
      <?php
      session_start();
      if (isset($_SESSION['id_usuario'])) {
        $nome_usuarios = $_SESSION['nm_usuario'];
        echo "Boa ". $nome_usuarios;
 
 
      }else {
 
 
        echo "<script> alert('Você não está logado!') history.back(); </script>";
 
 
      }  
      ?>
 
       <nav class="menu-lateral">
        <ul class="nav1 nav-pills gap-2">
          
          <li class="nav-item"><a href="chamado.php" class="nav-link active">Recaregar pag</a></li>
          
          <li class="nav-item"><a href="casa.php" class="nav-link">Voltar</a></li>
        </ul>
      </nav>
    </header>
 
    <form>
  <nav class="menu-lateral1">
      <div class="row mb-3">
        <div class="col-md-3">
          <label for="tipo" class="form-label fw-bold">tipo</label>
          <select id="tipo" name="tipo" class="form-select">
            <?php
            include 'php/conexao.php';
            $select = "SELECT * FROM tb_tipo";
            $query = $conexao-> query($select);
            while ($resultado = $query->fetch_assoc()){?>
 
            <option value="id_tipo"><?php echo $resultado['nm_tipo'] ?></option>
 
            <?php }?>
 
 
          </select>
        </div>
        <div class="col-md-3">
          <label for="categoria" class="form-label fw-bold">categoria</label>
          <select id="categoria" name="categoria" class="form-select">
          <?php
            include 'php/conexao.php';
            $select = "SELECT * FROM tb_categoria";
            $query = $conexao-> query($select);
            while ($resultado = $query->fetch_assoc()){?>
 
            <option value="id_tipo"><?php echo $resultado['nm_categoria'] ?></option>
 
            <?php }?>
 

 
 
          </select>
 
        </div>
        <div class="col-md-3">
          <label for="urgencia" class="form-label fw-bold">Urgencia</label>
          <select id="urgencia" name="urgencia" class="form-select">
          <?php
            include 'php/conexao.php';
            $select = "SELECT * FROM tb_urgencia";
            $query = $conexao-> query($select);
            while ($resultado = $query->fetch_assoc()){?>
 
            <option value="id_urgencia"><?php echo $resultado['nm_urgencia'] ?></option>
 
            <?php }?>
 
 
 
        
 
          </select>
        </div>
        <div class="col-md-3">
          <label for="titulo" class="form-label fw-bold">Título</label>
          <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Título do chamado" />
        </div>
      </div>
 
      <div class="mb-3">
        <label for="descricao" class="form-label fw-bold">Descrição</label>
        <textarea id="descricao" name="descricao" class="form-control" rows="5" placeholder="Descreva o problema..."></textarea>
      </div>
 
      <div class="text-end">
        <button type="submit" class="btn btn-success btn-lg rounded-circle"><svg xmlns="http://www.w3.org/2000/svg" width="20" 
        height="20" fill="green" class="bi bi-arrow-right" viewBox="0 0 16 16"><path fill-rule="evenodd" d="M10.146 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L12.293 8 10.146 5.854a.5.5 0 0 1 0-.708z"/><path fill-rule="evenodd" d="M2 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 2 8z"/></svg></button>
      </div>
    </form>
  </div>
  </nav>
 
 
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>