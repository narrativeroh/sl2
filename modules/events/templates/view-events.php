<link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>
<br/><div class="container-fluid">
  <div class="row">
    <div class="col-md-3">
      <div class="form-floating mb-3">
        <?php echo gameSystemsFilter('');?>
      </div>
    </div>
    <div class="col-md-6">
      <form name="search" method="get" action="">
        <div class="input-group input-group-lg mb-3">
          <input type="text" class="form-control" placeholder="search" name="q" value="">
          <button class="btn btn-outline-secondary" type="button"><i class="bi bi-search"></i></button>
        </div>
      </form>
    </div>
    <div class="col-md-3">
      <a class="btn btn-lg btn-grad-2" href="" style="width: 100%;">+ new event</a>
    </div>
  </div>
</div>
