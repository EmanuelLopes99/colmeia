<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'Dashboard';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">
     <!-- Visão geral do site -->
      <div class="panel panel-default">
           <div class="list-group-item active">
                <h3 class="panel-title">Visão Geral Do Site</h3>
            </div>
            <div class="panel-body">
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> 
                         
                    </h2>
                    <h4>Noticias</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt " aria-hidden="true"></span> 
                        
                    </h2>
                    <h4>Posts</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt " aria-hidden="true"></span> 
                        
                    </h2>
                    <h4>Eventos</h4>
                  </div>
                </div>
                <div class="col-md-3">
                  <div class="well dash-box">
                    <h2><span class="glyphicon glyphicon-list-alt " aria-hidden="true"></span> 
                        
                    </h2>
                    <h4>Comentarios</h4>
                  </div>
                </div>
              </div>
            </div>
    
            <!-- Ultimos Noticias -->
            <div class="panel panel-default">
              <div class="list-group-item active">
                <h3 class="panel-title">Ultimos Notícias</h3>
              </div>
              <div class="panel-body">
                <table class="table table-striped table-hover">
                      <thead>
                        
                      </thead>
                      <tbody>
                      </tbody>
                </table>
              </div>
              <div class="panel-footer btn btn-block bb"><a href="index.php?r=noticias/index">Ver Todos</a></div>
            </div>

            <!--Mostar Post -->
            <div class="col-md-13">
                  <div class="panel panel-default">
                       <div class="list-group-item active">
                            <h3 class="panel-title">Ultimos Post</h3>
                        </div>

                        <div class="panel-body">
                             <table class="table table-striped table-hover">
                                  <thead>
                                       
                                  </thead>
                                  <tbody>
                                  </tbody>
                            </table>
                        </div>
                         <div class="panel-footer btn btn-block bb"><a href="index.php?r=post/index">Ver Todos</a></div>
                    </div>
            </div>

             <!--Mostar Eventos -->
            <div class="col-md-13">
                  <div class="panel panel-default">
                       <div class="list-group-item active">
                            <h3 class="panel-title">Ultimos Eventos</h3>
                        </div>

                        <div class="panel-body">
                             <table class="table table-striped table-hover">
                                  <thead>
                                      
                                  </thead>
                                  <tbody>
                                  </tbody>
                            </table>
                        </div>
                         <div class="panel-footer btn btn-block bb"><a href="index.php?r=eventos/index">Ver Todos</a></div>
                    </div>
            </div>

                <!--Mostar Comentarios -->
            <div class="col-md-13">
                  <div class="panel panel-default">
                       <div class="list-group-item active">
                            <h3 class="panel-title">Ultimos Comentarios</h3>
                        </div>

                        <div class="panel-body">
                             <table class="table table-striped table-hover">
                                  <thead>
                                      
                                  </thead>
                                  <tbody>
                                  </tbody>
                            </table>
                        </div>
                         <div class="panel-footer btn btn-block bb"><a href="index.php?r=comentario/index">Ver Todos</a></div>
                    </div>
            </div>
</div>


