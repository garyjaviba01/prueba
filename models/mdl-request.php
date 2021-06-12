<?php
require_once "conect.php";

class RequestModel
{

    protected static $cnx_BDB;

    public static function traeConexion()
    {

        self::$cnx_BDB = ConexionBack::ConectarBDB();
    }

    public static function cierraConexion()
    {

        self::$cnx_BDB = null;
    }

    public function CargarDatosproductos($data)
    {

        $datos = null;
        $sqlQuery = "Select * from productos where id_pro=$data[0]";

        self::traeConexion();

        $stmt = self::$cnx_BDB->prepare($sqlQuery);
        $stmt->execute();

        $datos = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $datos;
        self::cierraConexion();

    }

    public function ListadoPro()
    {

        $data = null;
        $sqlQuery = "Select * from productos";

        self::traeConexion();

        $stmt = self::$cnx_BDB->prepare($sqlQuery);
        $stmt->execute();

        $resultado = $stmt->fetchAll();

        foreach ($resultado as $res)
        {
            $data .= "<tr>";
            $data .= "<td>" . $res["id_pro"] . "</td>";
            $data .= "<td>" . $res["nom_pro"] . "</td>";
            $data .= "<td>" . $res["ref_pro"] . "</td>";
            $data .= "<td>" . $res["pre_pro"] . "</td>";
            $data .= "<td>" . $res["pes_pro"] . "</td>";
            $data .= "<td>" . $res["cat_pro"] . "</td>";
            $data .= "<td>" . $res["sto_pro"] . "</td>";
            $data .= "<td>" . $res["fec_cre"] . "</td>";
            $data .= "<td>" . $res["fec_ult_ven"] . "</td>";
            $data .= "<td ><i class='fa fa-search fa-lg'  style='cursor:pointer;margin-left:10px;' title='detalles' onclick=\"DetailPro(" . $res["id_pro"] . ")\"></i> <i class='fa fa-trash fa-lg' style='cursor:pointer;margin-left:10px;' onclick=\"DeletePro(" . $res["id_pro"] . ")\" title='Borrar' ></i></td>";
            $data .= "</tr>";

        }

        return $data;
        self::cierraConexion();

    }

    public function GuardarPro($data)
    {

        $res = "Sin guardar";
        $sqlQuery = "INSERT INTO `productos` ( `nom_pro`,ref_pro, `pre_pro`, `pes_pro`, `cat_pro`, `sto_pro`, `fec_cre`, `fec_ult_ven`) VALUES ( :nombre,:referencia, :precio, :peso, :categoria, :stock, :fec_cre, NULL);";

        self::traeConexion();

        $stmt = self::$cnx_BDB->prepare($sqlQuery);
        $fecha_creacion = date('Y-m-d');
        $stmt->bindParam(":nombre", $data[0]);
        $stmt->bindParam(":referencia", $data[1]);
        $stmt->bindParam(":precio", $data[2]);
        $stmt->bindParam(":peso", $data[3]);
        $stmt->bindParam(":categoria", $data[4]);
        $stmt->bindParam(":stock", $data[5]);
        $stmt->bindParam(":fec_cre", $fecha_creacion);
        $stmt->execute();
        if ($stmt->rowCount() > 0)
        {

            $res = "guardado";
        }

        return $res;
        self::cierraConexion();
    }

    public function modificarPro($data)
    {

        $res = "Sin modificar";
        $sqlQuery = "UPDATE `productos` SET `nom_pro` = :nombre, `ref_pro` = :referencia, `pre_pro` = :precio, `pes_pro` = :peso, `cat_pro` = :categoria, `sto_pro` = :stock WHERE `productos`.`id_pro` = :id";

        self::traeConexion();

        $stmt = self::$cnx_BDB->prepare($sqlQuery);
        $stmt->bindParam(":id", $data[0]);
        $stmt->bindParam(":nombre", $data[1]);
        $stmt->bindParam(":referencia", $data[2]);
        $stmt->bindParam(":precio", $data[3]);
        $stmt->bindParam(":peso", $data[4]);
        $stmt->bindParam(":categoria", $data[5]);
        $stmt->bindParam(":stock", $data[6]);
        $stmt->execute();
        if ($stmt->rowCount() > 0)
        {

            $res = "modificado";
        }

        return $res;
        self::cierraConexion();
    }

    public function DeletePro($data)
    {

        $sqlQuery = "DELETE from `productos` WHERE `productos`.`id_pro` = :id";

        self::traeConexion();

        $stmt = self::$cnx_BDB->prepare($sqlQuery);
        $stmt->bindParam(":id", $data[0]);
        $stmt->execute();
        if ($stmt->rowCount() > 0)
        {

        }

        self::cierraConexion();
    }

}

?>
