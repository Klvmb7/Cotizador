<?php



if($_SESSION["actualizar"] == "off"){

  echo '<script>

    window.location = "inicio";

  </script>';

  return;

}


function execPrint($command) {
    $result = array();
    exec($command, $result);
    print("<pre>");
    foreach ($result as $line) {
        print($line . "\n");
    }
    print("</pre>");
}

?>
<div class="content-wrapper">

  <section class="content-header">
    
    <h1>

      Actualizar  
    
    </h1>

    <ol class="breadcrumb">
      
      <li><a href="inicio"><i class="fa fa-dashboard"></i> Inicio</a></li>
      
      <li class="active">Actualizar</li>
    
    </ol>

  </section>

  <section class="content">

    <div class="box">

      <div class="box-header with-border">
  



      </div>

      <div class="box-body">
        
 
<?php

execPrint("git pull");
execPrint("git status");
execPrint("git log");

?>

      </div>

    </div>

  </section>

</div>
