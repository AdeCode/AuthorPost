@extends('app')
@section('content')
    <h1 class="text-center">Author Posts</h1>
    <div class="card card-default">
        <div class="card-header">Posts</div>    
        <div class="card-body">
            <ul class="list-group">
                @foreach($uniqueUserIds as $uniqueId)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    <div class="col-md-3">
                        Author - {{$uniqueId['userId']}}
                    </div>
                    <div class="col-md-3">
                        {{$countUnique[$uniqueId['userId']]}} posts
                    </div>
                    <div class="col-md-4">
                        <a href="" class="btn btn-sm float-right btn-success">See More</a>
                    </div>
                    </li>
                @endforeach
                
            </ul>
        </div>
    </div>
    
@endsection