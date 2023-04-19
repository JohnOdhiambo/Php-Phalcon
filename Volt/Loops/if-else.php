<h1>Students</h1>
<ul>
    {% for student in Students %}
        {% if student.course === 'BBIT' %}
            <li>{{ Offer Certificate }}</li>
        {% else %}
            <li>{{ Not qualified }}</li>
        {% endif %}
    {% endfor %}
</ul>