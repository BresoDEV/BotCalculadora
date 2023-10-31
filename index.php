<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    * {
        color: aliceblue;
        border: none;
        padding: 0;
        margin: 0;
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    .campoMsg {
        position: fixed;
        height: 70px;
        width: 100%;
        background-color: #393d42;
        bottom: 0px;
    }

    .topo {
        position: fixed;
        height: 40px;
        width: 100%;
        background-color: #393d42;
        top: 0px;
        color: aliceblue;
        padding-top: 10px;
        font-size: 30px;
    }


    .campoMsg input {
        height: 20px;
        width: 90%;
        background-color: #6a6e73;
        margin: none;
        margin-top: 5px;
        border-radius: 5px;
    }

    .campoMsg button {
        height: 30px;
        width: 90%;
        background-color: #6a6e73;
        margin: none;
        margin-top: 5px;
        border-radius: 5px;
        font-weight: bold;
    }

    .corpo {
        height: 78%;
        background-color: #171718;
        width: 100%;
        padding: 10px;
    }

    html {
        background-color: #171718;
    }

    .pergunta {
        background-color: #393d42;
        width: 90%;
        margin-left: 5%;
        padding: 7px;
        margin-top: 10px;
        border-radius: 5px;
    }

    .resposta {
        background-color: #393d42;
        width: 90%;
        margin-right: 7%;
        padding: 7px;
        margin-top: 10px;
        border-radius: 5px;
    }
</style>

<body id='tudo'>

    <center>
        <div class="topo">
            <span>&#120173;&#120215;&#120202;&#120216;&#120212; &#120173;&#120212;&#120217;</span>
        </div>
    </center>

    <br>
    <div class="campoMsg">
        <center>
            <input type="text" id="campoPergunta" placeholder="Digite aqui sua pergunta">
            <button onclick="perguntar()">Enviar</button>
        </center>
    </div>

    <div class='corpo' id='corpo'>
        &nbsp;
    </div>


    <br><br><br><br><br><br>
</body>
<script>

    var nomeUsuario = prompt('Ola, digite seu nome para iniciar a conversa', '');

    var tempoResposta = 1000;

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

    //msg ao entrar
    if (nomeUsuario == null) {
        nomeUsuario = NomeAleatorio();
        var msgInicial = [
            'Ja que não quis falar seu nome, vou te chamar de ' + nomeUsuario + ' ' + EmojiAleatorio() + ', seja bem vindo(a) ao bot de calculos',
            'Como estou na fase inicial de desenvolvimento, só consigo fazer contas com 2 numeros, ex: 20x542, mas com o tempo, pretendo melhorar minhas habilidades! ' + EmojiAleatorio(),
        ];
    }
    else {
        var msgInicial = [
            'Ola ' + nomeUsuario + ', seja bem vindo(a) ao bot de calculos',
            'Como estou na fase inicial de desenvolvimento, só consigo fazer contas com 2 numeros, ex: 20x542, mas com o tempo, pretendo melhorar minhas habilidades! ' + EmojiAleatorio(),
        ];
    }
    var indexmsgInicial = 0;

    Falar(msgInicial[0]);
    var msgin2 = setInterval(() => {
        clearInterval(msgin2);
        Falar(msgInicial[1]);
    }, 4000);
    //--------------------------------










    function perguntar() {
        var p = document.getElementById('campoPergunta').value;
        document.getElementById('campoPergunta').value = '';
        var historico = document.getElementById('corpo').innerHTML;
        document.getElementById('corpo').innerHTML = historico + '<div class="pergunta">' + p + '</div>';
        Falar(Cerebro(p));

    }

    function Cerebro(pergunta) {

        var resposta = '';
        var boleta = true;



        if (Contem(pergunta, '/dev')) {
            boleta = false;
            resposta = 'Voce ativou o modo DEV' + EmojiAleatorio() + ' Veja os comandos:<br><br>' +
                '<b>/tempo VALOR<i> </b></i>: Define o tempo de resposta em milisegundos<br>' +
                '<b>/cor R G B<i> </b></i>: Define a cor RGB do fundo<br>' +
                '<b><i> </b></i>: <br>';
        }

        if (Contem(pergunta, '/tempo')) {
            boleta = false;
            const num = pergunta.match(/\d+/g);
            const ints = num.map(Number);
            tempoResposta = ints[0];
            resposta = 'Tempo de resposta definido para ' + ints[0] + ' milisegundos';
        }
        if (Contem(pergunta, '/cor')) {
            boleta = false;
            const num = pergunta.match(/\d+/g);
            const ints = num.map(Number);
            var final = 'rgb(' + ints[0] + ' ' + ints[1] + ' ' + ints[2] + ')';
            document.getElementById('tudo').style.backgroundColor = final;
            document.getElementById('corpo').style.backgroundColor = final;
            resposta = 'Cor de fundo definida para os valores RGB ' + ints[0] + ',' + ints[1] + ',' + ints[2] + ' ' + EmojiAleatorio();
        }


        //---------------------------------------
        if (Contem(pergunta, 'bhaskara')) {
            boleta = false;
            resposta = 'A famosa fórmula de Bhaskara é representada da seguinte forma:<br>\u0394 = b\u00B2 - 4ac<br>x\u2081 = (-b + \u221A\u0394) / 2a<br>x\u2082 = (-b - \u221A\u0394) / 2a';
        }


        //---------------------------

        var palavra = [
            'thnks',
            'valeu',
            'perfeito',
            'tchau',
            'obrigado'
        ];
        if (boleta) {
            palavra.forEach(valor => {

                if (Contem(pergunta, valor)) {
                    boleta = false;
                    resposta = FalouObrigado();
                }
            });
        }


        //-------------------------------
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
                    resposta = Potencia(pergunta);
                }
            });
        }
        //-------------------------------
        palavra = [
            'raiz',
            'quadrada',
        ];
        if (boleta) {
            palavra.forEach(valor => {

                if (Contem(pergunta, valor)) {
                    boleta = false;
                    resposta = RaizQuadrada(pergunta);
                }
            });
        }
        //-------------------------------
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
                    resposta = SimbolosInvalidos();
                }
            });
        }














        //-------------------------------
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
                    resposta = Nao();
                }
            });
        }
        //-------------------------------
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
                    resposta = Sim();
                }
            });
        }

        //-------------------------------
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
                    resposta = Soma(pergunta);
                }
            });
        }

        //-------------------------------
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
                    resposta = Multiplicacao(pergunta);
                }
            });
        }

        //-------------------------------
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
                    resposta = Subtracao(pergunta);
                }
            });
        }
        //-------------------------------
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
                    resposta = Divisao(pergunta);
                }
            });
        }


        if (boleta) {
            resposta = NaoEntendeu();
        }


        return resposta;
    }


    function ContemNumeros(frase) {
        return /\d/.test(frase);
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

    function RaizQuadrada(p) {
        if (ContemNumeros(p)) {
            const num = p.match(/\d+/g);
            const ints = num.map(Number);
            return MontarRaiz(ints[0], ints[1], Math.sqrt(ints[0]));
        }
        else {
            return SemNumeros('raiz');
        }
    }

    function Potencia(p) {
        if (ContemNumeros(p)) {
            const num = p.match(/\d+/g);
            const ints = num.map(Number);
            if (2 == ints.length)
                return MontarPotencia(ints[0], ints[1], ints[0], Math.pow(ints[0], ints[1]));
            else
                return FaltouDigitarTodosNumeros("pot", ints[0]);
        }
        else {
            return SemNumeros("pot");
        }
    }




    function Contem(pergunta, palavra) {
        pergunta = pergunta.toLowerCase();
        palavra = palavra.toLowerCase();
        return pergunta.includes(palavra);
    }


    function Falar(msg) {

        //susbtitue a palavra 'undefined' caso a conta resulte em um valor indefinido
        //ex: raizes que nao existem
        if (Contem(msg, 'undefined')) {
            msg = msg.replace('undefined', 'um resultado invalido' + EmojiAleatorio());
        }
        var historico = document.getElementById('corpo').innerHTML;
        var msgin = setInterval(() => {
            document.getElementById('corpo').innerHTML = historico + '<div class="resposta">Digitando...</div>';
            var msgin2 = setInterval(() => {
                document.getElementById('corpo').innerHTML = historico + '<div class="resposta">' + msg + '</div>';
                clearInterval(msgin2);
                window.scrollTo(0, document.body.scrollHeight);
            }, (tempoResposta * 2));
            window.scrollTo(0, document.body.scrollHeight);
            clearInterval(msgin);
        }, tempoResposta);
        window.scrollTo(0, document.body.scrollHeight);
    }


    //-------------------------------------
    //-------------------------------------
    //-------------------------------------


    //'+nomeUsuario+'
    function SemNumeros(operacao) {

        const a = [
            'Parece que você não inseriu nenhum número. Por favor, insira os números necessários para a operação que deseja realizar.',
            'Nenhum número? Lembre-se de incluir pelo menos dois números para fazer uma conta.',
            'Está faltando algum número aí! Para qualquer operação matemática, você precisa de pelo menos dois números.',
            'Ops, sem números não dá para calcular nada! Certifique-se de inserir os valores necessários.',
            'Tá faltando alguma coisa aí. Para fazer uma conta, é importante ter pelo menos dois números.',
        ];

        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }

    //'+nomeUsuario+'
    function FaltouDigitarTodosNumeros(operacao, valorDigitado) {
        if (operacao === "+") {
            const a = [
                'Ops, parece que você esqueceu de digitar um número para somar. Por favor, insira os números que deseja somar.',
                'Faltou um número aí! Lembre-se de incluir todos os números que você quer somar.',
                'Você está quase lá, mas está faltando um número para a soma. Insira o número que está faltando.',
                'Para realizar a soma, é importante que todos os números estejam presentes. Verifique se você incluiu todos os valores.',
                'Parece que temos uma conta incompleta. Certifique-se de incluir todos os números que deseja somar.'
            ];
        }
        if (operacao === "-") {
            const a = [
                'Ops, parece que você esqueceu de digitar um número para subtrair. Por favor, insira todos os números necessários para a operação.',
                'Faltou um número aí! Lembre-se de incluir todos os valores para a subtração.',
                'Quase lá, mas está faltando um número para a operação de subtração. Insira o número que falta.',
                'Para realizar a subtração, é importante que todos os números estejam presentes. Verifique se você incluiu todos os valores.',
                'Parece que temos uma conta de subtração incompleta. Certifique-se de incluir todos os números que deseja subtrair.'

            ];
        }
        if (operacao === "*") {
            const a = [
                'Ops, parece que você esqueceu de digitar um número para multiplicar. Certifique-se de incluir todos os números necessários.',
                'Faltou um número aí! Lembre-se de incluir todos os valores para a multiplicação.',
                'Quase lá, mas está faltando um número para a operação de multiplicação. Insira o número que falta.',
                'Para realizar a multiplicação, é importante que todos os números estejam presentes. Verifique se você incluiu todos os valores.',
                'Parece que temos uma conta de multiplicação incompleta. Certifique-se de incluir todos os números que deseja multiplicar.'
            ];
        }
        if (operacao === "/") {
            const a = [
                'Ops, parece que você esqueceu de digitar um número para a divisão. Certifique-se de incluir todos os números necessários para a operação.',
                'Faltou um número aí! Lembre-se de incluir todos os valores para a divisão.',
                'Quase lá, mas está faltando um número para a operação de divisão. Insira o número que falta.',
                'Para realizar a divisão, é importante que todos os números estejam presentes. Verifique se você incluiu todos os valores.',
                'Parece que temos uma conta de divisão incompleta. Certifique-se de incluir todos os números que deseja dividir.'

            ];
        }
        if (operacao === "pot") {
            const a = [
                'Ops, parece que você esqueceu de digitar um número para calcular a potência. Certifique-se de incluir todos os números necessários para a operação.',
                'Faltou um número aí! Lembre-se de incluir todos os valores para a potenciação.',
                'Quase lá, mas está faltando um número para o cálculo da potência. Insira o número que falta.',
                'Para calcular a potência, é importante que todos os números estejam presentes. Verifique se você incluiu todos os valores.',
                'Parece que temos um cálculo de potência incompleto. Certifique-se de incluir todos os números que deseja elevar.'

            ];
        }

        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }

    //'+nomeUsuario+'
    function SimbolosInvalidos() {
        const a = [
            'Desculpe, não é possível calcular com os símbolos que você usou. Tente novamente com números e operadores válidos.' + triste,
            'Parece que alguns símbolos que você usou não são reconhecidos. Por favor, use números e operadores válidos.' + triste,
            'Ops, acho que você incluiu símbolos inválidos. Certifique-se de usar apenas números e operadores corretos nas contas.' + triste,
            'Desculpe, mas os símbolos que você usou não são aceitos. Certifique-se de que sua conta contenha apenas números e operadores válidos.' + triste,
            'Os símbolos que você inseriu não são reconhecidos. Tente novamente com números e operadores apropriados.' + triste

        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }

    //'+nomeUsuario+'
    function FalouObrigado() {
        const a = [
            'De nada! Estou aqui para ajudar.' + EmojiAleatorio(),
            'Você é sempre bem-vindo! Se precisar de mais ajuda, é só chamar.' + EmojiAleatorio(),
            'Não há de quê! Fico feliz em poder ajudar.' + EmojiAleatorio(),
            'É um prazer ajudar! Se tiver mais dúvidas, estou à disposição.' + EmojiAleatorio(),
            'Não mencione! Estou aqui para tornar as coisas mais fáceis para você.' + EmojiAleatorio(),
            'Sem problema! Qualquer coisa que você precisar, estou aqui para responder.' + EmojiAleatorio(),
            'Estou à disposição sempre que precisar. Agradeço por usar o meu serviço!' + EmojiAleatorio(),
        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }

    //'+nomeUsuario+'
    function NaoEntendeu() {
        console.log('nao entendeu');
        const a = [
            "Desculpa, não tô ligando muito no que você quer calcular. Dá pra explicar de novo?" + triste,
            "Tô meio perdido, não peguei direito o que você quer. Pode reformular, por favor?" + triste,
            "Hmm, tô com dificuldade de entender. Pode dar mais detalhes?" + triste,
            "Não tô pegando o que você quer calcular. Pode simplificar um pouco?" + triste,
            "Não entendi direito sua pergunta. Pode ser mais claro?" + triste,
            "Tá meio complicado, não tô entendendo. Pode tentar de novo?" + triste,
            "Me ajuda aí não tô entendendo bem o que você quer calcular." + triste,
            "Não tô captando. Pode dar uma mãozinha?" + triste,
            "Tô meio confuso, não vou mentir. Pode explicar novamente?" + triste,

        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }

    //'+nomeUsuario+'
    function Sim() {
        const a = [
            '',
            '',
            '',
            '',
        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }

    //'+nomeUsuario+'
    function Nao() {
        const a = [
            '',
            '',
            '',
            '',
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


    //'+nomeUsuario+'
    function MontarSoma(valor1, valor2, resultado) {
        const a = [
            'A soma de ' + valor1 + ' e ' + valor2 + ', é ' + resultado + '. Acertei? ' + EmojiAleatorio(),
            'Entendi, voce quer somar ' + valor1 + ' e ' + valor2 + '? Temos ' + resultado + '. Facil demais ' + EmojiAleatorio(),
            'Vamos la, ' + valor1 + ' somado a ' + valor2 + ' temos ' + resultado + '. Próxima... ' + EmojiAleatorio(),
            'Perfeito, ' + valor1 + ' com ' + valor2 + ', temos ' + resultado + '. Estou ficando bom nisso' + confiante,
            'Entendi, você quer somar ' + valor1 + ' e ' + valor2 + '? O resultado é ' + resultado + '. Muito simples! ' + EmojiAleatorio(),
            'Legal, você quer somar ' + valor1 + ' com ' + valor2 + ', né? Deu ' + resultado + '. Moleza! ' + EmojiAleatorio(),
            'Beleza, você tá afim de somar ' + valor1 + ' e ' + valor2 + ', certo? Resultado: ' + resultado + '. Fácil demais! ' + EmojiAleatorio(),
            'Perfeito, você quer somar ' + valor1 + ' + ' + valor2 + '? O resultado é ' + resultado + '. Muito fácil! ' + EmojiAleatorio(),
            'Então, você deseja fazer a soma de ' + valor1 + ' com ' + valor2 + ', certo? Resultado: ' + resultado + '. Tá tranquilo! ' + EmojiAleatorio(),

        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }

    //'+nomeUsuario+'
    function MontarDivisao(valor1, valor2, resultado) {
        const a = [
            'A divisão de ' + valor1 + ' por ' + valor2 + ', é ' + resultado,
            'Entendi, a divisão de ' + valor1 + ' por ' + valor2 + ', resulta em ' + resultado + '. Acertei? ' + EmojiAleatorio(),
            'Otimo,vamos calcular....<br>A divisão de ' + valor1 + ' por ' + valor2 + ', tem como resultado ' + resultado + '. Correto? ' + EmojiAleatorio(),
            'Perfeito,um pouco mais dificil, mas vamos lá!!' + confiante + '<br>Se voce pegar ' + valor1 + ' e dividir ele por ' + valor2 + ', tem como resultado ' + resultado + '. Acertei né? ' + EmojiAleatorio(),
            'Essa ficou facil demais!!! vamos lá' + confiante + '<br>Se voce pegar ' + valor1 + ' e dividir ele por ' + valor2 + ', tem como resultado ' + resultado + '. Acertei né? ' + EmojiAleatorio(),
            'Perfeito, um pouco mais complicado, mas a gente consegue!<br>Se você pegar ' + valor1 + ' e dividir por ' + valor2 + ', o resultado é ' + resultado + '. ',
            'Tudo certo, essa é uma pergunta mais desafiadora, mas não tem problema!<br>Se você dividir ' + valor1 + ' por ' + valor2 + ', o resultado é ' + resultado + '. ',
            'Sem problemas, isso é um pouco mais difícil, mas vamos lá!<br>Quando você divide ' + valor1 + ' por ' + valor2 + ', o resultado é ' + resultado + '. ',
            'Entendi, isso é um desafio, mas a gente consegue!<br>Se você pegar ' + valor1 + ' e dividir por ' + valor2 + ', o resultado é ' + resultado + '. ',
            'Beleza, essa é mais complicadinha, mas não tem segredo! <br>Quando você divide ' + valor1 + ' por ' + valor2 + ', o resultado é ' + resultado + '. '

        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }

    //'+nomeUsuario+'
    function MontarMultiplicacao(valor1, valor2, resultado) {
        const a = [
            'A multiplicação de ' + valor1 + ' por ' + valor2 + ', é ' + resultado,
            'Entendi, se voce pegar ' + valor1 + ' e fazer esse valor, vezes ' + valor2 + ', o resultado é ' + resultado,
            'Agora ficou um pouco mais dificil' + EmojiAleatorio() + ' mas vamos la, se voce pegar ' + valor1 + ' e fazer esse valor, vezes ' + valor2 + ', o resultado é ' + resultado,
            'Perfeito, ' + valor1 + ' vezes ' + valor2 + ', é ' + resultado + ' ' + EmojiAleatorio(),
            'Entendi, se você pegar ' + valor1 + ' e multiplicar por ' + valor2 + ', o resultado é ' + resultado,
            'Legal, então, se a gente pegar ' + valor1 + ' e multiplicar por ' + valor2 + ', o resultado é ' + resultado,
            'Beleza, se você pegar ' + valor1 + ' e fizer ' + valor2 + ' vezes, o resultado é ' + resultado,
            'Entendi, se você pegar ' + valor1 + ' e multiplicar ele por ' + valor2 + ', o resultado é ' + resultado,
            'Perfeito, se você fizer ' + valor1 + ' vezes ' + valor2 + ', o resultado é ' + resultado

        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }

    //'+nomeUsuario+'
    function MontarSubtracao(valor1, valor2, resultado) {
        const a = [
            'A subtração de ' + valor1 + ' de ' + valor2 + ', é ' + resultado + '. Algo mais? ' + EmojiAleatorio(),
            'Perfeito, ' + valor1 + ' menos ' + valor2 + ', é ' + resultado + '. Acertei? ' + EmojiAleatorio(),
            'Entendi, se temos ' + valor1 + ' e removemos ' + valor2 + ' dele, nos resta ' + resultado,
            'Entendi, vou fazer a conta aqui, rapidinho. Se temos ' + valor1 + ' e removemos ' + valor2 + ' dele, nos resta ' + resultado,
            'Entendi, se temos ' + valor1 + ' e removemos ' + valor2 + ' dele, nos resta ' + resultado,
            'Legal, então, se a gente partir de ' + valor1 + ' e subtrair ' + valor2 + ', o resultado é ' + resultado,
            'Beleza, se começarmos com ' + valor1 + 'e tirarmos ' + valor2 + ', o que sobra é ' + resultado,
            'Entendi, se começarmos com ' + valor1 + ' e subtrairmos ' + valor2 + ', o resultado é ' + resultado,
            'Perfeito, se a gente remover ' + valor2 + ' de ' + valor1 + ', o resultado é ' + resultado

        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }

    //'+nomeUsuario+'
    function MontarPotencia(valor1, valor2, resultado) {
        const a = [
            'Entendi, o valor ' + valor1 + ' elevado à potência ' + valor2 + ' é igual a ' + resultado,
            'Legal, então, quando elevamos ' + valor1 + ' à potência ' + valor2 + ', obtemos ' + resultado,
            'Beleza, se você calcular ' + valor1 + ' elevado a ' + valor2 + ', o resultado é ' + resultado,
            'Entendi, quando elevamos ' + valor1 + ' à potência ' + valor2 + ', o resultado é ' + resultado,
            'Perfeito, o valor de ' + valor1 + ' elevado a ' + valor2 + ' é ' + resultado,
            'O valor ' + valor1 + ' elevado a potencia ' + valor2 + ', é ' + resultado,
            'Entendi, se voce pegar o valor ' + valor1 + ', e elevar a potencia ' + valor2 + ', o resultado vai ser ' + resultado + '. Acertei? ' + EmojiAleatorio(),
            'Perfeito, o valor ' + valor1 + ', elevado a potencia de ' + valor2 + ', vai resultar em ' + resultado + '. Correto? ' + EmojiAleatorio(),
            'Entendi, o valor ' + valor1 + ', elevado a potencia de ' + valor2 + ', chegaremos em ' + resultado + '. Valor alto nao? ' + EmojiAleatorio(),
        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }


    //'+nomeUsuario+'
    function MontarRaiz(valor1, resultado) {
        const a = [
            'Essa ficou fácil demais, a raiz quadrada de ' + valor1 + ' é ' + resultado,
            'Legal, a raiz quadrada de ' + valor1 + ' é ' + resultado + '. Moleza!',
            'Beleza, quando calculamos a raiz quadrada de ' + valor1 + ', o resultado é ' + resultado,
            'Entendi, a raiz quadrada de ' + valor1 + ' é ' + resultado + '. Facinho, né?',
            'Perfeito, a raiz quadrada de ' + valor1 + ' é ' + resultado + '. Simples assim!',
            'Ok, a raiz quadrada de ' + valor1 + ' é ' + resultado + '. Acertei? ' + EmojiAleatorio(),
            'Agora ficou dificil haha, bom, raiz quadrada de ' + valor1 + ' é ' + resultado + ' ' + EmojiAleatorio(),
            'Agora ficou dificil ' + rindo + ', mas bem, raiz quadrada de ' + valor1 + ' é ' + resultado + ' ' + EmojiAleatorio(),
            'Essa ficou facil demais,a raiz quadrada de ' + valor1 + ' é ' + resultado + ' ' + confiante,
        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }



    function NomeAleatorio() {
        const a = [
            'Patolino',
            'Papa-leguas',
            'Vovó Mafalda',
            'Bebe Dinossauro',
            'Pernalonga',
            'Mickey Mouse',
            'Bob Esponja',
            'Pateta',
            'Scooby-Doo',
            'Picapau',
            'Fred Flintstone',
            'Dora, a Aventureira',
            'Zé Colmeia',
            'Piu-Piu',
            'Frajola',
            'Pantera Cor-de-Rosa',
            'Zé Carioca'
        ];
        const ia = Math.floor(Math.random() * a.length);
        return a[ia];
    }


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




</script>

</html>