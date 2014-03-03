<?php

/* ProyectoPrincipalBundle:Default:editar.html.twig */
class __TwigTemplate_8ddd1584971416dba7cb03c07cf5d1cd1d1763a33be515c7cd06343565c62ef2 extends Twig_Template
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
            'footer' => array($this, 'block_footer'),
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
        echo "    ";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_menu($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_menucito($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        $this->displayParentBlock("menucito", $context, $blocks);
        echo "
 ";
    }

    // line 16
    public function block_texto($context, array $blocks = array())
    {
        // line 17
        echo "        ";
        // line 18
        echo "        <form>
            ";
        // line 19
        if (array_key_exists("tipo", $context)) {
            // line 20
            echo "
                ";
            // line 21
            if (((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")) == "categoria")) {
                // line 22
                echo "
                        Nombre Categoria<input type='text' id='nombre_categoria' placeholder='Nombre categoria' value='";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registro"]) ? $context["registro"] : $this->getContext($context, "registro")), "nombre"), "html", null, true);
                echo "' id_registro='";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registro"]) ? $context["registro"] : $this->getContext($context, "registro")), "idcategoria"), "html", null, true);
                echo "'>

                ";
            } elseif (((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")) == "cancha")) {
                // line 26
                echo "
                        Nombre de la cancha<input type='text' id='nombre_cancha' placeholder='Ingrese Nombre de la cancha' value='";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registro"]) ? $context["registro"] : $this->getContext($context, "registro")), "nombre"), "html", null, true);
                echo "' id_registro='";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registro"]) ? $context["registro"] : $this->getContext($context, "registro")), "idcancha"), "html", null, true);
                echo "'>

                        Direccion de la cancha<input type='text' id='direccion_cancha' placeholder='Ingrese Direccion de la cancha' value='";
                // line 29
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registro"]) ? $context["registro"] : $this->getContext($context, "registro")), "direccion"), "html", null, true);
                echo "'>

                ";
            } elseif (((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")) == "entrenador")) {
                // line 31
                echo "                       

                        Nombre<input type='text' id='nombre_entrenador' placeholder='Ingrese Nombre del entrenador' value='";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registro"]) ? $context["registro"] : $this->getContext($context, "registro")), "nombre"), "html", null, true);
                echo "' id_registro='";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registro"]) ? $context["registro"] : $this->getContext($context, "registro")), "identrenador"), "html", null, true);
                echo "'>

                        Cedula<input type='text' id = 'cedula_entrenador' placeholder='Ingrese la cedula del entrenador' value='";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registro"]) ? $context["registro"] : $this->getContext($context, "registro")), "cedula"), "html", null, true);
                echo "'>
                        <br>
                        Disciplina<input type=\"text\" id = 'disciplina_entrenador' placeholder='Ingrese la disciplina del entrenador' value=";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registro"]) ? $context["registro"] : $this->getContext($context, "registro")), "disciplina"), "html", null, true);
                echo ">
                        <br>
                        Direccion de residencia<input type=\"text\" id = 'direccion_entrenador' placeholder=\"Ingrese la direccion de residencia del Entrenador\" value=";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registro"]) ? $context["registro"] : $this->getContext($context, "registro")), "direccion"), "html", null, true);
                echo ">
                                          
                ";
            } elseif (((isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")) == "deporte")) {
                // line 42
                echo "
                        Nombre<input type=\"text\" class = 'deporte_nombre_deporte vaciar_deporte' placeholder=\"Ingrese Nombre del Deporte\" value='";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registro"]) ? $context["registro"] : $this->getContext($context, "registro")), "nombre"), "html", null, true);
                echo "' id_registro='";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["registro"]) ? $context["registro"] : $this->getContext($context, "registro")), "iddeportes"), "html", null, true);
                echo "'>
                        <br>
                         Seleccione Entrenador
                        <select class='deporte_nombre_entrenador'>
                            <option value= ' ' selected></option>
                            ";
                // line 48
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["arreglo"]) ? $context["arreglo"] : $this->getContext($context, "arreglo")), "entrenadores"));
                foreach ($context['_seq'] as $context["_key"] => $context["entrenadores"]) {
                    // line 49
                    echo "                                <option value=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entrenadores"]) ? $context["entrenadores"] : $this->getContext($context, "entrenadores")), "identrenador"), "html", null, true);
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entrenadores"]) ? $context["entrenadores"] : $this->getContext($context, "entrenadores")), "nombre"), "html", null, true);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entrenadores'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 51
                echo "                        </select>
                        <br>
                        Seleccione Categoria
                        <select class='deporte_nombre_categoria'>
                            <option value= ' ' selected></option>
                            ";
                // line 56
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["arreglo"]) ? $context["arreglo"] : $this->getContext($context, "arreglo")), "categorias"));
                foreach ($context['_seq'] as $context["_key"] => $context["categorias"]) {
                    // line 57
                    echo "                                <option value=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")), "idcategoria"), "html", null, true);
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categorias"]) ? $context["categorias"] : $this->getContext($context, "categorias")), "nombre"), "html", null, true);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categorias'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 59
                echo "                        </select> 
                        <br>
                        Seleccione Cancha
                        <select class='deporte_nombre_cancha'>
                            <option value= ' ' selected></option>
                            ";
                // line 64
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["arreglo"]) ? $context["arreglo"] : $this->getContext($context, "arreglo")), "canchas"));
                foreach ($context['_seq'] as $context["_key"] => $context["canchas"]) {
                    // line 65
                    echo "                                <option value=";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["canchas"]) ? $context["canchas"] : $this->getContext($context, "canchas")), "idcancha"), "html", null, true);
                    echo ">";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["canchas"]) ? $context["canchas"] : $this->getContext($context, "canchas")), "nombre"), "html", null, true);
                    echo "</option>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['canchas'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "                        </select>                      
                ";
            }
            // line 69
            echo "                
            ";
        } else {
            // line 71
            echo "
                <h1>Bienvenido seleccione una opcion</h1>

            ";
        }
        // line 75
        echo "                        <input type='hidden' id='tipo' value=";
        echo twig_escape_filter($this->env, (isset($context["tipo"]) ? $context["tipo"] : $this->getContext($context, "tipo")), "html", null, true);
        echo ">
                        <input type='button' value='Actualizar' class='actualizar'>
            </form> 
            ";
        // line 79
        echo "        </div>
        ";
        // line 81
        echo "    </div>
    ";
        // line 83
        echo " ";
    }

    // line 86
    public function block_footer($context, array $blocks = array())
    {
        // line 87
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Default:editar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  237 => 87,  234 => 86,  230 => 83,  227 => 81,  224 => 79,  217 => 75,  211 => 71,  207 => 69,  203 => 67,  192 => 65,  188 => 64,  181 => 59,  170 => 57,  166 => 56,  159 => 51,  148 => 49,  144 => 48,  134 => 43,  131 => 42,  125 => 39,  120 => 37,  115 => 35,  108 => 33,  104 => 31,  98 => 29,  91 => 27,  88 => 26,  80 => 23,  77 => 22,  75 => 21,  72 => 20,  70 => 19,  67 => 18,  65 => 17,  62 => 16,  55 => 13,  52 => 12,  45 => 9,  42 => 8,  35 => 4,  32 => 3,);
    }
}
