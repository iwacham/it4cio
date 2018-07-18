<?php

/* template.twig */
class __TwigTemplate_4cdc8a2132fc936c8430f16446d6564073f6a43253f2ab5d7c6acc197776a83a extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'customjs' => array($this, 'block_customjs'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE HTML>
<html >
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 5, $this->source); })()), "site.nome", array(), "array"), "html", null, true);
        echo "</title>
    <link href=\"/it4cio/resources/css/materialize.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" />
    <link href=\"/it4cio/resources/css/fontawesome-all.min.css\" rel=\"stylesheet\" type=\"text/css\" />
</head>
<body>
<nav>
    <div class=\"nav-wrapper\">
        <a href=\"/it4cio\" class=\"brand-logo center\">it4cio</a>
        <a href=\"#\" data-target=\"mobile-demo\" class=\"sidenav-trigger\"><i class=\"material-icons\">menu</i></a>
    </div>
</nav>
<a class=\"waves-effect btn green\" href=\"/it4cio\">Voltar</a>
<ul class=\"sidenav\" id=\"mobile-demo\">
    <li><a href=\"sass.html\">Sass</a></li>
    <li><a href=\"badges.html\">Components</a></li>
    <li><a href=\"collapsible.html\">Javascript</a></li>
    <li><a href=\"mobile.html\">Mobile</a></li>
</ul>
";
        // line 24
        $this->displayBlock('content', $context, $blocks);
        // line 26
        echo "


<script src=\"/it4cio/resources/js/jquery-3.3.1.min.js\"></script>
<script src=\"/it4cio/resources/js/materialize.js\"></script>
";
        // line 31
        $this->displayBlock('customjs', $context, $blocks);
        // line 33
        echo "<script>
    \$(document).ready(function(){
        \$('.sidenav').sidenav();
        \$('.modal').modal({
            onCloseEnd: function () {
                location.reload();
            }
        });
        \$('select').formSelect();
    });
</script>
</body>
</html>";
    }

    // line 24
    public function block_content($context, array $blocks = array())
    {
    }

    // line 31
    public function block_customjs($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "template.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 31,  80 => 24,  64 => 33,  62 => 31,  55 => 26,  53 => 24,  31 => 5,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE HTML>
<html >
<head>
    <meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
    <title>{{ app['site.nome'] }}</title>
    <link href=\"/it4cio/resources/css/materialize.css\" rel=\"stylesheet\" type=\"text/css\" />
    <link href=\"https://fonts.googleapis.com/icon?family=Material+Icons\" rel=\"stylesheet\" />
    <link href=\"/it4cio/resources/css/fontawesome-all.min.css\" rel=\"stylesheet\" type=\"text/css\" />
</head>
<body>
<nav>
    <div class=\"nav-wrapper\">
        <a href=\"/it4cio\" class=\"brand-logo center\">it4cio</a>
        <a href=\"#\" data-target=\"mobile-demo\" class=\"sidenav-trigger\"><i class=\"material-icons\">menu</i></a>
    </div>
</nav>
<a class=\"waves-effect btn green\" href=\"/it4cio\">Voltar</a>
<ul class=\"sidenav\" id=\"mobile-demo\">
    <li><a href=\"sass.html\">Sass</a></li>
    <li><a href=\"badges.html\">Components</a></li>
    <li><a href=\"collapsible.html\">Javascript</a></li>
    <li><a href=\"mobile.html\">Mobile</a></li>
</ul>
{% block content %}
{% endblock %}



<script src=\"/it4cio/resources/js/jquery-3.3.1.min.js\"></script>
<script src=\"/it4cio/resources/js/materialize.js\"></script>
{% block customjs %}
{% endblock %}
<script>
    \$(document).ready(function(){
        \$('.sidenav').sidenav();
        \$('.modal').modal({
            onCloseEnd: function () {
                location.reload();
            }
        });
        \$('select').formSelect();
    });
</script>
</body>
</html>", "template.twig", "D:\\Workspace\\dev\\php\\it4cio\\src\\view\\template.twig");
    }
}
