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

    <title>Add-Teacher</title>

    <meta name="description" content="" />

@extends('admin.back')
@section('content')

<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Teacher Form</h4>

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">
        
        <!-- Basic with Icons -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Basic with Icons</h5>
              <small class="text-muted float-end">Merged input group</small>
            </div>
            <div class="card-body">
              <form method="post" action="{{route('teacher.save')}}" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-fullname2" class="input-group-text"
                        ><i class="bx bx-book"></i
                      ></span>
                      <input
                        type="text"
                        class="form-control"
                        name="name"
                        id="basic-icon-default-fullname"
                        placeholder="Teacher Name"
                        aria-label="Teacher Name"
                        aria-describedby="basic-icon-default-fullname2"
                      />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Department</label>
                  <div class="col-sm-10">
                    <select class="form-select" id="exampleFormControlSelect1" name="department" aria-label="Default select example">
                      <option selected="">Open this select menu</option>
                      @foreach ($dep as $dep)
                      <option value="{{$dep->dep_name}}">{{$dep->dep_name}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                        <input
                          type="text"
                          id="basic-icon-default-email"
                          class="form-control"
                          name="email"
                          placeholder="john.doe"
                          aria-label="john.doe"
                          aria-describedby="basic-icon-default-email2"
                        />
                        <span id="basic-icon-default-email2" class="input-group-text">@example.com</span>
                      </div>
                      <div class="form-text">You can use letters, numbers & periods</div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 form-label" for="basic-icon-default-phone">Phone No</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class="bx bx-phone"></i
                        ></span>
                        <input
                          type="text"
                          id="basic-icon-default-phone"
                          name="phone"
                          class="form-control phone-mask"
                          placeholder="658 799 8941"
                          aria-label="658 799 8941"
                          aria-describedby="basic-icon-default-phone2"
                        />
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 form-label" for="basic-icon-default-phone">Image Upload</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class="bx bx-image"></i
                        ></span>
                        <input class="form-control" name="image" type="file" id="formFile">
                      </div>
                    </div>
                  </div>

                 
               
                <div class="row justify-content-end">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Send</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->

    <!-- Footer -->
    <footer class="content-footer footer bg-footer-theme">
      <div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
        <div class="mb-2 mb-md-0">
          ©
          <script>
            document.write(new Date().getFullYear());
          </script>
          , made with ❤️ by
          <a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
        </div>
        <div>
          <a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
          <a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

          <a
            href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/"
            target="_blank"
            class="footer-link me-4"
            >Documentation</a
          >

          <a
            href="https://github.com/themeselection/sneat-html-admin-template-free/issues"
            target="_blank"
            class="footer-link me-4"
            >Support</a
          >
        </div>
      </div>
    </footer>
    <!-- / Footer -->

    <div class="content-backdrop fade"></div>
  </div>

@endsection