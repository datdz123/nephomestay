<?php
/**
 * Template Name: Liên hệ & Vị trí Nếp
 *
 * @package qd
 */

$theme_uri = get_template_directory_uri();
get_header();
?>

<!-- Contact Hero Section -->
<section class="py-20 bg-gradient-to-br from-primary via-[#132419] to-primary text-white text-center relative overflow-hidden">
	<div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('<?php echo esc_url($theme_uri . '/assets/images/stitch-design/hero-bg.jpg'); ?>')"></div>
	<div class="relative z-10 max-w-3xl mx-auto px-margin-mobile">
		<span class="font-label-caps text-label-caps text-secondary-container mb-4 block tracking-widest">KẾT NỐI VỚI NẾP</span>
		<h1 class="font-display-hero text-display-hero text-white mb-6">Liên Hệ &amp; Vị Trí</h1>
		<p class="font-body-lg text-white/80 max-w-xl mx-auto italic">
			Hãy để Nếp đồng hành cùng bạn trong hành trình tìm lại sự bình yên giữa núi rừng Mai Châu thơ mộng.
		</p>
	</div>
</section>

<!-- Contact Form and Details Grid -->
<section class="py-20 px-margin-mobile md:px-margin-desktop bg-surface">
	<div class="max-w-container-max mx-auto grid grid-cols-1 lg:grid-cols-12 gap-16 items-start">
		
		<!-- Left Column: Contact Form -->
		<div class="lg:col-span-7 bg-surface-container-lowest border border-outline/5 p-8 md:p-12 rounded-[2.5rem] shadow-xl space-y-8">
			<div>
				<h2 class="font-headline-lg text-headline-lg text-primary mb-3">Gửi tin nhắn cho Nếp</h2>
				<p class="text-on-surface-variant text-sm">Nếu bạn có câu hỏi về phòng nghỉ, đặt bàn ăn nhóm hoặc các hoạt động trải nghiệm, hãy gửi lời nhắn bên dưới nhé.</p>
			</div>
			
			<form id="nep-contact-form" class="space-y-6">
				<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
					<div>
						<label class="block text-xs font-semibold text-primary uppercase mb-2">Họ và Tên</label>
						<input type="text" class="w-full bg-surface border border-outline/20 rounded-xl px-4 py-3.5 focus:outline-none focus:border-primary text-on-surface" placeholder="Nhập tên của bạn" required />
					</div>
					<div>
						<label class="block text-xs font-semibold text-primary uppercase mb-2">Số điện thoại</label>
						<input type="tel" class="w-full bg-surface border border-outline/20 rounded-xl px-4 py-3.5 focus:outline-none focus:border-primary text-on-surface" placeholder="Số điện thoại liên lạc" required />
					</div>
				</div>
				<div>
					<label class="block text-xs font-semibold text-primary uppercase mb-2">Địa chỉ Email</label>
					<input type="email" class="w-full bg-surface border border-outline/20 rounded-xl px-4 py-3.5 focus:outline-none focus:border-primary text-on-surface" placeholder="Nhập email của bạn (không bắt buộc)" />
				</div>
				<div>
					<label class="block text-xs font-semibold text-primary uppercase mb-2">Nội dung tin nhắn</label>
					<textarea class="w-full bg-surface border border-outline/20 rounded-xl px-4 py-3.5 focus:outline-none focus:border-primary text-on-surface h-36" placeholder="Viết tin nhắn của bạn tại đây..." required></textarea>
				</div>
				<button type="submit" class="w-full bg-secondary-container text-on-secondary-container font-label-caps text-label-caps py-4 rounded-xl hover:bg-secondary hover:text-on-secondary transition-all duration-300 active:scale-95 flex items-center justify-center gap-2 shadow-lg hover:shadow-secondary/20">
					Gửi tin nhắn đi
				</button>
			</form>
		</div>

		<!-- Right Column: Contact Info & Guide -->
		<div class="lg:col-span-5 space-y-12">
			<!-- Contact Details -->
			<div class="space-y-6">
				<h2 class="font-headline-lg text-headline-lg text-primary">Thông tin liên hệ</h2>
				<p class="text-on-surface-variant leading-relaxed">Bạn có thể liên hệ trực tiếp với Nếp qua hotline, email hoặc ghé thăm chúng tôi theo thông tin sau:</p>
				
				<div class="space-y-6 pt-4 border-t border-outline/10">
					<!-- Item 1: Address -->
					<div class="flex items-start gap-4">
						<div class="w-12 h-12 rounded-full bg-secondary-container/15 flex items-center justify-center text-secondary-container shrink-0">
							<span class="material-symbols-outlined">location_on</span>
						</div>
						<div>
							<h4 class="font-bold text-primary text-sm mb-1 font-label-caps">Địa chỉ</h4>
							<p class="text-on-surface-variant text-sm leading-relaxed">Bản Lác, xã Chiềng Châu, huyện Mai Châu, tỉnh Hòa Bình, Việt Nam.</p>
						</div>
					</div>

					<!-- Item 2: Hotline -->
					<div class="flex items-start gap-4">
						<div class="w-12 h-12 rounded-full bg-secondary-container/15 flex items-center justify-center text-secondary-container shrink-0">
							<span class="material-symbols-outlined">phone_in_talk</span>
						</div>
						<div>
							<h4 class="font-bold text-primary text-sm mb-1 font-label-caps">Hotline / Zalo</h4>
							<p class="text-on-surface-variant text-sm font-semibold">0987.654.321 (Đặt phòng &amp; Ăn uống)</p>
							<p class="text-on-surface-variant text-sm font-semibold">0912.345.678 (Hỗ trợ tìm đường)</p>
						</div>
					</div>

					<!-- Item 3: Email -->
					<div class="flex items-start gap-4">
						<div class="w-12 h-12 rounded-full bg-secondary-container/15 flex items-center justify-center text-secondary-container shrink-0">
							<span class="material-symbols-outlined">mail</span>
						</div>
						<div>
							<h4 class="font-bold text-primary text-sm mb-1 font-label-caps">Hòm thư điện tử</h4>
							<p class="text-on-surface-variant text-sm">hello@nephomestay.com</p>
						</div>
					</div>
				</div>
			</div>

			<!-- How to get here instruction -->
			<div class="bg-surface-container border border-outline/10 p-8 rounded-3xl space-y-4">
				<h3 class="font-headline-md text-headline-md text-primary flex items-center gap-2">
					<span class="material-symbols-outlined">directions_car</span> Hướng dẫn di chuyển
				</h3>
				<p class="text-sm text-on-surface-variant leading-relaxed">
					Từ Hà Nội, bạn di chuyển theo hướng Đại lộ Thăng Long đi Hòa Bình, rồi đi tiếp dọc QL6 qua đèo Thung Khe để xuống thung lũng Mai Châu. Nếp Homestay nằm sâu trong Bản Lác yên bình, đường vào ô tô đi thoải mái. Có bãi đỗ xe an toàn 24/7.
				</p>
			</div>
		</div>
	</div>
</section>

<!-- Google Map Section -->
<section class="py-10 bg-surface border-t border-outline/10">
	<div class="max-w-container-max mx-auto px-margin-mobile md:px-margin-desktop">
		<div class="rounded-[2.5rem] overflow-hidden shadow-2xl border-4 border-white relative h-[450px] md:h-[550px]">
			<!-- Embedded Google Maps centered around Lac Village, Mai Chau -->
			<iframe 
				src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3734.5029349887714!2d105.0763806!3d20.5982845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1m3!1d3734.5029349887714!2d105.0763806!3d20.5982845!5m2!1svi!2svn" 
				class="w-full h-full border-0" 
				allowfullscreen="" 
				loading="lazy" 
				referrerpolicy="no-referrer-when-downgrade">
			</iframe>
		</div>
	</div>
</section>

<script>
jQuery(document).ready(function($){
	$('#nep-contact-form').on('submit', function(e){
		e.preventDefault();
		Swal.fire({
			icon: 'success',
			title: 'Gửi tin nhắn thành công!',
			text: 'Nếp đã nhận được lời nhắn của bạn và sẽ phản hồi sớm nhất có thể.',
			confirmButtonColor: '#1b3022'
		}).then(() => {
			$('#nep-contact-form')[0].reset();
		});
	});
});
</script>

<?php
get_footer();
