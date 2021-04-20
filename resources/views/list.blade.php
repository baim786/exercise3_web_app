@extends('master')


@section('title', 'list')

@section('content')
<center><h1>List of e-books</h1></center><br>

<table style="width:100%">
  <tr>

    <th>Book Name</th>
    <th>ISBN</th> 
    <th>Catergory</th>
    <th>Pages</th>
  </tr>
  <tr>
  @foreach($services as $service)
<td>{{$service[0]}}</td>

@endforeach
    
  </tr> 
  
  <tr>
  @foreach($services as $service)
<td>{{$service[1]}}</td>

@endforeach
    
  </tr>

  <tr>
  @foreach($services as $service)
<td>{{$service[2]}}</td>

@endforeach

  </tr>
 <tr>
  @foreach($services as $service)
<td>{{$service[0]}}</td>

@endforeach
    
  </tr>

  
</table>


 
@endsection