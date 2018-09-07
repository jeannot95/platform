<?php

/* OCPlatformBundle:Advert:view.html.twig */
class __TwigTemplate_2c076e5fde80e13d5fe5b28d02da726c7f47ae7d9ea2652f07f6121056e44097 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 3
        $this->parent = $this->loadTemplate("OCPlatformBundle::layout.html.twig", "OCPlatformBundle:Advert:view.html.twig", 3);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'ocplatform_body' => array($this, 'block_ocplatform_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "OCPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "OCPlatformBundle:Advert:view.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 6
        echo "  Lecture d'une annonce - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo "
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 9
    public function block_ocplatform_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "ocplatform_body"));

        // line 10
        echo "
  <div style=\"float: left; margin-right: 1em;\">
    ";
        // line 13
        echo "    ";
        if ( !(null === $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "image", array()))) {
            // line 14
            echo " <img
  src=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl($this->getAttribute($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "image", array()), "webPath", array())), "html", null, true);
            echo "\"
  alt=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "image", array()), "alt", array()), "html", null, true);
            echo "\"
 width=\"200\" height=\"200\"/>
    ";
        }
        // line 19
        echo "  </div>

  <h2>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "title", array()), "html", null, true);
        echo "</h2>
  <i>Par ";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "author", array()), "html", null, true);
        echo ", le ";
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "date", array()), "d/m/Y"), "html", null, true);
        echo "</i>

  <div class=\"well\">
    ";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "content", array()), "html", null, true);
        echo "
  </div>

  ";
        // line 28
        if ( !$this->getAttribute($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "categories", array()), "empty", array())) {
            // line 29
            echo "    <p>
      Cette annonce est parue dans les catégories suivantes :
      ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "categories", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 32
                echo "        ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                // line 33
                echo "      ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 34
            echo "    </p>
  ";
        }
        // line 36
        echo "
  ";
        // line 37
        if ((twig_length_filter($this->env, ($context["listAdvertSkills"] ?? $this->getContext($context, "listAdvertSkills"))) > 0)) {
            // line 38
            echo "    <div>
      Cette annonce requiert les compétences suivantes :
      <ul>
        ";
            // line 41
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["listAdvertSkills"] ?? $this->getContext($context, "listAdvertSkills")));
            foreach ($context['_seq'] as $context["_key"] => $context["advertSkill"]) {
                // line 42
                echo "          <li>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["advertSkill"], "skill", array()), "name", array()), "html", null, true);
                echo " : niveau ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["advertSkill"], "level", array()), "html", null, true);
                echo "</li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['advertSkill'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "      </ul>
    </div>
  ";
        }
        // line 47
        echo "  <p>Nombre de personnes ayant postulé à cette annonce : ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "nbApplications", array()), "html", null, true);
        echo "
  </p>\t


    <a href=\"";
        // line 51
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_home");
        echo "\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
\t";
        // line 55
        if ($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array())) {
            // line 56
            echo "\t\t";
            if (($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "id", array()) === $this->getAttribute($this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "user", array()), "id", array()))) {
                // line 57
                echo "\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_edit", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\">
\t\t  <i class=\"glyphicon glyphicon-edit\"></i>
\t\t  Modifier l'annonce
\t\t</a>\t\t\t
\t\t<a href=\"";
                // line 61
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_delete", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-danger\">
\t\t  <i class=\"glyphicon glyphicon-trash\"></i>
\t\t  Supprimer l'annonce
\t\t</a>
\t\t";
            } else {
                // line 66
                echo "\t\t<a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("oc_platform_application", array("id" => $this->getAttribute(($context["advert"] ?? $this->getContext($context, "advert")), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default\"> Postuler</a>
\t\t";
            }
            // line 67
            echo "\t
\t";
        } else {
            // line 69
            echo "\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">Connectez-vous</a> pour postuler à cette annonce !
\t";
        }
        // line 70
        echo "\t
  

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "OCPlatformBundle:Advert:view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  243 => 70,  237 => 69,  233 => 67,  227 => 66,  219 => 61,  211 => 57,  208 => 56,  206 => 55,  199 => 51,  191 => 47,  186 => 44,  175 => 42,  171 => 41,  166 => 38,  164 => 37,  161 => 36,  157 => 34,  143 => 33,  137 => 32,  120 => 31,  116 => 29,  114 => 28,  108 => 25,  100 => 22,  96 => 21,  92 => 19,  86 => 16,  82 => 15,  79 => 14,  76 => 13,  72 => 10,  63 => 9,  50 => 6,  41 => 5,  11 => 3,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{# src/OC/PlatformBundle/Resources/view/Advert/view.html.twig #}

{% extends \"OCPlatformBundle::layout.html.twig\" %}

{% block title %}
  Lecture d'une annonce - {{ parent() }}
{% endblock %}

{% block ocplatform_body %}

  <div style=\"float: left; margin-right: 1em;\">
    {# On vérifie qu'une image soit bien associée à l'article #}
    {% if advert.image is not null %}
 <img
  src=\"{{ asset(advert.image.webPath) }}\"
  alt=\"{{ advert.image.alt }}\"
 width=\"200\" height=\"200\"/>
    {% endif %}
  </div>

  <h2>{{ advert.title }}</h2>
  <i>Par {{ advert.author }}, le {{ advert.date|date('d/m/Y') }}</i>

  <div class=\"well\">
    {{ advert.content }}
  </div>

  {% if not advert.categories.empty %}
    <p>
      Cette annonce est parue dans les catégories suivantes :
      {% for category in advert.categories %}
        {{ category.name }}{% if not loop.last %}, {% endif %}
      {% endfor %}
    </p>
  {% endif %}

  {% if listAdvertSkills|length > 0 %}
    <div>
      Cette annonce requiert les compétences suivantes :
      <ul>
        {% for advertSkill in listAdvertSkills %}
          <li>{{ advertSkill.skill.name }} : niveau {{ advertSkill.level }}</li>
        {% endfor %}
      </ul>
    </div>
  {% endif %}
  <p>Nombre de personnes ayant postulé à cette annonce : {{ advert.nbApplications }}
  </p>\t


    <a href=\"{{ path('oc_platform_home') }}\" class=\"btn btn-default\">
      <i class=\"glyphicon glyphicon-chevron-left\"></i>
      Retour à la liste
    </a>
\t{% if app.user %}
\t\t{% if app.user.id is same as (advert.user.id) %}
\t\t<a href=\"{{ path('oc_platform_edit', {'id': advert.id}) }}\" class=\"btn btn-default\">
\t\t  <i class=\"glyphicon glyphicon-edit\"></i>
\t\t  Modifier l'annonce
\t\t</a>\t\t\t
\t\t<a href=\"{{ path('oc_platform_delete', {'id': advert.id}) }}\" class=\"btn btn-danger\">
\t\t  <i class=\"glyphicon glyphicon-trash\"></i>
\t\t  Supprimer l'annonce
\t\t</a>
\t\t{% else %}
\t\t<a href=\"{{ path(\"oc_platform_application\", {'id': advert.id}) }}\" class=\"btn btn-default\"> Postuler</a>
\t\t{% endif %}\t
\t{% else %}
\t<a href=\"{{ path(\"fos_user_security_login\") }}\">Connectez-vous</a> pour postuler à cette annonce !
\t{% endif %}\t
  

{% endblock %}
", "OCPlatformBundle:Advert:view.html.twig", "C:\\wamp\\www\\Symfony3\\src\\OC\\PlatformBundle/Resources/views/Advert/view.html.twig");
    }
}
