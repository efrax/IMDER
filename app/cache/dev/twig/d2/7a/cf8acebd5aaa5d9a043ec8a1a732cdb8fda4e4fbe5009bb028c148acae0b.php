<?php

/* ProyectoPrincipalBundle:Default:fotos.html.twig */
class __TwigTemplate_d27acf8acebd5aaa5d9a043ec8a1a732cdb8fda4e4fbe5009bb028c148acae0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ProyectoPrincipalBundle:Default:layout_portada.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'texto' => array($this, 'block_texto'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ProyectoPrincipalBundle:Default:layout_portada.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "\t";
        $this->displayParentBlock("body", $context, $blocks);
        echo "
";
    }

    // line 7
    public function block_texto($context, array $blocks = array())
    {
        // line 8
        echo "\t<section>
\t    <ul id=\"gallery\">
\t        <li id=\"fullPreview\"></li>
\t        
\t        <li>
\t            <a href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/1.jpg"), "html", null, true);
        echo "\"></a>
\t            <img data-original=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/1.jpg"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/1.jpg"), "html", null, true);
        echo "\" width=\"240\" height=\"150\" alt=\"Ocean\" />
\t            
\t            <div class=\"overLayer\"></div>
\t            <div class=\"infoLayer\">
\t                <ul>
\t                    <li>
\t                        <h2>
\t                            Ocean
\t                        </h2>
\t                    </li>
\t                    <li>
\t                        <p>
\t                            View Picture
\t                        </p>
\t                    </li>
\t                </ul>
\t            </div>
\t            
\t            <div class=\"projectInfo\">
\t                <strong>
\t                    Day, Month, Year:
\t                </strong> sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
\t            </div>
\t        </li>

\t        <li>
\t            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/2.jpg"), "html", null, true);
        echo "\"></a>
\t            <img data-original=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/2.jpg"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/2.jpg"), "html", null, true);
        echo "\" width=\"240\" height=\"150\" alt=\"Ocean\" />
\t            
\t            <div class=\"overLayer\"></div>
\t            <div class=\"infoLayer\">
\t                <ul>
\t                    <li>
\t                        <h2>
\t                            Ocean
\t                        </h2>
\t                    </li>
\t                    <li>
\t                        <p>
\t                            View Picture
\t                        </p>
\t                    </li>
\t                </ul>
\t            </div>
\t            
\t            <div class=\"projectInfo\">
\t                <strong>
\t                    Day, Month, Year:
\t                </strong> sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
\t            </div>
\t        </li>

\t        <li>
\t            <a href=\"";
        // line 67
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/3.jpg"), "html", null, true);
        echo "\"></a>
\t            <img data-original=\"";
        // line 68
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/3.jpg"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/3.jpg"), "html", null, true);
        echo "\" width=\"240\" height=\"150\" alt=\"Ocean\" />
\t            
\t            <div class=\"overLayer\"></div>
\t            <div class=\"infoLayer\">
\t                <ul>
\t                    <li>
\t                        <h2>
\t                            Ocean
\t                        </h2>
\t                    </li>
\t                    <li>
\t                        <p>
\t                            View Picture
\t                        </p>
\t                    </li>
\t                </ul>
\t            </div>
\t            
\t            <div class=\"projectInfo\">
\t                <strong>
\t                    Day, Month, Year:
\t                </strong> sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
\t            </div>
\t        </li>

\t        <li>
\t            <a href=\"";
        // line 94
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/4.jpg"), "html", null, true);
        echo "\"></a>
\t            <img data-original=\"";
        // line 95
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/4.jpg"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/4.jpg"), "html", null, true);
        echo "\" width=\"240\" height=\"150\" alt=\"Ocean\" />
\t            
\t            <div class=\"overLayer\"></div>
\t            <div class=\"infoLayer\">
\t                <ul>
\t                    <li>
\t                        <h2>
\t                            Ocean
\t                        </h2>
\t                    </li>
\t                    <li>
\t                        <p>
\t                            View Picture
\t                        </p>
\t                    </li>
\t                </ul>
\t            </div>
\t            
\t            <div class=\"projectInfo\">
\t                <strong>
\t                    Day, Month, Year:
\t                </strong> sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
\t            </div>
\t        </li>\t

\t        <li>
\t            <a href=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/5.jpg"), "html", null, true);
        echo "\"></a>
\t            <img data-original=\"";
        // line 122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/5.jpg"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/5.jpg"), "html", null, true);
        echo "\" width=\"240\" height=\"150\" alt=\"Ocean\" />
\t            
\t            <div class=\"overLayer\"></div>
\t            <div class=\"infoLayer\">
\t                <ul>
\t                    <li>
\t                        <h2>
\t                            Ocean
\t                        </h2>
\t                    </li>
\t                    <li>
\t                        <p>
\t                            View Picture
\t                        </p>
\t                    </li>
\t                </ul>
\t            </div>
\t            
\t            <div class=\"projectInfo\">
\t                <strong>
\t                    Day, Month, Year:
\t                </strong> sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
\t            </div>
\t        </li>        \t        

\t        <li>
\t            <a href=\"";
        // line 148
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/6.jpg"), "html", null, true);
        echo "\"></a>
\t            <img data-original=\"";
        // line 149
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/6.jpg"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/6.jpg"), "html", null, true);
        echo "\" width=\"240\" height=\"150\" alt=\"Ocean\" />
\t            
\t            <div class=\"overLayer\"></div>
\t            <div class=\"infoLayer\">
\t                <ul>
\t                    <li>
\t                        <h2>
\t                            Ocean
\t                        </h2>
\t                    </li>
\t                    <li>
\t                        <p>
\t                            View Picture
\t                        </p>
\t                    </li>
\t                </ul>
\t            </div>
\t            
\t            <div class=\"projectInfo\">
\t                <strong>
\t                    Day, Month, Year:
\t                </strong> sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
\t            </div>
\t        </li>\t

\t        <li>
\t            <a href=\"";
        // line 175
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/7.jpg"), "html", null, true);
        echo "\"></a>
\t            <img data-original=\"";
        // line 176
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/7.jpg"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/7.jpg"), "html", null, true);
        echo "\" width=\"240\" height=\"150\" alt=\"Ocean\" />
\t            
\t            <div class=\"overLayer\"></div>
\t            <div class=\"infoLayer\">
\t                <ul>
\t                    <li>
\t                        <h2>
\t                            Ocean
\t                        </h2>
\t                    </li>
\t                    <li>
\t                        <p>
\t                            View Picture
\t                        </p>
\t                    </li>
\t                </ul>
\t            </div>
\t            
\t            <div class=\"projectInfo\">
\t                <strong>
\t                    Day, Month, Year:
\t                </strong> sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
\t            </div>
\t        </li>

\t        <li>
\t            <a href=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/8.jpg"), "html", null, true);
        echo "\"></a>
\t            <img data-original=\"";
        // line 203
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/8.jpg"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/8.jpg"), "html", null, true);
        echo "\" width=\"240\" height=\"150\" alt=\"Ocean\" />
\t            
\t            <div class=\"overLayer\"></div>
\t            <div class=\"infoLayer\">
\t                <ul>
\t                    <li>
\t                        <h2>
\t                            Ocean
\t                        </h2>
\t                    </li>
\t                    <li>
\t                        <p>
\t                            View Picture
\t                        </p>
\t                    </li>
\t                </ul>
\t            </div>
\t            
\t            <div class=\"projectInfo\">
\t                <strong>
\t                    Day, Month, Year:
\t                </strong> sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
\t            </div>
\t        </li>\t
\t        <li>
\t            <a href=\"";
        // line 228
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/9.jpg"), "html", null, true);
        echo "\"></a>
\t            <img data-original=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/9.jpg"), "html", null, true);
        echo "\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/least/full/9.jpg"), "html", null, true);
        echo "\" width=\"240\" height=\"150\" alt=\"Ocean\" />
\t            
\t            <div class=\"overLayer\"></div>
\t            <div class=\"infoLayer\">
\t                <ul>
\t                    <li>
\t                        <h2>
\t                            Ocean
\t                        </h2>
\t                    </li>
\t                    <li>
\t                        <p>
\t                            View Picture
\t                        </p>
\t                    </li>
\t                </ul>
\t            </div>
\t            
\t            <div class=\"projectInfo\">
\t                <strong>
\t                    Day, Month, Year:
\t                </strong> sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.
\t            </div>
\t        </li>

";
        // line 513
        echo "\t
\t       \t    </ul>
\t</section>
";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Default:fotos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  362 => 513,  332 => 229,  328 => 228,  298 => 203,  294 => 202,  263 => 176,  259 => 175,  228 => 149,  224 => 148,  193 => 122,  189 => 121,  158 => 95,  154 => 94,  123 => 68,  119 => 67,  88 => 41,  84 => 40,  53 => 14,  49 => 13,  42 => 8,  39 => 7,  32 => 4,  29 => 3,);
    }
}
