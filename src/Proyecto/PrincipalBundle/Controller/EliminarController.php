<?php

namespace Proyecto\PrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Proyecto\PrincipalBundle\Entity\Categoria;
use Proyecto\PrincipalBundle\Entity\Cancha;
use Proyecto\PrincipalBundle\Entity\Entrenador;
use Proyecto\PrincipalBundle\Entity\Deportes;

class EliminarController extends Controller{

    public function eliminarAjaxAction(){

        $peticion = $this -> getRequest();
        $post = $peticion -> request;

        $tipo = $post -> get("tipo");        
        $id   = $post -> get("id");

        $em = $this->getDoctrine()->getManager();

        // echo $id;
        // exit();

        switch ($tipo) {
            case 'categoria':
          
                $registro = $em->getRepository('ProyectoPrincipalBundle:Categoria')->find($id);     
                break;

            case 'cancha':
                
                $registro = $em->getRepository('ProyectoPrincipalBundle:Cancha')->find($id);              
                break;

            case 'entrenador':

                $registro = $em->getRepository('ProyectoPrincipalBundle:Entrenador')->find($id);
                break;
            
            case 'deporte':
                $registro = $em->getRepository('ProyectoPrincipalBundle:Deportes')->find($id);
                break;
            
        }
        // fin switch

        // var_dump($registro);
        // exit();

        $em->remove($registro);
        $em->flush();     

        if (!$registro) {
            throw $this->createNotFoundException(
                'No product found for id '.$id_registro
            );
        }        

        $respuesta = new response(json_encode(array('respuesta' => true, 'id' => $id )));
        $respuesta -> headers -> set('content_type', 'aplication/json');
        return $respuesta;

    }
    // fin de funcion eliminarAjaxAction
}