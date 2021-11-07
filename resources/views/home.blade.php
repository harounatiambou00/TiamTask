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
                <h6 class="">Toutes vos t&acirc;ches</h6>
            </div> 
            <div class="float-end pb-2">
                <a href="/task/create/{{$user->id}}" class=" btn btn-sm btn-info">
                    <i class="fa fa-plus-circle"></i> Nouveau
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
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#edit_confimation_popup">
                                <i class="fa fa-trash"></i>
                            </button>
                            <div class="modal fade" id="edit_confimation_popup" tabindex="-1" aria-labelledby="edit_confimation_popup_label" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="edit_confimation_popup_label">Suppression</h4>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <h6>Veuillez confirmer la suppression de cette t&acirc;che.</h6>
                                            <div class="alert alert-danger " role="alert">
                                                <strong><i class="fas fa-info-circle"></i>  Remarque: </strong> Cette action est irrémédiable.
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-sm btn-secondary" data-bs-dismiss="modal">
                                                <i class="fa fa-arrow-left"></i> Annuler
                                            </button>
                                            <button type="submit" class="btn btn-sm btn-danger">
                                                <i class="fa fa-trash"></i> Confimer
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        @endforeach

        @if (count($userTasks) === 0)
            <div class="alert alert-danger p-2" role="alert">
                Aucune t&acirc;che n'est enregistrée.
                <br>
                <br>
                <div>
                    <a href="/task/create/{{$user->id}}" class="btn btn-sm btn-info">
                        <i class="fa fa-plus-circle"></i> Créer en une.
                    </a>
                </div>
            </div>
        @endif
@endsection