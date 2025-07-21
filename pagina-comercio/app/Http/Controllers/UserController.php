<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use App\Rules\Required;


class UserController extends Controller
{
    public function getUsers($id)
    {
        $token = Session::get('token');
        $curl = curl_init();

        if ($id == 1) {
            $id = 0;
        } else {
            $id = $id - 1;
        }
        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://127.0.0.1:8000/api/users',
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

        /*$offset = $id * 5;
        $length = 5;
        var_dump($offset, $length);
        $users = array_slice($users_response['data'], $offset, $length);*/


        if (!isset($users)) {
            $users = [];
        }

        curl_close($curl);
        return view('user_list', ['id' => $id], compact('users'));
    }

    public function getUser($id)
    {
        $token = Session::get('token');
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://127.0.0.1:8000/api/users/'.$id.'',
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
        $user = json_decode($response, true);
        $user = $user['data'];
        if (!isset($user)) {
            $user = [];
        }

        curl_close($curl);
        return view('user_details', ['id' => $id], compact('user'));

    }
    public function editUser($id)
    {
        $token = Session::get('token');
        $curl = curl_init();

        curl_setopt_array($curl, array(
            CURLOPT_URL => 'http://127.0.0.1:8000/api/users/'.$id.'',
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
        $user = json_decode($response, true);
        $user = $user['data'];
        if (!isset($user)) {
            $user = [];
        }

        curl_close($curl);
        return view('user_editUser', ['id' => $id], compact('user'));

    }

    public function addUser(Request $request)
    {
        $request -> validate([
            'avatar' => ['required', 'file', 'image', 'mimes:jpg,jpeg,png'],
            'firstName' => [new Required],
            'email' => [new Required],
            'password' => [new Required],
        ],
[
            'avatar.required' => 'La imagen de perfil es obligatoria.',
            'avatar.file' => 'La imagen debe ser un archivo válido.',
            'avatar.image' => 'El archivo debe ser una imagen (jpg, jpeg, png).',
            'avatar.mimes' => 'Solo se permiten imágenes con formato JPG, JPEG o PNG.',
        ]
    );


        $token = Session::get('token');
        //$createdBy = Session::get(key: 'user')['name'];

        $payload = [
            'name' => $request->input('firstName'),
            'lastname' => $request->input('lastName'),
            'avatar' => new \CURLFile($_FILES['avatar']['tmp_name'], $_FILES['avatar']['type'], $_FILES['avatar']['name']),
            'password' => $request->input('password'),
            'password_confirmation' => $request->input('password'),
            'email' => $request->input('email'),
            //'phone_number' => $request->input('phoneNumber'),
            //'created_by' => $createdBy,
            //'role' => 'Administrador',
        ];

        // Enviar a la API
        $curl = curl_init();

        curl_setopt_array($curl, array(
        CURLOPT_URL => 'http://127.0.0.1:8000/api/register',
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'POST',
        CURLOPT_POSTFIELDS => $payload,
        CURLOPT_HTTPHEADER => array(
               'Accept: application/json',
        ),
        ));
        $response = curl_exec($curl);
        curl_close($curl);




        // Respuesta de la API
        return redirect()->back()->with('success', 'Usuario creado correctamente.');


    }
}
