//cargar los formularios con ajax  
function Cargar(pag, div)
{
  $("#" + div).html(" <div style = 'width:100%;margin:5% auto;text-align:center;' > <img src = 'templates/view/images/loading.gif' width = '80' > </div>"); 
    $.ajax(
    {
      url: pag,
      success: function (r)
      {
        $("#" + div).html(r)
      }
    })
  }

  function MostrarTabla(f)
  {
   
    $.ajax(
    {
      method: "POST",
      url: "ajax/ajax.php",
      data:
      {
        f: f,
      },
      success: function (r)
      {
        $("#TableData").html(r);
      }
    })
    $("#tablaDiv").fadeIn("slow");
    $('#cardDiv').fadeOut("fast");
  }

  function soloNumeros(e)
{
  var key = window.Event ? e.which : e.keyCode
  return (key >= 48 && key <= 57)
}
TableFilter = function (id, value)
  {
    var rows = document.querySelectorAll(id + ' tbody tr');
    for (var i = 0; i < rows.length; i++)
    {
      var showRow = false;
      var row = rows[i];
      row.style.display = 'none';
      for (var x = 0; x < row.childElementCount; x++)
      {
        if (row.children[x].textContent.toLowerCase().indexOf(value.toLowerCase().trim()) > -1)
        {
          showRow = true;
          break;
        }
      }
      if (showRow)
      {
        row.style.display = null;
      }
    }
  }
   function MostrarTabla2()
  {
    $("#cardDiv").fadeIn("slow");
    $('#tablaDiv').fadeOut("fast");
  }

  function GuardarProductos(frm)
  {
    if ($("#d2").val() == "" || $("#d3").val() == ""  || $("#d4").val() == "" || $("#d5").val() == "" || $("#d6").val() == "" || $("#d7").val() == "")
    {
      alert("debe digitar los datos obligatorios(*) !")
    }
    else
    {
      var data = new FormData();
      var other_data = $('#Frm').serializeArray();
      $.each(other_data, function (key, input)
      {
        data.append(input.name, input.value);
      });
      data.append("f", "GuardarProductos");
      var request = $.ajax(
      {
        url: frm.prop('action'), //Lo toma del form
        method: frm.prop('method'), //Lo toma del form
        contentType: false,
        cache: false,
        processData: false,
        data: data,
        success: function (e)
        {
          var arreglo = String(e)
          if (arreglo.indexOf("guardado") != -1)
          {
            alert("Producto creado");
            Cargar('templates/view/Productos.php', 'container')
          }
          else
          {
            alert("No se puedo crear el producto")
          }
        }
      })
    }
  }

  function modificarProductos(frm)
  {
    if ($("#d2").val() == "" || $("#d3").val() == ""  || $("#d4").val() == "" || $("#d5").val() == "" || $("#d6").val() == "" || $("#d7").val() == "")
    {
      alert("debe digitar los datos obligatorios(*) !")
    }

    else if($("#d1").val() == "")
    {
     alert("debe seleccionar un registro de la tabla !") 
    }
    else
    {
      var data = new FormData();
      var other_data = $('#Frm').serializeArray();
      $.each(other_data, function (key, input)
      {
        data.append(input.name, input.value);
      });
      data.append("f", "modificarProductos");
      var request = $.ajax(
      {
        url: frm.prop('action'), //Lo toma del form
        method: frm.prop('method'), //Lo toma del form
        contentType: false,
        cache: false,
        processData: false,
        data: data,
        success: function (e)
        {
          var arreglo = String(e)
          if (arreglo.indexOf("modificado") != -1)
          {
            alert("producto modificado");
            MostrarTabla('listPro');
          }
          else
          {
            alert("No se puedo modificar el Producto")
          }
        }
      })
    }
  }

function DeletePro(cod)
{
  var r = confirm("Esta seguro de eliminar el producto?");
  if (r == true)
  {
    $.ajax(
    {
      type: "post",
      url: "ajax/ajax.php",
      data:
      {
        cod: cod,
        f: "DeletePro"
      },
      success: function (r)
      {
        MostrarTabla('listPro');
      }
    })
  }
}
 function DetailPro(cod)
  {
    Cargar('templates/view/Productos.php?cod=' + cod, 'container');
  }
