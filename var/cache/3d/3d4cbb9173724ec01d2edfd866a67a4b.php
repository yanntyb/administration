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

/* users/edit.html.twig */
class __TwigTemplate_3770aa66f0165f24e849df19f468307d extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "users/edit.html.twig", 1);
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
                <li><a href=\"/article\">Gestion Article</a></li>
                <li class=\"active\"><a href=\"/\">Gestion Utilisateurs</a></li>
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
        echo twig_escape_filter($this->env, twig_trim_filter(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 27, $this->source); })()), "getName", [], "method", false, false, false, 27)), "html", null, true);
        echo "</span>
                </div>
                <div class=\"card-action center\">
                    <nav>
                        <div class=\"nav-wrapper indigo lighten-3 orange-text text-darken-4\">
                            <ul>
                                <li>
                                    <a href=\"/user/delete/";
        // line 34
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 34, $this->source); })()), "getId", [], "method", false, false, false, 34), "html", null, true);
        echo "\">Delete</a>
                                </li>
                                <li class=\"active\">
                                    <a href=\"/user/edit/";
        // line 37
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "getId", [], "method", false, false, false, 37), "html", null, true);
        echo "\">Edit</a>
                                </li>
                                <li>
                                    <a href=\"/user/info/";
        // line 40
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 40, $this->source); })()), "getId", [], "method", false, false, false, 40), "html", null, true);
        echo "\">Info</a>
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
        return "users/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 40,  99 => 37,  93 => 34,  83 => 27,  77 => 23,  73 => 22,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block header %}
    <nav>
        <div class=\"nav-wrapper\">
            <ul class=\"right\">
                <li><a href=\"/article\">Gestion Article</a></li>
                <li class=\"active\"><a href=\"/\">Gestion Utilisateurs</a></li>
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
                    <span class=\"card-title center\">{{ user.getName()|trim }}</span>
                </div>
                <div class=\"card-action center\">
                    <nav>
                        <div class=\"nav-wrapper indigo lighten-3 orange-text text-darken-4\">
                            <ul>
                                <li>
                                    <a href=\"/user/delete/{{ user.getId() }}\">Delete</a>
                                </li>
                                <li class=\"active\">
                                    <a href=\"/user/edit/{{ user.getId() }}\">Edit</a>
                                </li>
                                <li>
                                    <a href=\"/user/info/{{ user.getId() }}\">Info</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "users/edit.html.twig", "C:\\Users\\yannt\\Desktop\\+4\\Module 2\\Développer la partie back-end d'une application Web\\PHP - Utiliser un moteur de templates\\administration\\templates\\users\\edit.html.twig");
    }
}
