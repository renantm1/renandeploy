<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CifraDeCesarController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function encrypt(Request $request)
    {
        $shift = $request->input('shift');
        $message = $request->input('message');

        $encryptedMessage = $this->applyCesarCipher($message, $shift);

        return view('result', ['result' => $encryptedMessage]);
    }

    public function decrypt(Request $request)
    {
        $shift = $request->input('shift');
        $message = $request->input('message');

        $decryptedMessage = $this->applyCesarCipher($message, -$shift);

        return view('result', ['result' => $decryptedMessage]);
    }

    private function applyCesarCipher($message, $shift)
    {
        $result = '';

        foreach (str_split($message) as $char) {
            if (ctype_alpha($char)) {
                $isUpperCase = ctype_upper($char);
                $char = chr((ord($char) + $shift - ($isUpperCase ? 65 : 97) + 26) % 26 + ($isUpperCase ? 65 : 97));
            }

            $result .= $char;
        }

        return $result;
    }
}
