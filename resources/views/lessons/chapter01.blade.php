<!DOCTYPE html>
<html lang="th">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ARU Design System</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-50 text-gray-900">

    <section class="py-16">

        <div class="mx-auto max-w-7xl px-4">

            {{-- Section Header --}}

            <div class="mb-8">

                <p class="text-sm font-semibold uppercase tracking-wide text-aru-primary">
                    ARU News
                </p>

                <h2 class="mt-2 text-3xl font-bold">
                    ข่าวประชาสัมพันธ์
                </h2>

                <p class="mt-3 text-gray-600">
                    ข่าวสารและประกาศจากมหาวิทยาลัยราชภัฏพระนครศรีอยุธยา
                </p>

            </div>


            {{-- News Grid --}}

            <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3">

                <article class="overflow-hidden rounded-2xl bg-white shadow-sm">

                    <div class="h-48 bg-gray-200"></div>

                    <div class="p-6">

                        <p class="text-sm text-gray-500">
                            11 สิงหาคม 2569
                        </p>

                        <h3 class="mt-2 text-xl font-semibold">
                            ข่าวประชาสัมพันธ์มหาวิทยาลัย
                        </h3>

                        <p class="mt-3 text-gray-600">
                            รายละเอียดข่าวประชาสัมพันธ์ของมหาวิทยาลัย
                        </p>

                        <a href="#" class="mt-5 inline-block font-semibold text-aru-primary">
                            อ่านเพิ่มเติม →
                        </a>

                    </div>

                </article>


                <article class="overflow-hidden rounded-2xl bg-white shadow-sm">

                    <div class="h-48 bg-gray-200"></div>

                    <div class="p-6">

                        <p class="text-sm text-gray-500">
                            11 สิงหาคม 2569
                        </p>

                        <h3 class="mt-2 text-xl font-semibold">
                            กิจกรรมมหาวิทยาลัย
                        </h3>

                        <p class="mt-3 text-gray-600">
                            ข่าวกิจกรรมและโครงการต่าง ๆ ของมหาวิทยาลัย
                        </p>

                    </div>

                </article>


                <article class="overflow-hidden rounded-2xl bg-white shadow-sm">

                    <div class="h-48 bg-gray-200"></div>

                    <div class="p-6">

                        <p class="text-sm text-gray-500">
                            11 สิงหาคม 2569
                        </p>

                        <h3 class="mt-2 text-xl font-semibold">
                            ประกาศมหาวิทยาลัย
                        </h3>

                        <p class="mt-3 text-gray-600">
                            ประกาศและข้อมูลสำคัญสำหรับนักศึกษาและบุคลากร
                        </p>

                    </div>

                </article>

            </div>

        </div>

    </section>

</body>

</html>
