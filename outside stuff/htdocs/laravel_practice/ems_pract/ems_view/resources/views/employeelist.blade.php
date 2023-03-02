@extends('index')
@section('title', 'Employee-list')
@section('wrapper')
@parent
 @section('preloader')
 @parent
 @endsection

 @section('main-header')
 @parent
 @endsection

 @section('main-sidebar')
 @parent
 @endsection

 @section('content-wrapper')
 @parent
   @section('content-header')
   
   <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Employee List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Employee</a></li>
              <li class="breadcrumb-item"><a href="#">All</a></li>
              <li class="breadcrumb-item active">Employee List </li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
   @endsection

   @section('main-content')
    @parent
      @section('container-fluid')
       @parent
      <!--edit here-->
        @section('row')
          
        @endsection
      <!-- end editing-->
      @endsection
   @endsection
 @endsection



 @section('main-footer')
 @parent
 @endsection

 @section('control-sidebar')
 @parent
 @endsection

@endsection