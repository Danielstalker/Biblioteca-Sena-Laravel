<div>
    <!-- Sección de búsqueda -->
    <form wire:submit.prevent class="search-form">
    <input type="text" placeholder="Buscar libros..." class="search-input" wire:model.live="query">
    <button type="submit" class="search-button">Buscar</button>
</form>

        </form>
    </section>
       <section class="catalog">

        <div class="products">
            <!-- Producto 1 -->
            @foreach ($products as $product )

 <div class="product-card">
        <img src="{{ asset('storage/'.$product->image) }}" alt="{{ $product->name }}">
        <h3>{{ $product->name }}</h3>
        <p>{{ $product->descriptions }}</p>

    </div>
             @endforeach
        
            
    </section>
     <div class="pagination">
             {{ $products->links('vendor.pagination.custom') }}
        </div>
</div>
