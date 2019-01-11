
<?php \Core\View::render('header.php', ['title' => 'Dashboard']) ?>  

          <!-- Area Chart Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
              Reporte de Ventas</div>
            <div class="card-body">
              <canvas id="myAreaChart" width="100%" height="30"></canvas>
            </div>
        
          </div>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Productos Vendidos</div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Cliente</th>
                      <th>Producto</th>
                      <th>Ciudad</th>
                      <th>Fecha de venta</th>
                      <th>Precio</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Cliente</th>
                      <th>Producto</th>
                      <th>Ciudad</th>
                      <th>Fecha de venta</th>
                      <th>Precio</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    <tr>
                      <td>Miguel Langarano</td>
                      <td>Smart Tv</td>
                      <td>Latacunga</td>
                      <td>2011/04/25</td>
                      <td>$320,800</td>
                    </tr>
                    <tr>
                      <td>Fabian Toapanta</td>
                      <td>Reproductor MP3</td>
                      <td>Ambato</td>
                      <td>2011/07/25</td>
                      <td>$170,750</td>
                    </tr>
                    <tr>
                      <td>Angeles Claudio</td>
                      <td>Laptop DELL</td>
                      <td>Latacunga</td>
                      <td>2009/01/12</td>
                      <td>$86,000</td>
                    </tr>
                    <tr>
                      <td>Diana Vera</td>
                      <td>Smart TV</td>
                      <td>Pujili</td>
                      <td>2012/03/29</td>
                      <td>$433,060</td>
                    </tr>
                    <tr>
                      <td>Jhoselin Oña</td>
                      <td>Lavadora LG</td>
                      <td>Pujili</td>
                      <td>2008/11/28</td>
                      <td>$162,700</td>
                    </tr>
                    <tr>
                      <td>Brielle Williamson</td>
                      <td>Integration Specialist</td>
                      <td>New York</td>
                      <td>2012/12/02</td>
                      <td>$372,000</td>
                    </tr>
                    <tr>
                      <td>Herrod Chandler</td>
                      <td>Sales Assistant</td>
                      <td>San Francisco</td>
                      <td>2012/08/06</td>
                      <td>$137,500</td>
                    </tr>

                    
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->
<?php \Core\View::render('footer.php', ['title' => 'Dashboard']) ?>  
