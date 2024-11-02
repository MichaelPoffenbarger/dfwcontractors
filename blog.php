<h1 class="mb-4">Contractor Blog</h1>

<div class="row">
    <div class="col-md-8">
        <?php
        // In a real application, you would fetch this data from a database
        $blog_posts = [
            ['id' => 1, 'title' => '10 Tips for Hiring the Right Contractor', 'author' => 'Admin', 'date' => '2023-06-01', 'excerpt' => 'Finding the right contractor can be challenging. Here are 10 tips to help you make the right choice...'],
            ['id' => 2, 'title' => 'Understanding Building Permits', 'author' => 'Jane Doe', 'date' => '2023-05-28', 'excerpt' => 'Building permits are an essential part of any construction project. In this post, we\'ll explain what they are and why they\'re important...'],
            ['id' => 3, 'title' => 'The Importance of Regular Home Maintenance', 'author' => 'John Smith', 'date' => '2023-05-25', 'excerpt' => 'Regular home maintenance can save you money and prevent major issues down the line. Here\'s what you need to know...'],
        ];

        foreach ($blog_posts as $post):
        ?>
        <div class="blog-post">
            <h2><?php echo $post['title']; ?></h2>
            <p class="text-muted">
                Posted by <?php echo $post['author']; ?> on <?php echo $post['date']; ?>
            </p>
            <p><?php echo $post['excerpt']; ?></p>
            <a href="index.php?page=blog&post_id=<?php echo $post['id']; ?>" class="btn btn-primary">Read More</a>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="col-md-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Categories</h5>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="#">Home Improvement</a></li>
                    <li class="list-group-item"><a href="#">Hiring Tips</a></li>
                    <li class="list-group-item"><a href="#">DIY Projects</a></li>
                    <li class="list-group-item"><a href="#">Industry News</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>