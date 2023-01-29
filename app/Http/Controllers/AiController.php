<?php

namespace App\Http\Controllers;

use App\Models\History;
use OpenAI\Laravel\Facades\OpenAI;
use Illuminate\Http\Request;


class AiController extends Controller
{
    public function index(){

        return view('textgenerate');
    }
    public function text(Request $request){
        $text=$request->text;
        $result = OpenAI::completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => $text,
            "temperature" => 0.7,
            "max_tokens" => 256,
            "top_p"=> 1,
            "frequency_penalty"=> 0,
            "presence_penalty"=> 0,
        ]);
           $text=$result['choices'][0]['text'];
           return view('textgenerate',['generate'=> $text]);
    }
    public function textsave(){
        History::create([
            'title'=>'hello',
            'content'=>request('content'),
      ]);
    }
}
