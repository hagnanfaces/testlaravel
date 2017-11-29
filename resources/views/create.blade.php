@include('inc.header')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <form class="form-horizontal" method="POST" action=" {{ url('/insert') }}" >
                {{csrf_field()}}
                <fieldset>
                    <legend>JQI Store Application</legend>
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{$error}}
                            </div>

                        @endforeach
                    @endif
                    <div class="form-group">
                        <label for="inputNom" class="col-lg-2 control-label">Nom</label>
                        <div class="col-lg-10">
                            <input type="text" name="nom" class="form-control" id="inputNom" placeholder="Nom">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPrenom" class="col-lg-2 control-label">Prenoms</label>
                        <div class="col-lg-10">
                            <input type="text" name="prenom" class="form-control" id="inputPrenom" placeholder="Prenoms">

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword" class="col-lg-2 control-label">Date de Naissance</label>
                        <div class="col-lg-10">
                            <input type="text" name="datenaissance" class="form-control" id="inputPassword" placeholder="Date de Naissance">

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword" class="col-lg-2 control-label">Nationalite</label>
                        <div class="col-lg-10">
                            <input type="text" name="nationalite" class="form-control" id="inputPassword" placeholder="Nationalite">

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword" class="col-lg-2 control-label">Quartier</label>
                        <div class="col-lg-10">
                            <input type="text" name="quartier" class="form-control" id="inputPassword" placeholder="Quartier">

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword" class="col-lg-2 control-label">Formation</label>
                        <div class="col-lg-10">
                            <input type="text" name="formation" class="form-control" id="inputPassword" placeholder="Formation">

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword" class="col-lg-2 control-label">Numero SIM</label>
                        <div class="col-lg-10">
                            <input type="text" name="numerosim" class="form-control" id="inputPassword" placeholder="Numero SIM">

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword" class="col-lg-2 control-label">Numero Whatsapp</label>
                        <div class="col-lg-10">
                            <input type="text" name="numerowhatsapp" class="form-control" id="inputPassword" placeholder="Numero Whatsapp">

                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword" class="col-lg-2 control-label">E-Mail</label>
                        <div class="col-lg-10">
                            <input type="text" name="email" class="form-control" id="inputPassword" placeholder="E-mail">

                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            {{--<button type="reset" class="btn btn-default">Cancel</button>--}}
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <a href="{{ url('/') }}" class="btn btn-default">Back </a>
                        </div>
                    </div>




                </fieldset>
            </form>
        </div>
    </div>
</div>
@include('inc.footer')