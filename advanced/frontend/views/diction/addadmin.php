<?php
use yii\widgets\ActiveForm;
?>
<!DOCTYPE html>
<html lang="zh-cn">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<meta name="renderer" content="webkit">
<title></title>
<link rel="stylesheet" href="css/pintuer.css">
<link rel="stylesheet" href="css/admin.css">
</head>
<body>
<div class="panel admin-panel margin-top">
  <div class="panel-head" id="add"><strong><span class="icon-pencil-square-o"></span>添加管理员</strong></div>
  <div class="body-content">
    <form method="post" class="form-x" action="?r=diction/addadmin" enctype="multipart/form-data">
      <div class="form-group">
        <div class="label">
          <label>名称：</label>
        </div>
        <div class="field">
          <input type="text" class="input w50" name="admin_name" value="" data-validate="required:请输入分类标题"  />
          <div class="tips"></div>
        </div>
      </div>
        <div class="form-group">
            <div class="label">
                <label>头像：</label>
            </div>
            <div class="field">
                <input type="file" name="admin_img[]"/>
                <div class="tips"></div>
            </div>
        </div>
        <div class="form-group">
            <div class="label">
                <label>电话：</label>
            </div>
            <div class="field">
                <input type="text" class="input w50" name="admin_tel" value="" data-validate="required:请输入分类标题"  />
                <div class="tips"></div>
            </div>
        </div>
        <div class="form-group">
            <div class="label">
                <label>角色：</label>
            </div>
            <div class="field">
                <?php foreach ($arr as $k=>$v):?>
                    <input  type='checkbox' name='role[]' value="<?=$v['role_id']?>"/><?=$v['role_name']?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php endforeach;?>
                <div class="tips"></div>
            </div>
        </div>
        <div class="form-group">
            <div class="label">
                <label>密码：</label>
            </div>
            <div class="field">
                <input type="text" class="input w50" name="admin_pwd" value="" data-validate="required:请输入分类标题"  />
                <div class="tips"></div>
            </div>
        </div>
      <div class="form-group">
        <div class="label">
          <label></label>
        </div>
        <div class="field">
          <button class="button bg-main icon-check-square-o" type="submit"> 提交</button>
        </div>
      </div>
    </form>
  </div>
</div>
</body>
<script src="js/jquery.js"></script>
<script src="js/pintuer.js"></script>
<script>

</script>
</html>