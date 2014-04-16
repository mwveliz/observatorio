<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
  <title>Observatorio del Libro: FILVEN 2013</title>
  <meta name="description" content="website description">
  <meta name="keywords" content="website keywords, website keywords">
  <link rel="stylesheet" href="css/style_menu.css" />
  <link rel="stylesheet" type="text/css" href="css/style_layout.css" title="style">
  
  <link rel="stylesheet" type="text/css" href="css/style_form.css" title="style">
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>


</head>
<body>
  <div id="main">
    <div id="header">
      <div id="login_sup">
          &nbsp;
      </div>    
      <div>
        <table width="100%" bgcolor="white" style="padding-top:10px;">
            <tr>
                <td>
                   &nbsp;
                </td>
                <td>
                   <? echo image_tag('logo_cenal.jpg')?> 
                </td>
                <td>
                    &nbsp;
                    <p style="padding-right: 50px; text-align: right;"><b><a id="cerrar_sesion" href="<?php echo url_for('/logout') ?>">Cerrar Sesión</a></p>
                </td>
            </tr>
        </table>
      </div>    
      <div id="login_sup">
          &nbsp;
      </div> 
      <div id="menubar">
          
            <ul class="nav">
                                
                                <li><a href="#" title="Autor">Autor<span class="flecha">&#9660;</span></a>
                                    <ul>
                                        <li><span><?php echo link_to('Agregar Autor', 'autor/new' )?></span></li>
                                        <li><span><?php echo link_to('Listar Autores', 'autor/index' )?></span></li>
                                    </ul>
                                </li>
                                
                                <li><a href="#" title="Edición">Edición<span class="flecha">&#9660;</span></a>
                                    <ul>
                                        
                                        <li><span><?php echo link_to('Cola', 'edicion/cola' )?></span></li>
                                        <li><span><?php echo link_to('Historico', 'edicion/historico' )?></span></li>
                                        <li><span><?php echo link_to('Inventario', 'edicion/inventario' )?></span></li>
                                        <li><span><?php echo link_to('Agregar Titulo', 'edicion/new' )?></span></li>
                                    
                                    </ul>
                                </li>
                                                                
                                <li><a href="#" title="Ponente">Impresion<span class="flecha">&#9660;</span></a>
                                <ul>
                                        
                                        <li><span><?php echo link_to('Cola', 'Impresion/cola' )?></span></li>
                                        <li><span><?php echo link_to('Historico', 'impresion/historico' )?></span></li>
                                        <li><span><?php echo link_to('Inventario', 'impresion/inventario' )?></span></li>
                                        <li><span><?php echo link_to('Agregar Impresion', 'impresion/new' )?></span></li>
                                    
                                    
                                    </ul>
                                </li>                                
                                
                                <li><a href="#" title="Actividad">Distribución<span class="flecha">&#9660;</span></a>
                                <ul>
                                        
                                        <li><span><?php echo link_to('Cola', 'distribucion/cola' )?></span></li>
                                        <li><span><?php echo link_to('Historico', 'distribucion/historico' )?></span></li>
                                        <li><span><?php echo link_to('Inventario', 'distribucion/inventario' )?></span></li>
                                        <li><span><?php echo link_to('Agregar Distribucion', 'distribucion/new' )?></span></li>
                                    
                                    
                                    </ul>
                                </li>
                                <li><a href="#" title="Salas">Comercializacion<span class="flecha">&#9660;</span></a>
                                <ul>
                                        
                                        <li><span><?php echo link_to('Cola', 'venta/cola' )?></span></li>
                                        <li><span><?php echo link_to('Historico', 'venta/historico' )?></span></li>
                                        <li><span><?php echo link_to('Inventario', 'venta/inventario' )?></span></li>
                                        <li><span><?php echo link_to('Agregar Venta', 'venta/new' )?></span></li>
                                    
                                    </ul>
                                </li>
                                
                                <li><a href="#" title="Encuestas">Formacion<span class="flecha">&#9660;</span></a>
                                      <ul>    
                                        <li><span><?php echo link_to('Agregar Actividades', 'Formacion/autor' )?></span></li>
                                        <li><span><?php echo link_to('Listar Actividades', 'Formacion/autor' )?></span></li>
                                      </ul>
                                </li>
                                <li><a href="#" title="Ponente">Reportes<span class="flecha">&#9660;</span></a>
                                </li>
                                
                                <li><a href="#" title="Ponente">Configuración<span class="flecha">&#9660;</span></a>
                                </li>
                                
                                <li><a href="#" title="Visitantes">Admin<span class="flecha">&#9660;</span></a>
                                </li>   
                                
                                
                                
            </ul>  
      </div>
    </div>
    <div id="site_content">
      <div id="content">
         <?php echo $sf_content ?>
    </div>
    <div id="content_footer"></div>
    <div id="footer">
        &nbsp;
    </div>
  </div>


</body></html>
