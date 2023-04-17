
{% for invoice in invoices %}
<div class='row'>
    <div>
        ID: {{ invoice.titleinv_id }}
    </div>
    <div>
        {%- if 1 === invoice.titleinv_status_flag -%}
        Paid
        {%- else -%}
        Unpaid
        {%- endif -%}
    </div>
    <div>
        {{ invoice.titleinv_description }}
    </div>
    <div>
        {{ invoice.titleinv_total }}
    </div>
</div>
{% endfor %}