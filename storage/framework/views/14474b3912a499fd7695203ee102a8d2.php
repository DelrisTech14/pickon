<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Email</title>
</head>
<body>
    <h1>Contact Form Submission</h1>
    <p><strong>Name:</strong> <?php echo e($details['name']); ?></p>
    <p><strong>Email:</strong> <?php echo e($details['email']); ?></p>
    <p><strong>Number:</strong> <?php echo e($details['number']); ?></p>
    <p><strong>Product:</strong> <?php echo e($details['product']); ?></p>
    <p><strong>Query:</strong> <?php echo e($details['query']); ?></p>
</body>
</html>
<?php /**PATH C:\laragon\www\pecon\resources\views/email/view.blade.php ENDPATH**/ ?>