<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title></title>

<link rel="stylesheet" href="/think/Public/css/bookscrap/font-awesome.min.css">

<link rel='stylesheet prefetch' href='/think/Public/css/bookscrap/bootstrap.min.css'>

<link rel="stylesheet" href="/think/Public/css/bookscrap/style.css" media="screen" type="text/css" />

</head>

<body class="login-page">

<div class="login-form">

		<div class="login-content">

			<div class="form-login-error">
				<h3>HCP Portal</h3>
				<!-- <p>Welcome to <strong>demo</strong>/<strong>demo</strong> HCP Portal family.</p> -->
			</div>
 				<form name="frm_logon" action="/think/index.php/Home/MobileIndex/login"
				autocomplete='off' id="frm_logon" method="post" role="form">
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-lang"></i>
						</div>
						<select class="form-control" name="lang" id="lang" autocomplete="off">
							<?php if(is_array($Mut)): foreach($Mut as $key=>$vo): ?><option value="<?php echo ($vo["language_code"]); ?>">
							<?php echo ($vo["language_code"]); ?>/<?php echo ($vo["language_name"]); ?>
							</option><?php endforeach; endif; ?>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-company"></i>
						</div>
						<select class="form-control" name="companyno" id="companyno" autocomplete="off">
							<?php if(is_array($Com)): foreach($Com as $key=>$vo): ?><option value="<?php echo ($vo["segment_no_sz"]); ?>"  <?php if(($vo["id"] == $data.id)): endif; ?>>
								<?php echo ($vo["segment_no_sz"]); ?>/<?php echo ($vo["segment_name"]); ?>
							</option><?php endforeach; endif; ?>
						</select>
					</div>
				</div>
				
				<div class="form-group">
					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-user"></i>
						</div>

						<input type="text" class="form-control" name="username" id="username" placeholder="Username" autocomplete="off" />
					</div>

				</div>

				<div class="form-group">

					<div class="input-group">
						<div class="input-group-addon">
							<i class="fa fa-key"></i>
						</div>
						<input type="password" class="form-control" name="password" id="password" placeholder="Password" autocomplete="off" />
					</div>

				</div>

				<div class="form-group">
					<button type="submit" class="btn btn-primary btn-block btn-login" id="submit">
						<i class="fa fa-sign-in"></i>
						Login In
					</button>
				</div>

				<!-- <div class="form-group">
					<em>- or -</em>
				</div> -->
				
				<!-- <div class="form-group" >
										<img src="/think/Public/img/error.png"
											 alt="" />
										<?php echo ($smarty["get"]["loginerror"]); ?>
									</div> -->

				<div class="form-group">

					<button type="button" class="btn btn-default btn-lg btn-block facebook-button">
						&#160;&#160;
						<i class="fa fa-facebook"></i>
               |  Login with weChat
					</button>

				</div>
			</form>	
		</div>

	</div>
 </div>

</body>
<script type="text/javascript" src="/think/Public/js/jquery-1.1.1.js"></script>
<script type="text/javascript">
/* $(function(){
    $('.submit').click(function(event){
      event.preventDefault();	
      var userName=$("#username").val();
      var userPassword=$("#password").val();
      if(userName==""||userPassword==""){
    	  alert('登录名或密码不能为空');
    	  $('#username').focus();
    	  return false;
      }else{
    	  
      }
    })  
  } */
  
  $(document).ready(function(){
	  $("#submit").click(function(){
		var username = $("username").val();
		var password = $("password").val();
		$.ajax({
			type:"get",
			url:"index.php?m=home&c=index",
			dateType:"json",
			date:{"username":username,"password":password}
		})
	  })
  })
</script>


</html>