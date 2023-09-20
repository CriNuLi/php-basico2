<?php /*Aqui é quando eu abro a tag php, uso obrigatorio*/
if(!empty($_POST)){   
 
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];

    echo $nome."<br>".$idade;

     if($idade>=18){
         echo "<h2>Maior de idade</h2>";
     }else{
         echo "<h2>Menor de idade</h2>";
    }

}else{
    header('location:form1.html');
}

echo "<h2>Fim do Script!!!</h2>"

/*esse é o sinal de como fecha a tag */
?>