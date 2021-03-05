@if(isset($type))
  <div class="alert alert-{{$type}}">
  {{$slot}}
  </div>
@else
  <div class="alert alert-warning">
  {{$slot}}
  </div>
@endif