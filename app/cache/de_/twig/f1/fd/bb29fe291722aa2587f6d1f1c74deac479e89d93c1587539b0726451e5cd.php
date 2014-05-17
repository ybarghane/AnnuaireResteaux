<?php

/* AnnuaireUserBundle:Secured:hello.html.twig */
class __TwigTemplate_f1fdbb29fe291722aa2587f6d1f1c74deac479e89d93c1587539b0726451e5cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('content', $context, $blocks);
    }

    public function block_content($context, array $blocks = array())
    {
        // line 2
        echo "    <div id=\"fb-root\"></div>
    <script>
        window.fbAsyncInit = function() {
            // init the FB JS SDK
            FB.init({
                appId      : '683397398364267',                        // App ID from the app dashboard
                channelUrl : 'http://localhost/Restos',      // Channel file for x-domain comms
                status     : true,                                 // Check Facebook Login status
                xfbml      : true                                  // Look for social plugins on the page
            });
        };

        // Load the SDK asynchronously
        (function(d, s, id){
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) {return;}
            js = d.createElement(s); js.id = id;
            js.src = \"//connect.facebook.net/en_US/all.js\";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));

        function fb_login() {
            FB.getLoginStatus(function(response) {
                if (response.status === 'connected') {
                    // connected
                    alert('Already connected, redirect to login page to create token.');
                    document.location = \"";
        // line 28
        echo $this->env->getExtension('routing')->getUrl("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\";
                } else {
                    // not_authorized
                    FB.login(function(response) {
                        if (response.authResponse) {
                            document.location = \"";
        // line 33
        echo $this->env->getExtension('routing')->getUrl("hwi_oauth_service_redirect", array("service" => "facebook"));
        echo "\";
                        } else {
                            alert('Cancelled.');
                        }
                    }, {scope: 'email'});
                }
            });
        }
    </script>

    <h1 class=\"title\">Hello ";
        // line 43
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "!</h1>

    <a href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("_demo_secured_hello_admin", array("name" => (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")))), "html", null, true);
        echo "\">Hello resource secured for <strong>admin</strong> only.</a>

    <p>
        <a href=\"#\" onclick=\"fb_login();\">Facebook Connect Button (Dialog)</a>
    </p>

    ";
        // line 52
        echo "    ";
        echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('http_kernel')->controller("HWIOAuthBundle:Connect:connect"), array());
    }

    public function getTemplateName()
    {
        return "AnnuaireUserBundle:Secured:hello.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 4,  20 => 1,  126 => 52,  90 => 27,  81 => 24,  77 => 22,  53 => 12,  218 => 128,  215 => 127,  210 => 123,  207 => 122,  202 => 74,  191 => 16,  188 => 15,  174 => 127,  170 => 125,  100 => 27,  97 => 65,  65 => 17,  58 => 18,  34 => 7,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 81,  252 => 80,  247 => 78,  241 => 77,  229 => 73,  220 => 70,  214 => 69,  177 => 65,  169 => 60,  140 => 55,  132 => 51,  128 => 49,  107 => 36,  61 => 15,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 74,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 61,  143 => 56,  135 => 53,  119 => 42,  102 => 32,  71 => 19,  67 => 20,  63 => 19,  59 => 14,  38 => 8,  94 => 28,  89 => 52,  85 => 25,  75 => 43,  68 => 14,  56 => 15,  87 => 25,  21 => 2,  26 => 2,  93 => 29,  88 => 6,  78 => 21,  46 => 11,  27 => 5,  44 => 7,  31 => 6,  28 => 5,  201 => 92,  196 => 90,  183 => 82,  171 => 61,  166 => 71,  163 => 62,  158 => 67,  156 => 66,  151 => 63,  142 => 59,  138 => 54,  136 => 56,  121 => 77,  117 => 76,  105 => 40,  91 => 27,  62 => 33,  49 => 13,  24 => 7,  25 => 3,  19 => 1,  79 => 18,  72 => 22,  69 => 22,  47 => 9,  40 => 11,  37 => 9,  22 => 3,  246 => 90,  157 => 56,  145 => 46,  139 => 45,  131 => 52,  123 => 47,  120 => 40,  115 => 73,  111 => 37,  108 => 37,  101 => 32,  98 => 31,  96 => 31,  83 => 25,  74 => 14,  66 => 15,  55 => 14,  52 => 10,  50 => 10,  43 => 12,  41 => 9,  35 => 8,  32 => 4,  29 => 6,  209 => 82,  203 => 78,  199 => 73,  193 => 73,  189 => 71,  187 => 84,  182 => 99,  176 => 131,  173 => 65,  168 => 122,  164 => 84,  162 => 57,  154 => 58,  149 => 51,  147 => 58,  144 => 67,  141 => 48,  133 => 55,  130 => 41,  125 => 44,  122 => 43,  116 => 41,  112 => 72,  109 => 34,  106 => 69,  103 => 28,  99 => 31,  95 => 64,  92 => 21,  86 => 26,  82 => 22,  80 => 45,  73 => 20,  64 => 17,  60 => 16,  57 => 14,  54 => 28,  51 => 13,  48 => 12,  45 => 17,  42 => 10,  39 => 9,  36 => 7,  33 => 7,  30 => 2,);
    }
}
