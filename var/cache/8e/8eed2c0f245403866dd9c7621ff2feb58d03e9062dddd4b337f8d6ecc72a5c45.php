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

/* Categorie/show.html.twig */
class __TwigTemplate_c2363279c6b87a50a43361a1ade33ea91b20094880923978ca14f43dcd026e35 extends Template
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
        return "index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("index.html.twig", "Categorie/show.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        echo " Liste des categories - ";
        $this->displayParentBlock("title", $context, $blocks);
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div class=\"container-fluid mt-2\">

        <h2 class=\"display-3\">Article n°";
        // line 7
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categorie"] ?? null), "Id", [], "any", false, false, false, 7), "html", null, true);
        echo "</h2>
        <hr class=\"my-4\">
        <div class=\"row\">
            <div class=\"card col-lg-4 ml\" style=\"width: 15rem;\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categorie"] ?? null), "Nom", [], "any", false, false, false, 12), "html", null, true);
        echo "</h5>
                    <p class=\"card-text\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["categorie"] ?? null), "Description", [], "any", false, false, false, 13), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "Categorie/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  75 => 13,  71 => 12,  63 => 7,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %} Liste des categories - {{ parent() }}{% endblock %}

{% block body %}
    <div class=\"container-fluid mt-2\">

        <h2 class=\"display-3\">Article n°{{ categorie.Id }}</h2>
        <hr class=\"my-4\">
        <div class=\"row\">
            <div class=\"card col-lg-4 ml\" style=\"width: 15rem;\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">{{ categorie.Nom }}</h5>
                    <p class=\"card-text\">{{ categorie.Description }}</p>
                </div>
            </div>
        </div>
    </div>


{% endblock %}", "Categorie/show.html.twig", "C:\\TP\\templates\\Categorie\\show.html.twig");
    }
}
