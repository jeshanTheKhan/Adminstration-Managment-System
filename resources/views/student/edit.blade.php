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

    <title>Add-Student-Information</title>

    <meta name="description" content="" />

@extends('admin.back')
@section('content')

<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Student Form</h4>

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
              <form action="{{ route('student.update') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Name</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-fullname2" class="input-group-text"
                        ><i class="bx bx-user"></i
                      ></span>
                      <input
                        type="text"
                        class="form-control"
                        id="basic-icon-default-fullname"
                        name="s_name"
                        value="{{ $data->name }}"
                        placeholder="Student Name"
                        aria-label="Student Name"
                        aria-describedby="basic-icon-default-fullname2"
                      />
                    </div>
                  </div>
                </div>
                {{-- Father Name --}}
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Father's Name</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-company2" class="input-group-text"
                        ><i class="bx bx-user"></i
                      ></span>
                      <input
                        type="text"
                        id="basic-icon-default-company"
                        class="form-control"
                        placeholder="Father's Name."
                        name="f_name"
                        value="{{ $data->f_name }}"
                        aria-label="Father's Name."
                        aria-describedby="basic-icon-default-company2"
                      />
                    </div>
                  </div>
                </div>
                {{-- Mother Name --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Mother's Name</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-company2" class="input-group-text"
                          ><i class="bx bx-user"></i
                        ></span>
                        <input
                          type="text"
                          id="basic-icon-default-company"
                          class="form-control"
                          placeholder="Mother's Name."
                          name="m_name"
                          value="{{ $data->m_name }}"
                          aria-label="Mother's Name."
                          aria-describedby="basic-icon-default-company2"
                        />
                      </div>
                    </div>
                  </div>
                  {{-- Date Of Birth --}}
                  <div class="mb-3 row">
                    <label for="html5-datetime-local-input" class="col-md-2 col-form-label">Date Of Birth</label>
                    <div class="col-md-10">
                        <input class="form-control" type="date" value="{{ $data->dob }}" name="dob" value="2021-06-18" id="html5-date-input">
                    </div>
                  </div>
                  {{-- Address --}}
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-default-message">Address</label>
                    <div class="col-sm-10">
                      <textarea id="basic-default-message"  name="address" class="form-control" placeholder="Hi, Do you have a moment to talk Joe?" aria-label="Hi, Do you have a moment to talk Joe?" aria-describedby="basic-icon-default-message2">{{ $data->address }}</textarea>
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
                        placeholder="john.doe"
                        name="email"
                        value="{{ $data->email }}"
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
                        class="form-control phone-mask"
                        placeholder="658 799 8941"
                        name="number"
                        value="{{ $data->number }}"
                        aria-label="658 799 8941"
                        aria-describedby="basic-icon-default-phone2"
                      />
                    </div>
                  </div>
                </div>
                {{-- Gardian --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Gardian's Name</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-company2" class="input-group-text"
                          ><i class="bx bx-user"></i
                        ></span>
                        <input
                          type="text"
                          id="basic-icon-default-company"
                          class="form-control"
                          placeholder="Gardian's Name."
                          name="g_name"
                          value="{{ $data->g_name }}"
                          aria-label="Gardian's Name."
                          aria-describedby="basic-icon-default-company2"
                        />
                      </div>
                    </div>
                  </div>
                {{-- Gardian's Phone --}}
                <div class="row mb-3">
                    <label class="col-sm-2 form-label" for="basic-icon-default-phone">Gardian's Phone No</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-phone2" class="input-group-text"
                          ><i class="bx bx-phone"></i
                        ></span>
                        <input
                          type="text"
                          id="basic-icon-default-phone"
                          class="form-control phone-mask"
                          placeholder="658 799 8941"
                          name="g_number"
                          value="{{ $data->g_number }}"
                          aria-label="658 799 8941"
                          aria-describedby="basic-icon-default-phone2"
                        />
                      </div>
                    </div>
                  </div>
                  {{-- Gardian --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Relation With Gardian</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-company2" class="input-group-text"
                          ><i class="bx bx-link-alt"></i
                        ></span>
                        <input
                          type="text"
                          id="basic-icon-default-company"
                          class="form-control"
                          placeholder="Relation."
                          name="g_relation"
                          value="{{ $data->g_rel }}"
                          aria-label="Relation."
                          aria-describedby="basic-icon-default-company2"
                        />
                      </div>
                    </div>
                  </div>
                  {{-- Department --}}
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Department</label>
                    <div class="col-sm-10">
                      <select class="form-select" name="department" id="exampleFormControlSelect1" aria-label="Default select example">
                        <option selected>{{ $data->dep }}</option>
                        @foreach ($dep as $dep)
                        <option value="{{ $dep->dep_name }}">{{ $dep->dep_name }}</option>
                        @endforeach
                        
                      </select>
                    </div>
                  </div>
                  {{-- Student ID --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Student ID</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-company2" class="input-group-text"
                          ><i class="bx bx-link-alt"></i
                        ></span>
                        <input
                          type="text"
                          id="basic-icon-default-company"
                          class="form-control"
                          placeholder="222-225-019."
                          name="s_id"
                          value="{{ $data->s_id }}"
                          aria-label="222-115-019."
                          aria-describedby="basic-icon-default-company2"
                        />
                      </div>
                    </div>
                  </div>
                  {{-- Batch --}}
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Batch</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-company2" class="input-group-text"
                        ><i class="bx bx-buildings"></i
                      ></span>
                      <input
                        type="text"
                        id="basic-icon-default-company"
                        class="form-control"
                        placeholder="57th."
                        name="batch"
                        value="{{ $data->s_batch }}"
                        aria-label="57th."
                        aria-describedby="basic-icon-default-company2"
                      />
                    </div>
                  </div>
                </div>
                {{-- Section --}}
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Section</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-company2" class="input-group-text"
                        ><i class="bx bx-buildings"></i
                      ></span>
                      <input
                        type="text"
                        id="basic-icon-default-company"
                        class="form-control"
                        placeholder="A."
                        name="section"
                        value="{{ $data->s_section }}"
                        aria-label="A."
                        aria-describedby="basic-icon-default-company2"
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
                    <input type="hidden" value="{{ $data->std_id }}" name="c_id">
                    <input type="hidden" name="old_img" value="{{$data->image}}">
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



@endsection