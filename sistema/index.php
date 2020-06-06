<?php
    include "servicos/conexao.php";
    include "classes/Usuario.php";
    $usu = new Usuario($servidor,$usuario,$senha); 
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $lista_de_usuarios = $usu->listar_usuarios();
    echo "<pre>";
    print_r($lista_de_usuarios);
    echo "</pre>";
    ?>

    <table>
        <tr> 
            <td>id</td> 
            <td>nome</td>
            <td>email</td>
            <td>Senha</td>
        </tr>

        <?php
            if(count($lista_de_usuarios) > 0){// se existe registro
                for($i=0; $i < count($lista_de_usuarios);$i++){//For para lista de Vetor
                    echo "<tr>";
                        foreach($lista_de_usuarios[$i] as $valor){
                            echo"<td> $valor <td>";
                        }
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>
</html>