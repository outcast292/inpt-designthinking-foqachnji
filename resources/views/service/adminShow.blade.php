@extends('layouts.app2')
@section('content')
    <div class="container-fluid  mh-100" style="height: 100%">
        <div class="row mh-100">
            <div class="col-2  mh-100">
                <div class="my-5">
                    <h1 style="text-align: center; color:whitesmoke;">FoqachNji</h1>
                    <hr>
                    <br><br><br><br>
                    <div class="mt-5"><button class="btn btn-light  btn-block "><i class="bi bi-house-fill"></i> Page d'acceuil</button></div>
                    <div class="mt-4"><button class="btn btn-light btn-block "><i class="bi bi-file-earmark-break"></i> Voir ma Page</button></div>
                    <div class="mt-4"><button class="btn btn-light btn-block "><i class="bi bi-calendar-check"></i> Calendrier</button></div>
                    <div class="mt-4"><button class="btn btn-light btn-block "><i class="bi bi-graph-up"></i> Statistiques</button></div>
                    <div class="mt-4"><button class="btn btn-light btn-block "><i class="bi bi-sliders"></i> Parametres</button></div>
                    <br>
                    <br><br><br><br><br>
                    <br><br><br><br><br>
                    <div class="mt-2"><button class="btn  btn-block  btn-warning"><i class="bi bi-telephone-fill"></i> Demander de l'aide</button></div>
                    <div class="mt-2"><a href="/serviceAdmin/login" class="btn  btn-block btn-danger"><i class="bi bi-box-arrow-right"></i> Se deconnecter</a></div>
                </div>
            </div>
            <div class="col bg-light pt-5">
                <div class="row mb-2">
                    <div class="col-10">
                        <h1>
                            Samedi 01 Mai 2022
                        </h1>
                    </div>
                    <div class="col">
                        <time-p></time-p>
                    </div>
                </div>
                <hr>

                <div class="row d-flex justify-content-around">
                    <div class="col-4 " style="height: 100%">
                        <div class="card bg-success pt-3 ">
                            <div class="card-body">
                                <h5 class="card-title text-light">Nombre des rendez-vous</h5>
                                <div style="text-align: right">

                                    <p href="#" class=" h1 mt-5  ">5</p>
                                </div>
                            </div>
                            <br>
                        </div>
                    </div>
                    <div class="col-4 ">
                        <div class="card bg-danger pt-3 pb-3">
                            <div class="card-body">
                                <h5 class="card-title text-light">Prochain rendez-vous</h5>
                                <div class="row">
                                    <div class="col">
                                        <br><br>
                                        <h1 class=" ">10:00</h1>
                                    </div>
                                    <div class="col">
                                        <h3 class=" ">TEST1 TEST1</h3>
                                        <h4 class=" ">0666666666</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <div class="row d-flex justify-content-around mt-5">
                    <div class="col-5">
                        <div class="row d-flex justify-content-around ">
                            <div class="col-12">
                                <h4>Vos rendez-vous d'aujourdhui</h4>
                                <hr>

                            </div>
                            <div class="col">
                                <div class="border text-center p-2 bg-danger"><button class="btn text-light">8-9</button></div>
                                <div class="border text-center p-2 bg-danger my-3"><button class="btn text-light">9-10</button></div>
                                <div class="border text-center p-2 bg-danger  my-3"><button class="btn text-light" data-toggle="modal" data-target="#modalClient">10-11</button></div>
                                <div class="border text-center p-2 bg-secondary  my-3"><button class="btn text-light">11-12</button></div>
                            </div>
                            <div class="col">
                                <div class="border text-center p-2 bg-secondary "><button class="btn text-light">2-3</button></div>
                                <div class="border text-center p-2 my-3 bg-secondary"><button class="btn text-light">3-4</button></div>
                                <div class="border text-center p-2 bg-danger my-3"><button class="btn text-light">4-5</button></div>
                                <div class="border text-center p-2 bg-danger my-3"><button class="btn text-light">5-6</button></div>
                            </div>
                        </div>
                    </div>

                    <div class="col-4 pt-2 rounded" style="background-color: #5a696b63;">
                        <form action="">
                            <h4 class="pt-2">Ajouter un rendez-vous</h4>
                            <hr>
                            <fieldset>
                                <label for="">Nom Client</label>
                                <input type="text" class="form-control">
                                <label for="">Tel</label>
                                <input type="tel" class="form-control">
                                <label for="">email</label>
                                <input type="email" class="form-control">
                                <label for="">heure et date</label>
                                <input type="datetime-local" class="form-control">
                                <button class="btn btn-success btn-block my-3"><i class="bi bi-plus-fill"> </i> Ajouter</button>
                            </fieldset>

                        </form>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal fade" id="modalClient" tabindex="-1" aria-labelledby="modalClientLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="modalClientLabel">Visualiser Rendez-vous</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row p-3">
                            <label for="">Nom Complet</label>
                            <input type="text" class="form-control m-2" readonly value="Mdarhri Othmane" />
                            <label for="">Email</label>
                            <input type="email" class="form-control m-2" readonly value="outhman.mdarhri@gmail.com" />
                            <label for="">temp heure</label>
                            <input type="datetime-local" step="" readonly class="form-control m-2" name="" value="2021-05-01T11:00" />
                            <label for="">telephone</label>
                            <input type="tel" class="form-control m-2" name="" id="" readonly value="0777988095" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">
                            Fermer
                        </button>
                        <button type="button" class="btn btn-success">
                            Reserver
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
