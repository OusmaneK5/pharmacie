@extends('layouts.role-permission.app')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0">Liste des Permissions</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="">Permission</a></li>
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
            <tr>
              <td>1</td>
              <td>Créer un utilisateur</td>
              <td>
                <a href="#" class="btn btn-success btn-sm">
                  <i class="fas fa-edit"></i>
                </a>
                <a href="#" class="btn btn-danger btn-sm mx-2" onclick="return confirm('Êtes-vous sûr ?')">
                  <i class="fas fa-trash-alt"></i>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>
@endsection
