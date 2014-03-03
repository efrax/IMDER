<?php

/* ProyectoPrincipalBundle:Default:layout_portada.html.twig */
class __TwigTemplate_5473b6e0ef0d3445a1b7fc9d52f538b0f4bcf7cc22a8c754d0b10c3df5de17aa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'slider' => array($this, 'block_slider'),
            'texto' => array($this, 'block_texto'),
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
\t\t                ";
        // line 54
        $this->displayBlock('texto', $context, $blocks);
        // line 56
        echo "\t\t            </div>
\t\t            ";
        // line 58
        echo "\t\t            
\t\t            <!-- Barra uno -->
\t\t            ";
        // line 60
        $this->displayBlock('barra1', $context, $blocks);
        // line 62
        echo "\t\t            <!-- /Barra 1 -->
\t\t            
\t\t            <!-- Barra 2 -->
\t\t            ";
        // line 65
        $this->displayBlock('barra2', $context, $blocks);
        // line 67
        echo "\t\t            <!-- /Barra 2 -->
\t\t            
\t\t            <!-- Sidebar -->
\t\t            ";
        // line 70
        $this->displayBlock('sidebar', $context, $blocks);
        // line 72
        echo "\t\t            <!-- /Sidebar -->
\t\t            <div class=\"cl\">&nbsp;</div>
\t\t        </div>
\t\t    </div>
\t\t</div>
\t\t<!-- /Main -->


\t\t<!-- Footer -->
\t\t";
        // line 81
        $this->displayBlock('footer', $context, $blocks);
        // line 210
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

    // line 54
    public function block_texto($context, array $blocks = array())
    {
        // line 55
        echo "\t\t                ";
    }

    // line 60
    public function block_barra1($context, array $blocks = array())
    {
        // line 61
        echo "\t\t            ";
    }

    // line 65
    public function block_barra2($context, array $blocks = array())
    {
        // line 66
        echo "\t\t            ";
    }

    // line 70
    public function block_sidebar($context, array $blocks = array())
    {
        // line 71
        echo "\t\t            ";
    }

    // line 81
    public function block_footer($context, array $blocks = array())
    {
        // line 82
        echo "\t\t\t<div id=\"footer\">
\t            <div class=\"shell\">
\t                <!-- Footer Top -->
\t                ";
        // line 86
        echo "\t                    ";
        // line 177
        echo "\t                    
\t                    <div class=\"cl\">&nbsp;</div>
\t                </div>
\t                <!-- /Footer Top -->
\t                
\t                <!-- Footer Bottom -->
\t                <div class=\"bottom\">
\t                    <!-- Footer Nav -->
\t                 ";
        // line 195
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
        return "ProyectoPrincipalBundle:Default:layout_portada.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  210 => 195,  200 => 177,  198 => 86,  193 => 82,  190 => 81,  186 => 71,  183 => 70,  179 => 66,  176 => 65,  172 => 61,  169 => 60,  165 => 55,  162 => 54,  158 => 43,  155 => 42,  150 => 24,  146 => 19,  142 => 18,  138 => 17,  135 => 16,  132 => 15,  126 => 210,  124 => 81,  113 => 72,  111 => 70,  106 => 67,  104 => 65,  99 => 62,  97 => 60,  93 => 58,  90 => 56,  88 => 54,  85 => 53,  75 => 44,  73 => 42,  55 => 26,  53 => 15,  45 => 10,  38 => 5,  35 => 4,);
    }
}
