<?php

/* SkyUsuarioBundle:estatica:registro.html.twig */
class __TwigTemplate_de90f50dec1518cb42ca34284504a261 extends Twig_Template
{
    protected $parent;

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

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("SkyUsuarioBundle:estatica:index.html.twig");
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
        echo "Ingresa tus datos";
    }

    // line 3
    public function block_logo($context, array $blocks = array())
    {
        // line 4
        echo "<a href=\"home.php\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/skyusuario/img/sky.png"), "html");
        echo "\" alt=\"sky\"></a>
";
    }

    // line 6
    public function block_titulo($context, array $blocks = array())
    {
        // line 7
        echo "<p>Unete a esta nueva red de contactos</p>
";
    }

    // line 9
    public function block_cuerpo($context, array $blocks = array())
    {
        // line 10
        echo "<h1><p>Registro de Nuevos Usuarios</p></h1>
<form action=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("registro"), "html");
        echo "\" method=\"post\">
";
        // line 12
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, 'form'));
        echo "
 <p><br><input type=\"submit\" class=\"inicio\" value=\"Resgistrarme\" /></p><br>
 </fomr>
";
    }

    public function getTemplateName()
    {
        return "SkyUsuarioBundle:estatica:registro.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
