@php

    /*
    |--------------------------------------------------------------------------
    | ARU Main Navigation
    |--------------------------------------------------------------------------
    |
    | ปรับจากเมนูเว็บไซต์เดิม
    |
    | Desktop:
    |   - Level 1 = Main Navigation
    |   - Dropdown = Mega Menu
    |
    | Mobile:
    |   - Level 1 = Accordion
    |   - Level 2/3 = Nested Accordion
    |
    | หมายเหตุ:
    |   - หน้าแรกใช้ url('/') เพื่อกลับหน้า Laravel ปัจจุบัน
    |   - URL อื่นคงตามเว็บไซต์เดิม
    |   - new_tab => true ใช้กับรายการที่เว็บไซต์เดิมกำหนด target="_blank"
    |
    */

    $menus = [
        /*
        |--------------------------------------------------------------------------
        | หน้าแรก
        |--------------------------------------------------------------------------
        */
        [
            'label' => 'หน้าแรก',
            'url' => route('2026.home'),
            'pattern' => '/',
        ],

        /*
        |--------------------------------------------------------------------------
        | เกี่ยวกับมหาวิทยาลัย
        | เดิม: แนะนำมหาวิทยาลัย
        |--------------------------------------------------------------------------
        */
        [
            'label' => 'เกี่ยวกับมหาวิทยาลัย',
            'pattern' => 'about*',
            'layout' => 'standard',

            'children' => [
                [
                    'label' => 'ประวัติมหาวิทยาลัย',
                    'url' => 'https://www.aru.ac.th/index.php/home/history',
                    'new_tab' => true,
                ],

                [
                    'label' => 'วีดิทัศน์แนะนำมหาวิทยาลัย',
                    'url' => 'https://www.aru.ac.th/index.php/home/videointro',
                    'new_tab' => true,
                ],

                [
                    'label' => 'สัญลักษณ์ของมหาวิทยาลัย',
                    'url' => 'https://www.aru.ac.th/index.php/home/symbol',
                    'new_tab' => true,
                ],

                [
                    'label' => 'ปรัชญา พันธกิจ วิสัยทัศน์',
                    'url' => 'https://www.aru.ac.th/index.php/home/strategic',
                    'new_tab' => true,
                ],

                [
                    'label' => 'แผนผังมหาวิทยาลัย',
                    'url' => 'https://www.aru.ac.th/index.php/home/map',
                    'new_tab' => true,
                ],

                [
                    'label' => 'นโยบาย แผนยุทธศาสตร์',
                    'url' => 'https://www.aru.ac.th/myadmin/uploads/plan/download/20240625-e7e488a8.pdf',
                    'new_tab' => true,
                ],

                [
                    'label' => 'กฏหมายที่เกี่ยวข้อง',

                    'children' => [
                        [
                            'label' => 'กฎหมายเกี่ยวกับทรัพยากรบุคคล',
                            'url' => 'https://aru.ac.th/law_aru/?page=directive',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'กฎหมายเกี่ยวกับมหาวิทยาลัย',
                            'url' => 'https://aru.ac.th/council/edoc-council/',
                            'new_tab' => true,
                        ],
                    ],
                ],

                [
                    'label' => 'โครงสร้างการแบ่งส่วนราชการภายใน',
                    'url' => 'https://www.aru.ac.th/index.php/home/structure',
                    'new_tab' => true,
                ],

                [
                    'label' => 'คณะกรรมการสภามหาวิทยาลัย',
                    'url' => 'https://www.aru.ac.th/council/?page=committee_new',
                    'new_tab' => true,
                ],

                [
                    'label' => 'คณะผู้บริหาร',
                    'url' => 'https://www.aru.ac.th/index.php/home/executive/0',
                    'new_tab' => true,
                ],

                [
                    'label' => 'ARU EdPEx KPI Dashboard',
                    'url' => 'https://www.aru.ac.th/edpex-kpi/',
                    'new_tab' => true,
                ],
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | หน่วยงาน
        | เดิม: หน่วยงาน/คณะ
        |--------------------------------------------------------------------------
        */
        [
            'label' => 'หน่วยงาน',
            'pattern' => 'organizations*',
            'layout' => 'grouped',

            'children' => [
                /*
                |--------------------------------------------------------------------------
                | คณะ
                |--------------------------------------------------------------------------
                */
                [
                    'label' => 'คณะ',

                    'children' => [
                        [
                            'label' => 'คณะครุศาสตร์',
                            'url' => 'https://www.aru.ac.th/edu',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'คณะมนุษยศาสตร์และสังคมศาสตร์',
                            'url' => 'https://www.aru.ac.th/human',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'คณะวิทยาศาสตร์และเทคโนโลยี',
                            'url' => 'https://www.aru.ac.th/sci',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'คณะวิทยาการจัดการ',
                            'url' => 'https://www.aru.ac.th/ms',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'บัณฑิตวิทยาลัย',
                            'url' => 'https://www.aru.ac.th/grad',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'โรงเรียนสาธิตมหาวิทยาลัยราชภัฏพระนครศรีอยุธยา',
                            'url' => 'https://www.aru.ac.th/stay',
                            'new_tab' => true,
                        ],
                    ],
                ],

                /*
                |--------------------------------------------------------------------------
                | สภา / สำนัก / สถาบัน
                |--------------------------------------------------------------------------
                */
                [
                    'label' => 'สภา/สำนัก/สถาบัน',

                    'children' => [
                        [
                            'label' => 'สภามหาวิทยาลัย',
                            'url' => 'https://www.aru.ac.th/council/',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'สภาวิชาการ',
                            'url' => 'https://www.aru.ac.th/academic/',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'สภาคณาจารย์และข้าราชการ',
                            'url' => 'https://www.aru.ac.th/senate/',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'สำนักงานอธิการบดี',
                            'url' => 'https://www.aru.ac.th/ops',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'สำนักวิทยบริการและเทคโนโลยีสารสนเทศ',
                            'url' => 'https://www.aru.ac.th/arit',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'สถาบันวิจัยและพัฒนา',
                            'url' => 'https://www.aru.ac.th/rdi/',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'สถาบันอยุธยาศึกษา',
                            'url' => 'https://www.aru.ac.th/asi',
                            'new_tab' => true,
                        ],
                    ],
                ],

                /*
                |--------------------------------------------------------------------------
                | ศูนย์ / กอง
                |--------------------------------------------------------------------------
                */
                [
                    'label' => 'ศูนย์/กอง',

                    'children' => [
                        [
                            'label' => 'ศูนย์ภาษาและวิเทศสัมพันธ์',
                            'url' => 'https://www.aru.ac.th/isc',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'ศูนย์บ่มเพาะวิสาหกิจ(ARUBI)',
                            'url' => 'https://www.aru.ac.th/ubi/',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'ศูนย์ฝึกปฏิบัติการวิชาชีพธุรกิจ อาคารสวนหลวง',
                            'url' => 'https://www.facebook.com/arusuanluang/',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'ศูนย์นวัตกรรมและดิจิทัลเพื่อการเรียนรู้',
                            'url' => 'https://www.aru.ac.th/idlc/',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'ศูนย์สหกิจศึกษา',
                            'url' => 'https://www.aru.ac.th/coop/',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'กองกลาง สำนักงานอธิการบดี',
                            'url' => 'https://www.aru.ac.th/central',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'กองบริการการศึกษา สำนักงานอธิการบดี',
                            'url' => 'https://www.aru.ac.th/regis/',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'กองนโยบายและแผน สำนักงานอธิการบดี',
                            'url' => 'https://www.aru.ac.th/plan/',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'กองพัฒนานักศึกษา สำนักงานอธิการบดี',
                            'url' => 'https://www.aru.ac.th/dsd/',
                            'new_tab' => true,
                        ],
                    ],
                ],

                /*
                |--------------------------------------------------------------------------
                | งาน / อื่น ๆ
                |--------------------------------------------------------------------------
                */
                [
                    'label' => 'งาน/อื่นๆ',

                    'children' => [
                        [
                            'label' => 'งานทรัพยากรบุคคล กองกลาง สำนักงานอธิการบดี',
                            'url' => 'https://www.aru.ac.th/staff/',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'งานพัสดุ กองกลาง สำนักงานอธิการบดี',
                            'url' => 'https://www.aru.ac.th/central/?page=supply',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'งานการเงินและบัญชี กองกลาง สำนักงานอธิการบดี',
                            'url' => 'https://www.aru.ac.th/finance/',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'งานบริการวิชาการและจัดหารายได้',
                            'url' => 'https://www.aru.ac.th/asig/',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'มหาวิทยาลัยสีเขียว (Green ARU)',
                            'url' => 'https://www.aru.ac.th/greenaru/',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'หน่วยตรวจสอบภายใน',
                            'url' => 'https://aru.ac.th/audit-web/',
                            'new_tab' => true,
                        ],
                    ],
                ],
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | สมัครเรียน
        |--------------------------------------------------------------------------
        */
        [
            'label' => 'รับสมัครนักศึกษา',
            'url' => 'https://www.aru.ac.th/enroll_aru/',
            'pattern' => 'admission*',
        ],

        /*
        |--------------------------------------------------------------------------
        | บริการมหาวิทยาลัย
        |
        | รวมเมนูเดิม:
        |   - สำหรับนักศึกษา
        |   - สำหรับบุคลากร
        |   - ผู้สำเร็จการศึกษา
        |--------------------------------------------------------------------------
        */
        [
            'label' => 'บริการมหาวิทยาลัย',
            'pattern' => 'services*',
            'layout' => 'grouped',

            'children' => [
                /*
                |--------------------------------------------------------------------------
                | สำหรับนักศึกษา
                |--------------------------------------------------------------------------
                */
                [
                    'label' => 'สำหรับนักศึกษา',

                    'children' => [
                        [
                            'label' => 'ปฏิทินการศึกษา',
                            'url' => 'https://www.aru.ac.th/regis/?page=tabs&subpage=tab_home2&cid=100&ctid=101',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'ระบบบริการนักศึกษา',
                            'url' => 'https://e-student.aru.ac.th',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'ระบบงานกิจกรรมนักศึกษา',
                            'url' => 'https://activity.aru.ac.th/th',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'บริการ email@aru.ac.th',
                            'url' => 'http://gmail.com',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'ตรวจสอบรายชื่อผู้สำเร็จการศึกษา',
                            'url' => 'https://www.aru.ac.th/regis/?page=graduate',
                            'new_tab' => true,
                        ],
                    ],
                ],

                /*
                |--------------------------------------------------------------------------
                | สำหรับบุคลากร
                |--------------------------------------------------------------------------
                */
                [
                    'label' => 'สำหรับบุคลากร',

                    'children' => [
                        [
                            'label' => 'ระบบบริหารการศึกษา',
                            'url' => 'http://e-uni.aru.ac.th',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'บริการ gmail@aru.ac.th',
                            'url' => 'https://gmail.com',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'ARU DIGITAL WORKFLOW',
                            'url' => 'https://edoc.aru.ac.th/',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'ระบบการลาออนไลน์',
                            'url' => 'https://edoc.aru.ac.th/',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'แบบฟอร์มบุคลากร',
                            'url' => 'https://www.aru.ac.th/staff/?page=hr&subpage=hr_form',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'เอกสารวิชาการ',
                            'url' => 'https://www.aru.ac.th/arit/index.php?pages=informationsystems',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'ระบบรายงานการลงพื้นที่',
                            'url' => 'https://apps.aru.ac.th/space/',
                            'new_tab' => true,
                        ],
                    ],
                ],

                /*
                |--------------------------------------------------------------------------
                | ผู้สำเร็จการศึกษา
                |--------------------------------------------------------------------------
                */
                [
                    'label' => 'ผู้สำเร็จการศึกษา',

                    'children' => [
                        [
                            'label' => 'ลงทะเบียนบัณฑิตปี ๒๕๖๗',
                            'url' => 'https://www.aru.ac.th/graduation/',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'สมาคมศิษย์เก่า มรภ.อย.',
                            'url' => 'https://www.aru.ac.th/alumni/',
                            'new_tab' => true,
                        ],
                    ],
                ],

                /*
                |--------------------------------------------------------------------------
                | ผู้สำเร็จการศึกษา
                |--------------------------------------------------------------------------
                */
                [
                    'label' => 'ผู้สำเร็จการศึกษา',

                    'children' => [
                        [
                            'label' => 'ลงทะเบียนบัณฑิตปี ๒๕๖๗',
                            'url' => 'https://www.aru.ac.th/graduation/',
                            'new_tab' => true,
                        ],

                        [
                            'label' => 'สมาคมศิษย์เก่า มรภ.อย.',
                            'url' => 'https://www.aru.ac.th/alumni/',
                            'new_tab' => true,
                        ],
                    ],
                ],
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | ITA
        |--------------------------------------------------------------------------
        */
        [
            'label' => 'ITA',
            'pattern' => 'ita*',
            'layout' => 'dropdown',

            'children' => [
                [
                    'label' => 'ITA',
                    'url' => 'https://www.aru.ac.th/ita-aru/',
                    'new_tab' => true,
                ],

                [
                    'label' => 'การเปิดเผยข้อมูลสาธารณะ',
                    'url' => 'https://www.aru.ac.th/ita-aru/itadata2569/',
                    'new_tab' => true,
                ],

                [
                    'label' => 'องค์กรคุณธรรม',
                    'url' => 'https://www.aru.ac.th/aru-virtue/',
                    'new_tab' => true,
                ],
            ],
        ],

        /*
        |--------------------------------------------------------------------------
        | ติดต่อเรา
        |--------------------------------------------------------------------------
        */
        [
            'label' => 'ติดต่อเรา',
            'url' => 'https://www.aru.ac.th/index.php/home/contact',
            'pattern' => 'contact*',
            'new_tab' => true,
        ],
    ];

@endphp



{{-- =============================================================
    Desktop Navigation
============================================================= --}}

<nav class="ml-auto hidden self-stretch lg:flex" aria-label="เมนูหลัก">

    <div class="flex h-full items-stretch">


        @foreach ($menus as $menu)

            @php

                $children = $menu['children'] ?? [];
                $hasChildren = count($children) > 0;

                $active = false;

                if (($menu['pattern'] ?? null) === '/') {
                    $active = request()->is('/');
                } elseif (!empty($menu['pattern'])) {
                    $active = request()->is($menu['pattern']);
                }

                $layout = $menu['layout'] ?? 'standard';

            @endphp



            {{-- =====================================================
                    Level 1: มี Mega Menu
                ====================================================== --}}

            @if ($hasChildren)
                <div x-data="{ open: false }" @mouseenter="open = true" @mouseleave="open = false" @focusin="open = true"
                    @focusout="
                            if (!$el.contains($event.relatedTarget)) {
                                open = false
                            }
                        "
                    @keydown.escape.window="open = false" @click.outside="open = false" @class([
                        'flex shrink-0 items-stretch',
                        'relative' => $layout === 'dropdown',
                        'static' => $layout !== 'dropdown',
                    ])>


                    <button type="button" @click="open = !open" :aria-expanded="open.toString()" aria-haspopup="true"
                        @class([
                            'flex h-full items-center justify-center whitespace-nowrap border-b-2 px-3 text-[13px] font-medium transition-colors duration-150 xl:px-4 xl:text-sm',
                        
                            'border-aru-primary text-aru-primary' => $active,
                        
                            'border-transparent text-aru-text hover:text-aru-primary' => !$active,
                        ])>

                        <span>
                            {{ $menu['label'] }}
                        </span>


                        <svg class="ml-1.5 h-3.5 w-3.5 shrink-0 transition-transform duration-200"
                            :class="{
                                'rotate-180': open
                            }"
                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">

                            <path fill-rule="evenodd"
                                d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 11.168l3.71-3.938a.75.75 0 1 1 1.08 1.04l-4.25 4.51a.75.75 0 0 1-1.08 0l-4.25-4.51a.75.75 0 0 1 .02-1.06Z"
                                clip-rule="evenodd" />

                        </svg>

                    </button>



                    {{-- =================================================
                            Mega Menu
                        ================================================== --}}

                    <div x-cloak x-show="open" x-transition:enter="transition ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-2"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-2" @class([
                            'absolute top-full z-50',
                            'right-0 w-80' => $layout === 'dropdown',
                            'left-0 right-0' => $layout !== 'dropdown',
                        ])>

                        <div class="pt-1">

                            <div
                                class="overflow-hidden
                                           rounded-b-2xl
                                           border border-slate-200
                                           bg-white
                                           text-aru-text
                                           shadow-2xl">


                                {{-- -------------------------------------
                                        Mega Menu Header
                                    -------------------------------------- --}}

                                @if ($layout !== 'dropdown')
                                    <div
                                        class="flex items-center justify-between
                                               border-b border-slate-200
                                               bg-slate-50
                                               px-6 py-4">

                                        <div>

                                            <div
                                                class="text-xs font-semibold
                                                       uppercase tracking-wider
                                                       text-aru-gold-dark">
                                                ARU NAVIGATION
                                            </div>


                                            <div
                                                class="mt-1 text-lg font-bold
                                                       text-aru-primary">
                                                {{ $menu['label'] }}
                                            </div>

                                        </div>


                                        <div class="hidden text-sm text-slate-500 xl:block">
                                            มหาวิทยาลัยราชภัฏพระนครศรีอยุธยา
                                        </div>

                                    </div>
                                @endif



                                {{-- -------------------------------------
                                        Grouped Mega Menu
                                        หน่วยงาน / บริการมหาวิทยาลัย
                                    -------------------------------------- --}}

                                @if ($layout === 'grouped')
                                    <div class="p-6">

                                        <div
                                            class="grid grid-cols-2
                                                       gap-x-8 gap-y-8
                                                       xl:grid-cols-4">

                                            @foreach ($children as $group)
                                                <section>

                                                    <h3
                                                        class="mb-3
                                                                   border-b border-slate-200
                                                                   pb-3
                                                                   text-sm font-bold
                                                                   text-aru-primary">
                                                        {{ $group['label'] }}
                                                    </h3>


                                                    <div class="space-y-1">

                                                        @foreach ($group['children'] ?? [] as $child)
                                                            <a href="{{ $child['url'] }}"
                                                                @if ($child['new_tab'] ?? false) target="_blank"
                                                                        rel="noopener noreferrer" @endif
                                                                class="group/item
                                                                           flex items-start gap-2
                                                                           rounded-lg
                                                                           px-3 py-2
                                                                           text-sm leading-6
                                                                           text-slate-600
                                                                           transition-colors
                                                                           duration-150
                                                                           hover:bg-aru-surface-soft
                                                                           hover:text-aru-primary">

                                                                <svg class="mt-[5px]
                                                                               h-3.5 w-3.5
                                                                               shrink-0
                                                                               text-slate-300
                                                                               transition
                                                                               group-hover/item:text-aru-gold-dark"
                                                                    viewBox="0 0 20 20" fill="currentColor"
                                                                    aria-hidden="true">

                                                                    <path fill-rule="evenodd"
                                                                        d="M7.21 14.77a.75.75 0 0 1 .02-1.06L11.168 10 7.23 6.29a.75.75 0 1 1 1.04-1.08l4.51 4.25a.75.75 0 0 1 0 1.08l-4.51 4.25a.75.75 0 0 1-1.06-.02Z"
                                                                        clip-rule="evenodd" />

                                                                </svg>


                                                                <span>
                                                                    {{ $child['label'] }}
                                                                </span>

                                                            </a>
                                                        @endforeach

                                                    </div>

                                                </section>
                                            @endforeach

                                        </div>

                                    </div>



                                    {{-- -------------------------------------
                                        Standard Mega Menu
                                        เกี่ยวกับมหาวิทยาลัย
                                    -------------------------------------- --}}
                                @else
                                    <div class="p-6">

                                        <div
                                            class="grid gap-3 {{ $layout === 'dropdown' ? 'grid-cols-1' : 'grid-cols-2 xl:grid-cols-3' }}">

                                            @foreach ($children as $child)
                                                @php
                                                    $subChildren = $child['children'] ?? [];
                                                    $hasSubChildren = count($subChildren) > 0;
                                                @endphp


                                                @if ($hasSubChildren)
                                                    <section
                                                        class="rounded-xl
                                                                   border border-slate-200
                                                                   bg-slate-50
                                                                   p-4">

                                                        <h3
                                                            class="mb-3
                                                                       text-sm font-bold
                                                                       text-aru-primary">
                                                            {{ $child['label'] }}
                                                        </h3>


                                                        <div class="space-y-1">

                                                            @foreach ($subChildren as $subChild)
                                                                <a href="{{ $subChild['url'] }}"
                                                                    @if ($subChild['new_tab'] ?? false) target="_blank"
                                                                            rel="noopener noreferrer" @endif
                                                                    class="flex items-start gap-2
                                                                               rounded-lg
                                                                               px-3 py-2
                                                                               text-sm leading-6
                                                                               text-slate-600
                                                                               transition
                                                                               hover:bg-white
                                                                               hover:text-aru-primary">

                                                                    <svg class="mt-[5px]
                                                                                   h-3.5 w-3.5
                                                                                   shrink-0
                                                                                   text-aru-gold-dark"
                                                                        viewBox="0 0 20 20" fill="currentColor"
                                                                        aria-hidden="true">

                                                                        <path fill-rule="evenodd"
                                                                            d="M7.21 14.77a.75.75 0 0 1 .02-1.06L11.168 10 7.23 6.29a.75.75 0 1 1 1.04-1.08l4.51 4.25a.75.75 0 0 1 0 1.08l-4.51 4.25a.75.75 0 0 1-1.06-.02Z"
                                                                            clip-rule="evenodd" />

                                                                    </svg>


                                                                    <span>
                                                                        {{ $subChild['label'] }}
                                                                    </span>

                                                                </a>
                                                            @endforeach

                                                        </div>

                                                    </section>
                                                @else
                                                    <a href="{{ $child['url'] }}"
                                                        @if ($child['new_tab'] ?? false) target="_blank"
                                                                rel="noopener noreferrer" @endif
                                                        class="group/item
                                                                   flex min-h-14
                                                                   items-center gap-3
                                                                   rounded-xl
                                                                   border border-slate-200
                                                                   bg-white
                                                                   px-4 py-3
                                                                   text-sm
                                                                   font-medium
                                                                   leading-6
                                                                   text-slate-700
                                                                   transition
                                                                   hover:border-aru-gold
                                                                   hover:bg-aru-surface-soft
                                                                   hover:text-aru-primary">

                                                        <span
                                                            class="flex h-8 w-8
                                                                       shrink-0
                                                                       items-center
                                                                       justify-center
                                                                       rounded-lg
                                                                       bg-aru-primary/5
                                                                       text-aru-primary
                                                                       transition
                                                                       group-hover/item:bg-aru-primary
                                                                       group-hover/item:text-white">

                                                            <svg class="h-4 w-4" viewBox="0 0 20 20" fill="currentColor"
                                                                aria-hidden="true">

                                                                <path fill-rule="evenodd"
                                                                    d="M7.21 14.77a.75.75 0 0 1 .02-1.06L11.168 10 7.23 6.29a.75.75 0 1 1 1.04-1.08l4.51 4.25a.75.75 0 0 1 0 1.08l-4.51 4.25a.75.75 0 0 1-1.06-.02Z"
                                                                    clip-rule="evenodd" />

                                                            </svg>

                                                        </span>


                                                        <span>
                                                            {{ $child['label'] }}
                                                        </span>

                                                    </a>
                                                @endif
                                            @endforeach

                                        </div>

                                    </div>
                                @endif


                            </div>

                        </div>

                    </div>

                </div>



                {{-- =====================================================
                    Level 1: Link ปกติ
                ====================================================== --}}
            @else
                <a href="{{ $menu['url'] }}"
                    @if ($menu['new_tab'] ?? false) target="_blank"
                            rel="noopener noreferrer" @endif
                    @class([
                        'flex h-full shrink-0 items-center justify-center whitespace-nowrap border-b-2 px-3 text-[13px] font-medium transition-colors duration-150 xl:px-4 xl:text-sm',
                    
                        'border-aru-primary text-aru-primary' => $active,
                    
                        'border-transparent text-aru-text hover:text-aru-primary' => !$active,
                    ]) @if ($active) aria-current="page" @endif>

                    {{ $menu['label'] }}

                </a>
            @endif


        @endforeach


    </div>

</nav>





{{-- =============================================================
    Mobile Navigation
============================================================= --}}

<nav id="mobile-navigation" x-cloak x-show="mobileMenuOpen" x-transition:enter="transition ease-out duration-200"
    x-transition:enter-start="-translate-y-2 opacity-0" x-transition:enter-end="translate-y-0 opacity-100"
    x-transition:leave="transition ease-in duration-150" x-transition:leave-start="translate-y-0 opacity-100"
    x-transition:leave-end="-translate-y-2 opacity-0" @click.outside="mobileMenuOpen = false"
    class="absolute left-0 right-0 top-full z-50
           border-b border-slate-200
           bg-white
           shadow-lg
           lg:hidden"
    aria-label="เมนูมือถือ">

    <div x-data="{ openMenu: null }"
        class="webaru-container
               max-h-[calc(100vh-90px)]
               overflow-y-auto
               py-4">


        {{-- =========================================================
            Main Menu
        ========================================================== --}}

        <div class="space-y-1">


            @foreach ($menus as $menu)
                @php

                    $children = $menu['children'] ?? [];
                    $hasChildren = count($children) > 0;

                    $active = false;

                    if (($menu['pattern'] ?? null) === '/') {
                        $active = request()->is('/');
                    } elseif (!empty($menu['pattern'])) {
                        $active = request()->is($menu['pattern']);
                    }

                    $menuKey = 'menu-' . $loop->index;

                @endphp



                {{-- =================================================
                    Level 1 มี Children
                ================================================== --}}

                @if ($hasChildren)
                    <div class="rounded-xl">

                        <button type="button"
                            @click="
                                openMenu =
                                    openMenu === '{{ $menuKey }}'
                                        ? null
                                        : '{{ $menuKey }}'
                            "
                            :aria-expanded="(openMenu === '{{ $menuKey }}').toString()"
                            @class([
                                'flex w-full items-center justify-between gap-3 rounded-xl px-4 py-3 text-left text-sm transition-colors duration-150 hover:bg-aru-surface-soft hover:text-aru-primary',
                            
                                'bg-aru-primary/10
                                                                                                                     font-semibold
                                                                                                                     text-aru-primary' => $active,
                            
                                'text-slate-700' => !$active,
                            ])>

                            <span>
                                {{ $menu['label'] }}
                            </span>


                            <svg class="h-4 w-4
                                       shrink-0
                                       transition-transform
                                       duration-200"
                                :class="{
                                    'rotate-180': openMenu === '{{ $menuKey }}'
                                }"
                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">

                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 11.168l3.71-3.938a.75.75 0 1 1 1.08 1.04l-4.25 4.51a.75.75 0 0 1-1.08 0l-4.25-4.51a.75.75 0 0 1 .02-1.06Z"
                                    clip-rule="evenodd" />

                            </svg>

                        </button>



                        {{-- =========================================
                            Level 2
                        ========================================== --}}

                        <div x-cloak
                            x-show="
                                openMenu === '{{ $menuKey }}'
                            "
                            x-transition:enter="transition ease-out duration-200"
                            x-transition:enter-start="opacity-0 -translate-y-1"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-150"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 -translate-y-1" class="mt-2 space-y-2 pl-3">


                            @foreach ($children as $child)
                                @php

                                    $subChildren = $child['children'] ?? [];
                                    $hasSubChildren = count($subChildren) > 0;

                                @endphp



                                {{-- =================================
                                    Level 2 มี Level 3
                                ================================== --}}

                                @if ($hasSubChildren)
                                    <div x-data="{ subOpen: false }"
                                        class="overflow-hidden
                                               rounded-xl
                                               border border-slate-200
                                               bg-slate-50">

                                        <button type="button" @click="subOpen = !subOpen"
                                            :aria-expanded="subOpen.toString()"
                                            class="flex w-full
                                                   items-center
                                                   justify-between
                                                   gap-3
                                                   px-4 py-3
                                                   text-left
                                                   text-sm
                                                   font-semibold
                                                   text-slate-700
                                                   transition
                                                   hover:bg-slate-100
                                                   hover:text-aru-primary">

                                            <span>
                                                {{ $child['label'] }}
                                            </span>


                                            <svg class="h-4 w-4
                                                       shrink-0
                                                       text-slate-400
                                                       transition-transform
                                                       duration-200"
                                                :class="{
                                                    'rotate-180': subOpen
                                                }"
                                                viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">

                                                <path fill-rule="evenodd"
                                                    d="M5.23 7.21a.75.75 0 0 1 1.06.02L10 11.168l3.71-3.938a.75.75 0 1 1 1.08 1.04l-4.25 4.51a.75.75 0 0 1-1.08 0l-4.25-4.51a.75.75 0 0 1 .02-1.06Z"
                                                    clip-rule="evenodd" />

                                            </svg>

                                        </button>



                                        {{-- Level 3 --}}
                                        <div x-cloak x-show="subOpen" x-transition
                                            class="border-t
                                                   border-slate-200
                                                   bg-white
                                                   p-2">

                                            <div class="space-y-1">

                                                @foreach ($subChildren as $subChild)
                                                    <a href="{{ $subChild['url'] }}"
                                                        @if ($subChild['new_tab'] ?? false) target="_blank"
                                                            rel="noopener noreferrer" @endif
                                                        @click="mobileMenuOpen = false"
                                                        class="flex
                                                               items-start
                                                               gap-2
                                                               rounded-lg
                                                               px-3 py-2.5
                                                               text-sm
                                                               leading-6
                                                               text-slate-600
                                                               transition
                                                               hover:bg-aru-surface-soft
                                                               hover:text-aru-primary">

                                                        <svg class="mt-[5px]
                                                                   h-3.5 w-3.5
                                                                   shrink-0
                                                                   text-aru-gold-dark"
                                                            viewBox="0 0 20 20" fill="currentColor"
                                                            aria-hidden="true">

                                                            <path fill-rule="evenodd"
                                                                d="M7.21 14.77a.75.75 0 0 1 .02-1.06L11.168 10 7.23 6.29a.75.75 0 1 1 1.04-1.08l4.51 4.25a.75.75 0 0 1 0 1.08l-4.51 4.25a.75.75 0 0 1-1.06-.02Z"
                                                                clip-rule="evenodd" />

                                                        </svg>


                                                        <span>
                                                            {{ $subChild['label'] }}
                                                        </span>

                                                    </a>
                                                @endforeach

                                            </div>

                                        </div>

                                    </div>



                                    {{-- =================================
                                    Level 2 Link ปกติ
                                ================================== --}}
                                @else
                                    <a href="{{ $child['url'] }}"
                                        @if ($child['new_tab'] ?? false) target="_blank"
                                            rel="noopener noreferrer" @endif
                                        @click="mobileMenuOpen = false"
                                        class="flex
                                               items-start
                                               gap-2
                                               rounded-xl
                                               border border-slate-200
                                               bg-white
                                               px-4 py-3
                                               text-sm
                                               leading-6
                                               text-slate-600
                                               transition
                                               hover:border-aru-gold
                                               hover:bg-aru-surface-soft
                                               hover:text-aru-primary">

                                        <svg class="mt-[5px]
                                                   h-3.5 w-3.5
                                                   shrink-0
                                                   text-aru-gold-dark"
                                            viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">

                                            <path fill-rule="evenodd"
                                                d="M7.21 14.77a.75.75 0 0 1 .02-1.06L11.168 10 7.23 6.29a.75.75 0 1 1 1.04-1.08l4.51 4.25a.75.75 0 0 1 0 1.08l-4.51 4.25a.75.75 0 0 1-1.06-.02Z"
                                                clip-rule="evenodd" />

                                        </svg>


                                        <span>
                                            {{ $child['label'] }}
                                        </span>

                                    </a>
                                @endif
                            @endforeach


                        </div>

                    </div>



                    {{-- =================================================
                    Level 1 Link ปกติ
                ================================================== --}}
                @else
                    <a href="{{ $menu['url'] }}"
                        @if ($menu['new_tab'] ?? false) target="_blank"
                            rel="noopener noreferrer" @endif
                        @click="mobileMenuOpen = false" @class([
                            'flex w-full items-center rounded-xl px-4 py-3 text-sm transition-colors duration-150 hover:bg-aru-surface-soft hover:text-aru-primary',
                        
                            'bg-aru-primary/10
                                                                                                     font-semibold
                                                                                                     text-aru-primary' => $active,
                        
                            'text-slate-700' => !$active,
                        ])
                        @if ($active) aria-current="page" @endif>

                        {{ $menu['label'] }}

                    </a>
                @endif
            @endforeach


        </div>



        {{-- =========================================================
            Language
        ========================================================== --}}

        <div
            class="mt-5
                   flex items-center
                   justify-between
                   border-t border-slate-200
                   pt-4">

            <span class="text-sm text-slate-500">
                ภาษา
            </span>


            <div class="flex items-center gap-2">

                <a href="#"
                    class="rounded-lg
                           bg-aru-primary
                           px-3 py-2
                           text-xs font-semibold
                           text-white">
                    TH
                </a>


                <a href="#"
                    class="rounded-lg
                           border border-slate-200
                           px-3 py-2
                           text-xs font-semibold
                           text-slate-600
                           transition
                           hover:border-aru-primary
                           hover:text-aru-primary">
                    EN
                </a>

            </div>

        </div>



        {{-- =========================================================
            Mobile Call To Action
        ========================================================== --}}

        <a href="https://www.aru.ac.th/enroll_aru/"
            class="mt-5
                   flex w-full
                   items-center
                   justify-center
                   rounded-xl
                   bg-aru-primary
                   px-4 py-3
                   text-sm font-semibold
                   text-white
                   transition
                   hover:bg-aru-primary-dark">
            สมัครเรียน
        </a>


    </div>

</nav>
