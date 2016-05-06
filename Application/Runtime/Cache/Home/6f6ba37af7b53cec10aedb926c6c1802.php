<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<title>模板之家</title>
<!-- meta tags start -->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="Keywords" content="blinds, premium, mobile, template, HTML, Css" />
<meta name="Description" content="Premium mobile HTML/CSS template." />
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
<!-- meta tags end -->
<!-- favorite icon starts -->
<link rel="shortcut icon" href="images/common/favicon.ico" type="image/x-icon" />
<!-- favorite icon ends -->
<!-- CSS files start -->
<link href="css/framework.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/colorbox.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/elements.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/responsive.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/hidpi.css" rel="stylesheet" type="text/css" media="screen" />
<link href="css/skin.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/custom.css" rel="stylesheet" type="text/css" media="all" />
<!-- CSS files end -->
<!-- JavaScript files start -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/effects.jquery-ui.min.js"></script>
<script type="text/javascript" src="js/jquery.nivo-slider.min.js"></script>
<script type="text/javascript" src="js/jquery.colorbox.min.js"></script>
<script type="text/javascript" src="js/contact.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<!-- JavaScript files end -->
</head>
<body>
<!-- website wrapper starts -->
<div class="websiteWrapper"> 
  
  <!-- header outer wrapper starts -->
  <div class="headerOuterWrapper">
    <!-- header outer wrapper starts -->
	<div class="headerOuterWrapper">
	  <div class="headerWrapper"> <a href="index.html" class="mainLogo"><img src="images/mainLogo.png" alt=""/></a> <a href="" class="mainMenuButton"></a></div>
	</div>
	<!-- header outer wrapper ends --> 
  </div>
  <!-- header outer wrapper ends --> 
	
  <!-- main menu outer wrapper starts -->
  <div class="mainMenuOuterWrapper mainMenuHidden"><ul class="mainMenuWrapper">
      <li data-background="#649ae1" class="menuUser" style="z-index: 100; background-color: rgb(100, 154, 225);"><a href="typography.html">关于我们</a> </li>
      <li data-background="#b3cfc1" class="menuBulb" style="z-index: 90; background-color: rgb(179, 207, 193);"><a href="faq.html">FAQ 页面</a></li>
      <li data-background="#ec6f5a" class="menuFire" style="z-index: 80; background-color: rgb(236, 111, 90);"><a href="404.html">404 页面</a></li>
      <li data-background="#f7c65f" class="menuStack" style="z-index: 70; background-color: rgb(247, 198, 95);"><a href="portfolioOneColumn.html">单列产品展示</a></li>
      <li data-background="#a992e2" class="menuStack" style="z-index: 60; background-color: rgb(169, 146, 226);"><a href="portfolioTwoColumns.html">双列产品展示</a></li>
      <li data-background="#75d4cb" class="menuStack" style="z-index: 50; background-color: rgb(117, 212, 203);"><a href="portfolioOneColumnFilterable.html">单列案例展示</a></li>
      <li data-background="#80a697" class="menuStack" style="z-index: 40; background-color: rgb(128, 166, 151);"><a href="portfolioTwoColumnsFilterable.html">双列案例展示</a></li>
      <li data-background="#dbd48b" class="menuPhoto" style="z-index: 30; background-color: rgb(219, 212, 139);"><a href="singleProject.html">产品内页</a></li>
      <li data-background="#dc6e6e" class="menuPen" style="z-index: 20; background-color: rgb(220, 110, 110);"><a href="blog.html">新闻中心</a> </li>
      <li data-background="#c47acb" class="menuNote" style="z-index: 10; background-color: rgb(196, 122, 203);"><a href="singlePost.html">新闻内页</a></li>
      <li data-background="#a3cc9d" class="menuMail" style="z-index: 0; background-color: rgb(163, 204, 157);"><a href="contact.html">联系我们</a></li>
    </ul>
  </div>
  <!-- main menu outer wrapper ends --> 
  
  <!-- page wrapper starts -->
  <div class="pageWrapper contactPageWrapper"> 
    
    <!-- map starts -->
    <div class="contactMapWrapper">
      <h4 class="contactTitle mapTitle">We Are Here:</h4>
      <iframe src=""></iframe>
    </div>
    <!-- map ends --> 
    
    <!-- social icons wrapper starts -->
    <div class="socialIconsWrapper"> <a href="#" class="socialIcon socialIconFacebookDark"></a> <a href="#" class="socialIcon socialIconRssDark"></a> <a href="#" class="socialIcon socialIconDribbbleDark"></a> <a href="#" class="socialIcon socialIconVimeoDark"></a> <a href="#" class="socialIcon socialIconTwitterDark"></a> <a href="#" class="socialIcon socialIconSkypeDark"></a> </div>
    <!-- social icons wrapper ends --> 
    
    <!-- contact form wrapper starts -->
    <div class="contactFormWrapper">
      <h4 class="contactTitle">Send Us An Email:</h4>
      <!-- form success message wrapper starts -->
      <div class="formSuccessMessageWrapper" id="formSuccessMessageWrapper">
        <h4>Your message was received!</h4>
        <p>Your message was successfully submitted to us, and we will contact you as soon as possible.</p>
      </div>
      <!-- form success message wrapper ends --> 
      <!-- contact form starts -->
      <form action="php/contact.php" method="post" class="contactForm" id="contactForm">
        <fieldset>
          <div class="formFieldWrapper">
            <label for="contactNameField">Name:</label>
            <input type="text" name="contactNameField" value="" class="contactField requiredField" id="contactNameField" data-placeholder=""/>
          </div>
          <div class="formFieldWrapper">
            <label for="contactEmailField">Email:</label>
            <input type="text" name="contactEmailField" value="" class="contactField requiredField requiredEmailField" id="contactEmailField" data-placeholder=""/>
          </div>
          <div class="formTextareaWrapper">
            <label for="contactMessageTextarea">Message:</label>
            <textarea name="contactMessageTextarea" class="contactTextarea requiredField" id="contactMessageTextarea" data-placeholder=""></textarea>
          </div>
          <div class="formSubmitButtonErrorsWrapper"> 
            <!-- form errors start --> 
            <span class="formValidationError" id="contactNameFieldError">Your name is required.</span> <span class="formValidationError" id="contactEmailFieldError">Your email is required.</span> <span class="formValidationError" id="contactEmailFieldError2">Invalid email address.</span> <span class="formValidationError" id="contactMessageTextareaError">A message is required.</span> 
            <!-- form errors end -->
            <input type="submit" class="buttonWrapper contactSubmitButton" id="contactSubmitButton" value="Submit" data-form-id="contactForm"/>
          </div>
          <input type="hidden" name="formIsReady" value="true"  id="formIsReady" />
        </fieldset>
      </form>
      <!-- contact form ends --> 
    </div>
    <!-- contact form wrapper ends --> 
    
  </div>
  <!-- page wrapper ends --> 
  
  <!-- footer wrapper starts -->
  <div class="footerWrapper"> 
    <!-- copyright wrapper starts -->
    <div class="copyrightWrapper"> 
      <!-- copyright starts --> 
      <span class="copyright">免责声明：所有资源仅供学习与参考，版权归原作者，请勿用于商业用途，否则产生的一切后果将由您自行承担，与模板之家无关。</span> <!-- copyright ends --> 
      <!-- back to top button starts --> 
      <a href="" class="backToTopButton"></a> 
      <!-- back to top button ends --> 
    </div>
    <!-- copyright wrapper ends --> 
  </div>
  <!-- footer wrapper ends --> 
  
</div>
<!-- website wrapper ends -->
		
<!-- preloader starts -->
<div class="preloader"></div>
<!-- preloader ends -->
</body>
</html>