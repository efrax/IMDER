<?php

/* @WebProfiler/Profiler/base_js.html.twig */
class __TwigTemplate_3c3b897c12a53b61c3ec7b03ca5b0ca134e16c54961a25fa31e10a87592c29ea extends Twig_Template
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
        echo "<script>/*<![CDATA[*/
    Sfjs = (function() {
        \"use strict\";

        var noop = function() {},

            profilerStorageKey = 'sf2/profiler/',

            request = function(url, onSuccess, onError, payload, options) {
                var xhr = window.XMLHttpRequest ? new XMLHttpRequest() : new ActiveXObject('Microsoft.XMLHTTP');
                options = options || {};
                xhr.open(options.method || 'GET', url, true);
                xhr.setRequestHeader('X-Requested-With', 'XMLHttpRequest');
                xhr.onreadystatechange = function(state) {
                    if (4 === xhr.readyState && 200 === xhr.status) {
                        (onSuccess || noop)(xhr);
                    } else if (4 === xhr.readyState && xhr.status != 200) {
                        (onError || noop)(xhr);
                    }
                };
                xhr.send(payload || '');
            },

            hasClass = function(el, klass) {
                return el.className.match(new RegExp('\\\\b' + klass + '\\\\b'));
            },

            removeClass = function(el, klass) {
                el.className = el.className.replace(new RegExp('\\\\b' + klass + '\\\\b'), ' ');
            },

            addClass = function(el, klass) {
                if (!hasClass(el, klass)) { el.className += \" \" + klass; }
            },

            getPreference = function(name) {
                if (!window.localStorage) {
                    return null;
                }

                return localStorage.getItem(profilerStorageKey + name);
            },

            setPreference = function(name, value) {
                if (!window.localStorage) {
                    return null;
                }

                localStorage.setItem(profilerStorageKey + name, value);
            };

        return {
            hasClass: hasClass,

            removeClass: removeClass,

            addClass: addClass,

            getPreference: getPreference,

            setPreference: setPreference,

            request: request,

            load: function(selector, url, onSuccess, onError, options) {
                var el = document.getElementById(selector);

                if (el && el.getAttribute('data-sfurl') !== url) {
                    request(
                        url,
                        function(xhr) {
                            el.innerHTML = xhr.responseText;
                            el.setAttribute('data-sfurl', url);
                            removeClass(el, 'loading');
                            (onSuccess || noop)(xhr, el);
                        },
                        function(xhr) { (onError || noop)(xhr, el); },
                        options
                    );
                }

                return this;
            },

            toggle: function(selector, elOn, elOff) {
                var i,
                    style,
                    tmp = elOn.style.display,
                    el = document.getElementById(selector);

                elOn.style.display = elOff.style.display;
                elOff.style.display = tmp;

                if (el) {
                    el.style.display = 'none' === tmp ? 'none' : 'block';
                }

                return this;
            }
        }
    })();
/*]]>*/</script>
";
    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/base_js.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  91 => 35,  79 => 29,  70 => 26,  66 => 25,  62 => 24,  50 => 15,  46 => 14,  30 => 5,  26 => 3,  24 => 2,  19 => 1,  215 => 52,  205 => 50,  195 => 48,  185 => 46,  180 => 45,  175 => 53,  166 => 50,  163 => 49,  160 => 48,  157 => 47,  154 => 46,  152 => 45,  149 => 44,  140 => 5,  127 => 56,  125 => 55,  123 => 43,  109 => 35,  105 => 34,  101 => 33,  87 => 28,  83 => 30,  78 => 25,  67 => 21,  61 => 17,  57 => 16,  52 => 15,  48 => 12,  43 => 10,  40 => 8,  210 => 51,  200 => 49,  198 => 86,  193 => 82,  190 => 47,  186 => 71,  183 => 70,  179 => 66,  176 => 65,  172 => 52,  169 => 51,  165 => 55,  162 => 54,  158 => 43,  155 => 42,  150 => 24,  146 => 43,  142 => 18,  138 => 17,  135 => 16,  132 => 15,  126 => 210,  124 => 81,  113 => 36,  111 => 70,  106 => 67,  104 => 65,  99 => 62,  97 => 32,  93 => 31,  90 => 56,  88 => 54,  85 => 53,  75 => 28,  73 => 24,  55 => 26,  45 => 10,  38 => 5,  35 => 5,  53 => 15,  49 => 13,  42 => 12,  39 => 7,  32 => 6,  29 => 1,);
    }
}
