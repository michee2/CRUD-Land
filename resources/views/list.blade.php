@extends('layouts.base')

@section('contenu')
<div class="card">
    <div class="card-header" style="display:flex">
      <h3 class="card-title" style="margin:auto;">LISTE DES PAYS</h3>
      <button type="submit" class="btn btn-primary" style="margin:auto;">
        <a href="{{route('add')}}" style="color:white;">AJOUTER UN PAYS</a>
      </button>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <table id="example1" class="table table-bordered table-striped dataTable dtr-inline" role="grid" aria-describedby="example1_info">
        <thead>
        <tr role="row">
            <th class="sorting sorting_asc" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending">#</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Libelle</th>

            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending">Code indicatif</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Continent</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Population</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Capitale</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Monnaie</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Langue</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Superficie</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Est laïque</th>
            <th class="sorting" tabindex="0" aria-controls="example1" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending">Action</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($lands as $land)
                @if (($land->id%2)!=0)
                    <tr class="odd">
                        <td class="dtr-control sorting_1" tabindex="0" >{{$land->id}}</td>
                        <td>{{$land->Libelle}}</td>

                        <td>{{$land->code_indicatif}}</td>
                        <td>{{$land->Continent}}</td>
                        <td>{{$land->population}}</td>
                        <td>{{$land->capitale}}</td>
                        <td>{{$land->monnaie}}</td>
                        <td>{{$land->langue}}</td>
                        <td>{{$land->Superficie}}</td>
                        <td>@if ($land->est_laique)
                                Vrai
                            @else
                                Faux
                            @endif
                        </td>
                        <td>
                            <a href="{{ route("users.edit", ["id" => $land->id]) }}">
                                <i class="fas fa-pen"></i>
                            </a>

                            <a href="{{ route("lands.destroy", ["id" => $land->id]) }}">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                @else
                    <tr class="even">
                        <td class="dtr-control sorting_1" tabindex="0">{{$land->id}}</td>
                        <td>{{$land->Libelle}}</td>

                        <td>{{$land->code_indicatif}}</td>
                        <td>{{$land->Continent}}</td>
                        <td>{{$land->population}}</td>
                        <td>{{$land->capitale}}</td>
                        <td>{{$land->monnaie}}</td>
                        <td>{{$land->langue}}</td>
                        <td>{{$land->Superficie}}</td>
                        <td>@if ($land->est_laique)
                                Vrai
                            @else
                                Faux
                            @endif
                        </td>
                        <td>
                            <a href="{{ route("users.edit", ["id" => $land->id]) }}">
                                <i class="fas fa-pen"></i>
                            </a>

                            <a href="{{ route("lands.destroy", ["id" => $land->id]) }}">
                                <i class="far fa-trash-alt"></i>
                            </a>
                        </td>
                    </tr>
                @endif
            @endforeach
        </tbody>
      </table>
    </div>
    <!-- /.card-body -->
  </div>
@endsection
