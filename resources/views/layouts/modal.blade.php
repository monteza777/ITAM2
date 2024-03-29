<!-- Modal: modalCart -->
<script>
</script>
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
        <div class="row">
          <div class="col-md-12">
              <div class="panel with-nav-tabs panel-success">
                  <div class="panel-heading">
                          <ul class="nav nav-tabs">
                              <li class="active"><a href="#tab1info" data-toggle="tab">Categories</a></li>
                              <li><a href="#tab2info" data-toggle="tab">Data Center</a></li>
                              <li><a href="#tab3info" data-toggle="tab">Network Management</a></li>
                              <li><a href="#tab4info" data-toggle="tab">Platform</a></li>
                          </ul>
                  </div>
                  <div class="panel-body">
                      <div class="tab-content">
                          <div class="tab-pane fade in active " id="tab1info">
                              <div class="col-sm-3 ">
                                <h5><strong>Product:</strong></h5>
                                <h5><strong>Organization</strong></h5>
                                <h5><strong>OS Version:</strong></h5>
                                <h5><strong>Brand:</strong></h5>
                                <h5><strong>Model:</strong></h5>
                                <h5><strong>Asset Tag:</strong></h5>
                                <h5><strong>License:</strong></h5>
                                <h5><strong>Serial:</strong></h5>
                                <h5><strong>CPU:</strong></h5>
                                <h5><strong>RAM:</strong></h5>
                                <h5><strong>Disks (Type):</strong></h5>
                                <h5><strong>Disks (Free PE):</strong></h5>
                              </div>

                              <div class="col-sm-9 other">
                                <h5 ><span id="product"></span></h5>
                                <h5 ><span id="organization"></span></h5>
                                <h5 ><span id="os-version"></span></h5>
                                <h5><span id="brand"></span></h5>
                                <h5><span id="model"></span></h5>
                                <h5><span id="asset-tag"></span></h5>
                                <h5><span id="license"></span></h5>
                                <h5><span id="serial"></span></h5>
                                <h5><span id="cpu"></span></h5>
                                <h5><span id="ram"></span></h5>
                                <h5><span id="disks-type"></span></h5>
                                <h5><span id="disks-freepe"></span></h5>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="tab2info">
                            <div class="col-sm-3 ">
                            <div>
                                <h5><strong>@lang('quickadmin.data_centers.fields.datacenter_link'):</strong></h5>
                                <h5><strong>@lang('quickadmin.data_centers.fields.location'):</strong></h5>
                                <h5><strong>@lang('quickadmin.data_centers.fields.rack_unit'):</strong></h5>
                                <h5><strong>@lang('quickadmin.data_centers.fields.position'):</strong></h5>
                                <h5><strong>@lang('quickadmin.data_centers.fields.pdu_a_position'):</strong></h5>
                                <h5><strong>@lang('quickadmin.data_centers.fields.pdu_b_position'):</strong></h5>
                                <h5><strong>@lang('quickadmin.data_centers.fields.cage_key_code'):</strong></h5>
                                <h5><strong>@lang('quickadmin.data_centers.fields.smarthand_request'):</strong></h5>
                              </div>
                            </div>
                              <div class="col-sm-9 other">
                                <h5 ><span id="datacenter_link"></span></a></h5>
                                <h5 ><span id="location"></span></h5>
                                <h5 ><span id="rack_unit"></span></h5>
                                <h5><span id="position"></span></h5>
                                <h5><span id="pdu_a_position"></span></h5>
                                <h5><span id="pdu_b_position"></span></h5>
                                <h5><span id="cage_key_code"></span></h5>
                                <h5><span id="smarthand_request"></span></h5>
                              </div>
                          </div>
                          <div class="tab-pane fade" id="tab3info">
                            <div class="col-sm-5 ">
                              <div>
                                <h5><strong>@lang('quickadmin.network_managements.fields.ip_address'):</strong></h5>
                                <h5><strong>@lang('quickadmin.network_managements.fields.remote_console_ip'):</strong></h5>
                                <h5><strong>@lang('quickadmin.network_managements.fields.dns'):</strong></h5>
                                <h5><strong>@lang('quickadmin.network_managements.fields.interfaces'):</strong></h5>
                                <h5><strong>@lang('quickadmin.network_managements.fields.eth0'):</strong></h5>
                                <h5><strong>@lang('quickadmin.network_managements.fields.eth1'):</strong></h5>
                                <h5><strong>@lang('quickadmin.network_managements.fields.mounted_vips'):</strong></h5>
                              </div>
                            </div>
                            <div class="col-sm-7 other">
                              <h5 ><span id="ip_address"></h5>
                              <h5 ><span id="remote_console_ip"></h5>
                              <h5><span id="dns"></span></h5>
                              <h5><span id="interfaces"></span></h5>
                              <h5><span id="eth0"></span></h5>
                              <h5><span id="eth1"></span></h5>
                              <h5><span id="mounted_vips"></span></h5>
                            </div>
                          </div>
                          <div class="tab-pane fade" id="tab4info">
                            <div class="col-sm-5 ">
                              <div>
                                <h5><strong>@lang('quickadmin.platforms.fields.mounted_platforms'):</strong></h5>
                                <h5><strong>@lang('quickadmin.platforms.fields.sftp_directories'):</strong></h5>
                                <h5><strong>@lang('quickadmin.platforms.fields.sftp_client_pass'):</strong></h5>
                              </div>
                            </div>
                            <div class="col-sm-7 other">
                              <h5 ><span id="mounted_platforms"></h5>
                              <h5 ><span id="sftp_directories"></h5>
                              <h5><span id="sftp_client_pass"></span></h5>
                            </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </div>
      </div>
      <!--Footer-->
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-primary pull-left" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!-- Modal: modalCart -->