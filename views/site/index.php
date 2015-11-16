<?php
$this->title = 'Problema do Troco';
?>
<div class="site-index">
    <div class="body-content">
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <form role="form" id="pagamento-form" method="POST" action="">
                            <div class="row">
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="valor">Informe um Valor</label>
                                        <div class="input-group">
                                            <input 
                                                type="text"
                                                class="form-control"
                                                name="valor"
                                                id="valor"
                                                placeholder="25"
                                                autofocus 
                                                />
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
                                        </div>
                                    </div>                            
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xs-12">
                                    <button class="btn btn-success btn-lg btn-block" type="submit">Calcular</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>            
                <p>
                    <?php
                    $denominacao = array();
                    foreach ($moedas as $key => $value) {
                        $denominacao[] = '<strong>' . $key . '</strong>: ' . $value;
                    }
                    echo implode('&nbsp; / &nbsp;', $denominacao);
                    ?>
                </p>
            </div>           
        </div>
    </div>
</div>