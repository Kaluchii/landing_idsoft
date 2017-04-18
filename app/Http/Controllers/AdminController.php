<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Interpro\Entrance\Contracts\Extract\ExtractAgent;

class AdminController extends Controller
{
    private $extract;
    public function __construct(ExtractAgent $ext){
        $this->extract = $ext;
    }

    public function getIndex(){
        return view('back.layout');
    }

    public function getProducts(){
        $products = $this->extract->getBlock('products');
        return view('back.blocks.products', [
            'products' => $products
        ]);
    }

    public function getGuarantee(){
        $guarantee = $this->extract->getBlock('guarantee');
        return view('back.blocks.guarantee', [
            'guarantee' => $guarantee
        ]);
    }

    public function getAbout(){
        $about = $this->extract->getBlock('about');
        return view('back.blocks.about', [
            'about' => $about
        ]);
    }

    public function getMeta(){
        $meta = $this->extract->getBlock('products');
        $scripts = $this->extract->getBlock('scripts');
        return view('back.blocks.meta', [
            'meta' => $meta,
            'scripts' => $scripts
        ]);
    }
}
