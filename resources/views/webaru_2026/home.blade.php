@extends('webaru_2026.layouts.app')

@section('title', 'มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา')
@section('description', 'มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา มหาวิทยาลัยแห่งเมืองมรดกโลก')

@section('content')

    @php
        $heroSlides = [
            [
                'desktop_image' => 'slide-01-desktop.webp',
                'mobile_image' => 'slide-01-mobile.webp',
                'alt' => 'วัดไชยวัฒนาราม มรดกโลกแห่งพระนครศรีอยุธยา',
            ],
            [
                'desktop_image' => 'slide-02-desktop.webp',
                'mobile_image' => 'slide-02-mobile.webp',
                'alt' => 'อาคารมหาวิทยาลัยราชภัฏพระนครศรีอยุธยาริมสระน้ำ',
            ],
        ];

        $quickServices = [
            ['label' => 'สมัครเรียน', 'subtitle' => 'Admission', 'url' => '#admission'],
            ['label' => 'ระบบนักศึกษา', 'subtitle' => 'Student', 'url' => '#services'],
            ['label' => 'E-Service', 'subtitle' => 'Online', 'url' => '#services'],
            ['label' => 'ติดต่อสอบถาม', 'subtitle' => 'Contact', 'url' => '#contact'],
        ];

        $aruNews = [
            [
                'volume' => 11,
                'issue' => 275,
                'date' => '13 สิงหาคม 2569',

                'title' =>
                    'สำนักวิทยบริการและเทคโนโลยีสารสนเทศ เข้าร่วมกิจกรรมเนื่องในวันคล้ายวันพระราชสมภพ สมเด็จพระนางเจ้าสิริกิติ์ พระบรมราชินีนาถ พระบรมราชชนนีพันปีหลวง และวันแม่แห่งชาติ ประจำปี 2569',

                'excerpt' =>
                    'วันพุธที่ 12 สิงหาคม 2569 สำนักวิทยบริการและเทคโนโลยีสารสนเทศ พร้อมด้วยบุคลากร เข้าร่วมกิจกรรมเนื่องในวันคล้ายวันพระราชสมภพ และวันแม่แห่งชาติ ประจำปี 2569',

                'thumbnail_url' => asset('storage/webaru_2026/arunews/thumbnails/2026-08-14-110643.webp'),

                'pdf_url' => asset('storage/webaru_2026/arunews/pdfs/2026-08-14-110643.pdf'),
            ],

            [
                'volume' => 11,
                'issue' => 274,
                'date' => '13 สิงหาคม 2569',

                'title' =>
                    'สถาบันอยุธยาศึกษา จัดกิจกรรมเปิดเส้นทางเดินทัพพระเจ้าตากสินมหาราช “อรุโณทัยแห่งชัยชนะ รอยทางวีรกษัตริย์กู้แผ่นดิน” สืบสานประวัติศาสตร์เชื่อมโยงเครือข่าย สู่การท่องเที่ยวเชิงวัฒนธรรม',

                'excerpt' => null,

                'thumbnail_url' => asset('storage/webaru_2026/arunews/thumbnails/2026-08-14-110414.webp'),

                'pdf_url' => asset('storage/webaru_2026/arunews/pdfs/2026-08-14-110414.pdf'),
            ],

            [
                'volume' => 11,
                'issue' => 273,
                'date' => '13 สิงหาคม 2569',

                'title' => 'คณะมนุษยศาสตร์และสังคมศาสตร์ ลงพื้นที่แนะแนวการศึกษาต่อ ณ โรงเรียนวรดิตถ์วิทยาประสูทน์',

                'excerpt' => null,

                'thumbnail_url' => asset('storage/webaru_2026/arunews/thumbnails/2026-08-14-110110.webp'),

                'pdf_url' => asset('storage/webaru_2026/arunews/pdfs/2026-08-14-110110.pdf'),
            ],

            [
                'volume' => 11,
                'issue' => 272,
                'date' => '13 สิงหาคม 2569',

                'title' => 'สาขาวิชาภาษาอังกฤษ ร่วมกับสาขาวิชาภาษาจีน จัด English & Chinese Language Camp 2026',

                'excerpt' => null,

                'thumbnail_url' => asset('storage/webaru_2026/arunews/thumbnails/2026-08-14-105946.webp'),

                'pdf_url' => asset('storage/webaru_2026/arunews/pdfs/2026-08-14-105946.pdf'),
            ],
        ];

        $news = [
            [
                'image' => 'news-01.jpg',
                'category' => 'กิจกรรม',
                'title' => 'พิธีถวายราชสดุดีวันเฉลิมพระชนมพรรษา',
                'date' => '3 มิถุนายน 2569',
                'day' => '03',
                'month' => 'มิ.ย.',
            ],
            [
                'image' => 'news-02.jpg',
                'category' => 'กิจกรรม',
                'title' => 'ARU OPEN HOUSE เปิดบ้านราชภัฏอยุธยา',
                'date' => '31 พฤษภาคม 2569',
                'day' => '31',
                'month' => 'พ.ค.',
            ],
            [
                'image' => 'news-03.jpg',
                'category' => 'ข่าว',
                'title' => 'มหาวิทยาลัยจัดโครงการพัฒนาศักยภาพนักศึกษา',
                'date' => '28 พฤษภาคม 2569',
                'day' => '28',
                'month' => 'พ.ค.',
            ],
            [
                'image' => 'news-04.jpg',
                'category' => 'ประกาศ',
                'title' => 'ประกาศรายชื่อผู้มีสิทธิ์สอบคัดเลือกเข้าศึกษาต่อ',
                'date' => '25 พฤษภาคม 2569',
                'day' => '25',
                'month' => 'พ.ค.',
            ],
        ];

        $faculties = [
            ['no' => '01', 'name' => 'คณะครุศาสตร์', 'meta' => 'Education'],
            ['no' => '02', 'name' => 'คณะวิทยาศาสตร์และเทคโนโลยี', 'meta' => 'Science & Technology'],
            ['no' => '03', 'name' => 'คณะมนุษยศาสตร์และสังคมศาสตร์', 'meta' => 'Humanities & Social Sciences'],
            ['no' => '04', 'name' => 'คณะวิทยาการจัดการ', 'meta' => 'Management Science'],
            ['no' => '05', 'name' => 'คณะเทคโนโลยีอุตสาหกรรม', 'meta' => 'Industrial Technology'],
        ];

        $statistics = [
            ['number' => '10,000+', 'label' => 'นักศึกษาปัจจุบัน'],
            ['number' => '5 คณะ', 'label' => '42 สาขาวิชา'],
            ['number' => '500+', 'label' => 'บุคลากรคุณภาพ'],
            ['number' => '50+', 'label' => 'หน่วยงานภายใน'],
            ['number' => '200+', 'label' => 'เครือข่ายความร่วมมือ'],
        ];

        $services = [
            ['title' => 'ระบบนักศึกษา', 'en' => 'Student'],
            ['title' => 'ระบบอาจารย์', 'en' => 'Faculty'],
            ['title' => 'ระบบบุคลากร', 'en' => 'Staff'],
            ['title' => 'คลังความรู้', 'en' => 'ARU KM'],
            ['title' => 'ห้องสมุดออนไลน์', 'en' => 'Library'],
            ['title' => 'E-Service', 'en' => 'Online Service'],
        ];
    @endphp

    @include('webaru_2026.sections.carousel', [
        'slides' => $heroSlides,
        'quickServices' => $quickServices,
        'interval' => 6000,
    ])
    {{-- =========================================================
        ANNOUNCEMENT
    ========================================================== --}}
    <section class="bg-[#F7F8FA] py-4 lg:py-5">
        <div class="webaru-container">
            <div
                class="flex min-h-16 items-center gap-4 rounded-2xl bg-gradient-to-r from-[#8E1420] via-aru-primary to-[#B21B2B] px-4 text-white shadow-[0_12px_30px_rgba(142,20,32,0.18)] sm:px-5 lg:px-6">
                <span class="flex h-9 w-9 shrink-0 items-center justify-center rounded-xl bg-white/10 text-lg"
                    aria-hidden="true">📢</span>
                <strong class="shrink-0 text-sm text-aru-gold sm:text-base">ประกาศสำคัญ</strong>
                <span class="hidden h-7 w-px bg-white/25 sm:block"></span>
                <a href="#"
                    class="min-w-0 flex-1 truncate text-xs text-white/85 transition hover:text-white sm:text-sm">
                    ประกาศมหาวิทยาลัยราชภัฏพระนครศรีอยุธยา เรื่อง การรับสมัครนักศึกษาภาคปกติ ประจำปีการศึกษา 2569
                </a>
                <a href="#"
                    class="shrink-0 rounded-lg px-2 py-1 text-xs font-semibold transition hover:bg-white/10 sm:text-sm">
                    ดูทั้งหมด <span aria-hidden="true">→</span>
                </a>
            </div>
        </div>
    </section>

    {{-- =========================================================
        NEWS
    ========================================================== --}}
    <section id="news" class="border-y border-aru-border/40 bg-white py-12 lg:py-16">
        <div class="webaru-container">
            <div class="mb-7 flex items-end justify-between gap-5 lg:mb-9">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-aru-primary">News & Activities</p>
                    <h2 class="mt-2 text-2xl font-extrabold tracking-tight text-aru-text sm:text-3xl">ข่าวสารและกิจกรรม</h2>
                    <p class="mt-2 hidden text-sm text-aru-muted sm:block">ติดตามข่าวประชาสัมพันธ์ กิจกรรม
                        และความเคลื่อนไหวของมหาวิทยาลัย</p>
                </div>
                <a href="#"
                    class="inline-flex shrink-0 items-center gap-2 rounded-xl border border-aru-primary/25 bg-white px-4 py-2.5 text-sm font-semibold text-aru-primary shadow-sm transition hover:border-aru-primary hover:bg-aru-primary hover:text-white">
                    ดูทั้งหมด <span aria-hidden="true">→</span>
                </a>
            </div>

            <div class="grid gap-5 sm:grid-cols-2 xl:grid-cols-4">
                @foreach ($news as $item)
                    <article
                        class="group overflow-hidden rounded-[22px] border border-black/5 bg-white shadow-[0_10px_35px_rgba(15,23,42,0.05)] transition duration-300 hover:-translate-y-1 hover:shadow-[0_18px_45px_rgba(15,23,42,0.10)]">
                        <a href="#" class="relative block aspect-[16/10] overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/webaru_2026/news/' . $item['image']) }}" alt="{{ $item['title'] }}"
                                loading="lazy"
                                class="h-full w-full object-cover transition duration-700 group-hover:scale-105">

                            <div
                                class="absolute left-3 top-3 flex min-w-[52px] flex-col items-center rounded-xl border border-white/70 bg-white/95 px-2.5 py-2 text-center shadow-lg backdrop-blur">
                                <span
                                    class="text-lg font-extrabold leading-none text-aru-primary">{{ $item['day'] }}</span>
                                <span class="mt-1 text-[10px] font-semibold text-aru-muted">{{ $item['month'] }}</span>
                            </div>
                        </a>

                        <div class="p-5">
                            <span
                                class="inline-flex rounded-full bg-aru-gold/15 px-2.5 py-1 text-[11px] font-bold text-[#9A6B00]">{{ $item['category'] }}</span>
                            <h3 class="mt-3 line-clamp-2 min-h-[3.5rem] text-[15px] font-bold leading-7 text-aru-text">
                                <a href="#" class="transition group-hover:text-aru-primary">{{ $item['title'] }}</a>
                            </h3>
                            <div class="mt-4 flex items-center justify-between text-xs text-aru-muted">
                                <span>{{ $item['date'] }}</span>
                                <span class="font-semibold text-aru-primary">อ่านต่อ →</span>
                            </div>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- =========================================================
        ARUNEWS
    ========================================================== --}}
    @include('webaru_2026.sections.arunews', [
        'items' => $aruNews,
        'allUrl' => '#',
        'lineQrUrl' => asset('images/webaru_2026/arunews/line-qr.png'),
    ])

    {{-- =========================================================
        FACULTIES
    ========================================================== --}}
    <section id="faculties" class="border-y border-aru-border/40 bg-white py-12 lg:py-16">
        <div class="webaru-container">
            <div class="mb-8 flex items-end justify-between gap-5">
                <div>
                    <p class="text-xs font-bold uppercase tracking-[0.18em] text-aru-primary">Academic Units</p>
                    <h2 class="mt-2 text-2xl font-extrabold tracking-tight sm:text-3xl">คณะและหน่วยงาน</h2>
                </div>
                <a href="#" class="text-sm font-semibold text-aru-primary transition hover:translate-x-1">ดูทั้งหมด
                    →</a>
            </div>

            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-5">
                @foreach ($faculties as $faculty)
                    <a href="#"
                        class="group relative min-h-[190px] overflow-hidden rounded-[22px] border border-aru-border/70 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-aru-primary/30 hover:shadow-xl hover:shadow-black/5">
                        <span
                            class="absolute -right-2 -top-5 text-[72px] font-black leading-none text-aru-primary/[0.045] transition group-hover:text-aru-primary/[0.08]">{{ $faculty['no'] }}</span>

                        <div class="relative flex h-full flex-col">
                            <span
                                class="flex h-12 w-12 items-center justify-center rounded-2xl bg-aru-primary/10 text-sm font-extrabold text-aru-primary">{{ $faculty['no'] }}</span>
                            <h3 class="mt-5 text-[15px] font-bold leading-6 text-aru-text group-hover:text-aru-primary">
                                {{ $faculty['name'] }}</h3>
                            <p class="mt-1 text-[10px] uppercase tracking-wide text-aru-muted">{{ $faculty['meta'] }}</p>
                            <span class="mt-auto pt-5 text-xs font-semibold text-aru-primary">ดูรายละเอียด →</span>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- =========================================================
        ADMISSION
    ========================================================== --}}
    <section id="admission" class="bg-[#F7F8FA] pb-4 pt-4 lg:pb-6 lg:pt-6">
        <div class="webaru-container">
            <div
                class="relative overflow-hidden rounded-[28px] bg-gradient-to-r from-[#74111B] via-[#A51624] to-[#C42533] text-white shadow-[0_24px_65px_rgba(122,16,28,0.18)] lg:rounded-[32px]">
                <div class="pointer-events-none absolute -right-20 -top-24 h-80 w-80 rounded-full bg-aru-gold/30 blur-3xl">
                </div>

                <div class="relative grid lg:grid-cols-[0.85fr_1fr_0.95fr]">
                    <div class="relative min-h-[300px] overflow-hidden lg:min-h-[430px]">
                        <img src="{{ asset('images/webaru_2026/admission/admission-students.jpg') }}" alt="สมัครเรียน ARU"
                            loading="lazy" class="absolute inset-0 h-full w-full object-cover">
                        <div
                            class="absolute inset-0 bg-gradient-to-t from-[#74111B]/65 via-transparent to-transparent lg:bg-gradient-to-r lg:from-transparent lg:to-[#74111B]/80">
                        </div>
                    </div>

                    <div class="relative flex items-center px-6 py-10 sm:px-8 lg:px-10 lg:py-12">
                        <div>
                            <span
                                class="inline-flex rounded-full border border-aru-gold/30 bg-aru-gold/15 px-3 py-1.5 text-xs font-bold uppercase tracking-[0.14em] text-aru-gold">Admission
                                2569</span>
                            <h2 class="mt-5 text-3xl font-extrabold leading-tight sm:text-4xl">
                                เปิดรับสมัครนักศึกษา<br>ประจำปีการศึกษา 2569
                            </h2>

                            <ul class="mt-6 space-y-3 text-sm text-white/85">
                                <li class="flex gap-3"><span class="text-aru-gold">✓</span><span>ระดับปริญญาตรี ภาคปกติ /
                                        ภาคพิเศษ</span></li>
                                <li class="flex gap-3"><span class="text-aru-gold">✓</span><span>ระดับบัณฑิตศึกษา</span>
                                </li>
                                <li class="flex gap-3"><span class="text-aru-gold">✓</span><span>นักศึกษาแบบ
                                        Portfolio</span></li>
                            </ul>

                            <div class="mt-7 flex flex-wrap gap-3">
                                <a href="https://www.aru.ac.th/enroll_aru/" target="_blank" rel="noopener noreferrer"
                                    class="inline-flex items-center rounded-xl bg-aru-gold px-5 py-3 text-sm font-bold text-aru-text shadow-lg shadow-black/10 transition hover:-translate-y-0.5">
                                    สมัครเรียนออนไลน์
                                </a>
                                <a href="#"
                                    class="inline-flex items-center rounded-xl border border-white/30 bg-white/5 px-5 py-3 text-sm font-semibold transition hover:bg-white hover:text-aru-primary">
                                    รายละเอียดการรับสมัคร →
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="relative p-5 lg:flex lg:items-center lg:p-7">
                        <div
                            class="w-full rounded-[22px] border border-white/30 bg-white p-6 text-aru-text shadow-2xl shadow-black/10 lg:p-7">
                            <p class="text-xs font-bold uppercase tracking-[0.16em] text-aru-primary">Why ARU?</p>
                            <h3 class="mt-2 text-xl font-extrabold">ทำไมต้อง ARU?</h3>
                            <div class="mt-5 divide-y divide-aru-border/70 text-sm">
                                <div class="flex items-center gap-3 py-3"><span
                                        class="h-2 w-2 rounded-full bg-aru-gold"></span><span>คุณภาพการศึกษาได้มาตรฐาน</span>
                                </div>
                                <div class="flex items-center gap-3 py-3"><span
                                        class="h-2 w-2 rounded-full bg-aru-gold"></span><span>อาจารย์ผู้เชี่ยวชาญ</span>
                                </div>
                                <div class="flex items-center gap-3 py-3"><span
                                        class="h-2 w-2 rounded-full bg-aru-gold"></span><span>สิ่งสนับสนุนการเรียนรู้ครบครัน</span>
                                </div>
                                <div class="flex items-center gap-3 py-3"><span
                                        class="h-2 w-2 rounded-full bg-aru-gold"></span><span>เชื่อมโยงชุมชนและท้องถิ่น</span>
                                </div>
                                <div class="flex items-center gap-3 py-3"><span
                                        class="h-2 w-2 rounded-full bg-aru-gold"></span><span>โอกาสการทำงานและสร้างอาชีพ</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- =========================================================
        STATISTICS
    ========================================================== --}}
    <section class="border-y border-aru-border/40 bg-white py-8 lg:py-10">
        <div class="webaru-container">
            <div
                class="grid overflow-hidden rounded-[22px] border border-aru-border/70 bg-[#FBFBFC] sm:grid-cols-2 lg:grid-cols-5">
                @foreach ($statistics as $index => $stat)
                    <div
                        class="relative px-5 py-6 text-center lg:py-7 {{ $index > 0 ? 'border-t border-aru-border/70 sm:border-t-0 lg:border-l' : '' }} {{ $index === 2 || $index === 4 ? 'sm:border-t' : '' }}">
                        <div class="text-2xl font-extrabold tracking-tight text-aru-primary lg:text-[28px]">
                            {{ $stat['number'] }}</div>
                        <div class="mt-1 text-xs font-medium text-aru-muted">{{ $stat['label'] }}</div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- =========================================================
        ONLINE SERVICES
    ========================================================== --}}
    <section id="services" class="bg-[#F7F8FA] py-12 lg:py-16">
        <div class="webaru-container">
            <div class="mb-8">
                <p class="text-xs font-bold uppercase tracking-[0.18em] text-aru-primary">Digital Services</p>
                <h2 class="mt-2 text-2xl font-extrabold tracking-tight sm:text-3xl">บริการและระบบออนไลน์</h2>
                <p class="mt-2 text-sm text-aru-muted">เข้าถึงระบบสำคัญของมหาวิทยาลัยได้อย่างรวดเร็วในจุดเดียว</p>
            </div>

            <div class="grid gap-4 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-6">
                @foreach ($services as $index => $service)
                    <a href="#"
                        class="group flex min-h-[128px] flex-col justify-between rounded-[20px] border border-aru-border/70 bg-white p-5 shadow-sm transition duration-300 hover:-translate-y-1 hover:border-aru-primary/30 hover:shadow-xl hover:shadow-black/5">
                        <div class="flex items-start justify-between gap-3">
                            <span
                                class="flex h-11 w-11 items-center justify-center rounded-2xl bg-aru-primary/10 text-sm font-extrabold text-aru-primary transition group-hover:bg-aru-primary group-hover:text-white">0{{ $index + 1 }}</span>
                            <span
                                class="text-aru-muted transition group-hover:translate-x-1 group-hover:text-aru-primary">↗</span>
                        </div>
                        <div class="mt-5">
                            <h3 class="text-sm font-bold text-aru-text group-hover:text-aru-primary">
                                {{ $service['title'] }}</h3>
                            <p class="mt-1 text-[10px] uppercase tracking-wide text-aru-muted">{{ $service['en'] }}</p>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

@endsection
