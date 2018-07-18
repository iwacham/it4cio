<?php

/* /pessoa/editar.twig */
class __TwigTemplate_0933f1fd884c6c5273c77460bd7381a720155c6f8874fa071f1dc3cdc61407e7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.twig", "/pessoa/editar.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'customjs' => array($this, 'block_customjs'),
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
        <h4>Editar Pessoa</h4>
        <div class=\"row\">
            <div class=\"input-field col s4\">
                <input id=\"nome\" type=\"text\" value=\"";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pessoa"]) || array_key_exists("pessoa", $context) ? $context["pessoa"] : (function () { throw new Twig_Error_Runtime('Variable "pessoa" does not exist.', 8, $this->source); })()), "p_nome", array()), "html", null, true);
        echo "\" class=\"validate\" />
                <input id=\"codigo\" type=\"text\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pessoa"]) || array_key_exists("pessoa", $context) ? $context["pessoa"] : (function () { throw new Twig_Error_Runtime('Variable "pessoa" does not exist.', 9, $this->source); })()), "p_codigo", array()), "html", null, true);
        echo "\" class=\"validate\" />
                <label for=\"nome\">Nome</label>
            </div>
            <div class=\"input-field col s4\">
                <input id=\"data-nascimento\" type=\"date\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pessoa"]) || array_key_exists("pessoa", $context) ? $context["pessoa"] : (function () { throw new Twig_Error_Runtime('Variable "pessoa" does not exist.', 13, $this->source); })()), "p_nascimento", array()), "html", null, true);
        echo "\" class=\"validate\" />
                <label for=\"data-nascimento\">Data de nascimento</label>
            </div>
            <div class=\"input-field col s4\">
                <input id=\"email\" type=\"text\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pessoa"]) || array_key_exists("pessoa", $context) ? $context["pessoa"] : (function () { throw new Twig_Error_Runtime('Variable "pessoa" does not exist.', 17, $this->source); })()), "p_email", array()), "html", null, true);
        echo "\" class=\"validate\" />
                <label for=\"email\">Email</label>
            </div>
            <div class=\"col s12\">
                <button id=\"save-pessoa\" class=\"btn btn-large green waves-effect\">Atualizar</button>
            </div>
        </div>
    </div>
";
    }

    // line 26
    public function block_customjs($context, array $blocks = array())
    {
        // line 27
        echo "    <script>
        \$(document).ready(function(){
            \$('#save-pessoa').click(function () {
                var nome = \$('#nome').val();
                var email = \$('#email').val();
                var dataNascimento = \$('#data-nascimento').val();
                var codigo = \$('#codigo').val();

                \$.ajax({
                    type: 'POST',
                    url: '/it4cio/Pessoa/Update',
                    data: {
                        nome: nome,
                        email: email,
                        dataNascimento: dataNascimento,
                        codigo: codigo
                    },
                    success: function (data) {
                        data = JSON.parse(data);
                        if(data.code == 200){
                            console.log(data);
                            M.toast({html: data.msg});
                        }else{
                            console.log(data);
                            M.toast({html: data.msg});
                        }
                    }
                });

            });
        });
    </script>
";
    }

    public function getTemplateName()
    {
        return "/pessoa/editar.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  76 => 27,  73 => 26,  60 => 17,  53 => 13,  46 => 9,  42 => 8,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.twig' %}

{% block content %}
    <div class=\"container\">
        <h4>Editar Pessoa</h4>
        <div class=\"row\">
            <div class=\"input-field col s4\">
                <input id=\"nome\" type=\"text\" value=\"{{ pessoa.p_nome }}\" class=\"validate\" />
                <input id=\"codigo\" type=\"text\" value=\"{{ pessoa.p_codigo }}\" class=\"validate\" />
                <label for=\"nome\">Nome</label>
            </div>
            <div class=\"input-field col s4\">
                <input id=\"data-nascimento\" type=\"date\" value=\"{{ pessoa.p_nascimento }}\" class=\"validate\" />
                <label for=\"data-nascimento\">Data de nascimento</label>
            </div>
            <div class=\"input-field col s4\">
                <input id=\"email\" type=\"text\" value=\"{{ pessoa.p_email }}\" class=\"validate\" />
                <label for=\"email\">Email</label>
            </div>
            <div class=\"col s12\">
                <button id=\"save-pessoa\" class=\"btn btn-large green waves-effect\">Atualizar</button>
            </div>
        </div>
    </div>
{% endblock %}
{% block customjs %}
    <script>
        \$(document).ready(function(){
            \$('#save-pessoa').click(function () {
                var nome = \$('#nome').val();
                var email = \$('#email').val();
                var dataNascimento = \$('#data-nascimento').val();
                var codigo = \$('#codigo').val();

                \$.ajax({
                    type: 'POST',
                    url: '/it4cio/Pessoa/Update',
                    data: {
                        nome: nome,
                        email: email,
                        dataNascimento: dataNascimento,
                        codigo: codigo
                    },
                    success: function (data) {
                        data = JSON.parse(data);
                        if(data.code == 200){
                            console.log(data);
                            M.toast({html: data.msg});
                        }else{
                            console.log(data);
                            M.toast({html: data.msg});
                        }
                    }
                });

            });
        });
    </script>
{% endblock %}", "/pessoa/editar.twig", "D:\\Workspace\\dev\\php\\it4cio\\src\\view\\pessoa\\editar.twig");
    }
}
