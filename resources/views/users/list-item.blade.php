<div class="panel">
    <div class="panel-body">
        <p><a href="{{route('profile',['id'=>$user->id])}}"> {{ $user->name }} </a> </p>
        <p>{{ $user->email }}</p>
    </div>
</div>