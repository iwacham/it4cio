<?php

/* /pessoa/erro.twig */
class __TwigTemplate_12d1f3641a94a11b408fec91c576eb39d43ad02b2556522cae63c26667ed18c8 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.twig", "/pessoa/erro.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "template.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    <div class=\"container\">
        <p>Parece que este usuário ainda tem dependentes...</p>
        <p>Remova para remover este usuário !</p>
    </div>
";
    }

    public function getTemplateName()
    {
        return "/pessoa/erro.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 4,  32 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.twig' %}

{% block content %}
    <div class=\"container\">
        <p>Parece que este usuário ainda tem dependentes...</p>
        <p>Remova para remover este usuário !</p>
    </div>
{% endblock %}", "/pessoa/erro.twig", "D:\\Workspace\\dev\\php\\it4cio\\src\\view\\pessoa\\erro.twig");
    }
}
