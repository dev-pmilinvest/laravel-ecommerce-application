@extends('site.app')
@section('title', 'Commande complétée')
@section('content')
    <section class="section-pagetop bg-dark">
        <div class="container clearfix">
            <h2 class="title-page">Commande complétée</h2>
        </div>
    </section>
    <section class="section-content bg padding-y border-top">
        <div class="container">
            <div class="row">
                <main class="col-sm-12">
                    <p class="alert alert-success">Votre commande a été passée avec success. Le numéro de votre commande est : {{ $order->order_number }}.</p></main>
            </div>
        </div>
    </section>
@stop
