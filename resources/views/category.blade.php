@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Category's</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                	{{ $titel }}

    <ul>
    @foreach($categories as $category)
        <li>{{ $category->id }} - {{ $category->name }}</li>
    @endforeach
    </ul>

                    <br>

                 <ul>
                
 		    
    		
    			</ul>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
