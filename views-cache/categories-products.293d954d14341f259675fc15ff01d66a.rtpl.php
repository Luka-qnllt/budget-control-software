<?php if(!class_exists('Rain\Tpl')){exit;}?><!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
<!-- Content Header (Page header) -->
<section class="content-header">
  <h1>
    Orçamentos <?php echo htmlspecialchars( $category["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>

  </h1>
  <ol class="breadcrumb">
    <li><a href="/index.php/orc"><i class="fa fa-dashboard"></i> Home</a></li>
    <li><a href="/index.php/orc/categories">Categorias</a></li>
    <li><a href="/index.php/orc/categories/<?php echo htmlspecialchars( $category["idcategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"><?php echo htmlspecialchars( $category["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></li>
    <li class="active"><a href="/index.php/orc/categories/<?php echo htmlspecialchars( $category["idcategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/products">Produtos</a></li>
  </ol>
</section>

<!-- Main content -->
<section class="content">

    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                <h3 class="box-title">Orçamentos <?php echo htmlspecialchars( $category["descategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?></h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th style="width: 10px">Cod</th>
                            <th>Solicitante</th>
                            <!--<th>Descrição</th>-->
                            <th style="width: 240px">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                          <?php $counter1=-1;  if( isset($productsRelated) && ( is_array($productsRelated) || $productsRelated instanceof Traversable ) && sizeof($productsRelated) ) foreach( $productsRelated as $key1 => $value1 ){ $counter1++; ?>

                            <tr>
                            <td><?php echo htmlspecialchars( $value1["cod"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><a href="/index.php/orc/product/up/<?php echo htmlspecialchars( $value1["cod"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/"><?php echo htmlspecialchars( $value1["vlprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></td>
                           <!-- <td><?php echo htmlspecialchars( $value1["desction"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>-->
                            <td>
                                <a href="/index.php/orc/categories/<?php echo htmlspecialchars( $category["idcategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/products/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/remove" class="btn btn-primary btn-xs pull-right"><i class="fa fa-arrow-right"></i> Remover</a>
                                
                            </td>
                            </tr>
                            <?php } ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="box box-success">
                <div class="box-header with-border">
                <h3 class="box-title">Outros Orçamentos</h3>
                </div>
                <!-- /.box-header -->
                <!-- form start -->
                <div class="box-body">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th style="width: 10px">Cod</th>
                            <th>Solicitante</th>
                            <!--<th>Descrição</th>-->
                            <th style="width: 240px">&nbsp;</th>
                            
                            
                            </tr>
                        </thead>
                        <tbody>
                              <?php $counter1=-1;  if( isset($productsNotRelated) && ( is_array($productsNotRelated) || $productsNotRelated instanceof Traversable ) && sizeof($productsNotRelated) ) foreach( $productsNotRelated as $key1 => $value1 ){ $counter1++; ?>

                            <tr>
                            <td><?php echo htmlspecialchars( $value1["cod"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>
                            <td><a href="/index.php/orc/product/up/<?php echo htmlspecialchars( $value1["cod"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/"><?php echo htmlspecialchars( $value1["vlprice"], ENT_COMPAT, 'UTF-8', FALSE ); ?></a></td>
                            <!--<td><?php echo htmlspecialchars( $value1["desction"], ENT_COMPAT, 'UTF-8', FALSE ); ?></td>-->
                            <td>
                                <a href="/index.php/orc/categories/<?php echo htmlspecialchars( $category["idcategory"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/products/<?php echo htmlspecialchars( $value1["idproduct"], ENT_COMPAT, 'UTF-8', FALSE ); ?>/add" class="btn btn-primary btn-xs pull-right"><i class="fa fa-arrow-left"></i> Adicionar</a>
                            </td>
                            </tr>
                            <?php } ?>

                            
                        </tbody>
                    </table>
                </div>
            </div>
        </div>        
    </div>

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->