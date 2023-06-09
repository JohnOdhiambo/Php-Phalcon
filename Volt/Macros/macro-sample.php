{# Display a list of links to related topics #}
{%- macro related_bar(related_links) %}
    <ul>
        {% for link in related_links %}
        <li>
            <a href='{{ url(link.url) }}' title='{{ link.title|striptags }}'>
                {{ link.text }}
            </a>
        </li>
        {%- endfor%}
    </ul>
{%- endmacro%}

{# Print related links #}
{{ related_bar(links) }}
    