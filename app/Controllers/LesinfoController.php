<?php

namespace App\Controllers;


class LesinfoController extends BaseController
{
    public function lesdataZomer()

    {
        $viewModel = [
            'pageTitle' => "Les informatie Zomer",
            'errors' => $this->getErrors(),
            'messages' => $this->getMessages(),
        ];

        $this->renderWebView('/Lesinfo/lesdatazomer', $viewModel);
    }

    public function lesdataWinter()

    {
        $viewModel = [
            'pageTitle' => "Les informatie Winter",
            'errors' => $this->getErrors(),
            'messages' => $this->getMessages(),
        ];

        $this->renderWebView('/Lesinfo/lesdatawinter', $viewModel);
    }

    public function Voorwaarden()

    {
        $viewModel = [
            'pageTitle' => "De voorwaarden",
            'errors' => $this->getErrors(),
            'messages' => $this->getMessages(),
        ];

        $this->renderWebView('/Lesinfo/voorwaarden', $viewModel);
    }

}