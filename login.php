<?php include('cabecalho.php'); ?>

<!--<h1 id="paglogin">Página expecífica para administradores</h1>-->

<section>
    <form action="painel-administrativo/login-consulta.php" method="post">

        <div>
            <input type="text" placeholder="Usuário" name="usuario"/>
        </div>
        </br>
        <div>
            <input type="password" placeholder="Senha" name="senha" />
        </div>      
        </br>
        <div>
            <input type="submit" value="Login" />
        </div>

    </form>
</section>

<?php include('rodape.php'); ?>