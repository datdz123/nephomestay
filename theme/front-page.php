<?php
/**
 * Template Name: Front Page Template
 *
 * @package qd
 */

get_header();
$theme_uri = esc_url( get_template_directory_uri() );
?>



<!-- Hero Section -->
<section class="relative h-screen flex items-center justify-center overflow-hidden" id="home">
	<div class="absolute inset-0 z-0 transition-all duration-1000 opacity-100 translate-y-0">
		<div class="w-full h-full bg-cover bg-center scale-105 animate-pulse-slow" style="background-image: url('<?php echo $theme_uri; ?>/assets/images/stitch-design/hero-bg.jpg')"></div>
		<div class="absolute inset-0 bg-primary/40"></div>
	</div>
	<div class="relative z-10 text-center px-margin-mobile max-w-4xl transition-all duration-1000 opacity-100 translate-y-0">
		<h1 class="font-display-hero text-headline-lg md:text-display-hero text-white mb-6 text-shadow-hero">
			Nếp Homestay
		</h1>
		<p class="font-headline-md text-white/90 mb-10 max-w-2xl mx-auto leading-relaxed italic">
			Nơi những thói quen bình dị được nâng niu giữa hương đồng gió nội.
		</p>
		<div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
			<a class="bg-secondary-container text-on-secondary-container px-10 py-4 rounded-xl font-label-caps text-label-caps hover:shadow-xl hover:shadow-secondary/20 transition-all duration-500 transform hover:-translate-y-1" href="#rooms">
				Đặt phòng ngay
			</a>
			<a class="border border-white/40 text-white px-10 py-4 rounded-xl font-label-caps text-label-caps backdrop-blur-sm hover:bg-white/10 transition-all duration-300" href="#about">
				Khám phá thêm
			</a>
		</div>
	</div>
	<div class="absolute bottom-10 left-1/2 -translate-x-1/2 animate-bounce transition-all duration-1000 opacity-100 translate-y-0">
		<span class="material-symbols-outlined text-white text-4xl">keyboard_arrow_down</span>
	</div>
</section>

<!-- Giới Thiệu (About) Section -->
<section class="py-24 md:py-32 px-margin-mobile md:px-margin-desktop bg-surface" id="about">
	<div class="max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-2 gap-16 items-center transition-all duration-1000 opacity-100 translate-y-0">
		<div class="order-2 md:order-1">
			<span class="font-label-caps text-label-caps text-tertiary-container mb-4 block">VỀ CHÚNG TÔI</span>
			<h2 class="font-headline-lg text-headline-lg text-primary mb-8 leading-tight">Gìn giữ nét quê giữa <br/><span class="italic font-normal">hơi thở đương đại</span></h2>
			<p class="font-body-lg text-body-lg text-on-surface-variant mb-6 leading-relaxed">
				Nếp không chỉ là một điểm dừng chân, mà là một hành trình tìm lại sự tĩnh lặng trong tâm hồn. Với kiến trúc lấy cảm hiện từ những ngôi nhà mái lá truyền thống, kết hợp tinh tế cùng vật liệu gạch trần và gỗ tự nhiên.
			</p>
			<p class="font-body-md text-body-md text-on-surface-variant mb-8 opacity-80">
				Mỗi góc nhỏ tại Nếp đều được chăm chút để bạn cảm nhận được sự ấm cúng, gần gũi như đang ở chính ngôi nhà của mình, nơi những thói quen tốt đẹp được tiếp nối.
			</p>
			<div class="grid grid-cols-2 gap-6">
				<div class="flex items-center gap-3">
					<span class="material-symbols-outlined text-secondary-container text-3xl">psychology_alt</span>
					<span class="font-label-caps text-label-caps">Tĩnh lặng</span>
				</div>
				<div class="flex items-center gap-3">
					<span class="material-symbols-outlined text-secondary-container text-3xl">eco</span>
					<span class="font-label-caps text-label-caps">Bền vững</span>
				</div>
			</div>
		</div>

		<div class="order-1 md:order-2 relative px-4 py-4">
			<!-- Offset border frame for high-end feel -->
			<div class="absolute -inset-1 border-2 border-secondary-container/30 rounded-[2rem] -z-10 translate-x-4 translate-y-4"></div>
			<div class="rounded-3xl overflow-hidden shadow-2xl rotate-2 hover:rotate-0 transition-all duration-700 relative">
				<img class="w-full h-[500px] object-cover" alt="Không gian ấm áp tại Nếp Homestay" src="<?php echo $theme_uri; ?>/assets/images/stitch-design/about.jpg"/>
			</div>
			<div class="absolute -bottom-4 -left-4 bg-primary-container p-8 rounded-2xl hidden lg:block shadow-xl z-20">
				<p class="text-on-primary-container font-headline-md italic">"Trở về với bản nguyên"</p>
			</div>
		</div>
	</div>
</section>

<!-- Điểm Nổi Bật Section -->
<section class="py-24 px-margin-mobile md:px-margin-desktop bg-surface-container-low">
	<div class="max-w-container-max mx-auto text-center mb-16 transition-all duration-1000 opacity-100 translate-y-0">
		<h2 class="font-headline-lg text-headline-lg text-primary mb-4">Lý do bạn yêu Nếp</h2>
		<div class="w-20 h-1 bg-secondary-container mx-auto"></div>
	</div>
	<div class="max-w-container-max mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8 transition-all duration-1000 opacity-100 translate-y-0">
		<!-- Card 1 -->
		<div class="bg-surface p-8 rounded-3xl border border-outline/5 hover:border-secondary-container/40 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 transform group">
			<div class="w-16 h-16 bg-gradient-to-tr from-secondary-container/20 to-primary-container/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-inner">
				<svg viewBox="0 0 64 64" fill="none" class="w-10 h-10" xmlns="http://www.w3.org/2000/svg">
					<defs>
						<linearGradient id="rice-sun" x1="0" y1="0" x2="1" y2="1">
							<stop offset="0%" stop-color="#FCD34D"/>
							<stop offset="100%" stop-color="#F59E0B"/>
						</linearGradient>
						<linearGradient id="rice-field" x1="0" y1="0" x2="0" y2="1">
							<stop offset="0%" stop-color="#10B981"/>
							<stop offset="100%" stop-color="#047857"/>
						</linearGradient>
					</defs>
					<circle cx="32" cy="22" r="8" fill="url(#rice-sun)" opacity="0.8"/>
					<path d="M12 36 L24 24 L36 36 Z" fill="#34D399" opacity="0.3"/>
					<path d="M28 36 L40 20 L52 36 Z" fill="#059669" opacity="0.2"/>
					<path d="M8 44 C20 40, 44 40, 56 44" stroke="url(#rice-field)" stroke-width="3" stroke-linecap="round"/>
					<path d="M6 50 C18 46, 46 46, 58 50" stroke="url(#rice-field)" stroke-width="4" stroke-linecap="round"/>
					<path d="M4 56 C16 52, 48 52, 60 56" stroke="#047857" stroke-width="5" stroke-linecap="round"/>
				</svg>
			</div>
			<h3 class="font-headline-md text-headline-md text-primary mb-3">View ruộng lúa</h3>
			<p class="text-on-surface-variant opacity-80">Tầm nhìn khoáng đạt ra cánh đồng lúa xanh mướt trải dài vô tận.</p>
		</div>
		<!-- Card 2 -->
		<div class="bg-surface p-8 rounded-3xl border border-outline/5 hover:border-secondary-container/40 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 transform group">
			<div class="w-16 h-16 bg-gradient-to-tr from-secondary-container/20 to-primary-container/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-inner">
				<svg viewBox="0 0 64 64" fill="none" class="w-10 h-10" xmlns="http://www.w3.org/2000/svg">
					<defs>
						<linearGradient id="roof-grad" x1="0" y1="0" x2="1" y2="1">
							<stop offset="0%" stop-color="#D97706"/>
							<stop offset="100%" stop-color="#78350F"/>
						</linearGradient>
						<linearGradient id="wall-grad" x1="0" y1="0" x2="1" y2="0">
							<stop offset="0%" stop-color="#F5E0B3"/>
							<stop offset="100%" stop-color="#D5B887"/>
						</linearGradient>
					</defs>
					<rect x="20" y="32" width="24" height="20" rx="3" fill="url(#wall-grad)"/>
					<rect x="28" y="38" width="8" height="8" rx="1.5" fill="#FCD34D"/>
					<rect x="40" y="42" width="4" height="10" rx="0.5" fill="#78350F"/>
					<path d="M14 32 L32 14 L50 32 Z" fill="url(#roof-grad)"/>
					<path d="M32 14 L32 30" stroke="#FCD34D" stroke-width="1.5" stroke-dasharray="3 3"/>
					<path d="M22 24 L42 24" stroke="#FCD34D" stroke-width="1.5" opacity="0.6"/>
				</svg>
			</div>
			<h3 class="font-headline-md text-headline-md text-primary mb-3">Kiến trúc mái lá</h3>
			<p class="text-on-surface-variant opacity-80">Sự kết hợp độc đáo giữa gạch trần mộc mạc và mái lá mát rượi.</p>
		</div>
		<!-- Card 3 -->
		<div class="bg-surface p-8 rounded-3xl border border-outline/5 hover:border-secondary-container/40 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 transform group">
			<div class="w-16 h-16 bg-gradient-to-tr from-secondary-container/20 to-primary-container/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-inner">
				<svg viewBox="0 0 64 64" fill="none" class="w-10 h-10" xmlns="http://www.w3.org/2000/svg">
					<defs>
						<linearGradient id="leaf-grad" x1="0" y1="0" x2="0" y2="1">
							<stop offset="0%" stop-color="#34D399"/>
							<stop offset="50%" stop-color="#059669"/>
							<stop offset="100%" stop-color="#064E3B"/>
						</linearGradient>
					</defs>
					<path d="M32 10 C32 10, 48 22, 44 42 C40 50, 32 54, 32 54 C32 54, 24 50, 20 42 C16 22, 32 10, 32 10 Z" fill="url(#leaf-grad)"/>
					<path d="M32 10 L32 54" stroke="#D1FAE5" stroke-width="2" stroke-linecap="round"/>
					<path d="M32 20 C36 22, 40 24, 43 28 M32 28 C38 31, 41 35, 43 40 M32 36 C37 39, 39 44, 40 48" stroke="#D1FAE5" stroke-width="1.5" stroke-linecap="round"/>
					<path d="M32 20 C28 22, 24 24, 21 28 M32 28 C26 31, 23 35, 21 40 M32 36 C27 39, 25 44, 24 48" stroke="#D1FAE5" stroke-width="1.5" stroke-linecap="round"/>
				</svg>
			</div>
			<h3 class="font-headline-md text-headline-md text-primary mb-3">Không gian xanh</h3>
			<p class="text-on-surface-variant opacity-80">Hơn 70% diện tích là cây xanh và khu vực sinh hoạt ngoài trời.</p>
		</div>
		<!-- Card 4 -->
		<div class="bg-surface p-8 rounded-3xl border border-outline/5 hover:border-secondary-container/40 shadow-sm hover:shadow-2xl hover:-translate-y-2 transition-all duration-300 transform group">
			<div class="w-16 h-16 bg-gradient-to-tr from-secondary-container/20 to-primary-container/10 rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300 shadow-inner">
				<svg viewBox="0 0 64 64" fill="none" class="w-10 h-10" xmlns="http://www.w3.org/2000/svg">
					<defs>
						<linearGradient id="sky-breeze" x1="0" y1="0" x2="1" y2="1">
							<stop offset="0%" stop-color="#60A5FA"/>
							<stop offset="100%" stop-color="#3B82F6"/>
						</linearGradient>
						<linearGradient id="bird-gold" x1="0" y1="0" x2="1" y2="0">
							<stop offset="0%" stop-color="#F59E0B"/>
							<stop offset="100%" stop-color="#D97706"/>
						</linearGradient>
					</defs>
					<path d="M10 24 C20 18, 30 30, 44 24 C50 20, 52 24, 54 28" stroke="url(#sky-breeze)" stroke-width="2" stroke-linecap="round" opacity="0.6"/>
					<path d="M8 36 C16 32, 28 40, 40 34 C46 30, 50 36, 56 36" stroke="url(#sky-breeze)" stroke-width="1.5" stroke-linecap="round" opacity="0.4"/>
					<path d="M24 16 C26 14, 28 15, 30 18 C32 15, 34 14, 36 16 C34 18, 32 19, 30 22 C28 19, 26 18, 24 16 Z" fill="url(#bird-gold)"/>
					<path d="M12 50 C20 46, 32 52, 48 48" stroke="#059669" stroke-width="2" stroke-linecap="round"/>
					<circle cx="20" cy="48" r="2" fill="#34D399"/>
					<circle cx="32" cy="50" r="2" fill="#34D399"/>
					<circle cx="44" cy="49" r="2" fill="#34D399"/>
				</svg>
			</div>
			<h3 class="font-headline-md text-headline-md text-primary mb-3">Gần gũi thiên nhiên</h3>
			<p class="text-on-surface-variant opacity-80">Đánh thức mọi giác quan bằng tiếng chim hót và gió nội.</p>
		</div>
	</div>
</section>

<!-- Phòng Nghỉ (Rooms) Section -->
<section class="py-24 px-margin-mobile md:px-margin-desktop bg-surface" id="rooms">
	<div class="max-w-container-max mx-auto mb-16 flex flex-col md:flex-row justify-between items-end gap-6 transition-all duration-1000 opacity-100 translate-y-0">
		<div>
			<span class="font-label-caps text-label-caps text-tertiary-container mb-4 block">CHỌN CHỐN DỪNG CHÂN</span>
			<h2 class="font-headline-lg text-headline-lg text-primary">Phòng nghỉ mộc mạc</h2>
		</div>
		<p class="max-w-md text-on-surface-variant">Mỗi gian phòng là một câu chuyện về chất liệu và sự bình yên, được thiết kế để tối ưu sự thoải mái của bạn.</p>
	</div>
	<div class="max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 transition-all duration-1000 opacity-100 translate-y-0">
		<!-- Room 1: Dorm -->
		<div class="bg-surface-container-lowest p-6 rounded-[2rem] border border-outline/5 hover:border-secondary-container/20 shadow-sm hover:shadow-2xl transition-all duration-500 group flex flex-col justify-between">
			<div>
				<div class="relative overflow-hidden rounded-2xl mb-8 aspect-[4/3]">
					<img class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" alt="Phòng Dorm Tập Thể" src="<?php echo $theme_uri; ?>/assets/images/stitch-design/room-dorm.jpg"/>
					<div class="absolute top-6 left-6 bg-secondary-container text-on-secondary-container px-4 py-1.5 rounded-full font-label-caps text-label-caps shadow-md">Phổ biến</div>
				</div>
				<div class="flex justify-between items-start mb-4">
					<h3 class="font-headline-md text-headline-md text-primary font-bold">Phòng Dorm Tập Thể</h3>
					<div class="text-right"><span class="font-headline-md text-tertiary-container font-semibold">Chỉ từ 250.000đ</span></div>
				</div>
				<p class="text-on-surface-variant mb-8 leading-relaxed opacity-95">Không gian rộng rãi với giường tầng cao cấp, rèm che riêng tư và trần mây tre đan thủ công tinh xảo. Lý tưởng cho nhóm bạn hoặc khách đi một mình.</p>
			</div>
			<div>
				<a class="inline-flex items-center gap-2 font-label-caps text-label-caps text-primary border-b border-primary pb-1 group-hover:gap-4 transition-all" href="#">
					XEM CHI TIẾT <span class="material-symbols-outlined text-sm">arrow_forward</span>
				</a>
			</div>
		</div>

		<!-- Room 2: Private -->
		<div class="bg-surface-container-lowest p-6 rounded-[2rem] border border-outline/5 hover:border-secondary-container/20 shadow-sm hover:shadow-2xl transition-all duration-500 group flex flex-col justify-between">
			<div>
				<div class="relative overflow-hidden rounded-2xl mb-8 aspect-[4/3]">
					<img class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" alt="Phòng Riêng Couple" src="<?php echo $theme_uri; ?>/assets/images/stitch-design/room-couple.jpg"/>
				</div>
				<div class="flex justify-between items-start mb-4">
					<h3 class="font-headline-md text-headline-md text-primary font-bold">Phòng Riêng (Couple)</h3>
					<div class="text-right"><span class="font-headline-md text-tertiary-container font-semibold">Chỉ từ 800.000đ</span></div>
				</div>
				<p class="text-on-surface-variant mb-8 leading-relaxed opacity-95">Chốn riêng tư lãng mạn với tường gạch mộc, drap giường họa tiết thổ cẩm và ban công hướng thẳng ra thung lũng xanh rì.</p>
			</div>
			<div>
				<a class="inline-flex items-center gap-2 font-label-caps text-label-caps text-primary border-b border-primary pb-1 group-hover:gap-4 transition-all" href="#">
					XEM CHI TIẾT <span class="material-symbols-outlined text-sm">arrow_forward</span>
				</a>
			</div>
		</div>
	</div>
</section>

<!-- Gallery Section (Không Gian Chung) -->
<section class="py-24 px-margin-mobile md:px-margin-desktop bg-gradient-to-br from-primary-container via-[#132419] to-primary text-white overflow-hidden">
	<div class="max-w-container-max mx-auto grid grid-cols-1 lg:grid-cols-12 gap-12 items-center transition-all duration-1000 opacity-100 translate-y-0">
		<div class="lg:col-span-4">
			<h2 class="font-headline-lg text-headline-lg mb-8 leading-tight">Không gian chung <br/><span class="italic text-secondary-container font-normal">Gắn kết &amp; Chia sẻ</span></h2>
			<p class="text-on-primary-container/90 mb-10 leading-relaxed">Từ hiên nhà ngắm lúa đến góc trà đạo ấm cúng, mọi không gian tại Nếp đều khuyến khích sự kết nối giữa con người và thiên nhiên.</p>
			<div class="flex gap-4">
				<button class="gallery-prev w-12 h-12 rounded-full border border-on-primary-container/30 flex items-center justify-center hover:bg-secondary-container hover:text-on-secondary-container hover:border-transparent transition-all active:scale-90">
					<span class="material-symbols-outlined">west</span>
				</button>
				<button class="gallery-next w-12 h-12 rounded-full border border-on-primary-container/30 flex items-center justify-center hover:bg-secondary-container hover:text-on-secondary-container hover:border-transparent transition-all active:scale-90">
					<span class="material-symbols-outlined">east</span>
				</button>
			</div>
		</div>

		<div class="lg:col-span-8">
			<div class="gallery-slider flex gap-6 overflow-x-auto pb-8 snap-x no-scrollbar scroll-smooth">
				<!-- Slide 1 -->
				<div class="min-w-[300px] md:min-w-[450px] aspect-[4/5] rounded-3xl overflow-hidden snap-center relative group shadow-2xl">
					<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" alt="Hiên nhà ngắm cảnh" src="<?php echo $theme_uri; ?>/assets/images/stitch-design/common-veranda.jpg"/>
					<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent flex flex-col justify-end p-8 transition-opacity duration-300">
						<p class="font-label-caps text-label-caps text-secondary-container mb-1 tracking-widest">HIÊN NHÀ NGẮM CẢNH</p>
						<p class="text-white/80 text-sm">Nơi đón bình minh bên thung lũng lúa.</p>
					</div>
				</div>
				<!-- Slide 2 -->
				<div class="min-w-[300px] md:min-w-[450px] aspect-[4/5] rounded-3xl overflow-hidden snap-center relative group shadow-2xl">
					<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" alt="Góc đọc sách bên cửa sổ" src="<?php echo $theme_uri; ?>/assets/images/stitch-design/common-reading-nook.jpg"/>
					<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent flex flex-col justify-end p-8 transition-opacity duration-300">
						<p class="font-label-caps text-label-caps text-secondary-container mb-1 tracking-widest">GÓC ĐỌC SÁCH BÊN CỬA SỔ</p>
						<p class="text-white/80 text-sm">Không gian yên tĩnh tìm lại những trang sách cũ.</p>
					</div>
				</div>
				<!-- Slide 3 -->
				<div class="min-w-[300px] md:min-w-[450px] aspect-[4/5] rounded-3xl overflow-hidden snap-center relative group shadow-2xl">
					<img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" alt="Chi tiết kiến trúc độc đáo" src="<?php echo $theme_uri; ?>/assets/images/stitch-design/common-detail.jpg"/>
					<div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-transparent flex flex-col justify-end p-8 transition-opacity duration-300">
						<p class="font-label-caps text-label-caps text-secondary-container mb-1 tracking-widest">CHI TIẾT KIẾN TRÚC ĐỘC ĐÁO</p>
						<p class="text-white/80 text-sm">Sự kết hợp tinh tế giữa tre, gỗ và gạch trần mộc.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- Trải Nghiệm Section -->
<section class="py-24 px-margin-mobile md:px-margin-desktop bg-surface" id="experience">
	<div class="max-w-container-max mx-auto text-center mb-16 transition-all duration-1000 opacity-100 translate-y-0">
		<span class="font-label-caps text-label-caps text-tertiary-container mb-4 block">SỐNG NHƯ NGƯỜI BẢN ĐỊA</span>
		<h2 class="font-headline-lg text-headline-lg text-primary">Trải nghiệm đáng nhớ tại Nếp</h2>
	</div>
	<div class="max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 transition-all duration-1000 opacity-100 translate-y-0">
		<!-- Activity 1 -->
		<div class="relative h-[400px] rounded-3xl overflow-hidden group">
			<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Ẩm thực dân dã" src="<?php echo $theme_uri; ?>/assets/images/stitch-design/experience-food.jpg"/>
			<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-8">
				<h3 class="font-headline-md text-white mb-2">Ẩm thực dân dã</h3>
				<p class="text-white/80 text-sm mb-4">Thưởng thức mâm cơm quê chuẩn vị với nguyên liệu sạch từ vườn nhà.</p>
				<p class="text-secondary-container font-label-caps text-label-caps mb-2">Chỉ từ 150.000đ/người</p>
				<span class="material-symbols-outlined text-secondary-container">restaurant</span>
			</div>
		</div>
		<!-- Activity 2 -->
		<div class="relative h-[400px] rounded-3xl overflow-hidden group">
			<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Tiệc nướng bản địa" src="<?php echo $theme_uri; ?>/assets/images/stitch-design/experience-bbq.jpg"/>
			<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-8">
				<h3 class="font-headline-md text-white mb-2">Tiệc nướng bản địa</h3>
				<p class="text-white/80 text-sm mb-4">Trải nghiệm những món nướng thơm lừng bên bếp than hồng cùng người thân.</p>
				<p class="text-secondary-container font-label-caps text-label-caps mb-2">Chỉ từ 250.000đ/người</p>
				<span class="material-symbols-outlined text-secondary-container">outdoor_grill</span>
			</div>
		</div>
		<!-- Activity 3 -->
		<div class="relative h-[400px] rounded-3xl overflow-hidden group">
			<img class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700" alt="Đi bộ xuyên đồng" src="<?php echo $theme_uri; ?>/assets/images/stitch-design/experience-walking.jpg"/>
			<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent flex flex-col justify-end p-8">
				<h3 class="font-headline-md text-white mb-2">Đi bộ xuyên đồng</h3>
				<p class="text-white/80 text-sm mb-4">Hòa mình vào thiên nhiên, hít thở không khí trong lành của cánh đồng lúa.</p>
				<p class="text-secondary-container font-label-caps text-label-caps mb-2">Miễn phí cho khách lưu trú</p>
				<span class="material-symbols-outlined text-secondary-container">directions_walk</span>
			</div>
		</div>
	</div>
</section>

<!-- Vị Trí Section -->
<section class="py-24 px-margin-mobile md:px-margin-desktop bg-surface-container-low" id="location">
	<div class="max-w-container-max mx-auto grid grid-cols-1 lg:grid-cols-2 gap-16 items-center transition-all duration-1000 opacity-100 translate-y-0">
		<div>
			<h2 class="font-headline-lg text-headline-lg text-primary mb-6">Đường đến với Nếp</h2>
			<p class="font-body-lg text-body-lg text-on-surface-variant mb-8 opacity-80">Nằm nép mình bên cạnh thung lũng xanh, Nếp là nơi lý tưởng để bạn "đi trốn" khỏi phố thị ồn ào nhưng vẫn cực kỳ thuận tiện để di chuyển.</p>
			<div class="space-y-6">
				<div class="flex gap-4 items-start">
					<span class="material-symbols-outlined text-primary mt-1">location_on</span>
					<div>
						<h4 class="font-label-caps text-label-caps text-primary mb-1">ĐỊA CHỈ</h4>
						<p class="text-on-surface-variant">Nếp home stay, Thôn Chang, xã Phương Độ, Hà Giang, Vietnam</p>
					</div>
				</div>
				<div class="flex gap-4 items-start">
					<span class="material-symbols-outlined text-primary mt-1">call</span>
					<div>
						<h4 class="font-label-caps text-label-caps text-primary mb-1">SỐ ĐIỆN THOẠI</h4>
						<p class="text-on-surface-variant">0943 847 906</p>
					</div>
				</div>
			</div>
			<a href="https://maps.google.com/?q=N%E1%BA%BFp+home+stay%2C+Th%C3%B4n+Chang%2C+x%C3%A3+Ph%C6%B0%C6%A1ng+%C4%90%E1%BB%99%2C+H%C3%A0+Giang" target="_blank" rel="noopener noreferrer" class="inline-block mt-10 border border-primary text-primary px-8 py-3 rounded-xl font-label-caps text-label-caps hover:bg-primary hover:text-white transition-all">
				XEM CHỈ ĐƯỜNG TRÊN GOOGLE MAPS
			</a>
		</div>
		<div class="h-[450px] rounded-3xl overflow-hidden shadow-lg border-4 border-surface group">
			<iframe 
				src="https://maps.google.com/maps?q=N%E1%BA%BFp+home+stay%2C+Th%C3%B4n+Chang%2C+x%C3%A3+Ph%C6%B0%C6%A1ng+%C4%90%E1%BB%99%2C+H%C3%A0+Giang&hl=vi&t=&z=15&ie=UTF8&iwloc=&output=embed" 
				class="w-full h-full border-0" 
				allowfullscreen="" 
				loading="lazy" 
				referrerpolicy="no-referrer-when-downgrade">
			</iframe>
		</div>
	</div>
</section>

<!-- Đánh Giá Section -->
<section class="py-24 px-margin-mobile md:px-margin-desktop bg-surface">
	<div class="max-w-container-max mx-auto text-center mb-16 transition-all duration-1000 opacity-100 translate-y-0">
		<h2 class="font-headline-lg text-headline-lg text-primary">Lời khen từ những người bạn</h2>
	</div>
	<div class="max-w-container-max mx-auto grid grid-cols-1 md:grid-cols-3 gap-8 transition-all duration-1000 opacity-100 translate-y-0">
		<!-- Review 1 -->
		<div class="bg-surface-container p-10 rounded-3xl relative">
			<div class="flex text-secondary-container mb-4">
				<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
				<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
				<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
				<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
				<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
			</div>
			<p class="font-body-md text-on-surface-variant italic mb-6 leading-relaxed">"Phòng ở cực kỳ sạch sẽ và thơm mùi gỗ. View nhìn ra ruộng lúa buổi sáng sớm thực sự là vô giá. Chắc chắn sẽ quay lại!"</p>
			<div class="flex items-center gap-3">
				<img alt="Minh Anh profile" class="w-12 h-12 rounded-full object-cover" src="<?php echo $theme_uri; ?>/assets/images/stitch-design/profile-minh-anh.jpg"/>
				<div>
					<p class="font-label-caps text-label-caps text-primary">MINH ANH</p>
					<p class="text-[10px] text-on-surface-variant opacity-60 uppercase">Hà Nội</p>
				</div>
			</div>
		</div>

		<!-- Review 2 -->
		<div class="bg-surface-container p-10 rounded-3xl relative">
			<div class="flex text-secondary-container mb-4">
				<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
				<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
				<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
				<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
				<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
			</div>
			<p class="font-body-md text-on-surface-variant italic mb-6 leading-relaxed">"Đồ ăn ở đây ngon không tả được. Anh chị chủ nhà thân thiện và nhiệt tình hỗ trợ mình tìm đường đi dạo. Rất recommend mọi người!"</p>
			<div class="flex items-center gap-3">
				<img alt="Thành Trung profile" class="w-12 h-12 rounded-full object-cover" src="<?php echo $theme_uri; ?>/assets/images/stitch-design/profile-thanh-trung.jpg"/>
				<div>
					<p class="font-label-caps text-label-caps text-primary">THÀNH TRUNG</p>
					<p class="text-[10px] text-on-surface-variant opacity-60 uppercase">TP. HCM</p>
				</div>
			</div>
		</div>

		<!-- Review 3 -->
		<div class="bg-surface-container p-10 rounded-3xl relative">
			<div class="flex text-secondary-container mb-4">
				<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
				<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
				<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
				<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
				<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">star</span>
			</div>
			<p class="font-body-md text-on-surface-variant italic mb-6 leading-relaxed">"Không gian yên tĩnh tuyệt đối, rất hợp để detox tâm hồn và đọc sách. Kiến trúc mái lá ở đây nhìn thực sự đặc biệt."</p>
			<div class="flex items-center gap-3">
				<img alt="Linh Chi profile" class="w-12 h-12 rounded-full object-cover" src="<?php echo $theme_uri; ?>/assets/images/stitch-design/profile-linh-chi.jpg"/>
				<div>
					<p class="font-label-caps text-label-caps text-primary">LINH CHI</p>
					<p class="text-[10px] text-on-surface-variant opacity-60 uppercase">Đà Nẵng</p>
				</div>
			</div>
		</div>
	</div>
</section>



<?php
get_footer();
