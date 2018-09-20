<?php

namespace App\Controllers;


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

    public function showPrivelessen()

    {
        $viewModel = [
            'pageTitle' => "Privélessen",
            'errors' => $this->getErrors(),
            'messages' => $this->getMessages(),
        ];

        $this->renderWebView('/Basic/privelessen', $viewModel);
    }

}