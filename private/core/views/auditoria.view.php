<?php include('includes/header.view.php'); ?>
<div class="header" id="header">
    <div class="group_img">
        <div class="logo_ath">
            <img src="<?= ROOT ?>/assets/style/img/ath.png" class="ath" alt="Logo_Athens">
        </div>
        <div class="logo_spt">
            <img src="<?= ROOT ?>/assets/style/img/spt.png" class="spt" alt="Logo_Sptrans">
        </div>
        <div class="user_menu">
            <div class="dropdown2">
                <button class="menu_user"><i class="bi bi-person-fill"></i>&nbsp;<?= Auth::user() ?>&nbsp;<b><i class="fa fa-angle-down"></i></b></button>
                <div class="dropdown-content2">
                    <a href="alterarsenha">Alterar Senha</a>
                    <a href="<?= ROOT ?>/logout">Sair</a>
                </div>
            </div>
        </div>
    </div>
    <div class="navigation_header" id="navigation_header">
        <button onclick="open_resp()" class="icon_btn">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" fill="currentColor" class="bi bi-box-arrow-in-up" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M3.5 10a.5.5 0 0 1-.5-.5v-8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 0 0 1h2A1.5 1.5 0 0 0 14 9.5v-8A1.5 1.5 0 0 0 12.5 0h-9A1.5 1.5 0 0 0 2 1.5v8A1.5 1.5 0 0 0 3.5 11h2a.5.5 0 0 0 0-1h-2z" />
                <path fill-rule="evenodd" d="M7.646 4.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1-.708.708L8.5 5.707V14.5a.5.5 0 0 1-1 0V5.707L5.354 7.854a.5.5 0 1 1-.708-.708l3-3z" />
            </svg>
        </button>
    </div>
</div>

<div tabindex="0" onclick="close_menu()" class="content2" id="content">
    <div class="contentRelatorios">
        <div class="auditoria">
            <i  class="bi bi-pass-fill"></i>
            <h3><a href="homeaud">Gratuidade</a></h3>
        </div>
        <div class="auditoria">
            <i class="bi bi-pass"></i>
            <h3><a href="auditoria/pagantes">Pagantes</a></h3>
        </div>
    </div>
</div>

<?php include('includes/footer.view.php'); ?>