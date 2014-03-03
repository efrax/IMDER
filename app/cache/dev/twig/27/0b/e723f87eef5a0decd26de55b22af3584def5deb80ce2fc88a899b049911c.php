<?php

/* ProyectoPrincipalBundle:Default:inicio.html.twig */
class __TwigTemplate_270be723f87eef5a0decd26de55b22af3584def5deb80ce2fc88a899b049911c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("ProyectoPrincipalBundle:Default:layout_portada.html.twig");

        $this->blocks = array(
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
        return "ProyectoPrincipalBundle:Default:layout_portada.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_menu($context, array $blocks = array())
    {
        // line 4
        echo "\t\t";
        $this->displayParentBlock("menu", $context, $blocks);
        echo "
\t";
    }

    // line 7
    public function block_slider($context, array $blocks = array())
    {
        // line 8
        echo "\t    <div class=\"shell\">
\t        <ul>
\t            <!-- Slide -->
\t            <li>
\t                <div class=\"image\">
\t                    <img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/volf2_mod.png"), "html", null, true);
        echo "\" alt=\"Symfony!\" />
\t                </div>
\t                
\t                <div class=\"data\">
\t                    <h2 class=\"slider-h\">Instituto Municipal de Deporte y Recreación de Cajigal.</h2>
\t                    
\t                    <p>IMDER</p>
\t                    
\t                    ";
        // line 22
        echo "\t                </div>
\t            </li>
\t            <!-- /Slide -->
\t        </ul>
\t    </div>
\t";
    }

    // line 29
    public function block_texto($context, array $blocks = array())
    {
        // line 30
        echo "\t    <p><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
\t        <h3>IMDER</h3>
\t        <br>
\t        El instituto municipal del deporte y recreación IMDER fue creado el 19 de agosto de 2002 en la municipalidad de Cajigal por el alcalde Algencio Monasterios, y los concejales Getulio Méndez, Víctor Contreras, Enrique Subero, Osvaldo Córdova,  María Felce, José Ramón Díaz, el sindico procurador Carlos Rodríguez y la secretaria municipal Luisa Marcano, con la finalidad de promocionar, fomentar y dirigir la actividad deportiva Municipal.
\t\t\tEl IMDER se fundo con el objeto de proporcionar la intervención del Municipio en la Promoción y desarrollo del Deporte, así como en la construcción, dotación, mantenimiento y protección de la infraestructura deportiva en la jurisdicción Municipal; coadyuvando a la formación integral de las personas en lo físico, intelectual, moral y social. 
\t\t\tEl IMDER Procura fomentar la recreación y la sana inversión del tiempo libre; educar para la comprensión y respeto recíproco; formar el sentido de responsabilidad y amistad; así como estimular el mayor espíritu de superación y convivencia social, la competitividad, la tenacidad, el autoestima y el bienestar de la población..</p>
\t    
\t    ";
        // line 38
        echo "\t    <div class=\"cl\">&nbsp;</div>
\t";
    }

    // line 41
    public function block_barra1($context, array $blocks = array())
    {
        // line 42
        echo "\t\t<div id=\"latest-projects\">
\t\t    <h2 class=\"eye\">
\t\t        <span>Eventos destacatos</span>
\t\t        <a href=\"#\" class=\"see-all\">VER TODOS</a>
\t\t    </h2>
\t\t    
\t\t    <div class=\"latest-projects-list\">
\t\t        <ul>
\t\t            <!-- Project -->
\t\t            <li>
\t\t                <div class=\"image\">
\t\t                    <a href=\"images/05.jpg\">
\t\t                    <img src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/05.jpg"), "html", null, true);
        echo "\" alt=\"Symfony!\" /></a>

\t\t                </div>

\t\t                <div class=\"entry\">
\t\t                    <h3>Encuentro juvenil</h3>
\t\t                    
\t\t                    <p>Impulsaldo el Deporte en el Municipio,se llevan a cabo diferntes encuentros juveniles donde compiten en en una variedad de disciplinas</p>
\t\t                   <!-- 
\t\t                    <a href=\"#\" class=\"button rarr\">SEE THE PROJECT</a>-->
\t\t                </div>
\t\t            </li>
\t\t            <!-- /Project -->
\t\t            
\t\t            <!-- Project -->
\t\t            <li>
\t\t                <div class=\"image\">
\t\t                    <a href=\"mages/lanc.jpg\">
\t\t                    <img src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/lanc.jpg"), "html", null, true);
        echo "\" alt=\"Symfony!\" /></a>
\t\t                </div>

\t\t                <div class=\"entry\">
\t\t                    <h3>Carreras en lanchas</h3>
\t\t                    
\t\t                    <p>Esta semana santa se celebraron muchos partidos y carreras entre ellas, la carrera en lanchas. Pueden observar una imagen, a uno de los competidores</p>
\t\t                    
\t\t                    <!--<a href=\"#\" class=\"button rarr\">SEE THE PROJECT</a>-->
\t\t                </div>
\t\t            </li>
\t\t            <!-- /Project -->
\t\t            
\t\t            <!-- Project -->
\t\t            <li class=\"last\">
\t\t                <div class=\"image\">
\t\t                    <a href=\"images/fuerza.jpg\">
\t\t                    <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/fuerza.jpg"), "html", null, true);
        echo "\" alt=\"Symfony!\" /></a>
\t\t                </div>

\t\t                <div class=\"entry\">
\t\t                    <h3>Jugadas destacadas</h3>
\t\t                    
\t\t                    <p>Las jugadasmas destacadas que se dieron durante el partido de Voleibol. llevado a cabo en el golfo durante las celebraciones de la semana Mayor en muestro municipio</p>
\t\t                    
\t\t                    <!--<a href=\"#\" class=\"button rarr\">SEE THE PROJECT</a>-->
\t\t                </div>
\t\t            </li>
\t\t            <!-- /Project -->
\t\t        </ul>
\t\t        <div class=\"cl\">&nbsp;</div>
\t\t    </div>
\t\t</div>
\t";
    }

    // line 107
    public function block_barra2($context, array $blocks = array())
    {
        // line 108
        echo "    \t";
        // line 184
        echo " 
\t";
    }

    // line 187
    public function block_sidebar($context, array $blocks = array())
    {
        // line 188
        echo "\t";
        // line 227
        echo "
\t";
    }

    // line 231
    public function block_footer($context, array $blocks = array())
    {
        // line 232
        echo "        ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
\t";
    }

    public function getTemplateName()
    {
        return "ProyectoPrincipalBundle:Default:inicio.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 232,  190 => 231,  185 => 227,  183 => 188,  180 => 187,  175 => 184,  173 => 108,  170 => 107,  149 => 89,  129 => 72,  108 => 54,  94 => 42,  91 => 41,  86 => 38,  77 => 30,  74 => 29,  65 => 22,  54 => 13,  47 => 8,  44 => 7,  37 => 4,  34 => 3,);
    }
}
