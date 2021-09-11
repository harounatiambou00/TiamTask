@extends('./layouts/layout')

@section('User_id')
    {{ $user->id }}
@endsection()

@section('User-name')
    {{ $user->firstname }}
@endsection()

@section('main-content')
        <div>
            <div class="float-start">
                <h4 class="pb-3">Toutes vos t&acirc;ches</h4>
            </div>
            <div class="float-end">
                <a href="/task/create/{{$user->id}}" class="btn btn-info">
                    <i class="fa fa-plus-circle"></i> Créer une t&acirc;che
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
        @foreach ($userTasks as $task)
        <div class="card mt-3">
            <div class="card-header">
                {{ $task->title }}
                <span class="badge rounded-pill bg-secondary">{{ $task->created_at->diffForHumans() }}</span>
            </div>
            <div class="card-body">
                <div class="card-text">
                    <div class="float-start">
                        {{ $task->description }}
                        <br>
                        @if ($task->status === 'Todo')
                            <span class="badge rounded-pill bg-danger">Todo</span>
                            @else
                                <span class="badge rounded-pill bg-success">Done</span>
                        @endif
                        <small>Dernière modification - {{ $task->updated_at->diffForHumans() }}</small>
                    </div>
                    <div class="float-end">
                        <a href="{{ route('task.edit', $task->id) }}" class="btn btn-success">
                            <i class="fa fa-edit"></i>
                        </a>
                        <form action="{{ route('task.destroy', $task->id) }}" style="display: inline" method="POST">
                        @csrf
                        @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        @endforeach

        @if (count($userTasks) === 0)
            <div class="alert alert-danger p-2" role="alert">
                No task found.Please add some tasks.
                <br>
                <br>
                <div>
                    <a href="/task/create/{{$user->id}}" class="btn btn-info">
                        <i class="fa fa-plus-circle"></i> Create Task
                    </a>
                </div>
            </div>
        @endif
@endsection