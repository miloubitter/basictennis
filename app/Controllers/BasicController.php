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

    public function Bespanservice()

    {
        $viewModel = [
            'pageTitle' => "Bespanservice",
            'errors' => $this->getErrors(),
            'messages' => $this->getMessages(),
        ];

        $this->renderWebView('/Basic/bespanservice', $viewModel);
    }

    public function Shop()

    {
        $viewModel = [
            'pageTitle' => "Shop",
            'errors' => $this->getErrors(),
            'messages' => $this->getMessages(),
        ];

        $this->renderWebView('/Basic/shop', $viewModel);
    }
    public function Contact()

    {
        $viewModel = [
            'pageTitle' => "Contact",
            'errors' => $this->getErrors(),
            'messages' => $this->getMessages(),
        ];

        $this->renderWebView('/Basic/contact', $viewModel);
    }

}