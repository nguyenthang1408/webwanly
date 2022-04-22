<style>
    button {
  float: right;
  margin: 30px;
}

.panel-body {
  border: 1px solid #333;
  background: azure;
}
#addon{
  display:none;
}
</style>

<div class="panel panel-default">
  <div class="panel-heading">
  </div>
  <div class="panel-body">
    <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-event" class="form-horizontal">
      <div class="col-sm-4">
        <label>name</label>
        <input type="text" name="name" value="name" placeholder="name" id="name" class="form-control" />
      </div>
      <div class="col-sm-4">
        <label>address</label>
        <input type="text" name="address" value="address" placeholder="address" id="address" class="form-control" />
      </div>
      <div class="col-sm-4">
        <label>phone</label>
        <input type="text" name="phone" value="phone" placeholder="phone" id="phone" class="form-control" />
        <div class="text-danger"></div>
      </div>

    </form>
  </div>
  <div class="row">
  <div class="add_component">
    <button id='launch'>Add Component</button>
  </div>
  </div>
</div>
<div class="wrapper">
  <div class="panel panel-default " id="addon">
    <div class="panel-heading">
    </div>
    <div class="panel-body">
      <form action="<?php echo $action; ?>" method="post" enctype="multipart/form-data" id="form-event" class="form-horizontal">
        <div class="col-sm-6">
          <label>component</label>
          <iv>

      </form>
    </div>
  </div>
</div>

      </form>
    </div>
  </div>
</div>

<script>
     document.getElementById('launch').onclick = function() {
        var addOnDiv = document.getElementById('addon');

        if (addOnDiv.style.display === 'none') {
        addOnDiv.style.display = 'block';
        } else {

        var clonedNode = addOnDiv.cloneNode(true);
        addOnDiv.appendChild( clonedNode );      
        }
    }
</script>