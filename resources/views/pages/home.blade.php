@extends('layout/master')
@section('title', 'Home')

@section('content')
<div class="row mg-20">
    <div class="col-md-5 mg-bottom">
       <div class="card yel-bg">
        <div class="card-body">
          <div class="jumbo">
              <h5>REQUEST YOUR SERVICES</h5>
          </div>
          <br />
          
          @livewire('work-form')

          </div>
        </div>
      </div>
    </div>

    <div class="col-md-7">
      <div class="col">
        <div class="card alt-bg">
          <img src="https://chummy-workers.firebaseapp.com/static/media/slide1.86faf305.gif" class="card-img-top rounded-img" alt="...">
            <div class="card-body">
              
            </div>
        </div>
        <br>
        <div class="jumbotron alt-bg rounded-img" style="height:270px">
          <div class="jumbo-content">
            <h1>Hello, NIGERIA!</h1>
            <p>We are one of the best electrical technicians in Nigeria with high train skill workers. Fast delivery , Quality Services , Maintenance and many more.</p>
            <span>
              <a class="btn alt-btn" href="#" >Services</a>
              <a class="btn alt-btn" href="#" >Terms/Conditions</a>
            </span>
          </div>
        </div>
    </div>
</div>

@endsection