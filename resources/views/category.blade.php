@extends('master')
<?php
/*dd($category);
*/?>
@section('title','Категорія ' . @$category->name)

@section('content')

    <div class="starter-template">
        <h1>
            {{$category->name}}
            {{--            @if($category=='mobiles')--}}
            {{--            Мобильні телефони--}}
            {{--                @elseif($category=='portable')--}}
            {{--                Портативна техніка--}}
            {{--                @elseif($category=='appliances')--}}
            {{--                Побутова техніка--}}
            {{--                @endif--}}
        </h1>
        <p>
            {{$category->description}}
        </p>
        <div class="row">
       @include('card',['category'=>$category])
    </div>
</div>
@endsection
