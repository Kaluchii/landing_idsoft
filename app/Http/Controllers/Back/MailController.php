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
use Illuminate\Support\Facades\Session;
use Interpro\Core\Contracts\Taxonomy\Taxonomy;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;
use Interpro\Extractor\Contracts\Selection\Tuner;
use Interpro\Feedback\Contracts\FeedbackAgent;


class MailController extends Controller
{
    private $feedback;
    private $from;

    public function __construct( FeedbackAgent $feedback ){

//        $this->from = Session::pull('form_from', 'popup');

        $this->feedback = $feedback;
        // Объявляем все шаблоны писем для форм

        $this->feedback->setBodyTemplate('partner', 'back/mail/partner_mail');

    }

    public function send( Request $request ){
        try{

            $data = $request->all();

            $form = array_pull($data, 'form');
            array_except($data, '_token');

            $this->feedback->mail($form, $data);

            return ['error' => false];
            /*if( $this->from == 'popup' )
                return ['error' => false];
            else
                return redirect('/mail/thank');*/

        }catch(\Exception $error){

            return ['error' => true, 'error'=> $error->getMessage()];
            /*if( $this->from == 'popup' )
                return ['error' => true, 'error'=> $error->getMessage()];
            else
                return redirect('/mail/error');*/
        }
    }


    public function Captcha( Request $request )
    {
        $data = $request->all();
        $secret = '6LevTh8UAAAAANlvzu3qAULpWZFdM3HivGPA8kKe';
        $recaptcha = new ReCaptcha($secret);
        $resp = $recaptcha->verify($data['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
        if ($resp->isSuccess()) {
            $data['error'] = false;
        } else {
            $data['error'] = true;
        }
        return json_encode($data);
    }

}
