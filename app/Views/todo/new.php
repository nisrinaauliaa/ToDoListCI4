<?= $this->extend('base') ?>

<?= $this->section('content') ?>
    <div class="mb-4 mt-5">
        <br>
    <form action="/todo/create" method="post">
        <label for="title">To Do List</label>
        <br />
        <input type="varchar" id="title" placeholder="Input tile" name="title" />
        
        <br />
        <br />
        <label for="description">Description</label>
        <br />
        <input type="text" id="description" placeholder="Input description" name="description" />

        <br /> 
        <br />
        <label for="finished_at">Finished At</label>
        <br />
        <input type="datetime" id="finished_at" placeholder="Input finished" name="finished_at" />

        <br />
        <br />
        <button type="submit">Submit</button>
    </form>
    </div>
<?= $this->endSection() ?>