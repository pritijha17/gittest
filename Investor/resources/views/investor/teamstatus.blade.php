@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Team Status
    <small>For Month #Month Name#</small>
  </h1>
  <ol class="breadcrumb">
    <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
    <li class="active">Team Status</li>
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
			            <h4 class="text-uppercase">Total Team</h4><br/>
			            <h4>5</h4>

			        </div>
			        <div class="icon" style="top:4px">
			          <i class="fa fa-group"></i>
			        </div>
			        
			      </div>
			    </div>
			    <div class="col-lg-3 col-xs-6">
			      <!-- small box -->
			      <div class="small-box bg-purple">
			        <div class="inner">
			            <h4 class="text-uppercase">Technology</h4><br/>
			            <h4>8777####</h4>
			        </div>
			        <div class="icon" style="top:4px">
			          <i class="fa fa-laptop"></i>
			        </div>
			        
			      </div>
			    </div>
			    <div class="col-lg-3 col-xs-6">
			      <!-- small box -->
			      <div class="small-box bg-red">
			        <div class="inner">
			          <h4 class="text-uppercase">Sales/Operation</h4><br/>
			          <h4>3#####</h4>
			        </div>
			        <div class="icon" style="top:10px">
			          <i class="fa fa-user"></i>
			        </div>

			      </div>
			    </div>
			    <div class="col-lg-3 col-xs-6">
			      <!-- small box -->
			      <div class="small-box bg-green">
			        <div class="inner">
			          <h4 class="text-uppercase">Admin/MGT</h4><br/>
			          <h4>Rs. 27,000##</h4>
			        </div>
			        <div class="icon" style="top:10px">
			          <i class="fa fa-user"></i>
			        </div>
			        
			      </div>
			    </div>
			</div>
			  <!-- /.row -->
	        <div class="row">
		        <div class="col-md-3 col-sm-6 col-xs-12">
		          <div class="info-box bg-aqua">
		            <span class="info-box-icon"><i class="fa fa-users"></i></span>

		            <div class="info-box-content">
		              <span class="info-box-number">Rs. 2.63 Lakhs</span>
		              <span class="info-box-text">Total Salary</span>
		              
		            </div>
		            <!-- /.info-box-content -->
		          </div>
		          <!-- /.info-box -->
		        </div>
		        <!-- /.col -->
		        <div class="col-md-3 col-sm-6 col-xs-12">
		          <div class="info-box bg-yellow">
		            <span class="info-box-icon"><i class="fa fa-users"></i></span>

		            <div class="info-box-content">
		              <span class="info-box-number">Rs.83,000#</span>
		              <span class="info-box-text">Technology <br/>Salaries</span>
		              
		            </div>
		            <!-- /.info-box-content -->
		          </div>
		          <!-- /.info-box -->
		        </div>
		        <!-- /.col -->
		        <div class="col-md-3 col-sm-6 col-xs-12">
		          <div class="info-box bg-green">
		            <span class="info-box-icon"><i class="fa fa-users"></i></span>

		            <div class="info-box-content">
		              <span class="info-box-number">Rs.1.2# Lakhs</span>
		              <span class="info-box-text">Sales Salary</span>
		              
		            </div>
		            <!-- /.info-box-content -->
		          </div>
		          <!-- /.info-box -->
		        </div>
		        <!-- /.col -->	
		        
		        <div class="col-md-3 col-sm-6 col-xs-12">
		          <div class="info-box bg-red">
		            <span class="info-box-icon"><i class="fa fa-users"></i></span>

		            <div class="info-box-content">
		              <span class="info-box-number">Rs. 62,000</span>
		              <span class="info-box-text">Admin/Mgt<br/> Salary</span>
		              
		            </div>
		            <!-- /.info-box-content -->
		          </div>
		          <!-- /.info-box -->
		        </div>
		        <!-- /.col -->
		    </div>
		    <!-- /.row -->
            <div class="row">
            	<div class="col-md-12">
            	<table class="table table-hover nowrap" id="example1" width="100%">
                            <thead>
                            <tr>
                                <th> Sr </th>
                                <th> Name </th>
                                <th> Since </th>
                                <th> Department </th>
                                 <th> Position </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>1 </td>
                                <td> Jeetu  </td>
                                <td> May 2016</td>
                                <td> Management </td>
                                 <td> CE0 </td>
                            </tr>
                            <tr>
                                <td> 2 </td>
                                <td> Latish  </td>
                                <td> June 2016</td>
                                <td> Admin </td>
                                 <td> HR </td>
                            </tr>
                             <tr>
                                <td> 3 </td>
                                <td> Viki    </td>
                                <td> June 2016</td>
                                <td> Operation </td>
                                <td> Operation Executive </td>
                              </tr>
                             <tr>
                                <td> 4 </td>
                                <td> Jitendra  </td>
                                <td> June 2016 </td>
                                <td> Sales  </td>
                                <td> Sales Executive</td>
                            </tr>
                             <tr>
                                <td> 5 </td>
                                <td> Sachit  </td>
                                <td> June 2016 </td>
                                <td> Technology  </td>
                                <td> Technical Head</td>
                            </tr>
                            <tr>
                                <td> 6  </td>
                                <td> Omakar  </td>
                                <td> June 2016 </td>
                                <td> Technology </td>
                                <td> Software Developer </td>
                              </tr>
                             
                             <tr>
                                <td> 7 </td>
                                <td> Pratima   </td>
                                <td> July 2015</td>
                                <td> Technology </td>
                                <td> UI Developer </td>
                              </tr>
                                
                                 <tr>
                                <td> 8 </td>
                                <td> Ashish Patil  </td>
                                <td> June 2015</td>
                                <td> Technology </td>
                                <td> Web Developer  </td>
                              </tr>
                            
                            </tbody>
                        </table>
                    <br/> <br/>
			        <h2> Employee Updates </h2>
			        <p style="font-size:17px;">  Employee Left job in September: 0#### </p>
			        <p style="font-size:17px;">  New joinee in September: 0####  </p>
        			</div>
	        	</div>
			</div>
			</div>
	</div>
</div>
</section>
@endsection


