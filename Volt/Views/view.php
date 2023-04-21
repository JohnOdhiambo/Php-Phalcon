{# Volt is integrated with Phalcon\Mvc\View #}
{# partial allows you to include templates made in Volt and in other template engines. #}
{# include only allows one to include templates made with Volt. #}
{{ content }}
<div id='main-content'>
    {{ partial('partials/main-content') }}
    {{ partial('partials/main-content', ['links' : links])  }}
</div>

{# Volt also provides include #}
<div id="main-content">
    {{% include 'partials/main-content' %}}
    {% include 'partials/main-content' with ['links': links] %}
</div>

