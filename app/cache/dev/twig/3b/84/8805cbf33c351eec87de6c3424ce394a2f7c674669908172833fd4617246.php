<?php

/* ::base.html.twig */
class __TwigTemplate_3b848805cbf33c351eec87de6c3424ce394a2f7c674669908172833fd4617246 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "
<!doctype html>
<!--[if lt IE 7]>      <html class=\"no-js lt-ie9 lt-ie8 lt-ie7\" lang=\"\"> <![endif]-->
<!--[if IE 7]>         <html class=\"no-js lt-ie9 lt-ie8\" lang=\"\"> <![endif]-->
<!--[if IE 8]>         <html class=\"no-js lt-ie9\" lang=\"\"> <![endif]-->
<!--[if gt IE 8]><!--> <html class=\"no-js\" lang=\"\"> <!--<![endif]-->



<head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
        <title></title>
        <meta name=\"description\" content=\"\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <link rel=\"apple-touch-icon\" href=\"apple-touch-icon.png\">

        <link rel=\"stylesheet\" href=\"css/bootstrap.min.css\">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css\">
        <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/main.css"), "html", null, true);
        echo "\">


        <script src=\"https://code.jquery.com/jquery-1.11.2.js\"></script>
        <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js\"></script>
        <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"), "html", null, true);
        echo "\"></script>
        <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
    </head>

<body>
        <!--[if lt IE 8]>
            <p class=\"browserupgrade\">You are using an <strong>outdated</strong> browser. Please <a href=\"http://browsehappy.com/\">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
    <nav class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#bs-example-navbar-collapse-1\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"\"><img src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/2.png"), "html", null, true);
        echo "\"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"\" title=\"\">Pushers</a>
                    </li>
                    <li>
                        <a href=\"\" title=\"\">Be pushed</a>
                    </li>
                </ul>
                
                <form class=\"navbar-form navbar-left\" role=\"form\">
                    <div class=\"form-group\">
                      <input type=\"text\" placeholder=\"Recherche ...\" class=\"form-control\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\"> <i class=\"fa fa-search\"></i></button>
                </form>

                <form class=\"navbar-form navbar-right\" role=\"form\">
                    <div class=\"form-group\">
                        <button type=\"submit\" class=\"btn btn-success\">Connexion</button>
                    </div>
                        <button type=\"button\" class=\"btn btn-primary\">Inscription</button>
                </form>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    ";
        // line 82
        $this->displayBlock('header', $context, $blocks);
        // line 84
        echo "
    <div id=\"content\">
        ";
        // line 86
        $this->displayBlock('body', $context, $blocks);
        // line 88
        echo "      </div>
 

</body>
</html>";
    }

    // line 82
    public function block_header($context, array $blocks = array())
    {
        // line 83
        echo "    ";
    }

    // line 86
    public function block_body($context, array $blocks = array())
    {
        // line 87
        echo "        ";
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 87,  139 => 86,  135 => 83,  132 => 82,  124 => 88,  122 => 86,  118 => 84,  116 => 82,  80 => 49,  60 => 32,  56 => 31,  48 => 26,  21 => 1,);
    }
}
