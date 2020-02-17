<?php 
require_once ('jpgraph/jpgraph.php');
require_once ('jpgraph/jpgraph_scatter.php');
$datax = array(1,2,3,4,5,6,7,8);
$datay = array(12,23,95,18,65,28,86,44);
function FCallback($aVal) {
    // This callback will adjust the fill color and size of
    // the datapoint according to the data value according to
    if( $aVal < 30 ) $c = "blue";
    elseif( $aVal < 70 ) $c = "green";
    else $c="red";
    return array(floor($aVal/3),"",$c);
}
$graph = new Graph(400,300,'auto');
$graph->SetScale("linlin");
$graph->img->SetMargin(40,100,40,40);		
$graph->SetShadow();
$graph->title->Set("Example of ballon scatter plot");
$graph->yaxis->scale->SetGrace(50,10);

$graph->xaxis->SetPos('min');

$sp1 = new ScatterPlot($datay,$datax);
$sp1->mark->SetType(MARK_FILLEDCIRCLE);

$sp1->value->Show();
$sp1->value->SetFont(FF_FONT1,FS_BOLD);

$sp1->mark->SetCallback("FCallback");

$sp1->SetLegend('Year 2002');

$graph->Add($sp1);

$graph->Stroke();

?>
