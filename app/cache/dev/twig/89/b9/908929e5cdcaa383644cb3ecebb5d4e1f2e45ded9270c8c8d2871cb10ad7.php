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
\t\t\t\t<div class=\"container\">
\t\t\t<span class=\"brand-name\">
\t\t\t\tBienvenue sur FavYour
\t\t\t</span>
\t\t\t<h1>Vos projets, votre aide</h1>
\t\t\t<a href=\"";
        // line 11
        echo $this->env->getExtension('routing')->getPath("bepushed");
        echo "\" class=\"btn btn-cta\"><i class=\"fa fa-chevron-circle-right\"></i> Découvrir !</a>
\t\t</div>
\t</header>
\t";
    }

    // line 17
    public function block_body($context, array $blocks = array())
    {
        // line 18
        echo "
\t<section class=\"projet-semaine\">
\t\t<div class=\"container\">
\t\t\t<h1 class=\"titre-projetsemaine\">Projets de la semaine</h1>
\t\t\t<div class=\"row\">

\t\t\t";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            echo "\t
\t        <div class=\"col-lg-4 text-center\">
\t          <img class=\"img-circle\" src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/documents/" . $this->getAttribute($context["project"], "path", array()))), "html", null, true);
            echo "\" alt=\"\" width=\"140\" height=\"140\">
\t          <h3>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "title", array()), "html", null, true);
            echo "</h3>
\t          <p>";
            // line 28
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["project"], "description", array()), 0, 230) . "..."), "html", null, true);
            echo "</p>
\t\t\t\t
\t\t\t  <div class=\"progress bar-prog-index\">
\t\t\t\t\t\t          \t  ";
            // line 31
            $context["integer"] = (($this->getAttribute($context["project"], "amountWon", array()) / $this->getAttribute($context["project"], "amountRequested", array())) * 100);
            // line 32
            echo "\t\t\t\t\t\t\t          <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, (isset($context["integer"]) ? $context["integer"] : $this->getContext($context, "integer")), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
            echo twig_escape_filter($this->env, (isset($context["integer"]) ? $context["integer"] : $this->getContext($context, "integer")), "html", null, true);
            echo "%;\">
\t\t\t\t\t\t\t            ";
            // line 33
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["integer"]) ? $context["integer"] : $this->getContext($context, "integer")), 0), "html", null, true);
            echo "%
\t\t\t\t\t\t\t          </div>
\t\t\t </div>

\t          <p><a class=\"btn btn-default\" href=\"";
            // line 37
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_show", array("id" => $this->getAttribute($context["project"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">En savoir plus »</a></p>
\t          </div><!-- /.col-lg-4 -->

\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "\t      </div>

\t      <h1 class=\"titre-projetsemaine\">Derniers projets</h1>
\t\t\t<div class=\"row\">

\t\t\t";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["lastProjects"]) ? $context["lastProjects"] : $this->getContext($context, "lastProjects")));
        foreach ($context['_seq'] as $context["_key"] => $context["lastProject"]) {
            echo "\t
\t        <div class=\"col-lg-4 text-center\">
\t          <img class=\"img-circle\" src=\"";
            // line 48
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/documents/" . $this->getAttribute($context["lastProject"], "path", array()))), "html", null, true);
            echo "\" alt=\"\" width=\"140\" height=\"140\">
\t          <h3>";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute($context["lastProject"], "title", array()), "html", null, true);
            echo "</h3>
\t          <p>";
            // line 50
            echo twig_escape_filter($this->env, (twig_slice($this->env, $this->getAttribute($context["lastProject"], "description", array()), 0, 230) . "..."), "html", null, true);
            echo "</p>

\t          <div class=\"progress bar-prog-index\">
\t\t\t\t\t\t          \t  ";
            // line 53
            $context["integer"] = (($this->getAttribute($context["lastProject"], "amountWon", array()) / $this->getAttribute($context["lastProject"], "amountRequested", array())) * 100);
            // line 54
            echo "\t\t\t\t\t\t\t          <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"";
            echo twig_escape_filter($this->env, (isset($context["integer"]) ? $context["integer"] : $this->getContext($context, "integer")), "html", null, true);
            echo "\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:";
            echo twig_escape_filter($this->env, (isset($context["integer"]) ? $context["integer"] : $this->getContext($context, "integer")), "html", null, true);
            echo "%;\">
\t\t\t\t\t\t\t            ";
            // line 55
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["integer"]) ? $context["integer"] : $this->getContext($context, "integer")), 0), "html", null, true);
            echo "%
\t\t\t\t\t\t\t          </div>
\t\t\t </div>

\t          <p><a class=\"btn btn-default\" href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("project_show", array("id" => $this->getAttribute($context["lastProject"], "id", array()))), "html", null, true);
            echo "\" role=\"button\">En savoir plus »</a></p>
\t          </div><!-- /.col-lg-4 -->

\t        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['lastProject'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "\t      </div>
\t    </div>
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
        return array (  168 => 63,  158 => 59,  151 => 55,  144 => 54,  142 => 53,  136 => 50,  132 => 49,  128 => 48,  121 => 46,  114 => 41,  104 => 37,  97 => 33,  90 => 32,  88 => 31,  82 => 28,  78 => 27,  74 => 26,  67 => 24,  59 => 18,  56 => 17,  48 => 11,  40 => 5,  37 => 4,  11 => 2,);
    }
}
