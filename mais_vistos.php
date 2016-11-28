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
                    <div class="col-md-4" ng-repeat="piada in piadas | limitTo:9">
                        <img src="{{piada.imagem}}" class="img-responsive">
                        <h2 class="text-center">{{piada.titulo}} ({{piada.visto}})</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="{{piada.imagem}}" class="img-responsive">
                        <h2 class="text-center">{{piada.titulo}} ({{piada.visto}})</h2>
                    </div>
                    <div class="col-md-4">
                        <img src="{{piada.imagem}}" class="img-responsive">
                        <h2 class="text-center">{{piada.titulo}} ({{piada.visto}})</h2>
                    </div>
                </div>
            </div>
        </div>
        <?php  require_once 'rodape.php'; ?>
    </body>
</html>
