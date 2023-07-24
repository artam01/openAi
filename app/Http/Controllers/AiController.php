<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use OpenAI;
use Inertia\Inertia;

class AiController extends Controller
{
    public function index()
    {
        return Inertia::render('Index');
    }
    public function makeRequest(){
        $yourApiKey = env('OPENAI_API_KEY');
        $client = OpenAI::client($yourApiKey);

        $result = $client->completions()->create([
            'model' => 'text-davinci-003',
            'prompt' => 'PHP is',
        ]);

        echo $result['choices'][0]['text'];
    }
}