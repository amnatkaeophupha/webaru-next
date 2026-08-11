@extends('layouts.public')

@section('title', 'มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา')

@section('description', 'เว็บไซต์มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา')

@section('content')

    {{-- Hero Section --}}
    <section class="relative overflow-hidden bg-slate-950">
        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/50 to-transparent"></div>

        <div class="relative mx-auto flex min-h-[520px] max-w-7xl items-center px-4 py-20 sm:px-6 lg:px-8">
            <div class="max-w-3xl text-white">
                <p class="mb-4 inline-flex rounded-full bg-white/10 px-4 py-2 text-sm backdrop-blur">
                    มหาวิทยาลัยเพื่อการพัฒนาท้องถิ่น
                </p>

                <h1 class="text-4xl font-bold leading-tight md:text-6xl">
                    สร้างองค์ความรู้
                    <span class="text-university-secondary">
                        พัฒนาชุมชน
                    </span>
                    สู่อนาคต
                </h1>

                <p class="mt-6 max-w-2xl text-lg leading-8 text-white/75">
                    มุ่งเน้นการจัดการศึกษาที่มีคุณภาพ
                    การวิจัย และการบริการวิชาการ
                    เพื่อพัฒนาท้องถิ่นอย่างยั่งยืน
                </p>

                <div class="mt-8 flex flex-wrap gap-4">
                    <a href="#news"
                        class="rounded-xl bg-university-secondary px-6 py-3 font-semibold text-university-primary-dark transition hover:-translate-y-0.5">
                        ข่าวสารมหาวิทยาลัย
                    </a>

                    <a href="#services"
                        class="rounded-xl border border-white/30 px-6 py-3 font-semibold transition hover:bg-white/10">
                        บริการออนไลน์
                    </a>
                </div>
            </div>
        </div>
    </section>

    {{-- Online Services --}}
    <section id="services" class="bg-slate-50 py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <p class="font-medium text-university-primary">
                    ARU Digital Services
                </p>

                <h2 class="mt-2 text-3xl font-bold text-slate-900">
                    บริการออนไลน์
                </h2>
            </div>

            <div class="mt-10 grid gap-6 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ([['title' => 'ระบบบริการการศึกษา', 'description' => 'สำหรับนักศึกษาและอาจารย์'], ['title' => 'ระบบรับสมัครนักศึกษา', 'description' => 'สมัครเรียนออนไลน์'], ['title' => 'ห้องสมุดออนไลน์', 'description' => 'สืบค้นทรัพยากรสารสนเทศ'], ['title' => 'ระบบสารบรรณ', 'description' => 'สำหรับบุคลากรมหาวิทยาลัย']] as $service)
                    <a href="#"
                        class="group rounded-2xl bg-white p-6 shadow-sm ring-1 ring-slate-200 transition hover:-translate-y-1 hover:shadow-lg">
                        <div
                            class="mb-5 flex size-12 items-center justify-center rounded-xl bg-university-primary/10 font-bold text-university-primary">
                            ARU
                        </div>

                        <h3 class="font-semibold text-slate-900">
                            {{ $service['title'] }}
                        </h3>

                        <p class="mt-2 text-sm text-slate-500">
                            {{ $service['description'] }}
                        </p>
                    </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- News --}}
    <section id="news" class="py-16">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex items-end justify-between gap-6">
                <div>
                    <p class="font-medium text-university-primary">
                        News & Activities
                    </p>

                    <h2 class="mt-2 text-3xl font-bold text-slate-900">
                        ข่าวสารและกิจกรรม
                    </h2>
                </div>

                <a href="#" class="hidden font-medium text-university-primary hover:underline sm:block">
                    ดูข่าวทั้งหมด
                </a>
            </div>

            <div class="mt-10 grid gap-8 md:grid-cols-2 lg:grid-cols-3">
                @for ($index = 1; $index <= 3; $index++)
                    <article class="overflow-hidden rounded-2xl bg-white shadow-sm ring-1 ring-slate-200">
                        <div class="aspect-[16/10] bg-slate-200"></div>

                        <div class="p-6">
                            <p class="text-sm font-medium text-university-primary">
                                ข่าวประชาสัมพันธ์
                            </p>

                            <h3 class="mt-3 text-lg font-semibold leading-7">
                                ตัวอย่างหัวข้อข่าวมหาวิทยาลัย ลำดับที่
                                {{ $index }}
                            </h3>

                            <p class="mt-3 text-sm leading-6 text-slate-500">
                                รายละเอียดโดยย่อของข่าวหรือกิจกรรมมหาวิทยาลัย
                                เพื่อแสดงผลบนหน้าเว็บไซต์
                            </p>

                            <a href="#" class="mt-5 inline-flex font-medium text-university-primary">
                                อ่านรายละเอียด
                            </a>
                        </div>
                    </article>
                @endfor
            </div>
        </div>
    </section>

@endsection
