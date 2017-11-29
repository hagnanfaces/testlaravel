@include('inc.header')
    <div class="container">
        <div class="row">
            <legend>JQI Store Application</legend>
            @if(session('info'))
                <div class="alert alert-success">
                {{session('info')}}
                </div>
            @endif
            <table class="table table-striped table-hover ">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Prenoms</th>
                    <th>Date de Naissance</th>
                    <th>Nationalite</th>
                    <th>Quartier</th>
                    <th>Formation</th>
                    <th>Numero SIM</th>
                    <th>Numero Whatsapp</th>
                    <th>Mail</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                    @if(count($jeunes) > 0)
                        @foreach($jeunes->all() as $jeune)

                        <tr>
                            <td>{{ $jeune->id }}</td>
                            <td>{{ $jeune->nom }}</td>
                            <td>{{ $jeune->prenom }}</td>
                            <td>{{ $jeune->datenaissance }}</td>
                            <td>{{ $jeune->nationalite }}</td>
                            <td>{{ $jeune->quartier }}</td>
                            <td>{{ $jeune->formation }}</td>
                            <td>{{ $jeune->numerosim }}</td>
                            <td>{{ $jeune->numerowhatsapp }}</td>
                            <td>{{ $jeune->email }}</td>
                            <td>
                                <a href="{{ url('') }}" class="label label-primary">Afficher </a>   |
                                <a href="{{ url('') }}" class="label label-success">Modifier </a>   |
                                <a href="{{ url('') }}" class="label label-danger">Supprimer </a>
                            </td>

                        </tr>
                        @endforeach
                    @endif

                </tbody>
            </table>
        </div>
    </div>

@include('inc.footer')
