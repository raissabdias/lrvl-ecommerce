<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function register(Request $request)
    {
        $data = [];

        return view('register', $data);
    }

    public function registerClient(Request $request)
    {
        $post = $request->all();

        $user = new User($post);
        $address = new Address($post);
        dd($address);

        return redirect()->route('register');
    }
}
