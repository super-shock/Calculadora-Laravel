<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }
            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 50px;
                font-family: 'Lato';
            }



* {
    margin: 0;
    padding: 0;
}

fieldset {
    border: 0;
}

body, input, select, textarea, button {
    font-family: sans-serif;
    font-size: 1em;
}

.grupo:before, .grupo:after {
    content: " ";
    display: table;
}

.grupo:after {
    clear: both;
}

.campo {
    margin-bottom: 1em;
}

.campo label {
    margin-bottom: 0.2em;
    color: #666;
    display: block;
}

fieldset.grupo .campo {
    float:  left;
    margin-right: 1em;
}

.campo input[type="text"],
.campo input[type="email"],
.campo input[type="url"],
.campo input[type="tel"],
.campo select,
.campo textarea {
    padding: 0.2em;
    border: 1px solid #CCC;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
    display: block;
}

.campo select option {
    padding-right: 1em;
}

.campo input:focus, .campo select:focus, .campo textarea:focus {
    background: #FFC;
}

.campo label.checkbox {
    color: #000;
    display: inline-block;
    margin-right: 1em;
}

.botao {
    font-size: 1.5em;
    background: #F90;
    border: 0;
    margin-bottom: 1em;
    color: #FFF;
    padding: 0.2em 0.6em;
    box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
    text-shadow: 1px 1px 1px rgba(0,0,0,0.5);
}

.botao:hover {
    background: #FB0;
    box-shadow: inset 2px 2px 2px rgba(0,0,0,0.2);
    text-shadow: none;
}

.botao, select, label.checkbox {
    cursor: pointer;
}
        </style>
    </head>
    <body>
    <!-- <div class="container">
            <div class="content">
                <div class="title">Adicionar novo Funcionário:</div>
            </div>
        </div> -->
        <div class="title">Divisão:</div><br>
        <script>
            var div1=prompt("Digite o primeiro número");
            var div2=prompt("Digite o segundo número");

            var divisao=parseInt(div1)/parseInt(div2);

            document.write(" A divisão dos números é : " + divisao + "");
        </script>
        <!-- <form name="form" method="get">
            <fieldset class="grupo">
                <div class="campo">
                    <label for="nome">Primeiro campo</label>
                    <input type="text" id="nome" name="nome" style="width: 10em" value="">
                </div>
                <div class="campo">
                    <label for="snome">Segundo campo</label>
                    <input type="text" id="snome" name="snome" style="width: 10em" value="">
                </div>
            </fieldset>

            <button type="submit" name="submit">Calcular</button>
        </form>  -->
    </body>
</html>