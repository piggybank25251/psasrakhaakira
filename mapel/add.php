<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header row">
                <div class="card-title h3 col-8">Add Subject</div>
                <div class="col-4">
                    <a href="?m=mapel&s=view" class="btn btn-lg btn-primary float-end">Back</a>
                </div>
            </div>

            <div class="card-body">
                <form action="?m=mapel&s=save" method="post">
                    <div class="mb-3">
                    <input type="text" name="subject" class="form-control" placeholder="subject" required autofocus>
                    </div>
                    <div class="mb-2">
                    <input type="number" name="hour" class="form-control" placeholder="hour" required autofocus>
                    </div>
                    <div class="mb-3">
                        <input type="reset" class="btn btn-secondary">&nbsp;
                        <input type="submit" value="simpan" name="simpan" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>