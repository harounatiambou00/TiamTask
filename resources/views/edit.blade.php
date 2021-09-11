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
                <h6 class="pb-3">Modification - <span class="badge rounded-pill bg-secondary">{{ $task->title }}</span></h6>
            </div>
            <div class="float-end">
                <a href="{{ route('user.show', $user->id) }}" class="btn btn-sm btn-info">
                    <i class="fa fa-arrow-left"></i> Vos t&acirc;ches
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="card card-body bg-light p-4">
            <form action="{{ route('task.update', $task->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="title" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="title" name="title" value="{{ $task->title }}">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" class="form-control" id="description" name="description" rows="5" >{{ $task->description }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control">
                        @foreach ($statuses as $status)
                            <option value="{{ $status['value'] }}" {{ $task->status === $status['value'] ? 'selected' : '' }} > {{ $status['label'] }}</option>
                        @endforeach
                    </select>
                </div>
                <a href="{{ route('user.show', $user->id) }}" class="btn btn-danger">
                    <i class="fa fa-arrow-left"></i> Annuler
                </a>
                <button type="submit" class="btn btn-primary">
                    <i class="fa fa-check"></i> Enregistrer
                </button>
            </form>
        </div>
@endsection  