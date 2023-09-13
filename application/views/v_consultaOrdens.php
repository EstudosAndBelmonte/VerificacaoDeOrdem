<!--//////////////////////////////////////////////////////////////-->
<!--//// FOLHA DE ESTILO CSS                                 /////-->
<!--//// CRIADO POR MÁRCIO SILVA                             /////-->
<!--//// 22/03/2021                                          /////-->
<!--//////////////////////////////////////////////////////////////-->
<style>
    table {
        border-collapse: collapse;
        table-layout: fixed;
        width: 100%;
    }


    .quebra {
        border: solid 1px #fab;
        width: 10%;
        word-wrap: break-word;
    }

    .quebra1 {
        border: solid 1px #fab;
        width: 15%;
        word-wrap: break-word;
    }

    .quebra3 {
        border: solid 1px #fab;
        width: 25%;
        word-wrap: break-word;
    }

    .quebra4 {
        border: solid 1px #fab;
        width: 30%;
        word-wrap: break-word;
    }

    th {
        font-size: 12px;
    }
</style>

<!--//////////////////////////////////////////////////////////////-->
<!--//// CONSULTA - ASSINATURA ELETRONICA                    /////-->
<!--//// CRIADO POR MÁRCIO SILVA                             /////-->
<!--//// 22/03/2021                                          /////-->
<!--//////////////////////////////////////////////////////////////-->

<div class="container-fluid mt-3">
    <div class="card text-white bg-dark mb-3">
        <div class="card-body pb-0">
            <div class="row">
                <!-- Ordens de compras -->
                <div class="form-group col-4">
                    <label for="inpNroNF">ORDEM DE COMPRA</label>
                    <input type="text" class="form-control border border-dark" name="txtOrdem" id="txtOrdem">
                </div>

                <!-- Data de saida -->
                <div class="form-group col-4">
                    <label for="inpDatIn">DATA DE SAÍDA</label>
                    <input type="text" id="txtDtsaida" name="txtDtsaida" data-mask="99/99/9999" data-date-format="DD/MM/YYYY" type="text" class="form-control border border-dark text-center">
                </div>

                <div class="form-group col-4 ">
                    <button type="button" class="btn btn-block btn-outline-warning p-4" onclick="buscaOrdem();">BUSCAR DADOS</button>
                </div>
            </div>
        </div>
    </div>
</div>


<!--//////////////////////////////////////////////////////////////-->
<!--//// TABELA DE EXIBIÇÃO ORDEM DE COMPRA/////-->
<!--//// CRIADO POR MÁRCIO SILVA E MAURICIO                  /////-->
<!--//// 17/02/2021                                          /////-->
<!--//////////////////////////////////////////////////////////////-->
<div class="container-fluid">
    <table id="tbl_asseletronica" data-toggle="table" data-url="">
        <thead>
            <tr>
                <th class="quebra" data-align="center" data-halign="center" data-field="ordem">Nº Ordem de Compra</th>
                <th class="quebra4" data-align="left" data-halign="center" data-field="descricao">Problema</th>
                <th class="quebra2" data-align="left" data-halign="center" data-field="solicitante">Causa</th>
            </tr>
        </thead>
    </table>
</div>

<script>
    function buscaOrdem() {
        var dados = {
            ordem: $('#txtOrdem').val(),
            Datsaida: $('#txtDtsaida').val()
        }
        $.ajax({
            url: base_url + "int_compras/consultaOrdens/buscaOrdem",
            data: dados,
            type: 'POST',
            dataType: "json",
            cache: false,
            success: function(data) {

            },
            beforeSend: function() {

            },
            error: function(data_error) {}
        });

    }
</script>