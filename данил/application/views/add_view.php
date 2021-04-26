<div class="container border rounded border-primary p-3">
<form action="" method="post" enctype="multipart/form-data">
        <img id="blah" class="hidden" style="max-width:100%;" src="#" alt="your image" />
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="name" required  name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Name">
    </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Body</label>
    <textarea name="body" required  class="form-control" cols="20" ></textarea>
  </div>
  <div class="form-check" style="margin-left:-20px;">
  <label class="form-check-label" for="exampleCheck1">Количество</label>
    <input type="number" required  name="count" min="1" class="form-control" id="exampleCheck1"> 
  </div>
  <div class="form-check" style="margin-left:-20px;">
  <label class="form-check-label" for="exampleCheck11">Цена (&#8381)</label>
    <input type="number" required  name="price" min="1" class="form-control" id="exampleCheck11"> 
  </div>
  <div class="form-group">
    <label for="imgInp">Example file input</label>
    <input type="file" required  accept=".jpg, .jpeg, .png" name="img" class="form-control-file" id="imgInp">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Enter sklad</label>
   
    <?php if($data->num_rows != 0): ?>
    <select class="form-control" name="sklad" id="exampleFormControlSelect1" required>
        <?php foreach($data as $el): ?>
          <option name="sklad" value="<?= $el['id']; ?>"><?= $el['name']; ?></option>
        <?php endforeach; ?>

    </select>
    <?php endif; ?> 
  </div>
  <button type="submit" class="btn btn-primary mt-2">Submit</button>
</form>
</div>

<style>
    .hidden{
        display:none;
    }
</style>

<script>
    function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#blah').css('display', 'block');
      $('#blah').attr('src', e.target.result);
    }
    
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

$("#imgInp").change(function() {
  readURL(this);
});
</script>