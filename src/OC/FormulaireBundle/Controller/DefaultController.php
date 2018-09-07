<?php

namespace OC\FormulaireBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('OCFormulaireBundle:Default:index.html.twig');
    }
}
