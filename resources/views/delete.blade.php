@extends('layouts.base')

@section('contenu')
<div class="col-md-12">
    <!-- jquery validation -->
    <div class="card card-primary">
      <div class="card-header">
        <h3 class="card-title">Quick Example <small>jQuery Validation</small></h3>
      </div>
      <!-- /.card-header -->
      <!-- form start -->
      <form id="quickForm" method="POST" action="{{route('users.store')}}">
        @csrf <!--Pour la sécurité sur le web-->
        @method('POST')
        <div class="card-body">
            <div class="form-group" data-select2-id="29">
                <label>Capitale</label>
                <select name="capitale" required value="{{old('capitale')}}" class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option selected="selected" data-select2-id="3">Abidjan</option>
                  <option data-select2-id="35">Paris</option>
                  <option data-select2-id="36">Moscou</option>
                  <option data-select2-id="37">Pekin</option>
                  <option data-select2-id="38">Tokyo</option>
                  <option data-select2-id="39">Akra</option>
                  <option data-select2-id="40">Washington</option>
                  <option data-select2-id="39">Madrid</option>
                  <option data-select2-id="39">Québec</option>
                  <option data-select2-id="39">Lomé</option>
                  <option data-select2-id="39">Douala</option>
                  <option data-select2-id="39">Mexico</option>
                  <option data-select2-id="39">Bamako</option>
                  <option data-select2-id="39">Brazaville</option>
                </select>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          <button type="submit" class="btn btn-primary">S'identifier</button>
        </div>
      </form>
    </div>
    <!-- /.card -->
    </div>
  @endsection
