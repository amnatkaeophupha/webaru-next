@php
    $items = collect($items ?? [])
        ->sortByDesc('issue')
        ->values();

    $featured = $items->first();
    $otherItems = $items->skip(1)->take(3);

    $allUrl = $allUrl ?? '#';
    $lineQrUrl = $lineQrUrl ?? null;

    $vision = 'เป็นมหาวิทยาลัยราชภัฏที่มีความเป็นเลิศด้านการพัฒนานวัตกรรมที่สอดคล้องกับการศึกษา
    และพัฒนาท้องถิ่นอย่างยั่งยืนด้วยทุนทางวัฒนธรรมแห่งเมืองมรดกโลก ภายในปี 2570';
@endphp


@if ($featured)

    <section id="arunews" class="relative overflow-hidden bg-aru-surface-soft py-12 lg:py-16">


        <div class="webaru-container">


            {{-- =====================================================
            Section Header
        ====================================================== --}}

            <div
                class="mb-0 flex flex-col gap-6 rounded-t-xl border border-b-0 border-aru-border/70 border-t-4 border-t-aru-primary bg-white px-5 py-6
                   sm:px-7 md:flex-row md:items-end md:justify-between
                   lg:px-8 lg:py-7">

                <div class="text-center md:text-left">

                    <span
                        class="inline-flex rounded-md
                           bg-aru-primary/10
                           px-3 py-1
                           text-xs font-bold
                           uppercase tracking-[0.16em]
                           text-aru-primary">
                        ARUNEWS
                    </span>


                    <h2
                        class="mt-3 text-2xl font-extrabold
                           tracking-tight
                           sm:text-3xl">
                        <span class="text-aru-primary">
                            ARU
                        </span>

                        <span class="text-[#8A5A00]">
                            NEWS
                        </span>
                    </h2>


                    <div
                        class="mx-auto mt-3 h-1 w-14
                           rounded-full
                           bg-aru-primary
                           md:mx-0">
                    </div>


                    <p
                        class="mt-4 text-sm font-medium
                           text-aru-muted
                           sm:text-base">
                        เอกสารเพื่อการเผยแพร่และประชาสัมพันธ์
                    </p>

                </div>


                <a href="{{ $allUrl }}"
                    class="inline-flex shrink-0 items-center gap-2 rounded-xl border border-aru-primary/25 bg-white px-4 py-2.5 text-sm font-semibold text-aru-primary shadow-sm transition hover:border-aru-primary hover:bg-aru-primary hover:text-white">
                    ดูทั้งหมด <span aria-hidden="true">→</span>
                </a>

            </div>



            {{-- =====================================================
            Main ARUNEWS Card
        ====================================================== --}}

            <div
                class="overflow-hidden
                   rounded-b-xl
                   border border-aru-border/70
                   bg-white">

                <div class="grid
                       xl:grid-cols-[1.7fr_1fr]">


                    {{-- =================================================
                    Featured issue
                ================================================== --}}

                    <article
                        class="relative
                           border-b border-aru-border/60
                           p-5
                           sm:p-6
                           lg:p-8
                           xl:border-b-0
                           xl:border-r">

                        <span
                            class="absolute left-5 top-5 z-10
                               rounded-full
                               bg-aru-primary
                               px-4 py-2
                               text-xs font-bold
                               text-white
                               shadow-sm
                               sm:left-6 sm:top-6
                               lg:left-8 lg:top-8">
                            ฉบับล่าสุด
                        </span>


                        <div
                            class="grid items-center gap-7
                               md:grid-cols-[minmax(240px,0.85fr)_1.15fr]
                               lg:gap-9">


                            {{-- PDF Thumbnail --}}

                            <a href="{{ $featured['pdf_url'] }}" target="_blank" rel="noopener noreferrer"
                                class="group relative mx-auto block w-full max-w-[390px] rounded-2xl focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-aru-primary md:max-w-none"
                                aria-label="เปิด ARUNEWS ฉบับที่ {{ $featured['issue'] }}">

                                <div
                                    class="overflow-hidden
                                       rounded-2xl
                                       border border-aru-border/60
                                       bg-white
                                       shadow-sm">

                                    <img src="{{ $featured['thumbnail_url'] }}"
                                        alt="ARUNEWS ฉบับที่ {{ $featured['issue'] }}" loading="lazy"
                                        class="aspect-[2/3]
                                           w-full
                                           object-cover">

                                </div>

                            </a>



                            {{-- Featured Content --}}

                            <div>

                                <div class="flex flex-wrap
                                       items-center gap-2">

                                    <span
                                        class="rounded-full
                                           bg-aru-primary/10
                                           px-3 py-1.5
                                           text-xs font-bold
                                           text-aru-primary">
                                        ปีที่ {{ $featured['volume'] }}
                                    </span>

                                    <span
                                        class="rounded-full
                                           bg-aru-gold/20
                                           px-3 py-1.5
                                           text-xs font-bold
                                           text-[#9A6700]">
                                        ฉบับที่ {{ $featured['issue'] }}
                                    </span>

                                </div>


                                <h3
                                    class="mt-5
                                       text-xl font-semibold
                                       leading-[1.7]
                                       text-aru-text
                                       sm:text-2xl">
                                    {{ $featured['title'] }}
                                </h3>


                                <div
                                    class="mt-5
                                       flex items-center gap-2
                                       text-xs text-aru-muted
                                       sm:text-sm">

                                    <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="1.8" aria-hidden="true">
                                        <rect x="3" y="5" width="18" height="16" rx="2" />

                                        <path d="M16 3v4M8 3v4M3 11h18" />
                                    </svg>

                                    <span>
                                        {{ $featured['date'] }}
                                    </span>

                                </div>


                                @if (!empty($featured['excerpt']))
                                    <p
                                        class="mt-5
                                           line-clamp-4
                                           text-sm leading-7
                                           text-aru-muted">
                                        {{ $featured['excerpt'] }}
                                    </p>
                                @endif



                                {{-- Actions --}}

                                <div class="mt-7
                                       flex flex-wrap gap-3">

                                    <a href="{{ $featured['pdf_url'] }}" target="_blank" rel="noopener noreferrer"
                                        class="inline-flex min-h-12
                                           items-center justify-center
                                           gap-2
                                           rounded-xl
                                           bg-aru-primary
                                           px-5
                                           text-sm font-semibold
                                           text-white
                                           shadow-sm
                                           transition
                                           hover:bg-aru-primary-dark
                                           focus-visible:outline-2
                                           focus-visible:outline-offset-2
                                           focus-visible:outline-aru-primary">

                                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.8" aria-hidden="true">
                                            <path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20" />
                                            <path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2Z" />
                                        </svg>

                                        อ่านออนไลน์

                                    </a>


                                    <a href="{{ $featured['pdf_url'] }}" download
                                        class="inline-flex min-h-12
                                           items-center justify-center
                                           gap-2
                                           rounded-xl
                                           border border-aru-primary/40
                                           bg-white
                                           px-5
                                           text-sm font-semibold
                                           text-aru-primary
                                           transition
                                           hover:border-aru-primary
                                           hover:bg-aru-primary
                                           hover:text-white
                                           focus-visible:outline-2
                                           focus-visible:outline-offset-2
                                           focus-visible:outline-aru-primary">

                                        <svg class="h-5 w-5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                            stroke-width="1.8" aria-hidden="true">
                                            <path d="M12 3v12" />
                                            <path d="m7 10 5 5 5-5" />
                                            <path d="M5 21h14" />
                                        </svg>

                                        ดาวน์โหลด PDF

                                    </a>

                                </div>

                            </div>

                        </div>

                    </article>



                    {{-- =================================================
                    Other ARUNEWS
                ================================================== --}}

                    <div
                        class="divide-y divide-aru-border/60 bg-aru-surface
                           px-5
                           sm:px-6
                           lg:px-7">

                        @foreach ($otherItems as $item)
                            <article
                                class="group
                                   grid grid-cols-[92px_1fr]
                                   gap-4 py-5
                                   sm:grid-cols-[110px_1fr]
                                   lg:gap-5 lg:py-6">

                                {{-- Thumbnail --}}

                                <a href="{{ $item['pdf_url'] }}" target="_blank" rel="noopener noreferrer"
                                    class="block rounded-xl focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-aru-primary">

                                    <div
                                        class="overflow-hidden
                                           rounded-xl
                                           border border-aru-border/60
                                           bg-white
                                           shadow-sm">

                                        <img src="{{ $item['thumbnail_url'] }}"
                                            alt="ARUNEWS ฉบับที่ {{ $item['issue'] }}" loading="lazy"
                                            class="aspect-[2/3]
                                               w-full
                                               object-cover">

                                    </div>

                                </a>


                                {{-- Content --}}

                                <div class="min-w-0">

                                    <div class="flex flex-wrap items-center gap-2">
                                        <span
                                            class="inline-flex
                                               rounded-full
                                               bg-aru-primary/10
                                               px-3 py-1
                                               text-[11px] font-bold
                                               text-aru-primary">
                                            ปีที่ {{ $item['volume'] }}
                                        </span>

                                        <span
                                            class="inline-flex
                                               rounded-full
                                               bg-aru-gold/20
                                               px-3 py-1
                                               text-[11px] font-bold
                                               text-[#9A6700]">
                                            ฉบับที่ {{ $item['issue'] }}
                                        </span>
                                    </div>


                                    <h3
                                        class="mt-3
                                           line-clamp-3
                                           text-sm font-normal
                                           leading-6
                                           text-aru-text
                                           transition
                                           group-hover:text-aru-primary
                                           sm:text-[15px]">
                                        <a href="{{ $item['pdf_url'] }}" target="_blank" rel="noopener noreferrer"
                                            class="rounded-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-aru-primary">
                                            {{ $item['title'] }}
                                        </a>
                                    </h3>


                                    <div
                                        class="mt-3
                                           flex items-center gap-2
                                           text-[11px]
                                           text-aru-muted">

                                        <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                            <rect x="3" y="5" width="18" height="16" rx="2" />

                                            <path d="M16 3v4M8 3v4M3 11h18" />
                                        </svg>

                                        {{ $item['date'] }}

                                    </div>


                                    <a href="{{ $item['pdf_url'] }}" download
                                        class="mt-3
                                           inline-flex
                                           items-center gap-1.5
                                           text-xs font-semibold
                                           text-aru-primary
                                           transition
                                           hover:text-aru-primary-dark
                                           focus-visible:outline-2
                                           focus-visible:outline-offset-2
                                           focus-visible:outline-aru-primary">

                                        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none"
                                            stroke="currentColor" stroke-width="1.8" aria-hidden="true">
                                            <path d="M12 3v12" />
                                            <path d="m7 10 5 5 5-5" />
                                            <path d="M5 21h14" />
                                        </svg>

                                        ดาวน์โหลด PDF

                                    </a>

                                </div>

                            </article>
                        @endforeach

                    </div>

                </div>

            </div>



            {{-- =====================================================
            Vision / Contact / LINE
        ====================================================== --}}

            <div
                class="mt-5 overflow-hidden
                   rounded-xl
                   border border-aru-border/70
                   bg-white
                   shadow-sm">

                <div class="grid
                       lg:grid-cols-[1.6fr_0.7fr_0.7fr]">


                    {{-- Vision --}}

                    <div
                        class="relative overflow-hidden
                           bg-aru-primary
                           px-6 py-6
                           text-white
                           sm:px-8">

                        <div class="relative">

                            <p
                                class="text-base font-bold
                                   text-aru-gold
                                   sm:text-lg">
                                วิสัยทัศน์
                            </p>


                            <blockquote
                                class="mt-2
                                   text-sm font-medium
                                   leading-7
                                   text-white/90
                                   sm:text-[15px]">
                                “{{ $vision }}”
                            </blockquote>

                        </div>

                    </div>



                    {{-- Contact --}}

                    <div
                        class="border-t border-aru-border/60
                           px-6 py-6
                           lg:border-l lg:border-t-0">

                        <p class="text-xs font-bold
                               text-aru-text">
                            งานศูนย์ดิจิทัลเพื่อการเรียนรู้
                            และสื่อสารองค์กร
                        </p>


                        <div
                            class="mt-3 space-y-2
                               text-xs
                               text-aru-muted">

                            <p class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-aru-primary" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" aria-hidden="true">
                                    <path
                                        d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6A19.79 19.79 0 0 1 2.12 4.18 2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72c.13.96.36 1.9.69 2.8a2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45c.9.33 1.84.56 2.8.69A2 2 0 0 1 22 16.92Z" />
                                </svg>
                                <span>โทร. 0 3527 6555</span>
                            </p>

                            <p class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-aru-primary" viewBox="0 0 24 24"
                                    fill="currentColor" aria-hidden="true">
                                    <path
                                        d="M24 12.073C24 5.405 18.627 0 12 0S0 5.405 0 12.073C0 18.1 4.388 23.094 10.125 24v-8.437H7.078v-3.49h3.047V9.413c0-3.025 1.792-4.697 4.533-4.697 1.312 0 2.686.236 2.686.236v2.973h-1.513c-1.49 0-1.956.931-1.956 1.887v2.261h3.328l-.532 3.49h-2.796V24C19.612 23.094 24 18.1 24 12.073Z" />
                                </svg>
                                <span>www.facebook.com/pr.aru</span>
                            </p>

                            <p class="flex items-center gap-2">
                                <svg class="h-4 w-4 shrink-0 text-aru-primary" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                    stroke-linejoin="round" aria-hidden="true">
                                    <circle cx="12" cy="12" r="9" />
                                    <path d="M3 12h18M12 3a15 15 0 0 1 0 18M12 3a15 15 0 0 0 0 18" />
                                </svg>
                                <span>www.aru.ac.th</span>
                            </p>

                        </div>

                    </div>



                    {{-- LINE QR --}}

                    <div
                        class="flex items-center
                           border-t border-aru-border/60
                           px-6 py-5
                           lg:border-l lg:border-t-0">

                        <div class="flex w-full
                               items-center gap-4">

                            @if ($lineQrUrl)
                                <img src="{{ $lineQrUrl }}" alt="QR Code รับข่าวสารมหาวิทยาลัยผ่าน LINE"
                                    loading="lazy"
                                    class="h-20 w-20
                                       shrink-0
                                       rounded-lg
                                       border border-aru-border
                                       bg-white p-1">
                            @endif


                            <div>

                                <p class="text-sm font-bold
                                       text-aru-text">
                                    รับข่าวสารผ่าน LINE
                                </p>

                                <p
                                    class="mt-1
                                       text-xs leading-5
                                       text-aru-muted">
                                    สแกนเพื่อรับข่าวสาร
                                    จากมหาวิทยาลัย
                                </p>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </section>

@endif
