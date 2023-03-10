<div class="input-field col s12">
    <h4>{{$title}}</h4>
    <label>{{$label}}</label>
    <input type="number" value="{{isset($value)?$value:old($key)}}" name="{{$key}}" min="0" max="{{$max}}"
           class="@error($key)is-invalid @enderror form-control"
           @if($required) required @endif>
    @error($key)
    <p class="text-danger">{{$message}}</p>
    @enderror
</div>
