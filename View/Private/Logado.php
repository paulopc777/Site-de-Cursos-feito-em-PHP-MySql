<!DOCTYPE html>
<html lang="en">
<?php

if ($_SERVER["REQUEST_URI"] == '/View/Private/Logado.php') {
    require_once('../../Controller/SessionControll/Session.php');
} else {
    require_once('Controller/SessionControll/Session.php');
}
$check = new Sension();
$result = $check->Verify();
if ($result === null) {
    header("Location: http://localhost:80/Login");
    exit('');
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de usuário logado</title>
    <link rel="stylesheet" href="/Public/css/Logado.css">
    <link rel="stylesheet" href="/Public/css/tolltip.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
</head>

<body>

    <main>
        <div class="fundo-User">
            <form method="post" action="." enctype="multipart/form-data">
                <div class="User-img">
                    <input type="file" name="imagem" id="fileInput" onchange="exibirTexto()">
                    <?php
                    require_once('View/Components/Menu/renderimg.php')
                    ?>
                    <div id="textoExibido" style="display: none;">
                        <p>Foto Carregada</p>
                    </div>
                </div>
                <div class="name">
                    <?php
                    require_once('View/Components/inputUser.php');
                    ?>
                    <button type="submit" title="Enviar alteraçoes">
                        <svg width="20" height="20" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path id="Vector" d="M4.5 24.0017H10.86C11.0574 24.0029 11.2531 23.9651 11.4359 23.8904C11.6186 23.8158 11.7848 23.7058 11.925 23.5669L22.305 13.1749L26.565 9.00609C26.7056 8.86668 26.8172 8.70083 26.8933 8.51809C26.9695 8.33536 27.0087 8.13936 27.0087 7.9414C27.0087 7.74343 26.9695 7.54743 26.8933 7.3647C26.8172 7.18196 26.7056 7.01611 26.565 6.8767L20.205 0.443569C20.0656 0.303017 19.8997 0.191458 19.7169 0.115327C19.5341 0.039196 19.338 0 19.14 0C18.942 0 18.7459 0.039196 18.5631 0.115327C18.3803 0.191458 18.2144 0.303017 18.075 0.443569L13.845 4.68734L3.435 15.0793C3.29598 15.2194 3.18599 15.3856 3.11134 15.5683C3.0367 15.751 2.99886 15.9467 3 16.144V22.5022C3 22.8999 3.15804 23.2813 3.43934 23.5625C3.72064 23.8438 4.10218 24.0017 4.5 24.0017ZM19.14 3.62265L23.385 7.86642L21.255 9.9958L17.01 5.75203L19.14 3.62265ZM6 16.7588L14.895 7.86642L19.14 12.1102L10.245 21.0026H6V16.7588ZM28.5 27.0009H1.5C1.10218 27.0009 0.720644 27.1589 0.43934 27.4401C0.158035 27.7213 0 28.1027 0 28.5004C0 28.8981 0.158035 29.2796 0.43934 29.5608C0.720644 29.842 1.10218 30 1.5 30H28.5C28.8978 30 29.2794 29.842 29.5607 29.5608C29.842 29.2796 30 28.8981 30 28.5004C30 28.1027 29.842 27.7213 29.5607 27.4401C29.2794 27.1589 28.8978 27.0009 28.5 27.0009Z" fill="white" />
                        </svg>
                    </button>

                </div>
            </form>
            <div class="div-links">
                <div class="deslogar">
                    <a href="/destroy">Deslogar</a>
                </div>
                <div class="deslogar">
                    <a href="/home">Home</a>
                </div>
                <div class="deslogar">
                    <a href="/Cursos">Cursos</a>
                </div>
            </div>
        </div>
        <div class="fundo-curso">
            <div class="text-conteiner">
                <p>Meus Cursos</p>
            </div>
            <?php
            //require('Modules/comands.php');
            $check = new Send();
            $result = $check->veryfiCurse($_SESSION['id']);
            if ($result == true) {
                require_once('Controller/UserBord/cursoUsuario.php');
            } else {
                require_once('View/Components/box/boxIncreavase.php');
            }
            ?>
        </div>
    </main>
</body>
<script type="text/javascript">
    function exibirTexto() {
        const fileInput = document.getElementById('fileInput');
        const textoExibido = document.getElementById('textoExibido');
        const img = document.getElementById('img-c');

        if (fileInput.files.length > 0) {
            textoExibido.style.display = 'block';
            // Define o alinhamento do texto como central
            textoExibido.style.textAlign = "center";
            // Define a fonte como "Bebas Neue"
            textoExibido.style.fontFamily = "Bebas Neue, sans-serif";
            // Define a cor do texto como branco
            textoExibido.style.color = "white";
            img.style.display = 'none';
        } else {
            textoExibido.style.display = 'none';
        }
    }
</script>


</html>