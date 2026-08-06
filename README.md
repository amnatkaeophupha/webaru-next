# Webaru Next

Webaru Next คือเว็บแอปพลิเคชันที่พัฒนาด้วย Laravel ปัจจุบันโครงการอยู่ในระยะเริ่มต้น โดยได้จัดเตรียมโครงสร้างพื้นฐานสำหรับการพัฒนาฟีเจอร์ทางธุรกิจในลำดับถัดไป

> **สถานะโครงการ:** อยู่ระหว่างการพัฒนา ยังไม่มี API สาธารณะหรือฟีเจอร์ทางธุรกิจที่พร้อมใช้งานจริง

## เทคโนโลยีที่ใช้

- PHP 8.3 ขึ้นไป
- Laravel 13
- MySQL
- Pest 5
- Tailwind CSS 4
- Vite 8
- Laravel Sail

## ความต้องการของระบบ

ก่อนติดตั้ง โปรดตรวจสอบว่าเครื่องมีเครื่องมือต่อไปนี้:

- PHP 8.3 ขึ้นไป
- Composer
- Node.js และ npm
- MySQL หรือฐานข้อมูลอื่นที่ Laravel รองรับ
- PHP extensions ที่ Laravel ต้องใช้

สามารถเลือกใช้งานผ่าน Docker ด้วย Laravel Sail ได้เช่นกัน

## การติดตั้ง

โคลน repository และเข้าสู่โฟลเดอร์โครงการ:

```bash
git clone https://github.com/amnatkaeophupha/webaru-next.git
cd webaru-next
```

ติดตั้งและตั้งค่าโครงการด้วยคำสั่ง:

```bash
composer run setup
```

คำสั่งดังกล่าวจะดำเนินการต่อไปนี้:

1. ติดตั้ง PHP dependencies
2. สร้างไฟล์ `.env` จาก `.env.example`
3. สร้าง application key
4. รัน database migrations
5. ติดตั้ง frontend dependencies
6. build frontend assets

ตรวจสอบค่าการเชื่อมต่อฐานข้อมูลใน `.env` ก่อนรัน migration กับฐานข้อมูลที่ใช้งานร่วมกับผู้อื่น

## การพัฒนา

เริ่ม application server, queue worker, log viewer และ Vite development server พร้อมกัน:

```bash
composer run dev
```

จากนั้นเปิดแอปพลิเคชันที่:

```text
http://localhost:8000
```

ตรวจสอบสถานะของแอปพลิเคชันได้ที่:

```text
http://localhost:8000/up
```

## การทดสอบ

รันชุดทดสอบทั้งหมด:

```bash
composer test
```

หรือรัน Pest โดยตรง:

```bash
php artisan test --compact
```

## การจัดรูปแบบโค้ด

จัดรูปแบบไฟล์ PHP ด้วย Laravel Pint:

```bash
vendor/bin/pint --format agent
```

## การพัฒนา Frontend

เริ่ม Vite development server:

```bash
npm run dev
```

สร้าง production build:

```bash
npm run build
```

## โครงสร้างโครงการ

```text
app/                โค้ดหลักของแอปพลิเคชัน
bootstrap/          การเริ่มต้น framework และการตั้งค่า middleware
config/             ไฟล์กำหนดค่าของแอปพลิเคชัน
database/           migrations, factories และ seeders
resources/          Blade views, JavaScript และ CSS
routes/             เส้นทางสำหรับ web และ console
tests/              ชุดทดสอบ Feature และ Unit ด้วย Pest
```

## สิ่งที่มีในปัจจุบัน

- โครงสร้างพื้นฐานของ Laravel
- User model และฐานข้อมูลเริ่มต้น
- ระบบ cache, queue และ session ผ่านฐานข้อมูล
- Health-check endpoint
- สภาพแวดล้อมสำหรับทดสอบด้วย Pest
- Tailwind CSS และ Vite

ระบบ authentication, authorization, โมดูลทางธุรกิจ และ API จะได้รับการบันทึกในเอกสารเมื่อพัฒนาแล้ว

## รายการตรวจสอบก่อนนำขึ้น Production

- กำหนด `APP_ENV=production`
- กำหนด `APP_DEBUG=false`
- ตั้งค่า `APP_URL` และการเชื่อมต่อฐานข้อมูลให้ถูกต้อง
- ตั้งค่า cache, queue, session, mail และ logging
- รัน database migrations
- build frontend assets
- cache configuration และ routes
- เปิด queue worker แบบถาวร
- รันชุดทดสอบทั้งหมด
- เก็บ secrets นอกระบบ version control

## ความปลอดภัย

หากพบช่องโหว่ด้านความปลอดภัย โปรดอย่าเปิดเผยผ่าน public issue และให้ติดต่อผู้ดูแลโครงการเป็นการส่วนตัว

## สัญญาอนุญาต

โครงการนี้ยังไม่ได้ระบุสัญญาอนุญาตอย่างเป็นทางการ
