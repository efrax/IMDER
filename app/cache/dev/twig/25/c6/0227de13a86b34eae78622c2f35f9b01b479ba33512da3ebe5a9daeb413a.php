<?php

/* ProyectoPrincipalBundle:Default:base.html.twig */
class __TwigTemplate_25c60227de13a86b34eae78622c2f35f9b01b479ba33512da3ebe5a9daeb413a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'title' => array($this, 'block_title'),
            'sidebar' => array($this, 'block_sidebar'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
    <html>
        <head>
        ";
        // line 6
        echo "        ";
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
        <title>";
        // line 13
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        </head>
        <body>
        <div id=\"sidebar\">
            ";
        // line 17
        $this->displayBlock('sidebar', $context, $blocks);
        // line 23
        echo "        </div>

        <div id=\"contenido\">
            ";
        // line 26
        $this->displayBlock('body', $context, $blocks);
        // line 27
        echo "        </div>

        <h1>todo bien</h1>
    </body>

";
        // line 33
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "
</html>";
    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 7
        echo "            <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/estyle.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" />

            ";
        // line 10
        echo "        ";
    }

    // line 13
    public function block_title($context, array $blocks = array())
    {
        echo "Test Application";
    }

    // line 17
    public function block_sidebar($context, array $blocks = array())
    {
        // line 18
        echo "            <ul>
                <li><a href=\"/\">Home</a></li>
                <li><a href=\"/blog\">Blog</a></li>
            </ul>
            ";
    }

    // line 26
    public function block_body($context, array $blocks = array())
    {
    }

    // line 33
    public function block_javascripts($context, array $blocks = array())
    {
        // line 34
        echo "        <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/js/main.js"), "html", null, true);
        echo "\" type=\"text/javascript\"></script>
    ";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Default:base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  76 => 10,  70 => 7,  170 => 107,  129 => 72,  77 => 30,  65 => 22,  34 => 3,  215 => 52,  205 => 50,  195 => 48,  185 => 227,  180 => 187,  175 => 184,  160 => 48,  152 => 45,  127 => 56,  210 => 51,  200 => 49,  198 => 86,  190 => 231,  186 => 71,  172 => 52,  165 => 55,  155 => 42,  150 => 24,  146 => 43,  126 => 210,  124 => 81,  113 => 36,  104 => 65,  97 => 26,  90 => 56,  53 => 15,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 51,  140 => 5,  132 => 15,  128 => 49,  107 => 36,  61 => 17,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 66,  159 => 61,  143 => 56,  135 => 16,  119 => 42,  102 => 33,  71 => 19,  67 => 6,  63 => 15,  59 => 33,  201 => 92,  196 => 90,  183 => 188,  171 => 61,  166 => 50,  163 => 49,  158 => 43,  156 => 66,  151 => 63,  142 => 18,  138 => 17,  136 => 56,  121 => 46,  117 => 44,  105 => 34,  91 => 41,  62 => 36,  49 => 13,  28 => 3,  38 => 5,  94 => 42,  89 => 18,  85 => 53,  75 => 44,  68 => 14,  56 => 9,  24 => 2,  87 => 28,  31 => 4,  25 => 3,  21 => 2,  26 => 6,  19 => 1,  93 => 31,  88 => 54,  78 => 25,  46 => 7,  44 => 7,  27 => 4,  79 => 18,  72 => 16,  69 => 25,  47 => 8,  40 => 8,  37 => 4,  22 => 2,  246 => 90,  157 => 47,  145 => 46,  139 => 45,  131 => 52,  123 => 43,  120 => 40,  115 => 43,  111 => 70,  108 => 54,  101 => 33,  98 => 31,  96 => 31,  83 => 27,  74 => 29,  66 => 24,  55 => 26,  52 => 27,  50 => 26,  43 => 17,  41 => 5,  35 => 5,  32 => 11,  29 => 6,  209 => 82,  203 => 78,  199 => 67,  193 => 232,  189 => 71,  187 => 84,  182 => 66,  176 => 65,  173 => 108,  168 => 72,  164 => 59,  162 => 54,  154 => 46,  149 => 89,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 41,  125 => 55,  122 => 43,  116 => 41,  112 => 42,  109 => 35,  106 => 67,  103 => 32,  99 => 62,  95 => 28,  92 => 21,  86 => 17,  82 => 22,  80 => 13,  73 => 24,  64 => 17,  60 => 6,  57 => 16,  54 => 13,  51 => 14,  48 => 12,  45 => 23,  42 => 8,  39 => 7,  36 => 13,  33 => 4,  30 => 7,);
    }
}
