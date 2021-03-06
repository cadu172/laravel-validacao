<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incluir Cliente</title>
    <link href="{{asset('css/app.css')}}" rel="stylesheet" >
</head>
<body>
    <main role="main">
        <div class="row">
            <div class="container col-md-6 offset-md-3">
                <div class="card border">
                    <div class="card-header bg-secondary">
                        <div class="card-title text-white">INCLUSÃO DE CLIENTES</div>
                    </div>                    
                    <div class="card-body">
                        <form action="/cliente" method="POST" >
                            @csrf_token
                            <div class="form-group">
                                <label for="nome">NOME</label>
                                <input type="text"
                                    id="nome"
                                    name="nome"
                                    placeholder="informe o nome do cliente"
                                    class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="idade">IDADE</label>
                                <input type="text"
                                    id="idade"
                                    name="idade"
                                    placeholder="informe a idade do cliente"
                                    class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="endereco">ENDERECO</label>
                                <input type="text"
                                    id="endereco"
                                    name="endereco"
                                    placeholder="informe o endereco do cliente"
                                    class="form-control" />
                            </div>

                            <div class="form-group">
                                <label for="email">E-MAIL</label>
                                <input type="text"
                                    id="email"
                                    name="email"
                                    placeholder="informe o email do cliente"
                                    class="form-control" />
                            </div>                                                                                    

                            <button type="submit"
                                name="salvar"
                                id="salvar"
                                class="btn btn-primary">Salvar</button>

                            <button type="cancel"
                                name="cancelar"
                                id="cancelar"
                                class="btn btn-danger">Cancelar</button>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
</body>
</html>
