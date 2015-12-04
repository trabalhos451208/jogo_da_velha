<?php include_once "/globais/header.php"; ?>

<?php  ?>
    <center><h1>Jogo da Velha</h1></center>
    <hr/>
    <div class="row">
        <div class="columns small-12 medium-12 large-12">
            <div class="small-4 medium-4 large-4 columns">
                <h4>Jogador 1(X)</h4>
            </div>
            <div class="small-4 medium-4 large-4 columns">
                <h4>Jogo</h4>
            </div>
            <div class="small-4 medium-4 large-4 columns">
                <h4>Jogador 2(O)</h4>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="columns small-12 medium-12 large-12">
            <div class="small-4 medium-4 large-4 columns">
                <table>
                    <tr>
                        <td><button name="jogador1_1" id="jogador1_1" onclick="jogadores(this);" value="1">1</button></td>
                        <td><button name="jogador1_2" id="jogador1_2" onclick=";"value="2">2</button></td>
                        <td><button name="jogador1_3" id="jogador1_3" onclick=";"value="3">3</button></td>
                    </tr>
                    <tr>
                        <td><button name="jogador1_4" id="jogador1_4" onclick=";"value="4">4</button></td>
                        <td><button name="jogador1_5" id="jogador1_5" onclick=";"value="5">5</button></td>
                        <td><button name="jogador1_6" id="jogador1_6" onclick=";"value="6">6</button></td>
                    </tr>
                    <tr>
                        <td><button name="jogador1_7" id="jogador1_7" onclick=";"value="7">7</button></td>
                        <td><button name="jogador1_8" id="jogador1_8" onclick=";"value="8">8</button></td>
                        <td><button name="jogador1_9" id="jogador1_9" onclick=";"value="9">9</button></td>
                    </tr>
                </table>
            </div>
            <div class="small-4 medium-4 large-4 columns">
                <table>
                    <tr>
                        <td><button name="jogo_1" id="jogo_1" value="1">1</button></td>
                        <td><button name="jogo_2" id="jogo_2" value="2">2</button></td>
                        <td><button name="jogo_3" id="jogo_3" value="3">3</button></td>
                    </tr>
                    <tr>
                        <td><button name="jogo_4" id="jogo_4" value="4">4</button></td>
                        <td><button name="jogo_5" id="jogo_5" value="5">5</button></td>
                        <td><button name="jogo_6" id="jogo_6" value="6">6</button></td>
                    </tr>
                    <tr>
                        <td><button name="jogo_7" id="jogo_7" value="7">7</button></td>
                        <td><button name="jogo_8" id="jogo_8" value="8">8</button></td>
                        <td><button name="jogo_9" id="jogo_9" value="9">9</button></td>
                    </tr>
                </table>
            </div>
            <div class="small-4 medium-4 large-4 columns">
                <table>
                    <tr>
                        <td><button name="jogador2_1" id="jogador2_1" onclick="jogadores(this);" value="b1">1</button></td>
                        <td><button name="jogador2_2" id="jogador2_2" onclick=";" value="b2">2</button></td>
                        <td><button name="jogador2_3" id="jogador2_3" onclick=";" value="b3">3</button></td>
                    </tr>
                    <tr>
                        <td><button name="jogador2_4" id="jogador2_4" onclick=";" value="b4">4</button></td>
                        <td><button name="jogador2_5" id="jogador2_5" onclick=";" value="b5">5</button></td>
                        <td><button name="jogador2_6" id="jogador2_6" onclick=";" value="b6">6</button></td>
                    </tr>
                    <tr>
                        <td><button name="jogador2_7" id="jogador2_7" onclick="" value="b7">7</button></td>
                        <td><button name="jogador2_8" id="jogador2_8" onclick="" value="b8">8</button></td>
                        <td><button name="jogador2_9" id="jogador2_9" onclick="" value="b9">9</button></td>
                    </tr>
                </table>
            </div>
        </div>
    </div>

<?php include_once "/globais/footer.php"; ?>