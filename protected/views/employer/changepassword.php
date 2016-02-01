<div class="form" style="">
  <h1>修改密码</h1> 
  <?php $form=$this->beginWidget('CActiveForm', array(
      'id'=>'account-form',
      'enableClientValidation'=>true,
      'enableAjaxValidation'=>false,
  )); ?>
 
 <?php //echo $form->errorSummary($model); ?>
 
    <div class="row">
        <?php echo $form->labelEx($model,'old_password'); ?>
        <?php echo $form->error($model,'old_password'); ?>
        <?php echo $form->passwordField($model,'old_password',array('size'=>60,'maxlength'=>128,'class'=>'pwd_pro_input')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'new_password'); ?>
        <?php echo $form->error($model,'new_password'); ?>
        <?php echo $form->passwordField($model,'new_password',array('size'=>60,'maxlength'=>128,'class'=>'pwd_pro_input')); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model,'repeat_password'); ?>
        <?php echo $form->error($model,'repeat_password'); ?>
        <?php echo $form->passwordField($model,'repeat_password',array('size'=>60,'maxlength'=>128,'class'=>'pwd_pro_input')); ?>
    </div>

    <div class="row buttons small">
        <?php echo CHtml::submitButton('修改密码',array('class'=>'btn_reset')); ?>
        <a href="javascript:history.back();" class="back-link">取消</a>
    </div>

    <div id="keyboard">
      <span class="number">0</span>
      <span class="number">1</span>
      <span class="number">2</span>
      <span class="number">3</span>
      <span class="number">4</span>
      <span class="number">5</span>
      <span class="number">6</span>
      <span class="number">7</span>
      <span class="number">8</span>
      <span class="number">9</span>
      <span class="delete">删除</span>
      <span class="removeAll">清空</span>
      <span class="confirm">确定</span>
    </div>
 
<?php $this->endWidget(); ?>

<?php
Yii::app()->clientScript->registerScript('password', "

  var keyboard = $('#keyboard');

  // password keyboard
  $('input[type=password]').click(function(){
    $(this).parent('.row').append(keyboard);
    keyboard.slideToggle(300);
  });

  $('#keyboard span').click(function(){
    var className = $(this).attr('class');
    var pwdInput = $(this).parent('#keyboard').siblings('input[type=password]');
    switch (className) {
      case 'number':
        var value = $(this).html();
        pwdInput.val(pwdInput.val() + value);
        pwdInput.focus();
        break;
      case 'delete':
        var str = pwdInput.val();
        var newStr = str.substring(0, str.length-1);
        pwdInput.val(newStr);
        pwdInput.focus();
        break;
      case 'removeAll':
        pwdInput.val('');
        pwdInput.focus();
        break;
      case 'confirm':
        keyboard.slideUp();
        break;
      default:
        keyboard.slideUp();
        break;
    }
    
  });

  ");
?>

