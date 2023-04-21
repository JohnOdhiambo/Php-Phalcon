{# templates/base.volt #}
<!DOCTYPE html>
<html>
    <head>
        {% block head %}
            <link rel='stylesheet' href='style.css' />
        {% endblock %}

        <title>{% block title %}{% endblock %} - Main Webpage</title>
    </head>

    <body>
        <div id='content'>{% block content %}{% endblock %}</div>

        <div id='footer'>
            {% block footer %}
                &copy; Copyright 2023. 
                All rights reserved.
            {% endblock %}
        </div>
    </body>
</html>