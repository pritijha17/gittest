@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        New Initiative
        <small>For Month #Month Name#</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url('/dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">New Initiative</li>
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
                                <th>Department </th>
                                <th class="text-left">Initiative</th>
             
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-left">Technology </td>
                                <td class="text-left">1) Tech department new process implemented.  <br/> <br/> 2) Cable Prototype Launched. <br/> <br/> 3) Outsourced our Cable app and Milk app.</td>
                             
                            
                            </tr>
                            
                                 <tr>
                                <td class="text-left">Sales </td>
                                <td class="text-left">1) Cable sales started. <br/> <br/> 2) Personal selling to newspaper vendors stopped. <br/> <br/> 3) Sales started in Nashik. <br/> <br/> 4) Agency sales started. </td>
                                
                            </tr>
                                
                                <tr>
                                <td class="text-left">Operation </td>
                                <td class="text-left">1) Operation department was automated with in house software. <br/> <br/> 2) A new operation head joined the company. </td>
                            </tr>
                                

                                              
                            </tbody>
                        </table>
                        
                        
                        <h2> August 2016 </h2>
                        
                        <table class="table table-hover text-right">
                            <thead>
                            <tr>
                                <th>Department </th>
                                <th class="text-left">Initiative</th>
                                <th class="text-left">Reason and Purpose </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="text-left">Technology </td>
                                <td class="text-left">Newspaper app development stopped. </td>
                                <td class="text-left"> 1)The present focus is on getting more vendors engaged and increasing the bill count.  <br/> <br/>  2) We have developed 90% of the important functionality of the app and successfully implemented.  <br/> <br/> 3) The halt will help tech team to complete other industries app. </td>
                            </tr>
                            
                                 <tr>
                                <td class="text-left">Sales </td>
                                <td class="text-left">Only Navi Mumbai </td>
                                <td class="text-left">1)To make a deep presence in one city. . <br/> <br/> 2) We have not yet covered 80% of the Navi Mumbai due to our presence in other parts of Mumbai. <br/> <br/> 3) We are looking for a controlled sales and making sales team to move as per the plan.  </td>
                            </tr>
                                
                                <tr>
                                <td class="text-left">Technology </td>
                                <td class="text-left">Data Lab setup </td>
                                <td class="text-left">1) We have set up a dedicated person for working on data and helping in business decisions. <br/> <br/> 2) With so many data points and vendors interaction we were not able to track the real parameters on a daily basis, with this division, we can get the data about overall company work. <br/> <br/> 3) This department will do QC of the KYC we are receiving from the vendors. </td>
                            </tr>
                                
                                
                                 <tr>
                                <td class="text-left">Technology </td>
                                <td class="text-left"> Chat Application </td>
                                <td class="text-left">1) We have decided to build a chat application for 5000 newspaper vendors of Mumbai.  <br/> <br/> 2) The application will connect these vendors with the Newspaper publishers, agencies, and Unions.  <br/> <br/> 3) We are developing this application as a part of our Growth Hack strategy. The application will make sure that all publishers and agencies, unions send their information via us and at the same time, all vendors (whether they are our customer of not) will get connected to one wallet.
  </td>
                            </tr>
                                
                                
                            </tbody>
                        </table>
                    </div> 
                        </div>
                        <!-- /.box-body -->
                      
                
            </div>
        </div>
        </div>
      </div>
    </section>
@endsection


