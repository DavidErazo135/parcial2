<?php echo $this->extend('index');?>

<?php echo $this->section('content');?>



<div class='container'>
<select class="form-select form-select-lg mb-3" aria-label="Large select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>

<select class="form-select form-select-sm" aria-label="Small select example">
  <option selected>Open this select menu</option>
  <option value="1">One</option>
  <option value="2">Two</option>
  <option value="3">Three</option>
</select>

<?php echo $this->Endsection('content');?>