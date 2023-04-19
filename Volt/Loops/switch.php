{% switch day %}
    {% case 1 %}
        day = Sun
        {% break %}
    {% case 2 %}
        day = Mon
        {% break %}
    {% case 3 %}
        day = Tue
        {% break %}
    {% case 4 %}
        day = Wed
        {% break %}
    {% case 2 %}
        day = Thur
        {% break %}
    {% case 2 %}
        day = Fri
        {% break %}
    {% case 2 %}
        day = Sat
        {% break %}

    {% default %}
        {{These are the only days available}}
        
{% endswitch %}
    