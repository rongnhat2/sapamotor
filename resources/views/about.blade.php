@extends('layout')
@section('title', "Home")


@section('css')

@endsection()


@section('body') 
    <div class="I-about">
            <div class="about-top"  style="background-image: url('{{ asset("assets/images/about-us.png") }}'); min-height: 600px;">

            </div>
            <div class="wrapper">
                <div class="about-wrapper">
                    <h3 class="about-title">About us</h3>
                    <p class="about-description"> Established in 2013, SAPA Motor sells electronic equipment, electronic components. We also provides OEM, ODM services for Viet Nam as long as global companies.</p>
                    <p class="about-description">We have strong knowledge about designing products in domain of industrial automation, automotive, telecommunication, power electronics.</p>
                    <p class="about-description">We have solid partners of many companies about electronics component distributors, mechanical engineering service companies.</p>
                    <p class="about-description">Our mission is helping the clients to design and manufacture the best electronic products.</p> 
                </div>
            <img src="{{ asset("assets/images/map.png") }}" alt="">
            </div>
        </div>
@endsection()

@section('js') 

@endsection()
