@extends('template.default')

@section('title','myview')
@section('content')
<ul>
    <?php
    $num = 2;
    for ($i=1; $i <= 12 ; $i++) {
    ?>
        <li>
            {{ $num }} x {{$i}}
            = {{$num * $i}}

        </li>
    <?php } ?>
    <li> 2 x 2 = 4 </li>
    <li> 2 x 3 = 6 </li>
</ul>
@endsection
