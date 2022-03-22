<?php
$title = 'создание постов';
@include_once __DIR__ . '/../header.php';
?>
<div style="width: 100%; display: flex; justify-content: center">
<div class="col-6 border border-1 rounded-2 mt-2 p-2" >
<form style="height: 300px;display: flex;flex-direction: column; justify-content: space-between">
    <div class="form-group">
        <label for="exampleInputEmail1">Enter title</label>
        <input <?= $isError('title', true) ?> name="title" type="TEXT" class="form-control" id="exampleInputEmail1" placeholder="Enter title">
        <?= $isError('description') ?>
    </div>
    <div class="form-group">
        <label for="exampleFormControlTextarea1">Description</label>
        <textarea <?= $isError('description', true) ?> name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
        <?= $isError('description') ?>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div></div>
<?php @include_once __DIR__ . '/../footer.php'; ?>