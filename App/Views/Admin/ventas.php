<?php \Core\View::render('header.php', ['title' => 'Dashboard']) ?>  
<div class="container-fluid">


<div class="card mb-3">
  <h5 class="card-header">Solicitud de credito</h5>
  <div class="card-body">

    <form>

      <div class="form-group">
        <div class="form-row">
          <div class="col-md-12">
            <div class="form-label-group">
              <input type="text" id="cedula" class="form-control" placeholder="Cedula del cliente" required="required"
                autofocus="autofocus">
              <label for="cedula">Cedula del Cliente</label>
            </div>
          </div>

        </div>
      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <div class="form-label-group">
              <input type="text" id="Nombre del cliente" class="form-control" placeholder="Nombre del cliente"
                required="required" autofocus="autofocus">
              <label for="Nombre del cliente">Nombres del cliente</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-label-group">
              <input type="text" id="lastName" class="form-control" placeholder="Last name" required="required">
              <label for="lastName">Apellidos del cliente</label>
            </div>
          </div>
        </div>
      </div>

      <fieldset class="form-group">
        <div class="form-row">
          <div class="col-md-4">
            <div class="row">
              <legend class="col-form-label col-sm-4 pt-0">Genero</legend>
              <div class="col-sm-8">
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1"
                    checked>
                  <label class="form-check-label" for="gridRadios1">
                    Masculino
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios2" value="option2">
                  <label class="form-check-label" for="gridRadios2">
                    Femenino
                  </label>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-4">

            <div class="form-label-group">
              <input type="date" id="fechaNacimiento" class="form-control" placeholder="Fecha de Nacimiento"
                required="required">
              <label for="fechaNacimiento">Fecha de Nacimineto</label>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-label-group">
              <input type="email" id="ingreso" class="form-control" placeholder="Ingreso Brutos" required="required">
              <label for="ingreso">Ingresos brutos</label>
            </div>
          </div>
        </div>
      </fieldset>

      <div class="form-group">
        <label>Documento de verificacion de buró</label>
        <div class="custom-file">

          <input type="file" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">Seleccionar documento</label>
        </div>
      </div>

      <div class="form-group">
        <label>Cedula de Identidad del cliente</label>
        <div class="custom-file">

          <input type="file" class="custom-file-input" id="customFile">
          <label class="custom-file-label" for="customFile">Seleccionar documento</label>
        </div>
      </div>
      <a class="btn btn-primary btn-block" href="#" data-toggle="modal" data-target="#ventaModal">Verificar</a>

    </form>


  </div>
</div>

<div class="card mb-3">
  <h5 class="card-header">Producto</h5>
  <div class="card-body">

    <form>

      <div class="form-group">
        <div class="form-row">
          <div class="col-md-8">
            <div class="form-label-group">
              <input type="text" id="producto" class="form-control" placeholder="Nombre del producto" required="required"
                autofocus="autofocus">
              <label for="producto">Nombre del Producto</label>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-label-group">
              <label for="producto">Precio del producto 234$</label>
            </div>
          </div>

        </div>
      </div>


      <div class="form-group">
        <div class="form-row">
          <div class="col-md-12">
            <div class="form-label-group">
              <input type="text" id="precio" class="form-control" placeholder="Precio del producto" required="required"
                autofocus="autofocus">
              <label for="precio">Precio de casa comercial</label>
            </div>
          </div>

        </div>
      </div>

      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-4">
                <label for="precio" style="margin-top:5px">Tasa de Interes anual</label>
              </div>
              <div class="col-md-8">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Tasa de Interes anual">
                  <div class="input-group-append">
                    <span class="input-group-text">%</span>
                  </div>
                </div>
              </div>

            </div>


          </div>

          <div class="col-md-6">
            <div class="row">
              <div class="col-md-4">
                <label for="precio" style="margin-top:5px">Tasa de Interes anual</label>
              </div>
              <div class="col-md-8">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Tasa de desgravamen">
                  <div class="input-group-append">
                    <span class="input-group-text">%</span>
                  </div>
                </div>
              </div>
            </div>


          </div>
        </div>

      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <div class="row">
              <div class="col-md-4">
                <label for="precio" style="margin-top:5px">Monto de crédito</label>
              </div>
              <div class="col-md-8">
                <div class="input-group flex-nowrap">

                  <div class="input-group">
                    <input type="text" class="form-control" placeholder="Monto de crédito">
                    <div class="input-group-append">
                      <span class="input-group-text">$</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="row">
              <div class="col-md-4">
                <label for="precio" style="margin-top:5px">N° Meses plazo</label>
              </div>
              <div class="col-md-8">
                <div class="input-group flex-nowrap">

                  <div class="input-group">
                    <input type="number" class="form-control" placeholder="Numero de meses plazo">
                    <div class="input-group-append">
                      <span class="input-group-text">Meses</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>



        </div>


      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-12">
            <div class="row">
              <div class="col-md-2">
                <label for="precio" style="margin-top:5px">Linea de producto</label>
              </div>
              <div class="col-md-10">

                <select class="custom-select">
                  <option selected>Linea del producto</option>
                  <option value="1">One</option>
                  <option value="2">Two</option>
                  <option value="3">Three</option>
                </select>
              </div>
            </div>
          </div>
        </div>
      </div>


      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">

            <div class="input-group flex-nowrap">

              <div class="input-group">
                <input type="text" class="form-control" placeholder="Valor de entrada">
                <div class="input-group-append">
                  <span class="input-group-text">$</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6">

            <div class="input-group flex-nowrap">

              <div class="input-group">
                <input type="text" class="form-control" placeholder="Porcentaje de entrada">
                <div class="input-group-append">
                  <span class="input-group-text">%</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">

            <div class="form-label-group">
              <input type="date" id="fechacompra" class="form-control" placeholder="Fecha de Nacimiento"
                required="required">
              <label for="fechacompra">Fecha de compra</label>
            </div>
          </div>
          <div class="col-md-6">

            <div class="form-label-group">
              <input type="date" id="diapago" class="form-control" placeholder="Fecha de Nacimiento" required="required">
              <label for="diapago">Dia fijo de pago</label>
            </div>
          </div>

        </div>

      </div>
      <a class="btn btn-primary btn-block" href="#" data-toggle="modal" data-target="#tablaModal">Generar tabla
        de amortización</a>


      


    </form>
  </div>
</div>



<!-- Area Chart Example-->
<div class="card mb-3">
  <div class="card-header">
    <i class="fas fa-chart-area"></i>
    Referencia domiciliar
  </div>
  <div class="card-body">

    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-label-group">
            <input type="text" id="telefono" class="form-control" placeholder="Telefono convencional" required="required"
              autofocus="autofocus">
            <label for="telefono">Teléfono convencional</label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-label-group">
            <input type="text" id="correo" class="form-control" placeholder="Correo Electronico" required="required">
            <label for="correo">Correo Electrónico</label>
          </div>
        </div>
      </div>
    </div>
    <div class="form-group">
      <div class="form-row">
        <div class="col-md-6">
          <div class="form-label-group">
            <input type="text" id="barrio" class="form-control" placeholder="Barrio" required="required"
              autofocus="autofocus">
            <label for="barrio">Barrio </label>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-label-group">
            <input type="text" id="celular" class="form-control" placeholder="Numero de celular" required="required">
            <label for="celular">Numero de celular</label>
          </div>
        </div>
      </div>
    </div>

    <div class="form-group">
      <div class="form-row">
          <div class="col-md-12">
              <label for="direccion">Dirección</label>  
          </div>
        <div class="col-md-12">
          <div id="googleMap" style="width:100%;height:400px;"></div>

         
        </div>

      </div>
    </div>
  </div>

</div>



<div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-chart-area"></i>
      Referencia laboral
    </div>
    <div class="card-body">

      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <div class="form-label-group">
              <input type="text" id="nombrecontacto" class="form-control" placeholder="Nombre del contacto laboral" required="required"
                autofocus="autofocus">
              <label for="nombrecontacto">Nombre del contacto laboral</label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-label-group">
              <input type="text" id="telefonolaboral" class="form-control" placeholder="Telefono" required="required">
              <label for="telefonolaboral">Telefono</label>
            </div>
          </div>
        </div>
      </div>
      <div class="form-group">
        <div class="form-row">
          <div class="col-md-6">
            <div class="form-label-group">
              <input type="text" id="empresa" class="form-control" placeholder="Nombre de empresa" required="required"
                autofocus="autofocus">
              <label for="empresa">Nombre de empresa </label>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-label-group">
              <input type="text" id="cargo" class="form-control" placeholder="Cargo" required="required">
              <label for="cargo">Cargo</label>
            </div>
          </div>
        </div>
      </div>

      <div class="form-group">
        <div class="form-row">
          <div class="col-md-12">
              <label for="direccion">Dirección</label>  
          </div>
          <div class="col-md-12">
            <div id="googleMap2" style="width:100%;height:400px;"></div>
            
            <script>
              function myMap() {
                        var mapProp= {
                        center:new google.maps.LatLng(-0.172581, -78.496634),
                        zoom:20,
                        };
                        var map2 = new google.maps.Map(document.getElementById("googleMap"),mapProp);
                        var map2 = new google.maps.Map(document.getElementById("googleMap2"),mapProp);

                        var map3 = new google.maps.Map(document.getElementById("googleMap3"),mapProp);

                        var map4 = new google.maps.Map(document.getElementById("googleMap4"),mapProp);
                        }
                        </script>

          </div>

        </div>
      </div>
    </div>

  </div>



  <div class="card mb-3">
      <div class="card-header">
        <i class="fas fa-chart-area"></i>
        Referencia Conyuge
      </div>
      <div class="card-body">

        <div class="form-group">
          <div class="form-row">
            <div class="col-md-6">
              <div class="form-label-group">
                <input type="text" id="nombreconyuge" class="form-control" placeholder="Nombre" required="required"
                  autofocus="autofocus">
                <label for="nombreconyuge">Nombre </label>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-label-group">
                <input type="text" id="celularconyuge" class="form-control" placeholder="Celular" required="required">
                <label for="celularconyuge">Celular</label>
              </div>
            </div>
          </div>
        </div>
        <div class="form-group">
          <div class="form-row">
            <div class="col-md-12">
              <div class="form-label-group">
                <input type="text" id="telefonoconyuge" class="form-control" placeholder="Telefono conyuge" required="required"
                  autofocus="autofocus">
                <label for="telefonoconyuge">Telefono conyuge </label>
              </div>
            </div>
            
          </div>
        </div>

        <div class="form-group">
            <div class="form-row">
                <div class="col-md-12">
                    <label for="direccion">Dirección</label>  
                </div>
              <div class="col-md-12">
                <div id="googleMap3" style="width:100%;height:400px;"></div>


              </div>

            </div>
          </div>

       
      </div>

    </div>




    <div class="card mb-3">
        <div class="card-header">
          <i class="fas fa-chart-area"></i>
          Referencia Familiar
        </div>
        <div class="card-body">

          <div class="form-group">
            <div class="form-row">
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="nombrefamiliar" class="form-control" placeholder="Nombres" required="required"
                    autofocus="autofocus">
                  <label for="nombrefamiliar">Nombres </label>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-label-group">
                  <input type="text" id="tiporefrencia" class="form-control" placeholder="Tipo de referencia" required="required">
                  <label for="tiporefrencia">Tipo de referencia</label>
                </div>
              </div>
            </div>
          </div>
          <div class="form-group">
            <div class="form-row">
              <div class="col-md-12">
                <div class="form-label-group">
                  <input type="text" id="telefonofamiliar" class="form-control" placeholder="Telefono familiar" required="required"
                    autofocus="autofocus">
                  <label for="telefonofamiliar">Telefono familiar </label>
                </div>
              </div>
              
            </div>
          </div>

         
        </div>

      </div>


      <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-chart-area"></i>
            Referencia personal
          </div>
          <div class="card-body">

            <div class="form-group">
              <div class="form-row">
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="nombrefamiliar" class="form-control" placeholder="Nombres" required="required"
                      autofocus="autofocus">
                    <label for="nombrefamiliar">Nombres </label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-label-group">
                    <input type="text" id="tiporefrencia" class="form-control" placeholder="Tipo de referencia" required="required">
                    <label for="tiporefrencia">Tipo de referencia</label>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="form-row">
                <div class="col-md-12">
                  <div class="form-label-group">
                    <input type="text" id="telefonofamiliar" class="form-control" placeholder="Telefono" required="required"
                      autofocus="autofocus">
                    <label for="telefonofamiliar">Telefono </label>
                  </div>
                </div>
                
              </div>
            </div>

            <div class="col-md-12">
                <div id="googleMap4" style="width:100%;height:400px;"></div>

                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCXkuQeEBb0-m8v9X1IlADEeSTD06Td4PQ&callback=myMap"></script>

              </div>

           
          </div>

        </div>
<!-- /.container-fluid -->
<div class="card mb-3">
    <div class="card-header">
      <i class="fas fa-chart-area"></i>
      Acciones
    </div>
    <div class="card-body">
<a class="btn btn-success btn-block" href="#" data-toggle="modal" data-target="#compraModal">Realizar
    compra</a>

  </div>

  </div>
 

<!-- Sticky Footer -->
<footer class="sticky-footer">
  <div class="container my-auto">
    <div class="copyright text-center my-auto">
      <span>Copyright © 2018</span>
    </div>
  </div>
</footer>


</div>
<!-- /.content-wrapper -->

<!-- Logout Modal-->
<div class="modal fade" id="ventaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Enviar informacion del cliente?</h5>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
  <div class="modal-body">Se procedera al envio de la informacion para su correspondiente verificación.</div>
  <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
    <a class="btn btn-primary" href="login.html">Aceptar</a>
  </div>
</div>
</div>
</div>

<div class="modal fade" id="compraModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Confirmación de compra</h5>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
  <div class="modal-body"></div>
  <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
    <a class="btn btn-primary" href="login.html">Aceptar</a>
  </div>
</div>
</div>
</div>

<div class="modal fade bd-example-modal-lg" id="tablaModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog  modal-lg" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Tabla de </h5>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
  <div class="modal-body">

    <table cellpadding="4" cellspacing="0" bgcolor="#eeeeee" border="1" width="100%">
      <tbody>
        <tr valign="top" bgcolor="#cccccc">
          <td align="right"><b>Mes</b></td>
          <td align="right"><b>Intereses a pagar</b></td>
          <td align="right"><b>Abono a capital</b></td>
          <td align="right"><b>Saldo </b></td>
        </tr>
        <tr valign="top" bgcolor="#ffffff">
          <td align="right">1</td>
          <td align="right">$25,000.00</td>
          <td align="right">$7,353.40</td>
          <td align="right">$992,646.60</td>
        </tr>
        <tr valign="top" bgcolor="#ffffff">
          <td align="right">2</td>
          <td align="right">$24,816.17</td>
          <td align="right">$7,537.23</td>
          <td align="right">$985,109.37</td>
        </tr>
        <tr valign="top" bgcolor="#ffffff">
          <td align="right">3</td>
          <td align="right">$24,627.73</td>
          <td align="right">$7,725.66</td>
          <td align="right">$977,383.71</td>
        </tr>
        <tr valign="top" bgcolor="#ffffff">
          <td align="right">4</td>
          <td align="right">$24,434.59</td>
          <td align="right">$7,918.80</td>
          <td align="right">$969,464.91</td>
        </tr>
        <tr valign="top" bgcolor="#ffffff">
          <td align="right">5</td>
          <td align="right">$24,236.62</td>
          <td align="right">$8,116.77</td>
          <td align="right">$961,348.14</td>
        </tr>
        <tr valign="top" bgcolor="#ffffff">
          <td align="right">6</td>
          <td align="right">$24,033.70</td>
          <td align="right">$8,319.69</td>
          <td align="right">$953,028.44</td>
        </tr>
        <tr valign="top" bgcolor="#ffffff">
          <td align="right">7</td>
          <td align="right">$23,825.71</td>
          <td align="right">$8,527.68</td>
          <td align="right">$944,500.76</td>
        </tr>
        <tr valign="top" bgcolor="#ffffff">
          <td align="right">8</td>
          <td align="right">$23,612.52</td>
          <td align="right">$8,740.88</td>
          <td align="right">$935,759.88</td>
        </tr>
        <tr valign="top" bgcolor="#ffffff">
          <td align="right">9</td>
          <td align="right">$23,394.00</td>
          <td align="right">$8,959.40</td>
          <td align="right">$926,800.48</td>
        </tr>
        <tr valign="top" bgcolor="#ffffff">
          <td align="right">10</td>
          <td align="right">$23,170.01</td>
          <td align="right">$9,183.38</td>
          <td align="right">$917,617.10</td>
        </tr>
        <tr valign="top" bgcolor="#ffffff">
          <td align="right">11</td>
          <td align="right">$22,940.43</td>
          <td align="right">$9,412.97</td>
          <td align="right">$908,204.13</td>
        </tr>
        <tr valign="top" bgcolor="#ffffff">
          <td align="right">12</td>
          <td align="right">$22,705.10</td>
          <td align="right">$9,648.29</td>
          <td align="right">$898,555.84</td>
        </tr>
        <tr valign="top" bgcolor="#cccccc">
          <td colspan="5"><b>Totales para 12 meses</b></td>
        </tr>



      </tbody>
    </table>

  </div>
  <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cerrar</button>
    <a class="btn btn-primary" href="login.html">Exportar</a>
  </div>
</div>
</div>
</div>
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
  <div class="modal-header">
    <h5 class="modal-title" id="exampleModalLabel">Cerrar Session?</h5>
    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
      <span aria-hidden="true">×</span>
    </button>
  </div>
  <div class="modal-body">Esta seguro quedesea cerrar session.</div>
  <div class="modal-footer">
    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
    <a class="btn btn-primary" href="login.html">Cerrar Session</a>
  </div>
</div>
</div>
</div>
<?php \Core\View::render('footer.php', ['title' => 'Dashboard']) ?>  