@if($type !== 'textarea')
    <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">{{$label}}</label>
        <div class="col-sm-10">
            <input type="{{$type}}" class="{{$class}}" id="{{$id}}" placeholder="{{$placeholder}}" name="{{$name}}"/>
        </div>
    </div>
@else
    <textarea id="basic-default-message" class="form-control"
              placeholder="{{$placeholder}}">
    </textarea>
@endif
