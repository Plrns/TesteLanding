<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Teste Landing</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style/style.css">
</head>
<body>
    <a href="#containerMenu" class="topo"><img src="img/icotopo.png" alt="ir-topo"></a>
    <div id="containerMenu">
        <div class="containerItens">
            <a href="#explicaSite"><span id="descricaoSite">O que é</span></a>
            <img class="logo" src="img/logo.png" alt="logo-teste">
            <a href="#explicaSorteio"><span id="participe">Participe</span></a>
        </div>
    </div>
    <div class="containerConteudo">
        <div class="containerItensConteudo">
            <img class="conteudo" src="img/conteudo.png" alt="foto conteudo">
            <div id="explicaSite">
                <h3 style="margin-top:10px">Concurso</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloremque quibusdam nobis in blanditiis voluptates earum atque totam a quae officiis. Quia quas amet reprehenderit error natus nulla aliquam quos ex! Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed repellendus tenetur optio temporibus, accusantium corrupti libero consequatur repudiandae nulla velit impedit perferendis error suscipit, at delectus. Eius, cum obcaecati. Ipsam! Lorem ipsum dolor sit amet consectetur, adipisicing elit. Necessitatibus adipisci perspiciatis et inventore tenetur quam at, hic quasi optio iure esse distinctio laboriosam, vel dicta autem quos quas. Repudiandae, quaerat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis numquam voluptates beatae corporis odio et accusantium atque mollitia, quis minus aliquam adipisci dicta ipsa enim facilis velit ut? Natus, ipsum!</p>
            </div>
            <div id="explicaSorteio">
                <h3 style="margin-top:70px">Participe agora mesmo</h3>
                <p style="margin-top:15px">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Similique quas ut ipsam voluptatum ea reprehenderit atque, molestias facilis eum magnam tenetur! Quis reiciendis tempore ducimus impedit autem cum nihil ipsam. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ratione voluptatum praesentium iusto impedit, officia ipsam autem vel temporibus nobis dolores adipisci esse et, commodi quibusdam deserunt dolorum, quo repellat dolore. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolor, suscipit praesentium. Atque unde reprehenderit quibusdam velit numquam nesciunt id, voluptas, dolores ducimus est esse itaque vero provident nobis, sed error.</p>
            </div>
            <div class="formulario">
                <form action="send-mail.php" method="post">
                    <label for="idNome">Nome</label>
                    <input type="text" name="nome" id="idNome" style="margin-left:31px" ><br>
                    <label for="idEmail">Email</label>
                    <input type="email" name="email" id="idEmail" style="margin-left:36px"><br>
                    <label for="idTelefone">Telefone</label>
                    <input type="number" name="telefone" id="idTelefone" style="margin-left:15px"><br><br>
                    <input type="submit" value="ENVIAR">
                </form>
                <span id="msg"></span>
            </div>
        </div>
    </div>
    <script src="script/script.js"></script>
</body>
</html>