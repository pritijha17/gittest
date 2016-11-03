@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Revenue
        <small>For Month #Month Name#</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Revenue</li>
      </ol>
    </section>

    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-12 col-sm-6 col-xs-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    
                        <div class="box-body table-responsive no-padding">
                        
                        <div class="table-responsive">
                        <table class="table table-hover text-right">
                            <thead>
                            <tr>
                                <th>Source </th>
                                 <th class="text-left">September</th>
                                 <th class="text-left">August</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-left">Online Payment </td>
                                <td class="text-left">Rs 24439</td>
                                <td class="text-left">Rs 12875</td>
                            </tr>
                            
                               <tr>
                                <td class="text-left">Newspaper SAAS </td>
                                <td class="text-left"> Rs 600 </td>
                                    <td class="text-left">0 </td>
                            </tr>
                                
                                   <tr>
                                <td class="text-left">Milk SAAS </td>
                                <td class="text-left">0 </td>
                                    <td class="text-left"> 0 </td>
                            </tr>
                                
                                 <tr>
                                <td class="text-left"> Cable Setup </td>
                                <td class="text-left"> 0 </td>
                                    <td class="text-left">0 </td>
                            </tr>
                                
                                 <tr><b> 
                                <td class="text-left"> Total </td>
                                <td class="text-left"> Rs 25039 </td>
                                    <td class="text-left"> 12875 </td> </b>
                            </tr>
                                
                                
                           
                                
                            </tbody>
                        </table>
                          
                        </div>
                        <!-- /.box-body -->
                      
                
            </div>
        </div>
        </div>
      </div>
    </section>
@endsection


