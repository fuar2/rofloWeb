let cart = JSON.parse(localStorage.getItem('cart')) || [];

function addToCart(productId, name, price) {
    const item = cart.find(item => item.id === productId);
    if (item) {
        item.quantity++;
    } else {
        cart.push({ id: productId, name, price, quantity: 1 });
    }
    updateCart();
}

function removeFromCart(productId) {
    cart = cart.filter(item => item.id !== productId);
    updateCart();
}

function updateCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
    document.getElementById('cart-count').innerText = cart.reduce((acc, item) => acc + item.quantity, 0);
    renderCartItems();
    calculateTotals();
}

function renderCartItems() {
    const cartItemsContainer = document.getElementById('cart-items');
    cartItemsContainer.innerHTML = '';
    cart.forEach(item => {
        const itemElement = document.createElement('div');
        itemElement.innerHTML = `
            <p>${item.name} - ${item.price} руб. x ${item.quantity}</p>
            <button onclick="removeFromCart(${item.id})">Удалить</button>
        `;
        cartItemsContainer.appendChild(itemElement);
    });
}

function calculateTotals() {
    const totalCost = cart.reduce((acc, item) => acc + item.price * item.quantity, 0);
    const discount = totalCost > 5000 ? totalCost * 0.1 : 0; // 10% скидка на сумму свыше 5000
    const finalCost = totalCost - discount;

    document.getElementById('total-cost').innerText = totalCost;
    document.getElementById('discount').innerText = discount;
    document.getElementById('final-cost').innerText = finalCost;
}

function openCartModal() {
    document.getElementById('cart-modal').style.display = 'block';
    document.getElementById('cart-overlay').style.display = 'block';
    renderCartItems();
}

function closeCartModal() {
    document.getElementById('cart-modal').style.display = 'none';
    document.getElementById('cart-overlay').style.display = 'none';
}

document.getElementById('cart-button').addEventListener('click', openCartModal);

// Инициализация корзины при загрузке страницы
updateCart();

function openDocument() {
    window.open('/documents/manual.pdf', '_blank');
}
let currentSlide = 0;

function renderSliderItems(products) {
    const wrapper = document.getElementById('slider-wrapper');
    wrapper.innerHTML = ''; // Очищаем слайдер перед добавлением элементов

    products.forEach(product => {
        const slide = document.createElement('div');
        slide.className = 'slider-item';
        slide.innerHTML = `
            <h3>${product.name}</h3>
            <p>${product.description}</p>
            <p>Цена: ${product.price} руб.</p>
        `;
        wrapper.appendChild(slide);
    });

    updateSlider(); // Обновляем положение всех слайдов
}

function updateSlider() {
    const slides = document.querySelectorAll('.slider-item');
    slides.forEach((slide, index) => {
        slide.style.transform = `translateX(${(index - currentSlide) * 100}%)`;
    });
}

function nextSlide() {
    const slides = document.querySelectorAll('.slider-item');
    if (slides.length > 0) {
        currentSlide = (currentSlide + 1) % slides.length;
        updateSlider();
    }
}

function prevSlide() {
    const slides = document.querySelectorAll('.slider-item');
    if (slides.length > 0) {
        currentSlide = (currentSlide - 1 + slides.length) % slides.length;
        updateSlider();
    }
}

document.addEventListener('DOMContentLoaded', () => {
    fetch('/getProducts.php')
        .then(response => response.json())
        .then(products => {
            renderSliderItems(products);
        })
        .catch(error => console.error('Ошибка загрузки товаров:', error));
});
let slideIndex = 0;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function showSlides(n) {
  let slides = document.getElementsByClassName("slide");
  if (n >= slides.length) { slideIndex = 0; }
  if (n < 0) { slideIndex = slides.length - 1; }
  for (let i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  slides[slideIndex].style.display = "block";
}