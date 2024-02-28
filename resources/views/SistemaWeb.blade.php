<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
</head>
    <body>
        <div class="container">

            <div class="row">
                <div class="col">
                    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
                        <div class="container-fluid text-bg-primary p-3">
                            <a class="navbar-brand text-light" href="#">SISTEMA WEB</a>
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                                    <div class="navbar-nav">
                                        <a class="nav-link active text-light" aria-current="page" href="#">Cadastrar</a>
                                        <a class="nav-link text-light" href="#">Consultar</a>
                                    </div>
                                </div>
                        </div>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col">
                <br><h4>Cadastrar - Agendamento de Ponteciais Clientes </h4>
                <br><h6>Sistema Utilizado para Agendamento de Serviços </h6><br>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Nome:</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite o nome">
                    </div>

                    <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Telefone:</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Digite o telefone">
                    </div>
                    
                    <div class="mb-3">
                        <label for="exampleFormControlInput1" class="form-label">Origem:</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Selecione uma opção</option>
                            <option value="1">Celular</option>
                            <option value="2">Telefone Fixo</option>
                        </select>
                    </div>

                    <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Example textarea</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    </div>
                </div>
            </div>

            
            
        
        </div>
        
    </body>
</html>