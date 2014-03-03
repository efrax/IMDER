<?php

namespace Proyecto\PrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Proyecto\PrincipalBundle\Entity\Categoria;
use Proyecto\PrincipalBundle\Entity\Cancha;
use Proyecto\PrincipalBundle\Entity\Entrenador;
use Proyecto\PrincipalBundle\Entity\Deportes;

class EditarController extends Controller{

    public function editarAction($id, $tipo){

        $arreglo = array();
        switch ($tipo) {
            case 'categoria':
                $registro = $this->getDoctrine()
                    ->getRepository('ProyectoPrincipalBundle:Categoria')
                    ->find($id);
                break;
            case 'cancha':
                $registro = $this->getDoctrine()
                    ->getRepository('ProyectoPrincipalBundle:Cancha')
                    ->find($id);
                break;
            case 'entrenador':
                $registro = $this->getDoctrine()
                    ->getRepository('ProyectoPrincipalBundle:Entrenador')
                    ->find($id);
                break;
            case 'deporte':
                $registro = $this->getDoctrine()
                    ->getRepository('ProyectoPrincipalBundle:Deportes')
                    ->find($id);
                $lista_categorias = $this->getDoctrine()
                    ->getRepository('ProyectoPrincipalBundle:Categoria')
                    ->findAll();
                $lista_entrenadores = $this->getDoctrine()
                    ->getRepository('ProyectoPrincipalBundle:Entrenador')
                    ->findAll();
                $lista_canchas = $this->getDoctrine()
                    ->getRepository('ProyectoPrincipalBundle:Cancha')
                    ->findAll();

                $arreglo['categorias']   = $lista_categorias;
                $arreglo['entrenadores'] = $lista_entrenadores;
                $arreglo['canchas']      = $lista_canchas;
                break;                   
        }
        // fin del switch

        // echo "<pre>";
        // var_dump($arreglo);
        // echo "</pre>";
        // exit();

        if (!$registro) {
            throw $this->createNotFoundException(
                'No product found for id '.$id
            );
        }         
        return $this->render('ProyectoPrincipalBundle:Default:editar.html.twig', array('tipo' => $tipo, 'registro' => $registro, 'arreglo' => $arreglo ));
    }
    // Fin de funcion editarAction

    public function editarAjaxAction(){
    
        $peticion = $this -> getRequest();
        $post = $peticion -> request;

        $tipo = $post -> get("tipo");
        $id_registro = $post -> get("id_registro");
        $em = $this->getDoctrine()->getManager();

        switch ($tipo) {
            case 'categoria':

                $nombre       = $post -> get("nombre_categoria");

                $registro = $em->getRepository('ProyectoPrincipalBundle:Categoria')->find($id_registro);

                $registro->setNombre($nombre);
                break;
            case 'cancha':

                $nombre       = $post -> get("nombre_cancha");
                $direccion    = $post -> get("direccion_cancha");

                $registro = $em->getRepository('ProyectoPrincipalBundle:Cancha')->find($id_registro);

                $registro->setNombre($nombre);
                $registro->setDireccion($direccion);              
                break;
            case 'entrenador':

                $nombre_entrenador      = $post -> get("nombre_entrenador");
                $cedula_entrenador      = $post -> get("cedula_entrenador");
                $disciplina_entrenador  = $post -> get("disciplina_entrenador");
                $direccion_entrenador   = $post -> get("direccion_entrenador");

                $registro = $em->getRepository('ProyectoPrincipalBundle:Entrenador')->find($id_registro);                
               
                $registro->setNombre($nombre_entrenador);
                $registro->setCedula($cedula_entrenador);
                $registro->setDisciplina($disciplina_entrenador);
                $registro->setDireccion($direccion_entrenador);
                break;
        }
        // fin switch

        $em->flush();  

        if (!$registro) {
            throw $this->createNotFoundException(
                'No product found for id '.$id_registro
            );
        }

        $respuesta = new response(json_encode(array('respuesta' => true, 'tipo' => $tipo )));
        $respuesta -> headers -> set('content_type', 'aplication/json');
        return $respuesta;
    }
    // Fin de funcion editarAjaxAction

}