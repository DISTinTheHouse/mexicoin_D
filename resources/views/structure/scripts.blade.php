<script>
    const openCart = document.getElementById('openCart');
    const closeCart = document.getElementById('closeCart');
    const cartPanel = document.getElementById('cartPanel');
    const cartOverlay = document.getElementById('cartOverlay');

    openCart.addEventListener('click', () => {
        cartPanel.classList.remove('translate-x-full');
        cartOverlay.classList.remove('hidden');
    });

    closeCart.addEventListener('click', () => {
        cartPanel.classList.add('translate-x-full');
        cartOverlay.classList.add('hidden');
    });

    cartOverlay.addEventListener('click', () => {
        cartPanel.classList.add('translate-x-full');
        cartOverlay.classList.add('hidden');
    });
    </script>

    <script>
    const toggleMenu = document.getElementById('toggleMenu');
    const menu = document.getElementById('menu');

    toggleMenu.addEventListener('click', () => {
        menu.classList.toggle('hidden');
    });
</script>  

<script>
    // Configurar Pusher

    var pusher = new Pusher('ad7a190d34e778b213f8', {
      cluster: 'us2'
    });

    // Suscribirse al canal
    var channel = pusher.subscribe('products');
    channel.bind('products.updated', function(data) {
        console.log("Productos actualizados, recargando...");
        location.reload(); // refresca la página completa
    });
</script>


<!-- Flowbite JS -->
<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>

<script src="./node_modules/preline/dist/preline.js"></script>

<script src="https://cdn.jsdelivr.net/npm/pagedone@1.2.2/src/js/pagedone.js"></script>
