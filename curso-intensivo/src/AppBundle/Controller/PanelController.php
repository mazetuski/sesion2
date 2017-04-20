<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Config\Definition\Exception\Exception;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/panel", name="panel")
 */
class PanelController extends Controller
{
    /**
     * @Route("/", name="panelAction")
     */
    public function panelAction()
    {
//        echo $this->generateUrl("panel_preferences");
//        return new Response("Panel");
        return $this->render('landing/landing.html.twig');
    }

    /**
     * @Route("/error", name="panel_error")
     */
    public function panelError()
    {
        throw new Exception("Error prueba");

//        return $this->render('landing/landing.html.twig');
    }

    /**
     * @Route("/request", name="panel_error")
     */
    public function request(Request $request)
    {
        if ($request->query->has("var"))
            return new Response("<h1>" . $request->get("var") . "</h1>");
        else
            throw new Exception("No has pasado la variable var por url");

//        return $this->render('landing/landing.html.twig');
    }

    /**
     * @Route("/preferences", name="panel_preferences")
     */
    public function panelPreferencesAction()
    {
        return $this->redirect("previewCard/redirigido");
//        return new Response("Panel preferences");
        // return $this->render('landing.html.twig');
    }

    /**
     * @Route("/previewCard/{card}", name="preview_card")
     */
    public function panelPreviewCardAction($card)
    {
        print_r($card);
        return new Response("<p>previewCard</p>  ");
        // return $this->render('landing.html.twig');
    }
}