<h1>Numbers</h1>

<ul>
@foreach($values as $val)
    {{-- <li>{{$val->value}}</li> --}} <!-- so greife ich auf Objekt zu -->
    <li>{{$val['value']}}</li> <!-- so greife ich auf array zu -->
@endforeach
</ul>
