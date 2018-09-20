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

    public function Privelessen()

    {
        $viewModel = [
            'pageTitle' => "Privélessen",
            'errors' => $this->getErrors(),
            'messages' => $this->getMessages(),
        ];

        $this->renderWebView('/Basic/privelessen', $viewModel);
    }

    public function Tennislessen()

    {
        $viewModel = [
            'pageTitle' => "Tennislessen",
            'errors' => $this->getErrors(),
            'messages' => $this->getMessages(),
        ];

        $this->renderWebView('/Basic/tennislessen', $viewModel);
    }

    public function Tarieven()

    {
        $viewModel = [
            'pageTitle' => "Tarieven",
            'errors' => $this->getErrors(),
            'messages' => $this->getMessages(),
        ];

        $this->renderWebView('/Basic/tarieven', $viewModel);
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