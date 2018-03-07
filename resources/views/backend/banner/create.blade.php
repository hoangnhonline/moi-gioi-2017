@extends('backend.layout')
@section('content')
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      Banner của <span style="color:red">{{ $detail->name }}</span>
    </h1>
    <ol class="breadcrumb">
      <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
      <li><a href="{{ route('banner.index', ['object_id' => $object_id, 'object_type' => $object_type]) }}">banner</a></li>
      <li class="active">Tạo mới</li>
    </ol>
  </section>

  <!-- Main content -->
  <section class="content">
    <a class="btn btn-default btn-sm " href="{{ route('banner.index', ['object_id' => $object_id, 'object_type' => $object_type]) }}" style="margin-bottom:5px">Quay lại</a>
    <form role="form" method="POST" action="{{ route('banner.store') }}">
    <div class="row">
      <!-- left column -->

      <div class="col-md-12">
        <!-- general form elements -->
        <div class="box box-primary">
          <div class="box-header with-border">
            <h3 class="box-title">Tạo mới</h3>
          </div>
          <!-- /.box-header -->               
            {!! csrf_field() !!}

            <div class="box-body">
              @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
              @endif              
                 <div class="form-group" style="margin-top:10px;margin-bottom:10px">  
                  <label class="col-md-3 row">Banner <?php 
                  if($object_id == 1){
                    echo "( 1349 x 505 px)";
                  }elseif($object_id == 5){
                    echo "( 1349 x 200 px)";
                  }elseif($object_id == 2){
                    echo "( 1150 x 60 px)";
                  }
                  ?></label>    
                  <div class="col-md-9">
                    <img id="thumbnail_image" src="{{ old('image_url') ? Helper::showImage(old('image_url')) : URL::asset('public/admin/dist/img/img.png') }}" class="img-thumbnail" width="145" height="85">                    
                    <button class="btn btn-default btn-sm btnSingleUpload" data-set="image_url" data-image="thumbnail_image" type="button"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span> Upload</button>
                    <input type="hidden" name="image_url" id="image_url" value="{{ old('image_url') }}"/>
                  </div>
                  <div style="clear:both"></div>
                </div>                  
                <input type="hidden" name="status" value="1">     
                <!-- textarea -->
                <div class="form-group">
                  <label>Loại banner</label>
                  <select name="type" class="form-control" id="type">
                  	<option value="1" {{ old('type') == 1  ? "selected" : "" }}>Không liên kết</option>
                  	<option value="2" {{ old('type') == 2 ? "selected" : "" }}>Có liên kết</option>
                  </select>
                </div>  
                <div class="form-group" id="div_lk" style="display:none">
                  <label>Liên kết</label>
                  <input type="text" name="ads_url" id="ads_url" value="{{ old('ads_url') }}" class="form-control">
                </div>  
                <input type="hidden" name="object_id" value="{{ $object_id }}">
                <input type="hidden" name="object_type" value="{{ $object_type }}">
            </div>                        
            <div class="box-footer">
              <button type="submit" class="btn btn-primary btn-sm">Lưu</button>
              <a class="btn btn-default btn-sm" class="btn btn-primary btn-sm" href="{{ route('banner.index', ['object_id' => $object_id, 'object_type' => $object_type])}}">Hủy</a>
            </div>
            
        </div>
        <!-- /.box -->     

      </div>
     
      <!--/.col (left) -->      
    </div>
    </form>
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<input type="hidden" id="route_upload_tmp_image" value="{{ route('image.tmp-upload') }}">
@stop
@section('js')
<script type="text/javascript">
    $(document).ready(function(){
      
      
      
      var type = $('#type').val();
      checkType( type );

      $('#type').change(function(){
      	checkType( $(this).val() );
      });
      
     
    });
    function checkType( type ){
    	if( type == 1){
    		$('#div_lk').hide();
    	}else{
    		$('#div_lk').show();
    	}
    }
</script>
@stop