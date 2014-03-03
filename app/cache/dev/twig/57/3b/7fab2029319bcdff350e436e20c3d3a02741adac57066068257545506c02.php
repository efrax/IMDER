<?php

/* ::base.html.twig */
class __TwigTemplate_573b7fab2029319bcdff350e436e20c3d3a02741adac57066068257545506c02 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
            'menu' => array($this, 'block_menu'),
            'slider' => array($this, 'block_slider'),
            'menucito' => array($this, 'block_menucito'),
            'texto' => array($this, 'block_texto'),
            'barra1' => array($this, 'block_barra1'),
            'barra2' => array($this, 'block_barra2'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        
        ";
        // line 8
        echo "
        ";
        // line 10
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/pixel/style.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        ";
        // line 12
        echo "                     
        ";
        // line 14
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/least/least.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

        ";
        // line 17
        echo "        <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/drill/dcdrilldown.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/drill/skins/graphite.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/drill/skins/blue.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/drill/skins/grey.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
        <link href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/drill/skins/demo.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />
    </head>

    <body>
        ";
        // line 25
        $this->displayBlock('body', $context, $blocks);
        // line 35
        echo "        ";
        // line 36
        echo "
        ";
        // line 38
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/jquery.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/utilidades.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

       ";
        // line 42
        echo "        <script type=\"text/javascript\">
            var pruebaAjax     = '";
        // line 43
        echo $this->env->getExtension('routing')->getPath("pruebaAjax");
        echo "';
            var agregarAjax    = '";
        // line 44
        echo $this->env->getExtension('routing')->getPath("agregarAjax");
        echo "';
            var editarProyecto = '";
        // line 45
        echo $this->env->getExtension('routing')->getPath("editarProyecto");
        echo "';
            var editarAjax     = '";
        // line 46
        echo $this->env->getExtension('routing')->getPath("editarAjax");
        echo "';
            var eliminarAjax   = '";
        // line 47
        echo $this->env->getExtension('routing')->getPath("eliminarAjax");
        echo "';
            var listar         = '";
        // line 48
        echo $this->env->getExtension('routing')->getPath("listar");
        echo "';
        </script> 

        ";
        // line 52
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/drill/jquery.cookie.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/drill/jquery.dcdrilldown.1.2.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/drill/accion.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        ";
        // line 57
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/least/least.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 58
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/least/jquery.lazyload.min.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        ";
        // line 61
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/pixel/jquery.jcarousel.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 62
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/pixel/fancybox/jquery.fancybox-1.3.1.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 63
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/pixel/jquery-func.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>

        ";
        // line 66
        echo "        <script type=\"text/javascript\">
            \$(document).ready(function(){
                \$('#gallery').least();
            });
        </script>
    </body>
</html>
";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "IMDER - Bienvenido";
    }

    // line 25
    public function block_body($context, array $blocks = array())
    {
        // line 26
        echo "            ";
        $this->displayBlock('menu', $context, $blocks);
        // line 27
        echo "            ";
        $this->displayBlock('slider', $context, $blocks);
        // line 28
        echo "            ";
        $this->displayBlock('menucito', $context, $blocks);
        // line 29
        echo "            ";
        $this->displayBlock('texto', $context, $blocks);
        // line 30
        echo "            ";
        $this->displayBlock('barra1', $context, $blocks);
        // line 31
        echo "            ";
        $this->displayBlock('barra2', $context, $blocks);
        // line 32
        echo "            ";
        $this->displayBlock('sidebar', $context, $blocks);
        // line 33
        echo "            ";
        $this->displayBlock('footer', $context, $blocks);
        // line 34
        echo "        ";
    }

    // line 26
    public function block_menu($context, array $blocks = array())
    {
    }

    // line 27
    public function block_slider($context, array $blocks = array())
    {
    }

    // line 28
    public function block_menucito($context, array $blocks = array())
    {
    }

    // line 29
    public function block_texto($context, array $blocks = array())
    {
    }

    // line 30
    public function block_barra1($context, array $blocks = array())
    {
    }

    // line 31
    public function block_barra2($context, array $blocks = array())
    {
    }

    // line 32
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 33
    public function block_footer($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  248 => 33,  243 => 32,  238 => 31,  233 => 30,  228 => 29,  223 => 28,  218 => 27,  213 => 26,  209 => 34,  206 => 33,  203 => 32,  200 => 31,  197 => 30,  194 => 29,  191 => 28,  188 => 27,  185 => 26,  182 => 25,  176 => 5,  165 => 66,  160 => 63,  156 => 62,  151 => 61,  146 => 58,  141 => 57,  136 => 54,  132 => 53,  127 => 52,  121 => 48,  117 => 47,  113 => 46,  109 => 45,  105 => 44,  101 => 43,  98 => 42,  93 => 39,  88 => 38,  85 => 36,  83 => 35,  81 => 25,  74 => 21,  70 => 20,  66 => 19,  62 => 18,  57 => 17,  51 => 14,  48 => 12,  43 => 10,  40 => 8,  35 => 5,  29 => 1,);
    }
}
