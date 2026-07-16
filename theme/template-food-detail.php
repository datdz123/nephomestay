<?php
/**
 * Template Name: Chi tiết món ăn Nếp
 *
 * @package qd
 */

$theme_uri = get_template_directory_uri();
get_header();

// Determine food details based on page slug
$slug = get_post_field( 'post_name', get_post() );
$is_mam_com = (strpos($slug, 'mam-com') !== false || strpos($slug, 'set') !== false || strpos($slug, 'ban-dia') !== false);

if ($is_mam_com) {
	$food_name = "Mâm Cơm Bản Địa Nếp";
	$food_price = "350.000đ";
	$food_price_val = 350000;
	$food_image = $theme_uri . "/assets/images/stitch-design/experience-food.jpg";
	$food_time = "45 - 60 phút chuẩn bị";
	$food_serves = "2 - 3 người dùng";
	$food_desc = "Mâm cơm bản địa Nếp hội tụ đầy đủ những tinh túy ẩm thực của đồng bào Thái vùng cao Tây Bắc. Mỗi món ăn đều sử dụng nguồn nguyên liệu rau củ sạch tự nuôi trồng hữu cơ trong vườn của Nếp kết hợp gia vị rừng nguyên bản.";
	$items = [
		"Gà đồi chạy bộ hấp lá chanh rừng thơm ngọt chắc thịt",
		"Thịt lợn mán nướng mắc khén, hạt dổi thơm cay tê đầu lưỡi",
		"Măng đắng rừng Hà Giang luộc chấm chẩm chéo cay cay ngăm đắng đầy mê hoặc",
		"Xôi nếp nương đồ trong chõ gỗ dẻo thơm ngậy",
		"Canh rau tầm bóp thanh mát giải nhiệt mùa hè"
	];
} else {
	$food_name = "Gà Đồi Nướng Mọi Hạt Dổi";
	$food_price = "220.000đ";
	$food_price_val = 220000;
	$food_image = $theme_uri . "/assets/images/stitch-design/about.jpg";
	$food_time = "30 - 45 phút chuẩn bị";
	$food_serves = "1 - 2 người dùng";
	$food_desc = "Gà đồi chạy bộ Hà Giang nổi tiếng thịt dai thơm ngọt, không mỡ. Gà được làm sạch, tẩm ướp thảo mộc rừng độc đáo cùng hạt dổi nướng chín vàng giã nhỏ. Sau đó gà được nướng thủ công trên than hoa rực hồng cho đến khi lớp da ngoài vàng óng giòn rụm, tỏa hương thơm quyến rũ không thể cưỡng lại.";
	$items = [
		"Nửa con gà chạy đồi nướng mọi vàng óng thơm phức",
		"Nước chấm chẩm chéo đặc trưng giã tay chuẩn vị Thái",
		"Rau thơm rừng ăn kèm chống ngấy và kích thích vị giác"
	];
}
?>

<div class="py-12 px-margin-mobile md:px-margin-desktop bg-surface">
	<div class="max-w-container-max mx-auto">
		
		<!-- Breadcrumbs -->
		<div class="flex items-center gap-2 text-sm text-on-surface-variant opacity-70 mb-8">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="hover:text-primary transition-colors">Trang chủ</a>
			<span class="material-symbols-outlined text-xs">chevron_right</span>
			<a href="<?php echo esc_url( home_url( '/dat-do-an/' ) ); ?>" class="hover:text-primary transition-colors">Đặt đồ ăn</a>
			<span class="material-symbols-outlined text-xs">chevron_right</span>
			<span class="text-primary font-semibold"><?php echo esc_html( $food_name ); ?></span>
		</div>

		<!-- Grid Layout -->
		<div class="grid grid-cols-1 lg:grid-cols-12 gap-12">
			
			<!-- Left Column: Image & Details -->
			<div class="lg:col-span-8 space-y-12">
				
				<!-- Main Food Image -->
				<div class="rounded-[2.5rem] overflow-hidden shadow-2xl relative group">
					<img class="w-full h-[400px] md:h-[500px] object-cover transition-transform duration-700 group-hover:scale-105" src="<?php echo esc_url( $room_image ); ?>" alt="<?php echo esc_attr( $food_name ); ?>" />
					<div class="absolute bottom-6 left-6 bg-primary/80 backdrop-blur-md text-white px-6 py-2 rounded-full font-label-caps text-label-caps">
						Đặc sản vùng cao Tây Bắc
					</div>
				</div>

				<!-- Header Info -->
				<div>
					<h1 class="font-headline-lg text-headline-lg text-primary mb-4"><?php echo esc_html( $food_name ); ?></h1>
					<div class="flex flex-wrap gap-6 text-sm text-on-surface-variant opacity-80 border-b border-outline/10 pb-6">
						<div class="flex items-center gap-2">
							<span class="material-symbols-outlined text-secondary-container">alarm</span>
							Chuẩn bị: <strong><?php echo esc_html( $food_time ); ?></strong>
						</div>
						<div class="flex items-center gap-2">
							<span class="material-symbols-outlined text-secondary-container">groups</span>
							Khẩu phần: <strong><?php echo esc_html( $food_serves ); ?></strong>
						</div>
						<div class="flex items-center gap-2">
							<span class="material-symbols-outlined text-secondary-container">spa</span>
							Nguyên liệu: <strong>Sạch hữu cơ 100%</strong>
						</div>
					</div>
				</div>

				<!-- Description -->
				<div class="space-y-6">
					<h3 class="font-headline-md text-headline-md text-primary">Hương vị độc bản</h3>
					<p class="font-body-lg text-body-lg text-on-surface-variant leading-relaxed"><?php echo esc_html( $food_desc ); ?></p>
				</div>

				<!-- Menu List -->
				<div class="space-y-6 pt-6 border-t border-outline/10">
					<h3 class="font-headline-md text-headline-md text-primary">Các món bao gồm</h3>
					<div class="space-y-4">
						<?php foreach($items as $item): ?>
							<div class="flex items-start gap-3 text-on-surface-variant">
								<span class="material-symbols-outlined text-secondary-container mt-0.5">check_circle</span>
								<span class="text-sm font-medium leading-relaxed"><?php echo esc_html( $item ); ?></span>
							</div>
						<?php endforeach; ?>
					</div>
				</div>

				<!-- Nutrition note -->
				<div class="space-y-6 pt-6 border-t border-outline/10 bg-secondary-container/5 p-8 rounded-3xl border border-secondary-container/10">
					<h3 class="font-headline-md text-headline-md text-primary">Cam kết xanh từ Nếp</h3>
					<p class="text-sm text-on-surface-variant leading-relaxed">
						Nếp tự tay gieo trồng các loại rau, măng đắng rừng lấy từ rừng tre sau nhà. Gia vị mắc khén, hạt dổi được đồng bào Thái thu hoạch tự nhiên. Chúng tôi cam kết không sử dụng bột ngọt hóa chất hay chất phụ gia thực phẩm có hại cho sức khỏe.
					</p>
				</div>
			</div>

			<!-- Right Column: Sidebar Order Form -->
			<div class="lg:col-span-4">
				<div class="bg-surface-container border border-outline/10 p-8 rounded-[2rem] shadow-xl sticky top-28 space-y-6">
					<div>
						<p class="text-sm text-on-surface-variant opacity-75 uppercase tracking-widest">Đơn giá</p>
						<div class="flex items-baseline gap-2">
							<span class="text-3xl font-bold text-primary"><?php echo esc_html( $food_price ); ?></span>
							<span class="text-sm text-on-surface-variant">/ suất</span>
						</div>
					</div>

					<form id="nep-food-detail-order-form" class="space-y-4 pt-4 border-t border-outline/10">
						<div>
							<label class="block text-xs font-semibold text-primary uppercase mb-2">Số lượng đặt</label>
							<select id="food-detail-qty" class="w-full bg-surface border border-outline/20 rounded-xl px-4 py-3 focus:outline-none focus:border-primary text-on-surface">
								<option value="1">1 Suất</option>
								<option value="2">2 Suất</option>
								<option value="3">3 Suất</option>
								<option value="4">4 Suất</option>
								<option value="5">5+ Suất (Liên hệ trực tiếp)</option>
							</select>
						</div>
						<div>
							<label class="block text-xs font-semibold text-primary uppercase mb-2">Số phòng hoặc Số điện thoại</label>
							<input type="text" id="food-detail-room" class="w-full bg-surface border border-outline/20 rounded-xl px-4 py-3 focus:outline-none focus:border-primary text-on-surface" placeholder="Ví dụ: Phòng Dorm giường số 3 hoặc SĐT" required />
						</div>
						<div>
							<label class="block text-xs font-semibold text-primary uppercase mb-2">Ghi chú đặc biệt</label>
							<textarea id="food-detail-note" class="w-full bg-surface border border-outline/20 rounded-xl px-4 py-3 focus:outline-none focus:border-primary text-on-surface h-24" placeholder="Ví dụ: Không ăn được ớt, giao lúc 12h trưa..."></textarea>
						</div>
						
						<button type="submit" class="w-full bg-secondary-container text-on-secondary-container font-label-caps text-label-caps py-4 rounded-xl hover:bg-secondary hover:text-on-secondary transition-all duration-300 active:scale-95 flex items-center justify-center gap-2 shadow-lg hover:shadow-secondary/20">
							Đặt món ngay
						</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
jQuery(document).ready(function($){
	$('#nep-food-detail-order-form').on('submit', function(e){
		e.preventDefault();
		var qty = $('#food-detail-qty').val();
		var room = $('#food-detail-room').val();
		
		Swal.fire({
			icon: 'success',
			title: 'Đặt món thành công!',
			text: 'Đã nhận yêu cầu đặt ' + qty + ' suất <?php echo esc_html($food_name); ?> cho "' + room + '". Nếp sẽ giao đúng giờ!',
			confirmButtonColor: '#1b3022'
		}).then(() => {
			$('#food-detail-room').val('');
			$('#food-detail-note').val('');
		});
	});
});
</script>

<?php
get_footer();
