<?php

require_once __DIR__ . '/vendor/autoload.php';
$mpdf = new \Mpdf\Mpdf();

if(isset($_POST["hidden_div_html"]) && $_POST["hidden_div_html"] != '')
{

    $html = $_POST["hidden_div_html"];
    $doc = new DOMDocument();
    @$doc->loadHTML($html);
    $tags = $doc->getElementsByTagName('img');
    $i=1;
    $result='';
    foreach ($tags as $tag) {
        $file_name = 'images/google_chart'.$i.'.png';
        
            $img_Src=$tag->getAttribute('src');
            
            file_put_contents($file_name, file_get_contents($img_Src));
            
        $res= '<img src="images/google_chart'.$i.'.png">';
        $result.=$res;
      $i++;
    }

    //include make_pdf

    $mpdf->allow_charset_conversion = true;
    $mpdf->SetDisplayMode('fullpage');

    $mpdf->list_indent_first_level = 0; // 1 or 0 - whether to indent the first level of a list
    $mpdf->WriteHTML($result);
    $mpdf->Output();
}
?>