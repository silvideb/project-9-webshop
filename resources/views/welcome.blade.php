<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Webshop</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">Webshop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="products.php">Shop</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="bg-primary text-white text-center py-5">
        <div class="container">
            <h1>Welcome to Our Webshop</h1>
            <p class="lead">Find the best products at unbeatable prices!</p>
            <a href="#" class="btn btn-light btn-lg">Shop Now</a>
        </div>
    </header>

    <section class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Featured Products</h2>
            <div class="row">

                @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product 1">
                        <div class="card-body">
                            <h5 class="card-title">Product 1</h5>
                            <p class="card-text">$19.99</p>
                            <a href="{{route('add-product-to-cart', $product->id)}}" class="btn btn-primary"">Add to Cart</a>
                        </div>
                        
                       
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product 2">
                        <div class="card-body">
                            <h5 class="card-title">Product 2</h5>
                            <p class="card-text">$29.99</p>
                            <a href="#" class="btn btn-primary" onclick="koopProduct()">Add to Cart</a>
                        </div>
                        
                        <script>
                            function koopProduct() {
                                let keuze = confirm("Wil je doorgaan met winkelen?\nOK = Doorgaan met winkelen\nAnnuleren = Naar winkelwagen");
                                
                                if (keuze) {
                                    // Doorgaan met winkelen (bijvoorbeeld terug naar de productenpagina)
                                    window.location.href = "products/index.php"; 
                                } else {
                                    // Naar winkelwagen
                                    window.location.href = "winkelwagen.php";
                                }
                            }
                        </script>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-md-4">
                    <div class="card">
                        <img src="https://via.placeholder.com/300" class="card-img-top" alt="Product 3">
                        <div class="card-body">
                            <h5 class="card-title">Product 3</h5>
                            <p class="card-text">$39.99</p>
                            <a href="#" class="btn btn-primary" onclick="koopProduct()">Add to Cart</a>
                        </div>
                        
                        <script>
                            function koopProduct() {
                                let keuze = confirm("Wil je doorgaan met winkelen?\nOK = Doorgaan met winkelen\nAnnuleren = Naar winkelwagen");
                                
                                if (keuze) {
                                    // Doorgaan met winkelen (bijvoorbeeld terug naar de productenpagina)
                                    window.location.href = "products/index.php"; 
                                } else {
                                    // Naar winkelwagen
                                    window.location.href = "winkelwagen.php";
                                }
                            }
                        </script>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2023 Webshop. All rights reserved.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>