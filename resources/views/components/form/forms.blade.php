<!-- Basic Layout -->
<div class="col-xxl">
    <div class="card mb-4">
        <div class="card-header d-flex align-items-center justify-content-between">
            <h5 class="mb-0">{{ $title }}</h5> <small class="text-muted float-end"></small>
        </div>
        <div class="card-body">
            <form action="{{$action}}" method="{{$method}}">
                @if(count($dataJson) > 0)
                    @foreach($dataJson as $key => $value)
                        <x-inputs :label="$value['label']" :type="$value['type']" :class="$value['class']"
                                  :id="$value['id'] " :placeholder="$value['placeholder']" :name="$value['name']"/>
                    @endforeach
                @endif
                <div class="row justify-content-end">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
