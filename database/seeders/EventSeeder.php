<?php

namespace Database\Seeders;

use App\Models\Event;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Event::insert([
            'event_name'  => 'Thriving in The Midst of Digital Disruption',
            'category_id' => 1,
            'event_place' => 'Zoom Meetings',
            'event_date'  => 'Monday, 12 June 2023',
            'event_time'  => '14.00 - 16.00 GMT+7',
            'event_organizer' => 'Digital Business program BINUS @ Semarang',
            'event_desc'  => 'Kalo kamu penasaran dan senang mencari tahu tentang disrupsi digital, jangan lupa join acara program Digital Business BINUS @ Semarang ini:
            THRIVING IN THE MIDST OF DIGITAL DISRUPTION dengan pembicara, E. KURNIAWAN (Vice President Marketing Management PT Telkom Indonesia) dimoderatori oleh Dian Martha Nurrul Amanah, Faculty member of Digital Business program BINUS @ Semarang',
            'event_benefit'  => 'SAT Points, E-sertificate.',
            'event_capacity' => 120,
            'event_image' => 'assets/poster_event/tech6.png'
        ]);

        Event::insert([
            'event_name'  => 'Amazon Web Service: Jadi Cloud Computing Specialist yang Tersertifikasi',
            'category_id' => 1,
            'event_place' => 'Zoom Meetings',
            'event_date'  => 'Friday, 14 July 2023',
            'event_time'  => '18.00 - 21.00 GMT+7',
            'event_organizer' => 'BINUS CENTER',
            'event_desc'  => 'Cloud Computing adalah layanan penggunaan sumber daya IT sesuai permintaan melalui internet, dengan harga sesuai pemakaian. Dibanding membeli, serta mengelola pusat data dan server fisik, Anda dapat mengakses layanan teknologi, seperti penyimpanan, sesuai kebutuhan dari penyedia cloud seperti Amazon Web Services (AWS).
            Amazon Web Services (AWS) adalah platform cloud paling komprehensif dan digunakan secara luas di dunia. Jutaan pelanggan menggunakan AWS untuk memangkas biaya, menjadi lebih sigap, dan berinovasi lebih cepat.
            Saat ini BINUS Center menjadi salah satu AWS Academy yang menyediakan program pelatihan Cloud Computing untuk mempersiapkan menjadi seorang Cloud Computing Specialist yang tersertifikasi.',
            'event_benefit'  => 'BINUS CENTER sebagai AWS AUTHORIZED partner, instruktur yang TERSERTIFIKASI & BERPENGALAMAN, dan berpeluang untuk mengikuti proses MAGANG & PENEMPATAN KERJA.',
            'event_capacity' => 400,
            'event_image' => 'assets/poster_event/tech1.png'
        ]);

        Event::insert([
            'event_name'  => 'Techno Conference: Navigate Digital Changes to Expand Future Opportunities',
            'category_id' => 1,
            'event_place' => 'Auditorium Binus Anggrek 4th Floor',
            'event_date'  => 'Wednesday, 26 July 2023',
            'event_time'  => '09.20 - 15.20 GMT+7',
            'event_organizer' => 'BNCC',
            'event_desc'  => 'TechnoScape kembali hadir dengan rangkaian acara termasuk Techno Conference bertemakan “Navigate Digital Changes to Expand Future Opportunities” pada tanggal 12-13 Juni 2023 di Auditorium Lt.4 BINUS Anggrek. Techno Conference adalah rangkaian seminar dan talkshow dengan topik seputar teknologi, desain, dan bisnis.
            Event ini 100% GRATIS! We can not wait to see you there! Reserve your spot now!',
            'event_benefit'  => 'E-Certificate, SAT Points, Merchandise',
            'event_capacity' => 500,
            'event_image' => 'assets/poster_event/tech2.jpg'
        ]);

        Event::insert([
            'event_name'  => 'Scientific Writing: Workshops and Tips & Tricks',
            'category_id' => 1,
            'event_place' => 'Aula B0201-03 (Kampus Alsut)',
            'event_date'  => 'Saturday, 29 July 2023',
            'event_time'  => '13.20 - 15.00 GMT+7',
            'event_organizer' => 'Computer Science Program',
            'event_desc'  => 'Publikasi ilmiah merupakan bagian penting dari dunia akademik, riset, industri, dan banyak aspek kehidupan lainnya karena berguna dalam berbagi pengetahuan, pengembangan teknologi, peningkatan kualitas kehidupan, dan banyak hal lainnya. School of Computer Science BINUS University akan mengadakan seminar "Workshop Tips Penulisan Publikasi Ilmiah" secara hybrid. Kegiatan ini bersifat full onsite bagi mahasiswa kampus Alsut, dan online untuk mahasiswa kampus Kemanggisan. (WAJIB untuk mahasiswa semester 4)',
            'event_benefit'  => 'E-Certificate, SAT Points',
            'event_capacity' => 400,
            'event_image' => 'assets/poster_event/tech3.png'
        ]);

        Event::insert([
            'event_name'  => 'Introduction to Data Engineering and Big Data',
            'category_id' => 1,
            'event_place' => 'Zoom Meetings',
            'event_date'  => 'Monday, 10 July 2023',
            'event_time'  => '15.20 - 17.00 GMT+7',
            'event_organizer' => 'School of Computer Science BINUS University',
            'event_desc'  => 'Teknologi Big Data menyediakan kemampuan komputasi dan pengolahan data yang handal dan terjangkau. Hal ini membuka kemungkinan yang sangat luas bagi penerapan dan pengembangan berbagai metode pengolahan data. Big Data Engineering menjadi hal yang terpenting dalam proses perjalanan data. 60% dari keseluruhan proses dari hulu ke hilir dalam pengolahan data berada di proses data engineering. Ayo cari tahu lebih tentang data engineering melalui sesi ini! Jangan Kelewatan, daftar sekarang!',
            'event_benefit'  => 'SAT Points',
            'event_capacity' => 400,
            'event_image' => 'assets/poster_event/tech4.jpeg'
        ]);

        Event::insert([
            'event_name'  => 'Deep Learning for Computer Vision',
            'category_id' => 1,
            'event_place' => 'Zoom Meetings',
            'event_date'  => 'Thursday, 27 July 2023',
            'event_time'  => '11.00 - 12.30 GMT+7',
            'event_organizer' => 'School of Computer Science BINUS University',
            'event_desc'  => 'Temukan kekuatan Deep Learning dan jelajahi dunia yang menarik dari Computer Vision. Dapatkan wawasan berharga tentang teknik terbaru dan kemajuan dalam pengenalan gambar, deteksi objek, dan lainnya. Jangan lewatkan kesempatan ini untuk memperluas pengetahuanmu dan menjelajahi dunia Deep Learning untuk Computer Vision',
            'event_capacity' => 400,
            'event_benefit'  => 'SAT Points',
            'event_image' => 'assets/poster_event/tech5.png'
        ]);

        Event::insert([
            'event_name'  => 'Basic Stata for Publication',
            'category_id' => 2,
            'event_place' => 'Zoom Meetings',
            'event_date'  => 'Friday, 7 July 2023',
            'event_time'  => '13.30 - 15.30 GMT+7',
            'event_organizer' => 'BINUS UNIVERSITY BUSINESS SCHOOL',
            'event_desc'  => 'Management Laboratory proudly presents Webinar Basic Stata for Publication. Management Laboratory proudly presents Webinar Basic Stata for Publication. Kegiatan ini dilakukan untuk memberikan wawasan kepada mahasiswa tentang salah satu alat analisis data yang baik untuk dipakai, yaitu Stata.STATA menawarkan fitur analisis yang sangat komprehensif untuk kepentingan analisis dan research/publikasi. Dengan adanya acara ini diharapkan mahasiswa memiliki kebebasan untuk memilih alat analisis data.',
            'event_capacity' => 300,
            'event_benefit'  => 'Skills&Knowledge, SAT Points, E-Certificate',
            'event_image' => 'assets/poster_event/business6.jpg'
        ]);

        Event::insert([
            'event_name'  => 'Tips membuat CV & Tips menghadapi Interview',
            'category_id' => 2,
            'event_place' => 'Zoom Meetings',
            'event_date'  => 'Friday, 7 July 2023',
            'event_time'  => '13.30 - 15.00 GMT+7',
            'event_organizer' => 'BINUS UNIVERSITY ALUMNI RELATION OFFICE',
            'event_desc'  => '"Hi Binusian, mau tahu bagaimana cara membuat CV agar terlihat bagus dan menarik dimata HR?
            Dan apa sajakah tips & trik untuk menghadapi interview? Kalau mau tahu dan penasaran, yuk ikutan Bimbingan Karir ini! *Kegiatan ini gratis ya! Segera gabung yuk, Dont miss it!',
            'event_capacity' => 600,
            'event_benefit'  => 'Skills&Knowledge, SAT Points, E-Certificate',
            'event_image' => 'assets/poster_event/business7.jpg'
        ]);

        Event::insert([
            'event_name'  => 'INVEST 101: Session 2: Money Management for Future Investor',
            'category_id' => 2,
            'event_place' => 'Zoom Meetings',
            'event_date'  => 'Wednesday, 26 July 2023',
            'event_time'  => '13.30 - 15.00 GMT+7',
            'event_organizer' => 'BNFC X FINANSIALKU',
            'event_desc'  => 'Hi BINUSIAN! Mau ningkatin skill dalam mengelola keuangan?? Ikut event Money Management for Future Investor ajaa! Bina Nusantara Finance Club proudly present FREE WEBINAR about finance and investing.
            Dont miss this opportunity, cause we have a professional speakers in their field!!
            Pembicara: Shierly, CFP®️ Financial Planner Finansialku
            Untuk informasi lebih lanjut dapat menghubungi:
            Ha Na Kang (0821 1141 4488)',
            'event_capacity' => 400,
            'event_benefit'  => 'Skills&Knowledge, SAT Points, E-Certificate',
            'event_image' => 'assets/poster_event/business8.png'
        ]);

        Event::insert([
            'event_name'  => 'Garuda Indonesia Turnaround Strategy Against Turbulance',
            'category_id' => 2,
            'event_place' => 'Zoom Meetings',
            'event_date'  => 'Wednesday, 12 July 2023',
            'event_time'  => '18.00 - 21.00 GMT+7',
            'event_organizer' => 'BINUS Business School Undergradute Program',
            'event_desc'  => '"Maskapai penerbangan kebanggaan Indonesia, PT Garuda Indonesia (Persero) Tbk nyaris bangkrut akibat terlilit hutang senilai 140 triliun rupiah. Lolos dari kepailitan, apa saja manuver yang dilakukan oleh Garuda Indonesia? Yuk kita gali strateginya di acara CEO SPEAKS ON LEADERSHIP WITH GARUDA INDONESIA yang menghadirkan Bapak Irfan Setiaputra (President & CEO PT Garuda Indonesia (Persero) Tbk)"',
            'event_capacity' => 250,
            'event_benefit'  => 'SAT Points, E-Certificate',
            'event_image' => 'assets/poster_event/business6.png'
        ]);

        Event::insert([
            'event_name'  => 'International Hybrid Seminar - The Evolving Role of Universities: Rising Up To The Global Sustainability Challenge',
            'category_id' => 2,
            'event_place' => 'Zoom Meetings',
            'event_date'  => 'Monday, 17 July 2023',
            'event_time'  => '14.00 - 16.00 GMT+7',
            'event_organizer' => 'BINUS Business School Undergradute Program',
            'event_capacity' => 400,
            'event_desc'  => 'BINUS Business School Undergradute Program proudly present International Hybrid Seminar with Eelco van Der Enden, the Chief Executive Officer of Global Reporting Initiative.
            This international webinar focuses primarily on raising awareness and encouraging sustainable practices, particularly in the education sector. The webinar aims to bring together academics, professionals, and students to explore innovative ideas for preparing the next generation to overcome sustainability-related environmental challenges.',
            'event_benefit'  => 'SAT Points, E-Certificate',
            'event_image' => 'https://bbs.binus.ac.id/management/wp-content/uploads/sites/5/2023/06/WhatsApp-Image-2023-06-08-at-14.56.40.jpg'
        ]);
    }
}
