<?php
require_once "chartjs.php";
?>

<div class="container" id="Chart_details">
    <div id='chart_div'></div><div id='g_chart_1'></div>
    <div id='chart_div1'></div><div id='g_chart_2'></div>
</div>
<div align="center">
    <form method="post" id="new_pdf" action="index2.php">
        <input type="hidden" name="hidden_div_html" id="hidden_div_html" />
        <button type="button" name="create_pdf" id="create_pdf" class="btn btn-danger btn-xs">Create PDF</button>
    </form>
</div>

<script>
$(document).ready(function(){
    $('#create_pdf').click(function(){
        $('#hidden_div_html').val($('#Chart_details').html());
        $('#new_pdf').submit();
    });
});
</script>