<?php

/* /pessoa/detalhe.twig */
class __TwigTemplate_2fd327e32448290d91029d6a7d28783a4888aeaa3be2956b566a62ad62496df7 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        // line 1
        $this->parent = $this->loadTemplate("template.twig", "/pessoa/detalhe.twig", 1);
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
        <div class=\"row\">
            <h2 class=\"center\">Pessoa</h2>
            <br />
            <div class=\"col s12 l4\">";
        // line 8
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pessoa"]) || array_key_exists("pessoa", $context) ? $context["pessoa"] : (function () { throw new Twig_Error_Runtime('Variable "pessoa" does not exist.', 8, $this->source); })()), "p_nome", array()), "html", null, true);
        echo "</div>
            <div class=\"col s12 l4\">";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pessoa"]) || array_key_exists("pessoa", $context) ? $context["pessoa"] : (function () { throw new Twig_Error_Runtime('Variable "pessoa" does not exist.', 9, $this->source); })()), "p_email", array()), "html", null, true);
        echo "</div>
            <div class=\"col s12 l4\">";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pessoa"]) || array_key_exists("pessoa", $context) ? $context["pessoa"] : (function () { throw new Twig_Error_Runtime('Variable "pessoa" does not exist.', 10, $this->source); })()), "p_nascimento", array()), "html", null, true);
        echo "</div>
        </div>
        <div class=\"row\">
            <h2 class=\"center\">Dependentes</h2>
            <a class=\"waves-effect btn green modal-trigger\" href=\"#modal1\">Adicionar</a>
            <table class=\"responsive-table highlight\">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Relacionamento</th>
                    <th>Data Nascimento</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["dependentes"]) || array_key_exists("dependentes", $context) ? $context["dependentes"] : (function () { throw new Twig_Error_Runtime('Variable "dependentes" does not exist.', 26, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["dependente"]) {
            // line 27
            echo "                    <tr>
                        <td>";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dependente"], "nome", array()), "html", null, true);
            echo "</td>
                        ";
            // line 29
            if ((twig_get_attribute($this->env, $this->source, $context["dependente"], "fk_relacao", array()) == 1)) {
                // line 30
                echo "                            <td>Conjuge</td>
                        ";
            }
            // line 32
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["dependente"], "fk_relacao", array()) == 2)) {
                // line 33
                echo "                            <td>Filho</td>
                        ";
            }
            // line 35
            echo "                        ";
            if ((twig_get_attribute($this->env, $this->source, $context["dependente"], "fk_relacao", array()) == 3)) {
                // line 36
                echo "                            <td>Secretária</td>
                        ";
            }
            // line 38
            echo "                        <td>";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dependente"], "data_nascimento", array()), "html", null, true);
            echo "</td>
                        <td>
                            <a href=\"/it4cio/Dependente/Excluir/";
            // line 40
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["dependente"], "codigo", array()), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pessoa"]) || array_key_exists("pessoa", $context) ? $context["pessoa"] : (function () { throw new Twig_Error_Runtime('Variable "pessoa" does not exist.', 40, $this->source); })()), "p_codigo", array()), "html", null, true);
            echo "\" class=\"btn red waves-effect\">Excluir</a>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dependente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal Structure -->
    <div id=\"modal1\" class=\"modal\" style=\"min-height: 400px;\">
        <div class=\"modal-content\">
            <h4>Adicionar Dependente</h4>
            <a href=\"#!\" class=\"modal-close waves-effect waves-green btn-flat\">Fechar</a>
            <div class=\"row\">
                <div class=\"input-field col s4\">
                    <input id=\"nome\" type=\"text\" class=\"validate\" />
                    <input id=\"fk-pessoa\" type=\"hidden\" value=\"";
        // line 56
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["pessoa"]) || array_key_exists("pessoa", $context) ? $context["pessoa"] : (function () { throw new Twig_Error_Runtime('Variable "pessoa" does not exist.', 56, $this->source); })()), "p_codigo", array()), "html", null, true);
        echo "\" class=\"validate\" />
                    <label for=\"nome\">Nome</label>
                </div>
                <div class=\"input-field col s4\">
                    <input id=\"data-nascimento\" type=\"date\" class=\"validate\" />
                    <label for=\"data-nascimento\">Data de nascimento</label>
                </div>
                <div class=\"input-field col s4\">
                    <select id=\"relacionamento\">
                        <option value=\"0\" disabled selected>Selecione o relacionamento</option>
                        <option value=\"1\">Conjuge</option>
                        <option value=\"2\">Filho</option>
                        <option value=\"3\">Secretária</option>
                    </select>
                    <label>Materialize Select</label>
                </div>
                <div class=\"col s12\">
                    <button id=\"save-dependente\" class=\"btn btn-large green waves-effect\">Adicionar</button>
                </div>
            </div>
        </div>
    </div>
";
    }

    // line 79
    public function block_customjs($context, array $blocks = array())
    {
        // line 80
        echo "    <script>
        \$(document).ready(function(){
            \$('#save-dependente').click(function () {
                var nome = \$('#nome').val();
                var fkPessoa = \$('#fk-pessoa').val();
                var dataNascimento = \$('#data-nascimento').val();
                var relacionamento = \$('#relacionamento').val();

                \$.ajax({
                    type: 'POST',
                    url: '/it4cio/Dependente/Salvar',
                    data: {
                        nome: nome,
                        fkPessoa: fkPessoa,
                        dataNascimento: dataNascimento,
                        relacionamento: relacionamento
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
        return "/pessoa/detalhe.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 80,  159 => 79,  132 => 56,  118 => 44,  106 => 40,  100 => 38,  96 => 36,  93 => 35,  89 => 33,  86 => 32,  82 => 30,  80 => 29,  76 => 28,  73 => 27,  69 => 26,  50 => 10,  46 => 9,  42 => 8,  36 => 4,  33 => 3,  15 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'template.twig' %}

{% block content %}
    <div class=\"container\">
        <div class=\"row\">
            <h2 class=\"center\">Pessoa</h2>
            <br />
            <div class=\"col s12 l4\">{{ pessoa.p_nome }}</div>
            <div class=\"col s12 l4\">{{ pessoa.p_email }}</div>
            <div class=\"col s12 l4\">{{ pessoa.p_nascimento }}</div>
        </div>
        <div class=\"row\">
            <h2 class=\"center\">Dependentes</h2>
            <a class=\"waves-effect btn green modal-trigger\" href=\"#modal1\">Adicionar</a>
            <table class=\"responsive-table highlight\">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Relacionamento</th>
                    <th>Data Nascimento</th>
                    <th></th>
                </tr>
                </thead>

                <tbody>
                {% for dependente in dependentes %}
                    <tr>
                        <td>{{ dependente.nome }}</td>
                        {% if dependente.fk_relacao == 1 %}
                            <td>Conjuge</td>
                        {% endif %}
                        {% if dependente.fk_relacao == 2 %}
                            <td>Filho</td>
                        {% endif %}
                        {% if dependente.fk_relacao == 3 %}
                            <td>Secretária</td>
                        {% endif %}
                        <td>{{ dependente.data_nascimento }}</td>
                        <td>
                            <a href=\"/it4cio/Dependente/Excluir/{{ dependente.codigo }}/{{ pessoa.p_codigo }}\" class=\"btn red waves-effect\">Excluir</a>
                        </td>
                    </tr>
                {% endfor %}
                </tbody>
            </table>
        </div>
    </div>
    <!-- Modal Structure -->
    <div id=\"modal1\" class=\"modal\" style=\"min-height: 400px;\">
        <div class=\"modal-content\">
            <h4>Adicionar Dependente</h4>
            <a href=\"#!\" class=\"modal-close waves-effect waves-green btn-flat\">Fechar</a>
            <div class=\"row\">
                <div class=\"input-field col s4\">
                    <input id=\"nome\" type=\"text\" class=\"validate\" />
                    <input id=\"fk-pessoa\" type=\"hidden\" value=\"{{ pessoa.p_codigo }}\" class=\"validate\" />
                    <label for=\"nome\">Nome</label>
                </div>
                <div class=\"input-field col s4\">
                    <input id=\"data-nascimento\" type=\"date\" class=\"validate\" />
                    <label for=\"data-nascimento\">Data de nascimento</label>
                </div>
                <div class=\"input-field col s4\">
                    <select id=\"relacionamento\">
                        <option value=\"0\" disabled selected>Selecione o relacionamento</option>
                        <option value=\"1\">Conjuge</option>
                        <option value=\"2\">Filho</option>
                        <option value=\"3\">Secretária</option>
                    </select>
                    <label>Materialize Select</label>
                </div>
                <div class=\"col s12\">
                    <button id=\"save-dependente\" class=\"btn btn-large green waves-effect\">Adicionar</button>
                </div>
            </div>
        </div>
    </div>
{% endblock %}
{% block customjs %}
    <script>
        \$(document).ready(function(){
            \$('#save-dependente').click(function () {
                var nome = \$('#nome').val();
                var fkPessoa = \$('#fk-pessoa').val();
                var dataNascimento = \$('#data-nascimento').val();
                var relacionamento = \$('#relacionamento').val();

                \$.ajax({
                    type: 'POST',
                    url: '/it4cio/Dependente/Salvar',
                    data: {
                        nome: nome,
                        fkPessoa: fkPessoa,
                        dataNascimento: dataNascimento,
                        relacionamento: relacionamento
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
{% endblock %}", "/pessoa/detalhe.twig", "D:\\Workspace\\dev\\php\\it4cio\\src\\view\\pessoa\\detalhe.twig");
    }
}
