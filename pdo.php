<?php
    
        $servername = "fdb17.biz.nf";
        
        $database = "3229176_purosabor";
        
        $username = "3229176_purosabor";
        
        $password = "purosabor123";
        
        // Create connection
        
        $conn = mysqli_connect($servername, $username, $password, $database);
        
        // Check connection
        
         $nome = $_REQUEST['nome']; 
         
         $telefone = $_REQUEST['telefone'];
         
         $descricao = $_REQUEST['descricao'];
         
         $string_sql = "INSERT INTO reserva (nome,telefone,descricao) VALUES ('$nome','$telefone','$descricao')";
        
         $res = $conn->query($string_sql);
        
         header("Location: http://purosabor.c1.biz/facasuareserva.html");
"
          // if ($res==true){
          //              print '<h3 style='width: 300px; height:300px; border-radius: 6px; background-color: RED;'>RESERVA ENVIADA COM SUCESSO, LOGO ENTRAREMOS EM CONTATO!!!</h3>";
         //       }
         //  else {
        //     print 'FALHA';
      //          }
      
         mysqli_close($conn);
  
 
?>         
        
        
       