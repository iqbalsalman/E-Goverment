@extends('layout/layout_home')
@section('content')
<div class="col-md-9 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">File Data asset</h4>
      <form class="form-horizontal" action="{{ url('/update',$data->id)}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
          <label for="exampleInputName1">Name</label>
          <input type="text" class="form-control" name="idSekolah" value="{{$data->idSekolah}}">
        </div>
        <div class="form-group">
          <label>File upload</label>
          <div class="input-group col-xs-12">
            <input type="file" class="form-control" name="upload"  value="{{$data->upload}}"  >
            <span class="input-group-append">
              <button class="file-upload-browse btn btn-info" type="button">Upload</button>
            </span>
          </div>
        </div>
        <button type="submit" class="btn btn-success mr-2">Submit</button>
        <button class="btn btn-light">Cancel</button>
      </form>
    </div>
  </div>
</div>
@endsection