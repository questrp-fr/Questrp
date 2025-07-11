<!-- Home Page -->
<div class="card mb-3">
    <h3 class="card-header mb-3 text-center">Questrp Theme <span class="badge bg-primary questrp-trigger" data-toggle="modal" data-target="#questrpModal" style="color:white;cursor:help;">{if $currentVersion && !$isDev}v{$currentVersion}{elseif $isDev}Dev Build{/if}</span></h3>
    <div class="card-body">
        <form action="" method="POST">
            <input type="hidden" name="sel_btn_session" value="home" />
            <div class="form-group">
                <div class="alert alert-info" role="info">
                 {$REVIEW_INFO}
                 </div>            
            </div>
{if $isDev}
            <div class="form-group">
                <div class="alert alert-warning" role="warning">
                 {$DEV_INFO}
                 </div>            
            </div>
{/if}
{if $updateAvailable && !$isDev}
<div class="card shadow mb-4">
                                <div class="card-header bg-danger py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-white"><i class="fa-solid fa-gear"></i>
                                        {$UPDATE_AVAILABLE}</h6>
                                </div>
                                <div class="card-body text-center">
                                    Current Questrp Version <strong>{$currentVersion}</strong>
                                    <br>
                                    Latest Questrp Release <strong>{$latestVersion}</strong>
                                    <br>
                                    <b>{$updateDescription}</b>
                                    <hr>
                                    <a href="{$downloadUrl}" class="btn btn-danger">{$DOWNLOAD_UPDATE}</a>
                              </div>
                            </div>
{/if}
<div class="centered row">
{include file="./includes/info.tpl"}


  <div class="col-sm-6">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <h5 class="card-title">{$REQUIRE_SUPPORT}</h5>
        <p class="card-text">{$REQUIRE_SUPPORT_DESC}</p>
        <a href="https://discord.gg/devnex" class="btn btn-primary">{$JOIN_DISCORD}</a>
      </div>
    </div>
  </div>
  <div class="col-sm-6">
    <div class="card border-left-primary shadow h-100 py-2">
      <div class="card-body">
        <h5 class="card-title">{$RATE_QUESTRP}</h5>
        <p class="card-text">{$RATE_QUESTRP_DESC}</p>
        <a href="https://namelessmc.com/resources/resource/223-questrp---free-namelessmc-template/" class="btn btn-primary">{$RATE_NOW}</a>
      </div>
    </div>
  </div>
</div>
        </form>
    </div>
</div>
<div class="modal fade" id="questrpModal" tabindex="-1" role="dialog" aria-labelledby="QuestrpModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="QuestrpModalLabel">Thank you for choosing Questrp</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        You're currently running Questrp v{$currentVersion} by DevNex.
      </div>
    </div>
  </div>
</div>
<script>
$(document).ready(function () {
  $('.questrp-trigger').click(function () {
    // Show the modal
    $('#questrpModal').modal('show');
  });
});
</script>
