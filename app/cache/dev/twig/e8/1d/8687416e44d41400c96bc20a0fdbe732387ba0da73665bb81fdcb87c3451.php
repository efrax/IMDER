<?php

/* ProyectoPrincipalBundle:Default:listar.html.twig */
class __TwigTemplate_e81d8687416e44d41400c96bc20a0fdbe732387ba0da73665bb81fdcb87c3451 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ProyectoPrincipalBundle:Default:layout.html.twig");

        $this->blocks = array(
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

    // line 4
    public function block_menu($context, array $blocks = array())
    {
        // line 5
        echo "\t";
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_menucito($context, array $blocks = array())
    {
        // line 9
        echo "\t";
        $this->displayParentBlock("menucito", $context, $blocks);
        echo "
";
    }

    // line 12
    public function block_texto($context, array $blocks = array())
    {
        // line 13
        echo "        <div id=\"content\">
            <div id=\"section\">
\t\t\t    ";
        // line 16
        echo "

                ";
        // line 18
        if (array_key_exists("slug", $context)) {
            // line 19
            echo "                
                    ";
            // line 20
            if (((isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")) == "categoria")) {
                // line 21
                echo "                    \t<div class='contenido'>
                         <table border='1'>
                         \t<th>Nombre</th>
\t                    \t";
                // line 24
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["arreglo"]) ? $context["arreglo"] : $this->getContext($context, "arreglo")));
                foreach ($context['_seq'] as $context["_key"] => $context["categoria"]) {
                    // line 25
                    echo "\t\t                    \t<tr class='fila_";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "idcategoria"), "html", null, true);
                    echo "'>
\t\t                    \t\t<td>
\t\t                    \t\t\t<div id='valor_fila' valor='";
                    // line 27
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "idcategoria"), "html", null, true);
                    echo "'>
\t\t                    \t\t\t\t";
                    // line 28
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["categoria"]) ? $context["categoria"] : $this->getContext($context, "categoria")), "nombre"), "html", null, true);
                    echo "
\t\t                    \t\t\t</div>
\t\t                    \t    </td>
\t\t                    \t    <td>
\t\t                    \t    \t<a href=\"javascript:void(0)\" class='editar'>Editar</a>
\t\t                    \t    </td>
\t\t                    \t    <td>
\t\t                    \t    \t<a href=\"javascript:void(0)\" class='eliminar'>Eliminar</a>
\t\t                    \t    </td>
\t\t                    \t</tr>
\t\t                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['categoria'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 39
                echo "\t\t                </div>\t\t\t                    \t
                    ";
            } elseif (((isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")) == "cancha")) {
                // line 41
                echo "                    \t<div class='contenido'>
                         <table border='1'>
                         \t<th>Nombre</th>
                         \t<th>Direccion</th>
\t                    \t";
                // line 45
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["arreglo"]) ? $context["arreglo"] : $this->getContext($context, "arreglo")));
                foreach ($context['_seq'] as $context["_key"] => $context["cancha"]) {
                    // line 46
                    echo "\t\t                    \t<tr class='fila_";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "idcancha"), "html", null, true);
                    echo "'>
\t\t                    \t\t<td>
\t\t                    \t\t\t<div id='valor_fila' valor='";
                    // line 48
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "idcancha"), "html", null, true);
                    echo "'>
\t\t                    \t\t\t\t";
                    // line 49
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "nombre"), "html", null, true);
                    echo "
\t\t                    \t\t\t</div>
\t\t                    \t    </td>
\t\t                    \t    <td>
\t\t                    \t    \t";
                    // line 53
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cancha"]) ? $context["cancha"] : $this->getContext($context, "cancha")), "direccion"), "html", null, true);
                    echo "
\t\t                    \t    </td>
\t\t                    \t    <td>
\t\t                    \t    \t<a href=\"javascript:void(0)\" class='editar'>Editar</a>
\t\t                    \t    </td>
\t\t                    \t    <td>
\t\t                    \t    \t<a href=\"javascript:void(0)\" class='eliminar'>Eliminar</a>
\t\t                    \t    </td>
\t\t                    \t</tr>
\t\t                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cancha'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 63
                echo "\t\t                </div>    \t
                    ";
            } elseif (((isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")) == "entrenador")) {
                // line 65
                echo "                        <div class='contenido'>
                         <table border='1'>
                         \t<th>Nombre</th>
                         \t<th>Cedula</th>
                         \t<th>Disciplina</th>
                         \t<th>Direccion de residencia</th>
\t                    \t";
                // line 71
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["arreglo"]) ? $context["arreglo"] : $this->getContext($context, "arreglo")));
                foreach ($context['_seq'] as $context["_key"] => $context["entrenador"]) {
                    // line 72
                    echo "\t\t                    \t<tr class='fila_";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entrenador"]) ? $context["entrenador"] : $this->getContext($context, "entrenador")), "identrenador"), "html", null, true);
                    echo "'>
\t\t                    \t\t<td>
\t\t                    \t\t\t<div id='valor_fila' valor='";
                    // line 74
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entrenador"]) ? $context["entrenador"] : $this->getContext($context, "entrenador")), "identrenador"), "html", null, true);
                    echo "'>
\t\t                    \t\t\t\t";
                    // line 75
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entrenador"]) ? $context["entrenador"] : $this->getContext($context, "entrenador")), "nombre"), "html", null, true);
                    echo "
\t\t                    \t\t\t</div>
\t\t                    \t    </td>
\t\t                    \t    <td>
\t\t                    \t    \t";
                    // line 79
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entrenador"]) ? $context["entrenador"] : $this->getContext($context, "entrenador")), "cedula"), "html", null, true);
                    echo "
\t\t                    \t    </td>
\t\t                    \t    <td>
\t\t                    \t    \t";
                    // line 82
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entrenador"]) ? $context["entrenador"] : $this->getContext($context, "entrenador")), "disciplina"), "html", null, true);
                    echo "
\t\t                    \t    </td>
\t\t                    \t    <td>
\t\t                    \t    \t";
                    // line 85
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entrenador"]) ? $context["entrenador"] : $this->getContext($context, "entrenador")), "direccion"), "html", null, true);
                    echo "
\t\t                    \t    </td>
\t\t                    \t    <td>
\t\t                    \t    \t<a href=\"javascript:void(0)\" class='editar'>Editar</a>
\t\t                    \t    </td>
\t\t                    \t    <td>
\t\t                    \t    \t<a href=\"javascript:void(0)\" class='eliminar'>Eliminar</a>
\t\t                    \t    </td>
\t\t                    \t</tr>
\t\t                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entrenador'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 95
                echo "\t\t                </div>
\t\t            ";
            } elseif (((isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")) == "deporte")) {
                // line 96
                echo " 
\t\t                <div class='contenido'>
                         <table border='1'>
                         \t<th>Nombre</th>
                         \t<th>Entrenador</th>
                         \t<th>Categoria</th>
                         \t<th>Cancha</th>
\t                    \t";
                // line 103
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["arreglo"]) ? $context["arreglo"] : $this->getContext($context, "arreglo")));
                foreach ($context['_seq'] as $context["_key"] => $context["deporte"]) {
                    // line 104
                    echo "\t\t                    \t<tr class='fila_";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deporte"]) ? $context["deporte"] : $this->getContext($context, "deporte")), "iddeportes"), "html", null, true);
                    echo "'>
\t\t                    \t\t<td>
\t\t                    \t\t\t<div id='valor_fila' valor='";
                    // line 106
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deporte"]) ? $context["deporte"] : $this->getContext($context, "deporte")), "iddeportes"), "html", null, true);
                    echo "'>
\t\t                    \t\t\t\t";
                    // line 107
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["deporte"]) ? $context["deporte"] : $this->getContext($context, "deporte")), "nombre"), "html", null, true);
                    echo "
\t\t                    \t\t\t</div>
\t\t                    \t    </td>
\t\t                    \t    <td>
\t\t                    \t    \t";
                    // line 111
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["deporte"]) ? $context["deporte"] : $this->getContext($context, "deporte")), "entrenador"), "nombre"), "html", null, true);
                    echo "
\t\t                    \t    </td>
\t\t                    \t    <td>
\t\t                    \t    \t";
                    // line 114
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["deporte"]) ? $context["deporte"] : $this->getContext($context, "deporte")), "categoria"), "nombre"), "html", null, true);
                    echo "
\t\t                    \t    </td>
\t\t                    \t    <td>
\t\t                    \t    \t";
                    // line 117
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["deporte"]) ? $context["deporte"] : $this->getContext($context, "deporte")), "cancha"), "nombre"), "html", null, true);
                    echo "
\t\t                    \t    </td>
\t\t                    \t    <td>
\t\t                    \t    \t<a href=\"javascript:void(0)\" class='editar'>Editar</a>
\t\t                    \t    </td>
\t\t                    \t    <td>
\t\t                    \t    \t<a href=\"javascript:void(0)\" class='eliminar'>Eliminar</a>
\t\t                    \t    </td>
\t\t                    \t</tr>
\t\t                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['deporte'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 127
                echo "\t\t                </div>
                    ";
            }
            // line 128
            echo "                       
                    
                ";
        } else {
            // line 131
            echo "                    <div id='contenido'>
                        <h1>Bienvenido seleccione una opcion</h1>
                    </div>
                ";
        }
        // line 135
        echo "                \t\t\t";
        // line 136
        echo "\t                    \t<input type='hidden' id='tipo' value = ";
        echo twig_escape_filter($this->env, (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")), "html", null, true);
        echo ">
\t                    \t
                    \t</table>
                    \t";
        // line 139
        echo "\t                
            </div>
            ";
        // line 142
        echo "        </div>
        ";
    }

    // line 147
    public function block_footer($context, array $blocks = array())
    {
        // line 148
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Default:listar.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  311 => 148,  308 => 147,  303 => 142,  299 => 139,  292 => 136,  290 => 135,  284 => 131,  279 => 128,  275 => 127,  259 => 117,  253 => 114,  247 => 111,  240 => 107,  236 => 106,  230 => 104,  226 => 103,  217 => 96,  213 => 95,  197 => 85,  191 => 82,  185 => 79,  178 => 75,  174 => 74,  168 => 72,  164 => 71,  156 => 65,  152 => 63,  136 => 53,  129 => 49,  125 => 48,  119 => 46,  115 => 45,  109 => 41,  105 => 39,  88 => 28,  84 => 27,  78 => 25,  74 => 24,  69 => 21,  67 => 20,  64 => 19,  62 => 18,  58 => 16,  54 => 13,  51 => 12,  44 => 9,  41 => 8,  34 => 5,  31 => 4,);
    }
}
