

<?php 

    include_once("config/url.php");
    include_once("config/process.php");




    // Limpando a mensagem. Vou criar uma variavel com a printMsg / Assim dessa maneira quando recarregar a página não terá mais mensagem de sessão.


    if(isset($_SESSION['msg'])) {

        $printMsg = $_SESSION['msg'];              // criei a variavel $printMsg para inserir lá no meu html

        $_SESSION['msg'] = '';                     // limpando e assim quando recarregar a página não tem mais mensagem de sessão 
    }




?>



<!DOCTYPE html>                                                                         

<html lang="pt-br">                                                                    
                                                                                       

    <head>                                                                              

        <meta charset="utf-8">                                                          
        <title>Agenda de Contatos PW22</title>                                                                                                               
        <meta name="viewport" content="width=device-width, initial-escale=1.0">  

        <!-- BIBLIOTECA BOOTSTRAP -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.2/css/bootstrap.min.css" integrity="sha512-CpIKUSyh9QX2+zSdfGP+eWLx23C8Dj9/XmHjZY2uDtfkdLGo0uY12jgcnkX9vXOgYajEKb/jiw67EYm+kBf+6g==" crossorigin="anonymous" referrerpolicy="no-referrer" />  

        <!-- FONT AWESOME (fontes de ícones para nosso projeto Agenda / olho, icone de editar, o X que vamos ter no projeto) -->

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 


        <!-- CSS : Estilo do Projeto Agenda -->

        <link rel="stylesheet" type="text/css" href="<?= $BASE_URL ?>css/style.css"> 
                
    </head> 

     <body>


        <header>                                                                        
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">                
                <a class="navbar-brand" href="<?= $BASE_URL ?>index.php">               
                    <img src="<?= $BASE_URL ?>img/agenda.png" alt="Agenda PW22">        
                </a>  
                   <div>                                                                                                    
                        <div class="navbar-nav">
                            <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>index.php">Agenda</a>                     
                            <a class="nav-link active" href="<?= $BASE_URL ?>create.php">Adicionar Contato</a>         
                        </div>
                   </div> 

            </nav>                                                                        
        </header>




