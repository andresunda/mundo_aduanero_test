@if (count($nombres))
    @foreach ($nombres as $item)          
        <p class="">{{$item->id .' - '. $item->name}} <a style="float: right;" href="{{route('solicitud',$item->id)}}">Agregar</a></p>
    @endforeach             
@endif