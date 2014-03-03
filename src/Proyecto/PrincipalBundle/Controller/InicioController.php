<?php

namespace Proyecto\PrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Proyecto\PrincipalBundle\Entity\Categoria;
use Proyecto\PrincipalBundle\Entity\Cancha;
use Proyecto\PrincipalBundle\Entity\Entrenador;

class InicioController extends Controller
{

    public function pruebaAction()
    {
        $variable = 'prueba';
    	return $this->render('ProyectoPrincipalBundle:Default:inicio.html.twig', array('variable' => $variable ));
    }
    // fin funcion pruebaAction 

    public function pruebaAjaxAction()
    {
        $peticion = $this -> getRequest();
        $post = $peticion -> request;

        $valor     = $post -> get("valor");

        $respuesta = new response(json_encode(array('respuesta' => true, 'valor' => $valor)));
        $respuesta -> headers -> set('content_type', 'aplication/json');
        return $respuesta;

    }
    // fin funcion pruebaAjaxAction 

    public function frontAction($slug)
    {
        switch ($slug) {

            case 'usuario':
                return $this->render('ProyectoPrincipalBundle:Default:agregar.html.twig');
                break;

            case 'fotos':
                return $this->render('ProyectoPrincipalBundle:Default:fotos.html.twig');
                break;
            
            default:
                return $this->render('ProyectoPrincipalBundle:Default:inicio.html.twig');
                break;
        }
    }
    // fin funcion frontAction
}
// fin DefaultController

