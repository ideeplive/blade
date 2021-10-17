<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact Page with Contact Controller</title>
</head>
<body>
    <h1>Contact Page</h1>
    <h2>Name: {{$nm}}</h2>
    <h3>Time: {{time()}}</h3>
    <h4>SQRT: {{sqrt(56)}}</h4>

    {{-- @if($nm == 'Deep')
    <h4>Hello, {{$nm}}</h4>
    @endif --}}

    {{-- @unless ($nm == 'Deep1')
        <h1>You Are Not Admin</h1>
    @endunless --}}

    {{-- @foreach($students as $student)
    <h5>{{$student}}</h5>
    @endforeach --}}

    {{-- @forelse ($Collections as $item)
        <h3>{{$item}}</h3>
    @empty
        <h4>No Students</h4>
    @endforelse --}}

    {{-- @foreach ($students as $stu)
        @if($stu == 'Jogesh')
        @break
        @endif
        <h4>{{$stu}}</h4>
    @endforeach --}}

    {{-- @foreach ($students as $stu)
        @if($stu == 'Jogesh')
        @continue
        @endif
        <h4>{{$stu}}</h4>
    @endforeach --}}






</body>
</html>