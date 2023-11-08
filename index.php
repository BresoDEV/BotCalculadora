<?php
//?nome=Bot%20CdS%20EAD&tempoEspera=20&foto=Hank.png&tema=1
$nome = "BresoDEV Bot";
$tempoEspera = 1000;
$foto = 'https://yt3.googleusercontent.com/JOn2qFWSVZbOohyGSkWfoPNM_KkUyGcMg3S0WXt9N2FHRLHKVr5UyJL5UmpXLEG4cbyNZ9Xg=s900-c-k-c0x00ffffff-no-rj';
$dark = '0';
$nomeUsuario = '';

if (isset($_GET["nome"]))
    $nome = $_GET["nome"];
if (isset($_GET["tempoEspera"]))
    $tempoEspera = $_GET["tempoEspera"];
if (isset($_GET["foto"]))
    $foto = $_GET["foto"];
if (isset($_GET["tema"]))
    $dark = $_GET["tema"];
if (isset($_GET["nomeUsuario"]))
    $nomeUsuario = ' ' . $_GET["nomeUsuario"];
?>
<!DOCTYPE html>
<html lang="en" id="html">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        font-size: small;
        font-family: system-ui, -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif
    }

    html {
        margin: 0;
        padding: 0;
        background-color: #d7caca;

    }

    body {
        font-family: "Roboto", sans-serif;
        height: 100%;
        margin: 0;
        padding: 0;
    }

    .topo {
        height: 55px;
        width: 100%;
        background: #005e54;
        color: aliceblue;
        padding: 0 8px;
        font-size: 24px;
        position: fixed;
        z-index: 1;
        top: 0;
    }

    .topo .avatar img {
        border-radius: 50%;
        display: block;
        width: 36px;
        margin-left: 10px;
        margin-top: 10px;
        position: fixed;
    }

    .topo .nome {
        font-size: 17px;
        font-weight: 600;
        text-overflow: ellipsis;
        letter-spacing: 0.3px;
        margin: 10px 0 0 60px;
        white-space: nowrap;
        width: auto;
    }

    .topo .status {
        font-size: 10px;
        text-overflow: ellipsis;
        letter-spacing: 0.3px;
        margin: 3px 0 0 60px;
        white-space: nowrap;
        width: auto;
    }

    .corpo {
        background-color: #d7caca;
        width: 100%;
        margin-top: 50px;
        padding-bottom: 100px;
    }

    .minhaMsg {
        background: #e1ffc7;
        border-radius: 5px 0px 5px 5px;
        margin-left: 45%;
        margin-right: 15px;
        text-align: left;
        width: 50%;
        word-break: normal;
        padding: 10px;
        padding-bottom: 15px;
        margin-bottom: 5px;
    }

    .msgBot {
        background: #e1ffc7;
        border-radius: 0px 5px 5px 5px;
        margin-left: 15px;
        text-align: left;
        width: 50%;
        word-break: normal;
        padding: 10px;
        padding-bottom: 15px;
        margin-bottom: 5px;
    }

    .minhaMsg .hora {
        background: transparent;
        border-radius: 5px 0px 5px 5px;
        float: right;
        margin-right: 15px;
        text-align: right;
        width: 50%;
        word-break: normal;
        font-size: smaller;
        margin-bottom: 10px;
    }

    .msgBot .hora {
        background: transparent;
        border-radius: 5px 0px 5px 5px;
        float: right;
        margin-right: 15px;
        text-align: right;
        width: 50%;
        word-break: normal;
        font-size: smaller;
        margin-bottom: 10px;
    }

    .msgBot button {
        background: rgb(40, 150, 40);
        border-radius: 5px 5px 5px 5px;
        border: none;
        width: 50%;
        font-size: smaller;
        margin-top: 3px;
        color: aliceblue;
        padding: 4px;
    }




    .campoMsg {
        height: 50px;
        width: 100%;
        background: #d7caca;
        color: aliceblue;
        padding: 10px;
        font-size: 24px;
        position: fixed;
        z-index: 1;
        bottom: 0;
        display: flex;
    }

    td input {
        width: 95%;
        background: #fff;
        color: black;
        z-index: 1;
        bottom: 0;
        margin: 0;
        padding: 3px;
        border: none;
        border-radius: 3px;
        height: 75%;
        margin-left: 5px;
    }

    td button {
        background: #005e54;
        color: white;
        margin: 0;
        z-index: 1;
        bottom: 0;
        border-radius: 2px;
        margin-left: 5px;
        font-size: larger;
        padding: 0;
        user-select: none;
        width: 95%;
        height: 95%;
    }

    table {
        height: 50px;
        width: 95%;
        font-size: 24px;
        position: fixed;
        z-index: 1;
        bottom: 0;
    }

    td,
    tr {
        width: 100%;
        min-width: 50px;
    }

    .leitura {
        color: cadetblue;
        animation: visu 3s linear;
        font-weight: bold;
    }

    @keyframes visu {
        0% {
            color: gray
        }

        90% {
            color: gray
        }

        100% {
            color: cadetblue
        }
    }
</style>

<body id="body">
    <div class="topo" id="topo">
        <div class="avatar">
            <img id="fotoperfil" src="Hank.png" alt="">

        </div>
        <div class="nome" id="nome">Bot CdS EAD</div>
        <div class="status" id="status">Breso</div>
    </div>



    <div class="corpo" id="corpo">&nbsp;



    </div>





    <table border="0">
        <tr>
            <td colspan="5"><input type="text" id="mensagem" placeholder="Digite aqui..."></td>
            <td><button id="enviar">&#x27a1</button></td>
        </tr>
    </table>






</body>
<script>

    //Responder('Olá Olá segue o link abaixo para fazer o download'+BotaoMsg('Baixar','www.google.com'));
    //Responder('Obrigado');
    //Responder('<img src="Hank.png" alt="" width="100%">');
    //Responder('<iframe src="http://www.google.com" frameborder="0" width="100%"></iframe>');
    //Responder(BotaoMsgDownload('x','http://localhost/index.php'));

    var tempoResposta = <?php echo $tempoEspera ?>;
    var nomeBot = "<?php echo $nome ?>";
    var fotoperfil = "<?php echo $foto; ?>";
    var tema = <?php echo $dark; ?>;
    var nomeUsuario = '<?php echo $nomeUsuario; ?>';

    AplicarTema();

    document.getElementById('status').innerHTML = 'Visto por ultimo hoje as ' + HoraAntes();
    document.getElementById('nome').innerHTML = nomeBot;
    document.getElementById('fotoperfil').src = fotoperfil;



    //emojis
    var sorriso = '&#128578;';
    var coracao = '&#128151;';
    var piscando = '&#128521;';
    var ok = '&#128076;';
    var lua = '&#127773;';
    var sol = '&#9728;';
    var aviao = '&#9992;';
    var coracaoquebrado = '&#128148;';
    var fogo = '&#128293;';
    var confiante = '&#128526;';
    var joinha = '&#128077;';
    var rindo = '&#128514;';
    var triste = '&#128531;';
    var rock = '&#129304;';




    function Cerebro(pergunta) {
        var boleta = true;

        if (pergunta === '' || pergunta === ' ' || pergunta === '  ') {
            boleta = false;
            Responder('Ops ' + nomeUsuario + ', digite alguma coisa né hahaha assim não consigo te ajudar!!' + EmojiAleatorio());
        }

        if (pergunta.includes('/tema') && boleta) {
            boleta = false;
            const n = pergunta.match(/\d+/g);
            const i = n.map(Number);
            tema = i[0];
            AplicarTema();
            Responder('Pronto, o tema foi alterado para ' + tema + ' ');
        }
        if (pergunta.includes('/tempo') && boleta) {
            boleta = false;
            const n = pergunta.match(/\d+/g);
            const i = n.map(Number);
            tempoResposta = i[0];
            Responder('Pronto, o tempo de resposta foi alterado para ' + tempoResposta + ' milisegundos');
        }
        if (pergunta.includes('/nome') && boleta) {
            boleta = false;
            nomeBot = pergunta.replace('/nome ', '');;
            document.getElementById('nome').innerHTML = nomeBot;
            Responder('Otimo, agora me chamo ' + nomeBot + '. Gostei!');
        }

        if (pergunta.includes('/meunome') && boleta) {
            boleta = false;
            nomeUsuario = pergunta.replace('/meunome', '');;
            Responder('Prazer ' + nomeUsuario + '. Gostei do seu nome!');
        }


        if (pergunta.includes('/foto') && boleta) {
            boleta = false;
            fotoperfil = pergunta.replace('/foto ', '');;
            document.getElementById('fotoperfil').src = fotoperfil;
            Responder('Gostei da foto nova hehe');
        }

        if (pergunta.includes('/dev') && boleta) {
            boleta = false;
            Responder('Voce ativou a opção <b>DEV</b> e pode usar os seguintes comandos para alterar algumas coisas: <br><br>' +
                '<b>/nome</b>: Muda o meu nome <br>Ex: <i>/nome Pica-Pau</i><br><br>' +
                '<b>/tempo</b>: Muda o tempo de resposta em milisegundos<br>Ex: <i>/tempo 1000</i><br><br>' +
                '<b>/tema</b>: Muda o tema de 0 a 3<br>Ex: <i>/tema 2</i><br><br>' +
                '<b>/meunome</b>: Muda o seu nome<br>Ex: <i>/meunome Patolino</i><br><br>' +
                '<b>OBS</b>: Lembrando que essas opções são temporárias, enquanto você estiver utilizando o chat.' +
                '');
        }

        if (pergunta.includes('bhaskara')) {
            boleta = false;
            Responder('A famosa fórmula de Bhaskara é representada da seguinte forma:<br>\u0394 = b\u00B2 - 4ac<br>x\u2081 = (-b + \u221A\u0394) / 2a<br>x\u2082 = (-b - \u221A\u0394) / 2a');
        }

        var palavra = [
            'thnks',
            'valeu',
            'perfeit',
            'tchau',
            'obrigad'
        ];
        if (boleta) {
            palavra.forEach(valor => {

                if (Contem(pergunta, valor)) {
                    boleta = false;
                    Responder(FalouObrigado());
                }
            });
        }

        palavra = [
            'buceta',
            'ppk',
            'caralh',
            'c4r4lh',
            'buc374',
            'puta',
            'penis',
            'vagina',
            'p3n15',
            'v4g1n4',
            'pepeka',
            'viado',
            'gay',
            'bixa',
            'boquete',
            'b0qu373',
            'b1x4',
            'g4y',
            'v14d0 ',
        ];
        if (boleta) {
            palavra.forEach(valor => {

                if (Contem(pergunta, valor)) {
                    boleta = false;
                    Responder(Palavrao());
                }
            });
        }

        palavra = [
            'ola',
            'oi',
            'bom dia',
            'boa tarde',
            'boa noite',
            'hey',
            'hello',
        ];
        if (boleta) {
            palavra.forEach(valor => {

                if (Contem(pergunta, valor)) {
                    boleta = false;
                    Responder(Ola());
                }
            });
        }

        palavra = [
            '(',
            '[',
            ']',
            ')',
            '>',
            '<',
        ];
        if (boleta) {
            palavra.forEach(valor => {

                if (Contem(pergunta, valor)) {
                    boleta = false;
                    Responder(SimbolosInvalidos());
                }
            });
        }


        palavra = [
            'potencia',
            'quadrado',
            'elevado',
            'cubo',
        ];
        if (boleta) {
            palavra.forEach(valor => {

                if (Contem(pergunta, valor)) {
                    boleta = false;
                    Responder(Potencia(pergunta));
                }
            });
        }

        palavra = [
            'raiz',
            'quadrada',
        ];
        if (boleta) {
            palavra.forEach(valor => {

                if (Contem(pergunta, valor)) {
                    boleta = false;
                    Responder(RaizQuadrada(pergunta));
                }
            });
        }


        palavra = [
            'soma',
            'adicao',
            'mais',
            'adição',
            'adicão',
            'adiçao',
            '+',
            'some',
        ];
        if (boleta) {
            palavra.forEach(valor => {

                if (Contem(pergunta, valor)) {
                    boleta = false;
                    Responder(Soma(pergunta));
                }
            });
        }



        palavra = [
            'vezes',
            'multiplicar',
            'multiplicação',
            'multiplicaçao',
            'multiplicacao',
            'multiplicacão',
            'x',
            '*',
            'multiplique',
        ];
        if (boleta) {
            palavra.forEach(valor => {

                if (Contem(pergunta, valor)) {
                    boleta = false;
                    Responder(Multiplicacao(pergunta));
                }
            });
        }

        palavra = [
            'menos',
            'subtraia',
            'subtracao',
            'subtracão',
            'subtração',
            'subtraçao',
            'remova',
            '-',
        ];
        if (boleta) {
            palavra.forEach(valor => {

                if (Contem(pergunta, valor)) {
                    boleta = false;
                    Responder(Subtracao(pergunta));
                }
            });
        }

        palavra = [
            'dividir',
            'divida',
            'divisao',
            'divisão',
            '/',
            'dividido',
        ];
        if (boleta) {
            palavra.forEach(valor => {

                if (Contem(pergunta, valor)) {
                    boleta = false;
                    Responder(Divisao(pergunta));
                }
            });
        }

        palavra = [
            'errou',
            'nao',
            'não',
            'errado',
            'incorreto',
        ];
        if (boleta) {
            palavra.forEach(valor => {

                if (Contem(pergunta, valor)) {
                    boleta = false;
                    Responder(Nao());
                }
            });
        }

        palavra = [
            'acertou',
            'correto',
            'sim',
            'certinho',
            'certo',
            'parabens',
        ];
        if (boleta) {
            palavra.forEach(valor => {

                if (Contem(pergunta, valor)) {
                    boleta = false;
                    Responder(Sim());
                }
            });
        }


        if (boleta) {
            Responder(NaoEntendeu());
        }

    }
    //----------------------------------------------
    function Modelo() {
        const a = [
            '',
            '',
            '',
            '',
        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }


    function Palavrao() {
        const a = [
            'Pedimos que você evite o uso de linguagem inadequada em nossas conversas.',
            'Lembramos que este é um espaço amigável, por favor'+nomeUsuario+', mantenha o tom respeitoso.',
            'Nossa comunidade preza por um ambiente positivo. Gentilmente, evite palavras ofensivas.',
            'Fique à vontade para expressar suas opiniões'+nomeUsuario+', mas lembre-se de manter um diálogo respeitoso e sem palavrões.',
            'O uso de palavras ofensivas não é permitido em nossa plataforma. Agradecemos pela compreensão.',
            'Queremos garantir um ambiente saudável para todos. Por favor'+nomeUsuario+', evite o uso de linguagem inapropriada.',
            'Palavras têm poder'+nomeUsuario+'. Vamos manter nossas conversas livres de palavrões e respeitar uns aos outros.',
            'Seja gentil com suas palavras'+nomeUsuario+'. Conteúdo ofensivo ou vulgar não é aceitável aqui.',
            'Valorizamos um diálogo construtivo.'+nomeUsuario+' Evite o uso de palavras que possam ser consideradas desrespeitosas.',
            'Suas palavras têm impacto'+nomeUsuario+'. Vamos criar um espaço positivo sem palavrões.',

        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }


    //'+nomeUsuario+'
    function SimbolosInvalidos() {
        const a = [
            'Desculpe' + nomeUsuario + ', não é possível calcular com os símbolos que você usou. Tente novamente com números e operadores válidos.' + triste,
            'Parece que alguns símbolos que você usou não são reconhecidos. Por favor' + nomeUsuario + ', use números e operadores válidos.' + triste,
            'Ops' + nomeUsuario + ', acho que você incluiu símbolos inválidos. Certifique-se de usar apenas números e operadores corretos nas contas.' + triste,
            'Desculpe' + nomeUsuario + ', mas os símbolos que você usou não são aceitos. Certifique-se de que sua conta contenha apenas números e operadores válidos.' + triste,
            'Os símbolos que você inseriu não são reconhecidos. Tente novamente com números e operadores apropriados.' + triste

        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }

    //'+nomeUsuario+'
    function Ola() {
        const a = [
            'Ei, ola' + nomeUsuario + ', qual conta precisa que eu resolva pra voce?' + EmojiAleatorio(),
            'Ola' + nomeUsuario + ', bora resolver umas continhas?' + EmojiAleatorio(),
            'Hey' + nomeUsuario + ', oque manda pra hoje?' + EmojiAleatorio(),
            'Oi' + nomeUsuario + ',oque voce precisa?' + EmojiAleatorio(),
        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }


    //'+nomeUsuario+'
    function Sim() {
        const a = [
            'Que otimo saber disso' + nomeUsuario + ', fico feliz em ter acertado' + confiante,
            'Otimo' + nomeUsuario + ', vamos para a próxima' + confiante,
            'Perfeito' + nomeUsuario + ', que bom que acertei' + confiante,
            'Isso ai' + nomeUsuario + '' + confiante,
        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }



    //'+nomeUsuario+'
    function Nao() {
        const a = [
            'Oh, que pena' + nomeUsuario + ', prometo melhorar da próxima vez' + triste,
            'Desculpe' + nomeUsuario + ' pelo erro' + triste,
            'Acho que me enganei na conta' + nomeUsuario + ', peço desculpas' + triste,
            'Acho que li seus números errados' + nomeUsuario + ', me desculpe, vou tentar melhorar na próxima' + confiante,
        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }




    function Divisao(p) {
        if (ContemNumeros(p)) {
            const num = p.match(/\d+/g);
            const ints = num.map(Number);
            if (2 == ints.length)
                return MontarDivisao(ints[0], ints[1], ints[0] / ints[1]);
            else
                return FaltouDigitarTodosNumeros('/', ints[0]);
        }
        else {
            return SemNumeros('/');
        }
    }


    //'+nomeUsuario+'
    function MontarDivisao(valor1, valor2, resultado) {
        const a = [
            'A divisão de ' + valor1 + ' por ' + valor2 + ', é ' + resultado,
            'Entendi' + nomeUsuario + ', a divisão de ' + valor1 + ' por ' + valor2 + ', resulta em ' + resultado + '. Acertei? ' + EmojiAleatorio(),
            'Otimo' + nomeUsuario + ',vamos calcular....<br>A divisão de ' + valor1 + ' por ' + valor2 + ', tem como resultado ' + resultado + '. Correto? ' + EmojiAleatorio(),
            'Perfeito' + nomeUsuario + ',um pouco mais dificil, mas vamos lá!!' + confiante + '<br>Se voce pegar ' + valor1 + ' e dividir ele por ' + valor2 + ', tem como resultado ' + resultado + '. Acertei né? ' + EmojiAleatorio(),
            'Essa ficou facil demais' + nomeUsuario + '!!! vamos lá' + confiante + '<br>Se voce pegar ' + valor1 + ' e dividir ele por ' + valor2 + ', tem como resultado ' + resultado + '. Acertei né? ' + EmojiAleatorio(),
            'Perfeito' + nomeUsuario + ', um pouco mais complicado, mas a gente consegue!<br>Se você pegar ' + valor1 + ' e dividir por ' + valor2 + ', o resultado é ' + resultado + '. ',
            'Tudo certo, essa é uma pergunta mais desafiadora, mas não tem problema!<br>Se você dividir ' + valor1 + ' por ' + valor2 + ', o resultado é ' + resultado + '. ',
            'Sem problemas, isso é um pouco mais difícil, mas vamos lá' + nomeUsuario + '!<br>Quando você divide ' + valor1 + ' por ' + valor2 + ', o resultado é ' + resultado + '. ',
            'Entendi, isso é um desafio, mas a gente consegue' + nomeUsuario + '!<br>Se você pegar ' + valor1 + ' e dividir por ' + valor2 + ', o resultado é ' + resultado + '. ',
            'Beleza, essa é mais complicadinha, mas não tem segredo' + nomeUsuario + '! <br>Quando você divide ' + valor1 + ' por ' + valor2 + ', o resultado é ' + resultado + '. '

        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }



    function Subtracao(p) {
        if (ContemNumeros(p)) {
            const num = p.match(/\d+/g);
            const ints = num.map(Number);
            if (2 == ints.length)
                return MontarSubtracao(ints[0], ints[1], ints[0] - ints[1]);
            else
                return FaltouDigitarTodosNumeros('-', ints[0]);
        }
        else {
            return SemNumeros('-');
        }
    }

    //'+nomeUsuario+'
    function MontarSubtracao(valor1, valor2, resultado) {
        const a = [
            'A subtração de ' + valor1 + ' de ' + valor2 + ', é ' + resultado + '. Algo mais' + nomeUsuario + '? ' + EmojiAleatorio(),
            'Perfeito, ' + valor1 + ' menos ' + valor2 + ', é ' + resultado + '. Acertei' + nomeUsuario + '? ' + EmojiAleatorio(),
            'Entendi' + nomeUsuario + ', se temos ' + valor1 + ' e removemos ' + valor2 + ' dele, nos resta ' + resultado,
            'Entendi, vou fazer a conta aqui' + nomeUsuario + ', rapidinho. Se temos ' + valor1 + ' e removemos ' + valor2 + ' dele, nos resta ' + resultado,
            'Entendi' + nomeUsuario + ', se temos ' + valor1 + ' e removemos ' + valor2 + ' dele, nos resta ' + resultado,
            'Legal' + nomeUsuario + ', então, se a gente partir de ' + valor1 + ' e subtrair ' + valor2 + ', o resultado é ' + resultado,
            'Beleza' + nomeUsuario + ', se começarmos com ' + valor1 + 'e tirarmos ' + valor2 + ', o que sobra é ' + resultado,
            'Entendi' + nomeUsuario + ', se começarmos com ' + valor1 + ' e subtrairmos ' + valor2 + ', o resultado é ' + resultado,
            'Perfeito, se a gente remover ' + valor2 + ' de ' + valor1 + ', o resultado é ' + resultado

        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }



    function Multiplicacao(p) {
        if (ContemNumeros(p)) {
            const num = p.match(/\d+/g);
            const ints = num.map(Number);
            if (2 == ints.length)
                return MontarMultiplicacao(ints[0], ints[1], ints[0] * ints[1]);
            else
                return FaltouDigitarTodosNumeros('*', ints[0]);
        }
        else {
            return SemNumeros('*');
        }
    }

    //'+nomeUsuario+'
    function MontarMultiplicacao(valor1, valor2, resultado) {
        const a = [
            'A multiplicação de ' + valor1 + ' por ' + valor2 + ', é ' + resultado,
            'Entendi' + nomeUsuario + ', se voce pegar ' + valor1 + ' e fazer esse valor, vezes ' + valor2 + ', o resultado é ' + resultado,
            'Agora ficou um pouco mais dificil' + nomeUsuario + '' + EmojiAleatorio() + ' mas vamos la, se voce pegar ' + valor1 + ' e fazer esse valor, vezes ' + valor2 + ', o resultado é ' + resultado,
            'Perfeito, ' + valor1 + ' vezes ' + valor2 + ', é ' + resultado + ' ' + EmojiAleatorio(),
            'Entendi' + nomeUsuario + ', se você pegar ' + valor1 + ' e multiplicar por ' + valor2 + ', o resultado é ' + resultado,
            'Legal, então' + nomeUsuario + ', se a gente pegar ' + valor1 + ' e multiplicar por ' + valor2 + ', o resultado é ' + resultado,
            'Beleza' + nomeUsuario + ', se você pegar ' + valor1 + ' e fizer ' + valor2 + ' vezes, o resultado é ' + resultado,
            'Entendi, se você pegar ' + valor1 + ' e multiplicar ele por ' + valor2 + ', o resultado é ' + resultado,
            'Perfeito,' + nomeUsuario + ' se você fizer ' + valor1 + ' vezes ' + valor2 + ', o resultado é ' + resultado

        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }

    function Soma(p) {
        if (ContemNumeros(p)) {
            const num = p.match(/\d+/g);
            const ints = num.map(Number);
            if (2 == ints.length)
                return MontarSoma(ints[0], ints[1], ints[0] + ints[1]);
            else
                return FaltouDigitarTodosNumeros('+', ints[0]);

        }
        else {
            return SemNumeros('+');
        }
    }

    //'+nomeUsuario+'
    function MontarSoma(valor1, valor2, resultado) {
        const a = [
            'A soma de ' + valor1 + ' e ' + valor2 + ', é ' + resultado + '. Acertei' + nomeUsuario + '? ' + EmojiAleatorio(),
            'Entendi, voce quer somar ' + valor1 + ' e ' + valor2 + '? Temos ' + resultado + '. Facil demais ' + nomeUsuario + '' + EmojiAleatorio(),
            'Vamos la, ' + valor1 + ' somado a ' + valor2 + ' temos ' + resultado + '. Próxima' + nomeUsuario + '... ' + EmojiAleatorio(),
            'Perfeito, ' + valor1 + ' com ' + valor2 + ', temos ' + resultado + '. Estou ficando bom nisso' + nomeUsuario + '' + confiante,
            'Entendi, você quer somar ' + valor1 + ' e ' + valor2 + '? O resultado é ' + resultado + '. Muito simples' + nomeUsuario + '! ' + EmojiAleatorio(),
            'Legal, você quer somar ' + valor1 + ' com ' + valor2 + ', né? Deu ' + resultado + '. Moleza' + nomeUsuario + '! ' + EmojiAleatorio(),
            'Beleza, você tá afim de somar ' + valor1 + ' e ' + valor2 + ', certo? Resultado: ' + resultado + '. Fácil demais' + nomeUsuario + '! ' + EmojiAleatorio(),
            'Perfeito, você quer somar ' + valor1 + ' + ' + valor2 + '? O resultado é ' + resultado + '. Muito fácil' + nomeUsuario + '! ' + EmojiAleatorio(),
            'Então, você deseja fazer a soma de ' + valor1 + ' com ' + valor2 + ', certo? Resultado: ' + resultado + '. Tá tranquilo' + nomeUsuario + '! ' + EmojiAleatorio(),

        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }


    function RaizQuadrada(p) {
        if (ContemNumeros(p)) {
            const num = p.match(/\d+/g);
            const ints = num.map(Number);
            return MontarRaiz(ints[0], Math.sqrt(ints[0]));
        }
        else {
            return SemNumeros('raiz');
        }
    }

    //'+nomeUsuario+'
    function MontarRaiz(valor1, resultado) {
        const a = [
            'Essa ficou fácil demais' + nomeUsuario + ', a raiz quadrada de ' + valor1 + ' é ' + resultado,
            'Legal' + nomeUsuario + ', a raiz quadrada de ' + valor1 + ' é ' + resultado + '. Moleza!',
            'Beleza, quando calculamos a raiz quadrada de ' + valor1 + ', o resultado é ' + resultado,
            'Entendi, a raiz quadrada de ' + valor1 + ' é ' + resultado + '. Facinho, né' + nomeUsuario + '?',
            'Perfeito, a raiz quadrada de ' + valor1 + ' é ' + resultado + '. Simples assim' + nomeUsuario + '!',
            'Ok, a raiz quadrada de ' + valor1 + ' é ' + resultado + '. Acertei? ' + EmojiAleatorio(),
            'Agora ficou dificil' + nomeUsuario + ' haha, bom, raiz quadrada de ' + valor1 + ' é ' + resultado + ' ' + EmojiAleatorio(),
            'Agora ficou dificil ' + nomeUsuario + '' + rindo + ', mas bem, raiz quadrada de ' + valor1 + ' é ' + resultado + ' ' + EmojiAleatorio(),
            'Essa ficou facil demais' + nomeUsuario + ',a raiz quadrada de ' + valor1 + ' é ' + resultado + ' ' + confiante,
        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }

    function Potencia(p) {
        if (ContemNumeros(p)) {
            const num = p.match(/\d+/g);
            const ints = num.map(Number);
            console.log(ints.length);
            if (2 == ints.length)
                return MontarPotencia(ints[0], ints[1], Math.pow(ints[0], ints[1]));
            else
                return FaltouDigitarTodosNumeros("pot", ints[0]);
        }
        else {
            return SemNumeros("pot");
        }
    }

    //'+nomeUsuario+'
    function MontarPotencia(valor1, valor2, resultado) {
        const a = [
            'Entendi, o valor ' + valor1 + ' elevado à potência ' + valor2 + ' é igual a ' + resultado,
            'Legal, então' + nomeUsuario + ', quando elevamos ' + valor1 + ' à potência ' + valor2 + ', obtemos ' + resultado,
            'Beleza' + nomeUsuario + ', se você calcular ' + valor1 + ' elevado a ' + valor2 + ', o resultado é ' + resultado,
            'Entendi, quando elevamos ' + valor1 + ' à potência ' + valor2 + ', o resultado é ' + resultado,
            'Perfeito' + nomeUsuario + ', o valor de ' + valor1 + ' elevado a ' + valor2 + ' é ' + resultado,
            'O valor ' + valor1 + ' elevado a potencia ' + valor2 + ', é ' + resultado,
            'Entendi' + nomeUsuario + ', se voce pegar o valor ' + valor1 + ', e elevar a potencia ' + valor2 + ', o resultado vai ser ' + resultado + '. Acertei' + nomeUsuario + '? ' + EmojiAleatorio(),
            'Perfeito, o valor ' + valor1 + ', elevado a potencia de ' + valor2 + ', vai resultar em ' + resultado + '. Correto' + nomeUsuario + '? ' + EmojiAleatorio(),
            'Entendi' + nomeUsuario + ', o valor ' + valor1 + ', elevado a potencia de ' + valor2 + ', chegaremos em ' + resultado + '. Valor alto nao? ' + EmojiAleatorio(),
        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }

    //'+nomeUsuario+'
    function FaltouDigitarTodosNumeros(operacao, valorDigitado) {
        var a;
        if (operacao === "+") {
            a = [
                'Ops' + nomeUsuario + ', parece que você esqueceu de digitar um número para somar. Por favor, insira os números que deseja somar.',
                'Faltou um número aí' + nomeUsuario + '! Lembre-se de incluir todos os números que você quer somar.',
                'Você está quase lá' + nomeUsuario + ', mas está faltando um número para a soma. Insira o número que está faltando.',
                'Para realizar a soma' + nomeUsuario + ', é importante que todos os números estejam presentes. Verifique se você incluiu todos os valores.',
                'Parece que temos uma conta incompleta' + nomeUsuario + '. Certifique-se de incluir todos os números que deseja somar.'
            ];
        }
        if (operacao === "-") {
            a = [
                'Ops' + nomeUsuario + ', parece que você esqueceu de digitar um número para subtrair. Por favor, insira todos os números necessários para a operação.',
                'Faltou um número aí' + nomeUsuario + '! Lembre-se de incluir todos os valores para a subtração.',
                'Quase lá' + nomeUsuario + ', mas está faltando um número para a operação de subtração. Insira o número que falta.',
                'Para realizar a subtração' + nomeUsuario + ', é importante que todos os números estejam presentes. Verifique se você incluiu todos os valores.',
                'Parece que temos uma conta de subtração incompleta' + nomeUsuario + '. Certifique-se de incluir todos os números que deseja subtrair.'

            ];
        }
        if (operacao === "*") {
            a = [
                'Ops' + nomeUsuario + ', parece que você esqueceu de digitar um número para multiplicar. Certifique-se de incluir todos os números necessários.',
                'Faltou um número aí' + nomeUsuario + '! Lembre-se de incluir todos os valores para a multiplicação.',
                'Quase lá' + nomeUsuario + ', mas está faltando um número para a operação de multiplicação. Insira o número que falta.',
                'Para realizar a multiplicação' + nomeUsuario + ', é importante que todos os números estejam presentes. Verifique se você incluiu todos os valores.',
                'Parece que temos uma conta de multiplicação incompleta' + nomeUsuario + '. Certifique-se de incluir todos os números que deseja multiplicar.'
            ];
        }
        if (operacao === "/") {
            a = [
                'Ops' + nomeUsuario + ', parece que você esqueceu de digitar um número para a divisão. Certifique-se de incluir todos os números necessários para a operação.',
                'Faltou um número aí' + nomeUsuario + '! Lembre-se de incluir todos os valores para a divisão.',
                'Quase lá' + nomeUsuario + ', mas está faltando um número para a operação de divisão. Insira o número que falta.',
                'Para realizar a divisão, é importante que todos os números estejam presentes. Verifique se você incluiu todos os valores.',
                'Parece que temos uma conta de divisão incompleta. Certifique-se de incluir todos os números que deseja dividir.'

            ];
        }
        if (operacao === "pot") {
            a = [
                'Ops' + nomeUsuario + ', parece que você esqueceu de digitar um número para calcular a potência. Certifique-se de incluir todos os números necessários para a operação.',
                'Faltou um número aí' + nomeUsuario + '! Lembre-se de incluir todos os valores para a potenciação.',
                'Quase lá' + nomeUsuario + ', mas está faltando um número para o cálculo da potência. Insira o número que falta.',
                'Para calcular a potência, é importante que todos os números estejam presentes. Verifique se você incluiu todos os valores.',
                'Parece que temos um cálculo de potência incompleto. Certifique-se de incluir todos os números que deseja elevar.'

            ];
        }

        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }

    //'+nomeUsuario+'
    function SemNumeros(operacao) {

        const a = [
            'Parece que você não inseriu nenhum número. Por favor' + nomeUsuario + ', insira os números necessários para a operação que deseja realizar.',
            'Nenhum número' + nomeUsuario + '? Lembre-se de incluir pelo menos dois números para fazer uma conta.',
            'Está faltando algum número aí' + nomeUsuario + '! Para qualquer operação matemática, você precisa de pelo menos dois números.',
            'Ops, sem números não dá para calcular nada' + nomeUsuario + '! Certifique-se de inserir os valores necessários.',
            'Tá faltando alguma coisa aí' + nomeUsuario + '. Para fazer uma conta, é importante ter pelo menos dois números.',
        ];

        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }

    function ContemNumeros(frase) {
        return /\d/.test(frase);
    }

    function Contem(pergunta, palavra) {
        pergunta = pergunta.toLowerCase();
        palavra = palavra.toLowerCase();
        return pergunta.includes(palavra);
    }


    document.getElementById('enviar').addEventListener('click', () => {


        Falar(document.getElementById('mensagem').value);
        var pergunta = document.getElementById('mensagem').value;
        document.getElementById('mensagem').value = '';


        var l1 = setInterval(() => {
            clearInterval(l1);
            document.getElementById('status').innerHTML = 'Online';

            var l2 = setInterval(() => {
                clearInterval(l2);

                document.getElementById('status').innerHTML = 'Digitando...';

                var l3 = setInterval(() => {
                    clearInterval(l3);

                    document.getElementById('status').innerHTML = 'Online';
                    //aqui exibe a msg
                    Cerebro(pergunta);

                }, (tempoResposta * 3));


            }, (tempoResposta * 2));

        }, tempoResposta);
    });


    function Falar(pergunta) {
        var conteudoAntigo = document.getElementById('corpo').innerHTML;
        var conteudoComPergunta = conteudoAntigo + '<div class="minhaMsg">' + pergunta + '<br><span class="hora">' + HoraAtual() + ' <font id="leitura" class="leitura">&#x2714;&#x2714;</font></span></div>';
        document.getElementById('corpo').innerHTML = conteudoComPergunta;
        window.scrollTo(0, document.body.scrollHeight);
    }

    function Responder(resposta) {
        var conteudoAntigo = document.getElementById('corpo').innerHTML;
        var conteudoComPergunta = conteudoAntigo + '<div class="msgBot">' + resposta + '<br><span class="hora">' + HoraAtual() + '</span></div>';
        document.getElementById('corpo').innerHTML = conteudoComPergunta;
        window.scrollTo(0, document.body.scrollHeight);
    }



    function HoraAtual() {
        var d = new Date();
        var h = d.getHours();
        var t = d.getMinutes();
        10 > h ? h = '0' + h : h = h;
        10 > t ? t = '0' + t : t = t;
        return h + ':' + t;
    }

    function HoraAntes() {
        var d = new Date();
        var h = d.getHours();
        var t = d.getMinutes();
        if (t > 5)
            t = t - 3;
        else { t = 56; h = h - 1 }
        10 > h ? h = '0' + h : h = h;
        10 > t ? t = '0' + t : t = t;
        return h + ':' + t;
    }

    function BotaoMsg(palavra, link) {
        return '<center><a href="' + link + '"><button>' + palavra + '</button></a></center>';
    }
    function BotaoMsgDownload(palavra, link) {
        return '<center><a href="' + link + '" download><button>' + palavra + '</button></a></center>';
    }

    function AplicarTema() {
        if (tema == 1) {
            document.getElementById('topo').style.backgroundColor = '#333';
            document.getElementById('corpo').style.backgroundColor = '#666';
            document.getElementById('html').style.backgroundColor = '#666';
            document.getElementById('body').style.backgroundColor = '#666';
            document.getElementById('mensagem').style.backgroundColor = '#cfcfce';
            document.getElementById('enviar').style.backgroundColor = '#333';
        }
        if (tema == 2) {
            document.getElementById('topo').style.backgroundColor = '#30333b';
            document.getElementById('corpo').style.backgroundColor = '#2e4359';
            document.getElementById('html').style.backgroundColor = '#2e4359';
            document.getElementById('body').style.backgroundColor = '#2e4359';
            document.getElementById('mensagem').style.backgroundColor = '#cfcfce';
            document.getElementById('enviar').style.backgroundColor = '#333';
        }
        if (tema == 3) {
            document.getElementById('topo').style.backgroundColor = '#43578d';
            document.getElementById('corpo').style.backgroundColor = '#000';
            document.getElementById('html').style.backgroundColor = '#000';
            document.getElementById('body').style.backgroundColor = '#000';
            document.getElementById('mensagem').style.backgroundColor = '#304563';
            document.getElementById('enviar').style.backgroundColor = '#43578d';
            document.getElementById('mensagem').style.color = '#fff';
        }
    }



    //'+nomeUsuario+'
    function FalouObrigado() {
        const a = [
            'De nada' + nomeUsuario + '! Estou aqui para ajudar.' + EmojiAleatorio(),
            'Você é sempre bem-vindo(a)' + nomeUsuario + '! Se precisar de mais ajuda, é só chamar.' + EmojiAleatorio(),
            'Não há de quê' + nomeUsuario + '! Fico feliz em poder ajudar.' + EmojiAleatorio(),
            'É um prazer ajudar! Se tiver mais dúvidas, estou à disposição.' + EmojiAleatorio(),
            'Não mencione! Estou aqui para tornar as coisas mais fáceis para você.' + EmojiAleatorio(),
            'Sem problema' + nomeUsuario + '! Qualquer coisa que você precisar, estou aqui para responder.' + EmojiAleatorio(),
            'Estou à disposição sempre que precisar' + nomeUsuario + '. Agradeço por usar o meu serviço!' + EmojiAleatorio(),
        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }

    function NaoEntendeu() {
        console.log('nao entendeu');
        const a = [
            "Desculpa" + nomeUsuario + ", não tô ligando muito no que você quer calcular. Dá pra explicar de novo?" + triste,
            "Tô meio perdido" + nomeUsuario + ", não peguei direito o que você quer. Pode reformular, por favor?" + triste,
            "Hmm, tô com dificuldade de entender. Pode dar mais detalhes?" + triste,
            "Não tô pegando o que você quer calcular" + nomeUsuario + ". Pode simplificar um pouco?" + triste,
            "Não entendi direito sua pergunta" + nomeUsuario + ". Pode ser mais claro?" + triste,
            "Tá meio complicado" + nomeUsuario + ", não tô entendendo. Pode tentar de novo?" + triste,
            "Me ajuda aí" + nomeUsuario + ", não tô entendendo bem o que você quer calcular." + triste,
            "Não tô captando. Pode dar uma mãozinha" + nomeUsuario + "?" + triste,
            "Tô meio confuso" + nomeUsuario + ", não vou mentir. Pode explicar novamente?" + triste,

        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }

    function EmojiAleatorio() {
        const a = [
            '&#129303;',
            '&#129309;',
            '&#129312;',
            '&#129322;',
            '&#129325;',
            '&#129392;',
            '&#129396;',
            '&#129488;',
            '&#129497;',
        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }
</script>

</html>