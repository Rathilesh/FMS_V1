<?php
//get user theme and add session variable
// $cntCriteria = new CDbCriteria();
// $cntCriteria->condition = "User_ID = :personID";
// $cntCriteria->params[':personID'] = Yii::app()->user->id;
// $ThemeCount = Theme_Management::model()->count($cntCriteria);
// if($ThemeCount==0) 
//     {
//       Yii::app()->session['css_theme_rst'] ="blue";
//     }
// else 
//     {
//         $condition="User_ID=".Yii::app()->user->id;
//         $Theme_rst=  Theme_Management::model()->find($condition);
//         Yii::app()->session['css_theme_rst']  = $Theme_rst->THEME; 

//     }            
// //end
// $this->pageTitle=Yii::app()->name . ' - About';
//echo "here";
?>
<!--<script>
$(document).ready(function(){
   $("#hoverid").hover(function(){
       $("#hoverid").append("<div style=");
   });
});
</script>-->
<!--<h1>About</h1>-->

<div style="width:50%; float: left; height: auto">
<?php
$this->Widget('ext.highcharts.HighchartsWidget', array(
   'options'=>array(
       'exporting' => array('enabled' => TRUE),
      'title' => array('text' => 'Status'),
       'subtitle' => array('text' => 'eHORIZON HRMS'),
      'xAxis' => array(
         'categories' => array('NOV', 'DEC', 'JAN')
      ),
      'yAxis' => array(
         'title' => array('text' => 'Point')
      ),
      'series' => array(
         array('name' => 'UTPAL', 'data' => array(1, 0, 4)),
         array('name' => 'LOKSORF', 'data' => array(5, 7, 3))
      )
   )
));
?>
<!--<script type='text/javascript' src='https://www.google.com/jsapi'></script>
    <script type='text/javascript'>
      google.load('visualization', '1', {packages:['orgchart']});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Name');
        data.addColumn('string', 'Manager');
        data.addColumn('string', 'ToolTip');
        data.addRows([
          [{v:'Mike', f:'Mike<div style="color:red; font-style:italic">President</div>'}, '', 'The President'],
          [{v:'Jim', f:'Jim<div style="color:red; font-style:italic">Vice President</div>'}, 'Mike', 'VP'],
          ['Alice', 'Mike', ''],
          ['Bob', 'Jim', 'Bob Sponge'],
          ['Carol', 'Bob', '']
        ]);
        var chart = new google.visualization.OrgChart(document.getElementById('chart_div'));
        chart.draw(data, {allowHtml:true});
      }
    </script>
<div id='chart_div'></div>-->


</div>
<div style="width:50%; float: right; height: auto">
<?php
$this->widget('ext.highcharts.HighchartsWidget',array(
        'options' => array(
                'title' => array('text' => 'User Roles'),
                'subtitle' => array('text' => 'eHORIZON HRMS'),

                'series' => array(array(
                        'type' => 'pie',
                    'allowPointSelect'=> true,
                        'data' => array(

                                array('LAKSORF', 26.6),
                                array('SEDEEFS', 20),
                                array('UTPAL', 44.2),
//                                array('Chrome', 3.1),
//                                array('Other', 5.4)
                        )
                ))
        )
));

?>
</div>



