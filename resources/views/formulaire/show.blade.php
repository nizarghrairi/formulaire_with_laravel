@include('layouts.app')

<div class="container admin">
    <div class="row">

        <h1><strong>listes des demande</strong></h1>
        <br>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>date</th>
                    <th>nom</th>
                    <th>prenom</th>
                    <th>mail</th>
                    <th>direction</th>
                    <th>nom_formation</th>
                    <th>description</th>
                    <th>Population</th>
                    <th>validation</th>
                    <th>Besoin</th>
                    <th>dev_comp</th>
                    <th>objectif_format</th>
                    <th>impact_format</th>
                    <th>Urgence</th>
                    <th>Importance</th>
                </tr>
                </thead>
                <tbody>


                @foreach($formulaire as $item)
                    <tr>
                        <td>{{$item->created_at->format('Y-M-d')}}</td>
                        <td>{{$item->name}}    </td>
                        <td> {{$item->lastname}}  </td>
                        <td> {{$item->email}}  </td>
                        <td> {{$item->direction}}  </td>
                        <td> {{$item->nomForm}}  </td>

                        <td> {{$item->descForm}}  </td>
                        <td> {{$item->cible}}  </td>

                        <td> {{$item->valid}}  </td>
                        <td> {{$item->besoin}}  </td>
                        <td> {{$item->comp}}  </td>
                        <td> {{$item->niveau}}  </td>
                        <td> {{$item->objectif}}  </td>
                        <td> {{$item->urgence}}  </td>
                        <td> {{$item->importance}}  </td>

                    </tr>

                @endforeach

                </tbody>

            </table>
        </div>
        {{ $formulaire->links() }}
    </div>
   <a href="{{route('export.excel')}}" class="btn btn-success btn-lg"><span
            class="glyphicon glyphicon-plus"></span> Export excel</a>

</div>



