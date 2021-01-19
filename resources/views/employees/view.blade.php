@extends('layouts.adminApp')

@section('content')
 <!-- Header (Page header) -->
 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Emploees</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
               
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
                <h3 class="card-title">create
               
                </h3>
                <a href="{{route('employees.create')}}"><button class="btn btn-sm btn-warning float-right">Add</button></a>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form>
                <div class="card-body">
                <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>

                      <th>Name</th>
                      <th>designation</th>
                      <th>salary</th>
                      <th>joining_date</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                   @foreach($employees as $employe) 
                  <tr> 
                      <td><p>{{$employe->name}}</p></td>
                      <td><p>{{$employe->designation}}</p></td>
                      <td><p>{{$employe->salary}}</p></td>
                      <td><p>{{$employe->joining_date}}</p></td>
                      <td>
                      <a href="{{route('employees.edit',$employe->id)}}"> <button type="button" class="btn btn-info btn-sm">Edit</button></a>
                      <form action="{{route('employees.destroy',$employe->id)}}" method="POST">
                      @csrf
                      @method("DELETE")
                      <button class="btn btn-danger btn-sm">Delete</button>
                      </form>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
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