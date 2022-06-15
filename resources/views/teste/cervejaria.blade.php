<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Cervejaria Dela </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
    <p>Teste imagens</p>
    <?php echo("<img src='" . $_SERVER['DOCUMENT_ROOT'] . "/DSC_0435.jpg);?>
    <img src="fundorest.jpg"><br>
    <img src="restauranteinteiro.jpg"><br>
    <img src="restauranteinteiro.png"><br>
    <img src="tanques de ceva.png"><br>

    <div class="header">
        <div class="logo">
            <img src="cervejaria.png" alt="Logo cervejaria" width="200" height="150">
        </div>
        <div class="titulo">
            <h1> Cervejaria Artesanal Dela </h1>
            
        </div>
    </div>  
    
    <nav id="menuprin">
        <ul  class="lista-h">
            <li><a href="#titulo">Início </a> </li>
            <li><a href="#">Produtos </a>  
            <ul id="menuprod">
                <li><a href="#tipa">IPA </a> </li>
                <li><a href="#tweis">Weiss </a> </li>
                <li><a href="#tlager">Lager </a> </li>
            </ul>
            </li>
            <li><a href="#">Restaurante </a> </li>
            <li><a href="#">Galeria </a> </li>
            <li><a href="#">Contatos </a> </li>
        </ul>
    </nav>

    <div class="imagens">
        <img src="Lager Tombada.jpeg" alt="tres garrafas com a do meio tombada" width="400" height="500" id="img1">
        <img src="servindo quatro copos.jpeg" alt="garcom com quatro copos" width="400" height="500" id="img2">
        <img src="Três Cervejas.jpeg" alt="tres garrafas de cerveja na fábrica" width="400" height="500" id="img3">
    </div>

    <div class="historia">
    <h3 id="titulo"> Início </h3>
    <img src="marca na rua.jpeg" alt="Entrada do Estabelecimento" width="400" height="400" id="imagemlat">
    <p id="conto"> A cervejaria Dela nasceu da vontade de uma química em produzir sua própria cerveja. 
        Mas o fato de ser um processo que demanda de um investimento financeiro muito alto, ela contou com a ajuda de seus amigos.
        E com a ajuda dos amigos, ela se especializou e começou com uma pequena quantidade para os mais próximos e hoje tem uma cervejaria.  
    </p>
</div>
<div class="produtos">
    <p id="tprod"><strong><em> Conheça nossos Produtos </em></strong> <br></p>
</div>
<div class="weiss"> 
    <img src="weiss.jpg" alt="" id="cw">
    <div class="text1">
        <p id="tweis"><strong><em> Weiss </em></strong><br> <br> <br><br>
            A ceveja do tipo Weiss é uma cerveja feita de trigo, com alguns sours feitos pela própria mestra cervejeira, para combinar sabores e fazer uma bebida mais refrescante e saborosa.</p>
    </div>
</div>
<div class="ipa">    
    <img src="IPA.jpg" alt="" width="400" height="600" id="cipa">
    
    <div class="text2">
        <p id="tipa"><strong><em> IPA </em></strong><br><br> <br> <br>
             A cerveja do tipo IPA é uma cerveja mais intensa, com concentrações de ingredientes selecionados para dar um toque marcante a bebida. </p>
    </div>
</div>
<div class="lager">
    <img src="lager.jpg" alt=""width="400" height="600" id="cl">
    <div class="text3">
        <p id="tlager"><strong><em> Lager </em></strong> <br> <br> <br> <br>
            A cerveja do tipo Lager é uma bebida mais conhecida dos amantes de cerveja, uma receita tradicional, feita com toda dedicação pela mestra cervejeira para que essa bebida seja lembrada por todos os que experimentam. </p>
    </div>    
</div>    
<br>

    <div class="bar">
        <p id="textbar"><strong><em> Restaurante </em></strong> <br>
            O restaurante foi uma idéia que surgiu após a cervejaria. 
            Alguns dos visitantes da cervejaria sugeriram que ela dispusesse de um local para que pudessem entrar e degustar dos tipos de cerveja
            fabricados e, junto com a cerveja, servir petiscos. 
            A ideía foi bem aceita pelos proprietários da cervejaria, tanto que cresceu e agora o local funciona de quinta a domingo com eventos agendados. 
            E também conta com uma Kombi para eventos fora do restaurante, para venda de bebidas. 
        </p>
    </div>
    <div class="restimg">
        <img src="DSC_0343.NEF" alt="tanques de armazenamento" id="rest1">
        <img src="DSC_0432.NEF" alt="vista do restaurante" id="rest2">
        <img src="DSC_0435.jpg" alt="bar do restaurante" id="rest3">
    </div>
<div class="galery">    
    <h1>Galeria de Fotos</h1>
    <img src="http://www.minhasaojose.com.br/wp-content/uploads/2020/09/dela-1024x1024.jpeg" alt="Cervejas" width="400" height="400" id="cervejas3">
    <img src="marca na rua.jpeg" alt="Vista da Placa da Fábrica" width="400" height="400" id="placarua">
    <img src="background.jpg" alt="tábua de degustação" width="400" height="400" id="tabua">
    <img src="cevalager.jpg" alt="copo de cerveja lager" width="400" height="600" id="cevalager">
    <img src="cervejaweis.jpg" alt="copo de cerveja weiss" width="400" height="600" id="cevaweiss">
    <img src="cervaipa.jpg" alt="copo de cerveja India Pale Ale" width="400" height="600" id="cevaipa">
</div>

<div class="contat">
    <h1> Contatos </h1>
    <p> Para aqueles que querem fazer um tour pela cervejaria, o local abre com horário agendado.<span> Agende aqui.</span></p>
    <p> Para aqueles que querem uma opção de lazer à noite, o restaurante abre de quinta a domingo, das 17 às 23 horas. 
        Saiba antes sobre a agenda de eventos, cadastrando seu e-mail <span>aqui</span> para receber a agenda do mês.</p>
    <p> Telefone de contato: </p>
    <p> Email </p>
</div>
    <script type="text/javascript"  src="script.js"> </script>
</body>
</html>