<!-- Modal: modalCart -->
<div class="modal fade" id="favoritesModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <!--Header-->
      <div class="modal-header">
        <h4 class="modal-title" id="favoritesModalLabel"></h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>
      <!--Body-->
      <div class="modal-body">

        <table class="table table-hover">
          <thead>
            <tr>
              <th>OS Version</th>
              <th>Brand</th>
              <th>Model</th>
              <th>Asset Tag</th>
              <th>License</th>
              <th>Serial</th>
              <th>CPU</th>
              <th>RAM</th>
              <th>Disks (Type)</th>
              <th>Disks (Free PE)</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td id="os-version"></td>
              <td id="brand"></td>
              <td id="model"></td>
              <td id="asset-tag"></td>
              <td id="license"></td>
              <td id="serial"></td>
              <td id="cpu"></td>
              <td id="ram"></td>
              <td id="disks-type"></td>
              <td id="disks-freepe"></td>
            </tr>
            
          </tbody>
        </table>

      </div>
      <!--Footer-->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary pull-left" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal: modalCart -->