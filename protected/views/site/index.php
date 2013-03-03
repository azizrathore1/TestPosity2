<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

<h1>Welcome to <i><?php echo CHtml::encode(Yii::app()->name); ?></i></h1>

<p>Congratulations! You have successfully Login Postify Postcards application.</p>
<div style="width:100%; float:left;">      
<h1>Create postcard</h1>
    <p> Postify helps you turn your favorite digital moments from your computer, mobile phone or from Facebook into real quality postcards. In a few simple steps, you create something unique and personal, without even having to go to the mailbox.</p>
<p>It's easy to send a smile with Postify!</p>
</div>

<?php 
	//echo Yii::app()->session['var'];
	//$data = Login_info::model()->findByAttributes(array('user_id'=> Yii::app()->session['var']));
	$u_id= Yii::app()->session['var'];
	$sql = "SELECT login_time FROM  login_info WHERE user_id = $u_id LIMIT 0 , 5";
	$data =Login_info::model()->findAllBySql($sql);

?>


<table cellpadding="0" cellspacing="0" border="0">
    <thead>
        <tr>
          <th colspan="2">Most Recentely login</th>
        </tr>
    </thead>
    <tbody>
    	<td>
    		<?php
    		 foreach($data as $row){
    		 //echo CHtml::encode($row);
    		 	echo ($row->login_time);
    		 	echo "<br>";
    		 }
    		?>
    	</td>
    </tbody>
</table>
	


