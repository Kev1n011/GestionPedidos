<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

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
                'Authorization: Bearer '.$token.'',
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
}
