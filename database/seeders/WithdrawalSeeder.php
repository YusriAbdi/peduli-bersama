<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Withdrawal;
use Illuminate\Support\Str;

class WithdrawalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $withdrawals = [
            [
                'reference_number' => 'WD-' . strtoupper(Str::random(10)),
                'campaign_id' => 1, // Bantuan Korban Banjir Bandang Jember
                'user_id' => 3, // Creator user
                'amount' => 5000000,
                'status' => 'completed',
                'bank_name' => 'Bank Central Asia (BCA)',
                'account_number' => '1234567890',
                'account_name' => 'Creator User',
                'bank_branch' => 'Jakarta Pusat',
                'bank_code' => '014',
                'purpose' => 'Pembelian dan distribusi sembako untuk korban banjir di Jember',
                'evidence_file' => null,
                'notes' => 'Dana digunakan untuk membeli sembako dan kebutuhan pokok korban banjir',
                'approved_by' => 1, // Admin user
                'approved_at' => now()->subDay(),
                'processed_by' => 1, // Admin user
                'processed_at' => now(),
            ],
            [
                'reference_number' => 'WD-' . strtoupper(Str::random(10)),
                'campaign_id' => 2, // Bantu Biaya Operasi Jantung Dodi
                'user_id' => 3, // Creator user
                'amount' => 10000000,
                'status' => 'approved',
                'bank_name' => 'Bank Mandiri',
                'account_number' => '9876543210',
                'account_name' => 'Creator User',
                'bank_branch' => 'Surabaya',
                'bank_code' => '008',
                'purpose' => 'Pembayaran uang muka operasi jantung Dodi di Rumah Sakit Harapan',
                'evidence_file' => null,
                'notes' => 'Pembayaran uang muka operasi yang dijadwalkan tanggal 30 Juni 2025',
                'approved_by' => 1, // Admin user
                'approved_at' => now(),
                'processed_by' => null,
                'processed_at' => null,
            ],
            [
                'reference_number' => 'WD-' . strtoupper(Str::random(10)),
                'campaign_id' => 3, // Renovasi Masjid Al-Ikhlas
                'user_id' => 3, // Creator user
                'amount' => 15000000,
                'status' => 'pending',
                'bank_name' => 'Bank Negara Indonesia (BNI)',
                'account_number' => '0123456789',
                'account_name' => 'Creator User',
                'bank_branch' => 'Bandung',
                'bank_code' => '009',
                'purpose' => 'Pembelian bahan material untuk renovasi masjid',
                'evidence_file' => null,
                'notes' => 'Dana akan digunakan untuk membeli semen, pasir, batu bata, dan material lainnya',
                'approved_by' => null,
                'approved_at' => null,
                'processed_by' => null,
                'processed_at' => null,
            ],
            [
                'reference_number' => 'WD-' . strtoupper(Str::random(10)),
                'campaign_id' => 4, // Bantuan Modal Usaha UMKM
                'user_id' => 5, // Creator 2
                'amount' => 20000000,
                'status' => 'rejected',
                'bank_name' => 'Bank Rakyat Indonesia (BRI)',
                'account_number' => '5678901234',
                'account_name' => 'Creator 2',
                'bank_branch' => 'Yogyakarta',
                'bank_code' => '002',
                'purpose' => 'Pembayaran modal usaha untuk 5 UMKM terpilih',
                'evidence_file' => null,
                'notes' => 'Dokumen pendukung belum lengkap, mohon lengkapi terlebih dahulu',
                'approved_by' => 1, // Admin user
                'approved_at' => now()->subDays(2),
                'processed_by' => null,
                'processed_at' => null,
            ],
            [
                'reference_number' => 'WD-' . strtoupper(Str::random(10)),
                'campaign_id' => 5, // Beasiswa Anak Yatim
                'user_id' => 5, // Creator 2
                'amount' => 25000000,
                'status' => 'pending',
                'bank_name' => 'Bank Syariah Indonesia (BSI)',
                'account_number' => '6789012345',
                'account_name' => 'Creator 2',
                'bank_branch' => 'Malang',
                'bank_code' => '451',
                'purpose' => 'Pembayaran beasiswa untuk 10 anak yatim',
                'evidence_file' => null,
                'notes' => 'Dana akan digunakan untuk biaya sekolah dan kebutuhan pendidikan',
                'approved_by' => null,
                'approved_at' => null,
                'processed_by' => null,
                'processed_at' => null,
            ],
        ];

        foreach ($withdrawals as $withdrawal) {
            Withdrawal::create($withdrawal);
        }
    }
}
