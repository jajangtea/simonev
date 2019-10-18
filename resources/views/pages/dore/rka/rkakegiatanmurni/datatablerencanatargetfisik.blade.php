@if (count($datarencanatargetfisik) > 0)
<div class="table-responsive">
    <table class="table" style="background:white">
        <thead class="thead-light">
            <tr>
                <th scope="col" width="55">REKENING</th>    
                <th scope="col" width="250">
                    NAMA URAIAN
                </th>
                <th scope="col" width="55">1</th>                    
                <th scope="col" width="55">2</th>                    
                <th scope="col" width="55">3</th>                    
                <th scope="col" width="55">4</th>                    
                <th scope="col" width="55">5</th>                    
                <th scope="col" width="55">6</th>                    
                <th scope="col" width="55">7</th>                    
                <th scope="col" width="55">8</th>                    
                <th scope="col" width="55">9</th>                    
                <th scope="col" width="55">10</th>                    
                <th scope="col" width="55">11</th>                    
                <th scope="col" width="55">12</th>                    
                <th scope="col" width="80">AKSI</th>
            </tr>
        </thead>
        <tbody>            
            @foreach ($datarencanatargetfisik as $key=>$item)           
            <tr>
                <td scope="row">{{ $item->kode_rek_5 }}</td>                
                <td scope="row">{{ $item->nama_uraian }}</td>
                <td scope="row">{{ Helper::formatAngka($item->fisik_1) }}</td>
                <td scope="row">{{ Helper::formatAngka($item->fisik_2) }}</td>
                <td scope="row">{{ Helper::formatAngka($item->fisik_3) }}</td>
                <td scope="row">{{ Helper::formatAngka($item->fisik_4) }}</td>
                <td scope="row">{{ Helper::formatAngka($item->fisik_5) }}</td>
                <td scope="row">{{ Helper::formatAngka($item->fisik_6) }}</td>
                <td scope="row">{{ Helper::formatAngka($item->fisik_7) }}</td>
                <td scope="row">{{ Helper::formatAngka($item->fisik_8) }}</td>
                <td scope="row">{{ Helper::formatAngka($item->fisik_9) }}</td>
                <td scope="row">{{ Helper::formatAngka($item->fisik_10) }}</td>
                <td scope="row">{{ Helper::formatAngka($item->fisik_11) }}</td>
                <td scope="row">{{ Helper::formatAngka($item->fisik_12) }}</td>                
                <td>
                    <div class="input-group-append">
                        <a href="{{route('rkakegiatanmurni.edit4',['uuid'=>$item->RKARincID])}}" title="Ubah Data Rencana" class="btn btn-primary btn-xs mr-sm-2 default">
                            <i class="simple-icon-pencil"></i>
                        </a>
                        <a href="javascript:;" title="Hapus Data Rencana" data-id="{{$item->RKARincID}}" class="btn btn-danger btn-xs default btnDeleteRencanaFisik" data-url="{{route('rkakegiatanmurni.index')}}">
                            <i class="simple-icon-trash"></i>
                        </a>
                    </div>
                </td>
            </tr>
            <tr class="text-center">
                <td colspan="15">     
                     <span class="badge badge-pill badge-outline-primary mb-1">
                        <strong>RKARINCID:</strong>{{$item->RKARincID}}
                    </span>                 
                    <span class="badge badge-pill badge-outline-primary mb-1">
                        <strong>RKAID:</strong>{{$item->RKAID}}
                    </span>                 
                    <span class="badge badge-pill badge-outline-primary mb-1">
                        <strong>TOTAL:</strong>{{$item->fisik_1+$item->fisik_2+$item->fisik_3+$item->fisik_4+$item->fisik_5+$item->fisik_6+$item->fisik_7+$item->fisik_8+$item->fisik_9+$item->fisik_10+$item->fisik_11+$item->fisik_12}}
                    </span>                    
                </td>
            </tr>
            @endforeach
        </tbody>       
    </table>
</div>    
@else
<div class="alert alert-info">
    Belum ada data yang bisa ditampilkan.
</div>
@endif