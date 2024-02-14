<?php include('includes/header.view.php'); ?>
<div class="cadastrar">
    <form method="POST">
        <h3>Registrar Usuário</h3>
        <hr>

        <?php if (count($error) > 0) : ?>

            <div class="alertcadastro" role="alert">
                <strong>Error</strong>
                <br><b>Por favor conferir os dados</b>
                <?php foreach ($error as $error) : ?>
                    <br><?= $error ?><br>

                <?php endforeach; ?>
            </div>

        <?php endif; ?>
        <input type="text" class="cadastrar1" name="nom_usuario" placeholder="Nome Usuário" required>
        <br><br>
        <input type="text" class="cadastrar1" name="chapa" placeholder="Prontuário Usuário" required>
        <br><br>
        <input type="email" class="cadastrar1" name="usuario_email" placeholder="Email do Usuário" required>
        <br><br>
        <input type="password" class="cadastrar1" name="senha" placeholder="Digite a senha" required>
        <br><br>
        <input type="password" class="cadastrar1" name="senha2" placeholder="Digite a senha novamente" required>
        <br><br>
        <select name="nivel_acesso" class="cadastrar1" required>
            <?php if (Auth::acess() == 5) { ?>

                <option value="" disabled selected>Nivel de acesso</option>
                <option value="1">Acesso Fiscalizações</option>
                <option value="2">Acesso Gestor Fiscalização</option>
                <option value="3">Acesso Geral -[ATHENS]</option>
                <option value="4">Acesso Geral -[SPTrans]</option>
                <option value="5"> Administração</option>

            <?php } elseif (Auth::acess() == 4 || Auth::acess() == 3) { ?>

                <option value="" disabled selected>Nivel de acesso</option>
                <option value="1">Acesso Fiscalizações</option>
                <option value="2">Acesso Gestor Fiscalização</option>
                <option value="3">Acesso Geral -[ATHENS]</option>
                <option value="4">Acesso Geral -[SPTrans]</option>

            <?php } elseif (Auth::acess() == 2) { ?>

                <option value="" disabled selected>Nivel de acesso</option>
                <option value="1">Acesso Fiscalizações</option>
                <option value="2">Acesso Gestor Fiscalização</option>

            <?php } ?>
        </select>
        <br><br>
        <button class="send_cad">cadastrar</button>
        <a href="<?= ROOT ?>/home" class="cancelar">Cancelar</a>
    </form>
</div>

<?php include('includes/footer.view.php'); ?>