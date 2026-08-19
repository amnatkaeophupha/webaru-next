@php($interval = $interval ?? 6000)

{{-- =========================================================
    HERO / CAROUSEL
========================================================== --}}
<section id="home" class="relative bg-[#F7F8FA] pt-4 sm:pt-5 lg:pt-6"
    x-data="heroCarousel({ total: {{ count($slides) }}, interval: {{ $interval }} })"
    @mouseenter="pauseForHover()" @mouseleave="resumeAfterHover()" @focusin="pauseForFocus()"
    @focusout="if (!$el.contains($event.relatedTarget)) resumeAfterFocus()" @keydown.arrow-left.prevent="previous()"
    @keydown.arrow-right.prevent="next()" role="region" aria-label="ภาพประชาสัมพันธ์มหาวิทยาลัย" aria-roledescription="carousel">

    <div class="webaru-container">
        <div class="relative overflow-hidden rounded-[22px] border border-black/5 bg-white shadow-[0_22px_70px_rgba(15,23,42,0.08)] lg:rounded-[30px]">

            <div class="relative aspect-[3/4] w-full overflow-hidden bg-[#EAF4FC] md:aspect-[8/3] md:bg-white">
                @foreach ($slides as $index => $slide)
                    <div x-cloak x-show="active === {{ $index }}" x-transition.opacity.duration.700ms
                        class="absolute inset-0" role="group" aria-roledescription="slide"
                        aria-label="สไลด์ที่ {{ $index + 1 }} จาก {{ count($slides) }}"
                        :aria-hidden="(active !== {{ $index }}).toString()">
                        <picture>
                            <source media="(max-width: 767px)"
                                srcset="{{ asset('images/webaru_2026/hero/' . $slide['mobile_image']) }}">
                            <img src="{{ asset('images/webaru_2026/hero/' . $slide['desktop_image']) }}"
                                alt="{{ $slide['alt'] }}" width="1920" height="720" decoding="async"
                                @if ($index === 0) fetchpriority="high" @else loading="lazy" @endif
                                class="block h-full w-full object-cover object-center">
                        </picture>
                    </div>
                @endforeach

                <div class="pointer-events-none absolute inset-0 bg-gradient-to-t from-black/40 via-transparent to-transparent md:hidden"></div>
                <div class="pointer-events-none absolute left-3 top-3 rounded-full border border-white/35 bg-white/90 px-3 py-1.5 text-[11px] font-semibold text-aru-primary shadow-sm backdrop-blur md:hidden">
                    มหาวิทยาลัยแห่งเมืองมรดกโลก
                </div>

                @if (count($slides) > 1)
                    <button type="button" @click="previous()"
                        class="absolute left-3 top-1/2 z-20 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-full border border-white/30 bg-black/35 text-xl text-white shadow-lg backdrop-blur transition hover:bg-aru-primary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white md:left-5 md:h-11 md:w-11"
                        aria-label="แสดงสไลด์ก่อนหน้า">
                        <span aria-hidden="true">‹</span>
                    </button>

                    <button type="button" @click="next()"
                        class="absolute right-3 top-1/2 z-20 flex h-10 w-10 -translate-y-1/2 items-center justify-center rounded-full border border-white/30 bg-black/35 text-xl text-white shadow-lg backdrop-blur transition hover:bg-aru-primary focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white md:right-5 md:h-11 md:w-11"
                        aria-label="แสดงสไลด์ถัดไป">
                        <span aria-hidden="true">›</span>
                    </button>

                    <div class="absolute bottom-3 left-1/2 z-20 flex -translate-x-1/2 items-center gap-2 rounded-full border border-white/25 bg-black/35 px-3 py-2 shadow-lg backdrop-blur md:bottom-5"
                        role="group" aria-label="ควบคุมสไลด์">
                        @foreach ($slides as $index => $slide)
                            <button type="button"
                                class="h-2.5 rounded-full transition-all duration-300 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white"
                                :class="active === {{ $index }} ? 'w-8 bg-aru-gold' : 'w-2.5 bg-white/80'"
                                :aria-current="active === {{ $index }} ? 'true' : 'false'"
                                @click="goTo({{ $index }})"
                                aria-label="ไปยังสไลด์ที่ {{ $index + 1 }}">
                            </button>
                        @endforeach

                        <span class="h-5 w-px bg-white/30" aria-hidden="true"></span>

                        <button type="button" @click="togglePlay()" :aria-pressed="userPaused.toString()"
                            :disabled="reducedMotion" :aria-label="reducedMotion ? 'ปิดการเล่นอัตโนมัติตามการตั้งค่าลดการเคลื่อนไหว' : (userPaused ? 'เล่นสไลด์อัตโนมัติ' : 'หยุดสไลด์อัตโนมัติ')"
                            class="flex h-7 w-7 items-center justify-center disabled:cursor-not-allowed disabled:opacity-50 rounded-full text-sm text-white transition hover:bg-white/15 focus-visible:outline-none focus-visible:ring-2 focus-visible:ring-white">
                            <span x-show="!userPaused" aria-hidden="true">Ⅱ</span>
                            <span x-cloak x-show="userPaused" aria-hidden="true">▶</span>
                        </button>
                    </div>
                @endif
            </div>

            {{-- Mobile copy remains readable HTML and does not change with the artwork. --}}
            <div class="md:hidden">
                <div class="relative px-5 pb-5 pt-6">
                    <div class="pointer-events-none absolute -right-10 top-0 h-28 w-28 rounded-full bg-aru-gold/15 blur-2xl"></div>

                    <h1 class="relative text-[34px] font-extrabold leading-[1.16] tracking-tight">
                        <span class="block text-aru-primary">สร้างคนดี มีปัญญา</span>
                        <span class="mt-1 block text-aru-text">พัฒนาท้องถิ่น</span>
                    </h1>

                    <p class="relative mt-4 text-sm leading-7 text-aru-muted">
                        มุ่งมั่นจัดการศึกษาที่มีคุณภาพ ได้มาตรฐานสากล บูรณาการองค์ความรู้คู่คุณธรรม เพื่อพัฒนาท้องถิ่นอย่างยั่งยืน
                    </p>

                    <div class="relative mt-5 grid grid-cols-2 gap-3">
                        <a href="#" class="inline-flex min-h-12 items-center justify-center rounded-xl bg-aru-primary px-4 text-sm font-semibold text-white shadow-lg shadow-aru-primary/20">
                            เกี่ยวกับมหาวิทยาลัย
                        </a>
                        <a href="#admission" class="inline-flex min-h-12 items-center justify-center rounded-xl bg-aru-gold px-4 text-sm font-semibold text-aru-text shadow-lg shadow-aru-gold/20">
                            สมัครเรียนออนไลน์
                        </a>
                    </div>
                </div>
            </div>

            {{-- Floating quick services --}}
            <div class="border-t border-black/5 bg-white px-3 py-3 sm:px-4 lg:px-5 lg:py-4">
                <div class="grid grid-cols-2 gap-2 md:grid-cols-4 md:gap-3">
                    @foreach ($quickServices as $index => $service)
                        <a href="{{ $service['url'] }}"
                            class="group flex min-h-[72px] items-center gap-3 rounded-2xl border border-aru-border/70 bg-[#FBFBFC] px-4 transition duration-300 hover:-translate-y-0.5 hover:border-aru-primary/35 hover:bg-white hover:shadow-lg hover:shadow-black/5 lg:min-h-[78px] lg:px-5">
                            <span class="flex h-10 w-10 shrink-0 items-center justify-center rounded-xl bg-aru-primary/10 text-sm font-extrabold text-aru-primary transition group-hover:bg-aru-primary group-hover:text-white">
                                0{{ $index + 1 }}
                            </span>
                            <span class="min-w-0">
                                <span class="block truncate text-sm font-bold text-aru-text group-hover:text-aru-primary">{{ $service['label'] }}</span>
                                <span class="mt-0.5 block text-[10px] uppercase tracking-wide text-aru-muted">{{ $service['subtitle'] }}</span>
                            </span>
                        </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
