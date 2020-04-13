@include('layouts.app')

<div class="container">
    <div class="row">
        <div class="col-bg-8">
            <img src="{{asset('img/bannier_orange.png')}}" class="img-fluid mb-5" alt="Responsive image">
            <br>

            @if(count($errors)>0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{$error}} </li>
                        @endforeach

                    </ul>

                </div>

            @endif

            <form action="{{route('inscription.store')}}"method="post" enctype="multipart/form-data">
                {{ csrf_field()}}

                <h1>Demande de formation</h1>
                <span> (*) champ obligatoire </span>

                <br>
                <div class="form-group mt-3">
                    <div class="form-group mt-3">

                        <h4>Information sur le demandeur</h4>

                        <!--input -->
                        <label for="name">* Nom</label>
                        <div class="input-fieled">
                            <div class="form-group">
                                <input type="text" class="form-control mb-3"name="lastname" id="lastname"
                                       placeholder="{{Request::old('lastname')}}">
                            </div>
                        </div>

                        <!--input -->
                        <label for="name">* Prenom</label>
                        <div class="input-fieled">
                            <div class="form-group">
                                <input type="text" class="form-control mb-3"name="name" id="name"
                                       placeholder="{{Request::old('name')}}">
                            </div>
                        </div>

                        <!--input -->
                        <label for="email">* Email</label>
                        <div class="input-fieled">
                            <div class="form-group">
                                <input type="email" class="form-control mb-3"name="email" id="email"
                                       placeholder="{{Request::old('email')}}">
                            </div>
                        </div>

                        <!--input -->
                        <label for="direction">* Directio/Departement/Services</label>
                        <div class="input-fieled">
                            <div class="form-group">
                                <input type="text" class="form-control mb-3"name="direction" id="direction"
                                       placeholder="{{Request::old('direction')}}">
                            </div>
                        </div>
                    </div>

                    <div class="form-group mt-3">
                        <h4>Les demandes</h4>
                        <!--input -->
                        <label for="nomForm">* Formation demandée</label>
                        <div class="input-fieled">
                            <div class="form-group">
                                <input type="text" class="form-control mb-3"name="nomForm" id="nomForm"
                                       placeholder="{{Request::old('nomForm')}}">
                            </div>
                        </div>

                        <!--textarea -->
                        <label for="discForm">* Description du Besoin</label>
                        <div class='input-field'>
                            <div class="form-group{{ $errors->has('discForm') ? 'has-error' :'' }}" >
                                <textarea class="form-control mb-3" name="discForm" id="discForm" rows="3" placeholder="{{Request::old('discForm')}}"></textarea>
                            </div>
                        </div>

                        <!--input -->
                        <p>* Population ciblée par la formation:(mentionner la liste des participants identifiés si
                            possible)</p>
                        <div class="input-fieled">
                            <div class="form-group">
                                <input type="text" class="form-control mb-3"name="cible" id="cible"
                                       placeholder="{{Request::old('cible')}}">
                            </div>
                        </div>

                        <!--radio-->
                        <div class="form-groupe" >
                            <p>Cette action de la formation a-t elle été validée au niveau du plan de formation
                                2020?</p>

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="valid" id="valid" value="oui" >
                                <label class="form-check-label" for="exampleRadios1">OUI</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="valid" id="valid" value="non">
                                <label class="form-check-label" for="exampleRadios2">NON</label>
                            </div>
                        </div>

                        <!--checkbox -->
                        <div class="form-groupe mt-3">
                            <p>Cette formation répond à quel besoin?</p>

                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="Check" name="besoin[]" value="Evolution des métiers et des
                                    compétences">
                                <label class="form-check-label"> Evolution des métiers et des compétences</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="Check" name="besoin[]" value="Projet de transfermation et
                                    d'investissement">
                                <label class="form-check-label"> Projet de transfermation et d'investissement</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" id="Check" name="besoin[]" value="Dysfonctionnement et difficulté
                                    d'atteindre des objectifs">
                                <label class="form-check-label"> Dysfonctionnement et difficulté d'atteindre des objectifs</label>
                            </div>

                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample" id="check" name="besoin">
                                <label class="form-check-label" for="defaultInline3">Autres</label>
                                <div class="collapse" id="collapseExample">
                                    <input type="text" class="form-control mb-3" id="exampleFormControlInput1" name="besoin[]">
                                </div>
                            </div>
                        </div>

                        <br>

                        <!--input -->
                        <p>* Quelles sont les compétences à developper suite à cette formation?</p>
                        <div class='input-field'>
                            <div class="form-group{{ $errors->has('comp') ? 'has-error' :'' }}" >
                                <input type="text" class="form-control mb-3" id="exampleFormControlInput1" name="comp"
                                         value="{{Request::old('comp')}}">
                            </div>
                        </div>

                        <br>

                        <!--input -->
                        <p>* Quelles est le niveau de priorite de deploiement de cette action de formation?</p>
                        <div class='input-field'>
                            <div class="form-group{{ $errors->has('niveau') ? 'has-error' :'' }}" >
                                <input type="text" class="form-control mb-3" id="exampleFormControlInput1" name="niveau"
                                       value="{{Request::old('niveau')}}">
                            </div>
                        </div>

                        <br>
                        <!--input -->
                        <p>* Quelles sont les objectifs opérationnels et impact de la formation sur l'activité(KPI de
                            suivi)?</p>
                        <div class='input-field'>
                            <div class="form-group{{ $errors->has('objectif') ? 'has-error' :'' }}" >
                                <input type="text" class="form-control mb-3" id="exampleFormControlInput1" name="objectif"
                                       value="{{Request::old('objectif')}}">
                            </div>
                        </div>

                        <br>

                        <p>Quelle est le niveau de priorité de deploiement de cette action de formation ?</p>

                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col" class="text-center"></th>
                                <th scope="col" class="text-center">Eleve</th>
                                <th scope="col" class="text-center">Moyen</th>
                                <th scope="col" class="text-center">Faible</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">Urgent</th>
                                <td class="text-center"><input type="radio" name="urgence" id="radio"   value="eleve"><br></td>
                                <td class="text-center"><input type="radio" name="urgence" id="radio"   value="moyen"><br></td>
                                <td class="text-center"><input type="radio" name="urgence" id="radio"   value="faible"><br></td>
                            </tr>
                            <tr>
                                <th scope="row">Importance</th>
                                <td class="text-center"><input type="radio" name="importance" id="radio1"   value="eleve"><br></td>
                                <td class="text-center"><input type="radio" name="importance" id="radio1"   value="moyen"><br></td>
                                <td class="text-center"><input type="radio" name="importance" id="radio1"   value="faible"><br></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <br>

                <button type="submit" class="btn btn-primary btn-lg btn-block">insciption du formulaire</button>

            </form>
        </div>
    </div><!--row-->
</div><!--container-->


