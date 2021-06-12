<?php

class RequestController
{

    public function ListadoPro()
    {

        $ReMod = new RequestModel();
        $data = $ReMod->ListadoPro();
        CargarTablaProductos($data);
    }
    public function GuardarPro($data)
    {

        $ReMod = new RequestModel();
        echo $ReMod->GuardarPro($data);
    }
    public function modificarPro($data)
    {

        $ReMod = new RequestModel();
        echo $ReMod->modificarPro($data);
    }
    public function DeletePro($data)
    {

        $ReMod = new RequestModel();
        $ReMod->DeletePro($data);
    }

    public function CargarDatosproductos($data)
    {

        $ReMod = new RequestModel();
        $datos = $ReMod->CargarDatosproductos($data);
        echo json_encode($datos);
    }

}

?>
