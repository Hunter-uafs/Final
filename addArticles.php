<div class="container">
        <div class="row">
            <div class="col">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Articles</h5>
                        <p class="card-text">Add a new Article.</p>
                        <form action="Articles.php" method="POST">
                            <input type="hidden" name="page" value="add">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" class="form-control mb-3" id="title" name="title" placeholder="Enter the title" required>
                            <label for="image" class="form-label">Image</label>
                            <input type="image" class="form-control mb-3" id="image" name="image">
                            <label for="content" class="form-label">Content</label>
                            <input type="text" class="form-control mb-3" id="content" name="content" placeholder="Enter the content" required>
                             <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>      
            </div>
        </div>
    </div>