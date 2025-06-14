Route::resource('keranjang', KeranjangBelanjaController::class)->only([
    'index', 'create', 'store', 'destroy'
]);