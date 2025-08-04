@extends('layouts.role-permission.app')

@section('content')
 @if (session('status'))
   <div class="alert alert-success">{{ session('status') }}</div>
 @endif
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Liste des Permissions</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Permission</a></li>
          <li class="breadcrumb-item active">Liste</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="card">
      <div class="card-header d-flex align-items-center">
        <h3 class="card-title">Permissions</h3>
        <a href="{{ url('permissions/create') }}" class="btn btn-primary ml-auto">Ajouter une Permission</a>
      </div>
      <div class="card-body p-0">
        <table class="table table-bordered table-striped m-0">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nom</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($permissions as $permission)
              <tr>
                <td>{{ $permission->id }}</td>
                <td>{{ $permission->name }}</td>
                <td>
                  <a href="{{ url('permissions/'.$permission->id.'/edit') }}" class="btn btn-success btn-sm">
                    <i class="fas fa-edit"></i>
                  </a>
                  <form action="{{ url('permissions/'.$permission->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Êtes-vous sûr ?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm mx-2">
                      <i class="fas fa-trash-alt"></i>
                    </button>
                  </form>
                </td>
              </tr>
            @empty
              <tr>
                <td colspan="3" class="text-center">Aucune permission enregistrée.</td>
              </tr>
            @endforelse
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
@endsection
