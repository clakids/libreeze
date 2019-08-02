@if (count($errors)>0)
    <br>
        @foreach ($errors->all() as $error)
            <div class="btn alert-danger">
                {{$error}}
            </div>
        @endforeach    
    <br>
@endif

@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>    
@endif

@if (session('error'))
    <div class="alert alert-danger">
        {{session('error')}}
    </div>    
@endif