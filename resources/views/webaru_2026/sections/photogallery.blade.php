@php
    $items = collect($items ?? [])->values();
    $allUrl = $allUrl ?? '#';
@endphp

<section id="photogallery"
    class="border-y border-aru-border/50 bg-white py-12 sm:py-14 lg:py-16"
    aria-labelledby="photogallery-title">
    <div class="webaru-container">

        {{-- =====================================================
            SECTION HEADER
        ====================================================== --}}
        <div
            class="mb-8 flex flex-col gap-6 rounded-xl border border-aru-border/70 border-l-4 border-l-aru-primary bg-white px-5 py-6 shadow-sm sm:px-7 md:flex-row md:items-end md:justify-between lg:mb-10 lg:px-8 lg:py-7">
            <div class="text-center md:text-left">
                <span
                    class="inline-flex rounded-md bg-aru-primary/10 px-3 py-1 text-xs font-bold uppercase tracking-[0.16em] text-aru-primary">
                    ARU PHOTO GALLERY
                </span>

                <h2 id="photogallery-title" class="mt-3 text-2xl font-extrabold tracking-tight sm:text-3xl">
                    <span class="text-aru-primary">
                        ARU
                    </span>

                    <span class="text-[#8A5A00]">
                        PHOTO GALLERY
                    </span>
                </h2>

                <div class="mx-auto mt-3 h-1 w-14 rounded-full bg-aru-primary md:mx-0" aria-hidden="true"></div>

                <p class="mt-4 text-sm font-medium text-aru-muted sm:text-base">
                    รวบรวมภาพกิจกรรมและบรรยากาศความเคลื่อนไหว
                    ภายในมหาวิทยาลัยราชภัฏพระนครศรีอยุธยา
                </p>
            </div>

            <a href="{{ $allUrl }}"
                class="inline-flex min-h-11 shrink-0 items-center justify-center gap-2 self-start rounded-lg border border-aru-primary/35 bg-white px-4 py-2.5 text-sm font-semibold text-aru-primary transition hover:border-aru-primary hover:bg-aru-primary hover:text-white focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-aru-primary md:self-auto">
                ดูภาพทั้งหมด <span aria-hidden="true">→</span>
            </a>
        </div>


        {{-- =====================================================
            GALLERY
        ====================================================== --}}
        @if ($items->isNotEmpty())

            <div
                class="
                    grid grid-cols-1 gap-5 sm:grid-cols-2 xl:grid-cols-4
                ">

                @foreach ($items as $item)
                    <article
                        class="group flex flex-col overflow-hidden rounded-xl border border-aru-border/70 bg-white shadow-sm transition duration-300 hover:-translate-y-0.5 hover:border-aru-primary/30 hover:shadow-lg hover:shadow-black/5">

                        {{-- =============================================
                            IMAGE
                        ============================================== --}}
                        <a href="{{ $item['url'] }}"
                            class="relative block
                                   aspect-[16/10]
                                   overflow-hidden
                                   bg-slate-100

                                   focus-visible:outline-2
                                   focus-visible:outline-offset-[-2px]
                                   focus-visible:outline-aru-primary"
                            aria-label="ชมภาพกิจกรรม {{ $item['title'] }}">

                            <img src="{{ $item['thumbnail_url'] }}"
                                alt="{{ $item['title'] }}" loading="lazy" decoding="async"
                                class="h-full w-full object-cover transition duration-500 ease-out group-hover:scale-[1.025]">


                        </a>


                        {{-- =============================================
                            CONTENT
                        ============================================== --}}
                        <div
                            class="flex flex-1 flex-col p-5">

                            {{-- Semantic chip --}}
                            <div>
                                <span
                                    class="inline-flex items-center rounded-md bg-aru-primary/8 px-2.5 py-1 text-[11px] font-semibold text-aru-primary">
                                    ภาพกิจกรรม
                                </span>
                            </div>


                            {{-- Title --}}
                            <h3
                                class="mt-3 line-clamp-2 min-h-14 text-[15px] font-semibold leading-7 text-aru-text transition-colors group-hover:text-aru-primary">
                                <a href="{{ $item['url'] }}"
                                    class="
                                        rounded-sm

                                        focus-visible:outline-2
                                        focus-visible:outline-offset-2
                                        focus-visible:outline-aru-primary
                                    ">
                                    {{ $item['title'] }}
                                </a>
                            </h3>


                            {{-- =========================================
                                META
                            ========================================== --}}
                            <div
                                class="mt-auto flex flex-wrap items-center gap-x-3 gap-y-3 border-t border-aru-border/60 pt-4">

                                {{-- Date --}}
                                <div
                                    class="
                                        flex items-center
                                        gap-2

                                        text-[11px]
                                        text-aru-muted

                                        sm:text-xs
                                    ">
                                    <svg class="h-4 w-4 shrink-0" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                        stroke-linejoin="round" aria-hidden="true">
                                        <rect x="3" y="5" width="18" height="16" rx="2" />

                                        <path d="M16 3v4M8 3v4M3 11h18" />
                                    </svg>

                                    <time>
                                        {{ $item['date'] }}
                                    </time>
                                </div>


                                {{-- Views --}}
                                <div
                                    class="
                                        flex items-center
                                        gap-2

                                        text-[11px]
                                        text-aru-muted

                                        sm:text-xs
                                    ">
                                    <svg class="h-4 w-4 shrink-0" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.8" stroke-linecap="round"
                                        stroke-linejoin="round" aria-hidden="true">
                                        <path d="
                                                M2.5 12s3.5-6
                                                9.5-6
                                                9.5 6
                                                9.5 6
                                                -3.5 6
                                                -9.5 6
                                                -9.5-6
                                                -9.5-6Z
                                            " />

                                        <circle cx="12" cy="12" r="2.5" />
                                    </svg>

                                    <span>
                                        เข้าชม
                                        {{ number_format($item['views'] ?? 0) }}
                                        ครั้ง
                                    </span>
                                </div>


                                {{-- Read more --}}
                                <a href="{{ $item['url'] }}"
                                    class="
                                        ml-auto
                                        inline-flex
                                        items-center
                                        gap-1.5

                                        rounded-sm

                                        text-xs
                                        font-bold
                                        text-aru-primary

                                        transition

                                        hover:gap-2.5
                                        hover:text-aru-primary-dark

                                        focus-visible:outline-2
                                        focus-visible:outline-offset-2
                                        focus-visible:outline-aru-primary
                                    ">
                                    ชมภาพกิจกรรม

                                    <svg class="h-3.5 w-3.5" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        aria-hidden="true">
                                        <path d="M5 12h14" />
                                        <path d="m13 6 6 6-6 6" />
                                    </svg>
                                </a>

                            </div>

                        </div>

                    </article>
                @endforeach

            </div>

        @else
            {{-- =====================================================
                EMPTY STATE
            ====================================================== --}}
            <div
                class="
                    rounded-xl
                    border border-dashed
                    border-aru-border

                    bg-white

                    px-6 py-14
                    text-center
                ">
                <p class="text-sm font-medium text-aru-muted">
                    ยังไม่มีภาพกิจกรรมในขณะนี้
                </p>
            </div>

        @endif

    </div>
</section>
