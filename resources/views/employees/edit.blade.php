@extends('layouts.adminApp')

@section('content')
 <!-- Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Emploees</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active"> Emploees</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="{{route('employees.update',$employe->id)}}"method="POST">
              @csrf
              @method('PUT')
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputname1">Name</label>
                    <input type="text" class="form-control" name="name" value="{{$employe->name ?? ''}}" placeholder="Enter Name">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputDesignation1">Designation</label>
                    <input type="text" class="form-control" name="designation"  value="{{$employe->designation ?? ''}}" placeholder="Enter Designation">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputsalary1">salary</label>
                    <input type="number" class="form-control" name="salary"  value="{{$employe->salary ?? ''}}"  placeholder="Enter salary">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputjoining_date1">joining_date</label>
                    <input type="date" class="form-control" name="joining_date"  value="{{$employe->joining_date ?? ''}}" placeholder="Enter joining_date">
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
            <!-- /.card -->

          </div>
        </div>
    </div>
    </section>

  @endsection