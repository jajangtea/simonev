@if (count($datauraian) > 0)
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table">
                <thead class="thead-light">
                    <tr>
                        <th scope="col" width="55">NO</th>
                        <th scope="col" width="120">
                            <a class="column-sort" id="col-Kd_Urusan" data-order="{{$direction}}" href="#">
                                NAMA PAKET PEKERJAAN
                            </a>
                        </th>
                        <th scope="col">
                            <a class="column-sort" id="col-Nm_Bidang" data-order="{{$direction}}" href="#">
                                HARGA SAT.
                            </a>
                        </th>
                        <th scope="col" width="120">
                            <a class="column-sort" id="col-Nm_Urusan" data-order="{{$direction}}" href="#">
                                PAGU URAIAN
                            </a>
                        </th>
                        <th scope="col" width="120">REALISASI</th>
                        <th scope="col" width="70">SISA</th>
                        <th scope="col" width="70">FISIK (%)(</th>
                        <th scope="col" width="120">AKSI</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key=>$item)
                    <tr>
                        <th scope="row">
                            {{ ($data->currentpage()-1) * $data->perpage() + $key + 1 }}
                            </td>
                        <td>{{$item->kode_kegiatan}}</td>
                        <td>{{$item->KgtNm}}</td>
                        <td>{{Helper::formatUang($item->PaguDana1)}}</td>
                        <td>0</td>
                        <td>0</td>
                        <td>0</td>
                        <td>
                            <div class="input-group-append">
                                <a href="{{route('rkakegiatanmurni.show',['uuid'=>$item->RKAID])}}" class="btn btn-primary btn-xs mr-sm-2 default"  title="Detail Data Kegiatan">
                                    <i class="simple-icon-eye"></i>
                                </a>
                                <a href="{{route('rkakegiatanmurni.edit',['uuid'=>$item->RKAID])}}" title="Ubah Data Kegiatan" class="btn btn-primary btn-xs mr-sm-2 default">
                                    <i class="simple-icon-pencil"></i>
                                </a>
                                <a href="javascript:;" title="Hapus Data Kegiatan" data-id="{{$item->RKAID}}" class="btn btn-danger btn-xs default btnDelete" data-url="{{route('rkakegiatanmurni.index')}}">
                                    <i class="simple-icon-trash"></i>
                                </a>
                            </div>
                        </td>
                    </tr>
                    <tr class="text-center">
                        <td colspan="8">
                            <span class="badge badge-pill badge-outline-primary mb-1">
                                <strong>RKAID:</strong>{{$item->RKAID}}
                            </span>
                            <span class="badge badge-pill badge-outline-primary mb-1">
                                <strong>KGTID:</strong>{{$item->KgtID}}
                            </span>
                            <span class="badge badge-pill badge-outline-primary mb-1">
                                <strong>PRGID:</strong>{{$item->PrgID}}
                            </span>
                            <span class="badge badge-pill badge-outline-primary mb-1">
                                <strong>TA:</strong>{{$item->TA}}
                            </span>
                            <span class="badge badge-pill badge-outline-primary mb-1">
                                <strong>KET:</strong>{{$item->Descr}}
                            </span>
                            <span class="badge badge-pill badge-outline-primary mb-1">
                                <strong>CREATED:</strong>{{Helper::tanggal('d/m/Y H:m',$item->created_at)}}
                            </span>
                            <span class="badge badge-pill badge-outline-primary mb-1">
                                <strong>UPDATED:</strong>{{Helper::tanggal('d/m/Y H:m',$item->updated_at)}}
                            </span>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@else
<div class="alert alert-info">
    Belum ada data yang bisa ditampilkan.
</div>
@endif
