<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesResources;
use Illuminate\Support\Facades\Log;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;
use ReCaptcha\ReCaptcha;


class FrontController extends Controller
{
    private $extract;

    public function __construct(ExtractAgent $ext)
    {
        $this->extract = $ext;
    }


    public function getIndex()
    {
        try {
            $products = $this->extract->getBlock('products');
            $guarantee = $this->extract->getBlock('guarantee');
            $about = $this->extract->getBlock('about');
            $scripts = $this->extract->getBlock('scripts');
        } catch (Exception $e) {
            abort(404);
        }
        return view('front.index.index', [
            'products' => $products,
            'guarantee' => $guarantee,
            'about' => $about,
            'scripts' => $scripts,
        ]);
    }

    public function Captcha()
    {
//        if (isset($_POST['g-recaptcha-response'])) {
            $secret = '6Leo9B4UAAAAAPr-dLvrEOB8cZ4cylgDFfxlcC6u';
            $recaptcha = new ReCaptcha($secret);
            $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
            if ($resp->isSuccess()) {
                $data['error'] = false;
            } else {
                $data['error'] = true;
            }
            return json_encode($data);
//        }
    }
}