<?php

/* BaseBundle:Home:index.html.twig */
class __TwigTemplate_89b9908929e5cdcaa383644cb3ecebb5d4e1f2e45ded9270c8c8d2871cb10ad7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 2
        try {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(2);

            throw $e;
        }

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_header($context, array $blocks = array())
    {
        // line 5
        echo "\t\t\t<header class=\"intro\">
\t\t<div class=\"container\">
\t\t\t<span class=\"brand-name\">
\t\t\t\tBienvenue sur FavYour
\t\t\t</span>
\t\t\t<h1>Vos projets, votre aide</h1>
\t\t\t<a href=\"#\" class=\"btn btn-cta\"><i class=\"fa fa-chevron-circle-right\"></i> Commencer</a>
\t\t</div>
\t</header>
\t";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "\t<section class=\"projet-semaine\">
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-10 col-md-offset-1\">
\t\t\t\t\t<h1 class=\"titre-projetsemaine\">Projets de la semaine</h1>


\t\t\t        ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 26
            echo "\t\t\t\t\t<div class=\"col-md-6 project-home\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/membres/" . $this->getAttribute($context["project"], "image", array()))), "html", null, true);
            echo "\" alt=\"\" class=\"img-circle img-projet\">


\t\t\t\t\t\t\t\t<div class=\"progress bar-prog-index\">
\t\t\t\t\t\t\t          <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"";
            // line 33
            echo twig_escape_filter($this->env, (($this->getAttribute($context["project"], "amountWon", array()) / $this->getAttribute($context["project"], "amountRequested", array())) * 100), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
            echo twig_escape_filter($this->env, (($this->getAttribute($context["project"], "amountWon", array()) / $this->getAttribute($context["project"], "amountRequested", array())) * 100), "html", null, true);
            echo "%;\">
\t\t\t\t\t\t\t            ";
            // line 34
            echo twig_escape_filter($this->env, (($this->getAttribute($context["project"], "amountWon", array()) / $this->getAttribute($context["project"], "amountRequested", array())) * 100), "html", null, true);
            echo "%
\t\t\t\t\t\t\t          </div>
\t\t\t\t\t\t\t    </div>


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<h4>";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "title", array()), "html", null, true);
            echo "</h4>

\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t";
            // line 44
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["project"], "description", array()), 0, 230) . "..."), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t\t<div class=\"clearfix\"></div>
\t\t\t\t\t\t\t\t<a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_show", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\">En savoir plus</a>

\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</section>
\t";
    }

    public function getTemplateName()
    {
        return "BaseBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 53,  109 => 47,  103 => 44,  97 => 41,  87 => 34,  81 => 33,  74 => 29,  69 => 26,  65 => 25,  56 => 18,  53 => 17,  40 => 5,  37 => 4,  11 => 2,);
    }
}
