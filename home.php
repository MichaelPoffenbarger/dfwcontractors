<div class="jumbotron bg-primary text-white text-center py-5 mb-4">
    <h1 class="display-4">Welcome to Contractor Hub</h1>
    <p class="lead">Your one-stop destination for finding top-rated contractors and expert advice</p>
    <a href="#featured-sections" class="btn btn-light btn-lg mt-3">Explore Now</a>
</div>

<div id="featured-sections" class="row mb-4">
    <div class="col-md-6">
        <div class="card h-100">
            <div class="card-body">
                <h2 class="card-title">Find a Contractor</h2>
                <p class="card-text">Browse our curated list of top-rated contractors in various specialties.</p>
                <a href="index.php?page=contractors" class="btn btn-primary">View Contractors</a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card h-100">
            <div class="card-body">
                <h2 class="card-title">Contractor Blog</h2>
                <p class="card-text">Read expert advice, tips, and industry insights on our blog.</p>
                <a href="index.php?page=blog" class="btn btn-primary">Read Blog</a>
            </div>
        </div>
    </div>
</div>

<section class="featured-contractors mb-4">
    <h2 class="text-center mb-4">Featured Contractors</h2>
    <div class="row">
        <?php
        // In a real application, you would fetch this data from a database
        $featured_contractors = [
            ['id' => 1, 'name' => 'John Doe Construction', 'category' => 'General Contractor', 'rating' => 4.5],
            ['id' => 2, 'name' => 'Jane Smith Plumbing', 'category' => 'Plumber', 'rating' => 5],
            ['id' => 3, 'name' => 'Bob\'s Electric', 'category' => 'Electrician', 'rating' => 4],
        ];

        foreach ($featured_contractors as $contractor):
        ?>
        <div class="col-md-4 mb-4">
            <div class="card contractor-card h-100">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $contractor['name']; ?></h5>
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $contractor['category']; ?></h6>
                    <div class="rating mb-2">
                        <?php
                        for ($i = 1; $i <= 5; $i++) {
                            if ($i <= $contractor['rating']) {
                                echo '<i class="fas fa-star"></i>';
                            } elseif ($i - 0.5 <= $contractor['rating']) {
                                echo '<i class="fas fa-star-half-alt"></i>';
                            } else {
                                echo '<i class="far fa-star"></i>';
                            }
                        }
                        ?>
                        <span class="ml-1"><?php echo $contractor['rating']; ?></span>
                    </div>
                    <a href="index.php?page=contractors&id=<?php echo $contractor['id']; ?>" class="btn btn-outline-primary btn-sm">View Profile</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="text-center">
        <a href="index.php?page=contractors" class="btn btn-primary">View All Contractors</a>
    </div>
</section>

<section class="recent-blog-posts mb-4">
    <h2 class="text-center mb-4">Recent Blog Posts</h2>
    <div class="row">
        <?php
        // In a real application, you would fetch this data from a database
        $recent_posts = [
            ['id' => 1, 'title' => '10 Tips for Hiring the Right Contractor', 'excerpt' => 'Finding the right contractor can be challenging. Here are 10 tips to help you make the right choice...'],
            ['id' => 2, 'title' => 'Understanding Building Permits', 'excerpt' => 'Building permits are an essential part of any construction project. In this post, we\'ll explain what they are and why they\'re important...'],
            ['id' => 3, 'title' => 'The Importance of Regular Home Maintenance', 'excerpt' => 'Regular home maintenance can save you money and prevent major issues down the line. Here\'s what you need to know...'],
        ];

        foreach ($recent_posts as $post):
        ?>
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $post['title']; ?></h5>
                    <p class="card-text"><?php echo substr($post['excerpt'], 0, 100) . '...'; ?></p>
                    <a href="index.php?page=blog&post_id=<?php echo $post['id']; ?>" class="btn btn-outline-primary btn-sm">Read More</a>
                </div>
            </div>
        </div>
        <?php endforeach; ?>
    </div>
    <div class="text-center">
        <a href="index.php?page=blog" class="btn btn-primary">View All Blog Posts</a>
    </div>
</section>

<section class="cta-section bg-light p-5 text-center">
    <h2 class="mb-4">Join Our Community</h2>
    <p class="lead mb-4">Get access to exclusive content, connect with top contractors, and stay updated with the latest industry news.</p>
    <a href="index.php?page=register" class="btn btn-primary btn-lg">Sign Up Now</a>
</section>