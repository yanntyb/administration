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

/* users/users.html.twig */
class __TwigTemplate_7cadb461f980930cd3435f00c6945b85 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "users/users.html.twig", 1);
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
                <li class=\"active\"><a href=\"/\">Info</a></li>
                <li><a href=\"/user/populate\">Seed</a></li>
            </ul>
        </div>
    </nav>
";
    }

    // line 20
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 21
        echo "    <div class=\"container z-depth-2\">
        <table class=\"highlight\">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Articles</th>
            </thead>
            <tbody>
            ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) || array_key_exists("users", $context) ? $context["users"] : (function () { throw new RuntimeError('Variable "users" does not exist.', 29, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 30
            echo "                <tr>
                    <td><a href=\"/user/info/";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getId", [], "method", false, false, false, 31), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getId", [], "method", false, false, false, 31), "html", null, true);
            echo "</a></td>
                    <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_split_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getName", [], "method", false, false, false, 32), " "), 0, [], "array", false, false, false, 32), "html", null, true);
            echo "</td>
                    <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_length_filter($this->env, twig_get_attribute($this->env, $this->source, $context["user"], "getArticles", [], "method", false, false, false, 33)), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "users/users.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 36,  102 => 33,  98 => 32,  92 => 31,  89 => 30,  85 => 29,  75 => 21,  71 => 20,  51 => 3,  47 => 2,  36 => 1,);
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
                <li class=\"active\"><a href=\"/\">Info</a></li>
                <li><a href=\"/user/populate\">Seed</a></li>
            </ul>
        </div>
    </nav>
{% endblock %}
{% block body %}
    <div class=\"container z-depth-2\">
        <table class=\"highlight\">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Articles</th>
            </thead>
            <tbody>
            {% for user in users %}
                <tr>
                    <td><a href=\"/user/info/{{ user.getId() }}\">{{ user.getId() }}</a></td>
                    <td>{{ user.getName()| split(\" \")[0]  }}</td>
                    <td>{{ user.getArticles()|length }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endblock %}", "users/users.html.twig", "C:\\Users\\yannt\\Desktop\\+4\\Module 2\\Développer la partie back-end d'une application Web\\PHP - Utiliser un moteur de templates\\administration\\templates\\users\\users.html.twig");
    }
}
