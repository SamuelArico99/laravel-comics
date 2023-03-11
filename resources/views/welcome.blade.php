@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($comics as $comic)
        <div class="col-6 col-sm-3 col-md-2 text-center">
           <img src="{{$comic['thumb']  }}" alt=""> 
        </div>
        <span>
            {{ $comic['title'] }}
        </span>
        @endforeach
    </div>
</div>
@endsection

<style scoped lang="scss">
    img{
        width: 100%
        height: 200px;
    }
</style>