


@include('header')
  <div class="wrapper">
    @include('sidebar_doctor')

      <div class="main">
 @include('nav')


<div class="mt-2">
 @if ($errors->any())
                    <div class="alert alert-danger" style="width:500px;   margin: 0 auto ">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


                
    @if(Session::has('message'))
<p class="alert alert-info" style="width:500px;   margin: 0 auto ">{{ Session::get('message') }}</p>
@endif

</div>

<section class="vh-100" style="background-color: #f4f5f7;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-lg-6 mb-4 mb-lg-0">
        <div class="card mb-3" style="border-radius: .5rem;">
          <div class="row g-0">
            <div class="col-md-4 gradient-custom text-center text-white"
              style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">

          
      @if(\Auth::guard('doctor')->user()->image_name == 'default.jpg')
    <img src="{{URL::asset('Assets/images/default.jpg')}}" alt="" class="img-fluid my-5" style="width:60px; height:60px;   border-radius:50% ;">
    @else
    <img src="{{asset('/image/'.\Auth::guard('doctor')->user()->image_name)}}" alt="" class="img-fluid my-5" style="width:60px; height:60px;   border-radius:50% ;">         
       @endif


              <h5>{{\Auth::guard('doctor')->user()->name}} </h5>
              <p>Smart Academy</p>

       

              
 <button type="button" class="btn btn-light" data-bs-toggle="modal" data-bs-target="#editprofiledoctor{{\Auth::guard('doctor')->user()->id}}" style="width:40px;height:40px">
 <i class="far fa-edit mb-5"></i>
</button><br><br>


            </div>
            <div class="col-md-8">
              <div class="card-body p-4">
                <h6>Information</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Email</h6>
                    <p class="text-muted">{{\Auth::guard('doctor')->user()->email}}</p>
                  </div>
                  <!-- <div class="col-6 mb-3">
                    <h6>Phone</h6>
                    <p class="text-muted">123 456 789</p>
                  </div> -->
                </div>
                <h6>Profile</h6>
                <hr class="mt-0 mb-4">
                <div class="row pt-1">
                  <div class="col-6 mb-3">
                    <h6>Info</h6>
                    <h6>Ssn :</h6>
                    <p class="text-muted">{{\Auth::guard('doctor')->user()->ssn}}</p>
                    <h6>Address :</h6>
                    <p class="text-muted">{{\Auth::guard('doctor')->user()->Address}}</p>
                    <h6>Joining_Date :</h6>
                    <p class="text-muted">{{\Auth::guard('doctor')->user()->Joining_Date}}</p>
                  </div>
                  <!-- <div class="col-6 mb-3">
                    <h6>Most Viewed</h6>
                    <p class="text-muted">Dolor sit amet</p>
                  </div> -->
                </div>
                <!-- <div class="d-flex justify-content-start">
                  <a href="#!"><i class="fab fa-facebook-f fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-twitter fa-lg me-3"></i></a>
                  <a href="#!"><i class="fab fa-instagram fa-lg"></i></a>
                </div> -->

                <a href="#"  type="button"  data-bs-toggle="modal" data-bs-target="#cheangePass{{\Auth::guard('doctor')->user()->id}}">Change Password</a>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>







<!-- Modal -->
<div class="modal fade" id="editprofiledoctor{{\Auth::guard('doctor')->user()->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Profile</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form method="post"  action="{{url('updateprofile',\Auth::guard('doctor')->user()->id)}}" autocomplete="off" enctype="multipart/form-data">
      @csrf
      <div class="row">
      <div class="col-12">
      <div class="form-group">
        <label>Name: </label>
        <input type="text"  value="{{\Auth::guard('doctor')->user()->name}}" name="name"  >
        </div>
      </div>

  
      <div class="col-12">
      <div class="form-group">
         <label>Email : </label>
         <input type="email" value="{{\Auth::guard('doctor')->user()->email}}"  name="email"  >
         </div>
      </div>



      <div class="col">
        <label for="">Image :</label>
        <input type="file" name="image">
      </div>

      
  

      </div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary button-mode" data-bs-dismiss="modal">Close</button>
        <button  class="btn btn-primary button-mode">udpate</button>
</form>
      </div>
    </div>
  </div>
</div>





<!-- Change pass -->
<div class="modal fade" id="cheangePass{{\Auth::guard('doctor')->user()->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
              

    <form action="{{ route('update-password') }}" method="POST">
                        @csrf


                        <div class="row">



                        <div class="col-12">

                        <label for="oldPasswordInput" class="form-label">Old Password</label>
                                <input name="old_password" type="password" id="password" class="form-control @error('old_password') is-invalid @enderror" id="oldPasswordInput"
                                    placeholder="Old Password">
                                @error('old_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror



                        </div>

                        <div class="col-12">
                        <label for="newPasswordInput" class="form-label">New Password</label>
                                <input name="new_password" type="password" id="password" class="form-control @error('new_password') is-invalid @enderror" id="newPasswordInput"
                                    placeholder="New Password">
                                    
                                @error('new_password')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror

                                


                        </div>


                        <div class="col-12">

                        <label for="confirmNewPasswordInput" class="form-label">Confirm New Password</label>
                                <input name="new_password_confirmation" type="password" class="form-control" id="confirmNewPasswordInput"
                                    placeholder="Confirm New Password">

                        </div>



                  




      <div class="modal-footer">
        <button type="button" class="btn btn-secondary button-mode" data-bs-dismiss="modal">Close</button>
        <button  class="btn btn-primary button-mode">udpate</button>
        </form>
      </div>
    </div>
  </div>
</div>




        

              



@include('footer')