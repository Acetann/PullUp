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

/* Article/add.html.twig */
class __TwigTemplate_1794b66463b13af52b9bd5c9e364afacacca68c7ba2a2b16eb2b59af61e25ab4 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "/Article/Accueil.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("/Article/Accueil.html.twig", "Article/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Ajout d'un article ";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <nav>
        <div class=\"menu\">
            <ul>
                <li>
                    <a href=\"/User/";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["session"] ?? null), "login", [], "any", false, false, false, 10), "id", [], "any", false, false, false, 10), "html", null, true);
        echo "\"><i class=\"fa fa-user-circle-o\" aria-hidden=\"true\"></i></a>
                </li>


                <li>

                    <img src=\"/uploads/images/logo.png\">

                </li>
                <li>
                    <a href=\"/chat\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i></a>
                </li>
            </ul>
        </div>
    </nav>


    <div class=\"wrapper\">

                <div class=\"profile-card-inf\">
                    <div class=\"profile-card-inf__item\">
                        <div class=\"profile-card-inf__title\">Aucune personne à proximité</div>

                    </div>
                </div>



";
    }

    public function getTemplateName()
    {
        return "Article/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 10,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"/Article/Accueil.html.twig\" %}
{% block title %}{{ parent() }} - Ajout d'un article {% endblock %}

{% block body %}

    <nav>
        <div class=\"menu\">
            <ul>
                <li>
                    <a href=\"/User/{{ session.login.id }}\"><i class=\"fa fa-user-circle-o\" aria-hidden=\"true\"></i></a>
                </li>


                <li>

                    <img src=\"/uploads/images/logo.png\">

                </li>
                <li>
                    <a href=\"/chat\"><i class=\"fa fa-envelope\" aria-hidden=\"true\"></i></a>
                </li>
            </ul>
        </div>
    </nav>


    <div class=\"wrapper\">

                <div class=\"profile-card-inf\">
                    <div class=\"profile-card-inf__item\">
                        <div class=\"profile-card-inf__title\">Aucune personne à proximité</div>

                    </div>
                </div>



{% endblock %}", "Article/add.html.twig", "C:\\TP\\templates\\Article\\add.html.twig");
    }
}
