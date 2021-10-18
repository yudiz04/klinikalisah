@extends('backend.master')
@section('title', 'Add doctor')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Doctor</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="{{url('/doctor')}}">doctor</a></li>
                <li class="breadcrumb-item active">Add Doctor</li>
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
            <h3 class="card-title">Add <small>Doctor</small></h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form action="{{url('/doctor')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <label for="specialist">Specialist Product</label>
              <select name="specialist" class="form-control @error('specialist') is-invalid @enderror" id="specialist">
                @foreach ($specialist as $item)
                <option value="{{$item->id}}">{{$item->subject}}</option>  
                @endforeach
              </select> 
              @error('specialist') 
              <div class="invalid-feedback">
                {{$message}}
              </div>
              @enderror
            </div>
              <div class="form-group">
                <label for="doctor">New doctor</label>
                <input type="text" name="doctor" class="form-control @error('doctor') is-invalid @enderror" id="doctor" placeholder="New doctor" value="{{old('doctor')}}">
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