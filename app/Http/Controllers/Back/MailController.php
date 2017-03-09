<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Log;
use Interpro\Core\Contracts\Taxonomy\Taxonomy;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;
use Interpro\Extractor\Contracts\Selection\Tuner;
use Interpro\Feedback\Contracts\FeedbackAgent;


class MailController extends Controller
{
    private $feedback;
    public function __construct( FeedbackAgent $feedback){

        $this->feedback = $feedback;
        // Объявляем все шаблоны писем для форм

        $this->feedback->setBodyTemplate('ask', 'back/mail/ask_mail');

    }

    public function send(Request $request){
        try{
            $data = $request->all();
            $this->feedback->mail($data['form'], $data['fields']);
            return ['error' => false];
        }catch(\Exception $error){
            return ['error' => true, 'error'=> $error->getMessage()];
        }
    }

}
