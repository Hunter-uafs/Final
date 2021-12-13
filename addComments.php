<div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Comments</h5>
                        <p class="card-text">Add a new comment</p>
                        <form action="Comments.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="comment" class="form-label">Comment</label>
                            <input type="text" class="form-control mb-3" id="comment" name="comment" placeholder="Enter your Comment" required>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>