const productCards = document.querySelectorAll('.card');

    productCards.forEach(card => {
        const imageContainer = card.querySelector('.product-image-container');
        const addToCartBtn = card.querySelector('.add-to-cart-btn');
        let isTouched = false;

        imageContainer.addEventListener('touchstart', () => {
            isTouched = true;
            setTimeout(() => {
                if (isTouched) {
                    addToCartBtn.style.display = 'block';
                }
            }, 200);
        });

        document.addEventListener('touchend', () => {
            isTouched = false;
            addToCartBtn.style.display = 'none';
        });
    });