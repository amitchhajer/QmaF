<?php

/* WebProfilerBundle:Profiler:toolbar_js.html.twig */
class __TwigTemplate_32a4e4dcdec56797518b90e9fede3f62 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div id=\"sfwdt";
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "\" style=\"display: none\"></div>
<script type=\"text/javascript\">/*<![CDATA[*/
    (function () {
        var wdt, xhr;
        wdt = document.getElementById('sfwdt";
        // line 5
        echo twig_escape_filter($this->env, $this->getContext($context, "token"), "html", null, true);
        echo "');
        if (window.XMLHttpRequest) {
            xhr = new XMLHttpRequest();
        } else {
            xhr = new ActiveXObject('Microsoft.XMLHTTP');
        }
        xhr.open('GET', '";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_wdt", array("token" => $this->getContext($context, "token"))), "html", null, true);
        echo "', true);
        xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
        xhr.onreadystatechange = function(state) {
            if (4 === xhr.readyState && 200 === xhr.status && -1 !== xhr.responseText.indexOf('sf-toolbarreset')) {
                wdt.innerHTML = xhr.responseText;
                wdt.style.display = 'block';
            }
        };
        xhr.send('');
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_js.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  34 => 11,  25 => 5,  17 => 1,  136 => 40,  133 => 39,  126 => 31,  123 => 30,  116 => 33,  114 => 30,  111 => 29,  108 => 28,  102 => 6,  95 => 47,  90 => 45,  87 => 44,  85 => 43,  81 => 41,  79 => 39,  75 => 37,  73 => 28,  70 => 27,  64 => 24,  61 => 23,  59 => 22,  47 => 13,  43 => 12,  31 => 6,  27 => 5,  21 => 1,  38 => 6,  35 => 7,  29 => 3,  24 => 9,);
    }
}
