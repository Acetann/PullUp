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

/* Article/update.html.twig */
class __TwigTemplate_f35c3193b6e5e51880d94b9cb1d6c0fd5dddc8c501ed910cc629b0d2ed55163c extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "Article/update.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Mise à jour d'un article ";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "<div class=\"container-fluid mt-2\">
    <h2 class=\"display-3\">Mise à jour d'un article</h2>
    <hr class=\"my-4\">
    <div class=\"row\">
        <div class=\"card col-lg-4 ml\" style=\"width: 15rem;\">

            ";
        // line 11
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageFileName", [], "any", false, false, false, 11), "") && call_user_func_array($this->env->getFunction('file_exist')->getCallable(), [((("./uploads/images/" . twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageRepository", [], "any", false, false, false, 11)) . "/") . twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageFileName", [], "any", false, false, false, 11))]))) {
            // line 12
            echo "                <img class='card-img-top' alt='Article' src='/uploads/images/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageRepository", [], "any", false, false, false, 12), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageFileName", [], "any", false, false, false, 12), "html", null, true);
            echo "'/>
            ";
        } else {
            // line 14
            echo "                <h6 class=\"display-4\">Pas d'image</h6>
            ";
        }
        // line 16
        echo "
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
        // line 18
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Titre", [], "any", false, false, false, 18), "html", null, true);
        echo "</h5>
                <p class=\"card-text\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Description", [], "any", false, false, false, 19), "html", null, true);
        echo "</p>
            </div>
        </div>


        <form name=\"updateArticle\" method=\"post\" class=\"col-lg-8\" enctype=\"multipart/form-data\">

            <div class=\"form-group row\">
                <label for=\"Titre\" class=\"col-sm-2 col-form-label\">Titre de l'article</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"Titre\" class=\"form-control form-control-lg\" value=\"";
        // line 29
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Titre", [], "any", false, false, false, 29), "html", null, true);
        echo "\" >
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"Description\" class=\"col-sm-2 col-form-label\">Description</label>
                <div class=\"col-sm-10\">
                    <textarea name=\"Description\" class=\"form-control\" rows=\"7\">";
        // line 36
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Description", [], "any", false, false, false, 36), "html", null, true));
        echo "</textarea>
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"DateAjout\" class=\"col-sm-2 col-form-label\">Date</label>
                <div class=\"col-sm-10\">
                    <input type=\"date\" name=\"DateAjout\" class=\"form-control disabled\" value=\"";
        // line 43
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "DateAjout", [], "any", false, false, false, 43), "html", null, true);
        echo "\">
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"Auteur\" class=\"col-sm-2 col-form-label\">Auteur</label>
                <div class=\"col-sm-10\">
                    <select name=\"Auteur\" class=\"form-control\">
                        ";
        // line 51
        $context["Auteurs"] = [0 => "Brice", 1 => "Bruno", 2 => "Fabien", 3 => "Marion", 4 => "Jean-Pierre", 5 => "Benoit", 6 => "Emmanuel", 7 => "Sylvie"];
        // line 52
        echo "                        ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["Auteurs"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Auteur"]) {
            // line 53
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, $context["Auteur"], "html", null, true);
            echo "\" ";
            if (0 === twig_compare($context["Auteur"], twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Auteur", [], "any", false, false, false, 53))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, $context["Auteur"], "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Auteur'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                    </select>
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"image\" class=\"col-sm-2 col-form-label\">Image de l'article</label>
                <div class=\"col-sm-10\">
                    <div class=\"custom-file\">
                        <input type=\"file\" class=\"form-control-file custom-file-input\" name=\"image\" id=\"inputFile\">
                        <input type=\"file\" class=\"custom-file-input\" id=\"inputGroupFile01\">
                        <label class=\"custom-file-label\" for=\"inputGroupFile01\"></label>
                    </div>
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"Categorie\" class=\"col-sm-2 col-form-label\">Categorie</label>
                <div class=\"col-sm-10\">
                    <select name=\"Categorie\" class=\"form-control\">
                        ";
        // line 74
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listCat"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["Categorie"]) {
            // line 75
            echo "                            <option value=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Categorie"], "Id", [], "any", false, false, false, 75), "html", null, true);
            echo "\" ";
            if (0 === twig_compare(twig_get_attribute($this->env, $this->source, $context["Categorie"], "Id", [], "any", false, false, false, 75), twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Categorie", [], "any", false, false, false, 75))) {
                echo "selected";
            }
            echo ">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["Categorie"], "Nom", [], "any", false, false, false, 75), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Categorie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 77
        echo "                    </select>
                </div>
            </div>

            <input type=\"hidden\" name=\"imageAncienne\"
            value=\"";
        // line 82
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageRepository", [], "any", false, false, false, 82), "html", null, true);
        echo "/";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageFileName", [], "any", false, false, false, 82), "html", null, true);
        echo "\"
            >

            <input type=\"submit\" class=\"btn btn-primary my-1\">
        </form>
    </div>


</div>


";
    }

    public function getTemplateName()
    {
        return "Article/update.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  202 => 82,  195 => 77,  180 => 75,  176 => 74,  155 => 55,  140 => 53,  135 => 52,  133 => 51,  122 => 43,  112 => 36,  102 => 29,  89 => 19,  85 => 18,  81 => 16,  77 => 14,  69 => 12,  67 => 11,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %}{{ parent() }} - Mise à jour d'un article {% endblock %}

{% block body %}
<div class=\"container-fluid mt-2\">
    <h2 class=\"display-3\">Mise à jour d'un article</h2>
    <hr class=\"my-4\">
    <div class=\"row\">
        <div class=\"card col-lg-4 ml\" style=\"width: 15rem;\">

            {% if article.ImageFileName != '' and    file_exist('./uploads/images/'~article.ImageRepository~'/'~article.ImageFileName) %}
                <img class='card-img-top' alt='Article' src='/uploads/images/{{ article.ImageRepository }}/{{article.ImageFileName}}'/>
            {% else %}
                <h6 class=\"display-4\">Pas d'image</h6>
            {% endif %}

            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ article.Titre }}</h5>
                <p class=\"card-text\">{{ article.Description }}</p>
            </div>
        </div>


        <form name=\"updateArticle\" method=\"post\" class=\"col-lg-8\" enctype=\"multipart/form-data\">

            <div class=\"form-group row\">
                <label for=\"Titre\" class=\"col-sm-2 col-form-label\">Titre de l'article</label>
                <div class=\"col-sm-10\">
                    <input type=\"text\" name=\"Titre\" class=\"form-control form-control-lg\" value=\"{{ article.Titre }}\" >
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"Description\" class=\"col-sm-2 col-form-label\">Description</label>
                <div class=\"col-sm-10\">
                    <textarea name=\"Description\" class=\"form-control\" rows=\"7\">{{ article.Description | nl2br }}</textarea>
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"DateAjout\" class=\"col-sm-2 col-form-label\">Date</label>
                <div class=\"col-sm-10\">
                    <input type=\"date\" name=\"DateAjout\" class=\"form-control disabled\" value=\"{{ article.DateAjout }}\">
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"Auteur\" class=\"col-sm-2 col-form-label\">Auteur</label>
                <div class=\"col-sm-10\">
                    <select name=\"Auteur\" class=\"form-control\">
                        {% set Auteurs = ['Brice','Bruno','Fabien','Marion','Jean-Pierre','Benoit','Emmanuel','Sylvie'] %}
                        {% for Auteur in Auteurs %}
                            <option value=\"{{Auteur}}\" {% if Auteur == article.Auteur %}selected{% endif %}>{{ Auteur }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"image\" class=\"col-sm-2 col-form-label\">Image de l'article</label>
                <div class=\"col-sm-10\">
                    <div class=\"custom-file\">
                        <input type=\"file\" class=\"form-control-file custom-file-input\" name=\"image\" id=\"inputFile\">
                        <input type=\"file\" class=\"custom-file-input\" id=\"inputGroupFile01\">
                        <label class=\"custom-file-label\" for=\"inputGroupFile01\"></label>
                    </div>
                </div>
            </div>

            <div class=\"form-group row\">
                <label for=\"Categorie\" class=\"col-sm-2 col-form-label\">Categorie</label>
                <div class=\"col-sm-10\">
                    <select name=\"Categorie\" class=\"form-control\">
                        {% for Categorie in listCat %}
                            <option value=\"{{Categorie.Id}}\" {% if Categorie.Id == article.Categorie %}selected{% endif %}>{{ Categorie.Nom }}</option>
                        {% endfor %}
                    </select>
                </div>
            </div>

            <input type=\"hidden\" name=\"imageAncienne\"
            value=\"{{ article.ImageRepository }}/{{ article.ImageFileName }}\"
            >

            <input type=\"submit\" class=\"btn btn-primary my-1\">
        </form>
    </div>


</div>


{% endblock %}", "Article/update.html.twig", "C:\\TP\\templates\\Article\\update.html.twig");
    }
}
