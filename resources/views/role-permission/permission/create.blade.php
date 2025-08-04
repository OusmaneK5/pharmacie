@extends('layouts.role-permission.app')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Créer une permission</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Créer</a></li>
          <li class="breadcrumb-item active">Permissions</li>
        </ol>
      </div>
    </div>
  </div>
</div>

<section class="content">
  <div class="container-fluid">
    <div class="card card-primary">
      <div class="card-header d-flex align-items-center">
        <h3 class="card-title"><i class="fas fa-lock"></i> Nouvelle permission</h3>
        <a href="{{ url('permissions') }}" class="btn btn-danger btn-sm ml-auto">
          <i class="fas fa-arrow-left"></i> Retour
        </a>
      </div>
      <div class="card-body">
        <form action="{{ url('permissions') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="name">Nom de la permission</label>
            <input type="text" name="name" class="form-control" placeholder="Ex : gérer les utilisateurs">
          </div>
          <div class="text-right">
            <button type="submit" class="btn btn-primary">
              <i class="fas fa-check-circle"></i> Enregistrer
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection
