<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css"  href="./css/style.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</head>
<body>

     
    <header> 
        <h1> Cloudflix o seu catalogo ficticio de filmes</h1>     </header>
    
     <?php include "nav.php"; ?>

     <main>
        <h2>Serviço de atendimento ao cliente</h2>
         <p> entre em contato enviando uma mensagem para a equipe do site</p>
        <form action="#" method="post">
           <label for="id_nome">Nome do cliente</label><br><input type="text" name="nome" id="id_nome" maxlength="10">   <br><br>
           
           <label for="id_email">Email do cliente</label><br>
           <input type="text" name="email" id="id_email" maxlength="50">   <br><br>


           <label for="id_mensagem">Mensagem:</label><br>
           
           <textarea name="mensagem" id="id_mensagem" maxlength="10"></textarea><br><br>
           <button type="submit">Enviar</button>
        </form>
      </main>



  <?php include "footer.php"; ?>

   <script src="./JS/script.js" type="text/JavaScript"> </script>
   <script src="js/tema.js"></script>

</body>

</html>