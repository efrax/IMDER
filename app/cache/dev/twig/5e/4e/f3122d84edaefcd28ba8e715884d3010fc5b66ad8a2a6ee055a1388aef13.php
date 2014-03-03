<?php

/* SensioDistributionBundle:Configurator:final.html.twig */
class __TwigTemplate_5e4ef3122d84edaefcd28ba8e715884d3010fc5b66ad8a2a6ee055a1388aef13 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("SensioDistributionBundle::Configurator/layout.html.twig");

        $this->blocks = array(
            'content_class' => array($this, 'block_content_class'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SensioDistributionBundle::Configurator/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content_class($context, array $blocks = array())
    {
        echo "config_done";
    }

    // line 4
    public function block_content($context, array $blocks = array())
    {
        // line 5
        echo "    <div class=\"step\">
        <h1>Well done!</h1>
        ";
        // line 7
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 8
            echo "        <h2>Your distribution is configured!</h2>
        ";
        } else {
            // line 10
            echo "        <h2 class=\"configure-error\">Your distribution is almost configured but...</h2>
        ";
        }
        // line 12
        echo "        <h3>
            <span>
                ";
        // line 14
        if ((isset($context["is_writable"]) ? $context["is_writable"] : $this->getContext($context, "is_writable"))) {
            // line 15
            echo "                    Your parameters.yml file has been overwritten with these parameters (in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>):
                ";
        } else {
            // line 17
            echo "                    Your parameters.yml file is not writeable! Here are the parameters you can copy and paste in <em>";
            echo twig_escape_filter($this->env, (isset($context["yml_path"]) ? $context["yml_path"] : $this->getContext($context, "yml_path")), "html", null, true);
            echo "</em>:
                ";
        }
        // line 19
        echo "            </span>
        </h3>

        <textarea class=\"symfony-configuration\">";
        // line 22
        echo twig_escape_filter($this->env, (isset($context["parameters"]) ? $context["parameters"] : $this->getContext($context, "parameters")), "html", null, true);
        echo "</textarea>

        ";
        // line 24
        if ((isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url"))) {
            // line 25
            echo "            <ul>
                <li><a href=\"";
            // line 26
            echo twig_escape_filter($this->env, (isset($context["welcome_url"]) ? $context["welcome_url"] : $this->getContext($context, "welcome_url")), "html", null, true);
            echo "\">Go to the Welcome page</a></li>
            </ul>
        ";
        }
        // line 29
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "SensioDistributionBundle:Configurator:final.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 327,  389 => 160,  386 => 159,  378 => 157,  371 => 156,  367 => 339,  358 => 151,  345 => 147,  343 => 146,  340 => 145,  334 => 141,  331 => 140,  328 => 139,  326 => 138,  307 => 128,  302 => 125,  296 => 121,  293 => 120,  281 => 114,  276 => 111,  232 => 88,  222 => 83,  462 => 202,  449 => 198,  446 => 197,  441 => 196,  439 => 195,  431 => 189,  429 => 188,  422 => 184,  415 => 180,  408 => 176,  401 => 172,  394 => 168,  380 => 158,  373 => 156,  361 => 152,  348 => 140,  342 => 137,  338 => 135,  335 => 134,  329 => 131,  325 => 129,  323 => 128,  320 => 127,  289 => 113,  286 => 112,  270 => 102,  267 => 101,  262 => 98,  233 => 87,  216 => 79,  207 => 75,  181 => 65,  363 => 153,  357 => 123,  353 => 328,  351 => 141,  344 => 119,  332 => 116,  327 => 114,  324 => 113,  321 => 135,  318 => 111,  315 => 131,  306 => 286,  300 => 121,  297 => 104,  291 => 102,  288 => 118,  274 => 110,  265 => 105,  263 => 95,  255 => 101,  212 => 78,  810 => 492,  807 => 491,  796 => 489,  792 => 488,  788 => 486,  775 => 485,  749 => 479,  746 => 478,  727 => 476,  710 => 475,  706 => 473,  702 => 472,  698 => 471,  694 => 470,  690 => 469,  686 => 468,  682 => 467,  679 => 466,  677 => 465,  660 => 464,  649 => 462,  634 => 456,  629 => 454,  625 => 453,  622 => 452,  620 => 451,  606 => 449,  601 => 446,  567 => 414,  549 => 411,  532 => 410,  529 => 409,  527 => 408,  522 => 406,  517 => 404,  188 => 90,  153 => 56,  161 => 63,  110 => 38,  23 => 4,  100 => 36,  81 => 23,  20 => 1,  311 => 148,  308 => 287,  303 => 122,  299 => 139,  292 => 136,  290 => 119,  284 => 131,  279 => 128,  275 => 105,  253 => 100,  236 => 106,  226 => 84,  197 => 69,  218 => 102,  191 => 67,  248 => 97,  234 => 87,  213 => 78,  194 => 68,  178 => 59,  174 => 65,  259 => 103,  256 => 96,  249 => 14,  231 => 83,  225 => 71,  206 => 65,  202 => 77,  184 => 63,  148 => 43,  134 => 39,  118 => 49,  84 => 27,  58 => 15,  76 => 28,  70 => 19,  170 => 56,  129 => 49,  77 => 25,  65 => 17,  34 => 4,  215 => 52,  205 => 50,  195 => 59,  185 => 66,  180 => 56,  175 => 58,  160 => 48,  152 => 46,  127 => 35,  210 => 77,  200 => 72,  198 => 65,  190 => 76,  186 => 62,  172 => 57,  165 => 60,  155 => 47,  150 => 55,  146 => 18,  126 => 210,  124 => 81,  113 => 40,  104 => 37,  97 => 41,  90 => 37,  53 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 199,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 164,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 329,  341 => 118,  337 => 103,  322 => 101,  314 => 99,  312 => 130,  309 => 129,  305 => 95,  298 => 120,  294 => 90,  285 => 89,  283 => 115,  278 => 106,  268 => 85,  264 => 84,  258 => 94,  252 => 80,  247 => 111,  241 => 93,  229 => 87,  220 => 81,  214 => 99,  177 => 65,  169 => 56,  140 => 58,  132 => 64,  128 => 63,  107 => 37,  61 => 23,  273 => 96,  269 => 107,  254 => 92,  243 => 92,  240 => 107,  238 => 96,  235 => 89,  230 => 104,  227 => 86,  224 => 81,  221 => 104,  219 => 76,  217 => 96,  208 => 76,  204 => 72,  179 => 66,  159 => 42,  143 => 51,  135 => 62,  119 => 40,  102 => 33,  71 => 13,  67 => 18,  63 => 21,  59 => 22,  201 => 92,  196 => 92,  183 => 188,  171 => 61,  166 => 54,  163 => 53,  158 => 80,  156 => 58,  151 => 59,  142 => 17,  138 => 17,  136 => 48,  121 => 50,  117 => 39,  105 => 25,  91 => 29,  62 => 16,  49 => 12,  28 => 3,  38 => 5,  94 => 21,  89 => 30,  85 => 26,  75 => 22,  68 => 12,  56 => 14,  24 => 3,  87 => 33,  31 => 3,  25 => 35,  21 => 2,  26 => 6,  19 => 1,  93 => 38,  88 => 30,  78 => 24,  46 => 12,  44 => 8,  27 => 7,  79 => 29,  72 => 21,  69 => 26,  47 => 9,  40 => 11,  37 => 6,  22 => 2,  246 => 96,  157 => 47,  145 => 52,  139 => 49,  131 => 45,  123 => 42,  120 => 31,  115 => 40,  111 => 47,  108 => 47,  101 => 33,  98 => 34,  96 => 35,  83 => 35,  74 => 22,  66 => 25,  55 => 12,  52 => 12,  50 => 10,  43 => 9,  41 => 7,  35 => 4,  32 => 7,  29 => 3,  209 => 82,  203 => 73,  199 => 93,  193 => 232,  189 => 66,  187 => 75,  182 => 87,  176 => 63,  173 => 85,  168 => 61,  164 => 71,  162 => 59,  154 => 60,  149 => 89,  147 => 43,  144 => 42,  141 => 51,  133 => 55,  130 => 46,  125 => 42,  122 => 41,  116 => 39,  112 => 39,  109 => 27,  106 => 51,  103 => 28,  99 => 23,  95 => 39,  92 => 31,  86 => 53,  82 => 25,  80 => 24,  73 => 23,  64 => 17,  60 => 20,  57 => 19,  54 => 19,  51 => 37,  48 => 10,  45 => 11,  42 => 7,  39 => 10,  36 => 9,  33 => 6,  30 => 7,);
    }
}
