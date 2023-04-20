<!--They can be used to test if a variable has a valid expected value-->
<!--The operator 'is' is used to perform the tests-->
{% if number is defined %}
    The number is defined
{% endif %}

{% if number is empty %}
    The number is null or not defined
{% endif %}
<!--Check for even numbers-->
{% for key, name in [1: 'Table', 2: 'Chair', 3: 'Ladder'] %}
    {% if key is even %}
        {{ name }}
    {% endif %}
{% endfor %}
<!--Check for odd numbers-->
{% for key, name in [1: 'Table', 2: 'Chair', 3: 'Ladder'] %}
    {% if key is odd %}
        {{ name }}
    {% endif %}
{% endfor %}

{% set message = 'hello' %}
{% if message is sameas('hello') %}
    {{ 'it's hello' }}
{% endif %}