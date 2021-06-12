<?php

require_once "../controllers/ctr-request.php";
require_once "../models/mdl-request.php";
require_once "../templates/view/listadoProductos.php";

class Ajax
{

    public $ajaxData;

    public function ListadoPro()
    {

        //$dataCtr = $this->ajaxData;
        $ReCtr = new RequestController();
        $ReCtr->ListadoPro();

    }

    public function GuardarPro($ajaxData)
    {

        $dataCtr = $this->ajaxData;
        $ReCtr = new RequestController();
        $ReCtr->GuardarPro($ajaxData);

    }

    public function modificarPro($ajaxData)
    {

        $dataCtr = $this->ajaxData;
        $ReCtr = new RequestController();
        $ReCtr->modificarPro($ajaxData);

    }
    public function DeletePro($ajaxData)
    {

        $dataCtr = $this->ajaxData;
        $ReCtr = new RequestController();
        $ReCtr->DeletePro($ajaxData);

    }
    public function CargarDatosproductos($ajaxData)
    {

        $dataCtr = $this->ajaxData;
        $ReCtr = new RequestController();
        $ReCtr->CargarDatosproductos($ajaxData);

    }
}

if (isset($_POST['f']))
{

    $objAjax = new Ajax();
    if ($_POST['f'] == "listPro")
    {

        $objAjax->ListadoPro();
    }
    else if ($_POST['f'] == "GuardarProductos")
    {

        $ajaxData = [$_POST['d2'], $_POST['d3'], $_POST['d4'], $_POST['d5'], $_POST['d6'], $_POST['d7']];
        $objAjax->GuardarPro($ajaxData);

    }
    else if ($_POST['f'] == "modificarProductos")
    {

        $ajaxData = [$_POST['d1'], $_POST['d2'], $_POST['d3'], $_POST['d4'], $_POST['d5'], $_POST['d6'], $_POST['d7']];
        $objAjax->modificarPro($ajaxData);

    }
    else if ($_POST['f'] == "CargarDatosproductos")
    {

        $ajaxData = [$_POST['cod']];
        $objAjax->CargarDatosproductos($ajaxData);

    }
    else if ($_POST['f'] == "DeletePro")
    {

        $ajaxData = [$_POST['cod']];
        $objAjax->DeletePro($ajaxData);

    }

}
?>
