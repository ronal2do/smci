@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="side-body padding-top">
        
        <div class="row  no-margin-bottom">
            <div class="col-sm-8 col-xs-12">
                <div class="row">
                    <div class="col-xs-12">                       
                        <div class="embed-responsive embed-responsive-16by9">
                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/fYbc0EU0hjIrel=0"></iframe>
                        </div>                                   
                        
                    </div>
                </div>
            </div>

            <div class="col-sm-4 col-xs-12">
                <div class="card card-success">
                    <div class="card-header">
                        <div class="card-title">
                            <div class="title"><i class="fa fa-youtube"></i>Vídeos</div>
                        </div>
                        <div class="clear-both"></div>
                    </div>
                    <div class="card-body no-padding">
                        <ul class="message-list">
                          
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- <div class="container-fluid">     
    <div class="row no-margin-bottom">
        <div class="col-sm-12 col-xs-12">
            <div class="row">
                <div class="col-xs-12">                       
                    <style>
                        .advertising{
                            height:72px;
                            border: 1px #000 solid;
                            margin:15px;
                            text-align:center;
                        }
                    </style>
                    <div class="advertising">
                     Publicidade
                 </div>
             </div>
         </div>
     </div>

     
 </div>
 
</div> -->

@endsection