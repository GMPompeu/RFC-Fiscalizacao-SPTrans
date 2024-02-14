<?php include('includes/header.view.php') ?>
<div class="header" id="header">
    <button onclick="open_resp()" class="icon_btn">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="20" fill="currentColor" class="bi bi-list-task" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M2 2.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5V3a.5.5 0 0 0-.5-.5H2zM3 3H2v1h1V3z" />
            <path d="M5 3.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM5.5 7a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9zm0 4a.5.5 0 0 0 0 1h9a.5.5 0 0 0 0-1h-9z" />
            <path fill-rule="evenodd" d="M1.5 7a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5V7zM2 7h1v1H2V7zm0 3.5a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h1a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5H2zm1 .5H2v1h1v-1z" />
        </svg>
    </button>
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
                    <a href="../alterarsenha">Alterar Senha</a>
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
        <a href="../auditoria" class="run">Voltar </a>
    </div>
</div>
<div tabindex="0" class="content" id="content">
    <div class="container">
        <div class="formulario">
            <form method="POST">
                <legend><b>Auditoria Pagantes</b></legend>
                <div class="inputBox2">
                    <label for="posto"><b>Posto</b></label>
                    <select name="unidades" class="selecao" id="unidades" required>
                        <option value=""></option>
                        <option value="AE CARVALHO">AE CARVALHO</option>
                        <option value="AGUA ESPRAIADA">AGUA ESPRAIADA</option>
                        <option value="AMARAL GURGEL">AMARAL GURGEL</option>
                        <option value="JARDIM ANGELA">JARDIM ANGELA</option>
                        <option value="ARICANDUVA">ARICANDUVA</option>
                        <option value="BANDEIRA">BANDEIRA</option>
                        <option value="CACHOEIRINHA">CACHOEIRINHA</option>
                        <option value="CAMPO LIMPO">CAMPO LIMPO</option>
                        <option value="CAPELINHA">CAPELINHA</option>
                        <option value="CARRÃO">CARRÃO</option>
                        <option value="CASA VERDE">CASA VERDE</option>
                        <option value="CIDADE TIRADENTES">CIDADE TIRADENTES</option>
                        <option value="GRAJAU">GRAJAU</option>
                        <option value="GUARAPIRANGA">GUARAPIRANGA</option>
                        <option value="JOÂO DIAS">JOÂO DIAS</option>
                        <option value="LAPA">LAPA</option>
                        <option value="MERCADO">MERCADO</option>
                        <option value="PARELHEIROS">PARELHEIROS</option>
                        <option value="PENHA">PENHA</option>
                        <option value="PIRITUBA">PIRITUBA</option>
                        <option value="PARQUE DOM PEDRO">PARQUE DOM PEDRO</option>
                        <option value="PRINCESA ISABEL">PRINCESA ISABEL</option>
                        <option value="SACOMA">SACOMÂ</option>
                        <option value="SANTO AMARO">SANTO AMARO</option>
                        <option value="SAO MIGUEL">SÃO MIGUEL</option>
                        <option value="SAPOPEMBA">SAPOPEMBA</option>
                        <option value="VARGINHA">VARGINHA</option>
                        <option value="VILA PRUDENTE">VILA PRUDENTE</option>
                        <output value="PINHEIROS">PINHEIROS</output>
                        <option value="PARADA ANA NERI">PARADA ANA NERI</option>
                        <option value="PARADA C.ATLETICO YPYRANGA">PARADA C.ATLETICO YPYRANGA</option>
                        <option value="PARADA DOM PEDROII">PARADA DOM PEDROII</option>
                        <option value="ALBERTO LION">ALBERTO LION</option>
                        <option value="PARADA GRITO">PARADA GRITO</option>
                        <option value="PARADA NSA.APARECIDA">PARADA NSA.APARECIDA</option>
                        <option value="JABAQUARA">JABAQUARA</option>
                        <option value="CENTRAL">CENTRAL</option>
                        <option value="RECEBEDORIA LAPA">RECEBEDORIA LAPA</option>
                        <option value="RECEBEDORIA SACOMÃ">RECEBEDORIA SACOMÃ</option>
                        <option value="RECEBEDORIA SAPOPEMBA">RECEBEDORIA SAPOPEMBA</option>
                        <option value="RECEBEDORIA GRAJAU">RECEBEDORIA GRAJAU</option>
                        <option value="RECEBEDORIA VARGINHA">RECEBEDORIA VARGINHA</option>
                    </select>
                </div>
                <div class="inputBox2">
                    <div>
                        <label for="dataVisita"><b>Data da Visita:</b></label>
                        <input type="date" name="dataVisita" id="data" class="obrigatorio" min="2023-01-01" required>
                        &nbsp;&nbsp;
                        <label for="hrChegada"><b>Horário Chegada:</b></label>
                        <input type="time" class="obrigatorio" name="hrChegada" id="hr" min="06:00" max="22:00" required>
                    </div>
                </div>
                <hr>
                <div class="inputBox2">
                    <div>
                        <label for="firstPront"><b>Auditor:</b></label>
                        <input type="text" name="firstPront" id="prontuario" class="obrigatorio" max="10" size="10" required>
                    </div>
                </div>
                <legend><b>----</b></legend>
                <div class="inputBox2">
                    <div>
                        <label for="firstPront"><b>Encarregado:</b></label>
                        <input type="text" name="firstPront" id="prontuario" class="obrigatorio" max="10" size="10" required>
                    </div>
                </div>
                <hr>
                <p><small>Todos estão com uniforme e crachá?</small></p>
                <div class="slide">
                    <label for="radio"><b>Uniforme/Crachá</b></label>
                    <input name="radio" type="checkbox" value="Sim" id="switch">
                </div>
                <div class="comentario" id="comentario">
                    <p><small>Anotar nome de quem não está com uniforme completo</small></p>
                    <textarea rows="8" class="coment" id="coment" name="coment" maxlength="500" placeholder="Digite..."></textarea>
                    <hr>
                </div>
                <div>
                    <p><small>Verificar a quantidade de municipes na fila</small></p>
                    <label for=""><b>Fila:</b></label>
                    <input type="number" min="0" max="100" id="fila" class="obrigatorio">
                </div>

                <div id="tempo" style="margin-top: 5%; display: none; flex-direction: column; align-items: center; text-align: center;">
                    <i style="font-size: 30px; background-color: #ffd000; color: white; border-radius: 5px; padding: 5px; " class="bi bi-stopwatch"></i>
                    <div style="margin-top: 5%;">
                        <p><small>Cronometrar o tempo médio de atendimento e o tempo médio de espera</small></p>
                        <label for=""><b>TMA</b></label><small>
                            <p>(Tempo médio de atendimento)</p>
                        </small>
                        <select id="time_numbers" class="obrigatorio">
                            <!-- Opções de 0 a 59 -->
                            <?php
                            for ($i = 0; $i <= 59; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                        <select id="hours_minutes_seconds">
                            <option value="Minutos">Minutos</option>
                            <option value="Segundos">Segundos</option>
                        </select>
                        <hr>
                        <label for=""><b>TME</b></label><small>
                            <p>(Tempo médio de espera)</p>
                        </small>
                        <select id="time_numbers" class="obrigatorio">
                            <!-- Opções de 0 a 59 -->
                            <?php
                            for ($i = 0; $i <= 59; $i++) {
                                echo "<option value='$i'>$i</option>";
                            }
                            ?>
                        </select>
                        <select id="hours_minutes_seconds">
                            <option value="Minutos">Minutos</option>
                            <option value="Segundos">Segundos</option>
                        </select>
                    </div>
                </div>
                <hr>
                <div class="inputBox2">
                    <div>
                        <p><small>Verificar a quantidade de atendentes na triagem</small></p>
                        <label for=""><b>Triagem:</b></label>
                        <input type="number" min="0" max="5" id="fila" class="obrigatorio">
                    </div>
                </div>
                <legend><b>Guichês</b></legend>
                
            </form>
        </div>
    </div>
</div>

<script>
    const checkbox = document.getElementById('switch');
    const comentario = document.getElementById('comentario');
    const comentArea = document.getElementById("coment");

    checkbox.addEventListener('change', function() {
        if (this.checked) {
            this.value = "Nao"
            comentario.style.display = 'block';
            comentArea.setAttribute('required', true);

        } else {
            this.value = "Sim"
            comentario.style.display = 'none';
            comentArea.removeAttribute('required');
            
        }
    });

    const TmaTme = document.getElementById('fila');
    const tempo = document.getElementById('tempo');
    const hr = document.getElementById('hours_minutes_seconds');
    const time = document.getElementById('time_numbers');

    TmaTme.addEventListener('input', function() {
        if (this.value > 0) {
            tempo.style.display = 'block';
            hr.setAttribute('required', true);
            time.setAttribute('required', true);
        } else {
            tempo.style.display = 'none';
            hr.removeAttribute('required');
            time.removeAttribute('required');
        }
    });
</script>

<style>
    .comentario {
        display: none;
    }

    .coment {
        width: 100%;
        font-size: 14px;
        resize: none;
    }

    .slide {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .slide label {
        margin-right: 10px;
    }

    input[type="checkbox"] {
        appearance: none;
        width: 50px;
        height: 30px;
        background-color: #21a11d;
        border-radius: 50px;
        position: relative;
        cursor: pointer;
        transition: .3s;
    }

    input[type="checkbox"]::before {
        content: "";
        position: absolute;
        width: 28px;
        height: 28px;
        background-color: white;
        border-radius: 50%;
        left: 2px;
        top: 1px;
        transition: .3s;
    }

    input[type="checkbox"]::after {
        content: "Sim";
        position: absolute;
        color: #21a11d;
        font-size: 12px;
        left: 5px;
        top: 50%;
        transform: translateY(-50%);
        transition: .3s;
    }

    input[type="checkbox"]:checked {
        background-color: #ba1e1e;
    }

    input[type="checkbox"]:checked::before {
        background: white;
        left: 20px;
    }

    input[type="checkbox"]:checked::after {
        content: "Não";
        color: #ba1e1e;
        left: 23px;
    }
</style>

<?php include('includes/footer.view.php') ?>