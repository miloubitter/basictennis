<?php

namespace App\Controllers;


class TennislessenController extends BaseController
{
    public function tennisKids()

    {
        $viewModel = [
            'pageTitle' => "Tenniskids (6-12jr)",
            'errors' => $this->getErrors(),
            'messages' => $this->getMessages(),
        ];

        $this->renderWebView('/Tennislessen/tenniskids', $viewModel);
    }

    public function jeugdLessen()

    {
        $viewModel = [
            'pageTitle' => "Jeugdlessen (12-18jr)",
            'errors' => $this->getErrors(),
            'messages' => $this->getMessages(),
        ];

        $this->renderWebView('/Tennislessen/jeugdlessen', $viewModel);
    }

    public function Volwassenen()

    {
        $viewModel = [
            'pageTitle' => "Volwassenen",
            'errors' => $this->getErrors(),
            'messages' => $this->getMessages(),
        ];

        $this->renderWebView('/Tennislessen/volwassenen', $viewModel);
    }

    public function Privelessen()

    {
        $viewModel = [
            'pageTitle' => "Privélessen",
            'errors' => $this->getErrors(),
            'messages' => $this->getMessages(),
        ];

        $this->renderWebView('/Tennislessen/privelessen', $viewModel);
    }
}