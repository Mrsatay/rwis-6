<?php

namespace App\Http\Controllers;

use App\Models\Acara;
use App\Models\Bansos;
use App\Models\Iuran;
use App\Models\Kk;
use App\Models\laporan;
use App\Models\Rumah;
use App\Models\umkm;
use App\Models\User;
use App\Models\Warga;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard.rw');
    }
    public function rw()
    {
        $laporan = Laporan::orderByRaw("FIELD(status,'Belum Selesai', 'Selesai')")->get();
        $user = Auth::user();


        $iurans = Iuran::selectRaw('MONTH(tanggal) as month, SUM(total) as total')
            ->groupBy('month')
            ->orderBy('month')
            ->get();

        $dates = $iurans->pluck('month')->map(function ($month) {
            return Carbon::create()->month($month)->format('F'); // Mengubah angka bulan menjadi nama bulan
        });
        $totals = $iurans->pluck('total');

        $totalWarga = Warga::count();
        $totalKk = Kk::count();
        $totalRumah = Rumah::count();
        $totalUmkm = umkm::count();
        $totalBansos = Bansos::count();
        $totalLaporan = laporan::count();
        $totalAcara = Acara::count();

        // Ambil daftar pengirim beserta jumlah laporan mereka
        $pelapor = Laporan::selectRaw('pengirim, COUNT(*) as total_laporan')
        ->groupBy('pengirim')
        ->orderBy('total_laporan', 'desc')
        ->get();

        $lastUpdated = max(
            Iuran::latest('updated_at')->value('updated_at'),
            Laporan::latest('updated_at')->value('updated_at'),
            Warga::latest('updated_at')->value('updated_at'),
            Kk::latest('updated_at')->value('updated_at'),
            Rumah::latest('updated_at')->value('updated_at'),
            Umkm::latest('updated_at')->value('updated_at')
        );

        $warga = Warga::select('agama', 'jenis_kelamin', Warga::raw('count(*) as total'))
        ->groupBy('agama', 'jenis_kelamin')
        ->get();

        // Ambil data penyaluran bansos dari model
        $penyaluranBansos = Bansos::all();

        //pie chart
        $table_warga = Warga::all();
        $pie= [
            'kerja_produktif' => 0,
            'kerja_non_produktif' => 0,
            'non_kerja_produktif' => 0,
            'non_kerja_non_produktif' => 0,
        ];
    
        foreach ($table_warga as $w) {
            if ($w->pekerjaan !== 'Tidak Bekerja') {
                if ($w->usia >= 15 && $w->usia <= 64) {
                    $pie['kerja_produktif']++;
                } else {
                    $pie['kerja_non_produktif']++;
                }
            } else {
                if ($w->usia >= 15 && $w->usia <= 64) {
                    $pie['non_kerja_produktif']++;
                } else {
                    $pie['non_kerja_non_produktif']++;
                }
            }
        }
        $total_warga = Warga::count();

        return view('dashboard.rw',compact(
        'laporan',
        'dates',
        'totals',
        'user',
        'totalWarga',
        'totalKk',
        'totalRumah',
        'totalUmkm',
        'totalBansos',
        'totalLaporan',
        'totalAcara',
        'pelapor',
        'lastUpdated',
        'warga',
        'penyaluranBansos',
        'pie',
        'total_warga'));
    }
    
}
