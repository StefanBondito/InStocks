<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;


class PythonController extends Controller
{
    public function index(){
        return view('predict');
    }

    public function prediction(Request $request)
    {
        $validateData = $request->validate([
            'symbols' => 'required|string',
        ]);

        $symbols = $validateData['symbols'];
        $symbols = strtoupper($symbols);
        $command = 'python "C:\xampp\htdocs\Entre\Instocks\scripts/codinganentre.py" ' . escapeshellarg($symbols);

        $output = shell_exec($command);
        $data = json_decode($output, true);

        return view('predict', [
            'data' => $data,
            'userSymbol' => $symbols,
        ]);
    }

}
