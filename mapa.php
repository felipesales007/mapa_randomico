<html>
    <head>
        <title>Mapa | Vigilante</title>
        <?php require_once("import.php");?>
    </head>

    <body>
        <!-- formulário -->
            <div id="corpo">
                <form class="well" action="banco/banco_insert.php" method="POST">
                    <fieldset>
                        <!-- titulo -->
                        <legend><center><i class="fa fa-map-o"></i> Local<br><br></center></legend>

                        <!-- obtém e salva as coordenadas -->
                        <div class="form-group hidden"> <!-- o hidden mantém o input oculto -->
                            <div class="input-group">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-map-marker"></i></span>
                                <textarea tabindex="2" class="form-control" id="ponto" name="ponto" rows="2"></textarea>
                            </div>
                        </div>                      

                        <!-- botão -->
                        <center>
                            <br>
                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <button tabindex="3" class="btn btn-success button btn-block" onclick="numeroRandom()">Salvar <i class="fa fa-map-marker"></i></button>
                            </div>
                        </center>
                    </fieldset>
                </form>
            </div>
        <!-- /formulário -->

        <div id="mapa">
            <!-- visualização do mapa -->
            <?php require_once("banco/banco_select.php");?>
        </div>
    </body>
</html>