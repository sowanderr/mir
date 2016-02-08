<? use yii\helpers\Html;
use dosamigos\ckeditor\CKEditorInline;


?>


<div class="class="container-fluid"">
    <div class="span12"
    <?php CKEditorInline::begin(['preset' => 'full']);?>
    осн
    <?php CKEditorInline::end();?>
<div class="row-fluid">
    <div class="span6">
<?php CKEditorInline::begin(['preset' => 'basic']);?>
basic
<?php CKEditorInline::end();?>
    <hr>
 </div>
</div>

<div class="row-fluid">
<div class="span6">
    <?php CKEditorInline::begin(['preset' => 'standart']);?>
   standart
    <?php CKEditorInline::end();?>
    <hr>
</div>
</div>
<div>
    <?php CKEditorInline::begin(['preset' => 'full']);?>
    full
    <?php CKEditorInline::end();?>
    <hr>

</div>
</div>
</div>



