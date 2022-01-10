<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* articles/single.html.twig */
class __TwigTemplate_54d4e4feb148f4835a53fdf66b0f7e87 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "articles/single.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        echo "    <nav>
        <div class=\"nav-wrapper\">
            <ul class=\"right\">
                <li  class=\"active\"><a href=\"/article\">Gestion Article</a></li>
                <li><a href=\"/\">Gestion Utilisateurs</a></li>
            </ul>
        </div>
    </nav>
    <nav>
        <div class=\"nav-wrapper\">
            <ul class=\"left\">
                <li class=\"active\">
                    <a href=\"/article\">Info</a>
                </li>
                <li><a href=\"/article/populate\">Seed</a></li>
            </ul>
        </div>
    </nav>
";
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        echo "    <div class=\"container row\">
        <div class=\"col s12 m12\">
            <div class=\"card blue-grey darken-1\">
                <div class=\"card-content white-text\">
                    <span class=\"card-title center\">";
        // line 27
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 27, $this->source); })()), "getTitle", [], "method", false, false, false, 27), "html", null, true);
        echo "</span>
                    <p>";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 28, $this->source); })()), "getContent", [], "method", false, false, false, 28), "html", null, true);
        echo "</p>
                    <a class=\"right\" href=\"/user/info/";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 29, $this->source); })()), "getUser", [], "method", false, false, false, 29), "getId", [], "method", false, false, false, 29), "html", null, true);
        echo "\">Written by ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 29, $this->source); })()), "getUser", [], "method", false, false, false, 29), "getName", [], "method", false, false, false, 29), "html", null, true);
        echo "</a>
                </div>
                <div class=\"card-action center\">
                    <nav>
                        <div class=\"nav-wrapper indigo lighten-3 orange-text text-darken-4\">
                            <ul>
                                <li>
                                    <a href=\"/article/delete/";
        // line 36
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 36, $this->source); })()), "getId", [], "method", false, false, false, 36), "html", null, true);
        echo "\">Delete</a>
                                </li>
                                <li>
                                    <a class=\"active\" href=\"/article/edit/";
        // line 39
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["article"]) || array_key_exists("article", $context) ? $context["article"] : (function () { throw new RuntimeError('Variable "article" does not exist.', 39, $this->source); })()), "getId", [], "method", false, false, false, 39), "html", null, true);
        echo "\">Edit</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "articles/single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 39,  103 => 36,  91 => 29,  87 => 28,  83 => 27,  77 => 23,  73 => 22,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block header %}
    <nav>
        <div class=\"nav-wrapper\">
            <ul class=\"right\">
                <li  class=\"active\"><a href=\"/article\">Gestion Article</a></li>
                <li><a href=\"/\">Gestion Utilisateurs</a></li>
            </ul>
        </div>
    </nav>
    <nav>
        <div class=\"nav-wrapper\">
            <ul class=\"left\">
                <li class=\"active\">
                    <a href=\"/article\">Info</a>
                </li>
                <li><a href=\"/article/populate\">Seed</a></li>
            </ul>
        </div>
    </nav>
{% endblock %}
{% block body %}
    <div class=\"container row\">
        <div class=\"col s12 m12\">
            <div class=\"card blue-grey darken-1\">
                <div class=\"card-content white-text\">
                    <span class=\"card-title center\">{{ article.getTitle() }}</span>
                    <p>{{ article.getContent() }}</p>
                    <a class=\"right\" href=\"/user/info/{{ article.getUser().getId() }}\">Written by {{ article.getUser().getName() }}</a>
                </div>
                <div class=\"card-action center\">
                    <nav>
                        <div class=\"nav-wrapper indigo lighten-3 orange-text text-darken-4\">
                            <ul>
                                <li>
                                    <a href=\"/article/delete/{{ article.getId() }}\">Delete</a>
                                </li>
                                <li>
                                    <a class=\"active\" href=\"/article/edit/{{ article.getId() }}\">Edit</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "articles/single.html.twig", "C:\\Users\\yannt\\Desktop\\+4\\Module 2\\Développer la partie back-end d'une application Web\\PHP - Utiliser un moteur de templates\\administration\\templates\\articles\\single.html.twig");
    }
}
