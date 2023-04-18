<h1>Students</h1>

{% student in students %}
    {% for course in student.Courses %}
    Course: {{ course.crs_title|e }} {{course.enr_key|e}} <br />
    {% endfor %}
{% endfor %}