<!DOCTYPE html>
<html lang="en">
<?php

if ($_SERVER["REQUEST_URI"] == '/View/Private/ProfLogado.php') {
    require_once('../../Controller/SessionControll/Session.php');
} else {
    require_once('Controller/SessionControll/Session.php');
}
//$check = new Sension();
//$result = $check->Verify();
//if ($result === null) {
  //  header("Location: http://localhost:80/Login");
  //  exit('');
//}

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
                    require_once('View/Components/renderimg.php')
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
            <div class="comquistas " title="html master">
                <div class="comquistas-1 " style=" background: #FF7009;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 57 64" fill="none">
                        <path d="M45.7457 18.76L46.3935 11.76H10.6065L12.5092 33.12H37.2848L36.3942 42.24L28.419 44.36L20.4844 42.24L19.9581 36.64H12.8736L13.7642 47.76L28.419 51.76H28.581V51.72L43.1143 47.76L45.1385 26H19.0675L18.4602 18.76H45.7457ZM0 0H57L51.8182 57.52L28.419 64L5.18182 57.52L0 0Z" fill="white" />
                    </svg>
                </div>
                <div class="comquistas-1" style=" background: #0997FF;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="55" height="55" viewBox="0 0 65 65" fill="none">
                        <path d="M27.1916 31.7011H37.402C38.9585 31.6796 40.4599 31.1225 41.6537 30.1236C42.8475 29.1247 43.6606 27.7449 43.9562 26.2167V13.8125C43.9562 13.8125 41.5052 8.39587 31.6197 8.39587C21.7343 8.39587 20.0552 12.9323 20.0552 12.9323V19.3105H32.0125V21.6667H16.0875C14.9774 21.6596 13.877 21.8722 12.8496 22.2925C11.8221 22.7128 10.8881 23.3323 10.1013 24.1153C9.31447 24.8983 8.69047 25.8294 8.26528 26.8548C7.84008 27.8802 7.6221 28.9796 7.62391 30.0896V37.0771C7.62213 38.0474 7.81171 39.0086 8.18181 39.9056C8.5519 40.8025 9.09524 41.6177 9.78073 42.3045C10.4662 42.9912 11.2804 43.5361 12.1767 43.9078C13.073 44.2795 14.0338 44.4709 15.0041 44.4709H18.9583V39.9209C18.9565 38.8398 19.1683 37.769 19.5816 36.77C19.9949 35.7711 20.6015 34.8636 21.3666 34.0998C22.1317 33.336 23.0401 32.7309 24.0398 32.3192C25.0394 31.9076 26.1105 31.6975 27.1916 31.7011ZM25.35 16.25C24.9455 16.25 24.5502 16.1301 24.2139 15.9054C23.8777 15.6807 23.6156 15.3614 23.4608 14.9878C23.306 14.6141 23.2656 14.203 23.3445 13.8063C23.4234 13.4097 23.6181 13.0453 23.9041 12.7594C24.19 12.4734 24.5544 12.2786 24.951 12.1997C25.3477 12.1208 25.7588 12.1613 26.1325 12.3161C26.5061 12.4709 26.8255 12.733 27.0501 13.0692C27.2748 13.4055 27.3947 13.8008 27.3947 14.2052C27.3912 14.7465 27.1746 15.2645 26.7919 15.6472C26.4092 16.0299 25.8912 16.2465 25.35 16.25Z" fill="white" />
                        <path d="M49.9958 20.5427H46.0416V25.0792C46.0434 26.158 45.8324 27.2265 45.4208 28.2237C45.0092 29.2209 44.4051 30.1272 43.6429 30.8906C42.8807 31.6541 41.9754 32.2598 40.9789 32.673C39.9824 33.0863 38.9142 33.299 37.8354 33.299H27.5979C26.0414 33.3205 24.54 33.8776 23.3462 34.8765C22.1524 35.8754 21.3393 37.2551 21.0437 38.7833V51.1875C21.0437 51.1875 23.4947 56.6042 33.3802 56.6042C43.2656 56.6042 44.9447 52.0677 44.9447 52.0677V45.7302H32.9875V43.3333H48.9124C50.0225 43.3405 51.1229 43.1278 52.1504 42.7076C53.1778 42.2873 54.1118 41.6678 54.8986 40.8848C55.6854 40.1017 56.3094 39.1707 56.7346 38.1453C57.1598 37.1199 57.3778 36.0205 57.376 34.9104V27.9365C57.3778 26.9662 57.1882 26.005 56.8181 25.108C56.448 24.2111 55.9047 23.3959 55.2192 22.7091C54.5337 22.0224 53.7195 21.4775 52.8232 21.1058C51.9269 20.7341 50.9661 20.5427 49.9958 20.5427ZM39.65 48.75C40.0544 48.75 40.4497 48.8699 40.786 49.0946C41.1222 49.3193 41.3843 49.6387 41.5391 50.0123C41.6939 50.3859 41.7344 50.7971 41.6555 51.1937C41.5766 51.5904 41.3818 51.9547 41.0958 52.2407C40.8099 52.5267 40.4455 52.7214 40.0489 52.8003C39.6522 52.8792 39.2411 52.8387 38.8674 52.6839C38.4938 52.5292 38.1745 52.2671 37.9498 51.9308C37.7251 51.5946 37.6052 51.1992 37.6052 50.7948C37.6087 50.2536 37.8253 49.7355 38.208 49.3528C38.5907 48.9701 39.1087 48.7536 39.65 48.75Z" fill="white" />
                    </svg>
                </div>
            </div>
            <div>
                <a href="/destroy">Deslogar</a>
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
                require_once('View/Components/boxIncreavase.php');
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