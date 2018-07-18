<?php

/* /pessoa/lista.twig */
class __TwigTemplate_72e940910d97fe9ae410889be3b8f7784923e5d10d46218fca61ab18e6aabf2d extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.twig", "/pessoa/lista.twig", 1);
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
        <a class=\"waves-effect btn green modal-trigger\" href=\"#new-user\">Adicionar</a>
        <table class=\"responsive-table highlight\">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Data Nascimento</th>
                <th></th>
            </tr>
            </thead>

            <tbody>
            ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pessoas"]) || array_key_exists("pessoas", $context) ? $context["pessoas"] : (function () { throw new Twig_Error_Runtime('Variable "pessoas" does not exist.', 17, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["pessoa"]) {
            // line 18
            echo "            <tr>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pessoa"], "p_nome", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pessoa"], "p_email", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pessoa"], "p_nascimento", array()), "html", null, true);
            echo "</td>
                <td>
                    <a href=\"/it4cio/Pessoa/";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pessoa"], "p_codigo", array()), "html", null, true);
            echo "\" class=\"btn blue waves-effect\">Dependentes</a>
                    <a href=\"/it4cio/Pessoa/Editar/";
            // line 24
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pessoa"], "p_codigo", array()), "html", null, true);
            echo "\" class=\"btn green waves-effect\">Editar</a>
                    <a href=\"/it4cio/Pessoa/Excluir/";
            // line 25
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["pessoa"], "p_codigo", array()), "html", null, true);
            echo "\" class=\"btn red waves-effect\">Excluir</a>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pessoa'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "            </tbody>
        </table>
    </div>

    <!-- Modal Structure -->
    <div id=\"new-user\" class=\"modal\" style=\"min-height: 400px;\">
        <div class=\"modal-content\">
            <h4>Adicionar Pessoa</h4>
            <a href=\"#!\" class=\"modal-close waves-effect waves-green btn-flat\">Fechar</a>
            <div class=\"row\">
                <div class=\"input-field col s4\">
                    <input id=\"nome\" type=\"text\" class=\"validate\" />
                    <label for=\"nome\">Nome</label>
                </div>
                <div class=\"input-field col s4\">
                    <input id=\"data-nascimento\" type=\"date\" class=\"validate\" />
                    <label for=\"data-nascimento\">Data de nascimento</label>
                </div>
                <div class=\"input-field col s4\">
                    <input id=\"email\" type=\"text\" class=\"validate\" />
                    <label for=\"email\">Email</label>
                </div>
                <div class=\"col s12\">
                    <button id=\"save-pessoa\" class=\"btn btn-large green waves-effect\">Adicionar</button>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 58
    public function block_customjs($context, array $blocks = array())
    {
        // line 59
        echo "    <script>
        \$(document).ready(function(){
            \$('#save-pessoa').click(function () {
                var nome = \$('#nome').val();
                var email = \$('#email').val();
                var dataNascimento = \$('#data-nascimento').val();

                \$.ajax({
                    type: 'POST',
                    url: '/it4cio/Pessoa/Salvar',
                    data: {
                        nome: nome,
                        email: email,
                        dataNascimento: dataNascimento
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
        return "/pessoa/lista.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 59,  121 => 58,  89 => 29,  79 => 25,  75 => 24,  71 => 23,  66 => 21,  62 => 20,  58 => 19,  55 => 18,  51 => 17,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.twig' %}

{% block content %}
    <div class=\"container\">
        <a class=\"waves-effect btn green modal-trigger\" href=\"#new-user\">Adicionar</a>
        <table class=\"responsive-table highlight\">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Data Nascimento</th>
                <th></th>
            </tr>
            </thead>

            <tbody>
            {% for pessoa in pessoas %}
            <tr>
                <td>{{ pessoa.p_nome }}</td>
                <td>{{ pessoa.p_email }}</td>
                <td>{{ pessoa.p_nascimento }}</td>
                <td>
                    <a href=\"/it4cio/Pessoa/{{ pessoa.p_codigo }}\" class=\"btn blue waves-effect\">Dependentes</a>
                    <a href=\"/it4cio/Pessoa/Editar/{{ pessoa.p_codigo }}\" class=\"btn green waves-effect\">Editar</a>
                    <a href=\"/it4cio/Pessoa/Excluir/{{ pessoa.p_codigo }}\" class=\"btn red waves-effect\">Excluir</a>
                </td>
            </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>

    <!-- Modal Structure -->
    <div id=\"new-user\" class=\"modal\" style=\"min-height: 400px;\">
        <div class=\"modal-content\">
            <h4>Adicionar Pessoa</h4>
            <a href=\"#!\" class=\"modal-close waves-effect waves-green btn-flat\">Fechar</a>
            <div class=\"row\">
                <div class=\"input-field col s4\">
                    <input id=\"nome\" type=\"text\" class=\"validate\" />
                    <label for=\"nome\">Nome</label>
                </div>
                <div class=\"input-field col s4\">
                    <input id=\"data-nascimento\" type=\"date\" class=\"validate\" />
                    <label for=\"data-nascimento\">Data de nascimento</label>
                </div>
                <div class=\"input-field col s4\">
                    <input id=\"email\" type=\"text\" class=\"validate\" />
                    <label for=\"email\">Email</label>
                </div>
                <div class=\"col s12\">
                    <button id=\"save-pessoa\" class=\"btn btn-large green waves-effect\">Adicionar</button>
                </div>
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

                \$.ajax({
                    type: 'POST',
                    url: '/it4cio/Pessoa/Salvar',
                    data: {
                        nome: nome,
                        email: email,
                        dataNascimento: dataNascimento
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
{% endblock %}", "/pessoa/lista.twig", "D:\\Workspace\\dev\\php\\it4cio\\src\\view\\pessoa\\lista.twig");
    }
}
