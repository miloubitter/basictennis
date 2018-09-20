<?php

namespace App\Controllers;


class TarievenController extends BaseController
{

    public function tarievenZomer()

    {
        $viewModel = [
            'pageTitle' => "Tarieven Zomer",
            'errors' => $this->getErrors(),
            'messages' => $this->getMessages(),
        ];

        $this->renderWebView('/Tarieven/tarievenzomer', $viewModel);
    }
    public function tarievenWinter()

    {
        $viewModel = [
            'pageTitle' => "Tarieven Winter",
            'errors' => $this->getErrors(),
            'messages' => $this->getMessages(),
        ];

        $this->renderWebView('/Tarieven/tarievenwinter', $viewModel);
    }
}