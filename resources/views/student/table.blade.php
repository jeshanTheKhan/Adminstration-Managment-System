<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="storage/back/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Student-Table</title>

    <meta name="description" content="" />

@extends('admin.back')
@section('content')

    <!-- Content wrapper -->
    <div class="content-wrapper">
      <!-- Content -->

      <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Student Tables</h4>

        <!-- Basic Bootstrap Table -->


    

        <!-- Bootstrap Table with Header - Footer -->
        <div class="card">
          <h5 class="card-header">Student-Table</h5>
          <div class="table-responsive text-nowrap">
            <table class="table">
              <thead>
                <tr>
                  <th>Serial Number</th>
                  <th>Student's ID</th>
                  <th>Student's Name</th>
                  <th>Email</th>
                  <th>Number</th>
                  <th>Status</th>
                  <th>Actions</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td><i class="fab fa-angular fa-lg text-danger me-3"></i> <strong></strong></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                    
                  </td>
                  <td><span class="badge bg-label-primary me-1">Active</span></td>
                  <td>
                    
                      <button type="button" class="btn p-0 dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                        <i class="bx bx-dots-vertical-rounded"></i>
                      </button>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-show me-1"></i> View</a
                        >
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-edit-alt me-1"></i> Edit</a
                        >
                        <a class="dropdown-item" href="javascript:void(0);"
                          ><i class="bx bx-trash me-1"></i> Delete</a
                        >
                      
                    </div>
                  </td>
                </tr>

              </tbody>
              

       

        <!-- Bootstrap Table with Caption -->

      <!-- / Footer -->

      <div class="content-backdrop fade"></div>
    </div>
    <!-- Content wrapper -->

@endsection