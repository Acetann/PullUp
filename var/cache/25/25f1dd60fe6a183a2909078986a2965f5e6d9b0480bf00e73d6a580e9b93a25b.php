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

/* Article/view.html.twig */
class __TwigTemplate_467c0c50d55a72d34e1d2e695a249248ebe308801768a27dcf022a1d69c267b2 extends Template
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
        $this->parent = $this->loadTemplate("index.html.twig", "Article/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Mise à jour d'un article ";
    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 6
        echo "    <div class=\"container-fluid mt-2\">
        <h2 class=\"display-3\">Voir l'article</h2>
        <hr class=\"my-4\">
        <div class=\"row\">
            <div class=\"card col-lg-4 ml\" style=\"width: 15rem;\">

                ";
        // line 12
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageFileName", [], "any", false, false, false, 12), "") && call_user_func_array($this->env->getFunction('file_exist')->getCallable(), [((("./uploads/images/" . twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageRepository", [], "any", false, false, false, 12)) . "/") . twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageFileName", [], "any", false, false, false, 12))]))) {
            // line 13
            echo "                    <img class='card-img-top' alt='Article' src='/uploads/images/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageRepository", [], "any", false, false, false, 13), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "ImageFileName", [], "any", false, false, false, 13), "html", null, true);
            echo "'/>
                ";
        } else {
            // line 15
            echo "                    <h6 class=\"display-4\">Pas d'image</h6>
                ";
        }
        // line 17
        echo "
                <div class=\"card-body\">
                    <h5 class=\"card-title\">";
        // line 19
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Titre", [], "any", false, false, false, 19), "html", null, true);
        echo "</h5>
                    <p class=\"card-text\">";
        // line 20
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["article"] ?? null), "Description", [], "any", false, false, false, 20), "html", null, true);
        echo "</p>
                </div>
            </div>
        </div>
    </div>


    <form method=\"post\">
        <label>Nom</label>
        <input type=\"text\" name=\"nom\" required>
        <label>Email</label>
        <input type=\"email\" name=\"email\" required>
        <label>Message</label>
        <textarea name=\"message\" required></textarea>
        <input type=\"submit\">
    </form>
<?php
    if(isset(\$_POST['message'])){
        \$entete  = 'MIME-Version: 1.0' . \"\\r\\n\";
        \$entete .= 'Content-type: text/html; charset=utf-8' . \"\\r\\n\";
        \$entete .= 'From: ' . \$_POST['email'] . \"\\r\\n\";

        \$message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
    <p><b>Nom : </b>' . \$_POST['nom'] . '<br>
        <b>Email : </b>' . \$_POST['email'] . '<br>
        <b>Message : </b>' . \$_POST['message'] . '</p>';

    \$retour = mail('destinataire@free.fr', 'Envoi depuis page Contact', \$message, \$entete);
    if(\$retour) {
    echo '<p>Votre message a bien été envoyé.</p>';
    }
    }
    ?>

";
    }

    public function getTemplateName()
    {
        return "Article/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 20,  85 => 19,  81 => 17,  77 => 15,  69 => 13,  67 => 12,  59 => 6,  55 => 5,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"index.html.twig\" %}
{% block title %}{{ parent() }} - Mise à jour d'un article {% endblock %}


{% block body %}
    <div class=\"container-fluid mt-2\">
        <h2 class=\"display-3\">Voir l'article</h2>
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
        </div>
    </div>


    <form method=\"post\">
        <label>Nom</label>
        <input type=\"text\" name=\"nom\" required>
        <label>Email</label>
        <input type=\"email\" name=\"email\" required>
        <label>Message</label>
        <textarea name=\"message\" required></textarea>
        <input type=\"submit\">
    </form>
<?php
    if(isset(\$_POST['message'])){
        \$entete  = 'MIME-Version: 1.0' . \"\\r\\n\";
        \$entete .= 'Content-type: text/html; charset=utf-8' . \"\\r\\n\";
        \$entete .= 'From: ' . \$_POST['email'] . \"\\r\\n\";

        \$message = '<h1>Message envoyé depuis la page Contact de monsite.fr</h1>
    <p><b>Nom : </b>' . \$_POST['nom'] . '<br>
        <b>Email : </b>' . \$_POST['email'] . '<br>
        <b>Message : </b>' . \$_POST['message'] . '</p>';

    \$retour = mail('destinataire@free.fr', 'Envoi depuis page Contact', \$message, \$entete);
    if(\$retour) {
    echo '<p>Votre message a bien été envoyé.</p>';
    }
    }
    ?>

{% endblock %}", "Article/view.html.twig", "C:\\TP\\templates\\Article\\view.html.twig");
    }
}
