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

    <title>Student-View</title>

    <meta name="description" content="" />

    @include('admin.header')

    <!-- Content wrapper -->
    <div class="content-wrapper">
        <!-- Content -->
  
        <div class="container-xxl flex-grow-1 container-p-y">
 <!-- page content -->
 <div class="right_col" role="main">

    <div class="">
      <div class="page-title">
        <div class="title_left">
          <h3>Student-Information</h3>
        </div>

      </div>
      
      <div class="clearfix"></div>

      <div class="row">
        <div class="col-md-12 col-sm-12 ">
          <div class="x_panel">
            <div class="x_content">

              <div class="col-md-7 col-sm-7 ">
                <div class="product-image">
                  <img src="{{asset('storage/back/media/student/'.$data->image)}}" alt="Avatar" title="Change the avatar" height="500px">
                </div>
              </div>
              <br>

              <div class="col-md-5 col-sm-5 " style="border:0px solid #e5e5e5;">
                <h2 class="prod_title"> Student Name : {{ $data->name }}</h2>
                <h2 class="prod_title"> Father's Name : {{ $data->f_name }}</h2>
                <h2 class="prod_title"> Mother's Name : {{ $data->m_name }}</h2>
                <h2 class="prod_title"> Date Of Birth : {{ $data->dob }}</h2>
                <h2 class="prod_title"> Address : {{ $data->address }}</h2>
                <h2 class="prod_title"> Student's E-mail : {{ $data->email }}</h2>
                <h2 class="prod_title"> Student's Number : {{ $data->number }}</h2>
                <h2 class="prod_title"> Gardian : {{ $data->g_name }}</h2>
                <h2 class="prod_title"> Gardian's Number : {{ $data->g_number }}</h2>
                <h2 class="prod_title"> Relationship With Gardian : {{ $data->g_rel }}</h2>
                <h2 class="prod_title"> Department : {{ $data->dep }}</h2>
                <h2 class="prod_title"> Student's ID : {{ $data->s_id }}</h2>
                <h2 class="prod_title"> Student's Batch : {{ $data->s_batch }}</h2>
                <h2 class="prod_title"> Student's Section : {{ $data->s_section }}</h2>

            </div>
            
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- /page content -->
        </div>
    </div>
    @include('admin.footer')