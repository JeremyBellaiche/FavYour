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
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t\t<section class=\"projet-semaine\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-1\"></div>
\t\t\t\t<div class=\"col-md-10\">
\t\t\t\t\t<h1 class=\"titre-projetsemaine\">Projets de la semaine</h1>


\t\t\t        ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["projects"]) ? $context["projects"] : $this->getContext($context, "projects")));
        foreach ($context['_seq'] as $context["_key"] => $context["project"]) {
            // line 13
            echo "\t\t\t\t\t<div class=\"col-md-6\">
\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t<img src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(("uploads/membres/" . $this->getAttribute($context["project"], "image", array()))), "html", null, true);
            echo "\" alt=\"\" class=\"img-circle img-projet\">


\t\t\t\t\t\t\t\t<div class=\"progress bar-prog-index\">
\t\t\t\t\t\t\t          <div class=\"progress-bar\" role=\"progressbar\" aria-valuenow=\"60\" aria-valuemin=\"0\" aria-valuemax=\"100\" style=\"width:60%;\">
\t\t\t\t\t\t\t            ";
            // line 21
            echo twig_escape_filter($this->env, (($this->getAttribute($context["project"], "amountWon", array()) / $this->getAttribute($context["project"], "amountRequested", array())) * 100), "html", null, true);
            echo "%
\t\t\t\t\t\t\t          </div>
\t\t\t\t\t\t\t    </div>


\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<h4>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["project"], "title", array()), "html", null, true);
            echo "</h4>

\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t";
            // line 31
            echo twig_escape_filter($this->env, twig_slice($this->env, $this->getAttribute($context["project"], "description", array()), 0, 250), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['project'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</section>
\t\t";
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
        return array (  93 => 37,  81 => 31,  75 => 28,  65 => 21,  57 => 16,  52 => 13,  48 => 12,  39 => 5,  36 => 4,  11 => 2,);
    }
}
