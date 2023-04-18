<!--How to traverse students and print their names-->
<h1>Student Names</h1>
<ul>
    {% for student in students %}
    <li>
        {{ student.name |e }}
    </li>
    {% endfor %}
</ul>
