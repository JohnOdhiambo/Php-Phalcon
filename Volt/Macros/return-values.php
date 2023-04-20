{# Macros can return values #}

{%- macro input(name, class) %}
    {% return text_field(name, 'class': class) %}
{%- endmacro %}

{# Call the macro #}
{{ '<p>' ~ input('name', 'input-text') ~ '</p>' }}

{# Macros can also receive optional parameters #}
{%- macro input(name, class='input-text') %}
    {% return text_field(name, 'class': class) %}
{%- endmacro %}

{# Call the macro #}
{{ '<p>' ~ input('name') ~ '</p>' }}
{{ '<p>' ~ input('name', 'input-text') ~ '</p>' }}