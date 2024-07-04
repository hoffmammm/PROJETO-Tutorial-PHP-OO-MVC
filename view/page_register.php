<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Udemy</title>

    <link rel="shortcut icon" href="../resources/favicon.png" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet"/>
</head>
<style type="text/css">
body {
    margin: 20px;
    background-color: #ffffff,
}
*{
    font-family: 'Open Sans', sans-serif;
}
h2 {
    font-family: 'Open Sans', sans-serif;
}
.thead {
    background-color: #f7f7f7;
}
</style>
<body>
<div class="container">
    <h2 class="py-5 text-center">Novo Usuário </h2>
    <form method="POST" action="../controller/insert_client.php"> 
    <div class="row g-3">
     <div class="col-md-6">
         <label for="name" class="form-label">Nome <i class="bi bi-person"></i> </label>
         <input type="text" class="form-control" name="name" required autofocus>
     </div>

     <div class="col-md-6">
         <label for="email" class="form-label">E-mail <i class="bi bi-envelope"></i> </label>
         <input type="email" class="form-control" name="email" required autofocus>
     </div>

     <div class="col-md-4">
         <label for="cpf" class="form-label">CPF <i class="bi bi-credit-card-2-front"></i> </label>
         <input type="text" class="form-control" name="cpf" required autofocus>
     </div>

     <div class="col-md-4">
         <label for="birth" class="form-label">Dt. de Nascimento <i class="bi bi-calendar"></i> </label>
         <input type="date" class="form-control" name="birth" required autofocus>
     </div>

     <div class="col-md-4">
         <label for="phone" class="form-label">Nome <i class="bi bi-whatsapp"></i> </label>
         <input type="text" class="form-control" name="phone" required autofocus>
     </div>

     <hr class="my-4">

     <div class="col-md-12 text-end">
         <label for="address" class="form-label">Nome <i class="bi bi-map"></i> </label>
         <input type="text" class="form-control" name="address" required autofocus>
     </div>
    </div>
    </form>
</div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
</body>
</html>