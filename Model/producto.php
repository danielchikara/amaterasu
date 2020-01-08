<?php

class producto {

    private $pdo;
    public $idproducto;
    public $idcategoria;
    public $codigo;
    public $nombre;
    public $stock;
    public $descripcion;
    public $imagen;
    public $estado;
    public $precio;

    public function __CONSTRUCT() {
        try {
            $this->pdo = Database::Conectar();
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Listar() {
        try {
            $result = array();

            $stm = $this->pdo->prepare("SELECT * FROM producto");
            $stm->execute();

            return $stm->fetchAll(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Obtener($idproducto) {
        try {
            $stm = $this->pdo->prepare("SELECT * FROM producto WHERE idproducto = ?");
            $stm->execute(array($idproducto));
            return $stm->fetch(PDO::FETCH_OBJ);
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Eliminar($idproducto) {
        try {
            $stm = $this->pdo
                    ->prepare("DELETE FROM producto WHERE idproducto = ?");

            $stm->execute(array($idproducto));
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Actualizar($data) {
        try {
            $sql = "UPDATE producto SET
						
						codigo        = ?,
						nombre        = ?,
						descripcion        = ?,
						imagen        = ?,
                                                estado        = ?,
					
            precio        = ?
				    WHERE idproducto = ?";

            $this->pdo->prepare($sql)
                    ->execute(
                            array(
                                $data->codigo,
                                $data->nombre,
                                $data->descripcion,
                                $data->imagen,
                                $data->estado,
                                $data->precio,
                                $data->idproducto
                            )
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }
    }

    public function Registrar(producto $data) {
        try {
            $sql = "INSERT INTO producto (idcategoria,codigo,nombre,stock,descripcion,imagen,estado,precio)
		        VALUES (?, ?, ?,?,?,?,?,?)";



            $this->pdo->prepare($sql)
                    ->execute(
                            array(
                                $data->idcategoria,
                                $data->codigo,
                                $data->nombre,
                                $data->stock,
                                $data->descripcion,
                                $data->imagen,
                                $data->estado,
                                $data->precio
                            )
            );
        } catch (Exception $e) {
            die($e->getMessage());
        }

        $resultado = "";
        $id_insert = $this->pdo->lastInsertId();


        if ($_FILES["archivo"]["error"] > 0) {
            echo "Error al cargar archivo";
        } else {

            $permitidos = array("image/gif", "image/png", "image/jpeg");
            $limite_kb = 1000;

            if (in_array($_FILES["archivo"]["type"], $permitidos)  && $_FILES["archivo"]["size"] <= $limite_kb * 1024) {

                $ruta = 'files/' . $id_insert . '/';
                $archivo = $ruta . $_FILES["archivo"]["name"];

                $data->imagen = $archivo;
                $data->idproducto = $id_insert;
                if (!file_exists($ruta)) {
                    mkdir($ruta);
                }

                if (!file_exists($archivo)) {

                    $resultado = @move_uploaded_file($_FILES["archivo"]["tmp_name"], $archivo);

                    if ($resultado) {
                        echo "Archivo Guardado";
                        $this->Actualizar($data);
                    } else {
                        echo "Error al guardar archivo";
                    }
                } else {
                    echo "Archivo ya existe";
                }
            } else {
                echo "Archivo no permitido o excede el tamaño";
            }
        }
    }

}
