  <form method="POST" action="uploadPhoto.php" enctype="multipart/form-data">
    <div class="col-md-8 col-sm-12">
      <h4> Image </h4>
    <input type="file" id="image_to_upload">
      **Select an image.**
      <img id="im" src="" alt="your image" />
    </div>
    <button type="submit" class="btnNXT1 btn btn-default" >Next</button>
    <br>
    <br>
  </form>
  <script type="text/javascript" src="https://dme0ih8comzn4.cloudfront.net/imaging/v3/editor.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

  <script type="text/javascript">
  function readURL(url) {
    document.getElementById('im').src=url;
    }
      jQuery.noConflict();
      formdata = new FormData();
      jQuery("#image_to_upload").on("change", function() {
          var file = this.files[0];
          if (formdata) {
              formdata.append("image", file);
              jQuery.ajax({
                  url: "../uploadPhoto.php",
                  type: "POST",
                  data: formdata,
                  processData: false,
                  contentType: false,
                  success:function(data){
                    newImage = data;
                    readURL(newImage);
                  }
              });
          }
      });



  </script>
