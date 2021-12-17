<!DOCTYPE html>
<html lang="pt">

<head>

    <head>
        <title>Pizzaria - Pedido</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="style_1.css">
    </head>
</head>

<body>
    <div id="global">
        <header>
            <img src="" alt="" class="banner">
            <nav class="navbar navbar-expand navbar-light bg-light">
                <div class="nav navbar-nav">
                    <a class="nav-item nav-link active" href="./">Home <span class="sr-only">(current)</span></a>
                    <a class="nav-item nav-link" href="#">Pedido</a>
                </div>
            </nav>
        </header>
        <main>
            <div id="form_pedido">
                <div id="caixa">
                    <form action="processa_php.php" method="get" name="form" id="form">
                        <h2>Faça seu pedido:</h1>
                            <hr>
                            <div class="form-group">
                                <label for="nome"><b>Digite seu nome:</b></label></br>
                                <input type="text" required="required" class="form-control" name="nome" id="nome" placeholder="..."></br>
                                <label for="end"><b>Endereço:</b></label></br>
                                <input type="text" required="required" class="form-control" name="end" id="end" placeholder="..."></br>
                                <label for="cep"><b>CEP:</b></label></br>
                                <input type="text" required="required" class="form-control" name="cep" id="cep" placeholder="..."></br>
                                <label for="contato"><b>Contato:</b></label></br>
                                <input type="text" required="required" class="form-control" name="contato" id="cantato" placeholder="(xx) x xxxx-xxxx"></br>
                                <label for="pedido"><b>Cardápio</b></label>
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Tipo</th>
                                            <th>Broto</th>
                                            <th>Quantidade</th>
                                            <th>Grande</th>
                                            <th>Quantidade</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Salgada</td>
                                            <td><input type="checkbox" name="caixas[]" value="Calabresa Broto"> Calabresa </td>
                                            <td><input type="number" min="1" name="qntd_1" id="qntd"></td>
                                            <td><input type="checkbox" name="caixas[]" value="Calabresa Grande"> Calabresa </td>
                                            <td><input type="number" min="1" name="qntd_2" id="qntd"></td>
                                        </tr>
                                        <tr>
                                            <td>Salgada</td>
                                            <td><input type="checkbox" name="caixas[]" value="Mussarela Broto"> Mussarela</td>
                                            <td><input type="number" min="1" name="qntd_3" id="qntd"></td>
                                            <td><input type="checkbox" name="caixas[]" value="Mussarela Grande"> Mussarela</td>
                                            <td><input type="number" min="1" name="qntd_4" id="qntd"></td>
                                        </tr>
                                        <tr>
                                            <td>Salgada</td>
                                            <td><input type="checkbox" name="caixas[]" value="Portuguesa Broto"> Portuguesa</td>
                                            <td><input type="number" min="1" name="qntd_5" id="qntd"></td>
                                            <td><input type="checkbox" name="caixas[]" value="Portuguesa Grande"> Portuguesa</td>
                                            <td><input type="number" min="1" name="qntd_6" id="qntd"></td>
                                        </tr>
                                        <tr>
                                            <td>Salgada</td>
                                            <td><input type="checkbox" name="caixas[]" value="Frango c/ Catupiry Broto"> Frango c/ Catupiry</td>
                                            <td><input type="number" min="1" name="qntd_7" id="qntd"></td>
                                            <td><input type="checkbox" name="caixas[]" value="Frango c/ Catupiry Grande"> Frango c/ Catupiry</td>
                                            <td><input type="number" min="1" name="qntd_8" id="qntd"></td>
                                        </tr>
                                        <tr>
                                            <td>Doce</td>
                                            <td><input type="checkbox" name="caixas[]" value="Nuttela c/ Ninho Broto"> Nuttela c/ Ninho</td>
                                            <td><input type="number" min="1" name="qntd_9" id="qntd"></td>
                                            <td><input type="checkbox" name="caixas[]" value="Nuttela c/ Ninho Grande"> Nuttela c/ Ninho</td>
                                            <td><input type="number" min="1" name="qntd_10" id="qntd"></td>
                                        </tr>
                                        <tr>
                                            <td>Doce</td>
                                            <td><input type="checkbox" name="caixas[]" value="Chocolate c/ Morango"> Chocolate c/ Morango</td>
                                            <td><input type="number" min="1" name="qntd_11" id="qntd"></td>
                                            <td><input type="checkbox" name="caixas[]" value="Chocolate c/ Morango"> Chocolate c/ Morango</td>
                                            <td><input type="number" min="1" name="qntd_12" id="qntd"></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <label for="entrega"><b>Selecione o modo de entrega: </b></label><br>
                                <input type="radio" name="endereco[]" onclick="verificarCheckBox()" required="required" value="Retirar na Pizzaria"> Retirar na Pizzaria <br>
                                <input type="radio" name="endereco[]" onclick="verificarCheckBox()" required="required" value="Motoboy"> Motoboy <br><br>
                            </div>
                            <button type="submit" onsubmit="verificar()" class="btn btn-primary">Enviar pedido</button>
                            <button type="reset" class="btn btn-primary">Apagar pedido</button>
                    </form>
                </div>
        </main>
        <footer>

        </footer>
    </div>
    </div>
</body>

</html>