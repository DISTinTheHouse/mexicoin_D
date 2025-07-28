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

<script src="https://cdn.jsdelivr.net/npm/flowbite@3.1.2/dist/flowbite.min.js"></script>