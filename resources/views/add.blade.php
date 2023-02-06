@extends('layouts.base')

@section('contenu')
<div class="col-md-12">
    <!-- jquery validation -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">NOUVEL ENREGISTREMENT</small></h3>
      </div>
      <!-- /.card-header -->

      <!-- form start -->
      <form id="quickForm" method="POST" action="{{route('users.store')}}">
        @csrf <!--Pour la sécurité sur le web-->
        @method('POST')
        <div class="card-body">
            <div class="form-group">
                <label for="exampleInputEmail1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Libelle(Pays)</font></font></label>
                <input name="Libelle" value="{{old('Libelle')}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrez le libelle">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Capitale</font></font></label>
                <input name="capitale" value="{{old('capitale')}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrez la capitale du pays">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Code indicatif</font></font></label>
                <input name="code_indicatif" value="{{old('capitale')}}" type="number" class="form-control" id="exampleInputEmail1" placeholder="Entrez le code indicatif du pays">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Population</font></font></label>
                <input name="population" value="{{old('capitale')}}" type="text" class="form-control" id="exampleInputEmail1" placeholder="Entrez le nombre d'habitants du pays">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Superficie</font></font></label>
                <input name="Superficie" value="{{old('capitale')}}" type="number" class="form-control" id="exampleInputEmail1" placeholder="Entrez la superficie du pays">
            </div>
            <div class="form-group" data-select2-id="29">
                <label>Continent</label>
                <select name="Continent" value="{{old('capitale')}}" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option selected="selected" data-select2-id="3">Afrique</option>
                  <option data-select2-id="35">Amérique</option>
                  <option data-select2-id="36">Europe</option>
                  <option data-select2-id="37">Asie</option>
                  <option data-select2-id="38">Océanie</option>
                  <option data-select2-id="39">Antarctique</option>
                </select>
            </div>
            <div class="form-group" data-select2-id="29">
                <label>Monnaie</label>
                <select name="monnaie" value="{{old('capitale')}}" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option selected="selected" data-select2-id="3">XOF</option>
                  <option data-select2-id="35">EUR</option>
                  <option data-select2-id="36">DOLLAR</option>
                </select>
            </div>
            <div class="form-group" data-select2-id="29">
                <label>Langue</label>
                <select name="langue" value="{{old('capitale')}}" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option selected="selected" data-select2-id="3">FR</option>
                  <option data-select2-id="35">EN</option>
                  <option data-select2-id="36">AR</option>
                  <option data-select2-id="37">ES</option>
                </select>
            </div>
            <div class="form-group" data-select2-id="29">
                <label>Est laïque</label>
                <select name="est_laique" value="{{old('capitale')}}" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option selected="selected" data-select2-id="3">0</option>
                  <option data-select2-id="35">1</option>
                </select>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">Enregistrer</button>
          <button type="submit" class="btn btn-primary" style="position:absolute; right:20px;">
            <a href="{{route('list')}}" style="color:white;">Retour</a>
          </button>
        </div>
      </form>
    </div>
    <!-- /.card -->
    </div>
  @endsection
