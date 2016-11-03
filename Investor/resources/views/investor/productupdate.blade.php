@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Product Update
        <small>For Month #Month Name#</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Product Update</li>
      </ol>
    </section>

    <section class="content">
      <!-- Info boxes -->
    <div class="row">
        <div class="col-md-12 col-sm-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                	<div class="row">
			            <div class="col-lg-3 col-xs-6">
				          <!-- small box -->
				          <div class="small-box bg-green">
				            <div class="inner">
				              <h4>Total Apps</h4>
				              <h3 align="right">3</h3>

				            </div>
				          </div>
				        </div>
			            <div class="col-lg-3 col-xs-6">
					          <!-- small box -->
					        <div class="small-box bg-yellow">
					            <div class="inner">
					              <h4>NewsPaper</h4>
					              <h3 align="right">3</h3>
					          </div>
					        </div>	
				        </div>
			            <div class="col-lg-3 col-xs-6">
				          <!-- small box -->
				          <div class="small-box bg-purple">
				            <div class="inner">
				              <h4>M#####</h4>
				              <h3 align="right">3</h3>
				            </div>
				         
				          </div>
				        </div>
			            <div class="col-lg-3 col-xs-6">
				          <!-- small box -->
				          <div class="small-box bg-green">
				            <div class="inner">
				             <h4>Cable</h4>
				              <h3 align="right">3</h3>
				            </div>
				            
				          </div>
				        </div>
			        </div>
                	<h2>  Work done in September on Product </h2>
			        <p style="font-size:17px;"> 
			            1) Newspaper pro version work is stopped and only support is given.
					 </p>
        
          			<p style="font-size:17px;">  2) Cable app prototype and Payment gateway work started. </p>
        
        			<p style="font-size:17px;">  3) Operation department automisation completed.  </p>
    
      				<p style="font-size:17px;">  4) Agency app research and development started. Prototype expected to be complete by Oct end.  </p>
        
          			<p style="font-size:17px;">  5) Tech department process was revamped and database, server was improved.  </p>
        
          			<p style="font-size:17px;">  6) Security measures was implemented pan comapny, SSL certificates and encrytion was installed. </p>

 
        			<h2>  Work done in August on Product </h2>
        			<p style="font-size:17px;"> 
           			 1) A new version of newspaper pro is uploaded on play store to fix bugs and add new functionality of coupons and login setup.
 					</p>										
        
          			<p style="font-size:17px;">  2) Further development on Newspaper app is stopped.</p>
        
         			<p style="font-size:17px;">  3) Cable app development started, expected to close by September 20, 2016</p>
        
			        <p style="font-size:17px;">  4) Sales Portal was developed for the sales team in the office and successfully implemented. This has moved us away from Google drive use and also will help us in tracking each sales person, their vendors properly. The new system is designed keeping data in mind and to remove daily reporting. <br/></br/> The sales app is designed and built in-house.  </p>
			  	</div>
        	</div>
      	</div>
    </div>
    </section>
@endsection


