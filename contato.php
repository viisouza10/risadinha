<?php  require_once 'menu.php'; ?>
        <div class="section section-danger">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="jumbotron">
                            <h1 class="text-center text-danger">imagem do banner</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">Tem uma piada interessante? Conta pra gente! ;)</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <form role="form">
                            <div class="form-group has-feedback">
                                <label class="control-label" for="exampleInputEmail1">Título &nbsp;</label>
                                <input class="form-control input-lg" id="exampleInputEmail1" placeholder="Assunto" type="text">
                                <span class="fa fa-check form-control-feedback"></span>
                            </div>
                            <div class="form-group has-feedback">
                                <label class="control-label" for="exampleInputPassword1">Email &nbsp;</label>
                                <input class="form-control input-lg" id="exampleInputPassword1" placeholder="Email" type="email">
                                <span class="fa fa-check form-control-feedback"></span>
                            </div>
                            <div class="form-group">
                                <label class="control-label">Escreva sua mensagem</label>
                                <textarea class="form-control"></textarea>
                            </div>
                            <button type="Enviar" class="btn btn-default btn-lg">Submit</button>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <?php  require_once 'rodape.php'; ?>
    </body>
</html>
