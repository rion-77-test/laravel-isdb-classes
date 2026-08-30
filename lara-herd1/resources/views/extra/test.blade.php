@php
    $name = 'Mina';
    $arr = ['mina', 'taro', 'hanako'];
    $active = false;
    $nume = 0;
@endphp

@foreach ($arr as $item)
    <b>Name {{ ++$nume }} :</b> {!! $item . '<br>' !!}
@endforeach

<h1>Test Page</h1>
<p><b>Name:</b>{{ $name }}</p>
<p><b>Acitve:</b>{{ $active ? 'Active' : 'Inactive' }}</p>
