<div id="wParsiMenuLF">
<script type="text/javascript">
<!--
function animated(Down)
{
var l1 = document.getElementById(Down).style.left 
if(l1=="-260px")
{
   document.getElementById('wParsiMenuID1').style.left = '-260px'
	 document.getElementById('wParsiMenuID2').style.left = '-260px'
	 document.getElementById('wParsiMenuID3').style.left = '-260px'
	 document.getElementById('wParsiMenuID4').style.left = '-260px'
	 document.getElementById(Down).style.left = '-5px'
} 
	else 
{
	 document.getElementById(Down).style.left = '-260px'
}
}
//-->
</script>

<div id="wParsiMenuID1" class="wParsiMenuclass" style="left:-260px">
<div class="wParsiMenuBox">
<div class="box-content">
<!-- قابل ویرایش 
 شروع کدهای ستون درباره ما 
(در صورت حذف می توانید کدهایی که به
functions.php
اضافه کرده بودید را حذف کنید 
-->  
<?php if ( !dynamic_sidebar( 'wParsiMenu') ) : ?>
<p>با سلام<br />
لطفا از طریق  <br />پیشخوان &gt; نمایش &gt; ابزارک ها <br />
یک ابزارک جعبه متن را به ستون کناری wParsiMenu منتقل کرده و نوشته درباره ما را در آن قرار دهید</p>
<?php endif; ?>
<!-- پایان کدهای ستون درباره ما -->
</div>

</div>
<div class="wParsiMenuButton" id="b1" onclick="animated('wParsiMenuID1')">&nbsp;</div>
</div>
<div id="wParsiMenuID2" class="wParsiMenuclass" style="left:-260px">
<div class="wParsiMenuBox">
<div class="box-content">
<!-- کد نمایش دسته بندی ها-->
<ul>
<?php wp_list_categories('show_count=1&title_li='); ?>
</ul>

<!-- انتهای کد دسته بندی ها قابل ویرایش -->
</div>

</div>
<div class="wParsiMenuButton" id="b2" onclick="animated('wParsiMenuID2')">&nbsp;</div>
</div>
<div id="wParsiMenuID3" class="wParsiMenuclass" style="left:-260px">
<div class="wParsiMenuBox" id="gBox3">
<div class="box-content">
<!-- قابل ویرایش
ابتدای کد نمایش آخرین مطالب سایت 
برای تغییر در تعداد مطالب عدد 10 را در مقابل
 numberposts
 ویرایش کنید 
-->
<ul>
<?php
	$args = array( 'numberposts' => '10' );
	$recent_posts = wp_get_recent_posts( $args );
	foreach( $recent_posts as $recent ){
		echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
	}
?>
</ul>
<!--  انتهای کدهای نمایش آخرین مطالب سایت-->
</div>

</div>
<div class="wParsiMenuButton" id="b3" onclick="animated('wParsiMenuID3')">&nbsp;</div>
</div>
<!--
 ترجیحا ویرایش نفرمایید
 مگر اینکه یا 
php
 آشنایی لازم را داشته باشید 
 ابتدای کدهای پنل کاربران
  -->
	<?php
global $user_ID, $user_identity, $user_level, $user_email, $user_login, $user_info, $user_first_name, $user_last_name, $user_url; 
		if (is_user_logged_in()) :
?>
<div id="wParsiMenuID4" class="wParsiMenuclass" style="left:-260px">
<div class="wParsiMenuBox">
<div class="box-content">

	<table style="width: 100%">
		<tr>
			<td class="gbAvatar" rowspan="2"><?php echo get_avatar($user_email, 72); ?>
</td>
			<td>سلام <?php echo $user_identity; ?></td>
		</tr>
		<tr>
			<td><a href="<?php bloginfo('url'); ?>/wp-admin/post-new.php">ارسال مطلب جدید</a></td>
		</tr>
		<tr>
			<td colspan="2"><a href="<?php bloginfo('url'); ?>/wp-admin/profile.php">ویرایش مشخصات </a></td>
		</tr>
		<tr>
			<td colspan="2"><a href="<?php echo wp_logout_url() ?>&redirect_to=<?php the_permalink() ?>">خارج شدن</a></td>
		</tr>
	</table>


</div>

</div>
<div class="wParsiMenuButton" id="b5" onclick="animated('wParsiMenuID4')">&nbsp;</div>
</div>
<?php else : ?>
<div id="wParsiMenuID4" class="wParsiMenuclass" style="left:-260px">
<div class="wParsiMenuBox">
<div class="box-content">
<form method="post" action="<?php bloginfo('url'); ?>/wp-login.php">

	<table style="width: 100%" dir="rtl" id="login-panel">
		<tr>
			<th>شناسه</th>
			<td class="tdInput"><input type="text" name="log" id="user_login" class="input" value="<?php echo $user_login;?>" size="20" /></td>
		</tr>
		<tr>
			<th>رمز ورود</th>
			<td class="tdInput"><input name="pwd" id="user_pass" class="inputText" type="password" value="" /></td>
		</tr>
		<tr>
			<td colspan="2">
			<input name="rememberme" type="checkbox" id="rememberme" value="forever"  /> مرا به خاطر بسپار
			<input type="hidden" name="redirect_to" value="<?php the_permalink() ?>/" />
			</td>
		</tr>
		<tr>
			<td colspan="2"><input name="loginsubmit" id="loginsubmit" class="gbButtun" type="submit" value="ورود" /><input type="hidden" name="testcookie" value="1" /></td>
			</tr><tr>
			<td colspan="2"><?php if ( get_option( 'users_can_register' ) ) : ?>
<a href="<?php bloginfo('url'); ?>/wp-login.php?action=register"  class="gbButtun">ثبت نام</a>
<?php endif; ?>
</td>
		</tr>
	</table>
</form>
</div>
</div>
<div class="wParsiMenuButton" id="b4" onclick="animated('wParsiMenuID4')">&nbsp;</div>
</div>
<?php endif;?>
<!--  انتهای کدهای پنل کاربران -->
</div>
