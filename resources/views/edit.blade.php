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
                <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#edit_deletion_popup">
                    <i class="fa fa-check"></i> Enregistrer
                </button>
                <div class="modal fade" id="edit_deletion_popup" tabindex="-1" aria-labelledby="edit_deletion_popup_label" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="modal-title" id="edit_deletion_popup_label">Modification</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <h6>Veuillez confirmer l'enregistrement de tout les changement effectués.</h6>
                                <div class="alert alert-info " role="alert">
                                    <strong><i class="fas fa-info-circle"></i>  Remarque: </strong> Vous pouvez toujors reéditer cette t&acirc;che plutard.
                                </div>
                            </div>
                            <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                                <i class="fa fa-arrow-left"></i> Annuler
                            </button>
                            <button type="submit" class="btn btn-danger">
                                <i class="fa fa-check"></i> Confimer
                            </button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
@endsection  