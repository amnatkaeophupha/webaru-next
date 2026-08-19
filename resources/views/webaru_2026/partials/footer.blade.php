<footer id="contact" class="relative overflow-hidden bg-[#7A101C] text-white">
    <div class="pointer-events-none absolute -right-24 -top-24 h-72 w-72 rounded-full bg-aru-gold/10 blur-3xl"></div>
    <div class="pointer-events-none absolute -bottom-32 left-1/4 h-72 w-72 rounded-full bg-white/5 blur-3xl"></div>

    <div class="webaru-container relative py-12 lg:py-14">
        <div class="grid gap-10 md:grid-cols-2 lg:grid-cols-[1.35fr_0.9fr_0.9fr_1fr] lg:gap-12">

            <div>
                <a href="{{ route('2026.home') }}" class="inline-flex items-center gap-3.5">
                    <span class="flex h-[68px] w-[68px] items-center justify-center rounded-2xl bg-white p-2 shadow-lg shadow-black/10">
                        <img src="{{ asset('images/webaru_2026/logo/aru-logo.png') }}" alt="ARU" class="h-full w-auto">
                    </span>

                    <span>
                        <span class="block text-lg font-extrabold leading-tight">
                            มหาวิทยาลัยราชภัฏ<br>พระนครศรีอยุธยา
                        </span>
                        <span class="mt-1 block text-[9px] uppercase tracking-wide text-white/55">
                            Phranakhon Si Ayutthaya Rajabhat University
                        </span>
                    </span>
                </a>

                <p class="mt-6 max-w-sm text-sm leading-7 text-white/70">
                    96 หมู่ 2 ถนนปรีดีพนมยงค์ ตำบลประตูชัย<br>
                    อำเภอพระนครศรีอยุธยา จังหวัดพระนครศรีอยุธยา 13000
                </p>

                <div class="mt-5 flex flex-wrap gap-2 text-xs text-white/75">
                    <span class="rounded-full border border-white/15 bg-white/5 px-3 py-1.5">035-276555</span>
                    <span class="rounded-full border border-white/15 bg-white/5 px-3 py-1.5">www.aru.ac.th</span>
                </div>
            </div>

            <div>
                <h3 class="text-sm font-bold text-white">เกี่ยวกับมหาวิทยาลัย</h3>
                <div class="mt-5 flex flex-col gap-3.5 text-sm text-white/65">
                    <a href="#" class="transition hover:translate-x-1 hover:text-aru-gold">ประวัติความเป็นมา</a>
                    <a href="#" class="transition hover:translate-x-1 hover:text-aru-gold">วิสัยทัศน์ พันธกิจ</a>
                    <a href="#" class="transition hover:translate-x-1 hover:text-aru-gold">คณะผู้บริหาร</a>
                    <a href="#faculties" class="transition hover:translate-x-1 hover:text-aru-gold">คณะและหน่วยงาน</a>
                </div>
            </div>

            <div>
                <h3 class="text-sm font-bold text-white">นักศึกษา</h3>
                <div class="mt-5 flex flex-col gap-3.5 text-sm text-white/65">
                    <a href="#" class="transition hover:translate-x-1 hover:text-aru-gold">ปฏิทินการศึกษา</a>
                    <a href="#" class="transition hover:translate-x-1 hover:text-aru-gold">ระบบทะเบียน</a>
                    <a href="#" class="transition hover:translate-x-1 hover:text-aru-gold">ทุนการศึกษา</a>
                    <a href="#services" class="transition hover:translate-x-1 hover:text-aru-gold">บริการออนไลน์</a>
                </div>
            </div>

            <div>
                <h3 class="text-sm font-bold text-white">ติดต่อเรา</h3>
                <div class="mt-5 space-y-4 text-sm text-white/65">
                    <p class="leading-6">มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา</p>
                    <p>โทรศัพท์ 035-276555</p>
                    <p>เว็บไซต์ www.aru.ac.th</p>
                </div>

                <a href="#home"
                    class="mt-6 inline-flex items-center gap-2 rounded-xl border border-white/15 bg-white/5 px-4 py-2.5 text-xs font-semibold text-white transition hover:bg-white hover:text-aru-primary">
                    กลับด้านบน
                    <span aria-hidden="true">↑</span>
                </a>
            </div>
        </div>
    </div>

    <div class="border-t border-white/10 bg-black/10">
        <div class="webaru-container flex flex-col gap-3 py-5 text-xs text-white/50 sm:flex-row sm:items-center sm:justify-between">
            <p>© {{ date('Y') }} Phranakhon Si Ayutthaya Rajabhat University. All rights reserved.</p>
            <div class="flex gap-5">
                <a href="#" class="hover:text-white">นโยบายความเป็นส่วนตัว</a>
                <a href="#" class="hover:text-white">แผนผังเว็บไซต์</a>
            </div>
        </div>
    </div>
</footer>
