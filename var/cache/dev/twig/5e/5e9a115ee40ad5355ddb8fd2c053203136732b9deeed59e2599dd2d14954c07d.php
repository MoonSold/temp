<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html.twig */
class __TwigTemplate_f64414f28c0ce855425ec01b730351d470edaa4a8675e19615ac5ad24adcc700 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
         <script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
         <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
        
    </head>
    <body>
            <canvas id=\"temperatureChart\" width=\"600\" height=\"400\"></canvas>
            <script>
                function generateRandomTemperature() {
                    var request = new XMLHttpRequest();
                    request.open('GET', 'check', false);  // `false` makes the request synchronous
                    request.send(null);
                    if (request.status === 200) {// That's HTTP for 'ok'
                        return request.responseText;
                    }
                }

                function updateChartData(chart) {
                    const temperature = generateRandomTemperature();
                    console.log('Температура на датчике:', temperature);
                    const newDataPoint = generateRandomTemperature();
                    const currentData = chart.data.datasets[0].data;
                    currentData.shift();
                    currentData.push(newDataPoint);
                    const currentLabels = chart.data.labels;
                    const lastLabelNumber = parseInt(currentLabels[currentLabels.length - 1]);
                    const newLabel = `\${lastLabelNumber + 1}`;
                    currentLabels.shift();
                    currentLabels.push(newLabel);
                    chart.update(); // Update the chart
                }

                var ctx = document.getElementById('temperatureChart').getContext('2d');

                var data = {
                    labels: Array.from({ length: 7 }, (_, i) => `\${i + 1}`),
                    datasets: [{
                        label: 'Temperature',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1,
                        data: Array.from({ length: 7 }, () => generateRandomTemperature())
                    }]
                };
                var options = {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                };

                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: data,
                    options: options
                });
                setInterval(function() {
                    updateChartData(myChart);
                }, 6000);
    </script>
    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "base.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>{% block title %}Welcome!{% endblock %}</title>
         <script src=\"https://code.jquery.com/jquery-3.6.4.min.js\"></script>
         <script src=\"https://cdn.jsdelivr.net/npm/chart.js\"></script>
        
    </head>
    <body>
            <canvas id=\"temperatureChart\" width=\"600\" height=\"400\"></canvas>
            <script>
                function generateRandomTemperature() {
                    var request = new XMLHttpRequest();
                    request.open('GET', 'check', false);  // `false` makes the request synchronous
                    request.send(null);
                    if (request.status === 200) {// That's HTTP for 'ok'
                        return request.responseText;
                    }
                }

                function updateChartData(chart) {
                    const temperature = generateRandomTemperature();
                    console.log('Температура на датчике:', temperature);
                    const newDataPoint = generateRandomTemperature();
                    const currentData = chart.data.datasets[0].data;
                    currentData.shift();
                    currentData.push(newDataPoint);
                    const currentLabels = chart.data.labels;
                    const lastLabelNumber = parseInt(currentLabels[currentLabels.length - 1]);
                    const newLabel = `\${lastLabelNumber + 1}`;
                    currentLabels.shift();
                    currentLabels.push(newLabel);
                    chart.update(); // Update the chart
                }

                var ctx = document.getElementById('temperatureChart').getContext('2d');

                var data = {
                    labels: Array.from({ length: 7 }, (_, i) => `\${i + 1}`),
                    datasets: [{
                        label: 'Temperature',
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1,
                        data: Array.from({ length: 7 }, () => generateRandomTemperature())
                    }]
                };
                var options = {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                };

                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: data,
                    options: options
                });
                setInterval(function() {
                    updateChartData(myChart);
                }, 6000);
    </script>
    </body>
</html>
", "base.html.twig", "/home/nikita/site/templates/base.html.twig");
    }
}
