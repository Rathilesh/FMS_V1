<?php
/* @var $this HRMessageController */
/* @var $dataProvider CActiveDataProvider */

?>

<h1>Hrmessages</h1>
<?php
$data = array();
foreach($model as $m){  // loop to get the data (this is different from the complex way)
$data[] = $m->attributes;
}
print_r($data);

// the pagination widget with some options to mess
$this->widget('CLinkPager', array(
            'currentPage'=>$pages->getCurrentPage(),
            'itemCount'=>$item_count,
            'pageSize'=>$page_size,
            'maxButtonCount'=>5,
            //'nextPageLabel'=>'My text >',
            'header'=>'',
        'htmlOptions'=>array('class'=>'pages'),
        ));
?>