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
                <h6 class="pb-3">Création d'une t&acirc;che</h6>
            </div>
            <div class="float-end">
                <a href="{{ route('user.show', $user_id) }}" class="btn btn-sm btn-info">
                    <i class="fa fa-arrow-left"></i> Vos t&acirc;ches
                </a>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="card card-body bg-light p-4">
            <form action="/task/store/{{$user_id}}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Titre</label>
                    <input type="text" class="form-control" id="title" name="title">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <textarea type="text" class="form-control" id="description" name="description" rows="5"></textarea>
                </div>
                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-control">
                        @foreach ($statuses as $status)
                            <option value="{{ $status['value'] }}">{{ $status['label'] }}</option>
                        @endforeach
                    </select>
                </div>
                <a href="{{ route('user.show', $user_id) }}" class="btn btn-sm btn-danger">
                    <i class="fa fa-arrow-left"></i> Annuler
                </a>
                <button type="submit" class="btn btn-sm btn-primary">
                    <i class="fa fa-check"></i> Créer
                </button>
            </form>
        </div>
@endsection 