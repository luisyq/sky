<?php

/* SkyUsuarioBundle:usuario:home.html.twig */
class __TwigTemplate_b3132e4aef5f48e4606304f0953276cb extends Twig_Template
{
    protected $parent;

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

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("SkyUsuarioBundle:usuario:layout.html.twig");
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
        echo "Home";
    }

    // line 3
    public function block_izquierda($context, array $blocks = array())
    {
        // line 4
        echo "<div>
    <p><img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'usuario'), "foto", array(), "any", false), "html");
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'usuario'), "nombre", array(), "any", false), "html");
        echo "\"></p>
    <p>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'usuario'), "nick", array(), "any", false), "html");
        echo "</p>
    <p>";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'usuario'), "email", array(), "any", false), "html");
        echo "</p>
    <p>Mis Grupos de Amigos</p>
    <p>Usuarios Conectados</p>
</div>
";
    }

    // line 12
    public function block_centro($context, array $blocks = array())
    {
        // line 13
        echo "<p>Ultimas Noticias</p>
<div id=\"comentar\">
    <form action=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("home"), "html");
        echo "\" method=\"post\">
    ";
        // line 16
        echo $this->env->getExtension('form')->renderRest($this->getContext($context, 'form'));
        echo "
            <p><input type=\"submit\" class=\"inicio\" value=\"Comentar\" /></p><br>
        </form>
    </div>
    ";
        // line 20
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'comentarios'));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context['_key'] => $context['comentario']) {
            // line 21
            echo "<div class=\"comentarios\"><span><img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'comentario'), "foto", array(), "any", false), "html");
            echo "\" width=\"50\" height=\"50\"></span>
        <span><a href=\"#\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'comentario'), "nick", array(), "any", false), "html");
            echo "</a></span><span>";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'comentario'), "contenido", array(), "any", false), "html");
            echo "</span>
    </div>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 25
            echo "    <p>Aun no hay comentarios recientes</p>      
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comentario'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    // line 28
    public function block_derecha($context, array $blocks = array())
    {
        // line 29
        echo "    <p>Tal vez conozcas estas personas</p>
    <div>
        ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'contactos'));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context['_key'] => $context['contacto']) {
            // line 32
            echo "            <img src=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'contacto'), "foto", array(), "any", false), "html");
            echo "\" height=\"100\" width=\"100\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'contacto'), "nombre", array(), "any", false), "html");
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'contacto'), "nombre", array(), "any", false), "html");
            echo "\">            
            <p>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'contacto'), "nombre", array(), "any", false), "html");
            echo "</p>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 35
            echo "            <p>Aun no existen contactos</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contacto'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 37
        echo "        </div>
";
    }

    public function getTemplateName()
    {
        return "SkyUsuarioBundle:usuario:home.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
