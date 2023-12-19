<head>

  <title>NoteCity</title>
  
  <!-- Vendor CSS Files -->
  <link href="<?php echo base_url('assets/vendor/aos/aos.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/bootstrap-icons/bootstrap-icons.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/boxicons/css/boxicons.min.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/vendor/glightbox/css/glightbox.min.css'); ?>" rel="stylesheet">

  <link href="<?php echo base_url('assets/css/edit_style.css'); ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style.css'); ?>" rel="stylesheet">

</head>

<body>
  <div>
    <div class="wrapper wrapper--w790">
      <div class="card card-5 mt-4">
        <div class="card-heading">
          <h2 class="title">Edit Note</h2>
        </div>
        <div class="card-body">
          <?=form_open_multipart(base_url('home/fungsiUpdate'))?>

          <input type="hidden" name="id" value="<?php echo $queryNoteDetail->id; ?>">

          <div class="form-floating mb-3">
            <input name="Title" class="form-control" id="title" type="text" placeholder="Title"
              data-sb-validations="required" value="<?php echo $queryNoteDetail->title ?>" />
            <label for="title">Title</label>
            <div class="invalid-feedback" data-sb-feedback="title:required">Title is required.</div>
          </div>

          <div class="form-floating mb-3">
            <textarea name="Description" class="form-control" id="description" type="text" placeholder="Description"
              style="height: 10rem;" data-sb-validations="required"><?php echo $queryNoteDetail->description ?></textarea>
            <label for="description">Description</label>
            <div class="invalid-feedback" data-sb-feedback="description:required">Description is required.</div>
          </div>

          <div class="d-grid">
            <button class="btn btn-primary btn-lg " id="submitButton" type="submit">Submit</button>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>
