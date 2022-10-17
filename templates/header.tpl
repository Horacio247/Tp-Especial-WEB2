<!DOCTYPE html>
<html lang="en">

    <head>
        <base href="{BASE_URL}">
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <title>TP_WEB2</title>
</head>

<body>
    <header>
      <div class="container-logo"<
        <h1 class="titular">**DESTINOS ONLINE**</h1>
        <img src="./images/fondoOnda.jpg" alt="Logo destino online">
      <div/>

        <div class="container-nav">
          <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="home">HOME</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="vendedor">Vendedor</a>
                  </li>
                  
                  <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="administrador">Administrador</a>
                  {if !isset($smarty.session.USER_ID)}
                  {else} 
                    <li class="nav-item ml-auto">
                      <a class="nav-link" aria-current="page" href="logout">Logout ({$smarty.session.USER_EMAIL})</a>
                    </li>
                  {/if}
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div> 
    </header>
    
    <!-- inicio main container -->
    <main class="fondo">