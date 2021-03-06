<!DOCTYPE html><html><head><meta content='' name='description'>
<meta charset='UTF-8'>
<meta content='True' name='HandheldFriendly'>
<meta content='width=device-width, initial-scale=1.0' name='viewport'>
<title><?php echo $title;?>- <?php echo $settings['site_name'];?></title>
<?php echo $this->load->view('common/header-meta');?>
</head>
<body id="startbbs">
<?php echo $this->load->view('common/header');?>

<div id="wrap"><div class="container" id="page-main"><div class="row"><div class='col-xs-12 col-sm-6 col-md-8'>

<div class='box'>
<div class='cell' style="border-bottom-style: none;">
<a href="<?php echo site_url()?>" class="startbbs"><?php echo $settings['site_name']?></a> <span class="chevron">&nbsp;›&nbsp;</span> 设置
    <ul class="nav nav-tabs" style="margin-top:10px;">
    <li>
    <a href="<?php echo site_url('settings/profile');?>">个人信息</a>
    </li>
    <li><a href="<?php echo site_url('settings/avatar');?>">头像</a></li>
    <li class="active"><a href="#">修改密码</a></li>
    </ul>
</div>
<span style="color:red" id="error"><?php echo isset($msg)?$msg:''; ?></span>
<div class='inner'>
<form accept-charset="UTF-8" action="<?php echo site_url('settings/password');?>" class="simple_form form-horizontal" id="edit_user_313" method="post" novalidate="novalidate">
<input type="hidden" name="<?php echo $csrf_name;?>" value="<?php echo $csrf_token;?>">
<strong class='fade'>如果你不想更改密码，请留空以下输入框。</strong>
<div class='sep5'></div>
<div class="form-group">
<label class="col-sm-3 control-label" for="user_current_password">当前密码</label>
<div class="col-sm-5">
<input class="form-control" id="user_current_password" name="password" value="<?php echo set_value('password'); ?>" size="50" type="password" />
<span class="help-block red"><?php echo form_error('password');?></span>
</div></div>
<div class="form-group">
<label class="col-sm-3 control-label" for="user_password">新密码</label>
<div class="col-sm-5">
<input class="form-control" id="user_password" name="newpassword" value="<?php echo set_value('newpassword'); ?>" size="50" type="password" />
<span class="help-block red"><?php echo form_error('newpassword');?></span>
</div></div>
<div class="form-group">
<label class="col-sm-3 control-label" for="user_password_confirmation">新密码确认</label>
<div class="col-sm-5">
<input class="form-control" id="user_password_confirmation" name="newpassword2" value="<?php echo set_value('newpassword2'); ?>" size="50" type="password" />
<span class="help-block red"><?php echo form_error('newpassword2');?></span>
</div></div>

<div class='form-group'>
	<div class="col-sm-offset-3 col-sm-9">
		<button type="submit" name="commit" class="btn btn-primary">修改密码</button>
	</div>
</div>
</form>

</div>
</div>

</div>
<div class='col-xs-12 col-sm-6 col-md-4' id='Rightbar'>
<?php $this->load->view('common/sidebar_login')?>

<?php $this->load->view('common/sidebar_ad');?>

</div>
</div></div></div>
<?php $this->load->view('common/footer');?>
</body>
</html>