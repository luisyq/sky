<?php

/* SkyUsuarioBundle:estatica:index.html.twig */
class __TwigTemplate_fbc12418f83cfb0e5db90a3a413f1d7d extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'cabecera' => array($this, 'block_cabecera'),
            'titulo' => array($this, 'block_titulo'),
            'cuerpo' => array($this, 'block_cuerpo'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("SkyUsuarioBundle:estatica:layout.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_cabecera($context, array $blocks = array())
    {
        echo "sky";
    }

    // line 3
    public function block_titulo($context, array $blocks = array())
    {
        // line 4
        echo "<div id=\"logo\"><img alt=\"Sky\" title=\"Sky\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/skyusuario/img/skyXL.png"), "html");
        echo "\"></div>
    <form action=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("check_path"), "html");
        echo "\" method=\"post\" id=\"login\">
        ";
        // line 7
        echo "        <p>Ingresa a tu cuenta</p><br>
        <p><input name=\"_username\" type=\"text\" id=\"usuario\" size=\"35\" maxlength=\"35\" placeholder=\"email\" class=\"loginbox\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->getContext($context, 'last_name'), "html");
        echo "\"></p><br>
        <p><input name=\"_password\" type=\"password\" id=\"password\" size=\"35\" maxlength=\"35\" placeholder=\"password\" class=\"loginbox\"></p>
        <p><br><input type=\"submit\" class=\"inicio\" value=\"Iniciar Sesión\"/></p><br>
        <p><fb:login-button length=\"long\" onlogin=\"location.href='<? echo \$_SERVER['REQUEST_URI'];?>'\"></fb:login-button>
    <script type=\"text/javascript\" src=\"HTTP://static.ak.connect.facebook.com/js/api_lib/v0.4/FeatureLoader.js.php\"></script>
    <script type=\"text/javascript\">
    FB.init(\"123471964438506\",\"checkpath\");
    </script></p>
        <br>
        <p><br><a class=\"inicio\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registro"), "html");
        echo "\">No tienes una cuenta aún</a></p>
    </form>
";
    }

    // line 20
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 21
        echo "<div id=\"contenido\">
    <p>Comparte tu musica, tus videos, tus fotos, tus comentarios con tus mejores amigos</p>
    <p>Registrate y podras interactuar de una nueva mejor forma y más rápida</p>
    <p>Descargar app para iPhone iPad</p>
    <p>Descargar app para Android</p>
    <p>Descargar app para Blackberry</p>
    <p>Descargar app para Windows Phone</p>
    <p>Descargar app para Chrome</p>
    <p>Descargar app para Firefox</p>
    <p>Descargar app para Symbian</p>
</div>
";
    }

    public function getTemplateName()
    {
        return "SkyUsuarioBundle:estatica:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
