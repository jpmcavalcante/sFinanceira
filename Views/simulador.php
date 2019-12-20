<link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/bootstrap/css/bootstrap.min.css">
<div class="container">
    <div class="form-row">
        <div class=" fxd  col-md-12">
            <div class=" form-group col-md-4">
                <select id="operacao" class="form-control">
                    <option value="" disabled selected>selecione um tipo de operação</option>
                    <option value="1">Cartão de Credito</option>
                </select>
            </div>
        </div>
        <div class="col-md-12">
            <div id="inp"  class=" form-group col-md-12">

            </div>
        </div>

        <div class="col-md-12">
            <button id="btnSimulador" class="btn btn-primary next" type="submit">Simular&nbsp;<span class="glyphicon glyphicon-chevron-right"></span></button>
        </div>

        <div id="simulacao" class="col-md-12" style="margin: 20px;">



        </div>

    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script type="text/javascript" src="<?php echo BASE_URL;?>/assets/js/jquery-3.4.1.min.js"></script>

<!--Bootstrap-->
<script type="text/javascript" src="<?php echo BASE_URL;?>/assets/bootstrap/js/bootstrap.min.js"></script>

<!-- IMPORTS DAS ETAPAS -->
<script type="text/javascript" src="<?php echo BASE_URL;?>/assets/js/jquery.mask.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>/assets/js/jquery.mask.min.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL;?>/assets/js/simulacao/simulacao.js"></script>
