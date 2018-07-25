@if($errors)
            @foreach($errors->all() as $error)
                <ul class="list-group">
                    <li class="list-group-item text-danger"> {{ $error }} </li>
                </ul>
            @endforeach
@endif