<?php

/* SkyUsuarioBundle:usuario:layout.html.twig */
class __TwigTemplate_b8d174567993139c712a265ce1e9c81a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'cabecera' => array($this, 'block_cabecera'),
            'izquierda' => array($this, 'block_izquierda'),
            'centro' => array($this, 'block_centro'),
            'derecha' => array($this, 'block_derecha'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        ob_start();
        // line 2
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>";
        // line 5
        $this->displayBlock('cabecera', $context, $blocks);
        echo "</title>
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/skyusuario/css/reset.css"), "html");
        echo "\" media=\"screen\" />
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/skyusuario/css/estilo.css"), "html");
        echo "\" media=\"screen\" />
        <script src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/skyusuario/js/jquery-1.5.2.min.js"), "html");
        echo "\" type=\"text/javascript\"></script>
        <script src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/skyusuario/js/animacion.js"), "html");
        echo "\" type=\"text/javascript\"></script>
    </head>
    <body>
        <header class=\"back-fondo\">
            <div class=\"fondo\"><a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home"), "html");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/skyusuario/img/sky.png"), "html");
        echo "\" alt=\"Sky\" title=\"Sky\"></a></div>
            <div class=\"fondo2\">
                <span class=\"buscador2\">
                    <input name=\"textfield\" placeholder=\"Buscar...\" type=\"search\" id=\"textfield\" size=\"40\" maxlength=\"40\" class=\"buscador\"/>
                </span>
                <span class=\"botones\">
                    <a href=\"#\" class=\"button left\">Perfil</a>
                    <a href=\"#\" class=\"button middle\">Grupos</a>
                    <a href=\"#\" class=\"button middle\">Agenda</a>
                    <a href=\"#\" class=\"button right\">Lugares</a>
                </span>
                <div id=\"menu\" class=\"opc\"><span id=\"usuario\">";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'usuario'), "Nick", array(), "any", false), "html");
        echo "</span>
                    <ul id=\"lista\">
                        <li>Mis Datos</li>
                        <li>Mi configuracion de Perfil</li>
                        <li>Reportar un Bug</li>
                        <li><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("logout"), "html");
        echo "\">Cerrar Sesion</a></li>
                    </ul>
                </div>
            </div>
        </header>
        <div class=\"container2\">
            <div class=\"modulo\">
               ";
        // line 37
        $this->displayBlock('izquierda', $context, $blocks);
        echo "</div>
                <div class=\"centro\">
       ";
        // line 39
        $this->displayBlock('centro', $context, $blocks);
        echo "</div>
                    <div class=\"modulo\">
        ";
        // line 41
        $this->displayBlock('derecha', $context, $blocks);
        echo "</div>
                    </div>
                    <footer class=\"fot\">
                        <span class=\"abajoi\"><a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mejorar"), "html");
        echo "\">Como mejorar mi uso</a></span>
                        <span class=\"abajoi\"><a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("plataforma"), "html");
        echo "\">Plataforma de Desarrollo</a></span>
                        <span class=\"abajoi\"><a href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contactanos"), "html");
        echo "\">Contactanos</a></span>
                    </footer>
                </body>
            </html>
";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 5
    public function block_cabecera($context, array $blocks = array())
    {
    }

    // line 37
    public function block_izquierda($context, array $blocks = array())
    {
    }

    // line 39
    public function block_centro($context, array $blocks = array())
    {
    }

    // line 41
    public function block_derecha($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SkyUsuarioBundle:usuario:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
