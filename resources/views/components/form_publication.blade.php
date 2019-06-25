
<img class="imagen-publication" style="cursor: pointer" width="100" height="100" src="{{ url('/storage/publication/' . $imagen_publication) }}" alt="">

<div class="container-fluid d-flex justify-content-center">
<form method="POST" action="{{ $action }}" enctype="multipart/form-data">
    
    @csrf
    {{ $method }}

   

    <div class="row">
    <div class="input-group mb-3 ml-5 col-10">
        <div class="input-group-prepend">
          <span class="input-group-text" id="inputGroupFileAddon01">Upload image</span>
        </div>
        <div class="custom-file">
            <input class=" custom-file-input" onchange="changeImage(this)" id="imagen_publication" name="imagen_publication" type="file">>
          <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
        </div>
    </div>
    
</div>

    <div class="row">
     <div class="form-group col-10 ml-5  mb-4">
       <label>@lang('Category')</label>
            <select class="form-control" id="categoria" name="categoria" type='select'>
            <option value="Rent">@lang('Rent')</option>
            <option value="Food" >@lang('Food')</option>
            <option value="Materials">@lang('Materials')</option>
            <option value="Recomendations">@lang('Academic Recomendations')</option>
            <option value="Others">@lang('Others')</option>
        </select>
    </div> </div>
<div class="row">
    <div class="form-group col-10 ml-5 mb-5">
        <label for="Title">@lang('Title')</label><br>
        <input class="form-control" type="text" id="titulo" name="titulo" value="{{ $publication['titulo'] }}" placeholder="@lang('Title')">        
    </div> 
</div>
   
    <div class="row">
    <div class="form-group my-3 ml-5  col-10">

       <label for="Description">@lang('Description')</label><br>
      <textarea class="form-control" type="text" id="text" name="text" value="{{ $publication['text'] }}" placeholder="@lang('Text')" rows="4"></textarea>
                            
    </div> 
</div>
    
    <input type="hidden" name="user" value="{{ $user }}">
    
    <button type="submit" class="ml-5 btn btn-success">
        {{ $button_text }}        
    </button>
</form>

</div>
@section('scripts')    
    <script>        
        let imageDOM = document.querySelector('.image-publication');
        
        imageDOM.addEventListener('click', function(){
            document.querySelector('#imagen_publication').click();
        });

        function changeImage(input){            
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    imageDOM.src = e.target.result;
                }

                reader.readAsDataURL(input.files[0]);
            }
        };
    </script>
@endsection