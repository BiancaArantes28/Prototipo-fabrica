<html>
    <head>
        <meta charset="utf-8">
        <title>Painel Fábrica</title>
        <link href="css/bootstrap/css/bootstrap.css" rel="stylesheet">
        <link href="css/loja.css" rel="stylesheet">
        <link href="css/estilo.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="principal">
                <h1>Bem vindo!</h1>
                <h2>Login</h2>
                <form action="login.php" method="post">
                    <table class="table">
                        <tr>
                            <td>Email</td>
                            <td><input class="form-control" type="email" name="email"></td>
                        </tr>
                        <tr>
                            <td>Senha</td>
                            <td><input class="form-control" type="password" name="senha"></td>
                        </tr>
                        <tr>
                            <td><button class="btn btn-primary">Login</button></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>