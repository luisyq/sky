<?php

/* SkyUsuarioBundle:estatica:layout.html.twig */
class __TwigTemplate_7ec906354198a4bcc66ecaf8903f7df2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'cabecera' => array($this, 'block_cabecera'),
            'logo' => array($this, 'block_logo'),
            'titulo' => array($this, 'block_titulo'),
            'cuerpo' => array($this, 'block_cuerpo'),
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
            <form action=\"\" method=\"get\">
                <div class=\"fondo\">";
        // line 15
        $this->displayBlock('logo', $context, $blocks);
        echo "</div>
                <div class=\"fondo2\">
                    <label>
                        <input name=\"textfield\" placeholder=\"Buscar...\" type=\"search\" id=\"textfield\" size=\"30\" maxlength=\"30\" class=\"buscador\"/>
                    </label>
                </div>
            </form>
        </header>
        <div class=\"container\">
        ";
        // line 24
        $this->displayBlock('titulo', $context, $blocks);
        // line 25
        echo "        ";
        $this->displayBlock('cuerpo', $context, $blocks);
        // line 26
        echo "            </div>
            <footer class=\"fot\">
                <span class=\"abajoi\"><a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("contactanos"), "html");
        echo "\">Contactanos</a></span>
                <span class=\"abajoi\"><a href=\"";
        // line 29
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("plataforma"), "html");
        echo "\">Plataforma de Desarrollo</a></span>
                <span class=\"abajoi\"><a href=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("mejorar"), "html");
        echo "\">Mejorar mi uso</a></span>
                <span class=\"abajoi\"><a href=\"#\">Quienes Somos</a></span>
                <span class=\"abajod\"><a href=\"http://facebook.com\">Facebook</a></span>
                <span class=\"abajod\"><a href=\"http://twitter.com\">Twitter</a></span>
                <span class=\"abajod\"><a href=\"http://plus.google.com\">Google+</a></span>
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

    // line 15
    public function block_logo($context, array $blocks = array())
    {
    }

    // line 24
    public function block_titulo($context, array $blocks = array())
    {
    }

    // line 25
    public function block_cuerpo($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "SkyUsuarioBundle:estatica:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
