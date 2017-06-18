


<div class="col-md-4 img-portfolio">
   
    <h3><?php echo $data->part_name; ?></h3>
    <p>Tervezett kiadás:   <?php echo Yii::app()->dateFormatter->format('yyyy.MM.dd',$data->sheduled_release_date); ?> </p>
</div>