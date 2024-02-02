<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PertanyaanJawabanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'pertanyaan' => 'Apa kepanjangan dari URL?',
                'jawabans' => [
                    ['jawaban' => 'Universal Resource Locator', 'is_true' => false],
                    ['jawaban' => 'Uniform Resource Locator', 'is_true' => true],
                    ['jawaban' => 'Ultimate Resource Locator', 'is_true' => false],
                    ['jawaban' => 'Unique Resource Locator', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa fungsi dari mouse pada komputer?',
                'jawabans' => [
                    ['jawaban' => 'Mengetik teks', 'is_true' => false],
                    ['jawaban' => 'Memasukkan data', 'is_true' => false],
                    ['jawaban' => 'Menggerakkan kursor', 'is_true' => true],
                    ['jawaban' => 'Menampilkan gambar', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Yang termasuk ke dalam perangkat keras eksternal adalah...',
                'jawabans' => [
                    ['jawaban' => 'RAM', 'is_true' => false],
                    ['jawaban' => 'Hard disk', 'is_true' => false],
                    ['jawaban' => 'Monitor', 'is_true' => false],
                    ['jawaban' => 'Flash drive', 'is_true' => true],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu GUI?',
                'jawabans' => [
                    ['jawaban' => 'General User Interface', 'is_true' => false],
                    ['jawaban' => 'Graphic User Instrument', 'is_true' => false],
                    ['jawaban' => 'Guided User Interaction', 'is_true' => false],
                    ['jawaban' => 'Graphic User Interface', 'is_true' => true],
                ],
            ],
            [
                'pertanyaan' => 'Sistem operasi yang dikembangkan oleh Apple adalah...',
                'jawabans' => [
                    ['jawaban' => 'Windows', 'is_true' => false],
                    ['jawaban' => 'MacOS', 'is_true' => true],
                    ['jawaban' => 'Linux', 'is_true' => false],
                    ['jawaban' => 'Android', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Fungsi utama dari perangkat keras input scanner adalah...',
                'jawabans' => [
                    ['jawaban' => 'Mengeluarkan suara', 'is_true' => false],
                    ['jawaban' => 'Menyimpan data', 'is_true' => false],
                    ['jawaban' => 'Memproses data grafis', 'is_true' => true],
                    ['jawaban' => 'Mengontrol pointer pada layar', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Sistem bilangan yang menggunakan angka 0-15 disebut...',
                'jawabans' => [
                    ['jawaban' => 'Sistem bilangan desimal', 'is_true' => false],
                    ['jawaban' => 'Sistem bilangan biner', 'is_true' => false],
                    ['jawaban' => 'Sistem bilangan oktal', 'is_true' => false],
                    ['jawaban' => 'Sistem bilangan heksadesimal', 'is_true' => true],
                ],
            ],
            [
                'pertanyaan' => 'Protokol komunikasi yang digunakan untuk pengiriman email adalah...',
                'jawabans' => [
                    ['jawaban' => 'FTP', 'is_true' => false],
                    ['jawaban' => 'SMTP', 'is_true' => true],
                    ['jawaban' => 'HTTP', 'is_true' => false],
                    ['jawaban' => 'TCP', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu RAM pada komputer?',
                'jawabans' => [
                    ['jawaban' => 'Read-Only Memory', 'is_true' => false],
                    ['jawaban' => 'Random Access Memory', 'is_true' => true],
                    ['jawaban' => 'Read and Write Memory', 'is_true' => false],
                    ['jawaban' => 'Real-time Access Memory', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Yang termasuk ke dalam perangkat keras input adalah...',
                'jawabans' => [
                    ['jawaban' => 'Speaker', 'is_true' => false],
                    ['jawaban' => 'Monitor', 'is_true' => false],
                    ['jawaban' => 'Keyboard', 'is_true' => true],
                    ['jawaban' => 'Printer', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu HTML?',
                'jawabans' => [
                    ['jawaban' => 'HyperText Markup Language', 'is_true' => true],
                    ['jawaban' => 'High-level Text Manipulation Language', 'is_true' => false],
                    ['jawaban' => 'Hyperlink and Text Management Language', 'is_true' => false],
                    ['jawaban' => 'High-level Text Markup Language', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Sistem operasi yang sering digunakan pada server adalah...',
                'jawabans' => [
                    ['jawaban' => 'MacOS', 'is_true' => false],
                    ['jawaban' => 'Windows', 'is_true' => false],
                    ['jawaban' => 'Linux', 'is_true' => true],
                    ['jawaban' => 'Android', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Fungsi utama dari perangkat keras GPU adalah...',
                'jawabans' => [
                    ['jawaban' => 'Menyimpan data', 'is_true' => false],
                    ['jawaban' => 'Memproses data grafis', 'is_true' => true],
                    ['jawaban' => 'Mengatur jaringan', 'is_true' => false],
                    ['jawaban' => 'Menghubungkan perangkat eksternal', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu DNS?',
                'jawabans' => [
                    ['jawaban' => 'Domain Name System', 'is_true' => true],
                    ['jawaban' => 'Dynamic Network System', 'is_true' => false],
                    ['jawaban' => 'Digital Network Service', 'is_true' => false],
                    ['jawaban' => 'Data Naming System', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Fungsi utama dari perangkat keras CPU adalah...',
                'jawabans' => [
                    ['jawaban' => 'Menyimpan data', 'is_true' => false],
                    ['jawaban' => 'Menampilkan gambar', 'is_true' => false],
                    ['jawaban' => 'Menjalankan instruksi program', 'is_true' => true],
                    ['jawaban' => 'Menyimpan file', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan malware?',
                'jawabans' => [
                    ['jawaban' => 'Perangkat keras yang rusak', 'is_true' => false],
                    ['jawaban' => 'Perangkat lunak berbahaya', 'is_true' => true],
                    ['jawaban' => 'Situs web yang aman', 'is_true' => false],
                    ['jawaban' => 'Perangkat lunak gratis', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Protokol komunikasi yang digunakan untuk browsing web adalah...',
                'jawabans' => [
                    ['jawaban' => 'FTP', 'is_true' => false],
                    ['jawaban' => 'HTTP', 'is_true' => true],
                    ['jawaban' => 'SMTP', 'is_true' => false],
                    ['jawaban' => 'TCP', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Fungsi utama dari perangkat keras output printer adalah...',
                'jawabans' => [
                    ['jawaban' => 'Mencetak dokumen', 'is_true' => true],
                    ['jawaban' => 'Menampilkan gambar', 'is_true' => false],
                    ['jawaban' => 'Mengeluarkan suara', 'is_true' => false],
                    ['jawaban' => 'Menyimpan data', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu algoritma?',
                'jawabans' => [
                    ['jawaban' => 'Bahasa pemrograman', 'is_true' => false],
                    ['jawaban' => 'Urutan langkah-langkah untuk menyelesaikan masalah', 'is_true' => true],
                    ['jawaban' => 'Perangkat keras komputer', 'is_true' => false],
                    ['jawaban' => 'Protokol komunikasi', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Jenis kabel yang digunakan untuk menghubungkan perangkat eksternal ke komputer adalah...',
                'jawabans' => [
                    ['jawaban' => 'USB', 'is_true' => true],
                    ['jawaban' => 'HDMI', 'is_true' => false],
                    ['jawaban' => 'Ethernet', 'is_true' => false],
                    ['jawaban' => 'VGA', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Fungsi utama dari perangkat keras output monitor adalah...',
                'jawabans' => [
                    ['jawaban' => 'Mencetak dokumen', 'is_true' => false],
                    ['jawaban' => 'Menyimpan data', 'is_true' => false],
                    ['jawaban' => 'Menampilkan gambar', 'is_true' => true],
                    ['jawaban' => 'Mengeluarkan suara', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Sistem bilangan yang menggunakan angka 0-15 disebut...',
                'jawabans' => [
                    ['jawaban' => 'Sistem bilangan desimal', 'is_true' => false],
                    ['jawaban' => 'Sistem bilangan biner', 'is_true' => false],
                    ['jawaban' => 'Sistem bilangan oktal', 'is_true' => false],
                    ['jawaban' => 'Sistem bilangan heksadesimal', 'is_true' => true],
                ],
            ],
            [
                'pertanyaan' => 'Apakah fungsi dari tombol "Ctrl" pada keyboard?',
                'jawabans' => [
                    ['jawaban' => 'Mematikan komputer', 'is_true' => false],
                    ['jawaban' => 'Mengakses menu konteks', 'is_true' => false],
                    ['jawaban' => 'Mengganti font teks', 'is_true' => false],
                    ['jawaban' => 'Memberikan perintah tambahan', 'is_true' => true],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan cloud computing?',
                'jawabans' => [
                    ['jawaban' => 'Komputer yang berada di awan', 'is_true' => false],
                    ['jawaban' => 'Penyimpanan data secara lokal', 'is_true' => false],
                    ['jawaban' => 'Layanan komputasi melalui internet', 'is_true' => true],
                    ['jawaban' => 'Pengolahan data tanpa perangkat keras', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu IP address?',
                'jawabans' => [
                    ['jawaban' => 'Internet Provider address', 'is_true' => false],
                    ['jawaban' => 'Internal Protocol address', 'is_true' => false],
                    ['jawaban' => 'Internet Protocol address', 'is_true' => true],
                    ['jawaban' => 'Intranet Port address', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan CPU?',
                'jawabans' => [
                    ['jawaban' => 'Central Processing Unit', 'is_true' => true],
                    ['jawaban' => 'Computer Processing Unit', 'is_true' => false],
                    ['jawaban' => 'Central Processor Unit', 'is_true' => false],
                    ['jawaban' => 'Computer Processor Unit', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa perbedaan antara RAM dan ROM?',
                'jawabans' => [
                    ['jawaban' => 'RAM bersifat read-only, sedangkan ROM bersifat read-write', 'is_true' => false],
                    ['jawaban' => 'RAM bersifat temporary dan volatile, sedangkan ROM bersifat permanent dan non-volatile', 'is_true' => true],
                    ['jawaban' => 'RAM bersifat permanent dan non-volatile, sedangkan ROM bersifat temporary dan volatile', 'is_true' => false],
                    ['jawaban' => 'Tidak ada perbedaan, keduanya memiliki fungsi yang sama', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu firewall?',
                'jawabans' => [
                    ['jawaban' => 'Perangkat keras untuk mencetak', 'is_true' => false],
                    ['jawaban' => 'Sistem operasi untuk keamanan data', 'is_true' => false],
                    ['jawaban' => 'Paket keamanan perangkat lunak', 'is_true' => false],
                    ['jawaban' => 'Sistem yang mencegah akses yang tidak diinginkan ke atau keluar dari jaringan', 'is_true' => true],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu e-commerce?',
                'jawabans' => [
                    ['jawaban' => 'Era komputasi modern', 'is_true' => false],
                    ['jawaban' => 'Elektronik komunikasi', 'is_true' => false],
                    ['jawaban' => 'Electronic Commerce, kegiatan jual beli barang atau jasa secara online', 'is_true' => true],
                    ['jawaban' => 'Eksperimen komputasi', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan GPU?',
                'jawabans' => [
                    ['jawaban' => 'Graphics Processing Unit', 'is_true' => true],
                    ['jawaban' => 'General Processing Unit', 'is_true' => false],
                    ['jawaban' => 'Graphical Processor Unit', 'is_true' => false],
                    ['jawaban' => 'General Processor Unit', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apakah fungsi dari tombol "Alt" pada keyboard?',
                'jawabans' => [
                    ['jawaban' => 'Mengganti huruf besar dan kecil', 'is_true' => false],
                    ['jawaban' => 'Membuat karakter khusus', 'is_true' => false],
                    ['jawaban' => 'Memunculkan menu konteks', 'is_true' => false],
                    ['jawaban' => 'Memberikan perintah tambahan', 'is_true' => true],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu SQL?',
                'jawabans' => [
                    ['jawaban' => 'Structured Programming Language', 'is_true' => false],
                    ['jawaban' => 'System Programming Language', 'is_true' => false],
                    ['jawaban' => 'Structured Query Language', 'is_true' => true],
                    ['jawaban' => 'System Query Language', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apakah fungsi dari tag <footer> dalam HTML?',
                'jawabans' => [
                    ['jawaban' => 'Menyusun paragraf', 'is_true' => false],
                    ['jawaban' => 'Menyematkan gambar', 'is_true' => false],
                    ['jawaban' => 'Mengatur informasi dokumen', 'is_true' => false],
                    ['jawaban' => 'Menandai bagian bawah dokumen', 'is_true' => true],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu CDN?',
                'jawabans' => [
                    ['jawaban' => 'Central Data Network', 'is_true' => false],
                    ['jawaban' => 'Computer Delivery Network', 'is_true' => false],
                    ['jawaban' => 'Content Distribution Network', 'is_true' => true],
                    ['jawaban' => 'Communication Delivery Network', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu VPN?',
                'jawabans' => [
                    ['jawaban' => 'Very Private Network', 'is_true' => false],
                    ['jawaban' => 'Virtual Public Network', 'is_true' => false],
                    ['jawaban' => 'Virtual Private Network', 'is_true' => true],
                    ['jawaban' => 'Visual Private Network', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa fungsi dari Hard Disk pada komputer?',
                'jawabans' => [
                    ['jawaban' => 'Menampilkan gambar', 'is_true' => false],
                    ['jawaban' => 'Menyimpan data secara permanen', 'is_true' => true],
                    ['jawaban' => 'Mengeluarkan suara', 'is_true' => false],
                    ['jawaban' => 'Memproses data grafis', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu GPU dalam konteks perangkat keras?',
                'jawabans' => [
                    ['jawaban' => 'General Processing Unit', 'is_true' => false],
                    ['jawaban' => 'Graphical Processor Unit', 'is_true' => false],
                    ['jawaban' => 'Graphics Processing Unit', 'is_true' => true],
                    ['jawaban' => 'General Processor Unit', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa peran dari motherboard dalam sebuah komputer?',
                'jawabans' => [
                    ['jawaban' => 'Menyimpan data', 'is_true' => false],
                    ['jawaban' => 'Menampilkan gambar', 'is_true' => false],
                    ['jawaban' => 'Menjalankan instruksi program', 'is_true' => false],
                    ['jawaban' => 'Menyediakan platform untuk komponen hardware', 'is_true' => true],
                ],
            ],
            [
                'pertanyaan' => 'Apa kegunaan dari power supply unit (PSU) dalam komputer?',
                'jawabans' => [
                    ['jawaban' => 'Menyimpan data', 'is_true' => false],
                    ['jawaban' => 'Menampilkan gambar', 'is_true' => false],
                    ['jawaban' => 'Menyediakan daya listrik untuk komponen komputer', 'is_true' => true],
                    ['jawaban' => 'Mengontrol pointer pada layar', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa fungsi dari BIOS (Basic Input/Output System) dalam sebuah komputer?',
                'jawabans' => [
                    ['jawaban' => 'Menyimpan data', 'is_true' => false],
                    ['jawaban' => 'Menampilkan gambar', 'is_true' => false],
                    ['jawaban' => 'Mengontrol booting sistem dan memberikan instruksi awal kepada hardware', 'is_true' => true],
                    ['jawaban' => 'Memproses data grafis', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa perbedaan antara SSD (Solid State Drive) dan HDD (Hard Disk Drive)?',
                'jawabans' => [
                    ['jawaban' => 'SSD lebih cepat karena menggunakan komponen elektronik, sementara HDD menggunakan piringan magnetik', 'is_true' => true],
                    ['jawaban' => 'SSD lebih lambat karena menggunakan piringan magnetik, sementara HDD menggunakan komponen elektronik', 'is_true' => false],
                    ['jawaban' => 'Tidak ada perbedaan antara SSD dan HDD', 'is_true' => false],
                    ['jawaban' => 'SSD dan HDD memiliki kecepatan yang sama', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan CPU Clock Speed?',
                'jawabans' => [
                    ['jawaban' => 'Kecepatan internet pada CPU', 'is_true' => false],
                    ['jawaban' => 'Jumlah core pada CPU', 'is_true' => false],
                    ['jawaban' => 'Kecepatan clock internal yang digunakan untuk menjalankan instruksi pada CPU', 'is_true' => true],
                    ['jawaban' => 'Ukuran memori cache pada CPU', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan GPU VRAM (Video RAM)?',
                'jawabans' => [
                    ['jawaban' => 'Memory yang digunakan oleh CPU', 'is_true' => false],
                    ['jawaban' => 'Memory yang digunakan oleh GPU untuk menyimpan data grafis', 'is_true' => true],
                    ['jawaban' => 'Jenis RAM pada motherboard', 'is_true' => false],
                    ['jawaban' => 'Memory yang digunakan oleh PSU', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan GPU Rendering?',
                'jawabans' => [
                    ['jawaban' => 'Proses membuat tampilan grafis pada GPU', 'is_true' => true],
                    ['jawaban' => 'Proses mengganti tampilan grafis pada GPU', 'is_true' => false],
                    ['jawaban' => 'Proses menyimpan tampilan grafis pada GPU', 'is_true' => false],
                    ['jawaban' => 'Proses mengontrol tampilan grafis pada GPU', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa fungsi dari CMOS battery pada motherboard?',
                'jawabans' => [
                    ['jawaban' => 'Menyimpan data pengguna', 'is_true' => false],
                    ['jawaban' => 'Menyediakan daya untuk CPU', 'is_true' => false],
                    ['jawaban' => 'Menyimpan pengaturan BIOS dan waktu sistem', 'is_true' => true],
                    ['jawaban' => 'Menyimpan data cache', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan overclocking pada CPU?',
                'jawabans' => [
                    ['jawaban' => 'Proses mengurangi kecepatan CPU', 'is_true' => false],
                    ['jawaban' => 'Proses meningkatkan kecepatan CPU di atas batas yang ditentukan', 'is_true' => true],
                    ['jawaban' => 'Proses menambah jumlah core pada CPU', 'is_true' => false],
                    ['jawaban' => 'Proses mengganti tipe CPU', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa perbedaan antara RAM DDR3 dan DDR4?',
                'jawabans' => [
                    ['jawaban' => 'DDR3 lebih lambat dibandingkan DDR4', 'is_true' => true],
                    ['jawaban' => 'DDR3 memiliki kapasitas lebih besar dibandingkan DDR4', 'is_true' => false],
                    ['jawaban' => 'DDR3 dan DDR4 memiliki kecepatan yang sama', 'is_true' => false],
                    ['jawaban' => 'DDR3 lebih mahal dibandingkan DDR4', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan heat sink pada CPU?',
                'jawabans' => [
                    ['jawaban' => 'Sebuah unit penyimpanan panas pada CPU', 'is_true' => false],
                    ['jawaban' => 'Sebuah komponen pendingin yang melekat pada CPU untuk menyerap dan menghilangkan panas', 'is_true' => true],
                    ['jawaban' => 'Sebuah perangkat lunak untuk mengontrol suhu CPU', 'is_true' => false],
                    ['jawaban' => 'Sebuah perangkat untuk mengukur suhu CPU', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa perbedaan antara monitor IPS dan monitor TN?',
                'jawabans' => [
                    ['jawaban' => 'Monitor IPS memiliki waktu respons yang lebih cepat dibandingkan monitor TN', 'is_true' => false],
                    ['jawaban' => 'Monitor TN memiliki sudut pandang yang lebih lebar dibandingkan monitor IPS', 'is_true' => false],
                    ['jawaban' => 'Monitor IPS memiliki reproduksi warna yang lebih baik dibandingkan monitor TN', 'is_true' => true],
                    ['jawaban' => 'Tidak ada perbedaan antara monitor IPS dan monitor TN', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa perbedaan antara Sistem Operasi Windows dan MacOS?',
                'jawabans' => [
                    ['jawaban' => 'Windows dikembangkan oleh Microsoft, sedangkan MacOS dikembangkan oleh Apple', 'is_true' => true],
                    ['jawaban' => 'Windows dan MacOS memiliki antarmuka pengguna yang identik', 'is_true' => false],
                    ['jawaban' => 'Windows hanya dapat diinstal pada perangkat dari Apple, sedangkan MacOS dapat diinstal pada berbagai perangkat', 'is_true' => false],
                    ['jawaban' => 'Windows dan MacOS memiliki kode sumber terbuka', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan Open Source Software?',
                'jawabans' => [
                    ['jawaban' => 'Perangkat lunak yang dapat digunakan tanpa lisensi', 'is_true' => false],
                    ['jawaban' => 'Perangkat lunak yang memiliki kode sumber terbuka dan dapat diakses dan dimodifikasi oleh siapa saja', 'is_true' => true],
                    ['jawaban' => 'Perangkat lunak yang hanya dapat diakses oleh pengguna terdaftar', 'is_true' => false],
                    ['jawaban' => 'Perangkat lunak yang tidak memerlukan koneksi internet', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu aplikasi web (web application)?',
                'jawabans' => [
                    ['jawaban' => 'Aplikasi yang hanya dapat diakses melalui internet', 'is_true' => true],
                    ['jawaban' => 'Aplikasi yang hanya dapat diakses melalui jaringan lokal', 'is_true' => false],
                    ['jawaban' => 'Aplikasi yang hanya dapat diakses melalui media penyimpanan eksternal', 'is_true' => false],
                    ['jawaban' => 'Aplikasi yang hanya dapat diakses melalui perangkat mobile', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa perbedaan antara aplikasi desktop dan aplikasi web?',
                'jawabans' => [
                    ['jawaban' => 'Aplikasi desktop hanya dapat diakses melalui internet, sedangkan aplikasi web hanya dapat diakses secara offline', 'is_true' => false],
                    ['jawaban' => 'Aplikasi desktop diinstal dan berjalan di komputer lokal, sedangkan aplikasi web diakses melalui browser', 'is_true' => true],
                    ['jawaban' => 'Aplikasi desktop memiliki antarmuka pengguna yang identik dengan aplikasi web', 'is_true' => false],
                    ['jawaban' => 'Aplikasi web lebih lambat dibandingkan aplikasi desktop', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu algoritma dalam konteks pemrograman?',
                'jawabans' => [
                    ['jawaban' => 'Bahasa pemrograman yang populer', 'is_true' => false],
                    ['jawaban' => 'Urutan langkah-langkah untuk menyelesaikan masalah', 'is_true' => true],
                    ['jawaban' => 'Sebuah jenis virus komputer', 'is_true' => false],
                    ['jawaban' => 'Sistem operasi open source', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan IDE (Integrated Development Environment)?',
                'jawabans' => [
                    ['jawaban' => 'Sebuah perangkat keras untuk pengembangan aplikasi', 'is_true' => false],
                    ['jawaban' => 'Sebuah perangkat lunak yang menyediakan berbagai alat untuk memudahkan pengembangan perangkat lunak', 'is_true' => true],
                    ['jawaban' => 'Sebuah bahasa pemrograman', 'is_true' => false],
                    ['jawaban' => 'Sebuah metode pengujian aplikasi', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu Git dalam pengembangan perangkat lunak?',
                'jawabans' => [
                    ['jawaban' => 'Sebuah bahasa pemrograman', 'is_true' => false],
                    ['jawaban' => 'Sebuah sistem manajemen basis data', 'is_true' => false],
                    ['jawaban' => 'Sebuah sistem kontrol versi untuk mengelola kode sumber', 'is_true' => true],
                    ['jawaban' => 'Sebuah editor teks', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa perbedaan antara perangkat lunak open source dan closed source?',
                'jawabans' => [
                    ['jawaban' => 'Open source memiliki kode sumber terbuka yang dapat diakses dan dimodifikasi oleh siapa saja', 'is_true' => true],
                    ['jawaban' => 'Closed source tidak dapat diakses oleh pengguna', 'is_true' => false],
                    ['jawaban' => 'Tidak ada perbedaan antara keduanya', 'is_true' => false],
                    ['jawaban' => 'Open source lebih mahal daripada closed source', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa peran dari Compiler dalam proses pemrograman?',
                'jawabans' => [
                    ['jawaban' => 'Menjalankan program', 'is_true' => false],
                    ['jawaban' => 'Mengubah kode sumber menjadi bahasa mesin atau bytecode', 'is_true' => true],
                    ['jawaban' => 'Mengelola memori pada saat runtime', 'is_true' => false],
                    ['jawaban' => 'Mendesain antarmuka pengguna', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu SQL (Structured Query Language)?',
                'jawabans' => [
                    ['jawaban' => 'Sebuah bahasa pemrograman', 'is_true' => false],
                    ['jawaban' => 'Sebuah sistem operasi', 'is_true' => false],
                    ['jawaban' => 'Sebuah bahasa untuk mengelola dan mengakses basis data', 'is_true' => true],
                    ['jawaban' => 'Sebuah jenis algoritma', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa perbedaan antara perangkat lunak antivirus dan antimalware?',
                'jawabans' => [
                    ['jawaban' => 'Tidak ada perbedaan antara keduanya', 'is_true' => false],
                    ['jawaban' => 'Antivirus hanya melindungi dari virus, sedangkan antimalware melindungi dari berbagai jenis malware', 'is_true' => true],
                    ['jawaban' => 'Antivirus melindungi dari malware, sedangkan antimalware hanya melindungi dari virus', 'is_true' => false],
                    ['jawaban' => 'Antivirus dan antimalware memiliki fungsi yang sama', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu firewall dalam keamanan perangkat lunak?',
                'jawabans' => [
                    ['jawaban' => 'Sebuah perangkat keras untuk penyimpanan data', 'is_true' => false],
                    ['jawaban' => 'Sebuah perangkat lunak atau perangkat keras yang digunakan untuk mengontrol lalu lintas jaringan dan keamanan data', 'is_true' => true],
                    ['jawaban' => 'Sebuah jenis virus komputer', 'is_true' => false],
                    ['jawaban' => 'Sebuah metode pengujian aplikasi', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa perbedaan antara IP address IPv4 dan IPv6?',
                'jawabans' => [
                    ['jawaban' => 'IPv4 menggunakan 32-bit address, sedangkan IPv6 menggunakan 128-bit address', 'is_true' => true],
                    ['jawaban' => 'IPv4 lebih modern dibandingkan IPv6', 'is_true' => false],
                    ['jawaban' => 'IPv4 hanya digunakan di internet, sedangkan IPv6 hanya digunakan di jaringan lokal', 'is_true' => false],
                    ['jawaban' => 'IPv4 dan IPv6 memiliki panjang address yang sama', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu DNS (Domain Name System) dalam jaringan komputer?',
                'jawabans' => [
                    ['jawaban' => 'Sebuah bahasa pemrograman untuk pengembangan web', 'is_true' => false],
                    ['jawaban' => 'Sebuah protokol untuk transfer file', 'is_true' => false],
                    ['jawaban' => 'Sebuah sistem yang mengonversi nama domain menjadi alamat IP', 'is_true' => true],
                    ['jawaban' => 'Sebuah perangkat keras untuk koneksi internet', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa perbedaan antara switch dan router dalam jaringan?',
                'jawabans' => [
                    ['jawaban' => 'Switch dan router memiliki fungsi yang sama dalam jaringan', 'is_true' => false],
                    ['jawaban' => 'Switch digunakan untuk menghubungkan perangkat dalam jaringan lokal, sedangkan router digunakan untuk menghubungkan jaringan yang berbeda', 'is_true' => true],
                    ['jawaban' => 'Router hanya digunakan di jaringan lokal, sedangkan switch digunakan di seluruh internet', 'is_true' => false],
                    ['jawaban' => 'Switch dan router tidak dapat beroperasi bersama dalam satu jaringan', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu VPN (Virtual Private Network) dalam konteks jaringan komputer?',
                'jawabans' => [
                    ['jawaban' => 'Sebuah jenis virus komputer', 'is_true' => false],
                    ['jawaban' => 'Sebuah metode enkripsi data untuk meningkatkan keamanan saat terhubung ke internet', 'is_true' => true],
                    ['jawaban' => 'Sebuah protokol untuk transfer file secara aman', 'is_true' => false],
                    ['jawaban' => 'Sebuah sistem operasi jaringan yang terisolasi dari internet', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa perbedaan antara download dan upload dalam konteks jaringan?',
                'jawabans' => [
                    ['jawaban' => 'Download adalah proses mengirim data dari komputer lokal ke server, sedangkan upload adalah proses mengirim data dari server ke komputer lokal', 'is_true' => false],
                    ['jawaban' => 'Download adalah proses mengunduh data dari server ke komputer lokal, sedangkan upload adalah proses mengirim data dari komputer lokal ke server', 'is_true' => true],
                    ['jawaban' => 'Download dan upload memiliki arti yang sama dalam konteks jaringan', 'is_true' => false],
                    ['jawaban' => 'Download dan upload adalah istilah yang hanya digunakan dalam jaringan lokal', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan bandwidth dalam jaringan komputer?',
                'jawabans' => [
                    ['jawaban' => 'Jumlah data yang dapat diunduh dalam satu waktu', 'is_true' => false],
                    ['jawaban' => 'Kapasitas maksimum untuk mentransfer data melalui jaringan dalam satu waktu', 'is_true' => true],
                    ['jawaban' => 'Jumlah perangkat yang dapat terhubung ke jaringan', 'is_true' => false],
                    ['jawaban' => 'Jarak maksimum antara dua perangkat dalam jaringan', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan latency dalam jaringan komputer?',
                'jawabans' => [
                    ['jawaban' => 'Kecepatan transfer data dalam jaringan', 'is_true' => false],
                    ['jawaban' => 'Waktu keterlambatan atau penundaan dalam pengiriman data antara dua perangkat dalam jaringan', 'is_true' => true],
                    ['jawaban' => 'Jarak antara dua perangkat dalam jaringan', 'is_true' => false],
                    ['jawaban' => 'Kualitas sinyal Wi-Fi', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa perbedaan antara topologi jaringan star dan topologi jaringan ring?',
                'jawabans' => [
                    ['jawaban' => 'Topologi star menghubungkan setiap perangkat dalam jaringan secara berurutan, sedangkan topologi ring menghubungkan setiap perangkat ke satu pusat tunggal', 'is_true' => false],
                    ['jawaban' => 'Topologi star menghubungkan setiap perangkat ke satu pusat tunggal, sedangkan topologi ring menghubungkan setiap perangkat secara berurutan', 'is_true' => true],
                    ['jawaban' => 'Topologi star dan topologi ring memiliki konfigurasi yang sama', 'is_true' => false],
                    ['jawaban' => 'Topologi star hanya digunakan di jaringan lokal, sedangkan topologi ring digunakan di seluruh internet', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa perbedaan antara HTTP dan HTTPS dalam protokol komunikasi web?',
                'jawabans' => [
                    ['jawaban' => 'HTTP adalah protokol untuk transfer data yang tidak aman, sedangkan HTTPS menggunakan enkripsi untuk keamanan tambahan', 'is_true' => true],
                    ['jawaban' => 'HTTP dan HTTPS memiliki fungsi yang sama dalam komunikasi web', 'is_true' => false],
                    ['jawaban' => 'HTTPS adalah protokol yang lebih lama dibandingkan HTTP', 'is_true' => false],
                    ['jawaban' => 'HTTP hanya digunakan untuk situs web pemerintah', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu proxy server dalam jaringan komputer?',
                'jawabans' => [
                    ['jawaban' => 'Sebuah server yang menyimpan file website', 'is_true' => false],
                    ['jawaban' => 'Sebuah server yang bertindak sebagai perantara antara pengguna dan internet, menyediakan keamanan dan anonimitas', 'is_true' => true],
                    ['jawaban' => 'Sebuah server yang mengatur alamat IP dalam jaringan', 'is_true' => false],
                    ['jawaban' => 'Sebuah server yang digunakan untuk menyimpan data backup', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa perbedaan antara data dan informasi?',
                'jawabans' => [
                    ['jawaban' => 'Data adalah fakta mentah, sedangkan informasi adalah data yang telah diolah dan memiliki makna', 'is_true' => true],
                    ['jawaban' => 'Data dan informasi memiliki arti yang sama dalam konteks pengelolaan data', 'is_true' => false],
                    ['jawaban' => 'Data adalah informasi yang tidak relevan', 'is_true' => false],
                    ['jawaban' => 'Informasi adalah fakta mentah, sedangkan data adalah informasi yang telah diolah', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu database dalam konteks pengelolaan data?',
                'jawabans' => [
                    ['jawaban' => 'Sebuah lembar kerja Microsoft Excel', 'is_true' => false],
                    ['jawaban' => 'Sebuah kumpulan data terstruktur yang disimpan dan diatur untuk memungkinkan pencarian, pembaruan, dan analisis', 'is_true' => true],
                    ['jawaban' => 'Sebuah dokumen teks biasa', 'is_true' => false],
                    ['jawaban' => 'Sebuah perangkat keras untuk menyimpan data', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu Big Data?',
                'jawabans' => [
                    ['jawaban' => 'Sebuah teknologi untuk mengamankan data', 'is_true' => false],
                    ['jawaban' => 'Sejumlah data yang sangat besar yang sulit diolah dengan metode tradisional', 'is_true' => true],
                    ['jawaban' => 'Sebuah jenis database', 'is_true' => false],
                    ['jawaban' => 'Sebuah konsep dalam pengelolaan data yang hanya berlaku untuk perusahaan besar', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan data terstruktur, data tidak terstruktur, dan data semi-terstruktur?',
                'jawabans' => [
                    ['jawaban' => 'Data terstruktur adalah data yang memiliki format tertentu, data tidak terstruktur tidak memiliki format, dan data semi-terstruktur adalah kombinasi keduanya', 'is_true' => true],
                    ['jawaban' => 'Data terstruktur adalah data yang tidak memiliki format, data tidak terstruktur adalah data yang memiliki format tertentu, dan data semi-terstruktur adalah data acak', 'is_true' => false],
                    ['jawaban' => 'Data terstruktur adalah data yang hanya dapat diakses secara lokal, data tidak terstruktur adalah data yang dapat diakses secara global, dan data semi-terstruktur adalah data yang hanya dapat diakses oleh administrator', 'is_true' => false],
                    ['jawaban' => 'Data terstruktur, data tidak terstruktur, dan data semi-terstruktur memiliki format yang sama', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa perbedaan antara backup dan restore dalam pengelolaan data?',
                'jawabans' => [
                    ['jawaban' => 'Backup adalah proses membuat salinan data sebagai langkah keamanan, sedangkan restore adalah proses mengembalikan data dari salinan tersebut', 'is_true' => true],
                    ['jawaban' => 'Backup dan restore adalah istilah yang digunakan secara bergantian dalam manajemen data', 'is_true' => false],
                    ['jawaban' => 'Backup adalah proses menghapus data yang tidak diperlukan, sedangkan restore adalah proses menyimpan data yang baru dibuat', 'is_true' => false],
                    ['jawaban' => 'Backup dan restore adalah istilah yang hanya digunakan dalam perangkat keras', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu data mining dalam konteks pengelolaan data?',
                'jawabans' => [
                    ['jawaban' => 'Proses untuk menyimpan data dalam database', 'is_true' => false],
                    ['jawaban' => 'Proses untuk menggali dan menganalisis pola-pola yang tersembunyi dalam data untuk mendapatkan informasi yang berharga', 'is_true' => true],
                    ['jawaban' => 'Sebuah metode untuk menyimpan file-file data', 'is_true' => false],
                    ['jawaban' => 'Sebuah proses untuk menghapus data yang tidak diperlukan', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu serangan DoS (Denial of Service) dalam konteks keamanan jaringan?',
                'jawabans' => [
                    ['jawaban' => 'Sebuah serangan untuk mencuri data pengguna', 'is_true' => false],
                    ['jawaban' => 'Sebuah serangan untuk membuat layanan atau sumber daya jaringan tidak tersedia bagi pengguna yang sah', 'is_true' => true],
                    ['jawaban' => 'Sebuah serangan untuk mengubah konfigurasi jaringan', 'is_true' => false],
                    ['jawaban' => 'Sebuah serangan untuk memblokir akses internet', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa perbedaan antara firewall dan antivirus dalam keamanan jaringan?',
                'jawabans' => [
                    ['jawaban' => 'Firewall melindungi dari virus, sedangkan antivirus melindungi dari akses yang tidak sah', 'is_true' => false],
                    ['jawaban' => 'Firewall dan antivirus memiliki fungsi yang sama dalam keamanan jaringan', 'is_true' => false],
                    ['jawaban' => 'Firewall melindungi jaringan dengan mengontrol lalu lintas, sedangkan antivirus melindungi dari virus dan malware', 'is_true' => true],
                    ['jawaban' => 'Firewall digunakan untuk menyaring email, sedangkan antivirus mengatur akses internet', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu enkripsi data dalam konteks keamanan jaringan?',
                'jawabans' => [
                    ['jawaban' => 'Proses menggabungkan data dari beberapa sumber untuk membuat salinan', 'is_true' => false],
                    ['jawaban' => 'Proses mengamankan data dengan mengonversi teks biasa menjadi format yang hanya dapat dibaca oleh penerima yang memiliki kunci', 'is_true' => true],
                    ['jawaban' => 'Proses membuat data menjadi lebih terstruktur', 'is_true' => false],
                    ['jawaban' => 'Proses menghentikan aliran data dalam jaringan', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa peran VPN (Virtual Private Network) dalam meningkatkan keamanan jaringan?',
                'jawabans' => [
                    ['jawaban' => 'VPN digunakan untuk menghentikan serangan DoS', 'is_true' => false],
                    ['jawaban' => 'VPN menciptakan koneksi terenkripsi melalui internet, membuat data yang dikirim dan diterima lebih aman', 'is_true' => true],
                    ['jawaban' => 'VPN hanya digunakan untuk mempercepat koneksi internet', 'is_true' => false],
                    ['jawaban' => 'VPN digunakan untuk menyaring email yang tidak diinginkan', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu IDS (Intrusion Detection System) dalam konteks keamanan jaringan?',
                'jawabans' => [
                    ['jawaban' => 'Sebuah perangkat keras untuk mengukur kecepatan koneksi internet', 'is_true' => false],
                    ['jawaban' => 'Sebuah sistem yang memantau dan mendeteksi aktivitas mencurigakan atau ancaman keamanan dalam jaringan', 'is_true' => true],
                    ['jawaban' => 'Sebuah protokol untuk transfer file antar perangkat', 'is_true' => false],
                    ['jawaban' => 'Sebuah metode untuk menyaring email', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu penetration testing dalam keamanan jaringan?',
                'jawabans' => [
                    ['jawaban' => 'Sebuah metode untuk mengukur kecepatan transfer data dalam jaringan', 'is_true' => false],
                    ['jawaban' => 'Sebuah pendekatan untuk mengidentifikasi dan mengevaluasi potensi kerentanan keamanan dalam suatu sistem', 'is_true' => true],
                    ['jawaban' => 'Sebuah protokol untuk browsing web', 'is_true' => false],
                    ['jawaban' => 'Sebuah metode untuk mengamankan data dengan enkripsi', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu malware dalam konteks keamanan komputer?',
                'jawabans' => [
                    ['jawaban' => 'Perangkat keras yang berbahaya', 'is_true' => false],
                    ['jawaban' => 'Perangkat lunak berbahaya yang dapat merusak atau mencuri informasi pada komputer', 'is_true' => true],
                    ['jawaban' => 'Sebuah situs web berbahaya', 'is_true' => false],
                    ['jawaban' => 'Sebuah jaringan yang tidak aman', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu phishing dalam konteks keamanan komputer?',
                'jawabans' => [
                    ['jawaban' => 'Sebuah metode untuk meningkatkan kecepatan koneksi internet', 'is_true' => false],
                    ['jawaban' => 'Sebuah upaya penipuan dengan menyamar sebagai entitas tepercaya untuk mendapatkan informasi pribadi atau keuangan', 'is_true' => true],
                    ['jawaban' => 'Sebuah jenis virus komputer', 'is_true' => false],
                    ['jawaban' => 'Sebuah metode untuk membobol kata sandi', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa perbedaan antara firewall dan antivirus dalam konteks keamanan komputer?',
                'jawabans' => [
                    ['jawaban' => 'Firewall melindungi dari virus, sedangkan antivirus melindungi dari akses yang tidak sah', 'is_true' => false],
                    ['jawaban' => 'Firewall dan antivirus memiliki fungsi yang sama dalam keamanan komputer', 'is_true' => false],
                    ['jawaban' => 'Firewall melindungi komputer dengan mengontrol lalu lintas, sedangkan antivirus melindungi dari virus dan malware', 'is_true' => true],
                    ['jawaban' => 'Firewall digunakan untuk menyaring email, sedangkan antivirus mengatur akses internet', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu backup dan mengapa penting untuk keamanan data?',
                'jawabans' => [
                    ['jawaban' => 'Backup adalah serangan terhadap sistem komputer', 'is_true' => false],
                    ['jawaban' => 'Backup adalah proses membuat salinan data sebagai langkah keamanan, penting untuk mengembalikan data jika terjadi kehilangan atau kerusakan', 'is_true' => true],
                    ['jawaban' => 'Backup adalah nama perangkat keras penyimpanan data', 'is_true' => false],
                    ['jawaban' => 'Backup hanya diperlukan untuk perusahaan besar', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu HTML dan apa peranannya dalam pengembangan web?',
                'jawabans' => [
                    ['jawaban' => 'HTML adalah singkatan dari HyperText Markup Language, digunakan untuk mengelola basis data', 'is_true' => false],
                    ['jawaban' => 'HTML adalah bahasa markup yang digunakan untuk membuat struktur dasar halaman web', 'is_true' => true],
                    ['jawaban' => 'HTML adalah bahasa pemrograman tingkat tinggi', 'is_true' => false],
                    ['jawaban' => 'HTML hanya digunakan untuk mengelola tata letak teks', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu PHP dan bagaimana perannya dalam pengembangan web dinamis?',
                'jawabans' => [
                    ['jawaban' => 'PHP adalah singkatan dari Personal Home Page, digunakan untuk membuat halaman web statis', 'is_true' => false],
                    ['jawaban' => 'PHP adalah bahasa pemrograman server-side yang digunakan untuk membuat halaman web dinamis', 'is_true' => true],
                    ['jawaban' => 'PHP hanya digunakan untuk mengelola tampilan halaman web', 'is_true' => false],
                    ['jawaban' => 'PHP adalah bahasa pemrograman client-side untuk interaksi pengguna', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Bagaimana cara mengirim data dari halaman HTML ke halaman PHP menggunakan metode POST?',
                'jawabans' => [
                    ['jawaban' => 'Dengan menggunakan variabel superglobal $_GET', 'is_true' => false],
                    ['jawaban' => 'Dengan menggunakan variabel superglobal $_REQUEST', 'is_true' => false],
                    ['jawaban' => 'Dengan menggunakan variabel superglobal $_POST', 'is_true' => true],
                    ['jawaban' => 'Dengan menggunakan variabel superglobal $_SERVER', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa perbedaan antara metode GET dan POST dalam pengiriman data formulir?',
                'jawabans' => [
                    ['jawaban' => 'GET mengirimkan data formulir melalui URL, sedangkan POST mengirimkannya secara tersembunyi', 'is_true' => true],
                    ['jawaban' => 'GET digunakan untuk mengirim data formulir yang bersifat sensitif, sedangkan POST digunakan untuk data yang tidak bersifat sensitif', 'is_true' => false],
                    ['jawaban' => 'GET dan POST dapat digunakan secara bergantian tanpa perbedaan', 'is_true' => false],
                    ['jawaban' => 'GET dan POST tidak dapat digunakan untuk pengiriman data formulir', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan GPU (Graphics Processing Unit) dalam komputer?',
                'jawabans' => [
                    ['jawaban' => 'Graphics Processing Unit, bagian utama dari CPU', 'is_true' => false],
                    ['jawaban' => 'Graphics Processing Unit, bertanggung jawab untuk memproses dan menghasilkan output grafis', 'is_true' => true],
                    ['jawaban' => 'Graphics Printing Unit, perangkat untuk mencetak gambar', 'is_true' => false],
                    ['jawaban' => 'Graphics Power Unit, bagian yang memberikan daya untuk output grafis', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa fungsi dari motherboard dalam sebuah komputer?',
                'jawabans' => [
                    ['jawaban' => 'Menyimpan data dan program', 'is_true' => false],
                    ['jawaban' => 'Menghubungkan dan mengkoordinasikan seluruh komponen komputer', 'is_true' => true],
                    ['jawaban' => 'Mengontrol tampilan grafis', 'is_true' => false],
                    ['jawaban' => 'Menghasilkan daya untuk komputer', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa itu browser web?',
                'jawabans' => [
                    ['jawaban' => 'Perangkat keras untuk browsing web', 'is_true' => false],
                    ['jawaban' => 'Program yang digunakan untuk menjelajahi dan menampilkan halaman web', 'is_true' => true],
                    ['jawaban' => 'Sebuah protokol komunikasi', 'is_true' => false],
                    ['jawaban' => 'Sebuah perangkat lunak pengolah kata', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa perbedaan antara internet dan intranet?',
                'jawabans' => [
                    ['jawaban' => 'Internet adalah jaringan lokal, sedangkan intranet adalah jaringan global', 'is_true' => false],
                    ['jawaban' => 'Internet adalah jaringan global yang dapat diakses publik, sedangkan intranet adalah jaringan privat di dalam organisasi', 'is_true' => true],
                    ['jawaban' => 'Internet dan intranet adalah istilah yang dapat digunakan secara bergantian', 'is_true' => false],
                    ['jawaban' => 'Internet adalah layanan telepon, sedangkan intranet adalah layanan internet', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan alamat IP (Internet Protocol) dalam konteks jaringan komputer?',
                'jawabans' => [
                    ['jawaban' => 'Alamat yang digunakan untuk mengirim surat elektronik', 'is_true' => false],
                    ['jawaban' => 'Sebuah angka unik yang diberikan untuk mengidentifikasi perangkat di jaringan', 'is_true' => true],
                    ['jawaban' => 'Alamat yang digunakan untuk mengakses halaman web', 'is_true' => false],
                    ['jawaban' => 'Sebuah kode untuk mengamankan jaringan WiFi', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Perangkat keras berikut ini yang bukan termasuk memori internal adalah....',
                'jawabans' => [
                    ['jawaban' => 'RAM', 'is_true' => false],
                    ['jawaban' => 'Hard disk', 'is_true' => true],
                    ['jawaban' => 'Flashdisk', 'is_true' => false],
                    ['jawaban' => 'CPU', 'is_true' => false]
                ]
            ],
            [
                'pertanyaan' => 'Bahasa pemrograman yang sering digunakan untuk membuat website adalah....',
                'jawabans' => [
                    ['jawaban' => 'Python', 'is_true' => false],
                    ['jawaban' => 'Java', 'is_true' => false],
                    ['jawaban' => 'C++', 'is_true' => false],
                    ['jawaban' => 'HTML', 'is_true' => true]
                ]
            ],
            [
                'pertanyaan' => 'Internet dapat diakses menggunakan perangkat berikut, kecuali ....',
                'jawabans' => [
                    ['jawaban' => 'Smartphone', 'is_true' => false],
                    ['jawaban' => 'Laptop', 'is_true' => false],
                    ['jawaban' => 'Televisi', 'is_true' => true],
                    ['jawaban' => 'Komputer desktop', 'is_true' => false]
                ]
            ],
            [
                'pertanyaan' => 'Istilah yang tepat untuk menggambarkan pembajakan software adalah....',
                'jawabans' => [
                    ['jawaban' => 'Bug', 'is_true' => false],
                    ['jawaban' => 'Pirated software', 'is_true' => true],
                    ['jawaban' => 'Open source', 'is_true' => false],
                    ['jawaban' => 'Update', 'is_true' => false]
                ]
            ],
            [
                'pertanyaan' => 'Tindakan berikut ini yang bukan termasuk penggunaan internet yang bertanggung jawab adalah....',
                'jawabans' => [
                    ['jawaban' => 'Menghormati hak cipta karya digital', 'is_true' => false],
                    ['jawaban' => 'Berhati-hati dalam membagikan informasi pribadi', 'is_true' => false],
                    ['jawaban' => 'Melakukan cyberbullying terhadap orang lain', 'is_true' => true],
                    ['jawaban' => 'Menggunakan internet untuk belajar dan berinteraksi', 'is_true' => false]
                ]
            ],
            [
                'pertanyaan' => 'Komponen komputer yang berfungsi menyimpan data secara permanen adalah:',
                'jawabans' => [
                    ['jawaban' => 'CPU', 'is_true' => false],
                    ['jawaban' => 'RAM', 'is_true' => false],
                    ['jawaban' => 'Hard Disk', 'is_true' => true],
                    ['jawaban' => 'Mouse', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Software yang berfungsi untuk melindungi komputer dari virus dan malware adalah:',
                'jawabans' => [
                    ['jawaban' => 'Sistem Operasi', 'is_true' => false],
                    ['jawaban' => 'Aplikasi pengolah kata', 'is_true' => false],
                    ['jawaban' => 'Perangkat lunak antivirus', 'is_true' => true],
                    ['jawaban' => 'Browser internet', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Bahasa pemrograman yang sering digunakan untuk membuat aplikasi mobile adalah:',
                'jawabans' => [
                    ['jawaban' => 'HTML', 'is_true' => false],
                    ['jawaban' => 'Java', 'is_true' => true],
                    ['jawaban' => 'Python', 'is_true' => false],
                    ['jawaban' => 'Swift', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Perangkat lunak berikut ini termasuk ke dalam jenis software aplikasi:',
                'jawabans' => [
                    ['jawaban' => 'Sistem Operasi Windows', 'is_true' => false],
                    ['jawaban' => 'Aplikasi Photoshop', 'is_true' => true],
                    ['jawaban' => 'Driver printer', 'is_true' => false],
                    ['jawaban' => 'Microsoft Office', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Istilah berikut yang TIDAK berhubungan dengan jaringan komputer adalah:',
                'jawabans' => [
                    ['jawaban' => 'Wifi', 'is_true' => false],
                    ['jawaban' => 'Bandwidth', 'is_true' => false],
                    ['jawaban' => 'Virus', 'is_true' => true],
                    ['jawaban' => 'Server', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Perangkat lunak yang digunakan untuk membuat presentasi adalah:',
                'jawabans' => [
                    ['jawaban' => 'Microsoft Word', 'is_true' => false],
                    ['jawaban' => 'Microsoft Excel', 'is_true' => false],
                    ['jawaban' => 'Microsoft PowerPoint', 'is_true' => true],
                    ['jawaban' => 'Adobe Photoshop', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan algoritma?',
                'jawabans' => [
                    ['jawaban' => 'Bahasa pemrograman', 'is_true' => false],
                    ['jawaban' => 'Komponen perangkat keras', 'is_true' => false],
                    ['jawaban' => 'Urutan langkah untuk menyelesaikan masalah', 'is_true' => true],
                    ['jawaban' => 'Perangkat lunak untuk mengakses internet', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang kamu gunakan untuk mengetik huruf dan angka di komputer?',
                'jawabans' => [
                    ['jawaban' => 'Layar monitor', 'is_true' => false],
                    ['jawaban' => 'Mouse', 'is_true' => false],
                    ['jawaban' => 'Keyboard', 'is_true' => true],
                    ['jawaban' => 'Speaker', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa fungsi ikon "Recycle Bin" di komputer?',
                'jawabans' => [
                    ['jawaban' => 'Untuk menyimpan file secara permanen', 'is_true' => false],
                    ['jawaban' => 'Untuk membuka program', 'is_true' => false],
                    ['jawaban' => 'Untuk menghapus file sementara', 'is_true' => true],
                    ['jawaban' => 'Untuk mengatur volume suara', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Kamu ingin mencari informasi tentang hewan peliharaan di internet. Apa yang kamu lakukan?',
                'jawabans' => [
                    ['jawaban' => 'Buka aplikasi email', 'is_true' => false],
                    ['jawaban' => 'Buka aplikasi game', 'is_true' => false],
                    ['jawaban' => 'Buka browser internet dan ketikkan kata kunci "hewan peliharaan" di mesin pencari', 'is_true' => true],
                    ['jawaban' => 'Buka aplikasi kamera', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa perbedaan antara aplikasi dan website?',
                'jawabans' => [
                    ['jawaban' => 'Aplikasi diunduh dan diinstal di komputer, sedangkan website diakses melalui browser internet.', 'is_true' => true],
                    ['jawaban' => 'Aplikasi hanya bisa digunakan secara online, sedangkan website bisa digunakan offline.', 'is_true' => false],
                    ['jawaban' => 'Aplikasi gratis, sedangkan website berbayar.', 'is_true' => false],
                    ['jawaban' => 'Aplikasi hanya untuk bermain game, sedangkan website untuk kegiatan serius.', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Kamu ingin menonton video YouTube di komputer. Apa yang kamu perlukan?',
                'jawabans' => [
                    ['jawaban' => 'Kabel HDMI', 'is_true' => false],
                    ['jawaban' => 'Mikrofon', 'is_true' => false],
                    ['jawaban' => 'Koneksi internet dan browser internet', 'is_true' => true],
                    ['jawaban' => 'Printer', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Saat mengetik di komputer, tombol apa yang digunakan untuk menghapus huruf di sebelah kiri kursor?',
                'jawabans' => [
                    ['jawaban' => 'Delete', 'is_true' => false],
                    ['jawaban' => 'Backspace', 'is_true' => true],
                    ['jawaban' => 'Enter', 'is_true' => false],
                    ['jawaban' => 'Shift', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa ikon berbentuk amplop biasanya digunakan untuk mewakili apa di komputer?',
                'jawabans' => [
                    ['jawaban' => 'Musik', 'is_true' => false],
                    ['jawaban' => 'Foto', 'is_true' => false],
                    ['jawaban' => 'Email', 'is_true' => true],
                    ['jawaban' => 'Permainan', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Ketika menyalakan komputer, apa gambar pertama yang biasanya muncul di layar?',
                'jawabans' => [
                    ['jawaban' => 'Foto desktop', 'is_true' => false],
                    ['jawaban' => 'Peringatan virus', 'is_true' => false],
                    ['jawaban' => 'Layar hitam', 'is_true' => false],
                    ['jawaban' => 'Logo Windows atau sistem operasi lainnya', 'is_true' => true],
                ],
            ],
            [
                'pertanyaan' => 'Perangkat keras komputer yang berfungsi mengeluarkan suara adalah:',
                'jawabans' => [
                    ['jawaban' => 'Keyboard', 'is_true' => false],
                    ['jawaban' => 'Mouse', 'is_true' => false],
                    ['jawaban' => 'Speaker', 'is_true' => true],
                    ['jawaban' => 'Webcam', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Untuk menyimpan dokumen yang sedang kamu kerjakan di komputer, tombol apa yang biasanya digunakan?',
                'jawabans' => [
                    ['jawaban' => 'Ctrl + C', 'is_true' => false],
                    ['jawaban' => 'Ctrl + P', 'is_true' => false],
                    ['jawaban' => 'Ctrl + S', 'is_true' => true],
                    ['jawaban' => 'Ctrl + O', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Kamu sedang mengerjakan tugas sekolah di Microsoft Word dan ingin menyalin tulisan dari website lain. Tombol pintas apa yang dapat digunakan untuk melakukan ini?',
                'jawabans' => [
                    ['jawaban' => 'Ctrl + X', 'is_true' => false],
                    ['jawaban' => 'Ctrl + C', 'is_true' => true],
                    ['jawaban' => 'Ctrl + V', 'is_true' => false],
                    ['jawaban' => 'Ctrl + P', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa kepanjangan dari istilah IT dan apa bidang yang dipelajarinya?',
                'jawabans' => [
                    ['jawaban' => 'Information Technology, mempelajari tentang perangkat lunak dan perangkat keras komputer.', 'is_true' => true],
                    ['jawaban' => 'Internet Technology, mempelajari tentang jaringan dan komunikasi internet.', 'is_true' => false],
                    ['jawaban' => 'Intelligent Technology, mempelajari tentang kecerdasan buatan dan robotika.', 'is_true' => false],
                    ['jawaban' => 'Individual Technology, mempelajari tentang penggunaan teknologi untuk individu.', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa fungsi dari tombol "F5" pada keyboard komputer?',
                'jawabans' => [
                    ['jawaban' => 'Menutup program yang sedang aktif.', 'is_true' => false],
                    ['jawaban' => 'Mengubah ukuran jendela program.', 'is_true' => false],
                    ['jawaban' => 'Menyegarkan halaman web yang sedang dibuka.', 'is_true' => true],
                    ['jawaban' => 'Mencari teks tertentu dalam dokumen.', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Kamu ingin menyimpan foto yang kamu edit di Photoshop. Perintah apa yang digunakan untuk melakukan ini?',
                'jawabans' => [
                    ['jawaban' => 'File > Open', 'is_true' => false],
                    ['jawaban' => 'File > Save', 'is_true' => true],
                    ['jawaban' => 'File > New', 'is_true' => false],
                    ['jawaban' => 'File > Print', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan istilah "spam" dalam dunia email?',
                'jawabans' => [
                    ['jawaban' => 'Email yang berisi informasi penting dan berguna.', 'is_true' => false],
                    ['jawaban' => 'Email yang berisi promosi atau iklan yang tidak diinginkan.', 'is_true' => true],
                    ['jawaban' => 'Email yang berisi tautan berbahaya atau malware.', 'is_true' => false],
                    ['jawaban' => 'Email yang dikirim ke banyak penerima sekaligus tanpa izin.', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa fungsi dari tombol "Caps Lock" pada keyboard?',
                'jawabans' => [
                    ['jawaban' => 'Mengubah semua huruf menjadi huruf kecil.', 'is_true' => false],
                    ['jawaban' => 'Mengubah semua huruf menjadi huruf besar.', 'is_true' => true],
                    ['jawaban' => 'Mengunci kursor pada satu tempat.', 'is_true' => false],
                    ['jawaban' => 'Mengubah bahasa keyboard.', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan istilah "hacker"?',
                'jawabans' => [
                    ['jawaban' => 'Orang yang ahli dalam menggunakan komputer.', 'is_true' => false],
                    ['jawaban' => 'Orang yang membuat program komputer.', 'is_true' => false],
                    ['jawaban' => 'Orang yang merusak sistem keamanan komputer untuk mendapatkan keuntungan pribadi.', 'is_true' => true],
                    ['jawaban' => 'Orang yang menjual perangkat keras komputer.', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang harus dilakukan ketika komputer hang atau macet?',
                'jawabans' => [
                    ['jawaban' => 'Tunggu beberapa saat, mungkin komputer akan kembali normal.', 'is_true' => false],
                    ['jawaban' => 'Tekan tombol "Ctrl + Alt + Delete" secara bersamaan untuk membuka Task Manager.', 'is_true' => true],
                    ['jawaban' => 'Matikan paksa komputer dengan menekan tombol power selama beberapa detik.', 'is_true' => false],
                    ['jawaban' => 'Cabut kabel power komputer dan pasang kembali.', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa fungsi dari tombol "Windows" pada keyboard?',
                'jawabans' => [
                    ['jawaban' => 'Membuka menu Start.', 'is_true' => true],
                    ['jawaban' => 'Mengubah ukuran jendela program.', 'is_true' => false],
                    ['jawaban' => 'Mematikan komputer.', 'is_true' => false],
                    ['jawaban' => 'Mengunci layar komputer.', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa fungsi dari tombol "Esc" pada keyboard?',
                'jawabans' => [
                    ['jawaban' => 'Membatalkan suatu tindakan.', 'is_true' => true],
                    ['jawaban' => 'Kembali ke halaman sebelumnya.', 'is_true' => false],
                    ['jawaban' => 'Membuka menu Start.', 'is_true' => false],
                    ['jawaban' => 'Mengunci layar komputer.', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan istilah "cybersecurity"?',
                'jawabans' => [
                    ['jawaban' => 'Praktek melindungi sistem komputer dari serangan siber.', 'is_true' => true],
                    ['jawaban' => 'Praktek menggunakan internet dengan aman dan bertanggung jawab.', 'is_true' => false],
                    ['jawaban' => 'Praktek membuat software komputer.', 'is_true' => false],
                    ['jawaban' => 'Praktek merakit perangkat keras komputer.', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang harus dilakukan ketika kamu menemukan file yang mencurigakan di komputer?',
                'jawabans' => [
                    ['jawaban' => 'Jalankan file tersebut untuk melihat isinya.', 'is_true' => false],
                    ['jawaban' => 'Hapus file tersebut.', 'is_true' => false],
                    ['jawaban' => 'Scan file tersebut dengan antivirus.', 'is_true' => true],
                    ['jawaban' => 'Laporkan file tersebut ke pihak berwenang.', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan istilah "artificial intelligence" (AI)?',
                'jawabans' => [
                    ['jawaban' => 'Kecerdasan buatan, cabang ilmu komputer yang mempelajari tentang pembuatan mesin yang dapat berpikir dan bertindak seperti manusia.', 'is_true' => true],
                    ['jawaban' => 'Jenis perangkat lunak komputer.', 'is_true' => false],
                    ['jawaban' => 'Bahasa pemrograman komputer.', 'is_true' => false],
                    ['jawaban' => 'Komponen perangkat keras komputer.', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa fungsi dari tombol "Ctrl + V" pada keyboard?',
                'jawabans' => [
                    ['jawaban' => 'Menyalin teks yang dipilih.', 'is_true' => false],
                    ['jawaban' => 'Memotong teks yang dipilih.', 'is_true' => false],
                    ['jawaban' => 'Menghapus teks yang dipilih.', 'is_true' => false],
                    ['jawaban' => 'Menempelkan teks yang telah disalin atau dipotong.', 'is_true' => true],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan istilah "internet of things" (IoT)?',
                'jawabans' => [
                    ['jawaban' => 'Jaringan perangkat fisik yang terhubung ke internet dan dapat mengumpulkan dan bertukar data.', 'is_true' => true],
                    ['jawaban' => 'Jenis perangkat lunak komputer.', 'is_true' => false],
                    ['jawaban' => 'Bahasa pemrograman komputer.', 'is_true' => false],
                    ['jawaban' => 'Komponen perangkat keras komputer.', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa fungsi dari tombol "Shift" pada keyboard?',
                'jawabans' => [
                    ['jawaban' => 'Mengubah huruf menjadi huruf besar.', 'is_true' => true],
                    ['jawaban' => 'Mengubah huruf menjadi huruf kecil.', 'is_true' => false],
                    ['jawaban' => 'Menghapus teks yang dipilih.', 'is_true' => false],
                    ['jawaban' => 'Memindahkan kursor ke atas atau ke bawah.', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan istilah "domain name"?',
                'jawabans' => [
                    ['jawaban' => 'Nama unik yang digunakan untuk mengidentifikasi website di internet.', 'is_true' => true],
                    ['jawaban' => 'Alamat IP website di internet.', 'is_true' => false],
                    ['jawaban' => 'Nama server yang menyimpan website.', 'is_true' => false],
                    ['jawaban' => 'Jenis perangkat lunak komputer.', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa fungsi dari tombol "Enter" pada keyboard?',
                'jawabans' => [
                    ['jawaban' => 'Membuka baris baru.', 'is_true' => false],
                    ['jawaban' => 'Menghapus teks yang dipilih.', 'is_true' => false],
                    ['jawaban' => 'Membatalkan suatu tindakan.', 'is_true' => false],
                    ['jawaban' => 'Mengirimkan pesan atau formulir.', 'is_true' => true],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang harus dilakukan ketika komputer tidak mau menyala?',
                'jawabans' => [
                    ['jawaban' => 'Periksa apakah kabel power sudah terpasang dengan benar.', 'is_true' => true],
                    ['jawaban' => 'Periksa apakah baterai CMOS sudah habis.', 'is_true' => false],
                    ['jawaban' => 'Periksa apakah ada komponen hardware yang rusak.', 'is_true' => false],
                    ['jawaban' => 'Instal ulang sistem operasi komputer.', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan istilah "cybercrime"?',
                'jawabans' => [
                    ['jawaban' => 'Kejahatan yang dilakukan dengan menggunakan teknologi komputer.', 'is_true' => true],
                    ['jawaban' => 'Jenis perangkat lunak komputer.', 'is_true' => false],
                    ['jawaban' => 'Bahasa pemrograman komputer.', 'is_true' => false],
                    ['jawaban' => 'Komponen perangkat keras komputer.', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan istilah "port"?',
                'jawabans' => [
                    ['jawaban' => 'Koneksi antar perangkat keras komputer.', 'is_true' => false],
                    ['jawaban' => 'Koneksi antar perangkat lunak komputer.', 'is_true' => false],
                    ['jawaban' => 'Koneksi antar komputer dalam jaringan.', 'is_true' => true],
                    ['jawaban' => 'Koneksi antar website di internet.', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa fungsi dari tombol "Alt" pada keyboard?',
                'jawabans' => [
                    ['jawaban' => 'Mengubah huruf menjadi huruf besar.', 'is_true' => false],
                    ['jawaban' => 'Mengubah huruf menjadi huruf kecil.', 'is_true' => false],
                    ['jawaban' => 'Menghapus teks yang dipilih.', 'is_true' => false],
                    ['jawaban' => 'Mengakses menu dan pintasan keyboard.', 'is_true' => true],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang harus dilakukan ketika kamu lupa password email?',
                'jawabans' => [
                    ['jawaban' => 'Gunakan software pembobol password.', 'is_true' => false],
                    ['jawaban' => 'Hubungi administrator email untuk mereset password.', 'is_true' => true],
                    ['jawaban' => 'Buat akun email baru.', 'is_true' => false],
                    ['jawaban' => 'Hapus akun email lama.', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa fungsi dari tombol "Tab" pada keyboard?',
                'jawabans' => [
                    ['jawaban' => 'Memindahkan kursor ke kiri.', 'is_true' => false],
                    ['jawaban' => 'Memindahkan kursor ke kanan.', 'is_true' => false],
                    ['jawaban' => 'Memindahkan kursor ke atas.', 'is_true' => false],
                    ['jawaban' => 'Memindahkan kursor ke bawah.', 'is_true' => true],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan istilah "blockchain"?',
                'jawabans' => [
                    ['jawaban' => 'Teknologi penyimpanan data yang aman dan terdesentralisasi.', 'is_true' => true],
                    ['jawaban' => 'Jenis perangkat lunak komputer.', 'is_true' => false],
                    ['jawaban' => 'Bahasa pemrograman komputer.', 'is_true' => false],
                    ['jawaban' => 'Komponen perangkat keras komputer.', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan istilah "metaverse"?',
                'jawabans' => [
                    ['jawaban' => 'Dunia virtual 3D yang terhubung dengan internet.', 'is_true' => true],
                    ['jawaban' => 'Jenis perangkat lunak komputer.', 'is_true' => false],
                    ['jawaban' => 'Bahasa pemrograman komputer.', 'is_true' => false],
                    ['jawaban' => 'Komponen perangkat keras komputer.', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa nama perangkat lunak yang digunakan untuk menjelajah internet?',
                'jawabans' => [
                    ['jawaban' => 'Microsoft Word', 'is_true' => false],
                    ['jawaban' => 'Google Chrome', 'is_true' => true],
                    ['jawaban' => 'Adobe Photoshop', 'is_true' => false],
                    ['jawaban' => 'WinRAR', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Berikut adalah beberapa aplikasi yang sering digunakan: WhatsApp, Instagram, Facebook, Twitter, dan Google Maps. Manakah di antara aplikasi tersebut yang bukan termasuk media sosial?',
                'jawabans' => [
                    ['jawaban' => 'WhatsApp', 'is_true' => true],
                    ['jawaban' => 'Instagram', 'is_true' => true],
                    ['jawaban' => 'Facebook', 'is_true' => true],
                    ['jawaban' => 'Twitter', 'is_true' => true],
                    ['jawaban' => 'Google Maps', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa fungsi utama aplikasi Google Maps?',
                'jawabans' => [
                    ['jawaban' => 'Mengirim pesan kepada teman', 'is_true' => false],
                    ['jawaban' => 'Berbagi foto dan video', 'is_true' => false],
                    ['jawaban' => 'Mencari informasi tentang suatu tempat', 'is_true' => true],
                    ['jawaban' => 'Memesan makanan secara online', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa yang dimaksud dengan istilah "hashtag" di media sosial?',
                'jawabans' => [
                    ['jawaban' => 'Kata kunci yang digunakan untuk mencari informasi di internet', 'is_true' => false],
                    ['jawaban' => 'Kata kunci yang digunakan untuk mengkategorikan konten di media sosial', 'is_true' => true],
                    ['jawaban' => 'Kata kunci yang digunakan untuk membuat website', 'is_true' => false],
                    ['jawaban' => 'Kata kunci yang digunakan untuk membuat aplikasi', 'is_true' => false],
                ],
            ],
            [
                'pertanyaan' => 'Apa saja tips untuk menjaga privasi di media sosial?',
                'jawabans' => [
                    ['jawaban' => 'Jangan membagikan informasi pribadi di profil akun', 'is_true' => true],
                    ['jawaban' => 'Gunakan password yang kuat dan unik', 'is_true' => true],
                    ['jawaban' => 'Berhati-hatilah terhadap penipuan online', 'is_true' => true],
                    ['jawaban' => 'Semua benar', 'is_true' => true],
                ],
            ],



            // ... (pertanyaan dan jawaban lainnya)
        ];

        foreach ($data as $item) {
            // Insert pertanyaan
            $pertanyaanId = DB::table('pertanyaans')->insertGetId([
                'pertanyaan' => $item['pertanyaan'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            // Insert jawabans
            $jawabans = [];
            foreach ($item['jawabans'] as $jawaban) {
                $jawabans[] = [
                    'pertanyaan_id' => $pertanyaanId,
                    'jawaban' => $jawaban['jawaban'],
                    'is_true' => $jawaban['is_true'],
                    'created_at' => now(),
                    'updated_at' => now(),
                ];
            }
            DB::table('jawabans')->insert($jawabans);
        }
    }
}
