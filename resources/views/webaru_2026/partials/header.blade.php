<header x-data="{ mobileMenuOpen: false }" @keydown.escape.window="mobileMenuOpen = false"
    class="sticky top-0 z-50 border-b border-black/5 bg-white/95 shadow-[0_8px_30px_rgba(15,23,42,0.05)] backdrop-blur-xl">

    {{-- Top utility bar --}}
    <div class="bg-aru-primary text-white">
        <div class="webaru-container flex h-9 items-center justify-end gap-4 text-xs sm:gap-5 lg:text-[13px]">
            <a href="#" class="transition hover:text-aru-gold">สำหรับนักศึกษา</a>
            <span class="hidden h-3.5 w-px bg-white/25 sm:block"></span>
            <a href="#" class="hidden transition hover:text-aru-gold sm:block">บุคลากร</a>
            <span class="hidden h-3.5 w-px bg-white/25 md:block"></span>
            <a href="#" class="hidden transition hover:text-aru-gold md:block">ศิษย์เก่า</a>
            <span class="hidden h-3.5 w-px bg-white/25 lg:block"></span>
            <a href="https://www.aru.ac.th/enroll_aru/" target="_blank" rel="noopener noreferrer"
                class="hidden transition hover:text-aru-gold lg:block">
                ผู้สนใจเข้าศึกษา
            </a>

            <span class="h-4 w-px bg-white/30"></span>

            <button type="button" class="inline-flex items-center gap-1.5 font-medium transition hover:text-aru-gold"
                aria-label="เลือกภาษา">
                <span aria-hidden="true">🇹🇭</span>
                <span>TH</span>
                <svg class="h-3 w-3" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                        d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 11.168l3.71-3.938a.75.75 0 1 1 1.08 1.04l-4.25 4.51a.75.75 0 0 1-1.08 0l-4.25-4.51a.75.75 0 0 1 .02-1.06Z"
                        clip-rule="evenodd" />
                </svg>
            </button>
        </div>
    </div>

    {{-- Main brand / navigation row --}}
    <div class="bg-white">
        <div class="webaru-container flex min-h-[82px] items-center gap-5 lg:min-h-[88px] xl:gap-8">

            <a href="{{ route('2026.home') }}" class="flex shrink-0 items-center gap-3.5"
                aria-label="หน้าแรก มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา">
                <img src="{{ asset('images/webaru_2026/logo/aru-logo.png') }}"
                    alt="ตราสัญลักษณ์มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา" class="h-14 w-auto sm:h-[62px]">

                <div class="hidden sm:block">
                    <div class="text-[17px] font-extrabold leading-[1.25] lg:text-lg">
                        <span class="block text-aru-muted">มหาวิทยาลัยราชภัฏ</span>
                        <span class="block text-aru-primary">พระนครศรีอยุธยา</span>
                    </div>
                    <div
                        class="mt-1 text-[9px] font-medium uppercase tracking-[0.035em] text-aru-muted/80 lg:text-[10px]">
                        Phranakhon Si Ayutthaya Rajabhat University
                    </div>
                </div>
            </a>

            <div class="ml-auto flex min-w-0 flex-1 justify-end lg:ml-4 xl:ml-8">
                @include('webaru_2026.partials.navigation')
            </div>

            <button type="button"
                class="ml-auto flex h-11 w-11 shrink-0 items-center justify-center rounded-xl border border-aru-border bg-white text-aru-text shadow-sm transition hover:border-aru-primary hover:text-aru-primary lg:hidden"
                @click="mobileMenuOpen = !mobileMenuOpen" :aria-expanded="mobileMenuOpen.toString()"
                aria-controls="mobile-navigation" aria-label="เปิดหรือปิดเมนูหลัก">

                <svg x-show="!mobileMenuOpen" class="h-6 w-6" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                    stroke-width="2" aria-hidden="true">
                    <path d="M4 6h16M4 12h16M4 18h16" />
                </svg>

                <svg x-cloak x-show="mobileMenuOpen" class="h-6 w-6" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" aria-hidden="true">
                    <path d="M6 6l12 12M18 6 6 18" />
                </svg>
            </button>
        </div>
    </div>
</header>
