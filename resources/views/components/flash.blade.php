
<div class="container">
    <div class="row justify-content-center">
        <div class="col-12 col-md-6">
            @if (@session('success'))
            <div class="alert alert-success">
                {{session('success')}}
                </div>   
            @endif
            
            @if (@session('info'))
            <div class="alert alert-info">
                {{session('info')}}
                </div>   
            @endif
            
            @if (@session('error'))
            <div class="alert alert-error">{{session('error')}}
                </div>   
            @endif
            @if ($errors->any())
            <div class="alert alert-danger pt-2 pb-0">
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                </div>
            @endif
        </div>
    </div>
</div>