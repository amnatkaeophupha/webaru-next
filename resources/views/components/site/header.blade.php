<header x-data="{ mobileMenuOpen: false }" class="relative z-50 bg-white shadow-sm">
    {{-- Top Bar --}}
    <div class="bg-university-primary text-white">
        <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-2 text-sm sm:px-6 lg:px-8">
            <p>มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา</p>

            <nav class="hidden gap-4 md:flex">
                <a href="#" class="hover:underline">
                    สำหรับนักศึกษา
                </a>

                <a href="#" class="hover:underline">
                    สำหรับบุคลากร
                </a>

                <a href="#" class="hover:underline">
                    ติดต่อมหาวิทยาลัย
                </a>
            </nav>
        </div>
    </div>

    {{-- Main Navigation --}}
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex min-h-20 items-center justify-between">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-3">
                <div class="flex size-12 items-center justify-center rounded-full bg-university-primary text-white">
                    ARU
                </div>

                <div>
                    <p class="font-semibold text-university-primary">
                        มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา
                    </p>

                    <p class="text-xs text-slate-500">
                        Phranakhon Si Ayutthaya Rajabhat University
                    </p>
                </div>
            </a>

            {{-- Desktop Menu --}}
            <nav class="hidden items-center gap-6 lg:flex">
                <a href="{{ route('home') }}" class="font-medium text-university-primary">
                    หน้าหลัก
                </a>

                <a href="#" class="font-medium hover:text-university-primary">
                    เกี่ยวกับมหาวิทยาลัย
                </a>

                <a href="#" class="font-medium hover:text-university-primary">
                    คณะและหน่วยงาน
                </a>

                <a href="#" class="font-medium hover:text-university-primary">
                    ข่าวสาร
                </a>

                <a href="#" class="font-medium hover:text-university-primary">
                    บริการออนไลน์
                </a>
            </nav>

            {{-- Mobile Button --}}
            <button type="button" class="rounded-lg border border-slate-200 p-2 lg:hidden" aria-label="เปิดเมนู"
                @click="mobileMenuOpen = !mobileMenuOpen" :aria-expanded="mobileMenuOpen">
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M4 6h16M4 12h16M4 18h16" />

                    <path x-show="mobileMenuOpen" x-cloak stroke-linecap="round" stroke-linejoin="round"
                        stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </div>

    {{-- Mobile Menu --}}
    <div x-show="mobileMenuOpen" x-cloak x-transition @click.outside="mobileMenuOpen = false"
        class="border-t border-slate-200 bg-white lg:hidden">
        <nav class="space-y-1 px-4 py-4">
            <a href="{{ route('home') }}" class="block rounded-lg bg-slate-50 px-4 py-3 font-medium">
                หน้าหลัก
            </a>

            <a href="#" class="block rounded-lg px-4 py-3 hover:bg-slate-50">
                เกี่ยวกับมหาวิทยาลัย
            </a>

            <a href="#" class="block rounded-lg px-4 py-3 hover:bg-slate-50">
                คณะและหน่วยงาน
            </a>

            <a href="#" class="block rounded-lg px-4 py-3 hover:bg-slate-50">
                ข่าวสาร
            </a>

            <a href="#" class="block rounded-lg px-4 py-3 hover:bg-slate-50">
                บริการออนไลน์
            </a>
        </nav>
    </div>
</header>
