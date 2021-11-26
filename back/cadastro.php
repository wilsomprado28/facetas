<?php 

include ('../conexao/conexao.php');


$nome          = $_POST['nome'];
$data          = $_POST['data'];
$forma         = $_POST['forma'];
$palfique      = $_POST['palfique'];
$adesivo       = $_POST['adesivo'];
$ajustes       = $_POST['ajustes'];
$observacao    = $_POST['observacao'];
$elemento      = $_POST['elemento'];

$sql = "INSERT INTO `pacientes`
                               (`id`, `nome`, `data`, `forma`, `palfique`, `adesivo`, `ajustes`, `observacao`, `elemento `)
            VALUES 
                  
                               (NULL,'$nome','$data','$forma','$palfique','$adesivo','$ajustes','$observacao','$elemento ')";
    
$query = mysqli_query($con, $sql);
if(!$query) {
    echo 'erro'.mysqli_error($con);
    //header('Location: ../views/artigos.php');
  
} else {
    header("Location: ../cadastro.php?sucesso=sucesso");
}

mysqli_close($con);



?>