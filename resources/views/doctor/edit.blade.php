@extends('backend.master')
@section('title', 'Edit doctor')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">doctor</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Edit doctor</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- jquery validation -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Edit <small>doctor</small></h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('/doctor/'.$doctor->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-group">
              <label for="specialist">Specialist</label>
              <select name="specialist" class="form-control @error('specialist') is-invalid @enderror" id="specialist">
                @foreach ($specialist as $item)
                  @if ($item->id==$product->specialist_id)
                    <option value="{{$item->id}}"selected>{{$item->subject}}</option>  
                      
                  @else
                      
                    <option value="{{$item->id}}">{{$item->subject}}</option>  
                  @endif
                @endforeach
              </select>
              @error('specialist') 
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>
              <div class="form-group">
                <label for="doctor">doctor</label>
                <input type="text" name="doctor" class="form-control @error('doctor') is-invalid @enderror" id="doctor" placeholder="New doctor" value="{{$doctor->name}}" >
                @error('doctor') 
                <div class="invalid-feedback">
                  {{$message}}
                </div>
                @enderror
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
        <!-- /.card -->
        </div>
      <!--/.col (left) -->
      <!-- right column -->
      <div class="col-md-6">

      </div>
      <!--/.col (right) -->
    </div>
    <!-- /.row -->
  </div><!-- /.container-fluid -->
</section>

</div>
<!-- /.content -->
@endsection