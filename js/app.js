/**jogador 1**/
function jogadores(botao){
    var jogador = "X";
    if(jogador == "X"){
        if(botao.value != "O" && botao.value != "X"){
            if(botao.value == "1"){
                document.getElementById("jogo_1").disable = true;
                document.getElementById("jogo_1").innerHTML = "X";
                document.getElementById("jogador2_1").disable = true;
                document.getElementById("jogador2_1").innerHTML = "X";
                document.getElementById("jogador2_1").valor = "X";
                botao.disable = true;
                botao.innerHTML = "X";
                botao.valor = "X";
                jogador = "O";
                alert ("vez do Jogador 2!");
            }
        }
    }
    if(jogador == "O"){
        if(botao.value != "O" && botao.value != "X"){
            if(botao.value == "b1"){
                document.getElementById("jogo_1").disable = true;
                document.getElementById("jogo_1").innerHTML = "O";
                document.getElementById("jogador2_1").disable = true;
                document.getElementById("jogador2_1").innerHTML = "O";
                document.getElementById("jogador2_1").valor = "O";
                botao.disable = true;
                botao.innerHTML = "O";
                botao.valor = "O";
                jogador = "X";
                alert ("vez do Jogador 1!");
            }
        }
    }
}