<?php

/* AcmeDemoBundle:Secured:login.html.twig */
class __TwigTemplate_aef1fd61fbd028c149a2b1ce442689019b75f10aad808cb61a0aee7908c98e2c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("AcmeDemoBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "AcmeDemoBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 35
        $context["code"] = $this->env->getExtension('demo')->getCode($this);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <h1 class=\"title\">Login</h1>

    <p>
        Choose between two default users: <em>user/userpass</em> <small>(ROLE_USER)</small> or <em>admin/adminpass</em> <small>(ROLE_ADMIN)</small>
    </p>

    ";
        // line 10
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 11
            echo "        <div class=\"error\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message"), "html", null, true);
            echo "</div>
    ";
        }
        // line 13
        echo "
    <form action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("_security_check");
        echo "\" method=\"post\" id=\"login\">
        <div>
            <label for=\"username\">Username</label>
            <input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
        </div>

        <div>
            <label for=\"password\">Password</label>
            <input type=\"password\" id=\"password\" name=\"_password\" />
        </div>

        <button type=\"submit\" class=\"sf-button\">
            <span class=\"border-l\">
                <span class=\"border-r\">
                    <span class=\"btn-bg\">Login</span>
                </span>
            </span>
        </button>
    </form>
";
    }

    public function getTemplateName()
    {
        return "AcmeDemoBundle:Secured:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 22,  23 => 4,  100 => 27,  81 => 24,  20 => 1,  311 => 148,  308 => 147,  303 => 142,  299 => 139,  292 => 136,  290 => 135,  284 => 131,  279 => 128,  275 => 127,  253 => 114,  236 => 106,  226 => 103,  197 => 85,  218 => 102,  191 => 82,  248 => 192,  234 => 87,  213 => 95,  194 => 64,  178 => 75,  174 => 74,  259 => 117,  256 => 86,  249 => 14,  231 => 86,  225 => 71,  206 => 65,  202 => 66,  184 => 57,  148 => 43,  134 => 37,  118 => 88,  84 => 29,  58 => 17,  76 => 17,  70 => 7,  170 => 107,  129 => 49,  77 => 30,  65 => 22,  34 => 7,  215 => 52,  205 => 50,  195 => 59,  185 => 79,  180 => 56,  175 => 184,  160 => 48,  152 => 63,  127 => 28,  210 => 70,  200 => 49,  198 => 65,  190 => 63,  186 => 62,  172 => 79,  165 => 74,  155 => 42,  150 => 71,  146 => 18,  126 => 210,  124 => 81,  113 => 36,  104 => 78,  97 => 26,  90 => 32,  53 => 10,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 210,  252 => 80,  247 => 111,  241 => 97,  229 => 73,  220 => 77,  214 => 99,  177 => 65,  169 => 56,  140 => 5,  132 => 64,  128 => 63,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 107,  238 => 96,  235 => 74,  230 => 104,  227 => 82,  224 => 106,  221 => 104,  219 => 76,  217 => 96,  208 => 68,  204 => 72,  179 => 66,  159 => 42,  143 => 66,  135 => 16,  119 => 46,  102 => 17,  71 => 10,  67 => 20,  63 => 15,  59 => 17,  201 => 92,  196 => 90,  183 => 188,  171 => 61,  166 => 55,  163 => 49,  158 => 48,  156 => 65,  151 => 63,  142 => 17,  138 => 17,  136 => 53,  121 => 46,  117 => 19,  105 => 18,  91 => 27,  62 => 19,  49 => 13,  28 => 3,  38 => 6,  94 => 34,  89 => 21,  85 => 53,  75 => 26,  68 => 22,  56 => 11,  24 => 7,  87 => 25,  31 => 4,  25 => 35,  21 => 2,  26 => 11,  19 => 1,  93 => 29,  88 => 31,  78 => 26,  46 => 8,  44 => 9,  27 => 4,  79 => 18,  72 => 21,  69 => 21,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 101,  157 => 47,  145 => 42,  139 => 16,  131 => 52,  123 => 43,  120 => 20,  115 => 45,  111 => 83,  108 => 19,  101 => 33,  98 => 74,  96 => 31,  83 => 30,  74 => 24,  66 => 24,  55 => 14,  52 => 14,  50 => 10,  43 => 11,  41 => 10,  35 => 8,  32 => 3,  29 => 5,  209 => 82,  203 => 90,  199 => 88,  193 => 232,  189 => 71,  187 => 82,  182 => 61,  176 => 80,  173 => 51,  168 => 72,  164 => 71,  162 => 43,  154 => 72,  149 => 89,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 225,  125 => 48,  122 => 33,  116 => 86,  112 => 52,  109 => 41,  106 => 67,  103 => 28,  99 => 41,  95 => 72,  92 => 70,  86 => 53,  82 => 28,  80 => 17,  73 => 16,  64 => 13,  60 => 16,  57 => 16,  54 => 16,  51 => 13,  48 => 12,  45 => 84,  42 => 9,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
