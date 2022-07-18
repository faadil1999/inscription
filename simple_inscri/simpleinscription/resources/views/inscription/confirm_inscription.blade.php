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
            <h1 class="display-3 fw-bold">Inscription Confirmé</h1>
            <div class="heading-line mb-1"></div>
        </div>
        <!-- START THE DESCRIPTION CONTENT  -->
        <div class="row pt-2 pb-2 mt-0">
            <div class="bg-white text-center mb-4">
              
                </div>
        </div>
    </div>
    <div class="row justify-content-center">
        <!-- Contact form -->
      
        <form class="col-md-6 needs-validation" novalidate  method="post">
            @csrf
            <div class="col-12 my-5 confirm">
                Votre inscription a été envoyer  et confirmer avec success.
            </div>
          
                
            </div>
        </form>
        <!-- Button trigger modal -->




       
</section>

<style>
    .confirm{
        background-color: #b2ff59;
        padding: 10px;
    }
</style>


@endsection