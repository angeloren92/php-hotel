<?php

    $hotels = [

        [
            'name' => 'Hotel Belvedere',
            'description' => 'Hotel Belvedere Descrizione',
            'parking' => true,
            'vote' => 4,
            'distance_to_center' => 10.4
        ],
        [
            'name' => 'Hotel Futuro',
            'description' => 'Hotel Futuro Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 2
        ],
        [
            'name' => 'Hotel Rivamare',
            'description' => 'Hotel Rivamare Descrizione',
            'parking' => false,
            'vote' => 1,
            'distance_to_center' => 1
        ],
        [
            'name' => 'Hotel Bellavista',
            'description' => 'Hotel Bellavista Descrizione',
            'parking' => false,
            'vote' => 5,
            'distance_to_center' => 5.5
        ],
        [
            'name' => 'Hotel Milano',
            'description' => 'Hotel Milano Descrizione',
            'parking' => true,
            'vote' => 2,
            'distance_to_center' => 50
        ],

    ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

    <header>
<!-- As a link -->
        <nav class="navbar bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
            </div>
        </nav>
    </header>

   <main class="container py-3">

        <section class="py-3">
            <div class="row row-cols-1 row-cols-md-2 g-3">
                <div class="col">
                    <label for="Parking" class="text-muted">Serve Parcheggio?</label>
                    <select class="form-select" aria-label="Parking">
                        <option selected disabled>Scegli...</option>
                        <option value="1">SI</option>
                        <option value="2">NO</option>
                    </select>
                </div>
                <div class="col">
                    <label for="Vote" class="text-muted">Scegli livello Valutazione</label>
                    <select class="form-select" aria-label="Vote">
                        <option selected disabled>Scegli...</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="3">4</option>
                        <option value="3">5</option>
                    </select>
                </div>
            </div>
        </section>

        <section class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-3 mt-3">
            <?php foreach ($hotels as $hotel): ?>
                <div class="col">
                    <div class="card h-100 shadow">
                        <div class="card-header bg-light">
                            <h3 class="h5 mb-0 py-1 font-monospace">
                                <?php echo $hotel["name"]; ?>
                            </h3>
                        </div>
                        <div class="card-body d-flex flex-col justify-content-between">
                            <div>
                                <p class="text-muted small">
                                    <?php echo $hotel["description"]; ?>
                                </p>
                                <ul class="list-unstyled text-secondary small my-3">
                                    <li>Voto: <strong><?php echo $hotel["vote"]; ?>/5</strong></li>
                                    <li>Distanza dal centro: <strong><?php echo $hotel["distance_to_center"]; ?> km</strong></li>
                                </ul>
                            </div>
                            
                            <div class="pt-2 border-t">
                                <?php if ($hotel["parking"] === true): ?>
                                    <span class="text-success fw-semibold small">
                                        <i class="bi bi-car-front-fill me-1"></i> 
                                    </span>
                                <?php else: ?>
                                    <span class="text-danger fw-semibold small">
                                        <i class="bi bi-x-circle-fill me-1"></i> 
                                    </span>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>        
                </div>
            <?php endforeach; ?>
        </section>

    </main>
    
    <footer>

    </footer>

</body>
</html>