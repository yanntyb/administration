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

/* users/single.html.twig */
class __TwigTemplate_135e450d03f8825ea9646c0a436ca9e3 extends Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "users/single.html.twig", 1);
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
                    <p>Mot de passe : ";
        // line 28
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 28, $this->source); })()), "getPass", [], "method", false, false, false, 28), "html", null, true);
        echo "</p>
                    <div class=\"container\">
                        <span class=\"card-title center\">Articles :</span>
                        <table>
                            <thead>
                            <th>ID</th>
                            <th>Title</th>
                            </thead>
                            <tbody>
                            ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 37, $this->source); })()), "getArticles", [], "method", false, false, false, 37));
        foreach ($context['_seq'] as $context["_key"] => $context["article"]) {
            // line 38
            echo "                                <tr>
                                    <td><a href=\"/article/info/";
            // line 39
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 39), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getId", [], "method", false, false, false, 39), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["article"], "getTitle", [], "method", false, false, false, 40), "html", null, true);
            echo "</td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['article'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "                            </tbody>
                        </table>
                    </div>

                </div>
                <div class=\"card-action center\">
                    <nav>
                        <div class=\"nav-wrapper indigo lighten-3 orange-text text-darken-4\">
                            <ul>
                                <li>
                                    <a href=\"/user/delete/";
        // line 53
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 53, $this->source); })()), "getId", [], "method", false, false, false, 53), "html", null, true);
        echo "\">Delete</a>
                                </li>
                                <li>
                                    <a href=\"/user/edit/";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 56, $this->source); })()), "getId", [], "method", false, false, false, 56), "html", null, true);
        echo "\">Edit</a>
                                </li>
                                <li class=\"active\">
                                    <a href=\"/user/info/";
        // line 59
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 59, $this->source); })()), "getId", [], "method", false, false, false, 59), "html", null, true);
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
        return "users/single.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 59,  139 => 56,  133 => 53,  121 => 43,  112 => 40,  106 => 39,  103 => 38,  99 => 37,  87 => 28,  83 => 27,  77 => 23,  73 => 22,  51 => 3,  47 => 2,  36 => 1,);
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
                    <p>Mot de passe : {{ user.getPass() }}</p>
                    <div class=\"container\">
                        <span class=\"card-title center\">Articles :</span>
                        <table>
                            <thead>
                            <th>ID</th>
                            <th>Title</th>
                            </thead>
                            <tbody>
                            {% for article in user.getArticles() %}
                                <tr>
                                    <td><a href=\"/article/info/{{ article.getId() }}\">{{ article.getId() }}</a></td>
                                    <td>{{ article.getTitle() }}</td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>

                </div>
                <div class=\"card-action center\">
                    <nav>
                        <div class=\"nav-wrapper indigo lighten-3 orange-text text-darken-4\">
                            <ul>
                                <li>
                                    <a href=\"/user/delete/{{ user.getId() }}\">Delete</a>
                                </li>
                                <li>
                                    <a href=\"/user/edit/{{ user.getId() }}\">Edit</a>
                                </li>
                                <li class=\"active\">
                                    <a href=\"/user/info/{{ user.getId() }}\">Info</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
{% endblock %}", "users/single.html.twig", "C:\\Users\\yannt\\Desktop\\+4\\Module 2\\Développer la partie back-end d'une application Web\\PHP - Utiliser un moteur de templates\\administration\\templates\\users\\single.html.twig");
    }
}
