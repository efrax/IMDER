<?php

namespace Proyecto\PrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Proyecto\PrincipalBundle\Entity\Categoria;
use Proyecto\PrincipalBundle\Entity\Cancha;
use Proyecto\PrincipalBundle\Entity\Entrenador;
use Proyecto\PrincipalBundle\Entity\Deportes;

class ListarController extends Controller{

    public function listarAction($slug){

        $em = $this->getDoctrine()->getManager();
        $consulta = array();

        switch ($slug) {
            case 'categoria':
                $repositorio = $this->getDoctrine()->getRepository('ProyectoPrincipalBundle:Categoria');
                break;
            case 'cancha':
                $repositorio = $this->getDoctrine()->getRepository('ProyectoPrincipalBundle:Cancha');              
                break;
            case 'entrenador':
                $repositorio = $this->getDoctrine()->getRepository('ProyectoPrincipalBundle:Entrenador');      
                break;
            case 'deporte':
                $repositorio = $this->getDoctrine()->getRepository('ProyectoPrincipalBundle:Deportes');
                break;
        }
        $consulta   = $repositorio->findAll();
       
        
        // var_dump($consulta);
        // die;

        return $this->render('ProyectoPrincipalBundle:Default:listar.html.twig', array('arreglo' => $consulta, 'slug' => $slug)); 
    }
    // fin funcion listarAction
}