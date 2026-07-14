<?php
/**
 * Template Name: Chi tiết phòng Nếp
 *
 * @package qd
 */

$theme_uri = get_template_directory_uri();
get_header();

// Determine room type based on current page slug
$slug = get_post_field( 'post_name', get_post() );

if (strpos($slug, 'family') !== false || strpos($slug, 'bungalow') !== false) {
	$room_name = "Bungalow Gia Đình";
	$room_price = "1.500.000đ";
	$room_image = $theme_uri . "/assets/images/stitch-design/common-veranda.jpg";
	$room_size = "50 m²";
	$room_bed = "2 Giường đôi King size";
	$room_view = "Ruộng bậc thang & núi non trùng điệp";
	$room_desc = "Bungalow Gia Đình được thiết kế biệt lập đem lại sự yên tĩnh tối đa cho gia đình của bạn. Sử dụng các vật liệu tự nhiên thân thiện với môi trường như gỗ sồi, tre và lá cọ, bungalow mang vẻ đẹp mộc mạc độc bản Tây Bắc. Điểm nhấn lớn nhất là bồn tắm gỗ sồi thủ công cùng hiên ngắm cảnh cực lớn nhìn ra ruộng bậc thang thơ mộng.";
	$amenities = [
		['icon' => 'wifi', 'label' => 'Wi-Fi tốc độ cao miễn phí'],
		['icon' => 'hot_tub', 'label' => 'Bồn tắm gỗ sồi cao cấp'],
		['icon' => 'breakfast_dining', 'label' => 'Buffet sáng đặc sản quê miễn phí'],
		['icon' => 'balcony', 'label' => 'Hiên ngắm cảnh cực rộng'],
		['icon' => 'flatware', 'label' => 'Quầy trà & cà phê tự phục vụ'],
		['icon' => 'ac_unit', 'label' => 'Điều hòa nhiệt độ 2 chiều'],
	];
} elseif (strpos($slug, 'vip') !== false) {
	$room_name = "Phòng VIP Hướng Núi";
	$room_price = "1.200.000đ";
	$room_image = $theme_uri . "/assets/images/stitch-design/common-detail.jpg";
	$room_size = "35 m²";
	$room_bed = "1 Giường đôi King size";
	$room_view = "Toàn cảnh thung lũng Mai Châu";
	$room_desc = "Phòng VIP Hướng Núi là không gian cao cấp nhất dành cho các cặp đôi thích sự hoàn hảo. Sở hữu hệ thống cửa kính chạm trần panorama mở rộng tối đa tầm mắt ra thung lũng và núi non Mai Châu lộng lẫy. Dịch vụ đi kèm bao gồm bữa sáng phục vụ tận giường và set trà chiều thượng hạng miễn phí mỗi ngày.";
	$amenities = [
		['icon' => 'wifi', 'label' => 'Wi-Fi tốc độ cao miễn phí'],
		['icon' => 'local_cafe', 'label' => 'Set trà chiều thượng hạng mỗi ngày'],
		['icon' => 'window', 'label' => 'Cửa kính lớn panorama hướng núi'],
		['icon' => 'room_service', 'label' => 'Ăn sáng tại phòng miễn phí'],
		['icon' => 'hot_tub', 'label' => 'Bồn tắm nước nóng hiện đại'],
		['icon' => 'ac_unit', 'label' => 'Điều hòa nhiệt độ 2 chiều'],
	];
} elseif (strpos($slug, 'couple') !== false || strpos($slug, 'rieng') !== false) {
	$room_name = "Phòng Riêng (Couple)";
	$room_price = "800.000đ";
	$room_image = $theme_uri . "/assets/images/stitch-design/room-couple.jpg";
	$room_size = "28 m²";
	$room_bed = "1 Giường đôi King size";
	$room_view = "Trực diện thung lũng & ruộng bậc thang";
	$room_desc = "Phòng Riêng Couple tại Nếp mang lại không gian ấm cúng, riêng tư tuyệt đối cho kỳ nghỉ lãng mạn của hai người. Thiết kế tối giản tinh tế kết hợp giữa gạch trần mộc mạc và rèm thổ cẩm dệt tay truyền thống. Ban công gỗ lớn mở thẳng ra thung lũng lúa, nơi hai bạn có thể nhâm nhi ly trà nóng lúc bình minh hay đón những làn gió mát rượi lúc hoàng hôn.";
	$amenities = [
		['icon' => 'wifi', 'label' => 'Wi-Fi tốc độ cao miễn phí'],
		['icon' => 'ac_unit', 'label' => 'Điều hòa nhiệt độ 2 chiều'],
		['icon' => 'coffee', 'label' => 'Ăn sáng đặc sản quê miễn phí'],
		['icon' => 'balcony', 'label' => 'Ban công ngắm cảnh riêng tư'],
		['icon' => 'hot_tub', 'label' => 'Phòng tắm khép kín (Nước nóng 24/7)'],
		['icon' => 'flatware', 'label' => 'Ấm siêu tốc & trà/cà phê miễn phí'],
	];
} else {
	$room_name = "Phòng Dorm Tập Thể";
	$room_price = "250.000đ";
	$room_image = $theme_uri . "/assets/images/stitch-design/room-dorm.jpg";
	$room_size = "45 m²";
	$room_bed = "6 Giường đơn (Tầng)";
	$room_view = "Sân vườn và cánh đồng lúa xanh";
	$room_desc = "Phòng Dorm tại Nếp là lựa chọn hoàn hảo cho nhóm bạn thân hoặc các phượt thủ muốn trải nghiệm không gian sinh hoạt chung ấm cúng. Mỗi giường tầng đều được thiết kế rộng rãi bằng chất liệu gỗ thông tự nhiên, trang bị nệm cao cấp, ổ cắm điện riêng, đèn đọc sách và rèm che dày dặn để đảm bảo sự riêng tư tối đa. Phòng có khu vực vệ sinh hiện đại liền kề vô cùng sạch sẽ.";
	$amenities = [
		['icon' => 'wifi', 'label' => 'Wi-Fi tốc độ cao miễn phí'],
		['icon' => 'ac_unit', 'label' => 'Điều hòa nhiệt độ 2 chiều'],
		['icon' => 'coffee', 'label' => 'Ăn sáng đặc sản quê miễn phí'],
		['icon' => 'deck', 'label' => 'Sân hiên sinh hoạt chung ngoài trời'],
		['icon' => 'lock', 'label' => 'Tủ đồ cá nhân khóa an toàn'],
		['icon' => 'shower', 'label' => 'Nhà tắm & vệ sinh chung hiện đại'],
	];
}
?>

<div class="py-12 px-margin-mobile md:px-margin-desktop bg-surface">
	<div class="max-w-container-max mx-auto">
		
		<!-- Breadcrumbs -->
		<div class="flex items-center gap-2 text-sm text-on-surface-variant opacity-70 mb-8">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-primary transition-colors">Trang chủ</a>
			<span class="material-symbols-outlined text-xs">chevron_right</span>
			<a href="<?php echo esc_url( home_url( '/dat-phong/' ) ); ?>" class="hover:text-primary transition-colors">Phòng nghỉ</a>
			<span class="material-symbols-outlined text-xs">chevron_right</span>
			<span class="text-primary font-semibold"><?php echo esc_html( $room_name ); ?></span>
		</div>

		<!-- Page Grid Layout -->
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
			
			<!-- Left Column: Details & Images -->
			<div class="lg:col-span-8 space-y-12">
				
				<!-- Large Room Image -->
				<div class="rounded-[2.5rem] overflow-hidden shadow-2xl relative group">
					<img class="w-full h-[450px] md:h-[550px] object-cover transition-transform duration-700 group-hover:scale-105" src="<?php echo esc_url( $room_image ); ?>" alt="<?php echo esc_attr( $room_name ); ?>" />
					<div class="absolute bottom-6 left-6 bg-primary/80 backdrop-blur-md text-white px-6 py-2 rounded-full font-label-caps text-label-caps">
						Ảnh thực tế tại Nếp
					</div>
				</div>

				<!-- Title and Overview -->
				<div>
					<h1 class="font-headline-lg text-headline-lg text-primary mb-4"><?php echo esc_html( $room_name ); ?></h1>
					<div class="flex flex-wrap gap-6 text-sm text-on-surface-variant opacity-80 border-b border-outline/10 pb-6">
						<div class="flex items-center gap-2">
							<span class="material-symbols-outlined text-secondary-container">aspect_ratio</span>
							Diện tích: <strong><?php echo esc_html( $room_size ); ?></strong>
						</div>
						<div class="flex items-center gap-2">
							<span class="material-symbols-outlined text-secondary-container">single_bed</span>
							Loại giường: <strong><?php echo esc_html( $room_bed ); ?></strong>
						</div>
						<div class="flex items-center gap-2">
							<span class="material-symbols-outlined text-secondary-container">visibility</span>
							Tầm nhìn: <strong><?php echo esc_html( $room_view ); ?></strong>
						</div>
					</div>
				</div>

				<!-- Long Description -->
				<div class="space-y-6">
					<h3 class="font-headline-md text-headline-md text-primary">Giới thiệu không gian</h3>
					<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed"><?php echo esc_html( $room_desc ); ?></p>
				</div>

				<!-- Amenities Checklist -->
				<div class="space-y-6 pt-6 border-t border-outline/10">
					<h3 class="font-headline-md text-headline-md text-primary">Tiện nghi đi kèm</h3>
					<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
						<?php foreach($amenities as $item): ?>
							<div class="flex items-center gap-3 text-on-surface-variant">
								<div class="w-10 h-10 rounded-full bg-secondary-container/15 flex items-center justify-center text-secondary-container">
									<span class="material-symbols-outlined text-lg"><?php echo esc_html( $item['icon'] ); ?></span>
								</div>
								<span class="text-sm font-medium"><?php echo esc_html( $item['label'] ); ?></span>
							</div>
						<?php endforeach; ?>
					</div>
				</div>

				<!-- House Rules -->
				<div class="space-y-6 pt-6 border-t border-outline/10 bg-surface-container-lowest p-8 rounded-3xl border border-outline/5">
					<h3 class="font-headline-md text-headline-md text-primary">Quy định và Chính sách</h3>
					<ul class="space-y-3 text-sm text-on-surface-variant">
						<li class="flex items-start gap-2">
							<span class="material-symbols-outlined text-secondary-container text-lg">check_circle</span>
							Nhận phòng từ: <strong>14:00</strong> | Trả phòng trước: <strong>12:00</strong>.
						</li>
						<li class="flex items-start gap-2">
							<span class="material-symbols-outlined text-secondary-container text-lg">check_circle</span>
							Miễn phí hủy phòng trước 03 ngày kể từ ngày check-in.
						</li>
						<li class="flex items-start gap-2">
							<span class="material-symbols-outlined text-secondary-container text-lg">check_circle</span>
							Vui lòng không hút thuốc lá trong phòng và không mang theo vật nuôi.
						</li>
					</ul>
				</div>
			</div>

			<!-- Right Column: Sticky Booking Sidebar -->
			<div class="lg:col-span-4">
				<div class="bg-surface-container border border-outline/10 p-8 rounded-[2rem] shadow-xl sticky top-28 space-y-6">
					<div>
						<p class="text-sm text-on-surface-variant opacity-75 uppercase tracking-widest">Giá phòng</p>
						<div class="flex items-baseline gap-2">
							<span class="text-3xl font-bold text-primary"><?php echo esc_html( $room_price ); ?></span>
							<span class="text-sm text-on-surface-variant">/ đêm</span>
						</div>
					</div>

					<form id="nep-room-detail-booking-form" class="space-y-4 pt-4 border-t border-outline/10">
						<div>
							<label class="block text-xs font-semibold text-primary uppercase mb-2">Ngày đến</label>
							<input type="date" class="w-full bg-surface border border-outline/20 rounded-xl px-4 py-3 focus:outline-none focus:border-primary text-on-surface" required />
						</div>
						<div>
							<label class="block text-xs font-semibold text-primary uppercase mb-2">Ngày đi</label>
							<input type="date" class="w-full bg-surface border border-outline/20 rounded-xl px-4 py-3 focus:outline-none focus:border-primary text-on-surface" required />
						</div>
						<div>
							<label class="block text-xs font-semibold text-primary uppercase mb-2">Họ &amp; Tên khách hàng</label>
							<input type="text" class="w-full bg-surface border border-outline/20 rounded-xl px-4 py-3 focus:outline-none focus:border-primary text-on-surface" placeholder="Nhập tên của bạn" required />
						</div>
						<div>
							<label class="block text-xs font-semibold text-primary uppercase mb-2">Số điện thoại</label>
							<input type="tel" class="w-full bg-surface border border-outline/20 rounded-xl px-4 py-3 focus:outline-none focus:border-primary text-on-surface" placeholder="Nhập SĐT để xác nhận" required />
						</div>
						
						<button type="submit" class="w-full bg-secondary-container text-on-secondary-container font-label-caps text-label-caps py-4 rounded-xl hover:bg-secondary hover:text-on-secondary transition-all duration-300 active:scale-95 flex items-center justify-center gap-2 shadow-lg hover:shadow-secondary/20">
							Yêu cầu đặt phòng
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
jQuery(document).ready(function($){
	$('#nep-room-detail-booking-form').on('submit', function(e){
		e.preventDefault();
		Swal.fire({
			icon: 'success',
			title: 'Đã gửi yêu cầu đặt phòng!',
			text: 'Nếp đã ghi nhận yêu cầu đặt <?php echo esc_html($room_name); ?> của bạn. Nhân viên hỗ trợ sẽ gọi điện xác nhận ngay lập tức.',
			confirmButtonColor: '#1b3022'
		});
	});
});
</script>

<?php
get_footer();
