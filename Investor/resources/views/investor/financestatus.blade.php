@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Finance Status
        <small>For Month #Month Name#</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Finance Status</li>
      </ol>
    </section>

<section class="content">
      <!-- Info boxes -->
<div class="row">
    <div class="col-md-12 col-sm-6 col-xs-12">
        <div class="panel panel-default">
            <div class="panel-body">
            	<div class="row">
                	<div class="col-md-12">
			           <div class="table-responsive">
                        <table class="table table-hover text-right">
                            <thead>
                            <tr>
                                <th>Particular </th>
                                <th class="text-left">Amount</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-left">Salaries </td>
                                <td class="text-left">Rs 2,56,000 </td>
                            </tr>
                            
                               <tr>
                                <td class="text-left">Rent </td>
                                <td class="text-left">Rs 35,000 </td>
                             </tr>
                                
                                 <tr>
                                <td class="text-left"> Office Expenses </td>
                                <td class="text-left"> Rs 11,000 </td>
                            </tr>
                                
                                
                               <tr>
                                <td class="text-left"> Dues </td>
                                <td class="text-left"> 28,000</td>
                            </tr>
                            </tbody>
                        </table>
                    	</div> 
			    </div>
            </div>
		</div>
    	</div>
  	</div>
</div>
</section>
@endsection


