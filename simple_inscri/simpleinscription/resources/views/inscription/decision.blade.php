@extends('layouts.web')

@section('main')

<section class="container mb-lg-2 mb-xl-5" style="margin-top: 90px">
    @if ($message = Session::get('success'))
        <div class="alert alert-success text-center">
            <p>{{ $message }}</p>
        </div>
    @endif
    {{-- 

    @if (isset($errors) && $errors->any())
        <div class="alert alert-danger">

            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach

        </div>
    @endif

    @if ($message = Session::get('error'))
        <div class="alert alert-danger text-center">
            <p>{{ $message }}</p>
        </div>
    @endif --}}
    <div class="container">
        <div class="row text-center">
            <h1 class="display-3 fw-bold">Inscription</h1>
            <div class="heading-line mb-1"></div>
        </div>
        <!-- START THE DESCRIPTION CONTENT  -->
    </div>
    <div class="row justify-content-center">
        <!-- Contact form -->
      
        <form class="col-md-6 needs-validation pb-4 pt-4" novalidate action="{{route('confirm_inscription',['data'=>$data])}}"  method="post">
            @csrf
            <div class="col-12 my-3 payattention">
               <strong>Attention !</strong> Votre inscription a été envoyer avec succès.Pour confirmer votre inscription , vous dever payer.En payant maintenant , vous beneficier d'une promotion de 30% sur le prix initial.
            </div>
            <div class="row">
                <div class="col-6">
                    <button type="submit" class="btn btn-primary rounded-pill">
                        Maintenant
                    </button>
                </div>
                <div class="col-6 flex_btn">
                    <button type="button" class="btn btn-danger rounded-pill"  data-bs-toggle="modal" data-bs-target="#buyafter">
                        Plustard
                    </button> 
                    
                </div>   

            </div>
                
            </div>
        </form>
        <!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="buyafter" tabindex="-1" aria-labelledby="buyafterbody" aria-hidden="true">
<div class="modal-dialog">
  <div class="modal-content">
    <div class="modal-header">
      <h5 class="modal-title" id="buyafterbody">Payer Plustard</h5>
      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
    </div>
    <div class="modal-body">
      Voulez vous vraiment payer plustard ? En payant plustard votre inscription ne sera pas prise en compte mais en payant maintenant vous beneficiez d'une bourse de reduction de 30%. 
    </div>
    <form action="{{route('no_confirm_inscription',['data'=>$data])}}" method="post">
        @csrf
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annuler</button>
            <button type="submit" class="btn btn-danger">Oui</button>
          </div>

    </form>
    
  </div>
</div>
</div>

       
</section>

<style>
    .payattention{
        background-color: #fff59d;
        padding: 10px;
    }
    .flex_btn{
        display: flex;
        justify-content: flex-end;
    }
</style>



@endsection