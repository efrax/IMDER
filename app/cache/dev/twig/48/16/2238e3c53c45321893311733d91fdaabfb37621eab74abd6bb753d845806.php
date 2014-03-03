<?php

/* ProyectoPrincipalBundle:Default:layout.html.twig */
class __TwigTemplate_48162238e3c53c45321893311733d91fdaabfb37621eab74abd6bb753d845806 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'slider' => array($this, 'block_slider'),
            'menucito' => array($this, 'block_menucito'),
            'texto' => array($this, 'block_texto'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'barra1' => array($this, 'block_barra1'),
            'barra2' => array($this, 'block_barra2'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<body>
\t\t<!-- Header -->
\t\t<div id=\"header\">
\t\t    <div class=\"shell\">
\t\t        <!-- Logo -->
\t\t        <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/der.jpg"), "html", null, true);
        echo "\" alt=\"Symfony!\" />
\t\t        <!-- /Logo -->
\t\t        
\t\t        <!-- Navigation -->
\t\t        <div id=\"navigation\">
\t\t            ";
        // line 15
        $this->displayBlock('menu', $context, $blocks);
        // line 26
        echo "\t\t        </div>
\t\t        <!-- /Navigation -->
\t\t        <div class=\"cl\">&nbsp;</div>
\t\t        
\t\t        <!-- Socials -->
\t\t        <div class=\"socials\">
\t\t            <a href=\"#\" class=\"socials-facebook\" title=\"Connect on Facebook\">facebook</a>
\t\t            <a href=\"#\" class=\"socials-twitter\" title=\"Follow us on Twitter\">twitter</a>
\t\t        </div>
\t\t        <!-- /Socials -->
\t\t    </div>
\t\t</div>
\t\t<!-- /Header -->

\t\t<!-- Slider -->
\t\t<div id=\"slider\">
\t\t    ";
        // line 42
        $this->displayBlock('slider', $context, $blocks);
        // line 44
        echo "\t\t</div>
\t\t<!-- /Slider -->

\t\t<!-- Main -->
\t\t<div id=\"main\">
\t\t    <div class=\"bg-top\">
\t\t        <div class=\"shell\">

\t\t            ";
        // line 53
        echo "\t\t            <div id=\"welcome\">                  

\t\t\t\t\t";
        // line 55
        $this->displayBlock('menucito', $context, $blocks);
        // line 71
        echo "\t\t                ";
        $this->displayBlock('texto', $context, $blocks);
        // line 73
        echo "                        
                        ";
        // line 74
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 76
        echo "\t\t            </div>
\t\t            ";
        // line 78
        echo "\t\t            
\t\t            <!-- Barra uno -->
\t\t            ";
        // line 80
        $this->displayBlock('barra1', $context, $blocks);
        // line 82
        echo "\t\t            <!-- /Barra 1 -->
\t\t            
\t\t            <!-- Barra 2 -->
\t\t            ";
        // line 85
        $this->displayBlock('barra2', $context, $blocks);
        // line 87
        echo "\t\t            <!-- /Barra 2 -->
\t\t            
\t\t            <!-- Sidebar -->
\t\t            ";
        // line 90
        $this->displayBlock('sidebar', $context, $blocks);
        // line 92
        echo "\t\t            <!-- /Sidebar -->
\t\t            <div class=\"cl\">&nbsp;</div>
\t\t        </div>
\t\t    </div>
\t\t</div>
\t\t<!-- /Main -->
\t\t
\t\t<!-- Footer -->
\t\t";
        // line 100
        $this->displayBlock('footer', $context, $blocks);
        // line 229
        echo "\t\t<!-- /Footer -->
\t</body>
";
    }

    // line 15
    public function block_menu($context, array $blocks = array())
    {
        // line 16
        echo "\t\t                <ul>
\t\t                    <li><a href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getPath("front", array("slug" => "inicio"));
        echo "\" class=\"active\">Inicio</a></li>
\t\t                    <li><a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("front", array("slug" => "usuario"));
        echo "\">Area de Administrador</a></li>
\t\t                    <li><a href=\"";
        // line 19
        echo $this->env->getExtension('routing')->getPath("front", array("slug" => "fotos"));
        echo "\">Álbum de fotos</a></li>
\t\t                  ";
        // line 24
        echo "\t\t                </ul>
\t\t            ";
    }

    // line 42
    public function block_slider($context, array $blocks = array())
    {
        // line 43
        echo "\t\t    ";
    }

    // line 55
    public function block_menucito($context, array $blocks = array())
    {
        // line 56
        echo "\t\t\t\t\t     <div class=\"grey demo-container\">
\t\t\t\t\t\t\t<ul id=\"drilldown-3\">
\t\t\t\t\t             <li><a href=\"";
        // line 58
        echo $this->env->getExtension('routing')->getPath("agregar", array("slug" => "categoria"));
        echo "\" tabindex=\"1\">Agregar Categoria</a></li>
\t\t\t\t\t             <li><a href=\"";
        // line 59
        echo $this->env->getExtension('routing')->getPath("listar", array("slug" => "categoria"));
        echo "\" tabindex=\"2\">Listar Categorias</a></li>
\t\t\t\t\t             <li><a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("agregar", array("slug" => "cancha"));
        echo "\" tabindex=\"3\">Agregar Cancha</a></li>
\t\t\t\t\t             <li><a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("listar", array("slug" => "cancha"));
        echo "\" tabindex=\"4\">Listar canchas</a></li>
\t\t\t\t\t             <li><a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("agregar", array("slug" => "entrenador"));
        echo "\" tabindex=\"3\">Agregar Entrenador</a></li>
\t\t\t\t\t             <li><a href=\"";
        // line 63
        echo $this->env->getExtension('routing')->getPath("listar", array("slug" => "entrenador"));
        echo "\" tabindex=\"4\">Listar Entrenador</a></li>
\t\t\t\t\t             <li><a href=\"";
        // line 64
        echo $this->env->getExtension('routing')->getPath("agregar", array("slug" => "deporte"));
        echo "\" tabindex=\"3\">Agregar Deporte</a></li>
\t\t\t\t\t             <li><a href=\"";
        // line 65
        echo $this->env->getExtension('routing')->getPath("listar", array("slug" => "deporte"));
        echo "\" tabindex=\"4\">Listar Deportes</a></li>
\t\t\t\t\t             <li><a href=\"";
        // line 66
        echo $this->env->getExtension('routing')->getPath("agregar", array("slug" => "equipo"));
        echo "\" tabindex=\"3\">Agregar Equipo</a></li>
\t\t\t\t\t             <li><a href=\"";
        // line 67
        echo $this->env->getExtension('routing')->getPath("listar", array("slug" => "equipo"));
        echo "\" tabindex=\"4\">Listar Equipos</a></li>   
\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
    }

    // line 71
    public function block_texto($context, array $blocks = array())
    {
        // line 72
        echo "\t\t                ";
    }

    // line 74
    public function block_fos_user_content($context, array $blocks = array())
    {
        // line 75
        echo "                        ";
    }

    // line 80
    public function block_barra1($context, array $blocks = array())
    {
        // line 81
        echo "\t\t            ";
    }

    // line 85
    public function block_barra2($context, array $blocks = array())
    {
        // line 86
        echo "\t\t            ";
    }

    // line 90
    public function block_sidebar($context, array $blocks = array())
    {
        // line 91
        echo "\t\t            ";
    }

    // line 100
    public function block_footer($context, array $blocks = array())
    {
        // line 101
        echo "\t\t\t<div id=\"footer\">
\t            <div class=\"shell\">
\t                <!-- Footer Top -->
\t                ";
        // line 105
        echo "\t                    ";
        // line 196
        echo "\t                    
\t                    <div class=\"cl\">&nbsp;</div>
\t                </div>
\t                <!-- /Footer Top -->
\t                
\t                <!-- Footer Bottom -->
\t                <div class=\"bottom\">
\t                    <!-- Footer Nav -->
\t                 ";
        // line 214
        echo "\t                    <!-- /Footer Nav -->
\t                    
\t                    <!-- Copyrights -->
\t                    <div class=\"right\">
\t                        <p>&copy;IMDER.</p>
\t                        <p>Trabajo elaborado por: <a href=\"http://chocotemplates.com\" target=\"_blank\" title=\"The Sweetest CSS Templates WorldWide\" class=\"choco\">Monica Medina</a></p>
\t                    </div>
\t                    <!-- /Copyrights -->
\t                    
\t                    <div class=\"cl\">&nbsp;</div>
\t                </div>
\t                <!-- /Footer Bottom -->
\t            </div>
\t        </div>
\t\t";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Default:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  278 => 214,  268 => 196,  266 => 105,  261 => 101,  258 => 100,  254 => 91,  251 => 90,  247 => 86,  244 => 85,  240 => 81,  237 => 80,  233 => 75,  230 => 74,  226 => 72,  223 => 71,  215 => 67,  211 => 66,  207 => 65,  203 => 64,  199 => 63,  195 => 62,  191 => 61,  187 => 60,  183 => 59,  179 => 58,  175 => 56,  172 => 55,  168 => 43,  165 => 42,  160 => 24,  156 => 19,  152 => 18,  148 => 17,  145 => 16,  142 => 15,  136 => 229,  134 => 100,  124 => 92,  122 => 90,  117 => 87,  115 => 85,  110 => 82,  108 => 80,  104 => 78,  101 => 76,  99 => 74,  96 => 73,  93 => 71,  91 => 55,  87 => 53,  77 => 44,  75 => 42,  57 => 26,  55 => 15,  47 => 10,  40 => 5,  37 => 4,);
    }
}
