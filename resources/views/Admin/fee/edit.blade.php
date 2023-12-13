@include('header')
  <div class="wrapper">
    @include('sidebar')

      <div class="main">
 @include('nav')




       
  <h4 class="text-primary text-center">Add Fee</h4>



  
@if ($errors->any())
                    <div class="alert alert-danger" style="width:500px;margin: 0 auto ">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif


 <div class="container mt-5">




 <form action="{{route('fee.update','test')}}" method="post">
 
 @csrf
 @method('PUT')

  <div class="row">




  <div class="col-4">

<div class="form-group">
   <label>Title: <span class="text-danger">*</span> </label>
    <input type="text"  name="amount" value="{{$fee->title}}" class="form-control">
</div>

</div>




    <div class="col-4">

    <div class="form-group">
       <label>Amount: <span class="text-danger">*</span> </label>
        <input type="number"  name="amount" value="{{$fee->amount}}" class="form-control">
    </div>

    </div>


    <div class="col-4">

    <div class="form-group">

<label>College: <span class="text-danger">*</span> </label>
<select name="college_id" class="form-select">
        <option value="" >Choose College</option>
            @foreach($colleges as $college) 
          
        <option value="{{$college->id}}" >{{$college->name}}</option>
      
            @endforeach
 </select>
</div>

</div>





<div class="col-4">
   <div class="form-group">

<label>Classroom: <span class="text-danger">*</span> </label>
<select name="classroom_id" class="form-select">
    <option value="" disabled>Choose Classroom</option>
       
 </select>


</div> 

   <!-- end one col -->
   </div>



   
   <div class="col-4">
  


<div class="form-group">

<label>Section: <span class="text-danger">*</span> </label>
<select name="section_id" class="form-select">
        <option value="" disabled>Choose Classroom</option>
 
 </select>


</div>
</div>


   <div class="col">
  


<div class="form-group">

                              <label for="academic_year">academic_year : <span class="text-danger">*</span></label>
                                    <select class="form-select" name="academic_year">
                                        <option selected disabled >Choose Academic year...</option>
                                        @php
                                            $current_year = date("Y");
                                        @endphp
                                        @for($year=$current_year; $year<=$current_year +1 ;$year++)
                                            <option value="{{ $year}}">{{ $year }}</option>
                                        @endfor
                                    </select>


</div> 

</div>













<!-- end Row -->
  </div>




  <button class="btn btn-primary mt-3" type="submit">Update</button>
  <a href="{{route('fee.index')}}" class="btn btn-danger mt-3" >back</a>

</form>







 </div>






 @include('footer')