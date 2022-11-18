<?php include('cabecalho.php'); ?>

<!--<h1 id="paglogin">Página expecífica para administradores</h1>-->

<section class = "boxLogin container">
    <form  class= "login" action="painel-administrativo/login-consulta.php" method="post">

        <h1>Página expecífica para administradores</h1>

        <div class= "nome">
            <input type="text" placeholder="Usuário" name="usuario"/>
        </div>
        </br>  
        <div class= "password">
            <input type="password" placeholder="Senha" name="senha" />
        </div>      
        </br>
        <a href="#"><div class="button">Sign In</div></a> 

    </form>
</section>

<?php include('rodape.php'); ?>