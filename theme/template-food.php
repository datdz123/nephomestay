<?php
/**
 * Template Name: Đặt đồ ăn Nếp Homestay
 *
 * @package qd
 */

$theme_uri = get_template_directory_uri();
get_header();

// Sample Menu Data
$menus = [
	'set' => [
		[
			'id' => 'set-1',
			'name' => 'Mâm Cơm Bản Địa Nếp',
			'price' => 350000,
			'price_format' => '350.000đ',
			'desc' => 'Mâm cơm truyền thống gồm gà đồi hấp lá khế, lợn mán nướng hạt dổi, măng đắng rừng luộc chấm chẩm chéo và xôi nếp nương thơm nức.',
			'image' => $theme_uri . '/assets/images/stitch-design/experience-food.jpg',
			'badge' => 'Phổ biến nhất'
		],
		[
			'id' => 'set-2',
			'name' => 'Mâm Cơm Đặc Sản Hà Giang',
			'price' => 450000,
			'price_format' => '450.000đ',
			'desc' => 'Hương vị trọn vẹn với cá suối nướng muối ớt, thịt trâu gác bếp xào măng chua, cải mèo xào tỏi và cơm lam nướng dẻo.',
			'image' => $theme_uri . '/assets/images/stitch-design/about.jpg',
			'badge' => 'Gợi ý từ Nếp'
		]
	],
	'single' => [
		[
			'id' => 'dish-1',
			'name' => 'Gà Đồi Nướng Mọi Hạt Dổi',
			'price' => 220000,
			'price_format' => '220.000đ',
			'desc' => 'Nửa con gà chạy đồi chắc thịt nướng than hoa rực hồng, thơm mùi mắc khén và hạt dổi cay tê nhẹ.',
			'image' => $theme_uri . '/assets/images/stitch-design/experience-food.jpg',
			'badge' => ''
		],
		[
			'id' => 'dish-2',
			'name' => 'Lợn Bản Xào Mắc Khén',
			'price' => 120000,
			'price_format' => '120.000đ',
			'desc' => 'Thịt ba chỉ lợn đen thái mỏng xào săn với hành tỏi, lá chanh và hạt mắc khén thơm nức đặc trưng vùng cao.',
			'image' => $theme_uri . '/assets/images/stitch-design/common-veranda.jpg',
			'badge' => ''
		],
		[
			'id' => 'dish-3',
			'name' => 'Cá Suối Chiên Giòn Rụm',
			'price' => 90000,
			'price_format' => '90.000đ',
			'desc' => 'Đĩa cá suối tươi đánh bắt tự nhiên buổi sáng, làm sạch rồi chiên ngập dầu giòn rụm chấm nước mắm tỏi ớt.',
			'image' => $theme_uri . '/assets/images/stitch-design/common-detail.jpg',
			'badge' => ''
		],
		[
			'id' => 'dish-4',
			'name' => 'Cơm Lam Nướng Ống Tre',
			'price' => 150000, // 10 ống lam
			'price_format' => '150.000đ / mâm 10 ống',
			'desc' => 'Gạo nếp nương ngâm nước lá thơm, cho vào ống tre non nướng trên than hồng thơm ngậy.',
			'image' => $theme_uri . '/assets/images/stitch-design/hero-bg.jpg',
			'badge' => ''
		]
	]
];
?>

<!-- Food Hero Section -->
<section class="py-20 bg-gradient-to-br from-primary via-[#132419] to-primary text-white text-center relative overflow-hidden">
	<div class="absolute inset-0 bg-cover bg-center opacity-20" style="background-image: url('<?php echo esc_url($theme_uri . '/assets/images/stitch-design/experience-food.jpg'); ?>')"></div>
	<div class="relative z-10 max-w-3xl mx-auto px-margin-mobile">
		<span class="font-label-caps text-label-caps text-secondary-container mb-4 block tracking-widest">HƯƠNG VỊ QUÊ NHÀ</span>
		<h1 class="font-display-hero text-display-hero text-white mb-6">Thực Đơn Nhà Nếp</h1>
		<p class="font-body-lg text-white/80 max-w-xl mx-auto italic">
			Rau hái từ vườn nhà, gà chạy đồi chắc thịt và hạt gia vị thơm cay nồng nàn bản sắc Tây Bắc.
		</p>
	</div>
</section>

<!-- Menu and Cart Grid -->
<section class="py-16 px-margin-mobile md:px-margin-desktop bg-surface">
	<div class="max-w-container-max mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12">
		
		<!-- Left Menu Column -->
		<div class="lg:col-span-8 space-y-16">
			
			<!-- Category 1: Mâm Cơm Set -->
			<div>
				<h2 class="font-headline-lg text-headline-lg text-primary mb-8 pb-4 border-b border-outline/10 flex items-center gap-3">
					<span class="material-symbols-outlined text-3xl">restaurant_menu</span> Mâm Cơm Đặc Sản
				</h2>
				<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
					<?php foreach($menus['set'] as $item): ?>
						<div class="bg-surface-container-lowest border border-outline/5 rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 group flex flex-col h-full justify-between">
							<div class="relative overflow-hidden aspect-[16/10]">
								<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['name']); ?>" />
								<?php if($item['badge']): ?>
									<div class="absolute top-4 left-4 bg-secondary-container text-on-secondary-container px-3 py-1 rounded-full font-label-caps text-xs shadow-md">
										<?php echo esc_html($item['badge']); ?>
									</div>
								<?php endif; ?>
							</div>
							<div class="p-6 flex-grow flex flex-col justify-between">
								<div>
									<h3 class="font-headline-md text-headline-md text-primary font-bold mb-2"><?php echo esc_html($item['name']); ?></h3>
									<p class="text-on-surface-variant text-sm mb-4 line-clamp-3"><?php echo esc_html($item['desc']); ?></p>
								</div>
								<div class="flex justify-between items-center pt-4 border-t border-outline/5 mt-auto">
									<span class="font-headline-md text-tertiary-container font-bold"><?php echo esc_html($item['price_format']); ?></span>
									<button class="bg-primary text-white hover:bg-primary/90 px-4 py-2 rounded-xl text-xs font-semibold btn-add-dish" 
										data-id="<?php echo esc_attr($item['id']); ?>" 
										data-name="<?php echo esc_attr($item['name']); ?>" 
										data-price="<?php echo esc_attr($item['price']); ?>">
										+ Thêm món
									</button>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>

			<!-- Category 2: Món Gọi Lẻ -->
			<div>
				<h2 class="font-headline-lg text-headline-lg text-primary mb-8 pb-4 border-b border-outline/10 flex items-center gap-3">
					<span class="material-symbols-outlined text-3xl">soup_kitchen</span> Món Ăn Gọi Lẻ
				</h2>
				<div class="grid grid-cols-1 md:grid-cols-2 gap-8">
					<?php foreach($menus['single'] as $item): ?>
						<div class="bg-surface-container-lowest border border-outline/5 rounded-3xl overflow-hidden shadow-md hover:shadow-xl transition-all duration-300 group flex flex-col h-full justify-between">
							<div class="relative overflow-hidden aspect-[16/10]">
								<img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105" src="<?php echo esc_url($item['image']); ?>" alt="<?php echo esc_attr($item['name']); ?>" />
							</div>
							<div class="p-6 flex-grow flex flex-col justify-between">
								<div>
									<h3 class="font-headline-md text-headline-md text-primary font-bold mb-2"><?php echo esc_html($item['name']); ?></h3>
									<p class="text-on-surface-variant text-sm mb-4 line-clamp-3"><?php echo esc_html($item['desc']); ?></p>
								</div>
								<div class="flex justify-between items-center pt-4 border-t border-outline/5 mt-auto">
									<span class="font-headline-md text-tertiary-container font-bold"><?php echo esc_html($item['price_format']); ?></span>
									<button class="bg-primary text-white hover:bg-primary/90 px-4 py-2 rounded-xl text-xs font-semibold btn-add-dish" 
										data-id="<?php echo esc_attr($item['id']); ?>" 
										data-name="<?php echo esc_attr($item['name']); ?>" 
										data-price="<?php echo esc_attr($item['price']); ?>">
										+ Thêm món
									</button>
								</div>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>

		<!-- Right Cart Column -->
		<div class="lg:col-span-4">
			<div class="bg-surface-container-lowest border border-outline/10 p-8 rounded-[2rem] shadow-xl sticky top-28 space-y-6">
				<h3 class="font-headline-md text-headline-md text-primary border-b border-outline/10 pb-4 flex items-center gap-2">
					<span class="material-symbols-outlined">shopping_basket</span> Đơn Đặt Đồ Ăn
				</h3>
				
				<!-- Cart Items List -->
				<div id="nep-cart-list" class="space-y-4 max-h-[300px] overflow-y-auto pr-2 no-scrollbar">
					<div id="nep-cart-empty" class="text-center py-8 text-on-surface-variant opacity-60 text-sm">
						Chưa có món ăn nào được chọn.
					</div>
				</div>

				<!-- Total Cost Summary -->
				<div class="border-t border-outline/10 pt-4 space-y-2">
					<div class="flex justify-between text-sm text-on-surface-variant">
						<span>Tạm tính</span>
						<span id="nep-cart-subtotal">0đ</span>
					</div>
					<div class="flex justify-between text-sm text-on-surface-variant">
						<span>Phí phục vụ &amp; Giao phòng</span>
						<span class="text-secondary-container font-semibold">Miễn phí</span>
					</div>
					<div class="flex justify-between font-bold text-lg text-primary pt-2 border-t border-outline/5">
						<span>Tổng cộng</span>
						<span id="nep-cart-total">0đ</span>
					</div>
				</div>

				<!-- Customer details and submit -->
				<form id="nep-food-order-form" class="space-y-4 pt-4 border-t border-outline/10">
					<div>
						<label class="block text-xs font-semibold text-primary uppercase mb-1">Số phòng / Số điện thoại</label>
						<input type="text" id="nep-order-contact" class="w-full bg-surface border border-outline/20 rounded-xl px-4 py-2.5 focus:outline-none focus:border-primary text-on-surface text-sm" placeholder="Nhập số phòng hoặc SĐT liên hệ" required />
					</div>
					<div>
						<label class="block text-xs font-semibold text-primary uppercase mb-1">Thời gian muốn nhận</label>
						<select id="nep-order-time" class="w-full bg-surface border border-outline/20 rounded-xl px-4 py-2.5 focus:outline-none focus:border-primary text-on-surface text-sm">
							<option value="now">Giao ngay khi nấu xong (~30-45 phút)</option>
							<option value="11:30">Trưa (11:30 - 12:30)</option>
							<option value="18:30">Tối (18:30 - 20:00)</option>
						</select>
					</div>
					<button type="submit" class="w-full bg-secondary-container text-on-secondary-container font-label-caps text-label-caps py-4 rounded-xl hover:bg-secondary hover:text-on-secondary transition-all duration-300 active:scale-95 flex items-center justify-center gap-2">
						Gửi đơn đặt đồ ăn
					</button>
				</form>
			</div>
		</div>
	</div>
</section>

<!-- Cart Operations Script -->
<script>
jQuery(document).ready(function($){
	var cart = {};

	function updateCartUI() {
		var $cartList = $('#nep-cart-list');
		$cartList.empty();
		
		var total = 0;
		var itemsCount = 0;
		
		$.each(cart, function(id, item) {
			itemsCount++;
			var itemTotal = item.price * item.quantity;
			total += itemTotal;
			
			var itemHtml = 
				'<div class="flex justify-between items-center bg-surface p-3 rounded-2xl border border-outline/5">' +
					'<div>' +
						'<p class="text-sm font-bold text-primary">' + item.name + '</p>' +
						'<p class="text-xs text-on-surface-variant">' + item.price.toLocaleString('vi-VN') + 'đ x ' + item.quantity + '</p>' +
					'</div>' +
					'<div class="flex items-center gap-2">' +
						'<button class="w-6 h-6 rounded-full bg-outline/10 text-primary flex items-center justify-center hover:bg-outline/20 btn-qty-minus" data-id="' + id + '">-</button>' +
						'<span class="text-xs font-bold">' + item.quantity + '</span>' +
						'<button class="w-6 h-6 rounded-full bg-outline/10 text-primary flex items-center justify-center hover:bg-outline/20 btn-qty-plus" data-id="' + id + '">+</button>' +
					'</div>' +
				'</div>';
			$cartList.append(itemHtml);
		});
		
		if (itemsCount === 0) {
			$('#nep-cart-empty').show();
			$cartList.append($('#nep-cart-empty'));
		} else {
			$('#nep-cart-empty').hide();
		}
		
		$('#nep-cart-subtotal').text(total.toLocaleString('vi-VN') + 'đ');
		$('#nep-cart-total').text(total.toLocaleString('vi-VN') + 'đ');
	}

	$('.btn-add-dish').on('click', function(){
		var id = $(this).data('id');
		var name = $(this).data('name');
		var price = parseFloat($(this).data('price'));
		
		if (cart[id]) {
			cart[id].quantity++;
		} else {
			cart[id] = {
				name: name,
				price: price,
				quantity: 1
			};
		}
		
		updateCartUI();
		
		// Toast notification
		Swal.fire({
			toast: true,
			position: 'top-end',
			icon: 'success',
			title: 'Đã thêm: ' + name,
			showConfirmButton: false,
			timer: 1500
		});
	});

	$(document).on('click', '.btn-qty-plus', function(){
		var id = $(this).data('id');
		if (cart[id]) {
			cart[id].quantity++;
			updateCartUI();
		}
	});

	$(document).on('click', '.btn-qty-minus', function(){
		var id = $(this).data('id');
		if (cart[id]) {
			cart[id].quantity--;
			if (cart[id].quantity <= 0) {
				delete cart[id];
			}
			updateCartUI();
		}
	});

	$('#nep-food-order-form').on('submit', function(e){
		e.preventDefault();
		
		if ($.isEmptyObject(cart)) {
			Swal.fire('Đơn hàng trống', 'Vui lòng thêm ít nhất một món ăn vào đơn đặt trước khi gửi!', 'warning');
			return;
		}
		
		var roomOrPhone = $('#nep-order-contact').val();
		var time = $('#nep-order-time').find('option:selected').text();
		
		Swal.fire({
			icon: 'success',
			title: 'Đặt món thành công!',
			text: 'Đơn hàng của bạn đang được chuẩn bị và sẽ được giao đến "' + roomOrPhone + '" vào lúc: ' + time + '.',
			confirmButtonColor: '#1b3022'
		}).then(() => {
			cart = {};
			$('#nep-order-contact').val('');
			updateCartUI();
		});
	});
});
</script>

<?php
get_footer();
