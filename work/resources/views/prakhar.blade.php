<!doctype Html>
<html>
<body>
@foreach($actions as $action)
<a href="{{route('niceaction',['action'=>lcfirst($action->name)])}}">{{$action->name}}</a>
@endforeach
<a href="{{route('niceaction',['action'=>'greet','nam'=>'prakhar'])}}">greet</a>
<a href="{{route('niceaction',['action'=>'hug'])}}">hug</a>
<a href="{{route('niceaction',['action'=>'kiss'])}}">kiss</a>
@if(count($errors)>0)

<div>
@foreach($errors->all() as $error)
{{$error}}
</div>
@endforeach


@endif



<form action="{{route('benice')}}" method="post">
    <label for="select">I want to</label>
        <select id="select" name="action">
            <option value="hug">hug</option>
            <option value="kiss">kiss</option>
            <option value="greet">greet</option>
        </select>
    <input type="text" name="text">
    <button type="submit">Go</button>
    <input type="hidden" value="{{ Session::token() }}"  name="_token">


</form>
</body>
</html>