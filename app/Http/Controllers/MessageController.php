<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    public function eliminar_mensaje($id){
        $Message = Message::destroy($id);
        return ('/form_message');
    }
}
