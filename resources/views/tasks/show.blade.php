<h1>Tarea ID: {{ $task->id }}</h1>
<hr>
<h2>{{ $task->name }}</h2>
<p>{{ $task->description }}</p>

<a href="/tasks/{{ $task->id }}/edit">Editar</a>

<form action="/tasks/{{ $task->id }}/delete" method="POST"> 
    @csrf 
    @method('delete') 
    <button type="submit">eliminar</button>>