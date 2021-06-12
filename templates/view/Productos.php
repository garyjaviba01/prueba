<script type="text/javascript" rel="stylesheet">
  $(document).ready(function(){
  <?php if (isset($_REQUEST['cod']))
{
    echo "CargarDatos($_REQUEST[cod])";
} ?> 
  });
  
  function CargarDatos(cod){
  
  
  urll="ajax/ajax.php"
  
  $.ajax(
  
  {
  method: "POST",
  url:urll, 
  data:{f:"CargarDatosproductos",cod:cod},
  success: function(r)
  { 
  var arreglo=String(r)
  var arreglo2=JSON.parse(r);
  
  $("#d1").val(arreglo2[0].id_pro);
  $("#d2").val(arreglo2[0].nom_pro);
  $("#d3").val(arreglo2[0].ref_pro);
  $("#d4").val(arreglo2[0].pre_pro);
  $("#d5").val(arreglo2[0].pes_pro);
  $("#d6").val(arreglo2[0].cat_pro);
  $("#d7").val(arreglo2[0].sto_pro);
  
  
  
  
  }})
  
  
  }
   
</script>
<div class="card" id="cardDiv" style="display:block;">
  <div class="card-header"><i class="fa fa-file-alt" style="font-size: 25px;margin-right: 25px;"></i>Productos </div>
  <div class="card-body" >
    <form action="ajax/ajax.php" method="post" id="Frm">
      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label for="cc-payment" class="control-label mb-1">Nombre(*)</label>
            <input id="d2" name="d2" type="text" class="form-control" aria-required="true" aria-invalid="false" required=""  value=""><input type="hidden" name="f" id="f"><input type="hidden" name="d1" id="d1">
          </div>
        </div>
        <div class="col-6">
          <div class="form-group has-success">
            <label for="cc-name" class="control-label mb-1">Referencia(*)</label>
            <input id="d3" name="d3" type="text" class="form-control" aria-required="true" aria-invalid="false" required=""  value="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label for="cc-payment" class="control-label mb-1">Precio(*)</label>
            <input id="d4" name="d4" type="text" class="form-control" aria-required="true" aria-invalid="false" required=""  value="" onkeypress="return soloNumeros(event)">
          </div>
        </div>
        <div class="col-6">
          <div class="form-group">
            <label for="cc-payment" class="control-label mb-1">Peso(*)</label>
            <input id="d5" name="d5" type="text" class="form-control" aria-required="true" aria-invalid="false" required=""  value="" onkeypress="return soloNumeros(event)">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
          <div class="form-group">
            <label for="cc-payment" class="control-label mb-1">Categoria(*)</label>
            <input id="d6" name="d6" type="text" class="form-control" aria-required="true" aria-invalid="false" required=""  value="">
          </div>
        </div>
        <div class="col-6">
          <div class="form-group">
            <label for="cc-payment" class="control-label mb-1">Stock(*)</label>
            <input id="d7" name="d7" type="text" class="form-control" aria-required="true" aria-invalid="false" required=""  value="" onkeypress="return soloNumeros(event)">
          </div>
        </div>
      </div>
      <div>
        <button id="new-button" type="button" class="btn btn-info btn-sm" onclick="Cargar('templates/view/Productos.php','container')">
        <i class="fa fa-plus fa-lg"></i>&nbsp;
        <span id="save">Nuevo</span>
        </button> 
        <button id="save-button" type="button" class="btn btn-info btn-sm" onclick="GuardarProductos($('#Frm'))">
        <i class="fa fa-save fa-lg"></i>&nbsp;
        <span id="save">Guardar</span>
        </button> <button id="refresh-button" type="button" class="btn btn-info btn-sm" onclick="modificarProductos($('#Frm'))">
        <i class="fa fa-refresh fa-lg"></i>&nbsp;
        <span id="payment-buttonnt">Modificar</span>
        </button> <button id="list-button" type="button" class="btn btn-info btn-sm" onclick="MostrarTabla('listPro')">
        <i class="fa fa-list fa-lg"></i>&nbsp;
        <span id="button-amount">Listar</span>
        </button>
      </div>
    </form>
  </div>
</div>
<div class="table-responsive table--no-card m-b-40" id="tablaDiv" style="display:none;">
  <div class="input-group">
    <button id="back-button" type="button" class="btn btn-info btn-sm" onclick="MostrarTabla2()"> 
    <i class="fa fa-plus fa-lg"></i>&nbsp;
    <span id="button-amount">Registrar</span>
    </button>
    <input type="text"  placeholder="Buscar Producto" class="form-control" onkeyup="TableFilter('#TableData',this.value)">
    <div class="input-group-addon">
      <i class="fa fa-search"></i>
    </div>
  </div>
  <table class="table" id="TableData">
  </table>
</div>
