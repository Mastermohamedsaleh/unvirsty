








<!-- Modal -->
<div class="modal fade" id="Return_Student{{$student->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">

        <h5 class="modal-title" id="exampleModalLabel"> Return Student </h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        
      <form method="post"  action="{{route('graduated.update','test')}}" autocomplete="off" >
      @method('PUT')
      @csrf






      <input type="hidden" name="id" value="{{$student->id}}">
<h5 style="font-family: 'Cairo', sans-serif;">هل انت متاكد من الغاء عملية التخرج ؟</h5>
                    <input type="text" readonly value="{{$student->name}}" class="form-control">

      

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button  class="btn btn-primary">Udpate</button>
      </div>
      </form>
    </div>
  </div>
</div>







        

              
