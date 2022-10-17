<?php
/* Smarty version 4.2.1, created on 2022-10-17 21:32:17
  from 'C:\xampp\htdocs\web2\TP_ESPECIAL\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_634dadc15e5201_64474952',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3371a3245cf7355d29a767a833037f5570b2ccc5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\web2\\TP_ESPECIAL\\templates\\header.tpl',
      1 => 1665987308,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_634dadc15e5201_64474952 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">

    <head>
        <base href="<?php echo BASE_URL;?>
">
        
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
                  <?php if (!(isset($_SESSION['USER_ID']))) {?>
                  <?php } else { ?> 
                    <li class="nav-item ml-auto">
                      <a class="nav-link" aria-current="page" href="logout">Logout (<?php echo $_SESSION['USER_EMAIL'];?>
)</a>
                    </li>
                  <?php }?>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div> 
    </header>
    
    <!-- inicio main container -->
    <main class="fondo"><?php }
}
