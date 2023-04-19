<!-- Variables may be changed using the keyword set -->

<!--Single Assignment-->
{% set cars = ['Audi', 'Mercedes', 'Volkswagen' ] %}
{% set model = car.carModel %}
<!--Multiple Assignment-->
{% set cars = ['Audi', 'Mercedes', 'Volkswagen'], make = car.carMake, active = true %}

<!--Compound assignment operators-->
{% set yearofmanufacture += 100.00% } <!--Addition assignment-->
{% set price *= 2 %}                  <!--Multiplication assignment-->
{{ (1 + 1) * 2 }}                     <!--Evaluate and print-->
{% do (1 + 1) * 2 %}                  <!--Evaluate without printing-->
{{ 8 / 4 }}                           <!--Division-->

<!--Array Formats-->
{{ ['Audi', 'Mercedes', 'Volkswagen'] }}
{{ ['Audi', 3, true, null ] }}
{{ [[2,4], [6,12], [8,16]] }}                   <!--Multi-dimensional array-->
{{ ['first': 1, 'second': 4/2, 'third': '3'] }} <!--Hash-style array-->
