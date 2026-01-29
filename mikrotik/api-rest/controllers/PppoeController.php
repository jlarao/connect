<?php
class PppoeController
{
    public function insert()
    {
        // Recibe datos POST en formato JSON o x-www-form-urlencoded
        $data = json_decode(file_get_contents('php://input'), true);
        if (!$data) $data = $_POST;

        // Validar parámetros
        $required = ['name', 'password', 'service', 'profile', 'comment'];
        foreach ($required as $key) {
            if (empty($data[$key])) {
                return Response::json(["error" => "Falta el campo '$key'"], 400);
            }
        }

        // Simulación de inserción (puedes reemplazar por DB o API de Mikrotik)
        $newPppoe = [
            'name' => $data['name'],
            'password' => $data['password'],
            'service' => $data['service'],
            'profile' => $data['profile'],
            'comment' => $data['comment'],
        ];
        $path = realpath(__DIR__ . "/../../include/routeros_api.class.php");
        if (!$path) {
            // echo "Archivo no encontrado.";
        } else {
            require $path;
            // echo "Ruta absoluta: $path";
        }
        // Aquí podrías hacer una llamada a la API de MikroTik con curl o RouterOS-API-PHP
        // require "./../../include/routeros_api.class.php";
        if ($_POST) {
            //var_dump($_POST);
            //break;
            $api = new RouterosAPI();
            $datos = new StdClass();

            if ($api->connect(HOST_MKT, 'admin', 'PinoSuar')) {

                $ARRAY = $api->comm("/ppp/secret/add", array(
                    "name" => strtoupper($data['name']),
                    "password" => strtoupper($data['password']) ?? "P1n0@Su4r3z",
                    "service" => $data['service'],
                    "profile" => $data['profile'] ?? "25M",
                    "comment" => $data['comment']
                ));
                //data = "{"!trap":[{"message":"failure: already have user with this name for this server"}]}"
                //data = ""*1DB""
                if (is_array($ARRAY)) {
                    //var_dump($ARRAY['!trap'][0]['message']);
                    // die(json_encode(array(false, $ARRAY['!trap'][0]['message'])));
                    return Response::json([
                        'message' => $ARRAY['!trap'][0]['message'],
                        'data' => false,
                        'datos' => $data
                    ], 201);
                } else {
                    //echo $ARRAY;
                    // die(json_encode(array(true, $ARRAY)));
                    return Response::json([
                        'message' => $ARRAY,
                        'data' => true,
                    ], 201);
                }
            } else {
                $mensaje .= '<div class="alert alert-danger" role="alert">conexion fallida</div>';
            }
        } else {
            $mensaje = '<div class="alert alert-primary" role="alert">Favor de llenar todos los campos</div>';
        }
        return Response::json([
            'message' => 'PPPoE insertado correctamente',
            'data' => $newPppoe
        ], 201);
    }
}
