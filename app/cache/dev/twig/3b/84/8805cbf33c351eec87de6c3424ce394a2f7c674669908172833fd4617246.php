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

        <link rel=\"stylesheet\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/bootstrap.min.css"), "html", null, true);
        echo "\">
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
                <a class=\"navbar-brand\" href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("img/2.png"), "html", null, true);
        echo "\"></a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"bs-example-navbar-collapse-1\">
                <ul class=\"nav navbar-nav\">
                    <li>
                        <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("push");
        echo "\" title=\"\">Push</a>
                    </li>
                    <li>
                        <a href=\"";
        // line 56
        echo $this->env->getExtension('routing')->getPath("bepushed");
        echo "\" title=\"\">Be pushed</a>
                    </li>
                </ul>
                
                <form class=\"navbar-form navbar-left\" role=\"form\">
                    <div class=\"form-group\">
                      <input type=\"text\" placeholder=\"Recherche ...\" class=\"form-control\">
                    </div>
                    <button type=\"submit\" class=\"btn btn-default\"> <i class=\"fa fa-search\"></i></button>
                </form>
            

                ";
        // line 68
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 69
            echo "                    <ul class=\"nav navbar-nav navbar-right\">
                        <li id=\"fat-menu\" class=\"dropdown\">
                          <a id=\"drop3\" href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-haspopup=\"true\" role=\"button\" aria-expanded=\"false\">
                            ";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "
                            <span class=\"caret\"></span>
                          </a>
                          <ul class=\"dropdown-menu\" role=\"menu\" aria-labelledby=\"drop3\">
                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"\">Messagerie (1)</a></li>
                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("profil_show", array("id" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))), "html", null, true);
            echo "\">Profile</a></li>
                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 78
            echo $this->env->getExtension('routing')->getPath("favoris");
            echo "\">Projets Favoris</a></li>
                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"\">Projets pushed</a></li>
                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 80
            echo $this->env->getExtension('routing')->getPath("myprojects");
            echo "\">Mes projets</a></li>
                            <li role=\"presentation\" class=\"divider\"></li>
                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 82
            echo $this->env->getExtension('routing')->getPath("config");
            echo "\">Paramètres</a></li>
                            <li role=\"presentation\" class=\"divider\"></li>
                            <li role=\"presentation\"><a role=\"menuitem\" tabindex=\"-1\" href=\"";
            // line 84
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">Déconnexion</a></li>
                          </ul>
                        </li>
                      </ul>
                 ";
        } else {
            // line 89
            echo "                    <div class=\"navbar-form navbar-right\">
                        <div class=\"form-group\">
                            <a href=\"";
            // line 91
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><button type=\"button\" class=\"btn btn-success\">Connexion</button></a>
                        
                            <a href=\"";
            // line 93
            echo $this->env->getExtension('routing')->getPath("fos_user_registration_register");
            echo "\"><button type=\"button\" class=\"btn btn-primary\">Inscription</button></a>
                        </div>
                    </div>
                 ";
        }
        // line 97
        echo "                
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
    
    ";
        // line 104
        $this->displayBlock('header', $context, $blocks);
        // line 106
        echo "
    <div id=\"content\">
        ";
        // line 108
        $this->displayBlock('body', $context, $blocks);
        // line 110
        echo "    </div>

    
    <footer>
        <div class=\"col-md-12 footer-swag\">
            <div class=\"col-md-offset-1 col-md-10\">
                <div class=\"col-md-3\">
                    <h4>Navigation</h4>
                    <ul class=\"list-unstyled\">
                     <li>Index</li>
                     <li>Push</li>
                     <li>Be Pushed</li>
                     <li>Connexion</li>
                     <li>Inscription</li>
                    </ul>
                </div>

                <div class=\"col-md-3\">
                    <h4>Help</h4>
                    <ul class=\"list-unstyled\">
                     <li>Informations</li>
                     <li>Mention legal</li>
                     <li>FAQ</li>
                     <li>Nous contacter</li>
                    </ul>
                </div>

                <div class=\"col-md-3\">
                    <h4>Catégories</h4>
                    <ul class=\"list-unstyled\">
                     <li>Sport</li>
                     <li>Mode</li>
                     <li>Technologie</li>
                     <li>Humanitaire</li>
                     <li>Entreprise</li>
                    </ul>
                </div>

                <div class=\"col-md-3\">
                    <h4>Auteurs</h4>
                    <ul class=\"list-unstyled\">
                     <li>Yannis Gil</li>
                     <li>Salah Saiad</li>
                     <li>Samuel Benichou</li>
                     <li>Aroul Rattinassababady</li>
                    </ul>
                </div>

            </div> 
        </div>
    </footer>
    <script src=\"https://code.jquery.com/jquery-1.11.2.js\"></script>
    <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/main.js"), "html", null, true);
        echo "\"></script>
</body>
</html>";
    }

    // line 104
    public function block_header($context, array $blocks = array())
    {
        // line 105
        echo "    ";
    }

    // line 108
    public function block_body($context, array $blocks = array())
    {
        // line 109
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
        return array (  261 => 109,  258 => 108,  254 => 105,  251 => 104,  244 => 164,  240 => 163,  236 => 162,  182 => 110,  180 => 108,  176 => 106,  174 => 104,  165 => 97,  158 => 93,  153 => 91,  149 => 89,  141 => 84,  136 => 82,  131 => 80,  126 => 78,  122 => 77,  114 => 72,  109 => 69,  107 => 68,  92 => 56,  86 => 53,  74 => 46,  51 => 26,  40 => 18,  21 => 1,);
    }
}
