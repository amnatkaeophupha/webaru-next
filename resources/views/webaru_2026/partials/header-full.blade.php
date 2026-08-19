<header
    x-data="{ mobileMenuOpen: false }"
    @keydown.escape.window="mobileMenuOpen = false"
    class="relative z-50 bg-white">

    {{-- =====================================================
         Top Bar
         Full-width background + wide inner container
    ====================================================== --}}
    <div class="bg-aru-primary text-white">
        <div
            class="mx-auto flex h-8 w-full max-w-[1920px] items-center justify-end gap-4 px-4 text-[12px]
                   sm:px-6 md:px-8 lg:h-9 lg:gap-5 lg:px-10 lg:text-sm xl:px-12 2xl:px-16">

            <a href="#" class="inline-flex items-center gap-1.5 transition hover:text-aru-gold">
                สำหรับนักศึกษา
                <svg class="hidden h-3.5 w-3.5 sm:block" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" aria-hidden="true">
                    <path d="m6 9 6 6 6-6" />
                </svg>
            </a>

            <a href="#" class="hidden items-center gap-1.5 transition hover:text-aru-gold md:inline-flex">
                บุคลากร
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" aria-hidden="true">
                    <path d="m6 9 6 6 6-6" />
                </svg>
            </a>

            <a href="#" class="hidden items-center gap-1.5 transition hover:text-aru-gold lg:inline-flex">
                ศิษย์เก่า
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" aria-hidden="true">
                    <path d="m6 9 6 6 6-6" />
                </svg>
            </a>

            <a href="https://www.aru.ac.th/enroll_aru/" target="_blank" rel="noopener noreferrer"
                class="hidden items-center gap-1.5 transition hover:text-aru-gold xl:inline-flex">
                ผู้สนใจเข้าศึกษา
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" aria-hidden="true">
                    <path d="m6 9 6 6 6-6" />
                </svg>
            </a>

            <span class="h-4 w-px bg-white/35"></span>

            <button type="button" class="inline-flex items-center gap-1.5 transition hover:text-aru-gold"
                aria-label="เลือกภาษา">
                <span aria-hidden="true">🇹🇭</span>
                <span>TH</span>
                <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" aria-hidden="true">
                    <path d="m6 9 6 6 6-6" />
                </svg>
            </button>

        </div>
    </div>


    {{-- =====================================================
         Brand Header / Main Navigation
         Desktop width follows the reference design:
         - 40px side spacing around 1024px viewport
         - 48px around XL
         - 64px around 2XL
         - maximum canvas 1920px
    ====================================================== --}}
    <div class="border-b border-aru-border/60 bg-white">
        <div
            class="mx-auto flex min-h-[76px] w-full max-w-[1920px] items-center px-4
                   sm:px-6 md:px-8 lg:min-h-[84px] lg:px-10 xl:px-12 2xl:px-16">

            {{-- Logo / Brand --}}
            <a href="{{ route('2026.home') }}"
                class="flex shrink-0 items-center gap-3 lg:w-[260px] xl:w-[290px] 2xl:w-[310px]">

                <img
                    src="{{ asset('images/webaru_2026/logo/aru-logo.png') }}"
                    alt="มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา"
                    class="h-14 w-auto shrink-0 sm:h-16 lg:h-[62px]">

                <div class="hidden min-w-0 sm:block">
                    <div class="text-[15px] font-bold leading-[1.15] text-aru-text lg:text-base">
                        มหาวิทยาลัยราชภัฏ
                        <br>
                        พระนครศรีอยุธยา
                    </div>

                    <div class="mt-1 whitespace-nowrap text-[8px] font-medium uppercase tracking-[-0.01em] text-aru-muted lg:text-[9px]">
                        Phranakhon Si Ayutthaya Rajabhat University
                    </div>
                </div>

            </a>


            {{-- =====================================================
                 Main Navigation
                 ให้ navigation ใช้พื้นที่ที่เหลือทั้งหมด
            ====================================================== --}}
            <div class="ml-4 min-w-0 flex-1 lg:ml-6 xl:ml-8">
                @include('webaru_2026.partials.navigation')
            </div>


            {{-- Mobile Menu Button --}}
            <button type="button"
                class="ml-auto flex h-10 w-10 shrink-0 items-center justify-center rounded-lg border border-aru-border
                       text-aru-text transition hover:border-aru-primary hover:text-aru-primary lg:hidden"
                @click="mobileMenuOpen = !mobileMenuOpen"
                :aria-expanded="mobileMenuOpen.toString()"
                aria-controls="mobile-navigation"
                aria-label="เปิดหรือปิดเมนูหลัก">

                <svg x-show="!mobileMenuOpen" class="h-5.5 w-5.5" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path d="M4 6h16M4 12h16M4 18h16" />
                </svg>

                <svg x-cloak x-show="mobileMenuOpen" class="h-5.5 w-5.5" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path d="M6 6l12 12M18 6 6 18" />
                </svg>

            </button>

        </div>
    </div>

</header>
