<?php

/* WebProfilerBundle:Collector:exception.css.twig */
class __TwigTemplate_3c417dfb6f1b2df8eeb7b195808cb1cfef28572df442bbf308295efff30b4a28 extends Twig_Template
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
        // line 1
        echo ".sf-reset .traces {
    padding-bottom: 14px;
}
.sf-reset .traces li {
    font-size: 12px;
    color: #868686;
    padding: 5px 4px;
    list-style-type: decimal;
    margin-left: 20px;
    white-space: break-word;
}
.sf-reset #logs .traces li.error {
    font-style: normal;
    color: #AA3333;
    background: #f9ecec;
}
.sf-reset #logs .traces li.warning {
    font-style: normal;
    background: #ffcc00;
}
/* fix for Opera not liking empty <li> */
.sf-reset .traces li:after {
    content: \"\\00A0\";
}
.sf-reset .trace {
    border: 1px solid #D3D3D3;
    padding: 10px;
    overflow: auto;
    margin: 10px 0 20px;
}
.sf-reset .block-exception {
    border-radius: 16px;
    margin-bottom: 20px;
    background-color: #f6f6f6;
    border: 1px solid #dfdfdf;
    padding: 30px 28px;
    word-wrap: break-word;
    overflow: hidden;
}
.sf-reset .block-exception div {
    color: #313131;
    font-size: 10px;
}
.sf-reset .block-exception-detected .illustration-exception,
.sf-reset .block-exception-detected .text-exception {
    float: left;
}
.sf-reset .block-exception-detected .illustration-exception {
    width: 152px;
}
.sf-reset .block-exception-detected .text-exception {
    width: 670px;
    padding: 30px 44px 24px 46px;
    position: relative;
}
.sf-reset .text-exception .open-quote,
.sf-reset .text-exception .close-quote {
    position: absolute;
}
.sf-reset .open-quote {
    top: 0;
    left: 0;
}
.sf-reset .close-quote {
    bottom: 0;
    right: 50px;
}
.sf-reset .block-exception p {
    font-family: Arial, Helvetica, sans-serif;
}
.sf-reset .block-exception p a,
.sf-reset .block-exception p a:hover {
    color: #565656;
}
.sf-reset .logs h2 {
    float: left;
    width: 654px;
}
.sf-reset .error-count {
    float: right;
    width: 170px;
    text-align: right;
}
.sf-reset .error-count span {
    display: inline-block;
    background-color: #aacd4e;
    border-radius: 6px;
    padding: 4px;
    color: white;
    margin-right: 2px;
    font-size: 11px;
    font-weight: bold;
}
.sf-reset .toggle {
    vertical-align: middle;
}
.sf-reset .linked ul,
.sf-reset .linked li {
    display: inline;
}
.sf-reset #output-content {
    color: #000;
    font-size: 12px;
}
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.css.twig";
    }

    public function getDebugInfo()
    {
        return array (  161 => 63,  110 => 22,  23 => 4,  100 => 39,  81 => 24,  20 => 1,  311 => 148,  308 => 147,  303 => 142,  299 => 139,  292 => 136,  290 => 135,  284 => 131,  279 => 128,  275 => 127,  253 => 114,  236 => 106,  226 => 103,  197 => 85,  218 => 102,  191 => 67,  248 => 192,  234 => 87,  213 => 95,  194 => 64,  178 => 66,  174 => 74,  259 => 117,  256 => 86,  249 => 14,  231 => 86,  225 => 71,  206 => 65,  202 => 66,  184 => 57,  148 => 43,  134 => 54,  118 => 49,  84 => 29,  58 => 17,  76 => 31,  70 => 7,  170 => 107,  129 => 49,  77 => 30,  65 => 22,  34 => 7,  215 => 52,  205 => 50,  195 => 59,  185 => 79,  180 => 56,  175 => 65,  160 => 48,  152 => 63,  127 => 60,  210 => 70,  200 => 49,  198 => 65,  190 => 63,  186 => 62,  172 => 64,  165 => 74,  155 => 42,  150 => 71,  146 => 18,  126 => 210,  124 => 81,  113 => 48,  104 => 78,  97 => 41,  90 => 32,  53 => 11,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 210,  252 => 80,  247 => 111,  241 => 97,  229 => 73,  220 => 77,  214 => 99,  177 => 65,  169 => 56,  140 => 58,  132 => 64,  128 => 63,  107 => 36,  61 => 12,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 107,  238 => 96,  235 => 74,  230 => 104,  227 => 82,  224 => 106,  221 => 104,  219 => 76,  217 => 96,  208 => 68,  204 => 72,  179 => 66,  159 => 42,  143 => 66,  135 => 62,  119 => 46,  102 => 40,  71 => 10,  67 => 24,  63 => 19,  59 => 13,  201 => 92,  196 => 90,  183 => 188,  171 => 61,  166 => 55,  163 => 49,  158 => 62,  156 => 65,  151 => 59,  142 => 17,  138 => 17,  136 => 53,  121 => 50,  117 => 19,  105 => 18,  91 => 27,  62 => 19,  49 => 14,  28 => 3,  38 => 6,  94 => 34,  89 => 21,  85 => 32,  75 => 26,  68 => 22,  56 => 11,  24 => 7,  87 => 34,  31 => 3,  25 => 35,  21 => 2,  26 => 9,  19 => 1,  93 => 29,  88 => 31,  78 => 26,  46 => 13,  44 => 9,  27 => 3,  79 => 18,  72 => 21,  69 => 21,  47 => 8,  40 => 6,  37 => 5,  22 => 3,  246 => 101,  157 => 47,  145 => 42,  139 => 63,  131 => 61,  123 => 59,  120 => 20,  115 => 45,  111 => 47,  108 => 19,  101 => 43,  98 => 74,  96 => 37,  83 => 33,  74 => 27,  66 => 24,  55 => 16,  52 => 10,  50 => 10,  43 => 12,  41 => 10,  35 => 6,  32 => 5,  29 => 3,  209 => 82,  203 => 90,  199 => 88,  193 => 232,  189 => 71,  187 => 82,  182 => 61,  176 => 80,  173 => 51,  168 => 72,  164 => 71,  162 => 43,  154 => 60,  149 => 89,  147 => 58,  144 => 49,  141 => 48,  133 => 55,  130 => 225,  125 => 51,  122 => 33,  116 => 86,  112 => 52,  109 => 41,  106 => 45,  103 => 28,  99 => 41,  95 => 72,  92 => 70,  86 => 53,  82 => 28,  80 => 32,  73 => 16,  64 => 23,  60 => 16,  57 => 12,  54 => 16,  51 => 13,  48 => 9,  45 => 8,  42 => 7,  39 => 7,  36 => 5,  33 => 4,  30 => 3,);
    }
}
