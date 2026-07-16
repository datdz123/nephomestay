<?php
/**
 * Template Name: Đặt phòng Nếp Homestay
 *
 * @package qd
 */

$theme_uri = get_template_directory_uri();
get_header();
?>

<!-- Rooms Hero Header -->
<section class="py-20 bg-gradient-to-br from-primary via-[#132419] to-primary text-white text-center relative overflow-hidden">
	<div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('<?php echo esc_url($theme_uri . '/assets/images/stitch-design/hero-bg.jpg'); ?>')"></div>
	<div class="relative z-10 max-w-3xl mx-auto px-margin-mobile">
		<span class="font-label-caps text-label-caps text-secondary-container mb-4 block tracking-widest">NƠI TRỞ VỀ</span>
		<h1 class="font-display-hero text-display-hero text-white mb-6">Phòng Nghỉ Mộc Mạc</h1>
		<p class="font-body-lg text-white/80 max-w-xl mx-auto italic">
			Những gian phòng lộng gió, gạch trần ấm áp và hương lúa thơm nồng đón chào bạn.
		</p>
	</div>
</section>


<!-- Room Cards List -->
<section class="py-20 px-margin-mobile md:px-margin-desktop">
	<div class="max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
		
		<!-- Room Card 1: Dorm -->
		<div class="bg-surface-container-lowest rounded-[2rem] border border-outline/5 hover:border-secondary-container/30 shadow-md hover:shadow-2xl transition-all duration-500 overflow-hidden flex flex-col group h-full">
			<div class="relative overflow-hidden aspect-[4/3]">
				<img class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" alt="Phòng Dorm Tập Thể" src="<?php echo esc_url($theme_uri . '/assets/images/stitch-design/room-dorm.jpg'); ?>"/>
				<div class="absolute top-4 left-4 bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full font-label-caps text-[10px] shadow-sm">Phổ biến</div>
			</div>
			<div class="p-6 flex flex-col justify-between flex-grow">
				<div>
					<h2 class="text-xl font-bold text-primary mb-1">Phòng Dorm Tập Thể</h2>
					<div class="mb-4">
						<span class="text-tertiary-container font-bold text-lg">250.000đ</span>
						<span class="text-xs text-on-surface-variant opacity-60">/ khách / đêm</span>
					</div>
					<p class="text-on-surface-variant text-sm mb-4 leading-relaxed line-clamp-3">Không gian sinh hoạt chung ấm áp với trần mây tre đan thủ công, giường tầng nệm cao cấp và rèm che riêng tư tuyệt đối.</p>
					
					<!-- Amenities -->
					<div class="space-y-2 mb-6 pt-4 border-t border-outline/5 text-xs text-on-surface-variant">
						<div class="flex items-center gap-2">
							<span class="material-symbols-outlined text-base text-secondary-container">wifi</span> Wi-Fi tốc độ cao
						</div>
						<div class="flex items-center gap-2">
							<span class="material-symbols-outlined text-base text-secondary-container">ac_unit</span> Điều hòa 2 chiều
						</div>
						<div class="flex items-center gap-2">
							<span class="material-symbols-outlined text-base text-secondary-container">coffee</span> Ăn sáng miễn phí
						</div>
						<div class="flex items-center gap-2">
							<span class="material-symbols-outlined text-base text-secondary-container">deck</span> Ban công chung ngắm lúa
						</div>
					</div>
				</div>
				
				<div class="flex flex-col gap-2 mt-auto">
					<a href="<?php echo esc_url( home_url( '/phong-dorm/' ) ); ?>" class="w-full border border-primary/20 text-primary hover:bg-primary/5 text-center font-label-caps text-xs py-3 rounded-xl transition-all">
						Chi tiết phòng
					</a>
					<button class="w-full bg-primary text-white hover:bg-primary/90 font-label-caps text-xs py-3 rounded-xl transition-all active:scale-95 btn-book-quick" data-room="Phòng Dorm Tập Thể" data-price="250.000đ">
						Đặt phòng ngay
					</button>
				</div>
			</div>
		</div>

		<!-- Room Card 2: Private Couple -->
		<div class="bg-surface-container-lowest rounded-[2rem] border border-outline/5 hover:border-secondary-container/30 shadow-md hover:shadow-2xl transition-all duration-500 overflow-hidden flex flex-col group h-full">
			<div class="relative overflow-hidden aspect-[4/3]">
				<img class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" alt="Phòng Riêng Couple" src="<?php echo esc_url($theme_uri . '/assets/images/stitch-design/room-couple.jpg'); ?>"/>
				<div class="absolute top-4 left-4 bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full font-label-caps text-[10px] shadow-sm">Lãng mạn</div>
			</div>
			<div class="p-6 flex flex-col justify-between flex-grow">
				<div>
					<h2 class="text-xl font-bold text-primary mb-1">Phòng Riêng (Couple)</h2>
					<div class="mb-4">
						<span class="text-tertiary-container font-bold text-lg">800.000đ</span>
						<span class="text-xs text-on-surface-variant opacity-60">/ phòng / đêm</span>
					</div>
					<p class="text-on-surface-variant text-sm mb-4 leading-relaxed line-clamp-3">Không gian riêng tư cho hai người. Thiết kế tường gạch trần cổ kính, ga gối thổ cẩm độc đáo và tầm nhìn thung lũng.</p>
					
					<!-- Amenities -->
					<div class="space-y-2 mb-6 pt-4 border-t border-outline/5 text-xs text-on-surface-variant">
						<div class="flex items-center gap-2">
							<span class="material-symbols-outlined text-base text-secondary-container">wifi</span> Wi-Fi tốc độ cao
						</div>
						<div class="flex items-center gap-2">
							<span class="material-symbols-outlined text-base text-secondary-container">ac_unit</span> Điều hòa 2 chiều
						</div>
						<div class="flex items-center gap-2">
							<span class="material-symbols-outlined text-base text-secondary-container">coffee</span> Bữa sáng đặc sản quê
						</div>
						<div class="flex items-center gap-2">
							<span class="material-symbols-outlined text-base text-secondary-container">balcony</span> Ban công riêng tư hướng núi
						</div>
					</div>
				</div>
				
				<div class="flex flex-col gap-2 mt-auto">
					<a href="<?php echo esc_url( home_url( '/phong-couple/' ) ); ?>" class="w-full border border-primary/20 text-primary hover:bg-primary/5 text-center font-label-caps text-xs py-3 rounded-xl transition-all">
						Chi tiết phòng
					</a>
					<button class="w-full bg-primary text-white hover:bg-primary/90 font-label-caps text-xs py-3 rounded-xl transition-all active:scale-95 btn-book-quick" data-room="Phòng Riêng (Couple)" data-price="800.000đ">
						Đặt phòng ngay
					</button>
				</div>
			</div>
		</div>

		<!-- Room Card 3: Family Bungalow -->
		<div class="bg-surface-container-lowest rounded-[2rem] border border-outline/5 hover:border-secondary-container/30 shadow-md hover:shadow-2xl transition-all duration-500 overflow-hidden flex flex-col group h-full">
			<div class="relative overflow-hidden aspect-[4/3]">
				<img class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" alt="Bungalow Gia Đình" src="<?php echo esc_url($theme_uri . '/assets/images/stitch-design/common-veranda.jpg'); ?>"/>
				<div class="absolute top-4 left-4 bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full font-label-caps text-[10px] shadow-sm">Gia đình</div>
			</div>
			<div class="p-6 flex flex-col justify-between flex-grow">
				<div>
					<h2 class="text-xl font-bold text-primary mb-1">Bungalow Gia Đình</h2>
					<div class="mb-4">
						<span class="text-tertiary-container font-bold text-lg">1.500.000đ</span>
						<span class="text-xs text-on-surface-variant opacity-60">/ phòng / đêm</span>
					</div>
					<p class="text-on-surface-variant text-sm mb-4 leading-relaxed line-clamp-3">Căn Bungalow biệt lập cực kỳ rộng rãi cho gia đình. Bồn tắm bằng gỗ sồi tự nhiên, ban công rộng ôm trọn view lúa.</p>
					
					<!-- Amenities -->
					<div class="space-y-2 mb-6 pt-4 border-t border-outline/5 text-xs text-on-surface-variant">
						<div class="flex items-center gap-2">
							<span class="material-symbols-outlined text-base text-secondary-container">wifi</span> Wi-Fi tốc độ cao
						</div>
						<div class="flex items-center gap-2">
							<span class="material-symbols-outlined text-base text-secondary-container">hot_tub</span> Bồn tắm sồi cao cấp
						</div>
						<div class="flex items-center gap-2">
							<span class="material-symbols-outlined text-base text-secondary-container">breakfast_dining</span> Buffet sáng đặc sản
						</div>
						<div class="flex items-center gap-2">
							<span class="material-symbols-outlined text-base text-secondary-container">balcony</span> Ban công thung lũng
						</div>
					</div>
				</div>
				
				<div class="flex flex-col gap-2 mt-auto">
					<a href="<?php echo esc_url( home_url( '/phong-family-bungalow/' ) ); ?>" class="w-full border border-primary/20 text-primary hover:bg-primary/5 text-center font-label-caps text-xs py-3 rounded-xl transition-all">
						Chi tiết phòng
					</a>
					<button class="w-full bg-primary text-white hover:bg-primary/90 font-label-caps text-xs py-3 rounded-xl transition-all active:scale-95 btn-book-quick" data-room="Bungalow Gia Đình" data-price="1.500.000đ">
						Đặt phòng ngay
					</button>
				</div>
			</div>
		</div>

		<!-- Room Card 4: Mountain View VIP -->
		<div class="bg-surface-container-lowest rounded-[2rem] border border-outline/5 hover:border-secondary-container/30 shadow-md hover:shadow-2xl transition-all duration-500 overflow-hidden flex flex-col group h-full">
			<div class="relative overflow-hidden aspect-[4/3]">
				<img class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-105" alt="Phòng VIP Hướng Núi" src="<?php echo esc_url($theme_uri . '/assets/images/stitch-design/common-detail.jpg'); ?>"/>
				<div class="absolute top-4 left-4 bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full font-label-caps text-[10px] shadow-sm">Cao cấp</div>
			</div>
			<div class="p-6 flex flex-col justify-between flex-grow">
				<div>
					<h2 class="text-xl font-bold text-primary mb-1">Phòng VIP Hướng Núi</h2>
					<div class="mb-4">
						<span class="text-tertiary-container font-bold text-lg">1.200.000đ</span>
						<span class="text-xs text-on-surface-variant opacity-60">/ phòng / đêm</span>
					</div>
					<p class="text-on-surface-variant text-sm mb-4 leading-relaxed line-clamp-3">Phòng VIP cao cấp tuyệt mỹ cho 2 người. Kính sát đất nhìn panorama thung lũng lúa Hà Giang và set trà chiều thượng hạng.</p>
					
					<!-- Amenities -->
					<div class="space-y-2 mb-6 pt-4 border-t border-outline/5 text-xs text-on-surface-variant">
						<div class="flex items-center gap-2">
							<span class="material-symbols-outlined text-base text-secondary-container">wifi</span> Wi-Fi tốc độ cao
						</div>
						<div class="flex items-center gap-2">
							<span class="material-symbols-outlined text-base text-secondary-container">local_cafe</span> Set trà chiều miễn phí
						</div>
						<div class="flex items-center gap-2">
							<span class="material-symbols-outlined text-base text-secondary-container">window</span> Kính panorama lớn
						</div>
						<div class="flex items-center gap-2">
							<span class="material-symbols-outlined text-base text-secondary-container">room_service</span> Ăn sáng tại phòng
						</div>
					</div>
				</div>
				
				<div class="flex flex-col gap-2 mt-auto">
					<a href="<?php echo esc_url( home_url( '/phong-vip/' ) ); ?>" class="w-full border border-primary/20 text-primary hover:bg-primary/5 text-center font-label-caps text-xs py-3 rounded-xl transition-all">
						Chi tiết phòng
					</a>
					<button class="w-full bg-primary text-white hover:bg-primary/90 font-label-caps text-xs py-3 rounded-xl transition-all active:scale-95 btn-book-quick" data-room="Phòng VIP Hướng Núi" data-price="1.200.000đ">
						Đặt phòng ngay
					</button>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Quick Booking Modal / Popup Container (handled via jQuery sweetalert) -->
<script>
jQuery(document).ready(function($){
	$('.btn-book-quick').on('click', function(){
		var roomName = $(this).data('room');
		var roomPrice = $(this).data('price');
		
		Swal.fire({
			title: 'Đặt phòng tại Nếp',
			html:
				'<div class="text-left font-sans text-sm">' +
				'<p class="mb-4 text-on-surface-variant">Bạn đang chọn đặt: <strong class="text-primary">' + roomName + '</strong> (' + roomPrice + ')</p>' +
				'<label class="block mb-2 font-semibold">Tên của bạn</label>' +
				'<input id="swal-name" class="swal2-input w-full m-0 mb-4 px-4 py-2 border rounded-lg" placeholder="Họ và tên">' +
				'<label class="block mb-2 font-semibold">Số điện thoại liên hệ</label>' +
				'<input id="swal-phone" class="swal2-input w-full m-0 mb-4 px-4 py-2 border rounded-lg" placeholder="Số điện thoại">' +
				'<label class="block mb-2 font-semibold">Ghi chú thêm</label>' +
				'<textarea id="swal-note" class="swal2-textarea w-full m-0 px-4 py-2 border rounded-lg" placeholder="Yêu cầu đặc biệt..."></textarea>' +
				'</div>',
			focusConfirm: false,
			showCancelButton: true,
			confirmButtonText: 'Xác nhận đặt phòng',
			cancelButtonText: 'Hủy',
			confirmButtonColor: '#1b3022',
			preConfirm: () => {
				return {
					name: document.getElementById('swal-name').value,
					phone: document.getElementById('swal-phone').value,
					note: document.getElementById('swal-note').value
				}
			}
		}).then((result) => {
			if (result.isConfirmed) {
				if(!result.value.name || !result.value.phone) {
					Swal.fire('Thất bại', 'Vui lòng nhập tên và số điện thoại liên lạc!', 'error');
					return;
				}
				Swal.fire(
					'Đã gửi yêu cầu đặt phòng!',
					'Nếp sẽ liên hệ lại qua số ' + result.value.phone + ' trong vòng 15 phút để xác nhận.',
					'success'
				);
			}
		});
	});
});
</script>

<?php
get_footer();
