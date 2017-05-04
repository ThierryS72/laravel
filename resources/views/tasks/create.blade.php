<h2>Formulaire HTML</h2>

    <form method="POST" action="{{ route('tasks.store') }}">
        {{ csrf_field() }}
         <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" placeholder="Task name" value="{{old('name'}}">
        </div>
        <button type="submit" class="btn btn-primary">Store</button>
    </form>
    
    @if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif