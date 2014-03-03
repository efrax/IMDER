<?php

/* ProyectoPrincipalBundle:Default:agregar.html.twig */
class __TwigTemplate_45e1479cce13be533cc22b568498dd772468318dd6d00bdc0ffb6a67c42ff20d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ProyectoPrincipalBundle:Default:layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'menucito' => array($this, 'block_menucito'),
            'texto' => array($this, 'block_texto'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProyectoPrincipalBundle:Default:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "        ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
    ";
    }

    // line 7
    public function block_menu($context, array $blocks = array())
    {
        // line 8
        echo "        ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
    ";
    }

    // line 12
    public function block_menucito($context, array $blocks = array())
    {
        // line 13
        echo "        ";
        $this->displayParentBlock("menucito", $context, $blocks);
        echo "
     ";
    }

    // line 16
    public function block_texto($context, array $blocks = array())
    {
        // line 17
        echo "        <div id=\"content\">
            <div id=\"section\">
                
                ";
        // line 20
        if (array_key_exists("slug", $context)) {
            // line 21
            echo "                    <div id='div_agregar'></div>
                        ";
            // line 23
            echo "                        <form>

                    ";
            // line 25
            if (((isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")) == "categoria")) {
                echo "   
                        <div class='contenido'>                    
                            Nombre Categoria<input type=\"text\" class = 'nombre_categoria vaciar_categoria' placeholder=\"Ingrese Nombre de categoria\">
                            <br>
                            <input type='hidden' class='tipo' value=";
                // line 29
                echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")), "html", null, true);
                echo ">
                            <br>
                            <input type='button' value='Agregar' class='agregar'> 
                        </div>
                    ";
            } elseif (((isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")) == "cancha")) {
                // line 33
                echo " 
                        <div class='contenido'>
                            Nombre Cancha<input type=\"text\" class = 'nombre_cancha vaciar_cancha'  placeholder=\"Ingrese Nombre de la cancha\">
                            <br>
                            Direccion<input type=\"text\" class = 'direccion_cancha vaciar_cancha'  placeholder=\"Ingrese Direccion de la cancha\">
                            <br>
                            <input type='hidden' class='tipo' value=";
                // line 39
                echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")), "html", null, true);
                echo ">
                            <br>
                            <input type='button' value='Agregar' class='agregar'> 
                        </div>
                    ";
            } elseif (((isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")) == "entrenador")) {
                // line 44
                echo "                        <div class='contenido'>
                            Nombre<input type=\"text\" class = 'nombre_entrenador vaciar_entrenador' placeholder=\"Ingrese Nombre del entrenador\">
                            <br>
                            Cedula<input type=\"text\" class = 'cedula_entrenador vaciar_entrenador'  placeholder=\"Ingrese la cedula del entrenador\">
                            <br>
                            Disciplina<input type=\"text\" class = 'disciplina_entrenador vaciar_entrenador' placeholder=\"Ingrese la disciplina del entrenador\">
                            <br>
                            Direccion de residencia<input type=\"text\" class = 'direccion_entrenador vaciar_entrenador' placeholder=\"Ingrese la direccion de residencia del Entrenador\">
                            Telefono<input type=\"text\" class = 'telefono_entrenador vaciar_entrenador' placeholder=\"Ingrese el telefono\">
                            Email<input type=\"text\" class = 'email_entrenador vaciar_entrenador' placeholder=\"Ingrese el telefono\">
                            <br>
                            <input type='hidden' class='tipo' value=";
                // line 55
                echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")), "html", null, true);
                echo ">
                            <br>
                            <input type='button' value='Agregar' class='agregar'> 
                        </div>
                    ";
            } elseif (((isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")) == "deporte")) {
                // line 60
                echo "                        <div class='contenido'>
                            Nombre<input type=\"text\" class = 'deporte_nombre_deporte vaciar_deporte' placeholder=\"Ingrese Nombre del Deporte\">
                            <br>
                            Seleccione Entrenador
                            <select class='deporte_nombre_entrenador'>
                                <option value= ' ' selected></option>
                                ";
                // line 66
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["entrenadores"]) ? $context["entrenadores"] : $this->getContext($context, "entrenadores")));
                foreach ($context['_seq'] as $context["_key"] => $context["arreglo"]) {
                    // line 67
                    echo "                                    <option value=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arreglo"]) ? $context["arreglo"] : $this->getContext($context, "arreglo")), "identrenador"), "html", null, true);
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arreglo"]) ? $context["arreglo"] : $this->getContext($context, "arreglo")), "nombre"), "html", null, true);
                    echo "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arreglo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 69
                echo "                            </select>
                            <br>
                            Seleccione Categoria
                            <select class='deporte_nombre_categoria'>
                                <option value= ' ' selected></option>
                                ";
                // line 74
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")));
                foreach ($context['_seq'] as $context["_key"] => $context["arreglo"]) {
                    // line 75
                    echo "                                    <option value=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arreglo"]) ? $context["arreglo"] : $this->getContext($context, "arreglo")), "idcategoria"), "html", null, true);
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arreglo"]) ? $context["arreglo"] : $this->getContext($context, "arreglo")), "nombre"), "html", null, true);
                    echo "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arreglo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 77
                echo "                            </select> 
                            <br>
                            Seleccione Cancha
                            <select class='deporte_nombre_cancha'>
                                <option value= ' ' selected></option>
                                ";
                // line 82
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["canchas"]) ? $context["canchas"] : $this->getContext($context, "canchas")));
                foreach ($context['_seq'] as $context["_key"] => $context["arreglo"]) {
                    // line 83
                    echo "                                    <option value=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arreglo"]) ? $context["arreglo"] : $this->getContext($context, "arreglo")), "idcancha"), "html", null, true);
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["arreglo"]) ? $context["arreglo"] : $this->getContext($context, "arreglo")), "nombre"), "html", null, true);
                    echo "</option>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['arreglo'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 85
                echo "                            </select>
                            <br>
                            <input type='hidden' class='tipo' value=";
                // line 87
                echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")), "html", null, true);
                echo ">
                            <br>
                            <input type='button' value='Agregar' class='agregar'>
                        </div>
                    ";
            }
            // line 91
            echo "                   
                ";
        } else {
            // line 93
            echo "
                        <div class='contenido'>
                            <h1>Bienvenido seleccione una opcion</h1>
                        </div>
                        
                    
                    

                ";
        }
        // line 102
        echo "                    
                        </form>
                        ";
        // line 105
        echo "                    </div>
                    ";
        // line 107
        echo "            </div>
            ";
        // line 109
        echo "        </div>
        ";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Default:agregar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 109,  231 => 107,  228 => 105,  224 => 102,  213 => 93,  209 => 91,  201 => 87,  197 => 85,  186 => 83,  182 => 82,  175 => 77,  164 => 75,  160 => 74,  153 => 69,  142 => 67,  138 => 66,  130 => 60,  122 => 55,  109 => 44,  101 => 39,  93 => 33,  85 => 29,  78 => 25,  74 => 23,  71 => 21,  69 => 20,  64 => 17,  61 => 16,  54 => 13,  51 => 12,  44 => 8,  41 => 7,  34 => 4,  31 => 3,);
    }
}
