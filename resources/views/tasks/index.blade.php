<h2>Index</h2>
    
    <a href="{{ route('tasks.create') }}">New task</a>
    
    <table class="table table-striped">
        <thead>
            <tr>
                <td>Id</td>
                <td>Name</td>
            </tr>            
        </thead>
        <tbody>
            @foreach($tasks as $task)
            <tr>
                <td>{{ $task['id'] }}</td>
                <td><a href="{{ route('tasks.show', ['id' => $task['id']]) }}">{{ $task['name'] }}</a></td>
            </tr>     
            @endforeach
        </tbody>
</table>

<!--
 id, name, duration</br>
@foreach($tasks as $task)
    <td>{{ $task['id']}}, {{ $task['name']}}, {{ $task['duration']}}</td>
    <td><a href="{{ route('tasks.show', ['id' => $task['id']]) }}">{{ $task['name'] }}</a></td></br>
@endforeach 
-->