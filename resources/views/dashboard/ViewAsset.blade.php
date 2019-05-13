@extends('layout/layout_home')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Bordered table</h4>
        <p class="card-description">
          Add class
          <code>.table-bordered</code>
        </p>
        <div class="table-responsive">
          <table class="table table-bordered">
            <thead>
              <tr>
                <th>No </th>
                <th>Nama</th>
                <th>Sekolah</th>
                <th>Tanggal Upload</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
              <?php $no=0 ?>
              @foreach ($data as $item)
              <tr>
                  <?php $no++ ?>
                  <td class="center">{{$no}}</td>
                  <td class="center">Muhamad Iqbal Salman</td>
                  <td>Sman 5 Bandung</td>
                  <td>{{$item->created_at}}</td>
                  <td>
                      <a class="btn btn-info" href="{{URL::to('/edit/'.
                                $item->id)}}">
                                    <i class="fa fa-expeditedssl"></i>  
                                </a>
                                <a class="btn btn-danger"  href="{{URL::to('/delete_product/'.
                                $item->id)}}" id="delete"> 
                                    <i class="fa fa-trash"></i> 
                                </a>
                                <a class="btn btn-success"  href="{{$item->upload}}" download> 
                                    <i class="fa fa-download"></i> 
                       </a>
                  </td>
              </tr>
            </tbody>
            @endforeach
          </table>
        </div>
      </div>
    </div>
  </div>
@endsection
