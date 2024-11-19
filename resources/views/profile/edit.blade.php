   {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div> --}}
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
  
      <title>Dashboard</title>
  
      <meta name="description" content="" />
  
  @extends('admin.back')
  @section('content')
   <!-- Content -->

   <div class="container-xxl flex-grow-1 container-p-y">
    <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account Settings /</span> Account</h4>

    <div class="row">
      <div class="col-md-12">
        <ul class="nav nav-pills flex-column flex-md-row mb-3">
          <li class="nav-item">
            <a class="nav-link active" href="javascript:void(0);"><i class="bx bx-user me-1"></i> Account</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages-account-settings-notifications.html"
              ><i class="bx bx-bell me-1"></i> Notifications</a
            >
          </li>
          <li class="nav-item">
            <a class="nav-link" href="pages-account-settings-connections.html"
              ><i class="bx bx-link-alt me-1"></i> Connections</a
            >
          </li>
        </ul>
        <div class="card mb-4">
          <h5 class="card-header">Profile Details</h5>
          <!-- Account -->
          <div class="card-body">
            <div class="d-flex align-items-start align-items-sm-center gap-4">
              <img
                src="storage/back/assets/img/avatars/WhatsApp Image 2024-11-19 at 20.03.46_90a0d08e.jpg"
                alt="user-avatar"
                class="d-block rounded"
                height="100"
                width="100"
                id="uploadedAvatar"
              />
              {{-- <div class="button-wrapper">
                <label for="upload" class="btn btn-primary me-2 mb-4" tabindex="0">
                  <span class="d-none d-sm-block">Upload new photo</span>
                  <i class="bx bx-upload d-block d-sm-none"></i>
                  <input
                    type="file"
                    id="upload"
                    name="photo"
                    class="account-file-input"
                    hidden
                    accept="image/png, image/jpeg"
                  />
                </label>
                <button type="button" class="btn btn-outline-secondary account-image-reset mb-4">
                  <i class="bx bx-reset d-block d-sm-none"></i>
                  <span class="d-none d-sm-block">Reset</span>
                </button>

                <p class="text-muted mb-0">Allowed JPG, GIF or PNG. Max size of 800K</p>
              </div> --}}
            </div>
          </div>
          <hr class="my-0" />
          <div class="card-body">
            <form id="formAccountSettings" method="POST" action="{{ route('profile.upload') }}" >
              @csrf
              <div class="row">
                <div class="mb-3 col-md-6">
                  <label for="firstName" class="form-label">First Name</label>
                  <input
                    class="form-control"
                    type="text"
                    id="firstName"
                    name="name"
                    value="{{$user->name}}"
                    autofocus
                  />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="lastName" class="form-label">Last Name</label>
                  <input class="form-control" type="text" value="{{$user->lname}}" name="lname" id="lastName" value="Doe" />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="email" class="form-label">E-mail</label>
                  <input
                    class="form-control"
                    type="text"
                    id="email"
                    name="email"
                    value="{{$user->email}}"
                    value="JeshanKhan.doe@example.com"
                    placeholder="JeshanKhan.doe@example.com"
                  />
                </div>
                <div class="mb-3 col-md-6">
                  <label class="form-label" for="phoneNumber">Phone Number</label>
                  <div class="input-group input-group-merge">
                    <span class="input-group-text">US (+88)</span>
                    <input
                      type="text"
                      id="phoneNumber"
                      name="phone"
                      value="{{$user->phone}}"
                      class="form-control"
                      placeholder="202 555 0111"
                    />
                  </div>
                </div>
                <div class="mb-3 col-md-6">
                  <label for="address" class="form-label">Address</label>
                  <input type="text" class="form-control" value="{{$user->address}}" id="address" name="address" placeholder="Address" />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="state" class="form-label">State</label>
                  <input class="form-control" type="text" value="{{$user->state}}" id="state" name="state" placeholder="California" />
                </div>
                <div class="mb-3 col-md-6">
                  <label for="zipCode" class="form-label">Zip Code</label>
                  <input
                    type="text"
                    class="form-control"
                    id="zipCode"
                    name="zipcode"
                    value="{{$user->zipcode}}"
                    placeholder="231465"
                    maxlength="6"
                  />
                </div>
                <div class="mb-3 col-md-6">
                  <label class="form-label" for="country">{{$user->country}}</label>
                  <select id="country" name="country" class="select2 form-select">
                    <option value="">Select</option>
                    <option value="Australia">Australia</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Brazil">Brazil</option>
                    <option value="Canada">Canada</option>
                    <option value="China">China</option>
                    <option value="France">France</option>
                    <option value="Germany">Germany</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Japan">Japan</option>
                    <option value="Korea">Korea, Republic of</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Russia">Russian Federation</option>
                    <option value="South Africa">South Africa</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                  </select>
                </div>
              </div>
              <div class="mt-2">
                <button type="submit" class="btn btn-primary me-2">Save changes</button>
                <input type="hidden" value="{{$user->id }}" name="c_id">
                <button type="reset" class="btn btn-outline-secondary">Cancel</button>
              </div>
            </form>
          </div>
          <!-- /Account -->
        </div>
      
      </div>
    </div>
  </div>
  <!-- / Content -->
  @endsection()

