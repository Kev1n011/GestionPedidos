<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;


if (isset($_POST['action'])) {
    $createdBy = Session::get(key: 'user')['name'];
    switch ($_POST['action']) {
        case 'addUser':
            $user = new UserController;
            $nuevo_usuario = new UserController;
            $cover_nombre = $_FILES['cover']['name'];
            $cover_tmp = $_FILES['cover']['tmp_name'];

            $cover_extension = explode('.', $cover_nombre); //Separa el nombre y la extensión
            $cover_nombre_actual = strtolower(current($cover_extension));
            $cover_extension_actual = strtolower(end($cover_extension));//Obtiene el útlimo valor de $cover_extension(osea el formato ej: png) y lo pasa a minúsculas
            $extensiones_oermitidas = array('jpg', 'jpeg', 'png');

            //Validar si la extension coincidde con el de una imagen
            if (in_array($cover_extension_actual, $extensiones_oermitidas)) {
                $cover_nuevo = uniqid('', true) . '_' . $cover_nombre_actual . '.' . $cover_extension_actual; //Se le asigna un id unico al nombre del archivo para evitar que se repita
                $cover_folder = './uploads/' . $cover_nuevo;
                move_uploaded_file($cover_tmp, $cover_folder);

            } else {
                echo 'Archivo no permitido';
            }
            //header("refresh: 0");
            exit;

    }
}
class UserController extends Controller
{
    public function getClients($id)
    {
        $token = Session::get('token');
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_HTTPHEADER => array(
                'Authorization: Bearer ' . $token . '',
                'Cookie: XSRF-TOKEN=eyJpdiI6ImNVTVpDQlFDK0F5Rm0ybFFsdjdNeFE9PSIsInZhbHVlIjoiVzBLRTN4ZSt0VHVoY1Q5SzhERDgxc2RQTDBoak0yY2dFYmtZVE42dnRTSHlRM2dJcFZFTUtmVUlNbk5ja1liU1NQZ0xreFFsbzlqL2pyMEE3STNZOVZncDBtNmRObjE2enJkV3BGcGZValh2NFBwTjhnYUY3Zk5FZ2prNjRscEQiLCJtYWMiOiIzNjM2MjZiN2FjOWIyYWFhZmFlZWQxNmU1MjQ1YTQ4YTMxNGRmMTZjYmEzNjBkNmU5NDhjNDNiZWEyMzNkZDE2IiwidGFnIjoiIn0%3D; apicrud_session=eyJpdiI6IlhqRExmVUI2VStMeUl0V2NBcFRKT1E9PSIsInZhbHVlIjoibDUwTVk0eVdYZmhSdjJseEFOcHgvZHgzcTNuZmdGaGdxNXZtS1B4YlNTdytNL1hBeUkzN0ZmdE9EbUtHQlFvUEdRUURFblJUTjU4Q1QvamR1VUtvN3kwdTRqck1qQXNpWUZGaVRQQTRWQUNVRHdDR1cybVo0cFo3QW1hY1BpMFoiLCJtYWMiOiJkYjVjOWI0Y2RiMjkzNzc2Y2JkYzczMTdlMTgzMzJkMDViMjE0MGZiMWI3NWZmMWMyYjA0NjIxZDFiNjgzMDM1IiwidGFnIjoiIn0%3D'
            ),
        ));

        $response = curl_exec($curl);
        $users = json_decode($response, true);

        if (!isset($users)) {
            $users = [];
        }

        curl_close($curl);
        return view('user_list', ['id' => $id], compact('users'));
    }

    public function addUser(Request $request)
    {
        $token = Session::get('token');
        $createdBy = Session::get(key: 'user')['name'];
        $cover_folder = "";

        $cover_nombre = $_FILES['cover']['name'];
        $cover_tmp = $_FILES['cover']['tmp_name'];

        $cover_extension = explode('.', $cover_nombre); //Separa el nombre y la extensión
        $cover_nombre_actual = strtolower(current($cover_extension));
        $cover_extension_actual = strtolower(end($cover_extension));//Obtiene el útlimo valor de $cover_extension(osea el formato ej: png) y lo pasa a minúsculas
        $extensiones_oermitidas = array('jpg', 'jpeg', 'png');

        //Validar si la extension coincidde con el de una imagen
        if (in_array($cover_extension_actual, $extensiones_oermitidas)) {
            $cover_nuevo = uniqid('', true) . '_' . $cover_nombre_actual . '.' . $cover_extension_actual; //Se le asigna un id unico al nombre del archivo para evitar que se repita
            $cover_folder = $cover_nuevo;
            move_uploaded_file($cover_tmp, $cover_folder);

        } else {
            var_dump($cover_folder);
        }
        $payload = [
            'name' => $request->input('firstName'),
            'lastname' => $request->input('lastName'),
            'email' => $request->input('email'),
            'phone_number' => $request->input('phoneNumber'),
            'created_by' => $createdBy,
            'role' => 'Administrador',
            'password' => $request->input('password'),
            'avatar' => $cover_folder,
        ];

        // Enviar a la API
        $curl = curl_init();
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://crud.jonathansoto.mx/api/users',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $payload,
            CURLOPT_HTTPHEADER => [
                'Authorization: Bearer ' . $token,
            ],
        ]);

        $response = curl_exec($curl);
        curl_close($curl);

        // Respuesta de la API
        return redirect()->back()->with('success', 'Usuario creado correctamente.');


    }
}
