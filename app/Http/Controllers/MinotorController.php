<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;


class MinotorController extends Controller
{
    public function starting()
    {
        $process = new Process('/home/xiongzai/LZQ_face/CLM-framework/bin/MultiTrackCLM');
        $process->run();
        if(!$process->isSuccessful()){
            throw new ProcessFailedException($process);
        }

        return response()->json(['status_code'=>200]);
    }
}
