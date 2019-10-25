<?php

namespace App\Controller;

use App\Model\TrekManager;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class TrekController extends AbstractController
{
    /**
    * @return string
    * @throws LoaderError
    * @throws RuntimeError
    * @throws SyntaxError
    */
    public function index(): string
    {
        $trekManager = new TrekManager();
        $treks = $trekManager->selectAll();

        return $this->twig->render('Trek/index.html.twig', [
            'treks' => $treks,
        ]);
    }
}
