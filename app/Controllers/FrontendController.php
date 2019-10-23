<?php

namespace App\Controllers;

use Illuminate\Http\Request;
use App\Controllers\Controller;

class FrontendController extends Controller {
     /**
     * Membuat sebuah objek
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome(Request $request)
    {   
        $theme='dore';
        if (\Auth::check()) {
            return redirect(route('dashboard.index'));
        }else{
            $bulan_realisasi = 9;
            $ta=2020;
            $jumlah_opd = \DB::table('tmOrg')
                                ->where('TA',$ta)
                                ->count('OrgID');

            $data_visi = \App\Models\RPJMD\RPJMDVisiModel::find(config('simonev.rpjmd_visi_id'));
            $rpjmd_tahun_mulai = $data_visi->TA_Awal+1;

            $jumlah_program = \DB::table('tmPrg')
                                    ->where('TA',$rpjmd_tahun_mulai)
                                    ->count('PrgID');

            $jumlah_kegiatan = \DB::table('s_targetkinerja_opd')
                    ->where('TA',$ta)
                    ->where('bulan',$bulan_realisasi)
                    ->sum('jumlah_kegiatan1');

            $pagudana=\DB::table('s_targetkinerja_opd')
                        ->where('TA',$ta)
                        ->where('bulan',$bulan_realisasi)
                        ->sum('pagudinas1');

            $realisasi=\DB::table('s_targetkinerja_opd')
                        ->where('TA',$ta)
                        ->where('bulan',$bulan_realisasi)
                        ->sum('realisasi_keuangan1');
            
            $sisa_anggaran=$pagudana-$realisasi;

            $target_realisasi=\DB::table('s_targetkinerja_opd')
                                    ->where('TA',$ta)
                                    ->where('bulan',$bulan_realisasi)
                                    ->sum('persen_target_keuangan1');                
            $persen_target_keuangan = \Helper::formatPecahan($target_realisasi,$jumlah_opd);

            $persen_realisasi=\DB::table('s_targetkinerja_opd')
                                    ->where('TA',$ta)
                                    ->where('bulan',$bulan_realisasi)
                                    ->sum('persen_realisasi_keuangan1');
            $persen_realisasi_keuangan = \Helper::formatPecahan($persen_realisasi,$jumlah_opd);
            
            $t_fisik=\DB::table('s_targetkinerja_opd')
                                    ->where('TA',$ta)
                                    ->where('bulan',$bulan_realisasi)
                                    ->sum('target_fisik1');

            $target_fisik = \Helper::formatPecahan($t_fisik,$jumlah_opd);

            $r_fisik=\DB::table('s_targetkinerja_opd')
                                    ->where('TA',$ta)
                                    ->where('bulan',$bulan_realisasi)
                                    ->sum('realisasi_fisik1');
            $realisasi_fisik = \Helper::formatPecahan($r_fisik,$jumlah_opd);;

            $data = [];
            return view("pages.$theme.dashboard.indexFront")->with([
                                                        'page_active' => 'dashboard',
                                                        'jumlah_opd' => $jumlah_opd,
                                                        'bulan_realisasi'=>$bulan_realisasi,
                                                        'data' => $data,
                                                        'pagudana' => $pagudana,
                                                        'jumlah_program' => $jumlah_program,
                                                        'jumlah_kegiatan' => $jumlah_kegiatan,
                                                        'realisasi' => $realisasi,
                                                        'sisa_anggaran' => $sisa_anggaran,
                                                        'persen_target_keuangan' => $persen_target_keuangan,
                                                        'persen_realisasi_keuangan' => $persen_realisasi_keuangan,
                                                        'target_fisik' => $target_fisik,
                                                        'realisasi_fisik' => $realisasi_fisik,                                                        
            ]);           
        }                       
    }         
}