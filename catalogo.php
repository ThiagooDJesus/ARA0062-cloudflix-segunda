<!DOCTYPE html>
<html lang="pt-BR">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" type="text/css" href="./css/style.css">
   <title>Document</title>
   <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">

</head>

<body>


   <header>
      <h1> Cloudflix o seu catalogo ficticio de filmes</h1>
   </header>
  
   <?php include "nav.php"; ?>

   <main>
      <h2> Catalago de filmes</h2>
      <p>
         Procure pelo filme que deseja </p>

      <table border="1" id="tabela-catalogo">

         <thead>

            <tr>

               <th>Cartaz</th>

               <th>Título</th>

               <th>Gênero</th>

            </tr>

         </thead>

         <tbody id="corpo-tabela-filmes">

         </tbody>

      </table>

   </main>


   <footer>

    <?php include "footer.php"; ?>

 <script src="js/catalogo.js"></script>
<script src="js/tema.js"></script>

</body>

</html>