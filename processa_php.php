<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style_3.css">
    <title>SUCESSO!!!</title>
</head>

<body>
    <div id="caixa">
        <div id="confirmacao">
            <form action="index.php" method="get">
                <?php
                $total_economizado = '0';
                $total_pizzas = '0';
                $total_intens = '0';
                $pizzas = array(
                    array("Calabresa", 30, 35),
                    array("Mussarela", 30, 35),
                    array("Portuguesa", 40, 45),
                    array("Frango c/ Catupiry", 50, 55),
                    array("Nuttela c/ Ninho", 40, 45),
                    array("Chocolate c/ Morango", 35, 40),
                );
                $valor_total = '';
                $_checkbox = $_GET['caixas'];
                echo 'PEDIDO ENVIADO COM SUCESSO!!!';
                echo '<br><br>';
                echo 'Cliente: ' . $_GET['nome'];
                echo '<br>';
                echo 'Endereço de entrega: ' . $_GET['end'];
                echo '<br>';
                echo 'CEP: ' . $_GET['cep'];
                echo '<br>';
                echo 'Contato: ' . $_GET['contato'];
                echo '<br><br>';
                echo 'SEU PEDIDO:';
                foreach ($_checkbox as $_valor) {
                    echo "<br>";
                    $total_intens++;
                    echo $total_intens . '-ITEM. ';
                    switch ($_valor) {
                        case 'Calabresa Broto':
                            $valor_total = (int)$valor_total + ((int)$pizzas[0][1]) * $_GET['qntd_1'];
                            echo $pizzas[0][0] . ' -------- Broto -------- ' . 'R$' . ((int)$pizzas[0][1]) * $_GET['qntd_1'] . ' -------- Quantidade: ' . $_GET['qntd_1'];
                            $total_pizzas = $total_pizzas + $_GET['qntd_1'];
                            break;
                        case 'Calabresa Grande':
                            $valor_total = (int)$valor_total + (int)$pizzas[0][2] * $_GET['qntd_2'];
                            echo $pizzas[0][0] . ' -------- Grande -------- ' . 'R$' . ((int)$pizzas[0][2]) * $_GET['qntd_2'] . ' -------- Quantidade: ' . $_GET['qntd_2'];
                            $total_pizzas = $total_pizzas + $_GET['qntd_2'];
                            break;
                        case 'Mussarela Broto':
                            $valor_total = (int)$valor_total + (int)$pizzas[1][1] * $_GET['qntd_3'];
                            echo $pizzas[1][0] . ' -------- Broto -------- ' . 'R$' . ((int)$pizzas[1][1]) * $_GET['qntd_3'] . ' -------- Quantidade: ' . $_GET['qntd_3'];
                            $total_pizzas = $total_pizzas + $_GET['qntd_3'];
                            break;
                        case 'Mussarela Grande':
                            $valor_total = (int)$valor_total + (int)$pizzas[1][2] * $_GET['qntd_4'];
                            echo $pizzas[1][0] . ' -------- Grande -------- ' . 'R$' . ((int)$pizzas[1][2]) * $_GET['qntd_4'] . ' -------- Quantidade: ' . $_GET['qntd_4'];
                            $total_pizzas = $total_pizzas + $_GET['qntd_4'];
                            break;
                        case 'Portuguesa Broto':
                            $valor_total = (int)$valor_total + (int)$pizzas[2][1] * $_GET['qntd_5'];
                            echo $pizzas[2][0] . ' -------- Broto -------- ' . 'R$' . ((int)$pizzas[2][1]) * $_GET['qntd_5'] . ' -------- Quantidade: ' . $_GET['qntd_5'];
                            $total_pizzas = $total_pizzas + $_GET['qntd_5'];
                            break;
                        case 'Portuguesa Grande':
                            $valor_total = (int)$valor_total + (int)$pizzas[2][2] * $_GET['qntd_6'];
                            echo $pizzas[2][0] . ' -------- Grande -------- ' . 'R$' . ((int)$pizzas[2][2]) * $_GET['qntd_6'] . ' -------- Quantidade: ' . $_GET['qntd_6'];
                            $total_pizzas = $total_pizzas + $_GET['qntd_6'];
                            break;
                        case 'Frango c/ Catupiry Broto':
                            $valor_total = (int)$valor_total + (int)$pizzas[3][1] * $_GET['qntd_7'];
                            echo $pizzas[3][0] . ' -------- Broto -------- ' . 'R$' . ((int)$pizzas[3][1]) * $_GET['qntd_7'] . ' -------- Quantidade: ' . $_GET['qntd_7'];
                            $total_pizzas = $total_pizzas + $_GET['qntd_7'];
                            break;
                        case 'Frango c/ Catupiry Grande':
                            $valor_total = (int)$valor_total + (int)$pizzas[3][2] * $_GET['qntd_8'];
                            echo $pizzas[3][0] . ' -------- Grande -------- ' . 'R$' . ((int)$pizzas[3][2]) * $_GET['qntd_8'] . ' -------- Quantidade: ' . $_GET['qntd_8'];
                            $total_pizzas = $total_pizzas + $_GET['qntd_8'];
                            break;
                        case 'Nuttela c/ Ninho Broto':
                            $valor_total = (int)$valor_total + (int)$pizzas[4][1] * $_GET['qntd_9'];
                            echo $pizzas[4][0] . ' -------- Broto -------- ' . 'R$' . ((int)$pizzas[4][1]) * $_GET['qntd_9'] . ' -------- Quantidade: ' . $_GET['qntd_9'];
                            $total_pizzas = $total_pizzas + $_GET['qntd_9'];
                            break;
                        case 'Nuttela c/ Ninho Grande':
                            $valor_total = (int)$valor_total + (int)$pizzas[4][2] * $_GET['qntd_10'];
                            echo $pizzas[4][0] . ' -------- Grande -------- ' . 'R$' . ((int)$pizzas[4][2]) * $_GET['qntd_10'] . ' -------- Quantidade: ' . $_GET['qntd_10'];
                            $total_pizzas = $total_pizzas + $_GET['qntd_10'];
                            break;
                        case 'Chocolate c/ Morango':
                            $valor_total = (int)$valor_total + (int)$pizzas[5][1] * $_GET['qntd_11'];
                            echo $pizzas[5][0] . ' -------- Broto -------- ' . 'R$' . ((int)$pizzas[5][1]) * $_GET['qntd_11'] . ' -------- Quantidade: ' . $_GET['qntd_11'];
                            $total_pizzas = $total_pizzas + $_GET['qntd_11'];
                            break;
                        case 'Chocolate c/ Morango':
                            $valor_total = (int)$valor_total + (int)$pizzas[5][2] * $_GET['qntd_12'];
                            echo $pizzas[5][0] . ' -------- Grande -------- ' . 'R$' . ((int)$pizzas[5][2]) * $_GET['qntd_12'] . ' -------- Quantidade: ' . $_GET['qntd_12'];
                            $total_pizzas = $total_pizzas + $_GET['qntd_12'];
                            break;
                        default:
                            break;
                    }
                }
                echo '<br><br>';
                $_checkbox_2 = $_GET['endereco'];
                foreach ($_checkbox_2 as $_end) {
                    switch ($_end) {
                        case 'Retirar na Pizzaria':
                            echo $_end . ' -------- R$00';
                            break;
                        case 'Motoboy':
                            echo $_end . ' -------- R$10';
                            $valor_total = $valor_total + 10;
                            break;

                        default:
                            break;
                    }
                }
                if ($total_pizzas == 2) {
                    $valor_desconto = $valor_total - ($valor_total / 100 * 10);
                } elseif ($total_pizzas >= 3) {
                    $valor_desconto = $valor_total - ($valor_total / 100 * 15);
                } else {
                    $valor_desconto = $valor_total;
                }
                echo '<br><br>';
                echo 'Valor total ' . 'R$' . $valor_desconto;
                echo '<br>';
                $total_economizado = $valor_total - $valor_desconto;
                echo 'Valor economizado: R$' . $total_economizado;
                echo '<br><br>';
                ?>
                <button type="submit" class="btn btn-primary">Voltar</button>
            </form>
        </div>
    </div>
</body>

</html>