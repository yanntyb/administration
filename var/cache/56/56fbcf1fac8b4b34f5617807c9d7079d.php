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

/* base.html.twig */
class __TwigTemplate_d3c31033a62e8fab1ffb1dc87938a81d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'header' => [$this, 'block_header'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>";
        // line 8
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    <script src=\"/build/js/main.js\"></script>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
</head>
<body >
    <div class=\"nav-wrapper\">
        ";
        // line 14
        $this->displayBlock('header', $context, $blocks);
        // line 15
        echo "    </div>
    ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 17
        echo "</body>
</html>";
    }

    // line 8
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 14
    public function block_header($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  82 => 16,  76 => 14,  70 => 8,  65 => 17,  63 => 16,  60 => 15,  58 => 14,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!doctype html>
<html lang=\"fr\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\"
          content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"ie=edge\">
    <title>{% block title %}{% endblock %}</title>
    <script src=\"/build/js/main.js\"></script>
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\">
</head>
<body >
    <div class=\"nav-wrapper\">
        {% block header %}{% endblock %}
    </div>
    {% block body %}{% endblock %}
</body>
</html>", "base.html.twig", "C:\\Users\\yannt\\Desktop\\+4\\Module 2\\Développer la partie back-end d'une application Web\\PHP - Utiliser un moteur de templates\\administration\\templates\\base.html.twig");
    }
}
