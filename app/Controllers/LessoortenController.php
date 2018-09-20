<?php

namespace App\Controllers;


class LessoortenController extends BaseController
{
    public function tennisKids()

    {
        $viewModel = [
            'pageTitle' => "Tenniskids (6-12jr)",
            'errors' => $this->getErrors(),
            'messages' => $this->getMessages(),
        ];

        $this->renderWebView('/Lessoorten/tenniskids', $viewModel);
    }

    public function jeugdLessen()

    {
        $viewModel = [
            'pageTitle' => "Jeugdlessen (12-18jr)",
            'errors' => $this->getErrors(),
            'messages' => $this->getMessages(),
        ];

        $this->renderWebView('/Lessoorten/jeugdlessen', $viewModel);
    }

    public function Volwassenen()

    {
        $viewModel = [
            'pageTitle' => "Volwassenen",
            'errors' => $this->getErrors(),
            'messages' => $this->getMessages(),
        ];

        $this->renderWebView('/Lessoorten/volwassenen', $viewModel);
    }

    public function Privelessen()

    {
        $viewModel = [
            'pageTitle' => "Privélessen",
            'errors' => $this->getErrors(),
            'messages' => $this->getMessages(),
        ];

        $this->renderWebView('/Lessoorten/privelessen', $viewModel);
    }
}