<?php

namespace Proyecto\PrincipalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use Proyecto\PrincipalBundle\Entity\Categoria;
use Proyecto\PrincipalBundle\Entity\Cancha;
use Proyecto\PrincipalBundle\Entity\Entrenador;
use Proyecto\PrincipalBundle\Entity\Deportes;

class AgregarController extends Controller{

	public function agregarAction($slug)
    {

        switch ($slug) {

            case 'categoria':
                return $this->render('ProyectoPrincipalBundle:Default:agregar.html.twig', array('slug' => $slug ));  
                break;

            case 'cancha':
                return $this->render('ProyectoPrincipalBundle:Default:agregar.html.twig', array('slug' => $slug ));  
                break;

            case 'entrenador':
                return $this->render('ProyectoPrincipalBundle:Default:agregar.html.twig', array('slug' => $slug ));  
                break;

            case 'deporte':
                $lista_categorias = $this->getDoctrine()
                    ->getRepository('ProyectoPrincipalBundle:Categoria')
                    ->findAll();
                $lista_entrenadores = $this->getDoctrine()
                    ->getRepository('ProyectoPrincipalBundle:Entrenador')
                    ->findAll();
                $lista_canchas = $this->getDoctrine()
                    ->getRepository('ProyectoPrincipalBundle:Cancha')
                    ->findAll();

                // echo "<pre>";                
                // var_dump($arreglo);
                // echo "</pre>";
            case 'equipo':
                # code...
                break;

                return $this->render('ProyectoPrincipalBundle:Default:agregar.html.twig', 
                array('slug' => $slug, 'categorias' => $lista_categorias,
                'entrenadores' => $lista_entrenadores,'canchas' => $lista_canchas));
                break;                    
           
            default:
                return $this->render('ProyectoPrincipalBundle:Default:agregar.html.twig', array('slug' => ' ' ));  
                break;           
            }
    }
    // fin funcion agregarAction

    public function agregarAjaxAction(){

        $peticion = $this -> getRequest();
        $post = $peticion -> request;

        $tipo      = $post -> get("tipo");

        $em = $this->getDoctrine()->getManager();

        switch ($tipo) {
            case 'categoria':
                $nombre_categoria     = $post -> get("nombre_categoria");

                $categoria = new Categoria();                 
                $categoria->setNombre($nombre_categoria);

                $em->persist($categoria);
                $em->flush();                        
                break;

            case 'cancha':
                $nombre_cancha        = $post -> get("nombre_cancha");
                $direccion_cancha     = $post -> get("direccion_cancha");

                $cancha = new Cancha();
                $cancha->setNombre($nombre_cancha);
                $cancha->setDireccion($direccion_cancha);

                $em->persist($cancha);
                $em->flush();
                break;

            case 'entrenador':
                $nombre_entrenador        = $post -> get("nombre_entrenador");
                $cedula_entrenador        = $post -> get("cedula_entrenador");
                $disciplina_entrenador    = $post -> get("disciplina_entrenador");
                $direccion_entrenador     = $post -> get("direccion_entrenador");

                $entrenador = new Entrenador();
                $entrenador->setNombre($nombre_entrenador);
                $entrenador->setCedula($cedula_entrenador);
                $entrenador->setDisciplina($disciplina_entrenador);
                $entrenador->setDireccion($direccion_entrenador);

                $em->persist($entrenador);
                $em->flush();
                break;
            
            case 'deporte':
                $nombre_deporte           = $post -> get("deporte_nombre_deporte");
                $id_nombre_entrenador     = $post -> get("deporte_nombre_entrenador");
                $id_nombre_categoria      = $post -> get("deporte_nombre_categoria");
                $id_deporte_nombre_cancha = $post -> get("deporte_nombre_cancha");

                $deporte = new Deportes();
                $deporte->setNombre($nombre_deporte);

                $entrenador = $this->getDoctrine()
                ->getRepository('ProyectoPrincipalBundle:Entrenador')
                ->find($id_nombre_entrenador);

                $categoria = $this->getDoctrine()
                ->getRepository('ProyectoPrincipalBundle:Categoria')
                ->find($id_nombre_categoria);

                $cancha = $this->getDoctrine()
                ->getRepository('ProyectoPrincipalBundle:Cancha')
                ->find($id_deporte_nombre_cancha);

                $deporte->setEntrenador($entrenador);
                $deporte->setCategoria($categoria);
                $deporte->setCancha($cancha);

                $em->persist($deporte);
                $em->flush();
                break;
        }
  
        $respuesta = new response(json_encode(array('respuesta' => true, 'tipo' => $tipo)));
        $respuesta -> headers -> set('content_type', 'aplication/json');
        return $respuesta;

    }
    // fin funcion agregarAjaxAction
}
