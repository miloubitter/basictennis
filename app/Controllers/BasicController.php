<?php

namespace App\Controllers\Web;


use App\Controllers\BaseController;
//use Infrastructure\Authentication;

class BasicController extends BaseController
{
    public function index()

    {
        $viewModel = [
            'pageTitle' => "Homepage",
            'errors' => $this->getErrors(),
            'messages' => $this->getMessages(),
        ];

        $this->renderWebView('/Basic/home', $viewModel);
    }

}