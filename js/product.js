// js/product.js

// Array to store product data
const products = [
    {
        name: "Áo Dài Ngũ Thân Tay Chẵn học sinh vải lụa văn cho nữ",
        price: "690.000₫",
        image: "img/product/img1.jpg"
    },
    {
        name: "Áo ngũ thân cách tân viền lục giác (Unisex)",
        price: "390.000₫",
        image: "img/product/img2.jpg"
    },
    {
        name: "Áo Ngũ Thân cách tân Xuân Hiểu",
        price: "890.000₫",
        image: "img/product/img3.jpg"
    },
    // Add more products here as needed
];

// Function to display products
function displayProducts() {
    const productContainer = document.querySelector('.product');

    // Clear existing content in the product container
    productContainer.innerHTML = '';

    // Loop through the products array and create product elements
    products.forEach((product) => {
        const productItem = document.createElement('div');
        productItem.classList.add('product-item');

        productItem.innerHTML = `
            <img src="${product.image}" alt="${product.name}">
            <h4>${product.name}</h4>
            <p>${product.price}</p>
        `;

        // Append each product item to the product container
        productContainer.appendChild(productItem);
    });
}
document.addEventListener("DOMContentLoaded", function() {
    console.log("DOM is loaded");
    displayProducts();
});
// Ensure DOM is fully loaded before displaying products
document.addEventListener("DOMContentLoaded", displayProducts);
displayProducts();

