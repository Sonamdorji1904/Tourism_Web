# Tours Data Fetching - Complete Guide

## Overview

This guide explains how to fetch all data from the `tours` table.

## Methods Available

### 1. **findAllTours()** - Fetch All Tours

Fetches all tours from the database.

```php
<?php
require_once "./controller/connects/TourCard.php";

$tourCard = new TourCard();

// Get all tours
$allTours = $tourCard->findAllTours();
?>
```

### 2. **getTourCount()** - Get Total Count

Get the total number of tours in the database.

```php
<?php
$tourCard = new TourCard();
$totalTours = $tourCard->getTourCount();
echo "Total tours: " . $totalTours;
?>
```

### 3. **findTourById()** - Fetch Single Tour

Fetch a specific tour by ID.

```php
<?php
$tourCard = new TourCard();
$tour = $tourCard->findTourById(1);

if ($tour) {
    echo $tour['title'];
    echo $tour['description'];
    echo $tour['duration'];
} else {
    echo "Tour not found";
}
?>
```

## Complete Usage Examples

### Example 1: Display All Tours

```php
<?php
require_once "./controller/connects/TourCard.php";

$tourCard = new TourCard();
$tours = $tourCard->findAllTours();
$totalCount = $tourCard->getTourCount();

foreach ($tours as $tour) {
    echo $tour['title'];
    echo $tour['duration'];
    echo $tour['description'];
}
?>
```

### Example 2: API Endpoint (JSON Response)

```php
<?php
require_once "./controller/connects/TourCard.php";

header('Content-Type: application/json');

$tourCard = new TourCard();
$tours = $tourCard->findAllTours();
$totalCount = $tourCard->getTourCount();

echo json_encode([
    'success' => true,
    'data' => $tours,
    'total' => $totalCount
]);
?>
```

### Example 3: Simple Loop

```php
<?php
require_once "./controller/connects/TourCard.php";

$tourCard = new TourCard();
$tours = $tourCard->findAllTours();

foreach ($tours as $tour) {
    ?>
    <div class="tour-item">
        <h3><?php echo htmlspecialchars($tour['title']); ?></h3>
        <p><?php echo htmlspecialchars($tour['duration']); ?></p>
        <img src="<?php echo htmlspecialchars($tour['image_path']); ?>" alt="Tour">
    </div>
    <?php
}
?>
```

## Database Tour Fields

The `tours` table contains the following fields:

- `id` - Tour ID (Primary Key)
- `title` - Tour Title
- `description` - Tour Description
- `duration` - Duration (e.g., "4 Days")
- `image_path` - Path to tour image
- `key_destinations` - Key destinations (comma-separated)
- `experience` - Experience type
- `theme` - Tour theme
- `created_at` - Created timestamp

## API Endpoints

### Fetch Tours as JSON

```
GET /controller/fetch_all_tours.php?json=1
```

Response:

```json
{
  "success": true,
  "data": [
    {
      "id": 1,
      "title": "Bhutan Tour",
      "description": "...",
      "duration": "4 Days",
      "image_path": "uploads/...",
      "key_destinations": "Paro, Thimphu",
      "theme": "Cultural"
    }
  ],
  "total": 5
}
```

## Files Created/Modified

### New Files:

1. **controller/fetch_all_tours.php** - API controller for fetching tours
2. **all-tours.html.php** - Page displaying all tours

### Modified Files:

1. **model/BaseModel.php** - Added:

   - `findAll()` - Fetch all records
   - `count()` - Get total count

2. **controller/connects/TourCard.php** - Added:
   - `findAllTours()` - Fetch all tours
   - `getTourCount()` - Get total tour count

## Usage Tips

### 1. Always Check for Null

```php
$tours = $tourCard->findAllTours();
if ($tours === null) {
    echo "Error fetching tours";
} else if (empty($tours)) {
    echo "No tours found";
}
```

### 2. Sanitize Output

```php
echo htmlspecialchars($tour['title']); // Prevent XSS
```

### 3. Error Handling

```php
try {
    $tours = $tourCard->findAllTours();
} catch (Throwable $e) {
    error_log('Error: ' . $e->getMessage());
    $tours = [];
}
```

## Examples in Your Application

### Homepage - Show All Tours

```php
<?php
$tourCard = new TourCard();
$tours = $tourCard->findAllTours();
?>
```

### Tours Listing Page

```php
<?php
$tourCard = new TourCard();
$tours = $tourCard->findAllTours();
$totalTours = $tourCard->getTourCount();
?>
```

### Admin Dashboard - Tour Statistics

```php
<?php
$tourCard = new TourCard();
$totalTours = $tourCard->getTourCount();
$allTours = $tourCard->findAllTours();
?>
```

## Troubleshooting

### No tours returned?

- Check database connection
- Verify tours exist in database
- Check error logs

### Null results?

- Check exception handling
- Review error logs at `/Applications/XAMPP/xamppfiles/logs/php_error_log`
