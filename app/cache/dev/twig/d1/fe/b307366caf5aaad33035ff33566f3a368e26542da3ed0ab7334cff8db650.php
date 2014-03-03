<?php

/* FOSUserBundle:Resetting:request_content.html.twig */
class __TwigTemplate_d1feb307366caf5aaad33035ff33566f3a368e26542da3ed0ab7334cff8db650 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        ";
        // line 5
        if (array_key_exists("invalid_username", $context)) {
            // line 6
            echo "            <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.invalid_username", array("%username%" => (isset($context["invalid_username"]) ? $context["invalid_username"] : $this->getContext($context, "invalid_username"))), "FOSUserBundle"), "html", null, true);
            echo "</p>
        ";
        }
        // line 8
        echo "        <label for=\"username\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  100 => 27,  81 => 24,  20 => 1,  311 => 148,  308 => 147,  303 => 142,  299 => 139,  292 => 136,  290 => 135,  284 => 131,  279 => 128,  275 => 127,  253 => 114,  236 => 106,  226 => 103,  197 => 85,  218 => 102,  191 => 82,  248 => 192,  234 => 87,  213 => 95,  194 => 64,  178 => 75,  174 => 74,  259 => 117,  256 => 86,  249 => 14,  231 => 86,  225 => 71,  206 => 65,  202 => 66,  184 => 57,  148 => 43,  134 => 37,  118 => 88,  84 => 27,  58 => 18,  76 => 44,  70 => 7,  170 => 107,  129 => 49,  77 => 30,  65 => 22,  34 => 7,  215 => 52,  205 => 50,  195 => 59,  185 => 79,  180 => 56,  175 => 184,  160 => 48,  152 => 63,  127 => 56,  210 => 70,  200 => 49,  198 => 65,  190 => 63,  186 => 62,  172 => 79,  165 => 74,  155 => 42,  150 => 71,  146 => 18,  126 => 210,  124 => 81,  113 => 36,  104 => 78,  97 => 26,  90 => 55,  53 => 13,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 210,  252 => 80,  247 => 111,  241 => 97,  229 => 73,  220 => 77,  214 => 99,  177 => 65,  169 => 56,  140 => 5,  132 => 64,  128 => 63,  107 => 36,  61 => 18,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 107,  238 => 96,  235 => 74,  230 => 104,  227 => 82,  224 => 106,  221 => 104,  219 => 76,  217 => 96,  208 => 68,  204 => 72,  179 => 66,  159 => 42,  143 => 66,  135 => 16,  119 => 46,  102 => 76,  71 => 10,  67 => 20,  63 => 15,  59 => 17,  201 => 92,  196 => 90,  183 => 188,  171 => 61,  166 => 55,  163 => 49,  158 => 48,  156 => 65,  151 => 63,  142 => 17,  138 => 17,  136 => 53,  121 => 46,  117 => 44,  105 => 39,  91 => 27,  62 => 19,  49 => 86,  28 => 3,  38 => 5,  94 => 23,  89 => 21,  85 => 53,  75 => 26,  68 => 22,  56 => 26,  24 => 7,  87 => 25,  31 => 4,  25 => 3,  21 => 2,  26 => 12,  19 => 2,  93 => 29,  88 => 28,  78 => 25,  46 => 14,  44 => 9,  27 => 5,  79 => 18,  72 => 21,  69 => 21,  47 => 8,  40 => 11,  37 => 4,  22 => 3,  246 => 101,  157 => 47,  145 => 42,  139 => 16,  131 => 52,  123 => 43,  120 => 57,  115 => 45,  111 => 83,  108 => 54,  101 => 33,  98 => 74,  96 => 31,  83 => 30,  74 => 24,  66 => 24,  55 => 14,  52 => 27,  50 => 12,  43 => 12,  41 => 8,  35 => 8,  32 => 3,  29 => 6,  209 => 82,  203 => 90,  199 => 88,  193 => 232,  189 => 71,  187 => 82,  182 => 61,  176 => 80,  173 => 51,  168 => 72,  164 => 71,  162 => 43,  154 => 72,  149 => 89,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 225,  125 => 48,  122 => 33,  116 => 86,  112 => 52,  109 => 41,  106 => 67,  103 => 28,  99 => 41,  95 => 72,  92 => 70,  86 => 53,  82 => 22,  80 => 17,  73 => 24,  64 => 19,  60 => 16,  57 => 16,  54 => 16,  51 => 13,  48 => 12,  45 => 84,  42 => 9,  39 => 7,  36 => 10,  33 => 4,  30 => 2,);
    }
}
