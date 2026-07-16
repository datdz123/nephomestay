<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the `#content` element and all content thereafter.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package qd
 */

?>
<?php
$theme_uri = get_template_directory_uri();
?>
<footer class="w-full py-12 px-margin-mobile md:px-margin-desktop bg-primary text-on-primary border-t border-outline-variant/20">
	<div class="max-w-container-max mx-auto flex flex-col md:flex-row justify-between items-start gap-12">
		<div class="max-w-sm">
			<img alt="Nếp Homestay Logo" class="h-20 w-auto object-contain mb-4" src="<?php echo esc_url($theme_uri . '/assets/images/stitch-design/logo.png'); ?>"/>
			<p class="text-on-primary/70 mb-6">Gìn giữ nét quê, trọn vẹn thói quen. Hãy để Nếp đồng hành cùng bạn trong những kỳ nghỉ ý nghĩa nhất.</p>
			<div class="flex gap-4">
				<a class="w-10 h-10 rounded-full bg-white/5 flex items-center justify-center hover:bg-secondary-container hover:text-on-secondary-container transition-all" href="https://www.facebook.com/nephomestayhagiang" target="_blank" rel="noopener noreferrer">
					<?php echo svg( 'facebook', '20', '20', 'fill-current' ) ?>
				</a>
			</div>
		</div>

		<div class="grid grid-cols-2 gap-12">
			<div>
				<h4 class="font-label-caps text-label-caps text-secondary-container mb-6">LIÊN KẾT</h4>
				<ul class="space-y-4">
					<li><a class="text-on-primary/70 hover:text-on-primary transition-colors" href="<?php echo esc_url(home_url('/')); ?>">Trang chủ</a></li>
					<li><a class="text-on-primary/70 hover:text-on-primary transition-colors" href="<?php echo esc_url(home_url('/dat-phong/')); ?>">Phòng nghỉ</a></li>
					<li><a class="text-on-primary/70 hover:text-on-primary transition-colors" href="<?php echo esc_url(home_url('/dat-do-an/')); ?>">Đặt đồ ăn</a></li>
					<li><a class="text-on-primary/70 hover:text-on-primary transition-colors" href="<?php echo esc_url(home_url('/lien-he/')); ?>">Vị trí &amp; Liên hệ</a></li>
				</ul>
			</div>
			<div>
				<h4 class="font-label-caps text-label-caps text-secondary-container mb-6">HỖ TRỢ</h4>
				<ul class="space-y-4">
					<li><a class="text-on-primary/70 hover:text-on-primary transition-colors" href="#">Chính sách bảo mật</a></li>
					<li><a class="text-on-primary/70 hover:text-on-primary transition-colors" href="#">Điều khoản sử dụng</a></li>
					<li><a class="text-on-primary/70 hover:text-on-primary transition-colors" href="#">Câu hỏi thường gặp</a></li>
				</ul>
			</div>
		</div>

		<div class="w-full md:w-auto">
			<h4 class="font-label-caps text-label-caps text-secondary-container mb-6">ĐĂNG KÝ NHẬN TIN</h4>
			<form class="flex">
				<input class="bg-white/5 border border-white/20 rounded-l-xl px-4 py-3 focus:outline-none focus:border-secondary-container w-full text-white" placeholder="Email của bạn" type="email"/>
				<button class="bg-secondary-container text-on-secondary-container px-6 py-3 rounded-r-xl" type="submit">
					<span class="material-symbols-outlined">send</span>
				</button>
			</form>
		</div>
	</div>

	<div class="max-w-container-max mx-auto mt-16 pt-8 border-t border-white/10 flex flex-col md:flex-row justify-between items-center gap-4">
		<p class="font-label-caps text-label-caps text-on-primary/50">© 2024 Nếp Homestay. Gìn giữ nét quê, trọn vẹn thói quen.</p>
		<p class="font-label-caps text-label-caps text-on-primary/50 uppercase">Made with Heart in Ha Giang</p>
	</div>
</footer>
<div
	class="back-to-top fixed bottom-14 right-7 w-10 h-10 rounded-full m-auto bg-slate-200  cursor-pointer transition-all duration-500 hover:bg-primary text-primary hover:text-white">
	<?php echo svg( 'back-top', '20','20','m-auto h-full' ) ?>
</div>
<?php wp_footer(); ?>

</body>

</html>