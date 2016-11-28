<?php require_once 'menu.php'; ?>
        <!-- <button id="btn_gravar_audio">aqui</button> -->
        <p id="campo_texto"></p>
        <div class="section section-danger">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="input-group">
                          <input type="text" class="form-control" placeholder="Fale ou digite para pesquisar..." id="busca" ng-model="busca">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button" >Buscar!</button>
                          </span>
                        </div><!-- /input-group -->
                        <br>
                        <div class="jumbotron" ng-if="!busca">
                            <h1 id="banner">Quer pesquisar uma piada? Clique aqui! </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <h1 ng-if="busca">Piadas de <strong class="txt-danger">{{busca}}</strong></h1>
                <div class="row" ng-if="!busca" id="welcome">
                    <div class="col-md-12">
                        <div class="section">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="section">
                                            <div class="container">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <img src="{{piada_principal.imagem}}" class="img-responsive">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-11">
                                            <h1>{{piada_principal.titulo}}</h1>
                                            <p ng-bind-html="piada_principal.piada"></p>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="col-md-12">
                                            <img src="{{piada_secundaria_topo.imagem}}" class="img-responsive">
                                            <h2>{{piada_secundaria_topo.titulo}}</h2>
                                        </div>
                                        <div class="col-md-12">
                                            <img src="{{piada_secundaria_baixo.imagem}}" class="img-responsive">
                                            <h2>{{piada_secundaria_baixo.titulo}}</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
         <div class="section">
             <div class="container">
                <!-- <div class="section" ng-if="busca" ng-repeat="piada in piadas track by $index" ng-class="$index % 3 == 0 ? 'row' : ''"> -->
                <div class="row">
                  <div class="col-sm-6 col-md-4 item-piada" ng-if="busca" ng-repeat="piada in piadas | filter:busca">
                    <div class="thumbnail">
                      <img ng-src="{{piada.imagem}}" alt="...">
                      <div class="caption">
                        <h3>{{piada.titulo}}</h3>
                        <p ng-bind-html="piada.piada"></p>
                        <p><a href="#" class="btn btn-success" role="button">Ouvir</a> <a href="#" class="btn btn-danger" role="button">Parar</a></p>
                      </div>
                    </div>
                  </div>
                 </div>
             </div>
         </div>
                 </div>
             </div>
        <?php require_once 'rodape.php'; ?>         
    </body>
</html>
