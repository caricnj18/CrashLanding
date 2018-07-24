@extends('layouts.app')

@section('content')
<div class="jumbotron text center">
    <h1>Welcome to CrashLanding</h1>
<p>Feel free to look through all of our options</p>
</div>

<!--all of these images are not displaying -->
<div class="browseGrid">
    <!--House 01-->
        <div class="row">
                <div class="col-sm-6 col-md-4">
                  <div class="thumbnail">
                    <img data-src="../../assets/images/house01.jpg" alt="House01" class="img-rounded">
                    <div class="caption">
                      <h3>Option 01</h3>
                      <p>Summary of House 01</p>
                      <p><a href="#" class="btn btn-primary" role="button">Reserve</a></p>
                    </div>
                  </div>
                </div>
              </div>
              <!--House 02-->
              <div class="row">
                    <div class="col-sm-6 col-md-4">
                      <div class="thumbnail">
                        <img data-src="../../assets/images/house02.jpg" alt="House02" class="img-rounded">
                        <div class="caption">
                          <h3>Option 02</h3>
                          <p>Summary of House 02</p>
                          <p><a href="#" class="btn btn-primary" role="button">Reserve</a></p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!--house 03-->
                  <div class="row">
                        <div class="col-sm-6 col-md-4">
                          <div class="thumbnail">
                            <img data-src="../../assets/images/house03.jpg" alt="House03" class="img-rounded">
                            <div class="caption">
                              <h3>Option 03</h3>
                              <p>Summary of House 03</p>
                              <p><a href="#" class="btn btn-primary" role="button">Reserve</a></p>
                            </div>
                          </div>
                        </div>
                      </div>
                  <!--house 04-->
                  <div class="row">
                        <div class="col-sm-6 col-md-4">
                          <div class="thumbnail">
                            <img data-src="../../assets/images/house04.jpg" alt="House04" class="img-rounded">
                            <div class="caption">
                              <h3>Option 04</h3>
                              <p>Summary of House 04</p>
                              <p><a href="#" class="btn btn-primary" role="button">Reserve</a></p>
                            </div>
                          </div>
                        </div>
                      </div>
                  <!--house 05-->
                  <div class="row">
                        <div class="col-sm-6 col-md-4">
                          <div class="thumbnail">
                            <img data-src="../../assets/images/house05.jpg" alt="House05" class="img-rounded">
                            <div class="caption">
                              <h3>Option 05</h3>
                              <p>Summary of House 05</p>
                              <p><a href="#" class="btn btn-primary" role="button">Reserve</a></p>
                            </div>
                          </div>
                        </div>
                      </div>
                  <!--house 06-->
                  <div class="row">
                        <div class="col-sm-6 col-md-4">
                          <div class="thumbnail">
                            <img data-src="../../assets/images/house06.jpg" alt="House06" class="img-rounded">
                            <div class="caption">
                              <h3>Option 06</h3>
                              <p>Summary of House 06</p>
                              <p><a href="#" class="btn btn-primary" role="button">Reserve</a></p>
                            </div>
                          </div>
                        </div>
                      </div>
</div>
@endsection