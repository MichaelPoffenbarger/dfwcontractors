<?php
// In a real application, you would sanitize this input and fetch data from a database
$service = isset($_GET['service']) ? $_GET['service'] : '';
?>

<h1 class="mb-4"><?php echo htmlspecialchars($service); ?> Contractors</h1>

<div class="mb-4">
    <div class="row">
        <div class="col-md-4">
            <label for="sort-select" class="form-label">Sort by:</label>
            <select id="sort-select" class="form-select">
                <option value="alphabetical">Alphabetical</option>
                <option value="rating">Rating</option>
                <option value="distance">Distance</option>
            </select>
        </div>
        <div class="col-md-4">
            <label for="location-input" class="form-label">Location:</label>
            <input type="text" id="location-input" class="form-control" placeholder="Enter zip code">
        </div>
    </div>
</div>

<div id="contractor-list" class="row">
    <?php
    // In a real application, you would fetch this data from a database based on the service category
    $contractors = [
        ['id' => 1, 'name' => 'ABC Contractors', 'rating' => 4.5, 'distance' => 2.3],
        ['id' => 2, 'name' => 'XYZ Services', 'rating' => 4.8, 'distance' => 1.7],
        ['id' => 3, 'name' => '123 Experts', 'rating' => 4.2, 'distance' => 3.1],
        ['id' => 4, 'name' => 'Best in Town', 'rating' => 4.9, 'distance' => 0.8],
        ['id' => 5, 'name' => 'Quality Work', 'rating' => 4.6, 'distance' => 1.5],
    ];

    foreach ($contractors as $contractor):
    ?>
    <div class="col-md-4 mb-4 contractor-item" data-name="<?php echo $contractor['name']; ?>" data-rating="<?php echo $contractor['rating']; ?>" data-distance="<?php echo $contractor['distance']; ?>">
        <div class="card contractor-card h-100">
            <div class="card-body">
                <h5 class="card-title"><?php echo $contractor['name']; ?></h5>
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
                <p class="card-text">Distance: <?php echo $contractor['distance']; ?> miles</p>
                <a href="index.php?page=contractor&id=<?php echo $contractor['id']; ?>" class="btn btn-primary">View Profile</a>
            </div>
        </div>
    </div>
    <?php endforeach; ?>
</div>

<script>
$(document).ready(function() {
    // Sorting functionality
    $('#sort-select').on('change', function() {
        var sortBy = $(this).val();
        var $containerEl = $('#contractor-list');
        var $items = $containerEl.children('.contractor-item');

        $items.sort(function(a, b) {
            var aVal, bVal;
            switch(sortBy) {
                case 'alphabetical':
                    aVal = $(a).data('name');
                    bVal = $(b).data('name');
                    return aVal.localeCompare(bVal);
                case 'rating':
                    aVal = parseFloat($(a).data('rating'));
                    bVal = parseFloat($(b).data('rating'));
                    return bVal - aVal; // Higher rating first
                case 'distance':
                    aVal = parseFloat($(a).data('distance'));
                    bVal = parseFloat($(b).data('distance'));
                    return aVal - bVal; // Shorter distance first
            }
        });

        $containerEl.append($items);
    });

    // Location filtering (simplified version)
    $('#location-input').on('input', function() {
        var zipCode = $(this).val();
        // In a real application, you would make an AJAX call to the server to filter contractors by location
        console.log('Filtering by zip code:', zipCode);
    });
});
</script>