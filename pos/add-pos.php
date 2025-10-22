<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point Of Sale</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous" />
    <link rel="stylesheet" href="../assets/css/pos.css" />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css" />
</head>

<body>

    <div class="container-fluid container-pos">

        <div class="row h-100">

            <div class="col-md-7 product-section">

                <div class="mb-4">
                    <h4 class="mb-3">
                        <i class="fas fa-store"></i>
                        Product
                    </h4>
                    <input type="text" id="searchProduct" class="form-control search-box" placeholder="Find Product ...">
                </div>

                <div class="mb-4">
                    <button class="btn btn-primary category-btn active">All Menu</button>
                    <button class="btn btn-outline-primary category-btn">Food</button>
                    <button class="btn btn-outline-primary category-btn">Drink</button>
                    <button class="btn btn-outline-primary category-btn">Snack</button>
                </div>

                <div class="row" id="productGrid">

                    <div class="col-md-4 col-sm-6">

                        <div class="card product-card">

                            <div class="product-img">
                                <img src="../assets/uploads/nasi.jpeg" width="100%">
                            </div>

                            <div class="card-body">
                                <span class="badge bg-secondary badge-category">Makanan</span>
                                <h6 class="card-title mt-2 mb-2">Nasi Goreng</h6>
                                <p class="card-text text-primary fw-bold">Rp. 25.000,-</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-6">

                        <div class="card product-card">

                            <div class="product-img">
                                <img src="../assets/uploads/nasi.jpeg" width="100%">
                            </div>

                            <div class="card-body">
                                <span class="badge bg-secondary badge-category">Makanan</span>
                                <h6 class="card-title mt-2 mb-2">Nasi Goreng</h6>
                                <p class="card-text text-primary fw-bold">Rp. 25.000,-</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-md-4 col-sm-6">

                        <div class="card product-card">

                            <div class="product-img">
                                <img src="../assets/uploads/nasi.jpeg" width="100%">
                            </div>

                            <div class="card-body">
                                <span class="badge bg-secondary badge-category">Makanan</span>
                                <h6 class="card-title mt-2 mb-2">Nasi Goreng</h6>
                                <p class="card-text text-primary fw-bold">Rp. 25.000,-</p>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

            <div class="col-md-5 cart-section">

                <div class="cart-header">
                    <h4>Cart</h4>
                    <small>Order #<span class="orderNumber">001</span></small>
                </div>

                <div class="cart-items" id="cart-items">
                    <div class="text-center text-muted mt-5">
                        <i class="bi bi-cart mb-3"></i>
                        <p>Cart Empty</p>
                    </div>
                </div>

                <div class="cart-footer">

                    <div class="total-section">

                        <div class="d-flex justify-content-between mb-2">
                            <span>Subtotal</span>
                            <span id="subtotal">Rp. 100.000,-</span>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <span>Tax(10%)</span>
                            <span id="tax">Rp. 10.000,-</span>
                        </div>

                        <div class="d-flex justify-content-between mb-2">
                            <span>Total</span>
                            <span id="total">Rp. 100.000,-</span>
                        </div>

                        <div class="row g-2">

                            <div class="col-md-6">
                                <button class="btn btn-chechout btn-outline-danger w-100">
                                    <i class="bi bi-trash"></i>Clear Cart
                                </button>
                            </div>

                            <div class="col-md-6">
                                <button class="btn btn-chechout btn-primary w-100">
                                    <i class="bi bi-cash"></i> Process Payment
                                </button>
                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
        crossorigin="anonymous">
    </script>

    <script>
        // variable : let(paling umum digunakan), var, const
        // php var : $, define, const

        let nama = "Sunandar Sujito";
        var name = "Sumi Sukamti";
        const fullname = "Joko Suminten"; //nilainya tetap, tidak boleh merubah nilai 

        // untuk output/print
        // document.write();
        // console.log({
        //     "nama": nama,
        //     "fullname": fullname
        // }); //paling umum menggunakan ini
        // alert();


        // operator
        let angka1 = 10;
        let angka2 = 20;
        console.log(angka1 + angka2);
        console.log(angka1 - angka2);
        console.log(angka1 / angka2);
        console.log(angka1 * angka2);
        console.log(angka1 % angka2);
        console.log(angka1 ** angka2);

        // operator penugasan
        let x = 10;
        x+=5;
        console.log(x);

        // operator pembandingan
        let a = 2;
        let b = 1;
        if(a === b){
            console.log("ya");
        }else{
            console.log("tidak");
        }
        console.log(a > b);
        console.log(a < b);

        let umur = 20;
        let p = true;
        if(umur >= 17 && p){
            console.log("Boleh driving");
        }else{
            console.log("tidak driving");
        }

        // array
        let buah = ['pisang', 'salak', 'semangka'];
        console.log("buah dikeranjang:", buah);
        console.log("saya mau buah:", buah[0]);
        buah[1] = "Nanas";
        console.log("buah baru dikeranjang:", buah);
        buah.push("pepaya"); //untuk menambah nilai baru
        console.log("Buah", buah);
        buah.pop(); //untuk menghapus nilai array terakhir
        console.log("buah", buah);
        
        
        

    </script>

</body>

</html>