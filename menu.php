<html ng-app="risadinha">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <!-- <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css"> -->
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">
        <link href="css/estilo.css" rel="stylesheet" type="text/css">
    </head>
    <body ng-controller="listaPiadas">  
        <button ng-click="toggleContraste()" class="btn btn-primary">Contraste</button>
        <button ng-click="upperLetter()" ng-disabled="font >= 20" class="btn btn-success">A +</button>
        <button ng-click="lowerLetter()" ng-disabled="font <= 5" class="btn btn-danger">A -</button>


        <div class="navbar navbar-default navbar-static-top">
            <img src="imagens/risadinha_fundogelo.png" class="logo">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        
                    </a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li ng-class="menu_ativo == 'index' ? 'active' : ''" ng-click="setMenuAtivo('index')">
                            <a href="index.php">Início</a>
                        </li>
                        <li ng-class="menu_ativo == 'somos' ? 'active' : ''" ng-click="setMenuAtivo('somos')">
                            <a href="quem_somos.php">Quem Somos</a>
                        </li>
                        <li ng-class="menu_ativo == 'vistos' ? 'active' : ''" ng-click="setMenuAtivo('vistos')">
                            <a href="mais_vistos.php">+ Vistos</a>
                        </li>
                        <li ng-class="menu_ativo == 'contato' ? 'active' : ''" ng-click="setMenuAtivo('contato')">
                            <a href="contato.php">Contato</a>
                        </li>
                        <li ng-class="menu_ativo == 'imprensa' ? 'active' : ''" ng-click="setMenuAtivo('imprensa')">
                            <a href="imprensa.php">Imprensa</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>