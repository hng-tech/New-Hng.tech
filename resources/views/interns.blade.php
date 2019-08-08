@extends('layouts.core')
@section('title', 'About')
@section('content')
@section('nav')
<body class="pi">

	<div class="container intern-body">
    @parent
@endsection

        <!-- Header -->
        <header class="head">

            <h3>Our Past Interns</h3>
            <h5>Our Interns and the Impact They Have Made</h5>

        </header>




       <div class="e-company row inters">


               <?php

                   $data = file_get_contents(storage_path('/storage/data.json'));
             $interns = json_decode($data);

             $more_data = file_get_contents(storage_path('/storage/company.json'));
             $companies = json_decode($more_data);

            foreach($companies as $company){
                      echo "<div class='each-company'>";

              echo "<div class='company'>
              <p>".$company->about."</p>
              <div class='logo-container'>
              <img src='".asset($company->logo)."' alt='".$company->name." logo'>
              </div>
              </div>";
                      echo "<div class='interns'>";
                foreach($interns as $intern){
                              if($intern->company == $company->name){
                                  echo "<div class='intern' >
                                  <img class='card-img-top' style='object-fit: cover' src='".$intern->picture."' alt='Card image cap'>
                                  <p class='name'>".$intern->name."</p>
                                  <p class='stack'>".$intern->stack."<br />".$intern->role." @<a style='font-size: 12px' href='".$intern->company_url."'>".$intern->company."</a>
                                  </p>
                                  </div>";
                                  }
                              }
                      echo "</div>";
                      echo "</div>";
                    }




          ?>


        </div>


        <div class="other-interns">
        <?php
        foreach($interns as $intern){
                if($intern->company == ""){
                    echo "<div class='intern' ><img class='card-img-top' style='object-fit: cover' src='".$intern->picture."' alt='Card image cap'><p class='name'>".$intern->name."</p>
                    <p class='stack'>".$intern->stack."<br />".$intern->role." @<a style='font-size: 12px' href='".$intern->company_url."'>".$intern->company."</a></p></div>";
                    }
                }

            ?>
        </div>

    </div>
    @endsection
